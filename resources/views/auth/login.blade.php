<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 py-10" style="background: #0b2819;">
        <div class="w-full max-w-6xl">
            <div class="h-1.5 rounded-t-3xl" style="background: linear-gradient(90deg, #123d27 0 38%, #b42318 38% 58%, #e3b10c 58% 100%);"></div>
            <div class="grid lg:grid-cols-2 overflow-hidden rounded-b-3xl shadow-2xl">
                <div class="hidden lg:flex flex-col justify-center p-12" style="background: #123d27;">
                    <img src="{{ asset('assets/img/smkik/logoputih.png') }}" alt="SMKIK" class="w-80 mb-6">
                    <h1 class="text-4xl font-bold text-white leading-tight">
                        Sistem Informasi
                        <br>
                        SMK Informatika Komputer
                        <br>
                        Ampana Kota
                    </h1>
                    <p class="mt-6 text-lg leading-relaxed" style="color: #f6e6a4;">
                        Portal administrasi sekolah untuk mengelola berita,
                        program keahlian, informasi sekolah, galeri kegiatan,
                        serta seluruh konten website sekolah secara terpusat.
                    </p>
                    <div class="grid grid-cols-3 gap-4 mt-10">
                        <div class="rounded-xl p-4 text-center" style="background: rgba(227,177,12,0.15);">
                            <h3 class="text-3xl font-bold" style="color: #e3b10c;">3</h3>
                            <p class="text-sm text-white/80">Program Keahlian</p>
                        </div>
                        <div class="rounded-xl p-4 text-center" style="background: rgba(180,35,24,0.22);">
                            <h3 class="text-3xl font-bold text-white">24/7</h3>
                            <p class="text-sm text-white/80">Akses Online</p>
                        </div>
                        <div class="rounded-xl p-4 text-center" style="background: rgba(255,255,255,0.08);">
                            <h3 class="text-3xl font-bold text-white">100%</h3>
                            <p class="text-sm" style="color: #f6e6a4;">Digital</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-12 lg:p-16" style="background: #fffdf8;">
                    <div class="lg:hidden text-center mb-8">
                        <img src="{{ asset('assets/img/logo.svg') }}" alt="SMKIK" class="w-24 mx-auto mb-4">
                        <h2 class="text-2xl font-bold" style="color: #123d27;">Login Admin</h2>
                        <p class="mt-2" style="color: #b42318;">SMK Informatika Komputer Ampana Kota</p>
                    </div>

                    <div class="hidden lg:block mb-8">
                        <h2 class="text-3xl font-bold" style="color: #123d27;">Login Admin</h2>
                        <p class="mt-2" style="color: #4a5c50;">Silakan masuk menggunakan akun administrator.</p>
                    </div>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-5">
                            <x-input-label for="email" :value="__('Email')" class="mb-2" />
                            <x-text-input
                                id="email"
                                class="block w-full rounded-xl"
                                type="email"
                                name="email"
                                :value="old('email')"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Masukkan email admin" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="password" :value="__('Password')" class="mb-2" />
                            <x-text-input
                                id="password"
                                class="block w-full rounded-xl"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Masukkan password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-3 mb-6">
                            <label for="remember_me" class="inline-flex items-center">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    class="rounded shadow-sm"
                                    style="border-color: #d9cba8; color: #123d27;"
                                    name="remember">
                                <span class="ms-2 text-sm" style="color: #4a5c50;">Ingat Saya</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a class="text-sm font-semibold" style="color: #b42318;" href="{{ route('password.request') }}">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>

                        <button
                            type="submit"
                            class="w-full font-semibold py-3 rounded-xl transition duration-300 shadow-lg"
                            style="background: #e3b10c; color: #0b2819;">
                            Login ke Dashboard
                        </button>

                        <div class="mt-6 text-center">
                            <p class="text-sm" style="color: #4a5c50;">Belum memiliki akun?</p>
                            <p class="text-sm font-medium" style="color: #123d27;">Silakan hubungi Administrator Sistem.</p>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-medium" style="color: #b42318;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                                Kembali ke Beranda
                            </a>
                        </div>
                    </form>

                    <div class="text-center mt-8 text-sm" style="color: #4a5c50;">
                        © {{ date('Y') }} SMK Informatika Komputer Ampana Kota
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
