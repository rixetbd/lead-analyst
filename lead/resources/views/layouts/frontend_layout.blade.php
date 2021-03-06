<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>RonGTuLi</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#8bc0d9">
    <!--website-favicon-->
    <link href="{{ asset('frontend_assets') }}/images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('frontend_assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/plugin.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- template-style-->
    <link href="{{ asset('frontend_assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/responsive.css" rel="stylesheet">
</head>

<body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
        <div class="pre-content">
            <div class="logo-pre"><img src="{{ asset('frontend_assets') }}/images/favicon.png" alt="Logo"
                    class="img-fluid" /></div>
            <div class="pre-text- text-radius text-light text-animation bg-b">RonGTuLi - Creative Agency</div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="nav-bg-w main-header navfix fixed-top menu-white">
        <div class="container m-pad">
            <div class="menu-header">
                <div class="dsk-logo">
                    <a class="nav-brand" href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend_assets') }}/images/logo.png" alt="Logo" class="mega-darks-logo" style="max-width:200px;;"/>
                    </a>
                </div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">
                        <li class="">
                            <a href="{{ route('frontend.index') }}" class="menu-links">Home</a>
                        </li>

                        <li class="sbmenu rpdropdown">
                            <a href="#" class="menu-links">Services</a>
                            <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="portfolio.html">Data Entry</a> </li>
                                                <li><a href="portfolio-2.html">Lead Genaration</a> </li>
                                                <li><a href="portfolio-2.html">Web Development</a> </li>
                                                <li><a href="portfolio-2.html">Web Development</a> </li>
                                                <li><a href="portfolio-2.html">Web Development</a> </li>
                                                <li><a href="portfolio-2.html">Web Development</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="sbmenu rpdropdown">
                            <a href="#" class="menu-links">About Us</a>
                            <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="{{route('frontend.whyus')}}">Why us</a> </li>
                                                <li><a href="{{route('frontend.team')}}">Team Member</a> </li>
                                                <li><a href="{{route('frontend.client.reviews')}}">Clients Review</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <a href="{{ route('frontend.blog') }}" class="menu-links">Blog</a>
                        </li>

                        <li class="">
                            <a href="{{ route('frontend.contact') }}" class="menu-links">Contact</a>
                        </li>

                        <li class="">
                            <a href="#" class="menu-links"><i class="fas fa-user"></i> A/C<span class="circle"></span></a>
                        </li>



                        <!--menu right border-->
                        <li class="contact-show">
                            <a href="#" class="btn-round- btn-br bg-btn"><i class="fas fa-shopping-cart"></i> <span
                                    class="addtocart">1</span></a>
                            <div class="contact-inquiry">
                                <div class="contact-info-">
                                    <div class="contct-heading">Cart</div>
                                    <div class="inquiry-card-nn hrbg">
                                        <div class="title-inq-c">FOR HR DEPARTMENT</div>
                                        <ul>
                                            <li class="mb0"><img src="{{asset('frontend_assets')}}/images/flags/us.svg" alt="us office"
                                                    class="flags-size"> <a href="tel:1111111111">+1-123-456-7890</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inquiry-card-nn">
                                        <div class="title-inq-c">FOR SALES DEPARTMENT</div>
                                        <ul>
                                            <li><a href="tel:1111111111"><img src="{{asset('frontend_assets')}}/images/flags/us.svg" alt="us office"
                                                        class="flags-size"> +1-123-456-7890</a></li>
                                            <li><a href="tel:1111111111"><img src="{{asset('frontend_assets')}}/images/flags/au.svg"
                                                        alt="australia office" class="flags-size"> +1-123-456-7890</a>
                                            </li>
                                            <li><i class="fab fa-skype"></i><a
                                                    href="skype:niwax.company?call">niwax.company</a></li>
                                            <li><i class="fas fa-envelope"></i><a
                                                    href="mailto:info@businessname.com">info@businessname.com</a></li>
                                        </ul>
                                    </div>


                                    <div class="d-flex justify-content-end pe-3 pb-4">
                                        <a href="{{route('frontend.cart')}}" class="mt10 btn-main btn-small bg-btn3 lnk">View Cart<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                    <ul class="nav-list right-end-btn">
                        <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>

            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <li>
                        <a href="#">Home</a>
                        <ul>
                            <li>
                                <a href="#">Multi-Page Demo</a>
                                <ul>
                                    <li><a href="digital-agency.html">Digital Agency</a></li>
                                    <li><a href="digital-agency-v2.html">Digital Agency V2</a></li>
                                    <li><a href="digital-agency-glassmorphism.html">Digital Agency V3</a></li>
                                    <li><a href="web-design-agency.html">Web Design Agency</a></li>
                                    <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                    <li><a href="lead-generation.html">Lead Generation Agency</a></li>
                                    <li><a href="landing-page-1.html">Landing Page V1</a></li>
                                    <li><a href="landing-page-2.html">Landing Page V2</a></li>
                                    <li><a href="freelance-portfolio.html">Freelance Portfolio</a></li>
                                    <li><a href="app-development.html">App Development Agency</a></li>
                                    <li><a href="minimal-portfolio.html">Minimal Portfolio</a></li>
                                    <li><a href="creative-agency.html">Creative Agency</a></li>
                                    <li><a href="branding-agency.html">Branding Agency</a></li>
                                    <li><a href="modern-agency.html">Modern Agency</a></li>
                                    <li><a href="business-and-startup.html">Business & Startup</a></li>
                                    <li><a href="graphic-studio.html">Graphic Studio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">One-Page Demo</a>
                                <ul>
                                    <li><a href="digital-agency-onepage.html">Digital Agency</a></li>
                                    <li><a href="digital-agency-dark-onepage.html">Digital Agency Dark</a></li>
                                    <li><a href="web-design-agency-onepage.html">Web Design Agency</a></li>
                                    <li><a href="web-design-agency-dark-onepage.html">Web Design Agency Dark</a></li>
                                    <li><a href="digital-marketing-onepage.html">Digital Marketing</a></li>
                                    <li><a href="digital-marketing-dark-onepage.html">Digital Marketing Dark</a></li>
                                    <li><a href="lead-generation-onepage.html">Lead Generation Agency</a></li>
                                    <li><a href="lead-generation-dark-onepage.html">Lead Generation Agency Dark</a></li>
                                    <li><a href="freelance-portfolio-onepage.html">Freelance Portfolio</a></li>
                                    <li><a href="freelance-portfolio-dark-onepage.html">Freelance Portfolio Dark</a>
                                    </li>
                                    <li><a href="app-development-onepage.html">App Development Agency</a></li>
                                    <li><a href="minimal-portfolio-onepage.html">Minimal Portfolio</a></li>
                                    <li><a href="creative-agency-onepage.html">Creative Agency</a></li>
                                    <li><a href="branding-agency-onepage.html">Branding Agency</a></li>
                                    <li><a href="modern-agency-onepage.html">Modern Agency</a></li>
                                    <li><a href="business-and-startup-onepage.html">Business & Startup</a></li>
                                    <li><a href="graphic-studio-onepage.html">Graphic Studio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="why-us.html">Why Us</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="team-details.html">Team Single</a></li>
                            <li><a href="case-study.html">Case Study</a></li>
                            <li><a href="case-study-details.html">Case Study Single</a></li>
                            <li><a href="mission-vision.html">Mission & Vision</a></li>
                            <li><a href="development-process.html">Development Process</a></li>
                            <li><a href="client-reviews.html">Client Reviews</a> </li>
                            <li><a href="clients.html">Our Clients</a></li>
                            <li><a href="get-quote.html">Contact Us</a> </li>
                            <li><a href="get-quote-2.html">Contact Us 2</a> </li>
                            <li><a href="login.html">Login Page</a> </li>
                            <li><a href="service-card.html">Service Card</a> </li>
                            <li><a href="service-web.html">Service Web</a></li>
                            <li><a href="service-app.html">Service Mobile App</a></li>
                            <li><a href="service-marketing.html">Service Digital Marketing</a></li>
                            <li><a href="service-graphic.html">Service Graphic</a></li>
                            <li><a href="career.html">Careers</a> </li>
                            <li><a href="shop-page.html">Shop Single</a> </li>
                            <li><a href="shop-details.html">Shop Details</a> </li>
                            <li><a href="shop-cart.html">Shop Cart</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Shortcodes</a>
                        <ul>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="button.html">Buttons</a></li>
                            <li><a href="locations.html">Office Location</a></li>
                            <li><a href="faq.html">FAQs</a> </li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="error.html">404 Page</a></li>
                            <li><a href="gradients.html">Background Gradients</a></li>
                            <li><a href="header-v1.html">Header v1</a></li>
                            <li><a href="header-v2.html">Header v2</a></li>
                            <li><a href="header-v3.html">Header v3</a></li>
                            <li><a href="footer-design.html">Footer</a></li>
                            <li><a href="hover-animation.html">Hover Animation</a></li>
                            <li><a href="popup-modal.html">Popup Modal</a></li>
                            <li><a href="lists.html">Lists</a></li>
                            <li><a href="bootstrap-components.html">Bootstrap Components</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                        <ul>
                            <li><a href="portfolio.html">Portfolio Grid 1</a> </li>
                            <li><a href="portfolio-2.html">Portfolio Grid 2</a> </li>
                            <li><a href="portfolio-block.html">Portfolio Wide Block</a> </li>
                            <li><a href="portfolio-block-2.html">Portfolio Wide Block v2</a> </li>
                            <li><a href="portfolio-details.html">Portfolio Details</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul>
                            <li><a href="blog-grid-1.html">Blog Grid 1</a> </li>
                            <li><a href="blog-grid-2.html">Blog Grid 2</a> </li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a> </li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a> </li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="bottom-nav">
                    <li class="prb">
                        <a href="tel:+11111111111">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                <path
                                    d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="mailto:somewebmedia@gmail.com">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                <path d="M0 0h24v24H0z" fill="none" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="skype:niwax.company?call">
                            <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--End Header -->

    @yield('content')



    <!--Start Footer-->

    <footer class="ftshap">
        <div class="footer-row1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="email-subs">
                            <h3>Get New Insights Weekly</h3>
                            <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt. Enter your email</p>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center">
                        <div class="email-subs-form">
                            <form>
                                <input type="email" placeholder="Email Your Address" name="emails">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-svg">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
                <path class="st0" d="M0,27.2c589.2,129.4,1044-69,1920,31v-60H3.2L0,27.2z" />
            </svg>
        </div>
        <div class="footer-row2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h5>Service</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="javascript:void(0)">Logo & Branding</a></li>
                            <li><a href="javascript:void(0)">Website Development</a></li>
                            <li><a href="javascript:void(0)">Mobile App Development</a></li>
                            <li><a href="javascript:void(0)">Search Engine Optimization</a></li>
                            <li><a href="javascript:void(0)">Pay-Per-Click</a></li>
                            <li><a href="javascript:void(0)">Social Media Marketing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5>Company</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="service.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog-grid.html">Blogs</a></li>
                            <li><a href="blog-grid.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5>Support</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="get-quote.html">Our Team</a></li>
                            <li><a href="get-quote.html">Contact</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Sitemap</a></li>
                            <li><a href="javascript:void(0)">Social</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5>Contact Us</h5>
                        <ul class="footer-address-list ftr-details">
                            <li>
                                <span><i class="fas fa-envelope"></i></span>
                                <p>Email <span> <a
                                            href="/cdn-cgi/l/email-protection#5831363e37183a2d2b31363d2b2b3639353d763b3735">
                                            <span class="__cf_email__">rixetbd@gmail.com</span></a></span>
                                </p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone-alt"></i></span>
                                <p>Phone <span> <a href="tel:+10000000000">+1 0000 000 000</a></span></p>
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Address <span> Mirpur 01, Zoo Road, Dhaka 1216</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hline">
        <div class="footer-row3">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-social-media-icons">
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-vimeo-v"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
                            </div>
                            <div class="footer-">
                                <p>&copy; Copyright {{ date('Y') }}. All Rights Reserved By <a
                                        href="https://dev-rixetbd.pantheonsite.io" target="blank">Rabiul Islam</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer V1-->
    <!--End Footer-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend_assets') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugin.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/preloader.js"></script>
    <!--common script file-->
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>

    {{-- @yield('frontend_script') --}}
    @stack('frontend_script')
</body>

</html>
