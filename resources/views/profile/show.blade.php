<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans('profile.title-show') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))

                @livewire('profile.update-profile-information-form')
               
                <x-jet-section-border />
            @endif

            <div class="mt-4 sm:mt-0">

                @livewire('user.direccion-usuario')
             
             </div>

            <x-jet-section-border />

            @can ('acceso_organizacion')

            <div class="mt-4 sm:mt-0">

               @livewire('user.direccion-organizacion')
            
            </div>
        
            <x-jet-section-border />

            <div class="mt-4 sm:mt-0">

                @livewire('user.enlace-organizacion')
             
             </div>
         
             <x-jet-section-border />
            @endcan

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-4 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-4 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-4 sm:mt-0">

                <x-cleep />
                
            </div>

            <x-jet-section-border />

            <div class="mt-4 sm:mt-0">

                <x-ajustes />
            
            </div>

            <x-jet-section-border />

            <div class="mt-4 sm:mt-0">
                <x-self-employ />
            </div>

            <x-jet-section-border />

            <div class="mt-4 sm:mt-0">
                <x-Ayuda />
            </div>

            <x-jet-section-border />


            <div class="mt-4 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <x-jet-section-border />

            <div class="mt-4 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
