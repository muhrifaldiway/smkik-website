<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status');
        
        $query = Ppdb::latest();
        if ($status) {
            $query->where('status', $status);
        }
        
        $ppdbs = $query->paginate(10)->withQueryString();
        return view('admin.ppdb.index', compact('ppdbs', 'status'));
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

        return redirect()->route('ppdb.index')->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    public function destroy(Ppdb $ppdb)
    {
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('success', 'Data pendaftar PPDB berhasil dihapus.');
    }
}