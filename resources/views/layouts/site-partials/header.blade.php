<header class="pm_header fixed_header">
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