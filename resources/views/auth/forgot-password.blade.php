<link rel="stylesheet" href="/css/main_pages_css/main.css">
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        <p>Ако сте забравили паролата си, въведете имейла на акаунта си в полето и натиснете "Изпрати".</p><br>
        <p>На пощата си ще получите линк за смяна на паролата.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Имейл')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('ИЗПРАТИ') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
