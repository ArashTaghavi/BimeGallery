<!DOCTYPE html>
<html lang="en">

@include('layouts.site-partials.head',['title'=> request()->slug])


<body class="pm_dark_type page-template-page-portfolio portfolio_masonry_page">
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
           href="http://www.facebook.com/share.php?u=http://pm-html-travis/portfolio-masonry/">
            <i class="fa fa-facebook-square"></i>
        </a>
        <a target="_blank"
           class="pm_share_twitter"
           href="https://twitter.com/intent/tweet?text=travis&amp;url=http://pm-html-travis/portfolio-masonry/">
            <i class="fa fa-twitter"></i>
        </a>
        <a target="_blank"
           class="pm_share_guugle_plus"
           href="https://plus.google.com/share?url=http://pm-html-travis/portfolio-masonry/">
            <i class="fa fa-google-plus"></i>
        </a>
        <a target="_blank"
           class="pm_share_pinterest"
           href="../../../pinterest.com/pin/create/button/index794d.html?url=http://pm-html-travis/portfolio-masonry/&amp;media=http://pm-html-travis/img/logo-dark.png">
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
<div class="pm_portfolio_listing_container pm_columns_4">
    <div class="pm_portfolio_listing portfolio_isotope">
        @foreach($posts as $post)
            <a href="/post/{{$post->slug}}">
                <div class="pm_portfolio_item"><!-- Item 1 -->
                    <div class="pm_portfolio_item_wrapper">
                        <div class="pm_portfolio_featured_image_wrapper">
                            @if($post->is_video == 0)
                                <img src="{{$post->url}}" alt="{{$post->slug}}"/>
                            @else
                                <video src="{{$post->url}}" controls style="width:100%"></video>
                            @endif
                            <div class="pm_post_likes_wrapper">
                                <a href="/post/like/{{$post->slug}}" class="pm_image_likes_container">
                                    <div class="pm_add_like_button">
                                        <i class="pm_likes_icon fa fa-heart-o"
                                           style="color:{{request()->hasCookie($post->slug) ? 'red' :'#fff'}}"
                                        ></i>
                                        <span class="pm_likes_counter">{{$post->popularity}}</span>
                                    </div>
                                    <div class="clear"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- pm_portfolio_item -->
            </a>
        @endforeach

    </div><!-- pm_portfolio_listing -->
    <div class="clear"></div>
</div><!-- pm_portfolio_listing_container -->
</body>


</html>