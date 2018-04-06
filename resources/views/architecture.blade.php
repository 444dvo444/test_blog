@extends('layouts.app')

@section('content')
    <section id="container" class="clearfix">
        <aside id="sidebar" class="fl-l">
            <nav id="sidebar-menu">
                <ul>
                    <li>
                        <a class="{{ Request::is('*/architecture') ? 'active' : '' }}" href="{{ ($uriRequest[2] == 'architecture') ? 'javascript:void(0);' : '/architecture/architecture' }}">
                            <span></span>
                            <span>{{ $left_menu->architecture }}</span>
                        </a>
                    </li>

                    <li>
                        <a class="{{ Request::is('*/interior_design') ? 'active' : '' }}" href="{{ ($uriRequest[2] == 'interior_design') ? 'javascript:void(0);' : '/architecture/interior_design' }}">
                            <span></span>
                            <span>{{ $left_menu->interior_design }}</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div id="content">
            <div id="content-inner" class="content-text">
                @if($architecture->title)
                    <h1>{{ $architecture->title }}</h1>
                @endif

                @if($architecture->first_text)
                    <p>{{ $architecture->first_text }}</p>
                @endif

                @if($architecture->second_text)
                    <p>{{ $architecture->second_text }}</p>
                @endif

                @if($architecture->images)
                    <?
                        $images = explode(',', $architecture->images);
                    ?>
                    <div class="slider-container">
                        <div id="flexslider1" class="slider flexslider" data-sync=".thumbs">
                            <ul class="slides">
                                @foreach($images as $key => $image)
                                    <li><a href="/images/slider_img/{{ $image }}" data-colorbox="slide_img"><img src="/images/slider_img/{{ $image }}" alt="asd"></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="thumbs flexslider" data-navfor="#flexslider1">
                            <ul class="slides">
                                @foreach($images as $image)
                                    <li><img src="/images/slider_img/{{ $image }}" alt="asd"></li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                </div>
            </div>
        </div>
    </section>
@endsection