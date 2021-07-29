<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <x-auth-card>
                    <x-slot name="header">
                        Lupa Katalaluan
                    </x-slot>

                    <div class="mb-4 text-sm text-muted">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="alert alert-danger mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="alert alert-danger mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="d-flex align-items-center justify-content-end mt-4">
                            <x-button class="btn-air btn-lg ml-4">
                                {{ __('Email Password Reset Link') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>
    </div>
</x-guest-layout>
