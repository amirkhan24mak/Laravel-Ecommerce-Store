<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:14 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMART SHOPPING HUB</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url("/assets/images/favicon.ico")}}">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/vendor/bootstrap.min.css")}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/vendor/font.awesome.min.css")}}">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/vendor/linearicons.min.css")}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/plugins/swiper-bundle.min.css")}}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/plugins/animate.min.css")}}">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/plugins/jquery-ui.min.css")}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/plugins/nice-select.min.css")}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url("/assets/css/plugins/magnific-popup.css")}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url("/assets/css/style.css")}}">

</head>

<body>

    <!-- Header Area Start Here -->
    <header class="main-header-area" style="background-color: #ffcf20;"> 
        <!-- Main Header Area Start -->
        <div class="main-header header-transparent header-sticky">
            <div class="container-fluid" style="background-color: #1b1b1b;">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="{{url('/')}}">
                                <img class="img-full" src="assets/images/logo/logo1.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a href="{{url('/')}}">
                                        <span class="menu-text"> Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/Shop')}}">
                                        <span class="menu-text">Shop</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="mega-menu dropdown-hover">
                                        <div class="menu-colum">
                                            <ul>
                                                <li><span class="mega-menu-text">Grocery</span></li>
                                                @foreach ($fetch as $Scatagery)
                                                <li><a href="#">{{$Scatagery->Subcata_Name}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </div>
                                        <div class="menu-colum">
                                            <ul>
                                                <li><span class="mega-menu-text">Electronics</span></li>
                                                @foreach ($fetchtwo as $Scatagery)
                                                <li><a href="#">{{$Scatagery->Subcata_Name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="menu-colum">
                                            <ul>
                                                <li><span class="mega-menu-text">Beauty</span></li>
                                                @foreach ($fetchthree as $Scatagery)
                                                <li><a href="#">{{$Scatagery->Subcata_Name}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="{{url('/about')}}">
                                        <span class="menu-text"> About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/contact')}}">
                                        <span class="menu-text">Contact Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-text"> Pages</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="frequently-questions.html">FAQ</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="{{url('/error')}}">Error 404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="minicart-wrap">
                                    <a href="#" class="minicart-btn toolbar-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="cart-item_count">3</span>
                                    </a>
                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                        <div class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/1.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="cart.html">Odio tortor consequat</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>1×</span>
                                                        <span class="cart-price">$98.00</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="cart.html">Integer eget augue</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>1×</span>
                                                        <span class="cart-price">$98.00</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/3.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="cart.html">Eleifend quam</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>1×</span>
                                                        <span class="cart-price">$98.00</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-price-total d-flex justify-content-between">
                                            <h5>Total :</h5>
                                            <h5>$166.00</h5>
                                        </div>
                                        <div class="cart-links d-flex justify-content-between">
                                            <a class="btn product-cart button-icon flosun-button dark-btn"
                                                href="cart.html">View cart</a>
                                            <a class="btn flosun-button secondary-btn rounded-0"
                                                href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidemenu-wrap">
                                    <a href="#"><i class="fa fa-search"></i> </a>
                                    <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                                        <li>
                                            <form action="#">
                                                <input name="search" id="search" placeholder="Search" type="text">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="account-menu-wrap d-none d-lg-flex">
                                    <a href="#" class="off-canvas-menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <li class="mobile-menu-btn d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search product...">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="{{url('/')}}">Home</a>
                                    
                                </li>
                                <li class="menu-item-has-children"><a href="{{url('/Shop')}}">Shop</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title has-children"><a href="#" style="color: #E72463;">Grocery</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">OIL & GHEE</a></li>
                                                <li><a href="shop-right-sidebar.html">RICE</a></li>
                                                <li><a href="shop-list-left.html">FLOUR</a></li>
                                                <li><a href="shop-list-right.html">SNACKS</a></li>
                                                <li><a href="shop-fullwidth.html">DESSERTS</a></li>
                                                <li><a href="shop-fullwidth.html">SUGAR</a></li>
                                                <li><a href="shop-fullwidth.html">PACKAGED FOOD</a></li>
                                                <li><a href="shop-fullwidth.html">FRUIT & VEGETABLES</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children"><a href="#" style="color: #E72463;">Electronics</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">TVs & ENTERTAINMENT</a></li>
                                                <li><a href="shop-right-sidebar.html">HEATING & COOLING</a></li>
                                                <li><a href="shop-list-left.html">LAPTOP</a></li>
                                                <li><a href="shop-list-right.html">GAMING ACCESSORIES</a></li>
                                                <li><a href="shop-fullwidth.html">MOBILES</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children" ><a href="#" style="color: #E72463;">Beauty</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">MAKEUP</a></li>
                                                <li><a href="shop-right-sidebar.html">LIPS</a></li>
                                                <li><a href="shop-list-left.html">BABY CORNER</a></li>
                                                <li><a href="shop-list-right.html">HAIR</a></li>
                                                <li><a href="shop-fullwidth.html">FRAGRANCE</a></li>
                                                <li><a href="shop-fullwidth.html">SKIN CARE</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="menu-item-has-children "><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="frequently-questions.html">FAQ</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="{{url('/error')}}">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/about')}}">About Us</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <div class="offcanvas-widget-area">
                        <div class="switcher">
                           
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="#">(+92) 31724 27692</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="#">info@amart.com</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="facebook-color-bg" title="Facebook-f" href="#"><i
                                        class="fa fa-facebook-f"></i></a>
                                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin-color-bg" title="Linkedin" href="#"><i
                                        class="fa fa-linkedin"></i></a>
                                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <ul class="menu-top-menu">
                            <li><a href="about-us.html">About Us</a></li>
                        </ul>
                        <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                        <div class="switcher">
                            
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="#">(+92) 31724 27692</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="#">info@amart@gmail.com</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="facebook-color-bg" title="Facebook-f" href="#"><i
                                        class="fa fa-facebook-f"></i></a>
                                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin-color-bg" title="Linkedin" href="#"><i
                                        class="fa fa-linkedin"></i></a>
                                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
    <!-- Header Area End Here -->
    

@yield('navandfoot')


    <!--Footer Area Start-->
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                        <div class="single-footer-widget m-0">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo2.png" alt="Logo Image">
                                </a>
                            </div>
                            <p class="desc-content">Lorem Khaled Ipsum is a major key to success. To be successful
                                you’ve got to work hard you’ve got to make it.</p>
                            <div class="social-links">
                                <ul class="d-flex">
                                    <li>
                                        <a class="rounded-circle" href="#" title="Facebook">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Vimeo">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="about-us.html">Our Company</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="about-us.html">Our Services</a></li>
                                <li><a href="about-us.html">Why We?</a></li>
                                <li><a href="about-us.html">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Quicklink</h2>
                            <ul class="widget-list">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Support</h2>
                            <ul class="widget-list">
                                <li><a href="contact-us.html">Online Support</a></li>
                                <li><a href="contact-us.html">Shipping Policy</a></li>
                                <li><a href="contact-us.html">Return Policy</a></li>
                                <li><a href="contact-us.html">Privacy Policy</a></li>
                                <li><a href="contact-us.html">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">See Information</h2>
                            <div class="widget-body">
                                <address>Korangi Industrail Area, PLOT R-109, Karachi, Pakistan.<br>Phone: +92317 242 692
                                    <br>Email: info@amart@gmail.com</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container custom-area">
                <div class="row">
                    <div class="col-12 text-center col-custom">
                        <div class="copyright-content">
                            <p>Copyright © 2023 <a href="https://hasthemes.com/"
                                    title="https://hasthemes.com/">AdNexus Digital</a> | Built
                                with&nbsp;<strong>AMART</strong>&nbsp;by <a href="https://hasthemes.com/"
                                    title="https://hasthemes.com/">Aamirkhan</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Area End-->

    <!-- Modal -->
    <div class="modal flosun-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close close-button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="close-icon" aria-hidden="true">x</span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid custom-area">
                        <div class="row">
                            <div class="col-md-6 col-custom">
                                <div class="modal-product-img">
                                    <a class="w-100" href="#">
                                        <img class="w-100" src="assets/images/product-img/baby_lotion1.jpg" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="modal-product">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title">Product dummy name</h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">PKR 1,300.00</span>
                                            <span class="old-price"><del>PKR 1,500.00</del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>1 Review</span>
                                        </div>
                                        <p class="desc-content">we denounce with righteous indignation and dislike men
                                            who are so beguiled and demoralized by the charms of pleasure of the moment,
                                            so blinded by desire, that they cannot foresee the pain and trouble that are
                                            bound to ensue; and equal blame bel...</p>
                                        <form class="d-flex flex-column w-100" action="#">
                                            <div class="form-group">
                                                <select class="form-control nice-select w-100">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                        </form>
                                        <div class="quantity-with-btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="0" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                </div>
                                            </div>
                                            <div class="add-to_btn">
                                                <a class="btn product-cart button-icon flosun-button dark-btn"
                                                    href="cart.html">Add to cart</a>
                                                <a class="btn flosun-button secondary-btn rounded-0"
                                                    href="wishlist.html">Add to wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
    <!-- Scroll to Top End -->

    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="{{url("/assets/js/vendor/jquery-3.6.0.min.js")}}"></script>
    <!-- jQuery Migrate JS -->
    <script src="{{url("/assets/js/vendor/jquery-migrate-3.3.2.min.js")}}"></script>
    <!-- Modernizer JS -->
    <script src="{{url("/assets/js/vendor/modernizr-3.7.1.min.js")}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{url("/assets/js/vendor/bootstrap.bundle.min.js")}}"></script>

    <!-- Swiper Slider JS -->
    <script src="{{url("/assets/js/plugins/swiper-bundle.min.js")}}"></script>
    <!-- nice select JS -->
    <script src="{{url("/assets/js/plugins/nice-select.min.js")}}"></script>
    <!-- Ajaxchimpt js -->
    <script src="{{url("/assets/js/plugins/jquery.ajaxchimp.min.js")}}"></script>
    <!-- Jquery Ui js -->
    <script src="{{url("/assets/js/plugins/jquery-ui.min.js")}}"></script>
    <!-- Jquery Countdown js -->
    <script src="{{url("/assets/js/plugins/jquery.countdown.min.js")}}"></script>
    <!-- jquery magnific popup js -->
    <script src="{{url("/assets/js/plugins/jquery.magnific-popup.min.js")}}"></script>

    <!-- Main JS -->
    <script src="{{url("/assets/js/main.js")}}"></script>


</body>


<!-- Mirrored from htmldemo.net/flosun/flosun/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:14 GMT -->

</html>