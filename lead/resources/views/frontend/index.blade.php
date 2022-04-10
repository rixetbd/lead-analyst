@extends('layouts.frontend_layout')

@section('content')
    <!--Start Hero-->
    <section class="hero-section lead-hero">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">We Analyze & Understand Your Buyers</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor
                                eros.</p>
                            <a href="#" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">Get Strategy Call
                                <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="single-image"><img src="{{ asset('frontend_assets') }}/images/hero/leads-hero.png"
                                alt="hero image" class="img-fluid" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->
    <!--Start statistics-->
    <div class="statistics-section bg-gradient6 pad-tb tilt3d">
        <div class="container">
            <div class="row justify-content-center t-ctr">
                <div class="col-lg-4 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('frontend_assets') }}/images/icons/startup.svg" alt="years"
                                class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">15</span><span>+</span>
                            <p>Year In Business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('frontend_assets') }}/images/icons/team.svg" alt="team"
                                class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">80</span><span>+</span>
                            <p>Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row small t-ctr">
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('frontend_assets') }}/images/icons/deal.svg" alt="happy"
                                class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">450</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('frontend_assets') }}/images/icons/computers.svg" alt="project"
                                class="img-fluid" />
                        </div>
                        <div class="statnumb counter-number">
                            <span class="counter">48</span><span>k</span>
                            <p>Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('frontend_assets') }}/images/icons/worker.svg" alt="work"
                                class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">95</span><span>k</span>
                            <p>Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics mb0">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('frontend_assets') }}/images/icons/customer-service.svg" alt="support"
                                class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span>24/7</span>
                            <p>Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End statistics-->
    <!--Start About-->
    <section class="about-lead-gen pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <span>Get to know us</span>
                        <h2 class="mb20">We Help Companies to Generate Leads and Increase Sales</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s.</p>
                        <p class="mt10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to
                            make a type specimen book.</p>
                    </div>
                </div>
                <div class="col-lg-6 lead-intro-"><img src="{{ asset('frontend_assets') }}/images/about/lead-about.png"
                        alt="image" class="img-fluid" /></div>
            </div>
        </div>
    </section>
    <!--End About-->
    <!--Start Service-->
    <section class="bhv-service bg-gradient5 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>What we’re great at</span>
                        <h2 class="mb30">Our Expertise</h2>
                    </div>
                </div>
            </div>
            <div class="row upset link-hover shape-bg2">
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon"><img src="{{ asset('frontend_assets') }}/images/icons/branding.svg"
                                alt="service" class="img-fluid" /></div>
                        <h4>Lead Generation</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="s-block" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon"><img src="{{ asset('frontend_assets') }}/images/icons/development.svg"
                                alt="service" class="img-fluid" /></div>
                        <h4>Social Media Marketing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="s-block" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon"><img src="{{ asset('frontend_assets') }}/images/icons/app.svg"
                                alt="service" class="img-fluid" /></div>
                        <h4>SMS Marketing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
                    <div class="s-block mb0" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon"><img src="{{ asset('frontend_assets') }}/images/icons/marketing.svg"
                                alt="service" class="img-fluid" /></div>
                        <h4>E-mail Marketing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
                    <div class="s-block mb0" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon"><img src="{{ asset('frontend_assets') }}/images/icons/marketing.svg"
                                alt="service" class="img-fluid" /></div>
                        <h4>Search Engine Optimization</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="s-block mb0" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon"><img src="{{ asset('frontend_assets') }}/images/icons/marketing.svg"
                                alt="service" class="img-fluid" /></div>
                        <h4>Startup Marketing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1s">
                    <p>Want to <span>kick start</span> your project right now?</p>
                    <a href="#" class="btn-main bg-btn2 lnk"> Free Quote<i
                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Service-->
    <!--Start About-->
    <section class="why-choos-lg pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <span>Why Choose Us</span>
                        <h2 class="mb20">Performance Marketing Services We Offer</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="itm-media-object mt40 tilt-3d">
                            <div class="media">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="{{ asset('frontend_assets') }}/images/icons/computers.svg" alt="icon"
                                        class="layer"></div>
                                <div class="media-body">
                                    <h4>High-Quality Leads</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec
                                        leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="{{ asset('frontend_assets') }}/images/icons/worker.svg" alt="icon"
                                        class="layer"></div>
                                <div class="media-body">
                                    <h4>Real Time Leads</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec
                                        leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                                        src="{{ asset('frontend_assets') }}/images/icons/deal.svg" alt="icon"
                                        class="layer"></div>
                                <div class="media-body">
                                    <h4>Get Consistent Leads</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec
                                        leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-image"> <img
                            src="{{ asset('frontend_assets') }}/images/about/marketing-service.png" alt="hero image"
                            class="img-fluid" /> </div>
                    <div class="cta-card mt60 text-center">
                        <h3>Get your <span class="text-second text-bold">FREE</span> Digital Audit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                            elementum semper.</p>
                        <a href="#" class="btn-outline lnk mt30">Get Strategy Call <i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->
    <!--Start Clients-->
    <section class="clients-section lead-gen-client pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Happy customers</span>
                        <h2>Clients Who Trust Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="opl">
                        <ul>
                            <li class=" wow fadeIn" data-wow-delay=".2s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-1.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".4s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-2.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".6s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-3.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".8s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-4.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-5.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1.2s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-7.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1.4s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-8.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1.6s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-9.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1.8s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-10.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="2s">
                                <div class="clients-logo"><img
                                        src="{{ asset('frontend_assets') }}/images/client/clients-11.png" alt="text"
                                        class="img-fluid" /></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="2.1s">
                    <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                    <a href="#" class="btn-main bg-btn2 lnk">Let's Work Together<i
                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Clients-->
    <!--Start Testinomial-->
    <section class="testinomial-section pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 v-center">
                    <div class="common-heading text-l">
                        <span>Clients Testimonial</span>
                        <h2 class="mb0">What Clients Say About Us</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-card-a pl25">
                        <div class="testimonial-card">
                            <div class="t-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            </div>
                            <div class="client-thumbs mt30">
                                <div class="media v-center">
                                    <div class="user-image bdr-radius"><img
                                            src="{{ asset('frontend_assets') }}/images/user-thumb/girl.jpg" alt="girl"
                                            class="img-fluid" /></div>
                                    <div class="media-body user-info v-center">
                                        <h5>Moana Smile</h5>
                                        <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="t-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            </div>
                            <div class="client-thumbs mt30">
                                <div class="media v-center">
                                    <div class="user-image bdr-radius"><img
                                            src="{{ asset('frontend_assets') }}/images/user-thumb/girl.jpg" alt="girl"
                                            class="img-fluid" /></div>
                                    <div class="media-body user-info">
                                        <h5>Moana Smile</h5>
                                        <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="t-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            </div>
                            <div class="client-thumbs mt30">
                                <div class="media v-center">
                                    <div class="user-image bdr-radius"><img
                                            src="{{ asset('frontend_assets') }}/images/user-thumb/girl.jpg" alt="girl"
                                            class="img-fluid" /></div>
                                    <div class="media-body user-info">
                                        <h5>Moana Smile</h5>
                                        <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testinomial-->
    <!--Start Enquire Form-->
    <section class="enquire-form pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <span>Discuss With Our Team</span>
                        <h2 class="mt0">Want More Leads and More Customers to Grow Your Revenue?</h2>
                    </div>
                    <div class="form-block">
                        <form action="#" method="post" name="feedback-form">
                            <div class="fieldsets row">
                                <div class="col-md-6"><input type="text" placeholder="Full Name" name="name"></div>
                                <div class="col-md-6"><input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-6"><input type="number" placeholder="Contact Number" name="phone">
                                </div>
                                <div class="col-md-6"><input type="text" placeholder="Subject" name="subject"></div>
                            </div>
                            <div class="fieldsets"><textarea placeholder="Message" name="message"></textarea></div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1"
                                    checked="checked">
                                <label class="custom-control-label" for="customCheck">I agree to the <a
                                        href="javascript:void(0)">Terms &amp; Conditions</a> of Business Name.</label>
                            </div>
                            <div class="fieldsets mt20"> <button type="submit" name="submit"
                                    class="lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i><span
                                        class="circle"></span></button> </div>
                            <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="enquire-image">
                        <img src="{{ asset('frontend_assets') }}/images/about/lead-pic.png" alt="enquire"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Enquire Form-->
    <!--Start blog-->
    <section class="blog-home pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Blogs</span>
                        <h2 class="mb0">Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/blog/blog-1.jpg" alt="blog"
                                    class="img-fluid" /> </a>
                            <span class="category-blog"><a href="#">iOs</a> <a href="#">Android</a></span>
                        </div>
                        <div class="item-info blog-info">
                            <div class="entry-blog">
                                <span class="bypost"><a href="#"><i class="fas fa-user"></i> Tom Black</a></span>
                                <span class="posted-on">
                                    <a href="#"><i class="fas fa-clock"></i> Sep 24, 2019</a>
                                </span>
                                <span><a href="#"><i class="fas fa-comment-dots"></i> (23)</a></span>
                            </div>
                            <h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/blog/blog-2.jpg" alt="blog"
                                    class="img-fluid" /> </a>
                            <span class="category-blog"><a href="#">iOs</a> <a href="#">Android</a></span>
                        </div>
                        <div class="item-info blog-info">
                            <div class="entry-blog">
                                <span class="bypost"><a href="#"><i class="fas fa-user"></i> Tom Black</a></span>
                                <span class="posted-on">
                                    <a href="#"><i class="fas fa-clock"></i> Sep 24, 2019</a>
                                </span>
                                <span><a href="#"><i class="fas fa-comment-dots"></i> (23)</a></span>
                            </div>
                            <h4><a href="#">Finance App Development - Time, Cost, Features</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/blog/blog-3.jpg" alt="blog"
                                    class="img-fluid" /> </a>
                            <span class="category-blog"><a href="#">Marketing</a> <a href="#">SEM</a></span>
                        </div>
                        <div class="item-info blog-info">
                            <div class="entry-blog">
                                <span class="bypost"><a href="#"><i class="fas fa-user"></i> Tom Black</a></span>
                                <span class="posted-on">
                                    <a href="#"><i class="fas fa-clock"></i> Sep 24, 2019</a>
                                </span>
                                <span><a href="#"><i class="fas fa-comment-dots"></i> (23)</a></span>
                            </div>
                            <h4><a href="#">How to Increase Your ROI Through scientific SEM?</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End blog-->

@endsection
