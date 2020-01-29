@extends('layouts.site')
@section('content')
    <div class="pm_album_fullscreen">
        <div class="pm_fullscreen_toggler"></div>
        <div class="pm_navigation_container">
            <div class="pm_prev_slide_button">
                <div class="pm_prev_thumb_cont"></div>
                <div class="pm_prev_button_fader"></div>
            </div>
            <div class="pm_pause_button"></div>
            <div class="pm_next_slide_button">
                <div class="pm_next_thumb_cont"></div>
                <div class="pm_next_button_fader"></div>
            </div>
        </div>

        <div class="pm_gallery_container galleery_fullscreen effect_fade">
            <ul class="pm_gallery effect_fade">
                @foreach($posts as $post)
                    <li onclick="window.location='/post/{{$post->slug}}'"
                        style="background: url({{$post->url}});cursor: pointer" data-number="{{$loop->iteration}}"
                        data-title="{{$post->title}}" data-thumbnail="{{$post->url}}">
                        <div class="pm_temp_likes_wrapper">
                            <div class="pm_add_like_button">
                                <i class="pm_likes_icon fa fa-heart-o"></i>
                                <a href="/post/like/{{$post->slug}}">
                                    <span class="pm_likes_counter">{{$post->popularity}}</span>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
        <div class="pm_slides_title_and_likes_container">
            <div class="pm_slide_title_wrapper"></div>
            <div class="pm_slide_likes_wrapper"></div>
        </div>
    </div>
@stop
