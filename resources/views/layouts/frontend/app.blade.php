<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontned/img/favicon.png')}}">
        <!-- for meta tag  -->
        @yield('meta')

        <!-- for header link -->
        @include('layouts.frontend.partial.head')

        <link rel="stylesheet" href="{{asset('massage/toastr/toastr.css')}}">
        <!-- for css input -->
        @stack('css')
    </head>
    <body class="home header-transparent  header-sticky header-v1 hide-topbar-mobile">

        <div id="page">
            @include('layouts.frontend.partial.header')
            
            @yield('content')
            
            @include('layouts.frontend.partial.footer')
        </div>
        <!--End pagewrapper-->

        <!--primary-mobile-nav-->
        <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
            <a href="#" class="close-canvas-mobile-panel">×</a>
            <ul class="menu">
                <li class="current-menu-item menu-item-has-children"><a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Page 1</a></li>
                        <li><a href="home-page-2.html">Home Page 2</a></li>
                        <li><a href="home-page-3.html">Home Page 3</a></li>
                        <li><a href="home-page-4.html">Home Page 4</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="services.html" class="dropdown-toggle">Services</a>
                    <ul class="sub-menu">
                        <li><a href="services.html">All Services</a></li>
                        <li><a href="road-freight-forwarding.html">Road Freight Forwarding</a></li>
                        <li><a href="ocean-freight-forwarding.html">Ocean Freight Forwarding</a></li>
                        <li><a href="air-freight-forwarding.html">Air Freight Forwarding</a></li>
                        <li><a href="warehousing.html">Warehousing</a></li>
                        <li><a href="door-to-door-delivery.html">Door to Door Delivery</a></li>
                        <li><a href="ground-transport.html">Ground Transport</a></li>
                        <li><a href="worldwide-transport.html">Worldwide Transport</a></li>
                        <li><a href="cargo-service.html">Cargo Service</a></li>
                        <li><a href="packaging-storage.html">Packaging &#038; Storage</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="projects.html" class="dropdown-toggle">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="faqs.html">FAQS</a></li>
                        <li><a href="our-prices.html">Our Prices</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="gallery.html" class="dropdown-toggle">Gallery</a>
                    <ul class="sub-menu">
                        <li><a href="gallery-column-4.html">Gallery Four Columns</a></li>
                        <li><a href="gallery-column-3.html">Gallery Three Columns</a></li>
                        <li><a href="gallery.html">Gallery Two Columns</a></li>
                        <li><a href="gallery-single.html">Gallery Single</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#" class="dropdown-toggle">Features</a>
                    <ul class="sub-menu">
                        <li><a href="request-a-quote.html">Request A Quote</a></li>
                        <li><a href="track-your-shipment.html">Track Your Shipment</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="blog.html" class="dropdown-toggle">News</a>
                    <ul class="sub-menu">
                        <li><a href="blog-column-2.html">Blog Two Columns</a></li>
                        <li><a href="blog-column-3.html">Blog Three Columns</a></li>
                        <li><a href="blog-column-4.html">Blog Four Columns</a></li>
                        <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                        <li><a href="blog-single.html">Blog Single Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li class="extra-menu-item menu-item-button-link">
                    <a href="request-a-quote.html" class="fh-btn btn">Get A Quote</a>
                </li>
            </ul>

        </div>
        <div id="off-canvas-layer" class="off-canvas-layer"></div>
        <!--primary-mobile-nav end-->

        <!--Scroll to top-->
        <a id="scroll-top" class="backtotop" href="#page-top"><i class="fa fa-angle-up"></i></a>

        <!-- for footer link -->
        @include('layouts.frontend.partial.foot')

        <script src="{{asset('massage/toastr/toastr.js')}}"></script>
        {!! Toastr::message() !!}
        <script>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error('{{ $error }}','Error',{
                        closeButton:true,
                        progressBar:true,
                    });
                @endforeach
            @endif
        </script>
        <!-- for javascript input -->
        @stack('js')
    </body>
</html>