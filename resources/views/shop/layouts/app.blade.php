<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	
<head>
	<!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>ACE Capital</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" href="{{ asset('shop/assets/img/favicon.png') }}" rel="icon">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/data-style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <script src="https://use.fontawesome.com/b2f82ce310.js"></script>
	</head>
	<body>

		<!-- Start preloader -->
		<div id="preloader"></div>
		<!-- End preloader -->

		<!-- Top scroll -->
		<div class="top-scroll transition">
			<a href="#banner" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</div>	
		<!-- Top scroll End -->
   
        @include('shop.layouts.header')
        @yield('content')
        @include('shop.layouts.footer')
        
        <script src="{{ asset('shop/assets/js/jquery-3.4.1.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="{{ asset('shop/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('shop/assets/js/snap.svg-min.js') }}"></script>
		<script src="{{ asset('shop/assets/js/jquery.listtopie.min.js') }}"></script>
		<script src="{{ asset('shop/assets/js/animation.js') }}"></script>
		<script src="{{ asset('shop/assets/js/custom.js') }}"></script>
		
	</body>


</html>
