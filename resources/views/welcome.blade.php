@extends("weblayout.webnavfoot")

@section("navandfoot")
    

<!-- Slider/Intro Section Start -->
<div class="intro11-slider-wrap section">
    <div class="intro11-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="intro11-section swiper-slide slide-1 slide-bg-1 bg-position">
               
            </div>
            <div class="intro11-section swiper-slide slide-2 slide-bg-1 bg-position">
                
            </div>
            <div class="intro11-section swiper-slide slide-3 slide-bg-1 bg-position">
                
            </div>
            <div class="intro11-section swiper-slide slide-4 slide-bg-1 bg-position">
                
            </div>
            <div class="intro11-section swiper-slide slide-5 slide-bg-1 bg-position">
                
            </div>
        </div>
        <!-- Slider Navigation -->
        <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
        <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
        <!-- Slider pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- Slider/Intro Section End -->



<!-- Banner Area Start Here -->
<div class="banner-area mt-text-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-custom">
                <!--Single Banner Area Start-->
                <div class="single-banner hover-style mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img src="assets/images/slider/electronic.jpg" alt="">
                            <div class="categories-content">
                                <h3>Electronics</h3>
                                <h4>18 items</h4>
                            </div>
                            <div class="overlay-1"></div>
                            
                        </a>
                    </div>
                </div>
                <!--Single Banner Area End-->
            </div>
            <div class="col-md-4 col-custom">
                <!--Single Banner Area Start-->
                <div class="single-banner hover-style mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img src="assets/images/slider/makeupbanner.jpeg" alt="">
                            <div class="categories-content">
                                <h3>Beauty</h3>
                                <h4>18 items</h4>
                            </div>
                            <div class="overlay-1"></div>
                        </a>
                    </div>
                </div>
                <!--Single Banner Area End-->
            </div>
            <div class="col-md-4 col-custom">
                <!--Single Banner Area Start-->
                <div class="single-banner hover-style mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img src="assets/images/slider/s.jpg" alt="">
                            <div class="categories-content">
                                <h3>Grocery</h3>
                                <h4>18 items</h4>
                            </div>
                            <div class="overlay-1"></div>
                        </a>
                    </div>
                </div>
                <!--Single Banner Area End-->
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->


<!--Product Area Start-->
<div class="product-area mt-text-2">
    <div class="container custom-area-2 overflow-hidden">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center mb-30">
                    <span class="section-title-1">Wonderful gift</span>
                    <h3 class="section-title-3">Featured Products</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row product-row">
            <div class="col-12 col-custom">
                <div class="product-slider swiper-container anime-element-multi">
                    <div class="swiper-wrapper">
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/baby_lotion1.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img/baby_lotion1.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Baby Magic Cleansing 488Ml</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 1,300.00</span>
                                        <span class="old-price"><del>PKR 1,500.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/FoundationPrimer_1.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img/FoundationPrimer_1.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">ST London-Foundation Primer</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 1,450.00</span>
                                        <span class="old-price"><del>PKR 1,600.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/blush3.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img-gallery/Blusher-3.1g.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Blusher Reloaded Pink Lady</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 1,248.00</span>
                                        <span class="old-price"><del>PKR 1,500.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/bbcream2.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img/bbcream2.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                       
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">ST London - BB Cream</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 1,608.00</span>
                                        <span class="old-price"><del>PKR 2,010.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/bbcream1.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img/bbcream1.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                       
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Maybelline - Super BB Cream</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 1,439.00</span>
                                        <span class="old-price"><del>PKR 1,730.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/Havit-H659d-Gaming-Headset.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img-gallery/headphone2.1.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Havit H659d Gaming Headset</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 4,550.00</span>
                                        <span class="old-price"><del>PKR 6,550.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/logitech_g900_chaos_spectrum_professional-grade_wired_wireless_gaming_mouse1_-_tejar.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img-gallery/mouse4.3.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Logitech G900 Chaos Spectrum</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 31,899.00</span>
                                        <span class="old-price"><del>PKR 33,899.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/asus_rog_chakram_wireless_gaming_mouse_with_qi_charging_-_4tejar.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img-gallery/mouse1.2.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">ASUSROG Wireless Mouse</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 32,499.00</span>
                                        <span class="old-price"><del>PKR 35,499.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/sunridgeatta.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img/sunridgeatta.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">SUNRIDGE HIGH FIBRE 2KG</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 450.00</span>
                                        <span class="old-price"><del>PKR 500.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/soya.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img-gallery/soya1.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">SOYA SUPREME GHEE 2.5KG</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 1,480.00</span>
                                        <span class="old-price"><del>PKR 1,600.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/falak.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img/falak.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">FALAK PESHAWARI SELLA</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 2,755</span>
                                        <span class="old-price"><del>PKR 2,855</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product-img/Choco-bliss.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product-img/Choco-bliss.jpg" 
                                        
                                        alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">CHOCOLATE BLISS 360GM</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">PKR 570.00</span>
                                        <span class="old-price"><del>PKR 530.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                    </div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Product Area End-->
<!-- Product Countdown Area Start Here -->
<div class="product-countdown-area mt-text-3">
    <div class="container custom-area">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center mb-30">
                    <h3 class="section-title-3">Deal of The Day</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row">
            <!--Countdown Start-->
            <div class="col-12 col-custom">
                <div class="countdown-area">
                    <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24"></div>
                </div>
            </div>
            <!--Countdown End-->
        </div>
        <div class="row product-row">
            <div class="col-12 col-custom">
                <div class="item-carousel-2 swiper-container anime-element-multi product-area">
                    <div class="swiper-wrapper">
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/2.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left"
                                                title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Flowers pink stick</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/5.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/6.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left"
                                                title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Flowers white</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/7.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/8.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left"
                                                title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Blossom flower</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/3.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/4.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left"
                                                title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Flower red stick</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/8.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/7.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left"
                                                title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                    </div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Countdown Area End Here -->

<!-- Testimonial Area Start Here -->
<div class="testimonial-area mt-text-2">
    <div class="container custom-area">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center">
                    <span class="section-title-1">We Love Our Clients</span>
                    <h3 class="section-title-3">What They’re Saying</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row">
            <div class="testimonial-carousel swiper-container intro11-carousel-wrap col-12 col-custom">
                <div class="swiper-wrapper">
                    <div class="single-item swiper-slide">
                        <!--Single Testimonial Start-->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img src="assets/images/testimonial/testimonial1.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>These guys have been absolutely outstanding. Perfect Themes and the best of all
                                    that you have many options to choose! Best Support team ever! Very fast
                                    responding! Thank you very much! I highly recommend this theme and these people!
                                </p>
                                <div class="testimonial-author">
                                    <h6>Katherine Sullivan <span>Customer</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--Single Testimonial End-->
                    </div>
                    <div class="single-item swiper-slide">
                        <!--Single Testimonial Start-->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img src="assets/images/testimonial/testimonial2.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>These guys have been absolutely outstanding. Perfect Themes and the best of all
                                    that you have many options to choose! Best Support team ever! Very fast
                                    responding! Thank you very much! I highly recommend this theme and these people!
                                </p>
                                <div class="testimonial-author">
                                    <h6>Alex Jhon <span>Customer</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--Single Testimonial End-->
                    </div>
                </div>
                <!-- Slider Navigation -->
                <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i>
                </div>
                <div class="home1-slider-next swiper-button-next main-slider-nav"><i
                        class="lnr lnr-arrow-right"></i></div>
                <!-- Slider pagination -->
                <div class="swiper-pagination default-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End Here -->
<!-- Newsletter Area Start Here -->
<div class="news-letter-area gray-bg pt-no-text pb-no-text mt-text-3">
    <div class="container custom-area">
        <div class="row align-items-center">
            <!--Section Title Start-->
            <div class="col-md-6 col-custom">
                <div class="section-title text-left mb-35">
                    <h3 class="section-title-3">Send Newsletter</h3>
                    <p class="desc-content mb-0">Enter Your Email Address For Our Mailing List To Keep Your Self
                        Update</p>
                </div>
            </div>
            <!--Section Title End-->
            <div class="col-md-6 col-custom">
                <div class="news-latter-box">
                    <div class="newsletter-form-wrap text-center">
                        <form id="mc-form" class="mc-form">
                            <input type="email" id="mc-email" class="form-control email-box"
                                placeholder="email@example.com" name="EMAIL">
                            <button id="mc-submit" class="btn rounded-0" type="submit">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Area End Here -->

<!-- Brand Logo Area Start Here -->
<div class="brand-logo-area gray-bg pt-no-text pb-no-text mt-text-5">
    <div class="container custom-area">
        <div class="row">
            <div class="col-12 col-custom">
                <div class="brand-logo-carousel swiper-container intro11-carousel-wrap arrow-style-3">
                    <div class="swiper-wrapper">
                        <div class="single-brand swiper-slide">
                            <a href="#">
                                <img src="assets/images/brand/1.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="single-brand swiper-slide">
                            <a href="#">
                                <img src="assets/images/brand/2.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="single-brand swiper-slide">
                            <a href="#">
                                <img src="assets/images/brand/3.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="single-brand swiper-slide">
                            <a href="#">
                                <img src="assets/images/brand/4.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="single-brand swiper-slide">
                            <a href="#">
                                <img src="assets/images/brand/5.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <!-- Slider Navigation -->
                    <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i
                            class="lnr lnr-arrow-left"></i></div>
                    <div class="home1-slider-next swiper-button-next main-slider-nav"><i
                            class="lnr lnr-arrow-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo Area End Here -->


@endsection