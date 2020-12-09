<!doctype html>
<html>
    <head> 
        <meta charset="utf-8"/>
        <link rel="icon" href="img/breadicon.png" sizes="32x32" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="{{asset('/public/forntend/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('/public/forntend/css/main.css')}}"/>
        <link rel="stylesheet" href="{{asset('/public/forntend/css/mont.css')}}"/>
       
        <title>My ESA Doctor</title>
    </head>
    <body>
      
        <header class="py-2 header">
            <div class="container">
                <div class="headerMenuLogo img-fluid d-flex justify-content-between align-items-center position-relative">
                    <div class="logo">
                        <a href='{{ route('home') }}'>
                            <picture>
                                <source type="image/webp" data-srcset="{{asset('/public/forntend/img/esaLogo.webp')}}" />
                                <source type="image/png" data-srcset="{{asset('/public/forntend/img/esaLogo.png')}}" />
                                <img data-src="{{asset('/public/forntend/img/esaLogo.png')}}" class="lazyload" alt="My ESA Doctor" />
                            </picture>
                        </a>
                    </div>
                    <div class="rightSide d-flex align-items-center ">
                        <div class="phoneNumberMab d-flex justify-content-between align-items-center ">
                            <p class="mb-0 mx-xl-3 desktopView">
                            <picture>
                                <source type="image/webp" data-srcset="{{asset('/public/forntend/img/phone.webp')}}" />
                                <source type="image/png" data-srcset="{{asset('/public/forntend/img/phone.png')}}" />
                                <img data-src="{{asset('/public/forntend/img/phone.png')}}" class="lazyload" alt="callIcon" />
                            </picture>
                            (866) 360-560-5652
                            </p>
                            <p class="mb-0 mx-xl-3 desktopView ">
                            <picture>
                                <source type="image/webp" data-srcset="{{asset('/public/forntend/img/location.webp')}}" />
                                <source type="image/png" data-srcset="{{asset('/public/forntend/img/location.png')}}" />
                                <img data-src="{{asset('/public/forntend/img/location.png')}}" class="lazyload" alt="Location" />
                            </picture>2001 East 1st St Ste 102 Santa Ana, CA 92705
                            </p>
                            <div class="menuToggle mx-3">
                                <span style="font-size:30px;cursor:pointer">
                                    <button type="button" class="btn btn-primary mennu">
                                        <b class="d-none d-xl-inline-block">Menu</b> <img src="{{asset('/public/forntend/img/menu.png')}}" alt=""/>
                                    </button>
                                </span>
                                <div id="myNav" class="overlay">
                                    <div class="overlay-content">
                                        <div class="leftSideMenu container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <nav role="navigation">
                                                        <ul>
                                                            <li><a href="{{ route('how-it-works') }}">How it works</a></li>
                                                            <li><a href="{{ route('our-clinic') }}">our clinic</a></li>
                                                            <li><a href="{{ route('blog') }}">blog</a></li>
                                                            <li>
                                                                <a href="javascript:void(0);">Guide <i class="fa fa-chevron-down"></i></a>
                                                                <ul class="dropdown">
                                                                    <li><a href="{{ route('how-to-get-esa-letter') }}" class="">ESA Getting Started Guide</a></li>
                                                                    <li><a href="{{ route('how-to-register-an-emotional-support-dog') }}" class="">How to register your dog as an emotional support animal?</a></li>
                                                                    <li><a href="{{ route('how-to-register-an-emotional-support-cat') }}" class="">How to Register an Emotional Support Cat</a></li>
                                                                    <li><a href="{{ route('esa-vs-service-animal') }}" class="">Emotional Support Animal vs Service Animal</a></li>
                                                                    <li><a href="{{ route('how-to-fly-with-a-dog') }}" class="">How to Fly with a Dog</a></li>
                                                                    <li><a href="{{ route('esa-laws-california') }}" class="">ESA Laws California</a></li>
                                                                    <li><a href="{{ route('how-to-certify-an-emotional-support-dog') }}" class="">How to Get an Emotional Support Dog Certification</a></li>
                                                                    <li><a href="{{ route('emotional-support-animal-for-fair-housing-act') }}" class="">The Fair Housing Act Section 504: Emotional Support Animal</a></li>
                                                                    <li><a href="{{ route('emotional-support-dog-vest') }}" class="">Emotional Support Dog Vest</a></li>
                                                                    <li><a href="{{ route('best-emotional-support-dog-breeds') }}" class="">Best Emotional Support Dog Breeds</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">Airlines <i class="fa fa-chevron-down"></i></a>
                                                                <ul class="dropdown">
                                                                    <li><a href="{{ route('alaska-airlines-esa-pet-policy') }}" class="">Alaska Airlines &amp; ESA Letter</a></li>
                                                                    <li><a href="{{ route('how-to-fly-united-airlines-with-an-emotional-support-animal-letter') }}" class="">United Airlines &amp; ESA Letter</a></li>
                                                                    <li><a href="{{ route('american-airlines-emotional-support-animal') }}" class="">American Airlines &amp; ESA Letter</a></li>
                                                                    <li><a href="{{ route('delta-airlines-emotional-support-animal') }}" class="">Delta Airlines ESA Policy</a></li>
                                                                    <li><a href="{{ route('southwest-airlines-esa-pet-policy') }}" class="">Southwest Airlines ESA Pet Policy</a></li>
                                                                    <li><a href="{{ route('jetblue-emotional-support-animal-policy') }}" class="">JetBlue ESA Pet Policy</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="{{ route('what-are-emotional-support-animal-laws') }}">ESA laws</a></li>
                                                            <li><a href="#">Shop</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="seondaryBtn mx-3 desktopView">
                                <a href="https://myesadoc.com/register?token=88905b1d0060cabddf10ea1be9eea08d" class="btn bt_n brdtheme">Pre-Qualify Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		
		@yield('content')