<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	
	<link rel="stylesheet" href="/css/dashboard_css/pages-nav.css">
	<link rel="stylesheet" href="/css/dashboard_css/style.css">
	<title>Infinity 21</title>
</head>
<body>

<header class="header">
	<div class="header-content responsive-wrapper">
		<div class="header-logo">
			<a href="/">
				<img class="infinity_img" src="/images/dashboard-images/infinity-img.svg" />
			</a>
		</div>

		<img class="navbar_menu" src="/images/dashboard-images/menu.svg" alt="">
	</div>
</header>

<div class="content">



	<div class="background_menu">
		<div class="content-panel">
			<img class="close_x" src="/images/dashboard-images/x.svg" alt="Затвори страницата">
			<div class="vertical-tabs">
				<a class="a_menus" href="/dashboard">Начална Страница</a>
				@if (Auth::user()->completed_assignment === "completed")
				
				<a class="a_menus" href="/kursove">Видео Обучения</a>
				<a class="a_menus" href="/profile">Профил</a>
				<a class="a_menus" href="/biblioteka">Библиотека на <b> &nbsp Успеха</b></a>

				@if(Auth::user()->acces_type === "admin")
				<a class="a_menus" href="/access">Админ Достъп</a>
				<a class="a_menus" href="/blog">Блог</a>
				<a class="a_menus" href="/events">Създай Събитие</a>

				@endif

				<x-danger-button class="form_logout">

				<form  method="POST" action="{{ route('logout') }}">
					@csrf
					<x-dropdown-link :href="route('logout')"
									onclick="event.preventDefault();
															this.closest('form').submit();">
							{{ __('Изход') }}
					</x-dropdown-link>
			</form>
		</x-danger-button>
	
				@endif
			</div>
		</div>

	</div>
	{{-- background modal for the content --}}

	
{{-- This JavaScript file (sidebar_links.js) contains all the logic for the background coloring of the sidebar <a></a> attributes --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	{{-- This JavaScript file (navbar_logic.js) contains all the logic for opening the menu on small screen --}}
	<script src="/javascript/dashboard-js/navbar_logic.js"></script>


</body>
</html>