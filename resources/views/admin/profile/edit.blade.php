<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <div class="h-12 w-12 rounded-xl bg-green-700 text-white flex items-center justify-center shadow-md">
                <i class="fas fa-user-gear text-lg"></i>
            </div>
            <div>
                <h2 class="font-bold text-2xl text-gray-800 leading-tight">Pengaturan Profil Admin</h2>
                <p class="text-sm text-gray-500 mt-1">Kelola informasi akun dan keamanan data Anda di sini.</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-2xl border border-green-100">
                <div class="max-w-xl">
                    @include('admin.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-2xl border border-green-100">
                <div class="max-w-xl">
                    @include('admin.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-2xl border border-red-100">
                <div class="max-w-xl">
                    @include('admin.profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>