@extends('layouts.app')

@section('title','Menu')

@section('content')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="section-food" aria-label="section" class="jarallax" style="padding: 200px 0px;">
            <img class="jarallax-img " src="/frontend/images/breakfast.jpg" alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="de-title">
                            <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".75s">Breakfast Meal</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-food-menu" aria-label="section">
            <div class="container">
                <div class="row g-5 masonry ">
                    <div class="col-md-12 col-sm-12 col-xs-12 item " style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead ">
                                @foreach($breakfast as $breakfastItem)
                                <div class="c1">{{$breakfastItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3 ">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($breakfastItem->products as $productItem)

                            <div class="menu-item">

                                <div class="c1">{{$productItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3 "><span class="cur">EGP</span>{{$productItem->price}}</div>
                            </div>
                            @endforeach


                         @endforeach

                        </div>
                       
                    </div>

                    
                    
                </div>
            </div>
        </section>

        <section id="section-food" aria-label="section" class="jarallax" style="padding: 200px 0px;">
            <img class="jarallax-img" src="/frontend/images/burger.jpg" alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="de-title">
                            <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".75s">Sandwich</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-food-menu" aria-label="section">
            <div class="container">
                <div class="row g-5 masonry">
                    <div class="col-md-4 col-sm-12 col-xs-12 item " style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead ">
                            @foreach($sanwich as $sanwichItem)
                                <div class="c1 ">{{$sanwichItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3 ">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($sanwichItem->products as $productItem)
                            <div class="menu-item">
                                <div class="c1 ">{{$productItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3 "><span class="cur">EGP</span>{{$productItem->price}}</div>
                            </div>
                            @endforeach
                        </div>
                            @endforeach
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead">
                            @foreach($burger as $burgerItem)
                                <div class="c1">{{$burgerItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($burgerItem->products as $productItem)
                            <div class="menu-item">
                                <div class="c1">{{$productItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-4 col-sm-12 col-xs-12 item" style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead">
                            @foreach($hawashi as $hawashiItem)
                                <div class="c1">{{$hawashiItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($hawashiItem->products as $productItem)
                            <div class="menu-item">
                                <div class="c1">{{$productItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
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
            <img class="jarallax-img" src="/frontend/images/pizza&pasta.jpg" alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="de-title">
                            <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".75s">Pasta & Pizza</h2>
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
                            @foreach($pasta as $pastaItem)
                                <div class="c1">{{$pastaItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3 text-center">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($pastaItem->products as $productItem)
                            <div class="menu-item">
                                <div class="c1">{{$productItem->name}}</div>
                                {{-- <div class="c2"></div> --}}
                                <div class="c3 text-left"><span class="cur">EGP</span>{{$productItem->price}}</div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 item "style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead">
                            @foreach($pizza as $pizzaItem)
                                <div class="c1">{{$pizzaItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($pizzaItem->products as $productItem)
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

                    <div class="col-md-6 col-sm-12 col-xs-12 item " style="padding-left: 10px;">
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


        <section id="section-food" aria-label="section" class="jarallax" style="padding: 200px 0px;">
            <img class="jarallax-img salad-img" src="/frontend/images/soup and salad.jpg" alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="de-title">
                            <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".75s">Soup & Salad</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-food-menu" aria-label="section">
            <div class="container">
                <div class="row g-5 masonry ">

                    <div class="col-md-6 col-sm-12 col-xs-12 item "style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead">
                            @foreach($soup as $soupItem)
                                <div class="c1">{{$soupItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($soupItem->products as $productItem)
                            <div class="menu-item">
                                <div class="c1">{{$productItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                       
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 item"style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead">
                            @foreach($salad as $saladItem)
                                <div class="c1">{{$saladItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($saladItem->products as $productItem)
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
            <img class="jarallax-img" src="/frontend/images/appetizer.jpg" alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="de-title">
                            <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".75s">Appetizer & Extras</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-food-menu" aria-label="section">
            <div class="container">
                <div class="row g-5 masonry ">

                    <div class="col-md-6 col-sm-12 col-xs-12 item"style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead">
                            @foreach($appetizer as $appetizerItem)
                                <div class="c1">{{$appetizerItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($appetizerItem->products as $productItem)
                            <div class="menu-item">
                                <div class="c1">{{$productItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3"><span class="cur">EGP</span>{{$productItem->price}}</div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                       
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 item"style="padding-left: 10px;">
                        <div class="menu-wrap">
                            <div class="menu-item thead">
                            @foreach($extras as $extrasItem)
                                <div class="c1">{{$extrasItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($extrasItem->products as $productItem)
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
            <img class="jarallax-img desert-img" src="/frontend/images/appatizerdeserts.jpg" alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="de-title">
                            <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".75s">Deserts & Waffle</h2>
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
                            @foreach($deserts as $desertsItem)
                                <div class="c1">{{$desertsItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($desertsItem->products as $productItem)
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
                            @foreach($waffle as $waffleItem)
                                <div class="c1">{{$waffleItem->name}}</div>
                                <div class="c2"></div>
                                <div class="c3">Price</div>
                            </div>

                            <div class="spacer-half"></div>
                            @foreach($waffleItem->products as $productItem)
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
                        <div class="menu-wrap">
                            <div class="menu-item thead">
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





    </div>
    <!-- content close -->  

@endsection
