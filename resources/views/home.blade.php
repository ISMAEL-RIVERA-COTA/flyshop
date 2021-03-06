@extends('layouts.app')

@section('content')
<!--====== SLIDER PART START ======-->

<section id="slider-part-1" class="slider-1">
    <div class="slider-active">
        <div class="single-slider bg_cover d-flex align-items-center" style="background-image: url(public/images/slider/bg-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider-content pt-30 text-center">
                            <h2 data-animation="fadeInUp" data-delay="1s">Always want safe and good water for healthy life</h2>
                            <p data-animation="fadeInUp" data-delay="1.5s">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit <br> amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                            <a data-animation="fadeInUp" data-delay="2s" href="#">Learn More</a>
                        </div> <!-- slider content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
        <div class="single-slider bg_cover d-flex align-items-center" style="background-image: url(public/images/slider/bg-3.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider-content pt-30 text-center">
                            <h2 data-animation="fadeInUp" data-delay="1s">Always want safe and good water for healthy life</h2>
                            <p data-animation="fadeInUp" data-delay="1.5s">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit <br> amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                            <a data-animation="fadeInUp" data-delay="2s" href="#">Learn More</a>
                        </div> <!-- slider content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== video PART START ======-->

<section id="video-part" class="pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Our Video History</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                </div> <!-- section-title -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video pt-45">
                    <img src="{{ url('public/images/video.jpg') }}" alt="Video">
                    <div class="icon">
                        <a class="videi-popup" href="https://youtu.be/IBr798ZSOx4"><i class="fa fa-play"></i></a>
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- row -->
</section>

<!--====== video PART ENDS ======-->

<!--====== PRODUCTS PART START ======-->

<section id="products-part" class="pt-70 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    <h2>Our Products</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus  suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                </div> <!-- section-title -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-1.jpg') }}" alt="Products">
                        <div class="new-sele">
                            <a href="#">New</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-2.jpg') }}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-3.jpg') }}" alt="Products">
                        <div class="new-sele">
                            <a href="#">Sale</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-2.jpg') }}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-1.jpg') }}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-4.jpg') }}" alt="Products">
                        <div class="new-sele">
                            <a href="#">Sale</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-2.jpg')}}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{ url('public/images/product/p-1.jpg') }}" alt="Products">
                        <div class="new-sele">
                            <a href="#">New</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PRODUCTS PART ENDS ======-->

<!--====== TRUSTED CLIENT PART START ======-->

<section id="trusted-clients-part" class="bg_cover pt-155 pb-185" style="background-image: url(public/images/trusted-clients/bg-1.jpg)">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3 col-md-4">
                <div class="trusted-clients-logo text-center pt-30">
                    <img src="{{ url('public/images/trusted-clients/tc-logo.png') }}" alt="Logo">
                    <h5>Tipular Oskar</h5>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <h1>5.0</h1>
                </div>
            </div>
            <div class="col-lg-5 col-md-8">
                <div class="trusted-slied owl-carousel pt-30">
                    <div class="trusted-clients-discription  mb-40">
                        <h1>Trusted From Our Clients</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing the industry's standard dummy text ever since an unknown printer took a galley.</p>
                        <ul>
                            <li><a class="button" href="#">All Clients</a></li>
                            <li><a class="video videi-popup" href="#"><img src="{{ url('public/images/trusted-clients/icon.png') }}" alt="icon">How It Works</a></li>
                        </ul>
                    </div>
                    <div class="trusted-clients-discription  mb-40">
                        <h1>Trusted From Our Clients</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing the industry's standard dummy text ever since an unknown printer took a galley.</p>
                        <ul>
                            <li><a class="button" href="#">All Clients</a></li>
                            <li><a class="video videi-popup" href="#"><img src="{{ url('public/images/trusted-clients/icon.png') }}" alt="icon">How It Works</a></li>
                        </ul>
                    </div>
                    <div class="trusted-clients-discription  mb-40">
                        <h1>Trusted From Our Clients</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing the industry's standard dummy text ever since an unknown printer took a galley.</p>
                        <ul>
                            <li><a class="button" href="#">All Clients</a></li>
                            <li><a class="video videi-popup" href="#"><img src="{{ url('public/images/trusted-clients/icon.png') }}" alt="icon">How It Works</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== TRUSTED CLIENT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="services-part" class="pt-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Why Choose Us ?</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus  suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="singel-services mt-45 pb-50 line-r">
                    <div class="services-icon">
                        <img src="{{ url('public/images/choose-us/icon-1.png') }}" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Aliquam congue fermentum</h4>
                        <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="singel-services pt-45 pb-50">
                    <div class="services-icon pt-45">
                        <img src="{{ url('public/images/choose-us/icon-2.png') }}" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Pellentesque sed dolor</h4>
                        <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="line-b d-none d-lg-block"></div>
            </div>
            <div class="col-lg-6">
                <div class="singel-services pt-45 line-r">
                    <div class="services-icon pt-45">
                        <img src="{{ url('public/images/choose-us/icon-3.png') }}" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Proin dictum elementum</h4>
                        <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="singel-services mt-45">
                    <div class="services-icon">
                        <img src="{{ url('public/images/choose-us/icon-4.png') }}" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Vestibulum iaculis</h4>
                        <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== CLIENT PART START ======-->

<section id="client-part" class="pt-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <img src="{{ url('public/images/client/c.png') }}" alt="icon">
                    <h2>Our Exhort Happy Clients say !</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus  suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="client-slied owl-carousel">
                <div class="col-lg-12">
                    <div class="singel-client mt-50">
                        <div class="client-thum">
                            <div class="client-img">
                                <img src="{{ url('public/images/client/c-1.jpg') }}" alt="Client">
                            </div>
                            <div class="client-head">
                                <h5>Anil Barua</h5>
                                <span>Laravel Developer</span>
                            </div>
                        </div>
                        <div class="client-text mt-35">
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-client mt-50">
                        <div class="client-thum">
                            <div class="client-img">
                                <img src="{{ url('public/images/client/c-2.jpg') }}" alt="Client">
                            </div>
                            <div class="client-head">
                                <h5>Toya Kanti Roy</h5>
                                <span>Graphic Designer</span>
                            </div>
                        </div>
                        <div class="client-text mt-35">
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-client mt-50">
                        <div class="client-thum">
                            <div class="client-img">
                                <img src="{{ url('public/images/client/c-1.jpg') }}" alt="Client">
                            </div>
                            <div class="client-head">
                                <h5>Anil Barua</h5>
                                <span>Laravel Developer</span>
                            </div>
                        </div>
                        <div class="client-text mt-35">
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-client mt-50">
                        <div class="client-thum">
                            <div class="client-img">
                                <img src="{{ url('public/images/client/c-2.jpg') }}" alt="Client">
                            </div>
                            <div class="client-head">
                                <h5>Toya Kanti Roy</h5>
                                <span>Graphic Designer</span>
                            </div>
                        </div>
                        <div class="client-text mt-35">
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== CLIENT PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog-part" class="pt-70 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    <h2>Our letest news</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus  suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-slied owl-carousel">
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-1.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-2.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-3.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-1.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-2.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-3.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-1.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-2.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{ url('public/images/blog/b-3.jpg') }}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BLOG PART ENDS ======-->

@endsection

