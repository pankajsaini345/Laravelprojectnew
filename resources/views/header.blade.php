<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>e-com laravel</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template">
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="homecss/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800', 'Arizonia:400'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'homecss/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="homecss/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="homecss/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="homecss/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="homecss/fonts/wolmart.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="homecss/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="homecss/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="homecss/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="homecss/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="homecss/css/demo9.min.css">

</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        @php
                            $heder = DB::table('webdatas')->first();
                        @endphp
                        <p class="welcome-msg">{{ $heder->header }} </p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="homecss/images/flags/eng.png" alt="ENG Flag" width="14" height="8" class="dropdown-image"> ENG</a>
                            <div class="dropdown-box">
                                <a href="#ENG">
                                    <img src="homecss/images/flags/eng.png" alt="ENG Flag" width="14" height="8" class="dropdown-image">
                                    ENG
                                </a>
                                <a href="#FRA">
                                    <img src="homecss/images/flags/fra.png" alt="FRA Flag" width="14" height="8" class="dropdown-image">
                                    FRA
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <a href="#" class="text-normal d-lg-show">Sell on Wolmart</a>
                        <a href="my-account.html" class="d-lg-show">My Account</a>
                        <a href="homecss/ajax/login.html" class="d-lg-show login sign-in"><i class="w-icon-account"></i>Sign In</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="homecss/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        @php
                        $heder = DB::table('logos')->first();
                    @endphp
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <img src="{{ url('logoimages/' .$heder->images) }}" width="100px" alt="" height="50px">

                          
                        </a>
                        <form method="get" action="#" class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="5">Furniture</option>
                                    <option value="6">Shoes</option>
                                    <option value="7">Sports</option>
                                    <option value="8">Games</option>
                                    <option value="9">Computers</option>
                                    <option value="10">Electronics</option>
                                    <option value="11">Kitchen</option>
                                    <option value="12">Clothing</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search in..." required="">
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="/cdn-cgi/l/email-protection#95b6" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="compare.html">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <span class="cart-count">2</span>
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Beige knitted
                                                elas<br>tic
                                                runner shoes</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$25.68</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="homecss/images/cart/product-1.jpg" alt="product" height="84" width="94">
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Blue utility
                                                pina<br>fore
                                                denim dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$32.99</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="homecss/images/cart/product-2.jpg" alt="product" width="84" height="94">
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <nav class="main-nav ml-0">
                                <ul class="menu">
                                    <li class="active">
                                        <a href="demo9.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="demo9-shop.html">Shop</a>

                                        <!-- Start of Megamenu -->
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Shop Pages</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter<span class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Shop Layouts</h4>
                                                <ul>
                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.html">List Mode</a></li>
                                                    <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-variable.html">Variable Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                                    <li><a href="product-accordion.html">Data In Accordion</a></li>
                                                    <li><a href="product-section.html">Data In Sections</a></li>
                                                    <li><a href="product-swatch.html">Image Swatch</a></li>
                                                    <li><a href="product-extended.html">Extended Info</a>
                                                    </li>
                                                    <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                                    <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span class="tip tip-new">New</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-default.html">Default<span class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                                    <li><a href="product-grid.html">Grid Images</a></li>
                                                    <li><a href="product-masonry.html">Masonry</a></li>
                                                    <li><a href="product-gallery.html">Gallery</a></li>
                                                    <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                                    <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.html">Vendor</a>
                                        <ul>
                                            <li>
                                                <a href="vendor-dokan-store-list.html">Store Listing</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="vendor-dokan-store.html">Vendor Store</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Classic</a></li>
                                            <li><a href="blog-listing.html">Listing</a></li>
                                            <li>
                                                <a href="blog-grid-3cols.html">Grid</a>
                                                <ul>
                                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-masonry-3cols.html">Masonry</a>
                                                <ul>
                                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-mask-grid.html">Mask</a>
                                                <ul>
                                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="post-single.html">Single Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-us.html">Pages</a>
                                        <ul>

                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="elements.html">Elements</a>
                                        <ul>
                                            <li><a href="element-accordions.html">Accordions</a></li>
                                            <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                            <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                            <li><a href="element-buttons.html">Buttons</a></li>
                                            <li><a href="element-cta.html">Call to Action</a></li>
                                            <li><a href="element-icons.html">Icons</a></li>
                                            <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                            <li><a href="element-instagrams.html">Instagrams</a></li>
                                            <li><a href="element-categories.html">Product Category</a></li>
                                            <li><a href="element-products.html">Products</a></li>
                                            <li><a href="element-tabs.html">Tabs</a></li>
                                            <li><a href="element-testimonials.html">Testimonials</a></li>
                                            <li><a href="element-titles.html">Titles</a></li>
                                            <li><a href="element-typography.html">Typography</a></li>

                                            <li><a href="element-vendors.html">Vendors</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Features</a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/buynow/wolmartwp">Buy Wolmart</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                            <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Bottom -->

            {{-- <div class="container d-lg-show">
                <div class="inner-wrap">
                    <ul class="menu horizontal-menu category-menu">
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-electronics"></i>Computers
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-tshirt"></i>Clothings
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-sofa"></i>Furniture
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-bridge-lamp"></i>Electrolier
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-headphone"></i>Headphone
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-bag"></i>Office
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-camera"></i>Electronics
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-android"></i>Smartphone
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-rice-cooker"></i>Cooker
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-return"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-furniture"></i>Freezer
                            </a>
                        </li>
                        <li>
                            <a href="demo9-shop.html">
                                <i class="w-icon-dots-circle"></i>All Categories
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End of Horizontal Menu -->
            </div> --}}
            <!-- End of Container -->
        </header>
        <!-- End of Header -->