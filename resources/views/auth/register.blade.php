<x-guest-layout>
    <div class="w-full max-w-md mx-auto bg-white rounded-xl shadow-md p-8">

        {{-- Logo --}}
        <div class="text-center mb-4">
            <img src="{{ asset('images/logo.png') }}" class="mx-auto w-14" alt="Logo">
        </div>

        <h2 class="text-center text-2xl font-bold mb-1">Daftar Akun Baru</h2>
        <p class="text-center text-gray-600 mb-6">Silakan isi data berikut untuk membuat akun</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nama Lengkap --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                       class="w-full px-3 py-2 border rounded-lg focus:border-purple-500">
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-3 py-2 border rounded-lg focus:border-purple-500">
            </div>

            {{-- Password --}}
            <div class="mb-4 relative">
                <label class="block mb-1 font-semibold">Password</label>

                <input type="password" id="password" name="password" required
                    class="w-full px-3 py-2 border rounded-lg focus:border-purple-500">

                <!-- ICON MATA -->
                <span onclick="toggleRegisterPassword()"
                    class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer">

                    <!-- eye open -->
                    <svg id="eyeOpenReg1" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>

                    <!-- eye closed -->
                    <svg id="eyeClosedReg1" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-black hidden" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 012.24-3.95M9.88 9.88a3 3 0 104.24 4.24M6.1 6.1L3 3m18 18l-3.1-3.1" />
                    </svg>
                </span>
            </div>

            {{-- Konfirmasi Password --}}
            <div class="mb-4 relative">
                <label class="block mb-1 font-semibold">Konfirmasi Password</label>

                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-3 py-2 border rounded-lg focus:border-purple-500">

                <!-- ICON MATA -->
                <span onclick="toggleRegisterPasswordConfirm()"
                    class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer">

                    <!-- eye open -->
                    <svg id="eyeOpenReg2" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>

                    <!-- eye closed -->
                    <svg id="eyeClosedReg2" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-black hidden" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 012.24-3.95M9.88 9.88a3 3 0 104.24 4.24M6.1 6.1L3 3m18 18l-3.1-3.1" />
                    </svg>
                </span>
            </div>


            {{-- Tempat & Tanggal Lahir --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Tempat & Tanggal Lahir</label>
                <input type="date" name="birth_date" required
                       class="w-full px-3 py-2 border rounded-lg focus:border-purple-500">
            </div>

            {{-- Alamat --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Alamat</label>
                <textarea name="address" rows="3" required
                          class="w-full px-3 py-2 border rounded-lg focus:border-purple-500">{{ old('address') }}</textarea>
            </div>

            {{-- Nomor Telepon --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Nomor Telepon</label>
                <input type="tel" name="phone"
                       pattern="^[0-9]{10,15}$"
                       maxlength="15"
                       placeholder="081234567890"
                       required
                       class="w-full px-3 py-2 border rounded-lg focus:border-purple-500">
                <p class="text-sm text-gray-500 mt-1">Hanya angka, panjang 10–15 digit.</p>
            </div>

            {{-- Submit --}}
            <button type="submit"
                    class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                Daftar
            </button>

            <p class="text-center mt-4">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-purple-600 hover:underline">Login</a>
            </p>

        </form>
    </div>

    {{-- Script Toggle Password --}}
    <script>
        function toggleRegisterPassword() {
            const input = document.getElementById("password");
            const eyeOpen = document.getElementById("eyeOpenReg1");
            const eyeClosed = document.getElementById("eyeClosedReg1");

            if (input.type === "password") {
                input.type = "text";
                eyeOpen.classList.add("hidden");
                eyeClosed.classList.remove("hidden");
            } else {
                input.type = "password";
                eyeOpen.classList.remove("hidden");
                eyeClosed.classList.add("hidden");
            }
        }

        function toggleRegisterPasswordConfirm() {
            const input = document.getElementById("password_confirmation");
            const eyeOpen = document.getElementById("eyeOpenReg2");
            const eyeClosed = document.getElementById("eyeClosedReg2");

            if (input.type === "password") {
                input.type = "text";
                eyeOpen.classList.add("hidden");
                eyeClosed.classList.remove("hidden");
            } else {
                input.type = "password";
                eyeOpen.classList.remove("hidden");
                eyeClosed.classList.add("hidden");
            }
        }
</script>

</script>


</x-guest-layout>