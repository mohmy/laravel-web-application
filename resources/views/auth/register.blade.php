<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <x-auth-card>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input id="name" placeholder="Nama" class="" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input id="email" placeholder="Emel" class="" type="email" name="email" :value="old('email')" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input id="password" placeholder="Kata laluan" class=""
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input id="password_confirmation" placeholder="Pastikan kata laluan" class=""
                                            type="password"
                                            name="password_confirmation" required />
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
