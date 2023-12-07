<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <main class="form-signin w-100 m-auto">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 my-4 fw-normal">الرجاء تسجيل الدخول</h1>
        <!-- Email Address -->
        <div class="form-floating">
            <x-input-label for="username" :value="__('أسم ألمستخدم')" />
            <x-text-input id="username" class="form-control" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-floating">
            <x-input-label for="password" :value="__('كلمة المرور')" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="checkbox mb-3">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('تذكرني') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="w-100 btn btn-lg btn-primary">
                {{ __('تسجيل الدخول') }}
            </x-primary-button>
        </div>
    </form>
</main>
<footer class="bg-dark text-light text-center p-3 fixed-bottom mt-5">
    &copy; 2023 تم تطوير هذا الموقع بواسطة <a class="text-info" target="_blank"
        href="https://www.instagram.com/soft_4_you_dev/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Soft
        4 You</a>, كل الحقوق محفوظة.
</footer>
</x-guest-layout>
