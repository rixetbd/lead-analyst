<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Niwax</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#101010">
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
    <link href="{{ asset('frontend_assets') }}/css/darkmode.css" rel="stylesheet">
</head>

<body>
    <!--Start login Form-->
    <section class="login-page pad-tb">
        <div class="v-center m-auto">
            <a href="#" class="d-block text-center mb30"><img src="images/white-logo.png" alt="Logo"
                    class="mega-darks-logo"></a>
            <div class="login-form-div">
                <h4 class="mb40 text-center">Login to your Account</h4>
                <div class="form-block">
                    <form id="contact-form" method="post" action="#">
                        <div class="fieldsets row">
                            <div class="col-md-12 form-group">
                                <input id="form_name" type="text" placeholder="Username" required="required">
                            </div>
                            <div class="col-md-12 form-group"><input type="password" placeholder="password"
                                    required="required">
                            </div>
                        </div>
                        <div class="fieldsets row mt20">
                            <div class="col-md-6 form-group v-center">
                                <button type="submit" class="lnk btn-main bg-btn">Submit <span
                                        class="circle"></span></button>
                            </div>
                            <div class="col-md-6 form-group v-center text-right"><a href="#" class="psforgt">Forgot
                                    Password?</a> </div>
                        </div>
                        <hr class="mt30 mb30">
                        <div class="text-center">
                            <p class="mb20">or Login with:</p>
                            <div class="social-btnnxx">
                                <a href="#" class="btn-main fb-btn"><i class="fab fa-facebook-f"></i> Facebook</a>
                                <a href="#" class="btn-main google-btn"><i class="fab fa-google"></i> Google</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End login Form-->



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend_assets') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugin.min.js"></script>
    <!--common script file-->
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>
</body>

</html>
