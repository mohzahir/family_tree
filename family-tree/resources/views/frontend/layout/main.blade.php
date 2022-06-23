<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="https://preview.lsvr.sk/lineago/xmlrpc.php">
	<title>John Lewis &#8211; Lineago</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
	<link rel='stylesheet' id='wp-block-library-css' href='{{ asset("front-template/css/style.min.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='lsvr-lineago-main-style-css' href='{{ asset("front-template/css/style.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='lsvr-lineago-general-style-css' href='{{ asset("front-template/css/general-rtl.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='lsvr-lineago-demo-style-css' href='{{ asset("front-template/css/style1.css") }}' type='text/css' media='all' />
	<link rel='stylesheet' id='lsvr-lineago-google-fonts-css' href='https://fonts.googleapis.com/css2?family=Playfair+Display%3Awght%40300%3B400%3B500%3B600%3B700%3B800&#038;display=swap&#038;ver=5.8.4' type='text/css' media='all' />
	<link rel='stylesheet' id='lsvr-lineago-color-scheme-css' href='{{ asset("front-template/css/default.css") }}' type='text/css' media='all' />
	<style id='lsvr-lineago-general-style-inline-css' type='text/css'>
		body,
		input,
		textarea,
		select,
		button,
		#cancel-comment-reply-link,
		.lsvr-primary-font {
			font-family: 'Tajawal', Arial, sans-serif;
		}

		h1,
		h2,
		.lsvr-secondary-font {
			font-family: 'Tajawal', serif;
		}

		html,
		body {
			font-size: 16px;
		}

		.header-branding__logo-link {
			max-width: 90px;
		}
		
	</style>

	<!--Livewire-->
    @livewireStyles
    <!--END Livewire-->

	<!-- <link rel="stylesheet" href="{{ asset('front-template/css/front-rtl.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('front-template/css/style-rtl.css') }}">
</head>

<body dir="rtl" data-rsssl=1 class="lsvr_family_member-template-default single single-lsvr_family_member postid-77 wp-custom-logo">


	<!-- PAGE WRAPPER : begin -->
	<div id="top" class="page-wrapper">

		<!-- HEADER : begin -->
		@include('frontend.layout.partials.header')
		<!-- HEADER : end -->


		<!-- CORE : begin -->
		<div id="core" class="{{ $attributes['class'] }}">
			<div class="core__inner">



				<!-- CORE HEADER : begin -->
				<div class="core-header">

					{{ $header }}
				
				
				</div>
				<!-- CORE HEADER : end -->



				<!-- CORE BODY : begin -->
				<div class="core-body">
					<div class="lsvr-container">


						<!-- MAIN : begin -->
						<main id="main">
							<div class="main__inner">
								
								{{ $slot }}
								
							</div>
						</main>
						<!-- MAIN : end -->


					</div>
				</div>
				<!-- CORE BODY : end -->

			</div>
		</div>
		<!-- CORE : end -->



		@include('frontend.layout.partials.footer')



	</div>
	<!-- PAGE WRAPPER : end -->

	<script type='text/javascript' src='{{ asset("front-template/js/jquery.min.js") }}' id='jquery-core-js'></script>
	<script type='text/javascript' src='{{ asset("front-template/js/jquery-migrate.min.js") }}' id='jquery-migrate-js'></script>
	<!-- jquery -->
    <script src="{{ asset('template/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
	<!-- jquery -->
	<script type='text/javascript' src='{{ asset("front-template/js/lineago-demo-scripts.min.js") }}' id='lsvr-lineago-demo-scripts-js'></script>
	<script type='text/javascript' id='lsvr-lineago-demo-scripts-js-after'>
		var lsvr_lineago_path = "https://preview.lsvr.sk/lineago/wp-content/themes/lineago";
	</script>
	<script type='text/javascript' src='{{ asset("front-template/js/imagesloaded.min.js") }}' id='imagesloaded-js'></script>
	<script type='text/javascript' src='{{ asset("front-template/js/masonry.min.js") }}' id='masonry-js'></script>
	<script type='text/javascript' src='{{ asset("front-template/js/lineago-third-party-scripts.min.js") }}' id='lsvr-lineago-third-party-scripts-js'></script>
	<script type='text/javascript' id='lsvr-lineago-main-scripts-js-extra'>
		/* <![CDATA[ */
		var lsvr_lineago_main_scripts_ajax_var = {
			"url": "https:\/\/preview.lsvr.sk\/lineago\/wp-admin\/admin-ajax.php",
			"nonce": "2f79e5ab93"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='{{ asset("front-template/js/lineago-scripts.min.js") }}' id='lsvr-lineago-main-scripts-js'></script>
	<script type='text/javascript' id='lsvr-lineago-main-scripts-js-after'>
		var lsvr_lineago_js_labels = {
			"magnific_popup": {
				"mp_tClose": "Close (Esc)",
				"mp_tLoading": "Loading...",
				"mp_tPrev": "Previous (Left arrow key)",
				"mp_tNext": "Next (Right arrow key)",
				"mp_image_tError": "The image could not be loaded.",
				"mp_ajax_tError": "The content could not be loaded."
			}
		}
	</script>
	<script type='text/javascript' src='{{ asset("front-template/js/wp-embed.min.js") }}' id='wp-embed-js'></script>
	<!--Livewire-->
    @livewireScripts
    <!--END Livewire-->
	{{-- alpinejs --}}
    <script defer src="{{ asset('template/app-assets/vendors/js/alpine.min.js') }}"></script>
    {{-- alpinejs --}}

</body>

</html>
<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Object Caching 167/280 objects using memcache
Page Caching using disk: enhanced 
Minified using disk
Database Caching 20/54 queries in 0.042 seconds using memcache

Served from: preview.lsvr.sk @ 2022-06-18 13:53:17 by W3 Total Cache
-->