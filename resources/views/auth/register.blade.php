<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <x-auth-card>
                    <x-slot name="header">
                        Daftar Pengguna
                    </x-slot>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="alert alert-danger mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-floating">
                            <x-input id="name" placeholder="Nama" class="" type="text" name="name" :value="old('name')" required autofocus />
                            <x-label for="name" :value="__('Name')" />
                        </div>

                        <!-- Email Address -->
                        <div class="form-floating mt-4">
                            <x-input id="email" placeholder="Emel" class="" type="email" name="email" :value="old('email')" required />
                            <x-label for="email" :value="__('Email')" />
                        </div>

                        <!-- Password -->
                        <div class="form-floating mt-4">
                            <x-input id="password" placeholder="Kata laluan" class=""
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                            <x-label for="password" :value="__('Password')" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-floating mt-4">
                            <x-input id="password_confirmation" placeholder="Pastikan kata laluan" class=""
                                            type="password"
                                            name="password_confirmation" required />
                            <x-label for="password_confirmation" :value="__('Pastikan kata laluan')" />
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <a class="" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-button class="btn-air btn-lg ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>
    </div>
</x-guest-layout>
