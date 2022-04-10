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
                                    <li><a href="#">Why Us</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Why Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb-->
    <!--Start About-->
    <section class="about-sec bg-gradient5 pad-tb">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="common-heading">
                        <span>We Are Creative Agency</span>
                        <h1 class="mb30">Why Choose <span
                                class="text-radius text-light text-animation bg-b">Niwax</span></h1>
                        <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type
                            specimen book. <span class="text-bold">Lorem Ipsum</span> is simply dummy text of the
                            printing and typesetting industry. <span class="text-bold">Lorem Ipsum </span> is simply
                            dummy text of the printing and typesetting industry.</p>

                        <p>Lorem Ipsum is <span class="text-bold">simply dummy</span> text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is
                            simply dummy text of the <span class="text-bold">printing</span> and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->
    <!--why choose-->
    <section class="why-choos-lg pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-heading text-l">
                        <span>Why Choose Us</span>
                        <h2 class="mb20">Why The Niwax Ranked Top Among The Leading Web & App Development Companies</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="itm-media-object mt40 tilt-3d">
                        <div class="media">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend_assets') }}/images/icons/computers.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Streamlined Project Management</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend_assets') }}/images/icons/worker.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>A Dedicated Team of Experts</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                                    src="{{ asset('frontend_assets') }}/images/icons/deal.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Completion of Project in Given Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="itm-media-object mt40 tilt-3d">
                        <div class="media">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend_assets') }}/images/icons/computers.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Streamlined Project Management</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend_assets') }}/images/icons/worker.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>A Dedicated Team of Experts</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                                    src="{{ asset('frontend_assets') }}/images/icons/deal.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Completion of Project in Given Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End why choose-->
    <!--Start Badges-->
    <section class="badges-section bg-gradient5  pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading w-tdxt">
                        <span>WE MAKE RELATIONSHIPS</span>
                        <h2>Ranked as #1 Top Web & App Development Companies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="badges-content">
                        <img src="{{ asset('frontend_assets') }}/images/about/badges-a.png" alt="budges" class="img-fluid">
                        <p>ABC DEF Industry Leader</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="badges-content">
                        <img src="{{ asset('frontend_assets') }}/images/about/badges-b.png" alt="budges" class="img-fluid">
                        <p>Best eCommerce Development Company</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="badges-content">
                        <img src="{{ asset('frontend_assets') }}/images/about/badges-c.png" alt="budges" class="img-fluid">
                        <p>ABC DEF High Performer Winner</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="badges-content">
                        <img src="{{ asset('frontend_assets') }}/images/about/badges-d.png" alt="budges" class="img-fluid">
                        <p>Top App Developer 2019-20</p>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center">
                    <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                    <a href="#" class="btn-main bg-btn2 lnk">Let's Work Together<i
                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Badges-->

    @endsection
