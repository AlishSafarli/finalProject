<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front.layouts.includes.head');
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('front/assets/img/icon/loder.png') }}" alt="loder">
                </div>
            </div>
        </div>
    </div>

    {{-- Header component --}}
    <x-front.header />

    <main>
        @if (request()->path() !== '/')
            <div class="hero-area section-bg2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-area">
                                <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                                    <div class="hero-caption hero-caption2">
                                        <h2>{{ request()->path() }}</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item"><a href="#">Contact</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </main>


    {{-- footer component --}}
    <x-front.footer />

    <div id="back-top">
        <a class="wrapper" title="Go to Top" href="#">
            <div class="arrows-container">
                <div class="arrow arrow-one">
                </div>
                <div class="arrow arrow-two">
                </div>
            </div>
        </a>
    </div>

    @include('front.layouts.includes.foot');
    @stack('js');
</body>

</html>
