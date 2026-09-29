<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PpdbController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status');
        $q = $request->get('q');

        $query = Ppdb::when($status, function ($query) use ($status) {
            $query->where('status', $status);
        })->when($q, function ($query) use ($q) {
            $query->where(function ($sub) use ($q) {
                $sub->where('nama_lengkap', 'like', "%{$q}%")
                    ->orWhere('nisn', 'like', "%{$q}%")
                    ->orWhere('no_pendaftaran', 'like', "%{$q}%")
                    ->orWhere('asal_sekolah', 'like', "%{$q}%");
            });
        })->latest();

        $ppdbs = $query->paginate(10)->withQueryString();

        $counts = [
            'semua' => Ppdb::count(),
            'pending' => Ppdb::where('status', 'pending')->count(),
            'diterima' => Ppdb::where('status', 'diterima')->count(),
            'ditolak' => Ppdb::where('status', 'ditolak')->count(),
        ];

        return view('admin.ppdb.index', compact('ppdbs', 'status', 'q', 'counts'));
    }

    public function show(Ppdb $ppdb)
    {
        return view('admin.ppdb.show', compact('ppdb'));
    }

    public function updateStatus(Request $request, Ppdb $ppdb)
    {
        $request->validate([
            'status' => 'required|in:pending,diterima,ditolak',
        ]);

        $ppdb->update([
            'status' => $request->status,
        ]);

        return redirect()->route('ppdb.show', $ppdb)->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    public function destroy(Ppdb $ppdb)
    {
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('success', 'Data pendaftar PPDB berhasil dihapus.');
    }

    public function export(Request $request): StreamedResponse
    {
        $status = $request->get('status');
        $q = $request->get('q');

        $filename = 'ppdb-' . date('Y-m-d') . '.csv';

        $query = Ppdb::when($status, function ($query) use ($status) {
            $query->where('status', $status);
        })->when($q, function ($query) use ($q) {
            $query->where(function ($sub) use ($q) {
                $sub->where('nama_lengkap', 'like', "%{$q}%")
                    ->orWhere('nisn', 'like', "%{$q}%")
                    ->orWhere('no_pendaftaran', 'like', "%{$q}%")
                    ->orWhere('asal_sekolah', 'like', "%{$q}%");
            });
        })->orderBy('created_at');

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        return response()->streamDownload(function () use ($query) {
            $out = fopen('php://output', 'w');
            fprintf($out, chr(0xEF) . chr(0xBB) . chr(0xBF)); // BOM agar Excel membaca UTF-8

            fputcsv($out, ['No. Pendaftaran', 'Nama Lengkap', 'NISN', 'Jenis Kelamin', 'Asal Sekolah', 'Jurusan Pilihan', 'No. HP', 'Alamat', 'Status', 'Tanggal Daftar']);

            $query->chunk(200, function ($rows) use ($out) {
                foreach ($rows as $row) {
                    fputcsv($out, [
                        $row->no_pendaftaran,
                        $row->nama_lengkap,
                        $row->nisn,
                        $row->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan',
                        $row->asal_sekolah,
                        $row->jurusan_pilihan,
                        $row->no_hp,
                        $row->alamat,
                        $row->status,
                        $row->created_at->format('d/m/Y H:i'),
                    ]);
                }
            });

            fclose($out);
        }, $filename, $headers);
    }
}
