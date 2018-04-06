@extends('layouts.app')


@section('title')
    about_largo
@endsection

@section('content')
    <section id="container" class="clearfix">
        <aside id="sidebar" class="fl-l">
            <nav id="sidebar-menu">
                <ul>
                    <li>
                        <a class="{{ Request::is('*/about_largo') ? 'active' : '' }}" href="{{ ($uriRequest[2] == 'about_largo') ? 'javascript:void(0);' : '/about/about_largo' }}">
                            <span></span>
                            <span>{{ $left_menu->villa_largo }}</span>
                        </a>
                    </li>

                    <li>
                        <a class="{{ Request::is('*/about_allegro') ? 'active' : '' }}" href="{{ ($uriRequest[2] == 'about_allegro') ? 'javascript:void(0);' : '/about/about_allegro' }}">
                            <span></span>
                            <span>{{ $left_menu->villa_allergo }}</span>
                        </a>
                    </li>

                    <li>
                        <a class="{{ Request::is('*/about_viva') ? 'active' : '' }}" href="{{ ($uriRequest[2] == 'about_viva') ? 'javascript:void(0);' : '/about/about_viva' }}">
                            <span></span>
                            <span>{{ $left_menu->villa_vivo }}</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="widget widget-info">
                <h3>{{ $information->information }}</h3>

                <div>
                    @if($about_villas_info->ev_id)
                        <p>
                            <span>{{ $about_villas_info->ev_id }}</span>

                            <span>{{ $information->ev_id }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->property_subtype)
                        <p>
                            <span>{{ $about_villas_info->property_subtype }}</span>

                            <span>{{ $information->property_subtype }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->year_of_construction)
                        <p>
                            <span>{{ $about_villas_info->year_of_construction }}</span>

                            <span>{{ $information->year_of_construction }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->bedrooms)
                        <p>
                            <span>{{ $about_villas_info->bedrooms }}</span>

                            <span>{{ $information->bedrooms }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->bethrooms)
                        <p>
                            <span>{{ $about_villas_info->bethrooms }}</span>

                            <span>{{ $information->bethrooms }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->total_surface_approx)
                        <p>
                            <span>{{ $about_villas_info->total_surface_approx }}</span>

                            <span>{{ $information->total_surface_approx }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->plot_surface_approx)
                        <p>
                            <span>{{ $about_villas_info->plot_surface_approx }}</span>

                            <span>{{ $information->plot_surface_approx }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->parking)
                        <p>
                            <span>{{ $about_villas_info->parking }}</span>

                            <span>{{ $information->parking }} </span>
                        </p>
                    @endif
                    @if($about_villas_info->heating)
                        <p>
                            <span>{{ $about_villas_info->heating }}</span>

                            <span>{{ $information->heating }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->underfloor_heating)
                        <p>
                            <span>{{ $about_villas_info->underfloor_heating }}</span>

                            <span>{{ $information->underfloor_heating }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->gas_floor_type)
                        <p>
                            <span>{{ $about_villas_info->gas_floor_type }}</span>

                            <span>{{ $information->gas_floor_type }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->wooden_floor)
                        <p>
                            <span>{{ $about_villas_info->wooden_floor }}</span>

                            <span>{{ $information->wooden_floor }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->fireplace)
                        <p>
                            <span>{{ $about_villas_info->fireplace }}</span>

                            <span>{{ $information->fireplace }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->air_conditioning)
                        <p>
                            <span>{{ $about_villas_info->air_conditioning }}</span>

                            <span>{{ $information->air_conditioning }}</span>
                        </p>
                    @endif
                    @if($about_villas_info->other_information)
                        <?
                        $other_information = explode(',', $about_villas_info->other_information);
                        ?>
                        @foreach($other_information as $informations)
                            <p>
                                <span>{{ $informations }}</span>

                                <span></span>
                            </p>
                        @endforeach
                    @endif
                    @if($about_villas_info->location)
                        <p>
                            <span>{{ $about_villas_info->location }}</span>

                            <span>{{ $information->location }}</span>
                        </p>
                    @endif

                </div>
            </div>

            <div class="widget widget-form">
                <h3>Send message</h3>

                <form class="form clearfix">
                    <input type="hidden" name="action" value="request">
                    <input type="hidden" name="type" value="form-message">

                    <input type="text" name="name" value="name" onblur="if(this.value=='') this.value='name'" onfocus="if(this.value=='name') this.value=''" />

                    <input type="text" name="phone" value="phone" onblur="if(this.value=='') this.value='phone'" onfocus="if(this.value=='phone') this.value=''" />

                    <input type="text" name="email" value="email" onblur="if(this.value=='') this.value='email'" onfocus="if(this.value=='email') this.value=''" />

                    <textarea name="message" onfocus="if (this.value == 'message') this.value = '';" onblur="if (this.value == '') this.value = 'message';">message</textarea>

                    <input class="fl-r" type="submit" value="Send message">
                </form>
            </div>
        </aside>

        <div id="content">
            <div id="content-inner" class="content-text">
                @if($about_villas_info->title)
                    <h1>{{ $about_villas_info->title }}</h1>
                @endif

                @if($about_villas_info->first_image && $about_villas_info->first_image_text)
                    <div class="image-place">
                        <img src="/images/slider_img/{{ $about_villas_info->first_image }}" alt="asd">

                        <div class="img-desc img-desc-top">
                            <p>
                                {{ $about_villas_info->first_image_text }}
                            </p>
                        </div>
                    </div>
                @endif

                @if($about_villas_info->first_text)
                    <?
                    $first_text = mb_substr($about_villas_info->first_text, 1, mb_strlen($about_villas_info->first_text), 'utf-8');
                        $first_char = mb_substr($about_villas_info->first_text, 0, 1, 'utf-8')
                    ?>
                        <p class="dropcap dropcap-red">
                            <span>{{ $first_char }}</span>
                            {{ $first_text }}
                        </p>
                @endif

                @if($about_villas_info->second_image && $about_villas_info->second_image_text)
                    <div class="image-place">
                        <img src="/images/slider_img/{{ $about_villas_info->second_image }}" alt="asd">

                        <div class="img-desc img-desc-bottom">
                            <p>{{ $about_villas_info->second_image_text }}</p>
                        </div>
                    </div>
                @endif

                @if($about_villas_info->second_text)
                    <p>{{ $about_villas_info->second_text }}</p>
                @endif
                @if($about_villas_info->third_image)
                    <div class="image-place">
                        <img src="/images/slider_img/{{ $about_villas_info->third_image }}" alt="asd">
                    </div>
                @endif

                @if($about_villas_info->third_text)
                    <p>{{ $about_villas_info->third_text }}</p>
                @endif

                @if($about_villas_info->last_text)
                   <p>{{ $about_villas_info->last_text }}</p>
                @endif

            </div>
        </div>
    </section>
@endsection
