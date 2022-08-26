<x-guest-layout>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <x-auth-card>
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form style="margin-bottom: auto" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                
                <x-input id="name" placeholder="test" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required  />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" placeholder="test@gmail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- tel -->
            <div class="mt-4">
                <x-label for="tel" :value="__('Tel')" />

                <x-input id="text" class="block mt-1 w-full"
                                type="tel"
                                name="tel"
                                required autocomplete="tel"
                                pattern="[0-9]{2} [0-9]{3}[0-9]{3}" 
                                placeholder="12 345678"
                                :value="old('tel')"
                                />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                                
            </div>

            <!-- terms -->
            <div class="mt-4">
               
                <div class="block mt-4">
                    <label for="terms and conditions" class="inline-flex items-center">
                        <input id="terms and conditions" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="terms and conditions" required>
                        <span class="ml-2 text-sm text-gray-600">{{ __('Check here if you agree for the terms and conditions of our website.') }}</span>
                    </label><br>
                    <div class="g-recaptcha" data-sitekey="6LeROnohAAAAAB0ONyrADAFuaz-srQx6j0quBx-s" 
                    data-callback="recaptcha_callback" required></div>
                </div>
                
            </div>

            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
