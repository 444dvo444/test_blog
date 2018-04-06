@extends('layouts.app')


@section('title')
    mlinovi hills
    @endsection

@section('content')
    <section id="container" class="clearfix">
        <aside id="sidebar" class="fl-l">
            <nav id="sidebar-menu">
                <ul>
                    <li>
                        <a id="callback-btn" href="javascript:void(0);">
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
            <div id="intro">
                <img src="images/{{ $home_page->image }}" alt="single">

                <div id="intro-inner">
                    <div>
                        <span class="icon-diamond"></span>

                        <p>{{ $home_page->heading }}</p>

                        <p class="description">{{ $home_page->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection