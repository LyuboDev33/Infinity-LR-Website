<link rel="stylesheet" href="/css/dashboard_css/pages-nav.css">


<a class="a_menus" href="/dashboard">
  <div class="nav-option">
    Начална Страница
  </div>
</a>

@if (Auth::user()->completed_assignment === "completed")
<a class="a_menus" href="/profile">
    <div class="nav-option">
     Профил
  </div>
</a>

<a class="a_menus" href="/kursove">
  <div class="nav-option">
    Видео Обучения
  </div>
</a>


<a class="a_menus" href="/biblioteka">
  <div class="nav-option">
   <span>Библиотека на <span style="font-weight: bold;"> Успеха</span></span>
  </div>
</a>

@if(Auth::user()->acces_type === "admin")
				<a class="a_menus" href="/access">
        <div class="option2 nav-option">
          Админ Достъп
        </div>
      </a>

      <a class="a_menus" href="/blog">
        <div class="option2 nav-option">
          Блог
        </div>
      </a>

      <a class="a_menus" href="/events">
        <div class="option2 nav-option">
          Създай Събитие
        </div>
      </a>
@endif

@endif



<div class="nav-option option4">
  
  <form method="POST" action="{{ route('logout') }}" class="form_logout">
    @csrf
    <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                               this.closest('form').submit();">
      {{ __('Изход') }}
    </x-dropdown-link>
  </form>
</div>

<script src="/javascript/dashboard-js/sidebar_links.js"></script>
