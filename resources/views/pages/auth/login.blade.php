<x-layouts::auth :title="__('Log in')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
                class="border-2 border-black bg-white"
            />

            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                    class="border-2 border-black bg-white"
                />

                @if (Route::has('password.request'))
                    <flux:link class="absolute top-0 text-xs font-bold uppercase tracking-[0.12em] inset-e-0" :href="route('password.request')" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </flux:link>
                @endif
            </div>

            <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" class="font-bold" />

            <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full border-2 border-black text-xs font-bold uppercase tracking-[0.22em]" data-test="login-button">
                        {{ __('Log in') }}
                    </flux:button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="text-center text-sm font-medium text-black/60">
                <span>{{ __('Don\'t have an account?') }}</span>
                <flux:link :href="route('register')" wire:navigate class="font-bold uppercase tracking-[0.12em]">{{ __('Sign up') }}</flux:link>
            </div>
        @endif
    </div>
</x-layouts::auth>
