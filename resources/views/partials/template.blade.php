<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Kiddies Country @yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=PT+Serif:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,600,700,700italic'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=PT+Serif:400,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure.css'>
    <link rel='stylesheet' href='css/school2.css'>
    <link rel='stylesheet' href='css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin-5.3.1/css/settings.css">

</head>

<body class="template-slider color-custom style-default button-flat layout-full-width no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-title-left menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2097">
<div id="Wrapper">
    @include('partials.topbar')

    @yield('content')

    @include('partials.footer')

</div>

<div id="body_overlay"></div>

<!-- JS -->
<script src="js/jquery-2.1.4.min.js"></script>

<script src="js/mfn.menu.js"></script>
<script src="js/jquery.plugins.js"></script>
<script src="js/jquery.jplayer.min.js"></script>
<script src="js/animations/animations.js"></script>
<script src="js/translate3d.js"></script>
<script src="js/scripts.js"></script>
<script src="js/email.js"></script>

<script src="plugins/rs-plugin-5.3.1/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/jquery.themepunch.revolution.min.js"></script>

<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.video.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.parallax.min.js"></script>

<script>
    var revapi1, tpj;
    ( function() {
        if (!/loaded|interactive|complete/.test(document.readyState))
            document.addEventListener("DOMContentLoaded", onLoad);
        else
            onLoad();
        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on")
                    tpj.noConflict();
            }
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType : "hero",
                    sliderLayout : "auto",
                    dottedOverlay : "none",
                    delay : 9000,
                    visibilityLevels : [1240, 1024, 778, 480],
                    gridwidth : 1080,
                    gridheight : 660,
                    lazyType : "none",
                    shadow : 0,
                    spinner : "spinner2",
                    autoHeight : "off",
                    disableProgressBar : "on",
                    hideThumbsOnMobile : "off",
                    hideSliderAtLimit : 0,
                    hideCaptionAtLimit : 0,
                    hideAllCaptionAtLilmit : 0,
                    debugMode : false,
                    fallbacks : {
                        simplifyAll : "off",
                        disableFocusListener : false,
                    }
                });
            };
        };
    }());
</script>

</body>

</html>
