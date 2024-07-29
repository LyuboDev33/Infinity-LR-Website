@include('main-page-components.inc.header')

<x-guest-layout>
    <p class="weWillContact">След като попълните формата, наш представител ще се свърже с вас в рамките на 48 часа. </p>

    <form class="form_register" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flexedDiv">
              <!-- Name -->
            <div>
                <x-input-label class="label_login" for="name" :value="__('Име и Фамилия *')" />
                <x-text-input id="name" placeholder="Въведете име и фамилия" class="block mt-1 w-full input_border" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label class="label_login" for="email" :value="__('Имейл *')" />
                <x-text-input id="email" placeholder="Въведете вашият имейл" class="block mt-1 w-full input_border" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Telephone Number -->
            <div class="mt-4">
                <x-input-label class="label_login" for="telephone_numb" :value="__('Телефон *')" />
                <x-text-input id="telephone_numb" placeholder="Въведете вашият телефонен номер" class="block mt-1 w-full input_border" type="text" name="telephone_numb" required/>
            </div>
        </div>
    
        <div class="flexedDiv">
              <!-- Password -->
            <div class="mt-4">
                <x-input-label class="label_login" for="password" :value="__('Парола *')" />

                <x-text-input placeholder="Създайте вашата парола" id="password" class="block mt-1 w-full input_border"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

         <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label class="label_login" for="password_confirmation" :value="__('Повторете Паролата *')" />

                <x-text-input placeholder="Повторете вашата парола" id="password_confirmation" class="block mt-1 w-full input_border"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

        
            <!-- Partners Code -->
                <div class="mt-4">
                <x-input-label class="label_login" for="lr_code" :value="__('Партньорски код (Незадължитено)')" />
                <x-text-input id="lr_code" placeholder="Въведете само ако имате код" class="block mt-1 w-full input_border" type="text" name="lr_code" />
                </div>

                <div class="flex items-center justify-end mt-4 div_account">
                    <a style="margin-top: 20px; font-size: 18px;" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                  Вече имате акаунт?
                    </a>
        
                    <x-primary-button style="font-size: 20px; " class="ms-4 text-sm">
                        Регистрация
                    </x-primary-button>
                </div>
        </div>
      

      
    </form>
</x-guest-layout>

@include('main-page-components.inc.footer')