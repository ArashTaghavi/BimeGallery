<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="/admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin-assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
    <link rel="stylesheet" href="/admin-assets/assets/plugins/morrisjs/morris.min.css"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="/admin-assets/assets/css/main.css">
    <link rel="stylesheet" href="/admin-assets/assets/css/color_skins.css">
    <link rel="stylesheet" href="/admin-assets/assets/css/custom.css">
    <!-- <link rel="stylesheet" href="assets/css/color_skins.html"> -->
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="/admin-assets/assets/images/logo.svg" width="48" height="48"
                                 alt="قطب نما">
        </div>
        <p>لطفا صبر کنید ...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">
                <img src="/admin-assets/assets/images/logo.svg" width="30" alt="قطب نما">
                <span class="m-r-10">قطب نما</span>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a>
            </li>
            <li class="hidden-sm-down">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="جستجو...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button"><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">اعلان ها</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                    <div class="menu-info">
                                        <h4>8 عضو جدید به ما پیوستند </h4>
                                        <p><i class="zmdi zmdi-time"></i> 14 دقیقه پیش
                                        </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                    <div class="menu-info">
                                        <h4>4 فروش انجام شده است</h4>
                                        <p><i class="zmdi zmdi-time"></i> 22 دقیقه پیش </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                    <div class="menu-info">
                                        <h4><b>ز خطاط </b>حسابش را حذف کرد </h4>
                                        <p><i class="zmdi zmdi-time"></i> 3 ساعت پیش </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                    <div class="menu-info">
                                        <h4><b>ز خطاط</b> نام پروفایلش را عوض کرد </h4>
                                        <p><i class="zmdi zmdi-time"></i> 2 ساعت پیش
                                        </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                    <div class="menu-info">
                                        <h4><b>ع سجادی</b> درباره پست شما نظر داد</h4>
                                        <p><i class="zmdi zmdi-time"></i> 4 ساعت پیش </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                    <div class="menu-info">
                                        <h4><b> ع سجادی </b>استوس خود را به روز کرد </h4>
                                        <p><i class="zmdi zmdi-time"></i> 3 ساعت پیش
                                        </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                                    <div class="menu-info">
                                        <h4>به روز رسانی تنظیمات</h4>
                                        <p><i class="zmdi zmdi-time"></i> دیروز </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">نمایش تمامی اعلان ها</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button"><i class="zmdi zmdi-flag"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">وظایف</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-primary">
                                        <span class="progress-badge"> شماره صفحه </span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-info">
                                        <span class="progress-badge"> به سؤالات GitHub پاسخ دهید </span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 35%;">
                                                <span class="progress-value">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-success">
                                        <span class="progress-badge"> حل مسئله انتقال </span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 72%;">
                                                <span class="progress-value">72%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container">
                                        <span class="progress-badge"> داشبورد جدید ایجاد کنید </span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 45%;">
                                                <span class="progress-value">45%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-warning">
                                        <span class="progress-badge"> پروژه های  در انتظار </span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 29%;">
                                                <span class="progress-value">29%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">نمایش همه</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen"
                   data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            <li><a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
        </ul>
    </div>
</nav>
<div id="app"></div>

<!-- Jquery Core Js -->
<script src="/admin-assets/assets/bundles/libscripts.bundle.js"></script>
<!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="/admin-assets/assets/bundles/vendorscripts.bundle.js"></script>
<!-- slimscroll, waves Scripts Plugin Js -->

<script src="/admin-assets/assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="/admin-assets/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="/admin-assets/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="/admin-assets/assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->

<script src="/admin-assets/assets/bundles/mainscripts.bundle.js"></script>
<script src="/admin-assets/assets/js/pages/index.js"></script>
<script src="/admin-js/app.js"></script>
</body>

</html>