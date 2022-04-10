@extends('layouts.frontend_layout')

@section('content')

    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-4">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Team</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Our Leaders</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Team Leaders-->
    <section class="team bg-gradient99 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>We Are Awesome</span>
                        <h2>Our Managing Directors</h2>
                        <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-a.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Sasa Smile</a></h4>
                            <p>Company CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-b.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Moana Smile</a></h4>
                            <p>Company CTO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-c.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Bhvika Smile</a></h4>
                            <p>Company COO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Leaders-->
    <!--Start Team Members-->
    <section class="team pad-tb deep-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>We Are Awesome</span>
                        <h2>Our Team Members</h2>
                        <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-1.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Shakita Daoust</a></h4>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-2.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Gerard Licari</a></h4>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-3.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Teisha Yearta</a></h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-4.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Herman Running</a></h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-5.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Cary Montgomery</a></h4>
                            <p>Android/IOS Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-6.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Mervin Griego</a></h4>
                            <p>Android/IOS Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-7.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Janna Rother</a></h4>
                            <p>Graphic Desinger</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset('frontend_assets') }}/images/team/team-8.jpg" alt="team"
                                    class="img-fluid" /></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">Bianca Goers</a></h4>
                            <p>Graphic Desinger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Members-->

@endsection
