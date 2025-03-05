<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="auth-form">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <x-input-label for="name" class="form-label" :value="__('Name')" />
            <x-text-input id="name" 
                         class="form-input" 
                         type="text" 
                         name="name" 
                         :value="old('name')" 
                         required 
                         autofocus 
                         autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="form-error" />
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" class="form-label" :value="__('Email')" />
            <x-text-input id="email" 
                         class="form-input" 
                         type="email" 
                         name="email" 
                         :value="old('email')" 
                         required 
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

        <div class="flex-end">
            <a class="link" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="button-primary">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
