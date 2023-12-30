@include('header')
  <!-- Start of Main -->
  <main class="main">
    <section class="intro-section mt-4">
        <div class="swiper-container swiper-theme animation-slider" data-swiper-options="{
            'slidesPerView': 1,
            'autoplay': {
                'delay': 8000,
                'disableOnInteraction': false
            }
        }">
            <div class="swiper-wrapper row gutter-no cols-1">

                                        <?php
                                        $users = DB::table('sliders')->get();
                                       ?>
                                              @foreach($users as $value)

                <div class="swiper-slide banner banner-fixed content-center intro-slide intro-slide1" style="background-image: url(homecss/images/demos/demo9/slides/slide-1.jpg); background-color: #EEF4F4;">
                    <div class="container">
                        <div class="banner-content d-inline-block y-50">
                            <div class="slide-animate" data-animation-options="{
                                'name': 'zoomIn', 'duration': '1s'
                            }">
                            
                                      
                                <h5 class="banner-subtitle text-uppercase font-weight-bold">Deals and Promotions
                                </h5>
                                <h3 class="banner-title text-capitalize ls-25">
                                    <span class="text-primary">{!!$value->Contant!!}</span><br>
                                   
                                </h3>
                                 
                            </div>
                        </div>

                 
                    
                        <figure class="slide-image skrollable slide-animate floating-item" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true,'scalarY':0}" data-child-depth="0.4">
                         
                            <img src="{{ url('sliderimages/' .$value->images) }}" width="472px" height="510px" alt="">

                            {{-- <img src="homecss/images/demos/demo9/slides/slide-image-1.png" alt="Banner" data-bottom-top="transform: translatex(-10vh);" data-top-bottom="transform: translateX(10vh);" width="472" height="510"> --}}
                          
                        </figure>
                    </div>
                </div>
                @endforeach
                <!-- End of Intro Slide 1 -->
               
            </div>
            <div class="custom-dots swiper-img-dots appear-animate">
                @foreach($users as $value)
                <a href="#" class="active">
                    <img src="{{ url('sliderimages/' .$value->images) }}" alt="Dot" width="70" height="70">
                </a>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- End of Intro-section -->


    <div class="container">
        <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mb-10 appear-animate"
            data-swiper-options="{
            'loop': true,
            'slidesPerView': 1,
            'autoplay': {
                'delay': 4000,
                'disableOnInteraction': false
            },
            'breakpoints': {
                '576': {
                    'slidesPerView': 2
                },
                '768': {
                    'slidesPerView': 3
                },
                '992': {
                    'slidesPerView': 3
                },
                '1200': {
                    'slidesPerView': 4
                }
            }
        }">

        <?php       $users = DB::table('services')->get();     ?>
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                @foreach($users as $value)
                <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                    <span class="icon-box-icon icon-chat">
                        {!!$value->Icon!!} 
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">{{$value->heading}}</h4>
                        <p class="text-default">{{$value->Subheading}}</p>
                    </div>
                </div>
        @endforeach 

            </div>
        </div>


       
         
        


    <div class="container">
       

        <div class="filter-with-title title-underline mb-4 pb-2 appear-animate">
            <h2 class="title">Home &amp; Furnitures</h2>
            <ul class="nav-filters" data-target="#products-1">
                <li><a href="#" class="nav-filter active" data-filter="*">All</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-1">Garden Supplies</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-2">Kitchen</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-3">Bathroom</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-4">Decor</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-5">Furniture</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-6">Accessories</a></li>
            </ul>
        </div>
        <!-- End of Filter With Title -->
        <?php
        $users = DB::table('products')->get();
       ?>
        <div class="row grid cols-xl-5 cols-md-4 cols-sm-3 cols-2 appear-animate" id="products-1">
            @foreach($users as $value)
            <div class="grid-item 1-2 1-4 1-6">
            
                <div class="product text-center">
                    <figure class="product-media">
                      
                          
                        <a href="product-default.html">

                            <img src="{{ url('cardimages/' .$value->images) }}" alt="Dot" width="70" height="70">
                            {{-- <img src="homecss/images/demos/demo9/product/6-1.jpg" alt="Product" width="600" height="675"> --}}
                        </a>
                       
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                            <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                        </div>
                
                    </figure>
                    
                    <div class="product-details">
                        <h3 class="product-name">
                            <a href="product-default.html">{{$value->name}}</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">{{$value->price}}</ins>
                        </div>
                              
                    </div>
                 
                  
                </div>
            
        
                <!-- End of Product -->
            </div>
            @endforeach
            <div class="grid-space col-xl-5col col-1"></div>
        </div>
        <!-- End of Grid -->

        <div class="row cols-md-2 mb-6 appear-animate">
            <div class="banner banner-fixed category-banner mb-4">
                <figure class="br-sm">
                    <img src="homecss/images/demos/demo9/banner/2-1.jpg" alt="Category Banner" width="640" height="200" style="background-color: #32373B;">
                </figure>
                <div class="banner-content y-50">
                    <h5 class="banner-subtitle text-uppercase text-secondary font-weight-bold">New Arrivals</h5>
                    <h3 class="banner-title text-white text-capitalize font-weight-normal mb-5 ls-25">
                        <strong>Flash Wireless</strong><br>Earphones
                    </h3>
                    <a href="demo9-shop.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                        Shop Now<i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- End of Banner -->
            <div class="banner banner-fixed category-banner mb-4">
                <figure class="br-sm">
                    <img src="homecss/images/demos/demo9/banner/2-2.jpg" alt="Category Banner" width="640" height="200" style="background-color: #ECECEE;">
                </figure>
                <div class="banner-content y-50">
                    <h5 class="banner-subtitle text-capitalize font-weight-normal ls-25">
                        Flash Sale <span class="text-secondary text-uppercase">50% Off</span>
                    </h5>
                    <h3 class="banner-title text-capitalize font-weight-normal mb-5 ls-25">
                        <strong>Fashion Figure</strong><br>Skate Sale
                    </h3>
                    <a href="demo9-shop.html" class="btn btn-dark btn-link btn-underline btn-icon-right">
                        Shop Now<i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- End of Banner -->
        </div>
              <!-- End of Banner -->
        <div class="sale-banner banner br-sm appear-animate">
            <div class="banner-content">
                <h4 class="content-left banner-subtitle text-uppercase mb-8 mb-md-0 mr-0 mr-md-4 text-secondary ls-25">
                    <span class="text-dark font-weight-bold lh-1 ls-normal">Up
                        <br>To</span>20% Sale!</h4>
                <div class="content-right">
                    <h3 class="banner-title text-uppercase font-weight-normal mb-4 mb-md-0 ls-25 text-white">
                        <span>Pay Only For
                            <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                            Pay Only For
                            <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                            Pay Only For
                            <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                        </span>
                    </h3>
                    <a href="demo9-shop.html" class="btn btn-white btn-rounded">Shop Now
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Row -->

        <div class="filter-with-title title-underline mb-4 appear-animate">
            <h2 class="title">Consumer Electronic</h2>
            <ul class="nav-filters" data-target="#products-2">
                <li><a href="#" class="nav-filter active" data-filter="*">All</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-1">TV &amp; Video</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-2">Cameras</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-3">Audio</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-4">Accessories</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-5">Computers</a></li>
                <li><a href="#" class="nav-filter" data-filter=".1-6">Smartphone</a></li>
            </ul>
        </div>
        <!-- End of Filter With Title -->
        <div class="row grid cols-xl-5 cols-md-4 cols-sm-3 cols-2 appear-animate" id="products-2">
            <div class="grid-item 1-2 1-4 1-6">
                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-1.jpg" alt="Product" width="600" height="675">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                            <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <h3 class="product-name">
                            <a href="product-default.html">Wireless Mouse</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$15.73</ins>
                        </div>
                    </div>
                </div>
                <!-- End of Product -->
            </div>
            <!-- End of Grid Item -->
            <div class="grid-item 1-3 1-4 1-5">
                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-2.jpg" alt="Product" width="600" height="675">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                            <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <h3 class="product-name">
                            <a href="product-default.html">Wonderful Sound Music Player</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$50.29 - $58.28</ins>
                        </div>
                    </div>
                </div>
                <!-- End of Product -->
            </div>
            <!-- End of Grid Item -->
            <div class="grid-item 1-1 1-3 1-5 1-6">
                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-3.jpg" alt="Product" width="600" height="675">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                            <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <h3 class="product-name">
                            <a href="product-default.html">Fashion Table Sound Marker</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$72.80</ins>
                        </div>
                    </div>
                </div>
                <!-- End of Product -->
            </div>
            <!-- End of Grid Item -->
            <div class="grid-item 1-1 1-2 1-4 1-6">
                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-4.jpg" alt="Product" width="600" height="675">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                            <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <h3 class="product-name">
                            <a href="product-default.html">Charge &amp; Alarm Machine</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$84.25</ins><del class="old-price">$98.20</del>
                        </div>
                    </div>
                </div>
                <!-- End of Product -->
            </div>
            <!-- End of Grid Item -->
            <div class="grid-item 1-1 1-3 1-5">
                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-5.jpg" alt="Product" width="600" height="675">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                            <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <h3 class="product-name">
                            <a href="product-default.html">Red Cap Sound Marker</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$89.50</ins>
                        </div>
                    </div>
                </div>
                <!-- End of Product -->
            </div>
            <!-- End of Grid Item -->
            <div class="grid-space col-xl-5col col-1"></div>
        </div>
        <!-- End of Grid -->

        <div class="banner link-banner-newsletter br-sm appear-animate" style="background-image: url(homecss/images/demos/demo9/banner/3.jpg);
            background-color: #27393D;">
            <div class="content-left mr-auto">
                <h3 class="banner-title text-white text-capitalize font-weight-bold ls-25">Download Wolmart App
                    Now!</h3>
                <p class="text-white">Shopping fastly and easily more with our app. Get a link to download
                    the app on your phone.</p>
                <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                    <input class="form-control mb-4" type="email" placeholder="Enter Your Email..." name="email" id="email_4">
                    <button class="btn btn-primary btn-rounded mb-4" type="submit">Send Link
                    </button>
                </form>
            </div>
            <!-- End of Content Left -->
            <div class="content-right">
                <a href="#">
                    <img src="homecss/images/demos/demo9/banner/button-1.jpg" alt="Button" width="141" height="41" style="background-color: #121315">
                </a>
                <a href="#">
                    <img src="homecss/images/demos/demo9/banner/button-2.jpg" alt="Button" width="141" height="41" style="background-color: #121315">
                </a>
            </div>
            <!-- End of Content Right -->
        </div>
        <!-- End of Link Banner Newsletter -->

        <div class="title-link-wrapper appear-animate">
            <h2 class="title">Top Rated Products</h2>
            <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">More Products<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <!-- End of Title Link Wrapper -->
        <div class="row cols-lg-4 cols-md-3 cols-xs-2 cols-1 appear-animate">
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-5.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Red Cap Sound Marker</a>
                        </h4>
                        <div class="product-price">$89.50</div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/8-1.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Mini Wireless Earphone</a>
                        </h4>
                        <div class="product-price">$120.57</div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/5-10.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Top Men's Hiking Hat</a>
                        </h4>
                        <div class="product-price">
                            <ins class="new-price">$20.84</ins><del class="old-price">$25.92</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/4-5.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Mobile Electronic Recorder</a>
                        </h4>
                        <div class="product-price">
                            <ins class="new-price">$95.72</ins><del class="old-price">$97.15</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-1.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Wireless Mouse</a>
                        </h4>
                        <div class="product-price">$15.73</div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/8-2.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Handy Camera</a>
                        </h4>
                        <div class="product-price">$360.19</div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/8-3.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Wonderful Sound Music Player</a>
                        </h4>
                        <div class="product-price">$50.29 - $58.28</div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
            <div class="product-wrap mb-0">
                <div class="product product-widget">
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="homecss/images/demos/demo9/product/7-4.jpg" alt="Product" width="600" height="675">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name">
                            <a href="product-default.html">Charge &amp; Alarm Music</a>
                        </h4>
                        <div class="product-price">
                            <ins class="new-price">$84.25</ins><del class="old-price">$98.20</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrap -->
        </div>
        <!-- End of Product Widget -->

        <div class="swiper-container swiper-theme brands-wrapper br-sm mb-10 appear-animate" data-swiper-options="{
            'loop': true,
            'spaceBetween': 20,
            'slidesPerView': 2,
            'autoplay': {
                'delay': 4000,
                'disableOnInteraction': false
            },
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 4
                },
                '992': {
                    'slidesPerView': 6
                },
                '1200': {
                    'slidesPerView': 8
                }
            }
        }">
            <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/1.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/2.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/3.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/4.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/5.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/6.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/7.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img src="homecss/images/demos/demo2/brands/8.png" alt="Brand" width="290" height="100">
                    </figure>
                </div>
            </div>
        </div>
        <!-- End of Brands Wrapper -->

        <div class="title-link-wrapper title-post pb-1 mb-4 appear-animate">
            <h2 class="title ls-normal mb-1">From Our Blog</h2>
            <a href="blog-listing.html" class="font-weight-bold font-size-normal ls-25 mb-0">View All
                Articles</a>
        </div>
        <div class="swiper-container swiper-theme post-wrapper pb-2 pb-lg-0 mb-10 mb-lg-6 appear-animate" data-swiper-options="{
            'slidesPerView': 1,
            'spaceBetween': 20,
            'breakpoints': {
                '576': {
                    'slidesPerView': 2
                },
                '768': {
                    'slidesPerView': 3
                },
                '992': {
                    'slidesPerView': 4,
                    'dots': false
                }
            }
        }">
            <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">

                <div class="swiper-slide post text-center overlay-zoom">
                    <figure class="post-media br-sm">
                        <a href="post-single.html">
                            <img src="homecss/images/demos/demo9/blog/1.jpg" alt="Post" width="620" height="420" style="background-color: #B9BAB4;">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            by <a href="#" class="post-author">John Doe</a>
                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                        </div>
                        <h4 class="post-title"><a href="post-single.html">We want to be different, and Fashion
                                gives
                                me that outlet to do</a></h4>
                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide post text-center overlay-zoom">
                    <figure class="post-media br-sm">
                        <a href="post-single.html">
                            <img src="homecss/images/demos/demo9/blog/2.jpg" alt="Post" width="620" height="420" style="background-color: #F2F3F7;">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            by <a href="#" class="post-author">John Doe</a>
                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                        </div>
                        <h4 class="post-title"><a href="post-single.html">Explore Fashion For Women In</a></h4>
                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide post text-center overlay-zoom">
                    <figure class="post-media br-sm">
                        <a href="post-single.html">
                            <img src="homecss/images/demos/demo9/blog/3.jpg" alt="Post" width="620" height="420" style="background-color: #D7DDDF;">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            by <a href="#" class="post-author">John Doe</a>
                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                        </div>
                        <h4 class="post-title"><a href="post-single.html">Fashion tells about who you are from
                                external point of view</a></h4>
                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide post text-center overlay-zoom">
                    <figure class="post-media br-sm">
                        <a href="post-single.html">
                            <img src="homecss/images/demos/demo9/blog/4.jpg" alt="Post" width="620" height="420" style="background-color: #E4E8EB;">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            by <a href="#" class="post-author">John Doe</a>
                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                        </div>
                        <h4 class="post-title"><a href="post-single.html">Just found the ultimate denim
                                dresses</a>
                        </h4>
                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- End of Container -->


</main>
<!-- End of Main -->

@include('footer')