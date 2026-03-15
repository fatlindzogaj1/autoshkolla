<x-layouts::auth :title="__('Forgot password')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-6">
            @csrf

            <flux:input
                name="email"
                :label="__('Email address')"
                type="email"
                required
                autofocus
                placeholder="email@example.com"
                class="border-2 border-black bg-white"
            />

            <flux:button variant="primary" type="submit" class="w-full border-2 border-black text-xs font-bold uppercase tracking-[0.22em]" data-test="email-password-reset-link-button">
                {{ __('Email password reset link') }}
            </flux:button>
        </form>

        <div class="text-center text-sm font-medium text-black/60">
            <span>{{ __('Or, return to') }}</span>
            <flux:link :href="route('login')" wire:navigate class="font-bold uppercase tracking-[0.12em]">{{ __('log in') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
