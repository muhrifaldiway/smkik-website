<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-900 via-green-950 to-green-900 px-4 py-10">

        <div class="w-full max-w-6xl">

            <div class="grid lg:grid-cols-2 overflow-hidden rounded-3xl shadow-2xl">

                <!-- ========================= -->
                <!-- PANEL KIRI -->
                <!-- ========================= -->
                <div class="hidden lg:flex flex-col justify-center bg-gradient-to-br from-green-900 via-slate-900 to-green-950 p-12">

                    <img
                        src="{{ asset('assets/img/smkik/logoputih.png') }}"
                        alt="SMKIK"
                        class="w-80 mb-6">

                    <h1 class="text-4xl font-bold text-white leading-tight">
                        Sistem Informasi
                        <br>
                        SMK Informatika Komputer
                        <br>
                        Ampana Kota
                    </h1>

                    <p class="text-slate-300 mt-6 text-lg leading-relaxed">
                        Portal administrasi sekolah untuk mengelola berita,
                        program keahlian, informasi sekolah, galeri kegiatan,
                        serta seluruh konten website sekolah secara terpusat.
                    </p>

                    <div class="grid grid-cols-3 gap-4 mt-10">

                        <div class="bg-white/10 rounded-xl p-4 text-center">
                            <h3 class="text-3xl font-bold text-white">3</h3>
                            <p class="text-slate-300 text-sm">
                                Program Keahlian
                            </p>
                        </div>

                        <div class="bg-white/10 rounded-xl p-4 text-center">
                            <h3 class="text-3xl font-bold text-white">24/7</h3>
                            <p class="text-slate-300 text-sm">
                                Akses Online
                            </p>
                        </div>

                        <div class="bg-white/10 rounded-xl p-4 text-center">
                            <h3 class="text-3xl font-bold text-white">100%</h3>
                            <p class="text-slate-300 text-sm">
                                Digital
                            </p>
                        </div>

                    </div>

                </div>

                <!-- ========================= -->
                <!-- PANEL KANAN -->
                <!-- ========================= -->
                <div class="bg-white p-8 md:p-12 lg:p-16">

                    <!-- Logo Mobile -->
                    <div class="lg:hidden text-center mb-8">

                        <img
                            src="{{ asset('assets/img/logo.svg') }}"
                            alt="SMKIK"
                            class="w-24 mx-auto mb-4">

                        <h2 class="text-2xl font-bold text-gray-800">
                            Login Admin
                        </h2>

                        <p class="text-gray-500 mt-2">
                            SMK Informatika Komputer Ampana Kota
                        </p>

                    </div>

                    <!-- Desktop Title -->
                    <div class="hidden lg:block mb-8">

                        <h2 class="text-3xl font-bold text-gray-800">
                            Login Admin
                        </h2>

                        <p class="text-gray-500 mt-2">
                            Silakan masuk menggunakan akun administrator.
                        </p>

                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status
                        class="mb-4"
                        :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-5">

                            <x-input-label
                                for="email"
                                :value="__('Email')"
                                class="mb-2" />

                            <x-text-input
                                id="email"
                                class="block w-full rounded-xl border-gray-300"
                                type="email"
                                name="email"
                                :value="old('email')"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Masukkan email admin" />

                            <x-input-error
                                :messages="$errors->get('email')"
                                class="mt-2" />

                        </div>

                        <!-- Password -->
                        <div class="mb-5">

                            <x-input-label
                                for="password"
                                :value="__('Password')"
                                class="mb-2" />

                            <x-text-input
                                id="password"
                                class="block w-full rounded-xl border-gray-300"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Masukkan password" />

                            <x-input-error
                                :messages="$errors->get('password')"
                                class="mt-2" />

                        </div>

                        <!-- Remember & Forgot -->
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-3 mb-6">

                            <label for="remember_me" class="inline-flex items-center">

                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    class="rounded border-gray-300 text-green-700 shadow-sm focus:ring-green-600"
                                    name="remember">

                                <span class="ms-2 text-sm text-gray-600">
                                    Ingat Saya
                                </span>

                            </label>

                            @if (Route::has('password.request'))
                                <a
                                    class="text-sm text-green-700 hover:text-green-900"
                                    href="{{ route('password.request') }}">

                                    Lupa Password?

                                </a>
                            @endif

                        </div>

                        <!-- Login Button -->
                        <button
                            type="submit"
                            class="w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-3 rounded-xl transition duration-300 shadow-lg">

                            Login ke Dashboard

                        </button>

                        <div class="mt-6 text-center">

                            <p class="text-sm text-gray-600">
                                Belum memiliki akun?
                            </p>
                        
                            <p class="text-sm text-green-700 font-medium">
                                Silakan hubungi Administrator Sistem.
                            </p>
                        
                        </div>

                        <!-- Kembali ke Beranda -->
                            <div class="mt-4 text-center">

                                <a href="{{ route('home') }}"
                                class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-green-700 transition">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 19l-7-7 7-7" />

                                    </svg>

                                    Kembali ke Beranda

                                </a>

                            </div>
                    </form>

                    <!-- Footer -->
                    <div class="text-center mt-8 text-sm text-gray-500">

                        © {{ date('Y') }}
                        SMK Informatika Komputer Ampana Kota

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-guest-layout>