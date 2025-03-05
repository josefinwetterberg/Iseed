<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="status-message status-success" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label class="form-label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="form-error" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label class="form-label" for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="form-error" />
        </div>

        <!-- Remember Me -->
        <div class="form-group">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex-end">
            @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="button-primary">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
