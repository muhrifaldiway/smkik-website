<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Pengaturan Profil Admin') }}
        </h2>
        <p class="text-sm text-gray-600 mt-1">Kelola informasi akun dan keamanan data Anda di sini.</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-xl border border-gray-100">
                <div class="max-w-xl">
                    {{-- Pastikan path include mengarah ke folder admin/profile/partials --}}
                    @include('admin.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-xl border border-gray-100">
                <div class="max-w-xl">
                    @include('admin.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-xl border border-gray-100">
                <div class="max-w-xl">
                    @include('admin.profile.partials.delete-user-form')
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>