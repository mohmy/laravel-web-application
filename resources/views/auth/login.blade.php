<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <x-auth-card>

                    <x-slot name="header">
                        Log Masuk
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="alert alert-danger mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="alert alert-danger mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}" class="form-floating">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-floating">
                            <x-input id="email" class="" type="email" name="email" :value="old('email')" placeholder="Email" required />
                            <x-label for="email" :value="__('Email')" />
                        </div>

                        <!-- Password -->
                        <div class="form-floating mt-4">
                            <x-input id="password" class="" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                                <x-label for="email" :value="__('Password')" />
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <x-button class="btn-air btn-lg">
                                {{ __('Log in') }}
                            </x-button>
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mt-4">
                            <label for="remember_me" class="form-check-label">
                                <input id="remember_me" type="checkbox"
                                    class="form-check-input"
                                    name="remember">
                                <span class="">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif


                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>

    </div>
</x-guest-layout>
