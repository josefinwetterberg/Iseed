<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}" class="auth-form">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" class="form-label" :value="__('Email')" />
            <x-text-input id="email" 
                         class="form-input" 
                         type="email" 
                         name="email" 
                         :value="old('email', $request->email)" 
                         required 
                         autofocus 
                         autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="form-error" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" class="form-label" :value="__('Password')" />
            <x-text-input id="password" 
                         class="form-input" 
                         type="password" 
                         name="password" 
                         required 
                         autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="form-error" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <x-input-label for="password_confirmation" class="form-label" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" 
                         class="form-input"
                         type="password"
                         name="password_confirmation" 
                         required 
                         autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="form-error" />
        </div>

        <div class="form-actions">
            <x-primary-button class="button-primary">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
