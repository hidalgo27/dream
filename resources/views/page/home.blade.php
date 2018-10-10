@extends('layouts.page.default')

@section('content')
    <header>
        <div class="bg-rgba-white-7 py-3">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-4 align-items-center">
                        <img src="{{asset('images/logo-dream.png')}}" alt="" class="w-100">
                    </div>
                    <div class="col">
                        {{--<p class="m-0 font-kalam h5 text-info">Perú & Ecuador Especialist!</p>--}}
                    </div>
                    <div class="col-auto text-right">
                        <p class="m-0 text-secondary">
                            {{--<a href="" class="h5"><i class="fab fa-facebook-square"></i></a>--}}
                            {{--<a href="" class="h5"><i class="fab fa-twitter"></i></a>--}}
                            {{--<a href="" class="h5"><i class="fab fa-youtube"></i></a> |--}}
                            <a href="" class="btn btn-red-primary font-weight-bold btn-lg">Pregunte Ahora</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="topbar-nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a class="has-arrow" href="#">
                                    {{--<span class="fa fa-fw fa-github fa-lg"></span>--}}
                                    Reisevarianten
                                </a>
                                <ul aria-expanded="true">
                                    <li>
                                        <a href="#">
                                            {{--<span class="fa fa-fw fa-code-fork"></span> --}}
                                            Rundreise
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            {{--<span class="fa fa-fw fa-star"></span> --}}
                                            Reisebausteine
                                        </a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="https://github.com/onokumus/metisMenu/issues">--}}
                                            {{--<span class="fa fa-fw fa-exclamation-triangle"></span> Issues--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Planen Sie Ihre Reise</a>
                                {{--<ul aria-expanded="false">--}}
                                    {{--<li><a href="#">item 0.1</a></li>--}}
                                    {{--<li><a href="#">item 0.2</a></li>--}}
                                    {{--<li><a href="http://onokumus.com">onokumus</a></li>--}}
                                    {{--<li><a href="#">item 0.4</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            <li id="removable">
                                <a class="has-arrow" href="#" aria-expanded="false">Über Uns</a>
                                <ul aria-expanded="false">
                                    <li><a href="#">Über Kolibri Peru Travel</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    {{--<li>--}}
                                        {{--<a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>--}}
                                        {{--<ul aria-expanded="false">--}}
                                            {{--<li><a href="#">item 1.3.1</a></li>--}}
                                            {{--<li><a href="#">item 1.3.2</a></li>--}}
                                            {{--<li><a href="#">item 1.3.3</a></li>--}}
                                            {{--<li><a href="#">item 1.3.4</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#">item 1.4</a></li>--}}
                                    {{--<li>--}}
                                        {{--<a class="has-arrow" href="#" aria-expanded="false">Menu 1.5</a>--}}
                                        {{--<ul aria-expanded="false">--}}
                                            {{--<li><a href="#">item 1.5.1</a></li>--}}
                                            {{--<li><a href="#">item 1.5.2</a></li>--}}
                                            {{--<li><a href="#">item 1.5.3</a></li>--}}
                                            {{--<li><a href="#">item 1.5.4</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Über Peru</a>
                                <ul aria-expanded="false">
                                    <li><a href="#">Hohenanpassung</a></li>
                                    <li><a href="#">Information</a></li>
                                    {{--<li><a href="#">item 2.3</a></li>--}}
                                    {{--<li><a href="#">item 2.4</a></li>--}}
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="position-relative">
        <div class="form-header">
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-4">
                        <form class="bg-rgba-dark-5 p-3 rounded-top">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="From*">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="To*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Number of travelers">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Category">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="E-mail*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Questions & requirements"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-red-dark btn-block btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-slider-container">
            <div id="home-slider">
                <div class="slider-item"><img src="{{asset('images/sliders/slider-4.jpg')}}"/>
                    <div class="container">
                        <div class="slider-content row align-items-center">
                            {{--<div class="container">--}}
                            {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                            {{--</div>--}}
                            <div class="col">
                                <h2 class="display-4 font-weight-bold text-white">Auf mystischen <span class="d-block">Wegen</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item"><img src="{{asset('images/sliders/slider-5.jpg')}}"/>
                    <div class="container">
                        <div class="slider-content row align-items-center">
                            {{--<div class="container">--}}
                            {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                            {{--</div>--}}
                            <div class="col">
                                <h2 class="display-4 font-weight-bold text-white">Kraftorte <span class="d-block">Erleben</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item"><img src="{{asset('images/sliders/slider-6.jpg')}}"/>
                    <div class="container">
                        <div class="slider-content row align-items-center">
                            {{--<div class="container">--}}
                            {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                            {{--</div>--}}
                            <div class="col">
                                <h2 class="display-4 font-weight-bold text-white">Besonderen <span class="d-block">Menschen Begegnen</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-red-primary font-weight-bold">GALAPAGOS ISLANDS VACATION</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-g-yellow p-2 text-center">
                                <h5 class="text-white m-0">MachuPicchu - Galapagos</h5>
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-g-orange p-2 text-center">
                                <h5 class="text-white m-0">Ecuador Tours</h5>
                                {{--<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-g-green p-2 text-center">
                                <h5 class="text-white m-0">Peru Tours</h5>
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-info p-2 text-center">
                                <h5 class="text-white m-0">Galapagos Cruises</h5>
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-secondary">Welcome to The World’s #1 Galapagos Travel Site</h2>
                    <p class="font-weight-normal lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugit mollitia neque officia quam quis reiciendis tenetur vero voluptatibus voluptatum. Architecto dolor eligendi eum inventore ipsum odio porro ut voluptatibus!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="font-weight-bold text-g-orange">June Feature Program</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-1 pb-5 bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-9 col-md-8 col-xl-8 d-flex">
                    <div class="container-fluid p-0">

                        <div class="slider-containers">

                            <!--effect #1 -->
                            <div class="slider-container">
                                <div class="flexbox-slider flexbox-slider-1">
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/cusco.jpg')}}" alt="Cusco">
                                        <div class="text-block">
                                            <h3>Cusco</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/lima.jpg')}}" alt="Lima">
                                        <div class="text-block">
                                            <h3>Lima</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/machupicchu.jpg')}}" alt="Machu Picchu">
                                        <div class="text-block">
                                            <h3>Machu Picchu</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/titicaca.jpg')}}" alt="Titicaca">
                                        <div class="text-block">
                                            <h3>Lake Titicaca</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/valle.jpg')}}" alt="Sacred Valley">
                                        <div class="text-block">
                                            <h3>Sacred Valley</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-xl-4  align-items-center bg-g-dark p-3">
                    <div class="row">
                        <div class="col">
                            <h2 class="h1 text-g-yellow font-weight-bold font-philosopher">10 DAYS</h2>
                            <p class="text-light">Cusco, Lima, Machu Picchu, Lake Titicaca, Sacred Valley.</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <table class="table table-light w-100 table-sm">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">1 Person</th>
                                    <th scope="col">2 People</th>
                                    <th scope="col">3 People</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Luxury</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                <tr>
                                    <th scope="row">First class</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mid-Range</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                <tr>
                                    <th scope="row">Budget</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <a href="" class="btn btn-g-orange font-philosopher">Show Itinerary Details</a>
                            <a href="" class="btn btn-g-orange font-philosopher">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-block bg-rgba-">
        <div id="overlay" class="overlay-img position-relative overlay">
            <img src="{{asset('images/sliders/slider-2.jpg')}}" alt="" id="hero-vid" class="w-100 hero-vid">
            <div class="divider-mid">
                <div class="container">
                    <div class="row divider-mid-h-40 align-items-center">
                        <div class="col-5">
                            <div class="bg-rgba-white-8 rounded p-4">
                                <h2 class="font-weight-bold font-philosopher text-center">Why Choose Galapagos Islands.com?</h2>
                                <ul class="list-unstyled h5">
                                    <li><i class="fas fa-check-square text-g-orange"></i> Specialist Galapagos Trip Advisors</li>
                                    <li><i class="fas fa-check-square text-g-orange"></i> #1 online seller of Galapagos tours</li>
                                    <li><i class="fas fa-check-square text-g-orange"></i> Lowest Price Guaranteed</li>
                                    <li><i class="fas fa-check-square text-g-orange"></i> Free Galapagos Trip Planning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-rgba-white-8 rounded p-4 w-100">
                                <h2 class="font-weight-bold font-philosopher pb-3 text-center">Galapagos Travel Tips</h2>
                                <div class="row">
                                    <div class="col text-center">
                                        <i class="fas fa-plane fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Flights</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-sun fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Weather</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-ship fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Big or Small boat</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-calendar fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">When  to go</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-question fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">FAQs</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-h-square fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Cruise or Hotel based tour</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-secondary">Welcome to The World’s #1 Galapagos Travel Site</h2>
                    <p class="font-weight-normal lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugit mollitia neque officia quam quis reiciendis tenetur vero voluptatibus voluptatum. Architecto dolor eligendi eum inventore ipsum odio porro ut voluptatibus!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="rounded-top p-2 bg-g-yellow h3 m-0 font-kalam text-center">MachuPicchu - Galapagos</div>
                            <img src="{{asset('images/packages/gt1.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="bg-dark">
                                        <div class="row text-center text-white">
                                            <div class="col p-3 ">Tours</div>
                                            <div class="col p-3 ">Duration</div>
                                            <div class="col p-3 ">Per person from</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="list-group rounded-0">
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Scroll Bar -->
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col text-right">
                                            <a href="" class="btn-link font-weight-normal text-secondary">Vew All MachuPicchu - Galapagos Packages <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="rounded-top p-2 bg-g-orange h3 m-0 font-kalam text-center text-white">Ecuador Tours</div>
                            <img src="{{asset('images/packages/gt1.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="bg-dark">
                                        <div class="row text-center text-white">
                                            <div class="col p-3 ">Tours</div>
                                            <div class="col p-3 ">Duration</div>
                                            <div class="col p-3 ">Per person from</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="list-group rounded-0">
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-orange">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-orange">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-orange">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-orange">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-orange">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-orange">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Scroll Bar -->
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col text-right">
                                            <a href="" class="btn-link font-weight-normal text-secondary">Vew All Ecuador Tours Packages <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="rounded-top p-2 bg-g-info h3 m-0 font-kalam text-center">Perú Tours</div>
                            <img src="{{asset('images/packages/gt1.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="bg-dark">
                                        <div class="row text-center text-white">
                                            <div class="col p-3 ">Tours</div>
                                            <div class="col p-3 ">Duration</div>
                                            <div class="col p-3 ">Per person from</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="list-group rounded-0">
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-info">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-info">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-info">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-info">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-info">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-info">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Scroll Bar -->
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col text-right">
                                            <a href="" class="btn-link font-weight-normal text-secondary">Vew All Perú Tours <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="rounded-top p-2 bg-g-green h3 m-0 font-kalam text-center">Galapagos Cruises</div>
                            <img src="{{asset('images/packages/gt1.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="bg-dark">
                                        <div class="row text-center text-white">
                                            <div class="col p-3 ">Tours</div>
                                            <div class="col p-3 ">Duration</div>
                                            <div class="col p-3 ">Per person from</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="list-group rounded-0">
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-green">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-green">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-green">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-green">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Galapagos Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-green">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-green">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Scroll Bar -->
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col text-right">
                                            <a href="" class="btn-link font-weight-normal text-secondary">Vew All Galapagos Cruises <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







        </div>
    </section>

    @include('layouts.page.form-quote')

@stop
