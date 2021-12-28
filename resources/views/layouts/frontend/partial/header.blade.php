
<!-- topbar -->
<div id="fh-header-minimized" class="fh-header-minimized fh-header-v1"></div>
<div id="topbar" class="topbar">
    <div class="container">
        <div class="topbar-left topbar-widgets text-left">
            <div id="cargo-office-location-widget-2" class="widget cargo-office-location-widget">
                <div class="office-location clearfix">
                    <ul class="topbar-office active">
                        <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +012 345 6789</li>
                        <li><i class="flaticon-web" aria-hidden="true"></i>Mail@CargoHub.com</li>
                        <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, NY 10012, USA</li>
                    </ul>
                    <ul class="topbar-office">
                        <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +099 222 1111</li>
                        <li><i class="flaticon-web" aria-hidden="true"></i>Mail@Evanto.com</li>
                        <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, LD 32614, UK</li>
                    </ul>
                    <ul class="topbar-office">
                        <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +098 765 4321</li>
                        <li><i class="flaticon-web" aria-hidden="true"></i>Mail@Steelthemes.com</li>
                        <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, Tokyo 32614, Japan</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="topbar-right topbar-widgets text-right">
            <div class="widget cargo-search-widget">
                <div class="topbar-search topbar-search-1">
                    <a href="#" class="toggle-search" id="toggle-search"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <form class="search-form" action="#">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="search-field" placeholder="Search..." value="">
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                </div>
            </div>
            <div class="widget cargohub-social-links-widget">
                <div class="list-social style-1">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- topbar end -->
<!-- masthead -->
<header id="masthead" class="site-header clearfix">
    <div class="header-main clearfix">
        <div class="container mobile_relative">
            <div class="row">
                <div class="site-logo col-md-3 col-sm-6 col-xs-6">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{asset('frontend/images/logo-light.png')}}" alt="CargoHub" class="logo-light show-logo">
                        <img src="{{asset('frontend/images/logo.png')}}" alt="CargoHub" class="logo-dark hide-logo">
                    </a>
                </div>
                <div class="site-menu col-md-9 col-sm-6 col-xs-6">
                    <nav id="site-navigation" class="main-nav primary-nav nav">
                        <ul class="menu">
                            <li class="{{ Route::is('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="has-children"><a href="services.html" class="dropdown-toggle">Services</a>
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
                            <li class="has-children"><a href="#" class="dropdown-toggle">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="faqs.html">FAQS</a></li>
                                    <li><a href="our-prices.html">Our Prices</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="gallery.html" class="dropdown-toggle">Gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="gallery-column-4.html">Gallery Four Columns</a></li>
                                    <li><a href="gallery-column-3.html">Gallery Three Columns</a></li>
                                    <li><a href="gallery.html">Gallery Two Columns</a></li>
                                    <li><a href="gallery-single.html">Gallery Single</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#" class="dropdown-toggle">Features</a>
                                <ul class="sub-menu">
                                    <li><a href="request-a-quote.html">Request A Quote</a></li>
                                    <li><a href="track-your-shipment.html">Track Your Shipment</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog.html" class="dropdown-toggle">News</a>
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
                                <a href="request-a-quote.html" class="fh-btn btn">Picup Request</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <a href="#" class="navbar-toggle">
                <span class="navbar-icon">
                    <span class="navbars-line"></span>
                </span>
            </a>
        </div>
    </div>
</header>

<!-- masthead end -->