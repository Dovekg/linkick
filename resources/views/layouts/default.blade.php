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
	<link rel="stylesheet" type="text/css" href="/css/all.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.fh5co-footer-style-1 .fh5co-footer-inner .links {
		    padding: 0;
		    margin: 0 0 20px 0;
		    font-size: 18px;
		}
		.fh5co-footer-style-1 .fh5co-footer-inner .links li {
		    display: inline-block;
		    margin-right: 18px;
		    list-style: none;
		    font-family: "Open Sans", Arial, sans-serif;
		}
		.fh5co-footer-style-1 .fh5co-footer-inner {
		    padding: 2em 0 1em;
		    font-family: "Open Sans", Arial, sans-serif;
		}

		.fh5co-footer-style-1 .fh5co-footer-inner .fh5co-logo a {
		    padding: 0;
		    background: none;
		    font-size: 40px;
		    color: #4d4d4d;
		    font-weight: 700;
		    display: -moz-inline-stack;
		    display: inline-block;
		    zoom: 1;
		    border-radius: 4px;
		    font-family: "Montserrat", Arial, sans-serif;
		}
		.fh5co-footer-style-1 .fh5co-footer-inner .copyright {
		    margin-bottom: 20px !important;
		    margin-left: 20px;
		    line-height: 1.5;
		    display: inline-block;
		}

		.fh5co-footer-style-1 .fh5co-footer-inner .fh5co-logo {
		     margin-bottom: 0; 
		}

		.fh5co-content-style-10 {
		    background: #E2E2E2;
		}
		.fh5co-content-style-10 h2 {
		     margin-top: 0px; 
		    color: #1784fb;
		}

		.partner-logo {
			margin-right: 60px;
		}

	</style>

	<head>
<body>

@yield('content')

<script type="text/javascript" src="/js/all.js"></script>
@include('sweet::alert')

<script>
	new WOW().init();
</script>

@yield('script')
</body>
</html>