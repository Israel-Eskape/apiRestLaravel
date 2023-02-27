<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- firstName -->
        <div class="mt-4">
            <x-input-label for="firstName" :value="__('FirstName')" />
            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required />
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
        </div>

        <!-- lastName -->
        <div class="mt-4">
            <x-input-label for="lastName" :value="__('LastName')" />
            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>

        <!-- birthday -->
        <div class="mt-4">
            <x-input-label for="birthday" :value="__('Birthday')" />
            <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
        </div>
        
        <!-- address -->
         <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- hotelRole_id -->
        <div class="mt-4">
            <x-input-label for="hotelRole_id" :value="__('hotelRole_id')" />
            <x-text-input id="hotelRole_id" class="block mt-1 w-full" type="text" name="hotelRole_id" :value="old('hotelRole_id')" required />
            <x-input-error :messages="$errors->get('hotelRole_id')" class="mt-2" />
        </div>

        <!-- hotelStatusEntity_id -->
        <div class="mt-4">
            <x-input-label for="hotelStatusEntity_id" :value="__('hotelStatusEntity_id')" />
            <x-text-input id="hotelStatusEntity_id" class="block mt-1 w-full" type="text" name="hotelStatusEntity_id" :value="old('hotelStatusEntity_id')" required />
            <x-input-error :messages="$errors->get('hotelStatusEntity_id')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
