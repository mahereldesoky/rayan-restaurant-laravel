@extends('layouts.app')

@section('title','Restaurant')

@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- Carousel wrapper -->
    <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
        </ol>
        <!-- Inner -->
        <div class="carousel-inner">
            <!-- carousel item -->
            <div class="carousel-item active" data-bgimage="url(/frontend/images/SLIDER1.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="id-color wow fadeInUp" data-wow-delay=".3s">Make your</h3>
                                    <h1 class="wow fadeInUp mb-2" data-wow-delay=".6s">story</h1>
                                    <div class="col-lg-6 offset-lg-3 mb30">
                                        <p class="wow fadeInUp" data-wow-delay="1s">
                                            At our restaurant, every meal is a celebration of life, love and the simple joys of good food
                                        </p>
                                    </div>
                                    <a href="/menu" class="btn-border wow fadeInUp" data-wow-delay="1.4s">Explore Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel item -->
            <!-- carousel item -->
            <div class="carousel-item" data-bgimage="url(/frontend/images/SLIDER2.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="id-color wow fadeInUp" data-wow-delay=".3s">Special</h3>
                                    <h1 class="wow fadeInUp mb-2" data-wow-delay=".6s">Burgers</h1>
                                    <div class="col-lg-6 offset-lg-3 mb30">
                                        <p class="wow fadeInUp" data-wow-delay="1s">All the taste in one place !</p>
                                    </div>
                                    <a href="/menu" class="btn-border wow fadeInUp" data-wow-delay="1.4s">Explore Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel item -->
            <!-- carousel item -->
            <div class="carousel-item" data-bgimage="url(/frontend/images/SLIDER3.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="id-color wow fadeInUp" data-wow-delay=".3s">delicious</h3>
                                    <h1 class="wow fadeInUp mb-2" data-wow-delay=".6s">food</h1>
                                    <div class="col-lg-6 offset-lg-3 mb30">
                                        <p class="wow fadeInUp" data-wow-delay="1s">Rayan Lounge specializes in delicious food featuring fresh ingredients and masterful preparation by the Rayan Lounge culinary team. Whether youre ordering a multi-course meal or grabbing a drink and pizza and dinks</p>
                                    </div>
                                    <a href="/menu" class="btn-border wow fadeInUp" data-wow-delay="1.4s">Explore Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel item -->
        </div>
        <!-- Inner -->
        <!-- Controls -->
        <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <a href="#section-welcome" class="mouse-icon-click scroll-to wow fadeInUp" data-wow-delay="2s">
            <span class="mouse fadeScroll relative" data-scroll-speed="2">
                <span class="scroll"></span>
            </span>
        </a>
    </section>
    <!-- Carousel wrapper -->
    <section id="section-welcome" aria-label="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Welcome to</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Rayan Lounge</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="1s">Lorem ipsum aute enim pariatur ea culpa nulla ut laborum sint nisi laborum culpa ea enim do qui ea deserunt amet proident cillum tempor fugiat magna aliquip sed cillum ullamco sit adipisicing ut velit nulla aliqua.</p>
                </div>
            </div>

            <div class="spacer-single"></div>

            <div class="row g-4">
                @foreach($offers as $offerItem)
                <div class="col-lg-6 col-sm-12">
                    <div class="de-banner text-center">
                        <img class="img-main" src="{{url('uploads/offers/'.$offerItem->image)}}" alt="">
                        
                        <div class="div-content">
                            <h4>{{$offerItem->name}}</h4>
                            {{-- <h6>Discover the ultimate happy hour experience at our restaurant,where you can enjoy <span class="id-color">30% off all dishes and drinks from 4-5 pm every day</span></h6> --}}
                            <h6>{!!$offerItem->small_desc!!}</h6>
                              
                            <a class="btn-border" href="/menu">Our Menu</a>
                            <small>*Limited time offer</small>
                        </div>
                        <img class="img-bg" src="/frontend/images/misc/1.jpg" alt="">
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-6">
                    <div class="de-banner text-center">
                        <img class="img-main" src="/frontend/images/misc/3.png" alt="">
                        <div class="div-content">
                            <h4>Caramel late</h4>
                            <h3>Free <span class="id-color">Upsize</span></h3>
                            <a class="btn-border" href="#">Order Now</a>
                            <small>*Limited time offer</small>
                        </div>
                        <img class="img-bg" src="/frontend/images/misc/2.jpg" alt="">
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    <section class="no-top no-bottom" aria-label="section">
        <div class="container-fluid">
            <div class="row g-0">
                <!-- gallery item begin -->
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
                        <a href="/frontend/images/breakfast.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">BreakFast</span>
                                <span class="dih-wm">01</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="/frontend/images/breakfast.jpg" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <!-- gallery item close -->
                <!-- gallery item begin -->
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
                        <a href="/frontend/images/pizza&pasta.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Pizza</span>
                                <span class="dih-wm">02</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="/frontend/images/pizza&pasta.jpg "class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <!-- gallery item close -->
                <!-- gallery item begin -->
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
                        <a href="/frontend/images/burger.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Burgers</span>
                                <span class="dih-wm">03</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="/frontend/images/burger.jpg" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <!-- gallery item close -->
                <!-- gallery item begin -->
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
                        <a href="/frontend/images/appatizerdeserts.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title">Deserts</span>
                                <span class="dih-wm">04</span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="/frontend/images/appatizerdeserts.jpg" class="lazy img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <!-- gallery item close -->
            </div>
        </div>
    </section>

    <section id="section-specials" aria-label="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 offset-lg-1 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Specials</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Of The Day</h2>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="1s">
                        <h3>Classic Cappuccino </h3>
                        <p>Composed of a single espresso shot and hot milk, with the surface topped with foamed milk. Prepared with an espresso machine.</p>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <div class="image-with-counter">
                        <img class="img-1 img-fluid wow zoomIn" src="/frontend/images/misc/1.png" alt="">
                        <div class="div-1 wow zoomIn" data-wow-delay=".5s">
                            <div class="de_count">
                            <h3><span class="timer" data-to="600" data-speed="3000">0</span></h3>
                            <h5 class="id-color">Sold Today</h5>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-drinks" aria-label="section" class="jarallax" style="padding: 200px 0px;">
        <img class="jarallax-img" src="/frontend/images/drinks.jpg" alt="" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Drinks</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-drinks-menu" aria-label="section">
        <div class="container">
            <div class="row g-5 masonry ">

                <div class="col-md-6 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                    <div class="menu-wrap" >
                        <div class="menu-item thead"  >
                        @foreach($cold as $coldItem)
                            <div class="c1">{{$coldItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>
                        @foreach($coldItem->products as $productItem)
                        <div class="menu-item">
                            <div class="c1">{{$productItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                        @foreach($hot as $hotItem)
                            <div class="c1">{{$hotItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>
                        @foreach($hotItem->products as $productItem)
                        <div class="menu-item">
                            <div class="c1">{{$productItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                   
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                        @foreach($fresh as $freshItem)
                            <div class="c1">{{$freshItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>
                        @foreach($freshItem->products as $productItem)
                        <div class="menu-item">
                            <div class="c1">{{$productItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                   
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                        @foreach($shake as $shakeItem)
                            <div class="c1">{{$shakeItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>
                        @foreach($shakeItem->products as $productItem)
                        <div class="menu-item">
                            <div class="c1">{{$productItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                   
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                        @foreach($soda as $sodaItem)
                            <div class="c1">{{$sodaItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>
                        @foreach($sodaItem->products as $productItem)
                        <div class="menu-item">
                            <div class="c1">{{$productItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                   
                </div>
                

                
            </div>
        </div>
    </section>    

    <section id="section-food" aria-label="section" class="jarallax" style="padding: 200px 0px;">
        <img class="jarallax-img" src="/frontend/images/maincourse.jpg" alt="" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Main Course & Children Meals</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-food-menu" aria-label="section">
        <div class="container">
            <div class="row g-5 masonry ">

                <div class="col-md-6 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                        @foreach($main as $mainItem)
                            <div class="c1">{{$mainItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>
                        @foreach($mainItem->products as $productItem)
                        <div class="menu-item">
                            <div class="c1">{{$productItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                   
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                        @foreach($children as $childrenItem)
                            <div class="c1">{{$childrenItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>
                        @foreach($childrenItem->products as $productItem)
                        <div class="menu-item">
                            <div class="c1">{{$productItem->name}}</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                   
                </div>
                
                
            </div>
        </div>
    </section>

    <section id="section-menu-title-2s" aria-label="section" class="jarallax">
        <img class="jarallax-img" src="/frontend/images/background/4.jpg" alt="" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3 text-center">
                    <blockquote class="wow fadeInUp" data-wow-delay=".5s">
                        A pinch of passion in every dish.
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

        
    <section id="section-location" aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-sm-30 text-center">
                    <i class="icon_pin_alt fontsize48 id-color mb20"></i>
                    <h3>Location</h3>
                    New Cournish,Suez, Egypt
                </div>

                <div class="col-md-4 mb-sm-30 text-center">
                    <i class="icon_mug fontsize48 id-color mb20"></i>
                    <h3>We're Open</h3>
                    Always open
                </div>

                <div class="col-md-4 mb-sm-30 text-center">
                    <i class="icon_mail_alt fontsize48 id-color mb20"></i>
                    <h3>Contact Us</h3>
                    P: +201010404808. E: atsh700@yahoo.com.
                </div>
            </div>
        </div>
    </section>
        
</div>

@endsection
