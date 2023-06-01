<!-- /*
* Template Name: Sterial
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{  asset ('web/fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{  asset ('web/fonts/flaticon/font/flaticon.css') }}">

	<link rel="stylesheet" href="{{  asset ('web/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{  asset ('web/css/aos.css') }}">
	<link rel="stylesheet" href="{{  asset ('web/css/flatpickr.min.css') }}">
	<link rel="stylesheet" href="{{  asset ('web/css/glightbox.min.css') }}">
	<link rel="stylesheet" href="{{  asset ('web/css/style.css') }}">
	<link rel="stylesheet" href="{{  asset ('web/css/main.css') }}">
	<link rel="stylesheet" href="{{  asset ('web/css/detail.min.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/owl-carousel/owl.theme.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
	<title>Du lịch Nghệ An </title>
</head>
<body>

    @include('web.layouts.header')

	
    @yield('content')

    @include('web.layouts.footer')
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{  asset ('web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{  asset ('web/js/tiny-slider.js') }}"></script>
	<script src="{{  asset ('assets/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{  asset ('web/js/aos.js') }}"></script>
    <script src="{{  asset ('web/js/navbar.js') }}"></script>
    <script src="{{  asset ('web/js/counter.js') }}"></script>
    <script src="{{  asset ('web/js/rellax.js') }}"></script>
    <script src="{{  asset ('web/js/flatpickr.js') }}"></script>
    <script src="{{  asset ('web/js/glightbox.min.js') }}"></script>
    <script src="{{  asset ('web/js/custom.js') }}"></script>
	
	<script>
		$(document).ready(function() {
			
			$(".owl-carousel").owlCarousel({


				slideSpeed : 300,
				paginationSpeed : 400,

				items : 1, 
				itemsDesktop : false,
				itemsDesktopSmall : false,
				itemsTablet: false,
				itemsMobile : false

			});
		});
	</script>
</body>
</html>
