<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <title>محبوب ترین ها</title>
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Travis - Responsive HTML5 Template">
    <meta name="author" content="pixel-mafia.com">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/site-assets/img/favicon.ico">

    <!-- Apple Touch -->
    <link rel="apple-touch-icon" href="/site-assets/img/apple57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/site-assets/img/apple72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/site-assets/img/apple114.png">

    <!-- Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Responsive -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="/site-assets/css/main.css" rel="stylesheet" type="text/css" media="all">
    <link href="/site-assets/css/grid.css" rel="stylesheet" type="text/css" media="all">
    <link href="/site-assets/css/pm-icons.css" rel="stylesheet" type="text/css" media="all">
    <link href="/site-assets/css/fontawesome.css" rel="stylesheet" type="text/css" media="all">

    <!-- JS -->
    <script type="text/javascript" src="/site-assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/site-assets/js/main.js"></script>
    <script type="text/javascript" src="/site-assets/js/kenburns.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-70926907-6', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body class="pm_dark_type pm_overflow_hidden album_kenburns_page">
<!-- Preloader -->
<div class="preloader_active">
    <div class="pm_preloader_load_back">
        <div class="pm_preloader_border"></div>
        <div class="pm_preloader_load_line"></div>
    </div>
</div>

<!-- Sharing Popup -->
<div class="pm_sharing_back">
    <div class="pm_popup_close" onclick="share_popup_close()"></div>
    <div class="pm_popup_share_wrapper">
        <a target="_blank"
           class="pm_share_facebook"
           href="http://www.facebook.com/share.php?u=http://pm-html-travis/album-kenburns/">
            <i class="fa fa-facebook-square"></i>
        </a>
        <a target="_blank"
           class="pm_share_twitter"
           href="https://twitter.com/intent/tweet?text=travis&amp;url=http://pm-html-travis/album-kenburns/">
            <i class="fa fa-twitter"></i>
        </a>
        <a target="_blank"
           class="pm_share_guugle_plus"
           href="https://plus.google.com/share?url=http://pm-html-travis/album-kenburns/">
            <i class="fa fa-google-plus"></i>
        </a>
        <a target="_blank"
           class="pm_share_pinterest"
           href="https://pinterest.com/pin/create/button/index536c.html?url=http://pm-html-travis/album-kenburns/&amp;media=http://pm-html-travis/img/logo-dark.png">
            <i class="fa fa-pinterest"></i>
        </a>
    </div>
</div>

<!-- Header -->
@include('layouts.site-partials.header')

<!-- Menu Mobile -->
<div class="pm_menu_mobile_container_wrapper">
    <div class="pm_menu_mobile_container pm_container"></div>
</div>

<!-- Content -->
<div class="pm_album_kenburns">
    <div class="pm_fullscreen_toggler"></div>

    <div class="pm_gallery_kenburns">
        <canvas id="kenburns">
            <p>Your browser doesn't support canvas!</p>
        </canvas>
    </div>
</div><!-- pm_album_kenburns -->

<script>
    var site_width = jQuery(window).width(),
        site_height = jQuery(window).height();
    // Ken Burns Album
    var slider_container = jQuery('#kenburns');

    if (slider_container.length) {
        slider_container.attr({'width': site_width, 'height': site_height});

        slider_container.kenburns({
            images: [
                @foreach($posts as $post)
                    "{{$post->url}}",
                @endforeach
            ],
            frames_per_second: 30,
            display_time: 5000,
            fade_time: 1000,
            zoom: 1.2,
            background_color: '#000000'
        });
    }

</script>
</body>

</html>