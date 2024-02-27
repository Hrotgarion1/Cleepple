<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('auth.label-register') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('auth.label-1-register') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label for="role_id" class="text-sm text-gray-600">Escoge un tipo de usuario</label>
              
                <div class="w-full mt-1 rounded-lg border border-gray-300 bg-gray-200">
                    <select name="role_id" class="form-control w-full p-2" >
                        <option value="2">Particular</option>
                        <option value="3">Centro</option>
                        <option value="4">Empresa</option>
                        <option value="5">Entidad</option>
                    </select>
                </div>
              </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('auth.label-2-register') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('auth.label-3-register') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <!--El aviso legal va aqui-->

            <div class="block mt-4">
                <label for="" class="flex items-center">
                    <input id="" type="checkbox" class="form-checkbox" name="avisolegal" required>
                    <a href="{{ route('avisolegal') }}" class="ml-2 text-sm text-red-600">{{ __('auth.label-4-register') }}</a>
                    
                </label>
            </div>

            <!--Hasta aqui el aviso legal-->

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('auth.label-5-register') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('auth.button-register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
