@extends('layouts.frontend_layout')

@section('content')

    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-2">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Client Reviews</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Client Reviews</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb-->



    <!--Start reveiws-->
    <section class="bg-gradient1 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Reviews</span>
                        <h2>Client Testimonials Slider</h2>
                        <p class="mb30">Check our customers success stories.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt30">
                    <div class="niwax-review-slider owl-carousel center-dots">
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="{{ asset('frontend_assets') }}/images/client/upwork-logo.png"
                                            alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="{{ asset('frontend_assets') }}/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="{{ asset('frontend_assets') }}/images/client/upwork-logo.png"
                                            alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="{{ asset('frontend_assets') }}/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="{{ asset('frontend_assets') }}/images/client/upwork-logo.png"
                                            alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="{{ asset('frontend_assets') }}/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="{{ asset('frontend_assets') }}/images/client/upwork-logo.png"
                                            alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="{{ asset('frontend_assets') }}/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End reviews-->


    <!--Start reveiws-->
    <section class="reviews-block bg-gradient5 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Reviews</span>
                        <h2>External Review Link</h2>
                        <p class="mb30">Check our customers success stories.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="review-ref mt60">
                        <div class="review-title-ref">
                            <h4>Read More Reviews</h4>
                            <p>Read our reviews from all over world.</p>
                        </div>
                        <div class="review-icons">
                            <a href="#" target="blank"><img src="{{ asset('frontend_assets') }}/images/about/reviews-icon-1.png" alt="review"
                                    class="img-fluid"></a>
                            <a href="#" target="blank"><img src="{{ asset('frontend_assets') }}/images/about/reviews-icon-2.png" alt="review"
                                    class="img-fluid"></a>
                            <a href="#" target="blank"><img src="{{ asset('frontend_assets') }}/images/about/reviews-icon-3.png" alt="review"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End text reviews-->

@endsection

@push('frontend_script')

<script>
    //Owl-Carousel - awards card
    var owl = $('.niwax-review-slider');
    owl.owlCarousel({
        items: 3,
        loop: true,
        center: false,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1,
            },
            520: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 2
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

</script>

@endpush
