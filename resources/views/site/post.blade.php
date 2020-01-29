<!DOCTYPE html>
<html lang="fa">
<head>
    <!-- Basic -->
    <title>{{$post->slug}}</title>
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
    <link href="/site-assets/css/fontiran.css">
</head>

<body class="pm_dark_type single-portfolio pm_overflow_visible">
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
           href="http://www.facebook.com/share.php?u=http://pm-html-travis/porfolio-post-standard/">
            <i class="fa fa-facebook-square"></i>
        </a>
        <a target="_blank"
           class="pm_share_twitter"
           href="https://twitter.com/intent/tweet?text=travis&amp;url=http://pm-html-travis/porfolio-post-standard/">
            <i class="fa fa-twitter"></i>
        </a>
        <a target="_blank"
           class="pm_share_guugle_plus"
           href="https://plus.google.com/share?url=http://pm-html-travis/porfolio-post-standard/">
            <i class="fa fa-google-plus"></i>
        </a>
        <a target="_blank"
           class="pm_share_pinterest"
           href="https://pinterest.com/pin/create/button/index4b38.html?url=http://pm-html-travis/porfolio-post-standard/&amp;media=http://pm-html-travis/img/logo-dark.png">
            <i class="fa fa-pinterest"></i>
        </a>
    </div>
</div>

<!-- Header -->
<header class="pm_header">
    <div class="pm_fleft" style="padding: 5px !important;">
        <a href="/" class="pm_logo">
            <img class="pm_non_retina" src="/site-assets/img/logo-dark.png" style="width:70px" alt="BimeIran"/>
            <img class="pm_retina" src="/site-assets/img/retina/logo-dark.png" alt="BimeIran"/>
        </a>
    </div><!-- pm_fleft -->
    <div class="pm_fright">
        <div class="pm_innerpadding_menu">
            <div class="pm_menu_cont">
                <ul class="menu">
                    <li class="menu-item">
                        <form action="{{route('search')}}" method="GET">
                            <button class="search-btn">جستجو</button>
                            <input type="text" class="search-input" placeholder="جستجو" name="q" value="{{request()->q}}">
                        </form>
                    </li>
                    <li class="menu-item">
                        <a class="pm_icon_menu_item" href="/login">
                            <i class="pmicon-006"></i>
                        </a>
                        <a class="pm_menu_mobile_item" href="/login">About</a>
                    </li>

                    <li class="menu-item menu-item-has-children current-menu-ancestor">
                        <a class="pm_icon_menu_item" href="javascript:void(0)">
                            <i class="pmicon-002"></i>
                        </a>
                        <a class="pm_menu_mobile_item" href="/site-assets/javascript:void(0)">Galleries</a>
                        <div class="sub_menu_wrapper">
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                    <li class="menu-item current-menu-item">
                                        <a class="pm_text_menu_item" href="/category/{{$category->slug}}">
                                            {{$category->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul><!-- menu -->
            </div><!-- pm_menu_cont -->
            <a class="pm_menu_mobile_toggler" href="/site-assets/#"></a>
            <span class="pm_share_button"></span>
        </div><!-- pm_innerpadding_menu -->
    </div><!-- pm_fright -->
    <div class="clear"></div>
</header>

<!-- Menu Mobile -->
<div class="pm_menu_mobile_container_wrapper">
    <div class="pm_menu_mobile_container pm_container"></div>
</div>

<!-- Content -->
<div class="pm_wrapper pm_container">
    <div class="pm_row">
        <div class="pm_span12">
            <div class="pm_standard_title_and_likes_container">
                <div class="pm_post_title_cont pm_fleft">
                    {{$post->title}}
                </div>
                <div class="pm_fright">
                    <div class="pm_post_likes_wrapper">
                        <a href="/post/like/{{$post->slug}}" class="pm_add_like_button">
                            <i class="pm_likes_icon fa fa-heart-o" style="color: {{$is_liked ? 'red' : '#fff'}}"></i>
                            <span class="pm_likes_counter">{{$post->popularity}}</span>
                        </a>
                    </div>
                </div>
                <div class="pm_fright">
                    <div class="pm_post_likes_wrapper">
                        <a href="" class="pm_add_like_button">
                            <i class="pm_likes_icon fa fa-eye"></i>
                            <span class="pm_likes_counter">{{$post->view_count}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pm_standard_output_cont">
                <div class="pm_media_output_cont">
                    @if($post->is_video == 0)
                        <img src="{{$post->url}}" alt="{{$post->slug}}"/>
                    @else
                        <video src="{{$post->url}}" controls autoplay style="width: 100%"></video>
                    @endif
                </div>
            </div>
            <div class="pm_row">
                <div class="pm_span12">
                    <div class="pm_content_standard">
                        <p style="text-align: justify;direction: rtl">
                            {{$post->description}}
                        </p>
                    </div>
                    <div class="pm_post_meta_standard" style="text-align: left">
                        تاریخ ارسال :
                        <span style="direction: rtl">{{jdate($post->created_at)}}</span>
                    </div>
                    <div class="pm_post_tags_standard">
                        @foreach($categories as $category)
                            <a rel="tag" href="/category/{{$category->slug}}">{{$category->title}}</a>
                        @endforeach
                    </div>
                    <div class="pm_post_comments_standard pm_simple_layout" style="direction: rtl">
                        <div id="comments">
                            <div class="pm_comments_wrapper">
                                <h1 class="pm_comments_number">
                                    <span class="pm_comments_icon"></span>
                                    {{count($post->comments)}}
                                </h1>
                                <ul class="pm_comments_list">
                                    @foreach($post->comments as $comment)
                                        <li class="comment">
                                            <div class="pm_comment_container">
                                                <div class="pm_comment_wrapper">
                                                    <div class="pm_comment_info">
                                                        <span class="pm_comment_author">{{$comment->full_name}}</span>
                                                        <span class="pm_comment_date">{{jdate($comment->created_at)}}</span>
                                                        <span class="pm_comment_reply">
                                                            <span class="pm_comment_reply_back"></span>
                                                            <span class="pm_comment_reply_back_hover"></span>
                                                        </span>
                                                    </div>
                                                    <div class="pm_comment_text">
                                                        <p>
                                                            {{$comment->description}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="clear"></div>
                                            </div>
                                        </li>

                                    @endforeach

                                </ul>
                            </div><!-- pm_comments_wrapper -->
                            <div class="comment-respond">
                                <form class="comment-form" method="POST"
                                      id="form"
                                      action="{{route('post.store-comment',$post->id)}}">
                                    @csrf

                                    <p class="comment-notes">ایمیل شما منتشر نخواهد شد.</p>
                                    <div class="pm_comment_input_wrapper">
                                        <input class="pm_comment_respond_field" type="text" name="full_name"
                                               title="نام کامل *"
                                               placeholder="نام و نام خانوادگی خود را وارد نمایید..">
                                    </div>
                                    <div class="pm_comment_input_wrapper">
                                        <input class="pm_comment_respond_field" type="text" name="email" title="ایمیل *"
                                               placeholder="ایمیل خود را اینجا وارد نمایید.">
                                    </div>

                                    <div class="pm_comment_input_wrapper">
                                        <textarea class="pm_comment_respond_field" name="description"
                                                  placeholder="متن نظر خود را اینجا وارد نمایید." rows="5"
                                                  cols="45"></textarea>
                                    </div>
                                    <div class="form-submit">
                                        <div class="pm_submit_wrapper">
                                            <div class="pm_send_comment_button">
                                                <span onClick="document.getElementById('form').submit()" class="btn_text">ارسال</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- comments -->
                    </div><!-- pm_post_comments_standard -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>