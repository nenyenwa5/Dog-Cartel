<!doctype html>
<html lang="en">

<!-- Mirrored from mannatstudio.com/html/pethund/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 12:41:13 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>PetHund - Animals Shop & Veterinary HTML Template</title>
    <meta name="author" content="Mannat Studio">
    <meta name="description" content="PetHund is a Responsive HTML5 Template for Animals Shop & Veterinary related services.">
    <meta name="keywords" content="PetHund, animal care, cats, Dog grooming, dogs, pet, pet care, pet center, pet services, pet shelter, pet shop, shelter, vet clinic, vet store, veterinarian, veterinary">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <link href="assets/css/theme-plugins.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    <div id="pageloader">
        <div class="loader-item">
            <div class="loader-item-content">
                <i class="icofont-paw"></i>
            </div>
        </div>
    </div>

    <b class="screen-overlay"></b>
    <header class="wow fadeInDown header-anim">
        <div class="top-bar-right d-flex align-items-center text-md-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center contact-info">
                        <div>
                            <i data-feather="map-pin"></i> Pet Street 123 - New York
                        </div>
                        <div>
                            <i data-feather="mail"></i> <a href="https://mannatstudio.com/cdn-cgi/l/email-protection#583d353931341821372d2a2b312c3d763b3735"><span class="__cf_email__" data-cfemail="27424a464e4b675e485255544e53420944484a">[email&#160;protected]</span></a>
                        </div>
                        <div>
                            <i data-feather="smartphone"></i> <a href="tel:(123)456789">(123) 456-789</a>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="social-icons">
                            
                            <a href="{{ route('register') }}">Sign Up</a>
                            <a href="{{ route('login') }}">Login</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg header-fullpage">
            <div class="container text-nowrap">
                <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                    <a class="navbar-brand rounded-bottom light-bg" href="index.html">
                        <img src="assets/images/logo_dark.svg" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown">
<a href="index.html" class="logo-small"><img src="assets/images/logo_white.svg" alt=""></a>
<div class="close-nav"></div>
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/about-us">About Us</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle-mob" href="/cartel" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cartel <i class="icofont-thin-down"></i></a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="">Purchase a Dog</a></li>
<li><a class="dropdown-item" href="">Find a breed</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/contact-us">Contact</a>
</li>
</ul>

</div>
            </div>
        </nav>

    </header>
    

    <section class="breadcrumbs-page-wrap">
        <div class="bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
            <img class="ptt-png" src="assets/images/Dot-Shape.png" alt="png">
        </div>
    </section>

        <section class="wide-tb-100 pb-0">
            <div class="container">
                <h1 class="heading-main center">
                    <small>Become a Part of Us <i class="pethund_repeat_grid"></i></small>
                    <span>Register</span> With Us?
                </h1>
                <div class="row">
                    <div class="col-lg-8 col-md-12 mx-auto">
                        <div class="need-help">
                            <div id="sucessmessage"></div>
                            <form action="/register" method="post" id="contact_form" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <div class="mb-3">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                        </div>
                                        @error('name')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-0">
                                    <div class="mb-3">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                    @error('password')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="mb-3">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                        @error('email')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="mb-3">
                                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control @error('password') is-invalid @enderror" placeholder="Confirm Password">
                                        </div>
                                        
                                        @error('password')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-0">
                                        <!-- <div class="mb-3">
<textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Message"></textarea>
</div> -->
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-theme bg-green mt-3 capusle">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       
    <footer class="wide-tb-150 bg-navy-blue pb-0" style="margin-top:250px">
        <div class="container">
            <div class="row wide-tb-50 pt-0 align-items-center">
                <div class="col-md-6 mb-0">
                    <div class="logo-footer">
                        <img src="assets/images/logo_white.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-icons d-flex justify-content-md-end align-items-center">
                        We are social
                        <ul class="list-unstyled list-group list-group-horizontal">
                            <li><a href="#"><i data-feather="twitter"></i></a></li>
                            <li><a href="#"><i data-feather="facebook"></i></a></li>
                            <li><a href="#"><i data-feather="instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 me-auto">
                    <h3 class="footer-heading">About PetHund</h3>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>


                <div class="col-lg-2 col-md-6">
                    <h3 class="footer-heading">Explore</h3>
                    <div class="footer-widget-menu">
                        <ul class="list-unstyled">
                            <li><a href="about.html"><i class="icofont-simple-right"></i> <span>About Us</span></a></li>
                            <li><a href="our-services.html"><i class="icofont-simple-right"></i> <span>Services</span></a></li>
                            <li><a href="our-team.html"><i class="icofont-simple-right"></i> <span>Our Team</span></a></li>
                            <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Adopt Pet</span></a></li>
                            <li><a href="gallery-4-col.html"><i class="icofont-simple-right"></i> <span>Gallery</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6">
                    <h3 class="footer-heading">Useful links</h3>
                    <div class="footer-widget-menu">
                        <ul class="list-unstyled">
                            <li><a href="our-faqs.html"><i class="icofont-simple-right"></i> <span>FAQs</span></a></li>
                            <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Help</span></a></li>
                            <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Privacy Policy</span></a></li>
                            <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Terms of Use</span></a></li>
                            <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Site Map</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 ms-auto col-md-6">
                    <h3 class="footer-heading">Working Hours</h3>
                    <p>Our support available to help you 24 hours a day. We provide our best.</p>
                    <div class="working-hours">
                        <ul class="list-unstyled">
                            <li>
                                <span class="txt-green">Mon – Fri :</span>
                                <span class="underline">08.00 am – 20.00 PM</span>
                            </li>
                            <li>
                                <span class="txt-green">Saturday :</span>
                                <span class="underline">09.00 am – 20.00 PM</span>
                            </li>
                            <li>
                                <span class="txt-green">Sunday :</span>
                                <span class="underline">We Are Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container pos-rel">
                <div class="copyright-text">
                    <div>Copyrights <span id="yearText"></span> <span class="txt-green">PetHund</span> All Rights Reserved.</div>
                    <div>Designed by <a href="https://themeforest.net/user/mannatstudio" rel="nofollow">MannatStudio</a>
                    </div>
                </div>
                <div class="footer-dog">
                    <img src="assets/images/dog_footer.png" alt="">
                </div>
            </div>
        </div>
    </footer>


    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center g-0">
                    <div class="col-md-1">
                        <i class="icofont-search"></i>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-1">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme-plugins.min.js"></script>

    <script src="assets/js/site-custom.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7613fa7cbb4fd799","version":"2022.10.3","r":1,"token":"64224fc8786846928480d180dfc466bd","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from mannatstudio.com/html/pethund/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 12:41:13 GMT -->

</html>