<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Linkick &mdash; Oversee market</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="linkick" />
	<meta name="keywords" content="linkick" />
	<meta name="author" content="kaige" />
	<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/css/all.css">
	<link rel="stylesheet" type="text/css" href="/css/extra.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	<head>
<body>

@include('partials.nav')

@yield('content')

@include('partials.footer')

<script type="text/javascript" src="/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/all.js"></script>
@include('sweet::alert')

<script>
	new WOW().init();
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 5,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode: true
    });
</script>

@yield('script')
</body>
</html>