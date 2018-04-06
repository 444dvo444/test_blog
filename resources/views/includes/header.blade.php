<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="{{ URL::to('css/common.css') }}" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    @if(isset($_COOKIE['language']))
        @if($_COOKIE['language'] == 'russian')
            <link rel="stylesheet" href="{{ URL::to('css/application.css') }}" type="text/css">
        @endif
    @endif
    <script type="text/javascript" src="{{ URL::to('js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/respond.js') }}"></script>
</head>

<body>
<div id="preloader">
    <div id="status"></div>
</div>

<div id="main">
    <header>
        <div id="header-inner">
            <a href="/" id="logo">mlinovi<br />hills</a>

            <div id="language-set" class="fl-l">
                @if(isset($_COOKIE['language']))
                    <p id="language-first" class="{{ ($_COOKIE['language'] == 'croatian') ? 'active' : ''}}"><a href="#">croatian</a></p>
                    <p id="language-second" class="{{ ($_COOKIE['language'] == 'english') ? 'active' : ''}}"><a href="javascript:void(0);">english</a></p>
                    <p id="language-third" class="{{ ($_COOKIE['language'] == 'russian') ? 'active' : ''}}"><a href="#">russian</a></p>
                @else
                    <p id="language-first"><a href="#">croatian</a></p>
                    <p id="language-second" class="active"><a href="javascript:void(0);">english</a></p>
                    <p id="language-third"><a href="#">russian</a></p>
                @endif
            </div>

            <span id="header-phone" class="icon-mobile">8 800 <span>152 58 95</span></span>

            <nav id="navigation" role="navigation">
                <ul>
                    <li><a href="/about/about_largo" class="{{ Request::is('about/*') ? 'active' : '' }}">{{ $menu_en->about }}</a></li>
                    <li><a href="/location" class="{{ Request::is('location') ? 'active' : '' }}">{{ $menu_en->location }}</a></li>
                    <li><a href="/architecture/architecture" class="{{ Request::is('architecture/*') ? 'active' : '' }}">{{ $menu_en->architecture }}</a></li>
                    <li><a href="/gallery" class="{{ Request::is('gallery') ? 'active' : '' }}">{{ $menu_en->gallery }}</a></li>
                    <li><a href="/equipment" class="{{ Request::is('equipment') ? 'active' : '' }}">{{ $menu_en->equipment }}</a></li>
                    <li><a href="/select_vilas" class="{{ Request::is('select_vilas') ? 'active' : '' }}">{{ $menu_en->select_villas }}</a></li>
                    <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">{{ $menu_en->contact_us }}</a></li>
                </ul>
            </nav>
        </div>
    </header>