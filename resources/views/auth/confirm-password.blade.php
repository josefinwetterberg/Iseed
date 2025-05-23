<x-guest-layout>
    <div class="auth-header">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="auth-form">
        @csrf

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" class="form-label" :value="__('Password')" />

            <x-text-input id="password" 
                         class="form-input"
                         type="password"
                         name="password"
                         required 
                         autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="form-error" />
        </div>

        <div class="form-actions">
            <x-primary-button class="button-primary">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
