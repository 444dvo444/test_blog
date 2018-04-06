@extends('layouts.app')


@section('content')
    <section id="container" class="clearfix">
        <aside id="sidebar" class="fl-l">
            <nav id="sidebar-menu">
                <ul>
                    <li>
                        <a class="active" href="/">
                            <span></span>
                            <span>{{ $left_menu->book_call }}</span>
                        </a>
                    </li>

                    <li>
                        <a href="/select_vilas">
                            <span></span>
                            <span>{{ $left_menu->select_villas }}</span>
                        </a>
                    </li>

                    <li>
                        <a href="/presentations">
                            <span></span>
                            <span>{{ $left_menu->presentation_of_villas }}</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div id="content">
            <div id="content-inner" class="content-text location_content">
                @if($location->title)
                    <h1>{{ $location->title }}</h1>
                @endif


                @if($location->top_text)
                    <p>{{ $location->top_text }}</p>
                @endif

                @if($top_slider->count() > 0)
                    <div class="slider-container">
                        <div class="slider flexslider">
                            <ul class="slides">
                                @foreach($top_slider as $slides)
                                    <li><img src="images/slider_img/{{ $slides->images }}" alt="asd"></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @if($location->second_text)
                    <p>{{ $location->second_text }}</p>
                @endif

                <div class="map-infrastructure" data-longitude="44.139484" data-latitude="39.049843" data-marker-longitude="44.139484" data-marker-latitude="39.039843" data-marker="/images/map_markers/marker1.png"></div>

                <div id="map-description">
                    @if($location->point_text_one)
                        <span class="item icon-wallet">{{ $location->point_text_one }}</span>
                    @endif
                    @if($location->point_text_two)
                        <span class="item icon-food">{{ $location->point_text_two }}</span>
                    @endif
                    @if($location->point_text_three)
                        <span class="item icon-shop">{{ $location->point_text_three }}</span>
                    @endif
                    @if($location->point_text_five)
                        <span class="item icon-star">{{ $location->point_text_five }}</span>
                    @endif
                    @if($location->point_text_four)
                        <span class="item icon-graduation-cap">{{ $location->point_text_four }}</span>
                    @endif
                    @if($location->point_text_six)
                        <span class="item icon-heart">{{ $location->point_text_six }}</span>
                    @endif
                </div>

                @if($location->third_text)
                    <p>{{ $location->third_text }}</p>
                @endif

                <div id="gall" class="clearfix">
                    @if($bottom_images->count() > 0)
                        @foreach($bottom_images as $bottom_block_image)
                            <div class="gall-item fl-l">
                                <a href="images/gall_img/{{ $bottom_block_image->image }}" class="overlay" data-colorbox="gall_img">
                                    <img src="images/gall_img/{{ $bottom_block_image->image }}" alt="single">

                                    <span></span>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection