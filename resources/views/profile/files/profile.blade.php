@include('layouts.pages-nav')
    

<div class="main-container">
    <div class="navcontainer">
            <nav class="nav">
                    <div class="nav-upper-options">

        @include('layouts.sidebar')

                    </div>
            </nav>
    </div>

    <div class="main">
            <div class="report-container">
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Profile') }}
                    </h2>
                  </x-slot>
                  
                  <div class="responsive_edit">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                  
                  
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
    </div>
</div>


