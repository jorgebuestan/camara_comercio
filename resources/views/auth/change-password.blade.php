<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
 
    <form method="POST" action="{{ route('password.update2') }}"> 
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <!-- Campo de Nueva Contraseña -->
        <div>
            <x-input-label for="password" :value="__('Nueva Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Campo de Confirmación de Contraseña -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Botón de Enviar -->
        <div class="mt-4">
            <x-primary-button>
                {{ __('Cambiar Contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>