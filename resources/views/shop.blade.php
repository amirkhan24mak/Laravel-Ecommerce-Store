@extends('weblayout.webnavfoot')

@section('navandfoot')
    

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Our Products</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Shop Main Area Start Here -->
<div class="shop-main-area">
    <div class="container container-default custom-area">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 col-12 col-custom widget-mt">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper mb-30">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_3" type="button" class="active btn-grid-3" title="Grid"><i class="fa fa-th"></i></button>
                        <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                    <div class="shop-select">
                        <form class="d-flex flex-column w-100" action="#">
                            <div class="form-group">
                                <select class="form-control nice-select w-100">
                                    <option selected value="1">Alphabetically, A-Z</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_3">
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink stick</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$60.00</span>
                                        <span class="old-price"><del>$70.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink stick</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$60.00</span>
                                        <span class="old-price"><del>$70.00</del></span>
                                    </div>
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/3.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/4.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Jasmine flowers white</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Jasmine flowers white</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/5.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/6.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Blossom bouquet flower</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Blossom bouquet flower</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/7.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/8.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Orchid flower red stick</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Orchid flower red stick</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/9.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/1.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/8.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/7.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Hyacinth white stick</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Hyacinth white stick</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink stick</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$60.00</span>
                                        <span class="old-price"><del>$70.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink stick</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$60.00</span>
                                        <span class="old-price"><del>$70.00</del></span>
                                    </div>
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/3.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/4.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Jasmine flowers white</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Jasmine flowers white</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/5.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/6.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Blossom bouquet flower</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Blossom bouquet flower</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/7.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/8.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Orchid flower red stick</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Orchid flower red stick</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/9.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/1.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="assets/images/product/8.jpg" alt="" class="product-image-1 w-100">
                                        <img src="assets/images/product/7.jpg" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Hyacinth white stick</a></h4>
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
                                <div class="product-content-listview">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Hyacinth white stick</a></h4>
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
                                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <div class="button-listview">
                                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                                        <a class="list-icon" href="compare.html" title="Compare">
                                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                        </a>
                                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Wrapper End -->
                <!-- Bottom Toolbar Start -->
                <div class="row">
                    <div class="col-sm-12 col-custom">
                        <div class="toolbar-bottom">
                            <div class="pagination">
                                <ul>
                                    <li class="current">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">next</a></li>
                                    <li><a href="#">&gt;&gt;</a></li>
                                </ul>
                            </div>
                            <p class="desc-content text-center text-sm-right mb-0">Showing 1 - 12 of 34 result</p>
                        </div>
                    </div>
                </div>
                <!-- Bottom Toolbar End -->
            </div>
            <div class="col-lg-3 col-12 col-custom">
                <!-- Sidebar Widget Start -->
                <aside class="sidebar_widget widget-mt">
                    <div class="widget_inner">
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Search</h3>
                            <div class="search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Menu Categories</h3>
                            <!-- Widget Menu Start -->
                            <nav>
                                <ul class="mobile-menu p-0 m-0">
                                    <li class="menu-item-has-children"><a href="#">Grocery</a>
                                        <ul class="dropdown">
                                            <li><a href="#">OIL & GHEE</a></li>
                                            <li><a href="#">RICE</a></li>
                                            <li><a href="#">FLOUR</a></li>
                                            <li><a href="#">SNACKS</a></li>
                                            <li><a href="#">DESSERTS</a></li>
                                            <li><a href="#">SUGAR</a></li>
                                            <li><a href="#">PACKAGED FOOD</a></li>
                                            <li><a href="#">FRUIT & VEGETABLES</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Electronics</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">TVs & ENTERTAINMENT</a></li>
                                            <li><a href="shop-right-sidebar.html">HEATING & COOLING</a></li>
                                            <li><a href="shop-list-left.html">LAPTOP</a></li>
                                            <li><a href="shop-list-right.html">GAMING ACCESSORIES</a></li>
                                            <li><a href="shop-fullwidth.html">MOBILES</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Beauty</a>
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
                            </nav>
                            <!-- Widget Menu End -->
                        </div>
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Price Filter</h3>
                            <!-- Widget Menu Start -->
                            <form action="#">
                                <div id="slider-range"></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />
                            </form>
                            <!-- Widget Menu End -->
                        </div>
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Categories</h3>
                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    <li><a href="#">All Product</a></li>
                                    <li><a href="#">Grocery (5)</a></li>
                                    <li><a href="#">Electronics (4)</a></li>
                                    <li><a href="#">Beauty (6)</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="widget-list widget-mb-3">
                            <h3 class="widget-title">Tags</h3>
                            <div class="sidebar-body">
                                <ul class="tags">
                                    <li><a href="#">Rose</a></li>
                                    <li><a href="#">Sunflower</a></li>
                                    <li><a href="#">Tulip</a></li>
                                    <li><a href="#">Lily</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Modern</a></li>
                                    <li><a href="#">Gift</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-list mb-0">
                            <h3 class="widget-title">Recent Products</h3>
                            <div class="sidebar-body">
                                <div class="sidebar-product align-items-center">
                                    <a href="product-details.html" class="image">
                                        <img src="assets/images/cart/1.jpg" alt="product">
                                    </a>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.html">Glory of the Snow</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">$80.00</span>
                                            <span class="old-price"><del>$90.00</del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-product align-items-center">
                                    <a href="product-details.html" class="image">
                                        <img src="assets/images/cart/2.jpg" alt="product">
                                    </a>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.html">Pearly Everlasting</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">$50.00</span>
                                            <span class="old-price"><del>$60.00</del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-product align-items-center">
                                    <a href="product-details.html" class="image">
                                        <img src="assets/images/cart/3.jpg" alt="product">
                                    </a>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.html">Jack in the Pulpit</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">$40.00</span>
                                            <span class="old-price"><del>$50.00</del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar Widget End -->
            </div>
        </div>
    </div>
</div>
<!-- Shop Main Area End Here -->


@endsection