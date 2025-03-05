<x-guest-layout>
    <div class="auth-header">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="status-message status-success" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="auth-form">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" class="form-label" :value="__('Email')" />
            <x-text-input id="email" 
                         class="form-input" 
                         type="email" 
                         name="email" 
                         :value="old('email')" 
                         required 
                         autofocus />
            <x-input-error :messages="$errors->get('email')" class="form-error" />
        </div>

        <div class="form-actions">
            <x-primary-button class="button-primary">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
