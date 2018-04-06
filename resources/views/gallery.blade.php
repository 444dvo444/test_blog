@extends('layouts.app')


@section('content')
    <section id="container" class="clearfix">
        <aside id="sidebar" class="fl-l">
            <nav id="sidebar-menu">
                <ul>
                    <li>
                        <a class="active" id="callback-btn" href="javascript:void(0);">
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
            <div id="content-inner" class="content-text">
                <div class="tabs section">
                    <ul class="tabs-list">
                        <li class="tab-tog current">Gallery villas</li>
                        <li class="tab-tog">Gallery interiors</li>
                    </ul>

                    <div class="tabs-cont">
                        <div class="tabs-cont_item visible">
                            <div class="slider-container">
                                <div id="flexslider1" class="slider flexslider" data-sync="#flex-thumbs1">
                                    <ul class="slides">
                                        <li><a href="images/slider_img/img_1_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_1_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_2_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_2_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_3_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_3_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_1_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_1_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_2_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_2_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_3_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_3_big.jpg" alt="asd"></a></li>

                                        <li><a href="images/slider_img/img_1_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_1_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_2_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_2_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_1_big.jpg" data-colorbox="slide_img"><img src="images/slider_img/img_3_big.jpg" alt="asd"></a></li>
                                    </ul>
                                </div>

                                <div id="flex-thumbs1" class="thumbs flexslider" data-navfor="#flexslider1">
                                    <ul class="slides">
                                        <li><img src="images/slider_img/img_1_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_2_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_3_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_4_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_5_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_6_small.jpg" alt="asd"></li>

                                        <li><img src="images/slider_img/img_1_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_2_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_3_small.jpg" alt="asd"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tabs-cont_item">
                            <div class="slider-container">
                                <div id="flexslider2" class="slider flexslider" data-sync="#flex-thumbs2">
                                    <ul class="slides">
                                        <li><a href="images/slider_img/img_3_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_3_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_2_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_2_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_1_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_1_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_3_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_3_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_2_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_2_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_1_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_1_big.jpg" alt="asd"></a></li>

                                        <li><a href="images/slider_img/img_3_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_3_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_2_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_2_big.jpg" alt="asd"></a></li>
                                        <li><a href="images/slider_img/img_1_big.jpg" data-colorbox="slide_img_2"><img src="images/slider_img/img_1_big.jpg" alt="asd"></a></li>
                                    </ul>
                                </div>

                                <div id="flex-thumbs2" class="thumbs flexslider" data-navfor="#flexslider2">
                                    <ul class="slides">
                                        <li><img src="images/slider_img/img_1_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_2_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_3_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_4_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_5_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_6_small.jpg" alt="asd"></li>

                                        <li><img src="images/slider_img/img_1_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_2_small.jpg" alt="asd"></li>
                                        <li><img src="images/slider_img/img_3_small.jpg" alt="asd"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection