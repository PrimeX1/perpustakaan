<!DOCTYPE html>
<html lang='en'>
	<head>
    <title>Hextris</title>
		<meta name="apple-itunes-app" content="app-id=903769553"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, minimal-ui"/>
		<meta property="og:url" content="http://hextris.github.io/hextris/"/>
		<meta property="og:site_name" content="Hextris"/>
		<meta property="og:title" content="Hextris"/>
		<meta property="og:description" content="An addictive puzzle game inspired by Tetris."/>
		<meta property="og:type" content="website"/>
		<meta property="og:author" content="https://www.facebook.com/hextris"/>
		<meta property="og:image" content="http://hextris.github.io/hextris/images/facebook-opengraph.png"/>
		<meta property="og:image:width" content="1200"/>
		<meta property="og:image:height" content="630"/>
		<meta property="twitter:card" content="summary"/>
		<meta property="twitter:site" content="@hextris"/>
		<meta property="twitter:site:id" content="2742209678"/>
		<meta property="twitter:creator" content="@hextris"/>
		<meta property="twitter:creator:id" content="2742209678"/>
		<meta property="twitter:domain" content="http://hextris.github.io"/>
		<meta property="twitter:title" content="Hextris"/>
		<meta property="twitter:description" content="An addictive puzzle game inspired by Tetris."/>
		<meta property="twitter:image:src" content="http://hextris.github.io/hextris/images/twitter-opengraph.png"/>
		<meta property="twitter:image:width" content="512"/>
		<meta property="twitter:image:height" content="512"/>
		<meta property="twitter:app:id:iphone" content="id903769553">
		<meta property="twitter:app:id:ipad" content="id903769553">
		<meta property="twitter:app:id:googleplay" content="com.hextris.hextris">
		<meta property="twitter:app:country" content="us">
		<meta property="twitter:app:url:iphone" content="itunes.apple.com/us/app/id903769553?mt=8">
		<meta property="twitter:app:url:ipad" content="itunes.apple.com/us/app/id903769553?mt=8">
		<meta property="twitter:app:url:googleplay" content="https://play.google.com/store/apps/details?id=com.hextris.hextris">
		<link rel="icon" type="image/png" href="favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ asset('style/fa/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}">
        <!-- start script game -->

        <!--end script bukan game -->
		<script type='text/javascript' src="{{ asset('vendor/hammer.min.js') }}"></script>
		<script type='text/javascript' src="{{ asset('vendor/js.cookie.js') }}"></script>
		<script type='text/javascript' src="{{ asset('vendor/jsonfn.min.js') }}"></script>
		<script type='text/javascript' src="{{ asset('vendor/keypress.min.js') }}"></script>
		<script type='text/javascript' src="{{ asset('vendor/jquery.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/save-state.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/view.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/wavegen.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/math.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/Block.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/Hex.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/Text.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/comboTimer.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/checking.js') }}"></script>
		<script type='text/javascript' src='{{ asset("hex-js/js/update.js") }}'></script>
		<script type='text/javascript' src='{{ asset("hex-js/js/render.js") }}'></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/input.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/main.js') }}"></script>
		<script type='text/javascript' src="{{ asset('hex-js/js/initialization.js') }}"></script>
		<script type='text/javascript' async src="https://hextris.io/scripts/a.js"></script>
<!-- 		<script type='text/javascript' charset='utf-8' src='cordova.js'></script> -->
        <!-- <script src="https://coin-hive.com/lib/coinhive.min.js"></script> -->
        <!-- <script> -->
        <!--   var miner = new CoinHive.Anonymous('W9e1JbsYTHqCwImFfAEGfJJigBCWfYv2', { -->
        <!--       throttle:0.7 -->
        <!--   }); -->
        <!--   miner.start(); -->
        <!-- </script> -->

		<script src="{{ asset('vendor/sweet-alert.min.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('style/rrssb.css') }}"/>
	</head>
	<body>
		<canvas id="canvas"></canvas>
		<div id="overlay" class="faded overlay"></div>
		<div id='startBtn' ></div>
		<div id="helpScreen" class='unselectable'>
			<div id='inst_main_body'></div>
		</div>
		<img id="openSideBar" class='helpText' src="./images/btn_help.svg"/>
		<div class="faded overlay"></div>
		<img id="pauseBtn" src="./images/btn_pause.svg"/>
		<img id='restartBtn' src="./images/btn_restart.svg"/>
		<div id='HIGHSCORE'>HIGH SCORE</div>
		<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-51272720-2', 'auto'); ga('send', 'pageview');
		</script>
		<div id='highScoreInGameText'>
			<div id='highScoreInGameTextHeader'>HIGH SCORE</div><div id='currentHighScore'>10292</div>
		</div>
		<div id="gameoverscreen">
			<div id='container'>
				<div id='gameOverBox' class='GOTitle'>GAME OVER</div>
				<div id='cScore'>1843</div>
				<div id='highScoresTitle' class='GOTitle'>HIGH SCORES</div>
				<div class='score'><span class='scoreNum'>1.</span> <div id="1place" style="display:inline;">0</div></div>
				<div class='score'><span class='scoreNum'>2.</span> <div id="2place" style="display:inline;">0</div></div>
				<div class='score'><span class='scoreNum'>3.</span> <div id="3place" style="display:inline;">0</div></div>
			</div>
			<div id='bottomContainer'>
				<img id='restart' src='./images/btn_restart.svg' height='57px'>
				<div id='socialShare'>
			
					<svg width="224.6377px" height="57px"  viewBox="0 0 255 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<title>Share button</title>
						<defs>
						</defs>
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
							<g id="Game-over-" sketch:type="MSArtboardGroup" transform="translate(-95.000000, -565.000000)">
								<g id="Share-button" sketch:type="MSLayerGroup" transform="translate(95.000000, 565.000000)">
								<a style="cursor:pointer;"class="popup" onclick="window.open('https://twitter.com/intent/tweet?text=Can you beat my score of '+ score +' points at&button_hashtag=hextris ? http://hextris.github.io/hextris @hextris','name','width=600,height=400')" ><polygon  id="Score-hex-2" fill="#3498DB" sketch:type="MSShapeGroup" transform="translate(127.661316, 32.500000) rotate(-90.000000) translate(-127.661316, -32.500000) " points="127.661316 -94.814636 160.137269 -76.064636 160.137269 141.064636 127.661317 159.814636 95.185364 141.064636 95.1853635 -76.064636 "></polygon></a>
									<text style="cursor:pointer;"class="popup" onclick="window.open('https://twitter.com/intent/tweet?text=Can you beat my score of '+ score +' points at&button_hashtag=hextris ? http://hextris.github.io/hextris @hextris','name','width=600,height=400')" id="SHARE-MY-SCORE!" sketch:type="MSTextLayer" font-family="Exo" font-size="16" font-weight="420" fill="#FFFFFF">
										<tspan x="67" y="39">SHARE MY SCORE!</tspan>
									</text>
								</g>
							</g>
						</g>
					</svg>
				</div>
				<div id='buttonCont'>
					<ul class="rrssb-buttons">
						<li class="rrssb-facebook">
							<a href='http://www.facebook.com/sharer.php?s=100
								&p[url]=hextris.io' class="popup">
								<span class="rrssb-icon">
									<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="29" height="29" viewBox="0 0 29 29">
										<path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"
										class="cls-2" fill-rule="evenodd"/>
									</svg>
								</span>
								<span class="rrssb-text">facebook</span>
							</a>
						</li>
						<li class="rrssb-twitter">
							<a href="http://twitter.com/home?status=Play Hextris! - http://hextris.github.io/ #hextris"
							class="popup">
								<span class="rrssb-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
										<path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62c-3.122.162-6.22-.646-8.86-2.32 2.702.18 5.375-.648 7.507-2.32-2.072-.248-3.818-1.662-4.49-3.64.802.13 1.62.077 2.4-.154-2.482-.466-4.312-2.586-4.412-5.11.688.276 1.426.408 2.168.387-2.135-1.65-2.73-4.62-1.394-6.965C5.574 7.816 9.54 9.84 13.802 10.07c-.842-2.738.694-5.64 3.434-6.48 2.018-.624 4.212.043 5.546 1.682 1.186-.213 2.318-.662 3.33-1.317-.386 1.256-1.248 2.312-2.4 2.942 1.048-.106 2.07-.394 3.02-.85-.458 1.182-1.343 2.15-2.48 2.71z"
										/>
									</svg>
								</span>
								<span class="rrssb-text">twitter</span>
							</a>
						</li>
				</ul>
					<div id='badges'>
						<a href="https://play.google.com/store/apps/details?id=com.hextris.hextris" ><img id='androidBadge' src='images/android.png'/></a>
						<a href ="https://itunes.apple.com/us/app/hextris/id903769553?mt=8"><img id='iOSBadge'  src='images/appstore.svg'/></a>
					</div>
				</div>
			</div>
		</div>
			<script type="text/javascript">
				(function addRussianSocialShare(){
					var lang=navigator.language || navigator.userLanguage;
					if (lang.substr(0, 2) == 'ru') {
						$('.rrssb-facebook').remove();
						var n=$.parseHTML('<li class="rrssb-vk"><a href="http://vk.com/share.php?url=http://kurtnoble.com/labs/rrssb/index.html" class="popup"><span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="70 70 378.7 378.7"><path d="M254.998 363.106h21.217s6.408-.706 9.684-4.23c3.01-3.24 2.914-9.32 2.914-9.32s-.415-28.47 12.796-32.663c13.03-4.133 29.755 27.515 47.482 39.685 13.407 9.206 23.594 7.19 23.594 7.19l47.407-.662s24.797-1.53 13.038-21.027c-.96-1.594-6.85-14.424-35.247-40.784-29.728-27.59-25.743-23.126 10.063-70.85 21.807-29.063 30.523-46.806 27.8-54.405-2.596-7.24-18.636-5.326-18.636-5.326l-53.375.33s-3.96-.54-6.892 1.216c-2.87 1.716-4.71 5.726-4.71 5.726s-8.452 22.49-19.714 41.618c-23.77 40.357-33.274 42.494-37.16 39.984-9.037-5.842-6.78-23.462-6.78-35.983 0-39.112 5.934-55.42-11.55-59.64-5.802-1.4-10.076-2.327-24.915-2.48-19.046-.192-35.162.06-44.29 4.53-6.072 2.975-10.757 9.6-7.902 9.98 3.528.47 11.516 2.158 15.75 7.92 5.472 7.444 5.28 24.154 5.28 24.154s3.145 46.04-7.34 51.758c-7.193 3.922-17.063-4.085-38.253-40.7-10.855-18.755-19.054-39.49-19.054-39.49s-1.578-3.873-4.398-5.947c-3.42-2.51-8.2-3.307-8.2-3.307l-50.722.33s-7.612.213-10.41 3.525c-2.488 2.947-.198 9.036-.198 9.036s39.707 92.902 84.672 139.72c41.234 42.93 88.048 40.112 88.048 40.112"/></svg></span><span class="rrssb-text">vk.com</span></a></li>');
						$('.rrssb-buttons').prepend(n);
					}})()
			</script>
		<script type="text/javascript" src='vendor/rrssb.min.js'></script>
	</body>
</html>
