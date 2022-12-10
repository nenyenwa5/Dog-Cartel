<!doctype html>
<html lang="en">

<!-- Mirrored from mannatstudio.com/html/pethund/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 12:40:11 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>PetHund - Animals Shop & Veterinary HTML Template</title>
    <meta name="author" content="Mannat Studio">
    <meta name="description" content="PetHund is a Responsive HTML5 Template for Animals Shop & Veterinary related services.">
    <meta name="keywords" content="PetHund, animal care, cats, Dog grooming, dogs, pet, pet care, pet center, pet services, pet shelter, pet shop, shelter, vet clinic, vet store, veterinarian, veterinary">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/favicon.ico')}}">

    <link href="{{ asset('/assets/css/theme-plugins.min.css')}}" rel="stylesheet">

    <link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet">

    <link href="{{ asset('/assets/css/responsive.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/revolution/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/revolution/fonts/font-awesome/css/font-awesome.css')}}">
    <style>
        body {
            position: relative;
        }

        h1 {
            margin-bottom: 100rem;
        }
    </style>
</head>

<body data-spy="scroll" data-bs-target="#navbarCollapse" data-offset="100">

    <div id="pageloader">
        <div class="loader-item">
            <div class="loader-item-content">
                <i class="icofont-paw"></i>
            </div>
        </div>
    </div>

    <b class="screen-overlay"></b>
    <header class="wow fadeInDown header-blue header-top header-onepage">
        <div class="top-bar-right d-flex align-items-center text-md-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center contact-info">
                        <div>
                            <i data-feather="map-pin"></i> Pet Street 123 - New York
                        </div>
                        <div>
                            <i data-feather="mail"></i> <a href="https://mannatstudio.com/cdn-cgi/l/email-protection#1b7e767a72775b62746e6968726f7e35787476"><span class="_cf_email_" data-cfemail="6c09010d05002c1503191e1f051809420f0301">[email&#160;protected]</span></a>
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

        <nav class="navbar navbar-expand-lg header-fullpage nav-light header-anim">
            <div class="container text-nowrap">
                <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                    <a class="navbar-brand rounded-bottom light-bg" href="index.html">
                        <img src="{{ asset('assets/images/logo_white.svg')}}" alt="">
                    </a>
                </div>

                <div class="d-inline-flex order-lg-last col-auto p-0 align-items-center">
                    <a class="nav-link ms-auto pr-0" href="#" id="search_home"><i data-feather="search"></i></a>
                    <a class="nav-link ms-auto" href="#" id="shopping-bag" data-trigger="#card_mobile"><i data-feather="shopping-bag"></i> <span class="badge badge-success">0</span></a>

                    <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown">
                    <a href="index.html" class="logo-small"><img src="{{ asset('/assets/images/logo_white.svg')}}" alt=""></a>
                    <div class="close-nav"></div>
                    <ul class="navbar-nav navbar-onepage ms-auto">
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
                            <a class="nav-link" href="/contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>
    <article class="card mobile-offcanvas offcanvas-right" id="card_mobile">
        <div class="shop-sidebar">
            <div class="offcanvas-header">
                <button class="btn btn-close"> <i data-feather="x-circle"></i> </button>
            </div>
            <h3 class="head">My Cart</h3>
            <ul class="list-unstyled">
                <li>
                    <img src="{{ asset('/assets/images/shop/sidebar_shop_1.jpg')}}" alt="">
                    <div>
                        <h4><a href="shop-single.html">Lounger Dog Bed</a></h4>
                        <h6>$85</h6>
                    </div>
                    <div class="delete-btn">
                        <a href="#"><i class="icofont-close-line"></i></a>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('/assets/images/shop/sidebar_shop_2.jpg')}}" alt="">
                    <div>
                        <h4><a href="shop-single.html">Sara's Doggie Treat</a></h4>
                        <h6>$45</h6>
                    </div>
                    <div class="delete-btn">
                        <a href="#"><i class="icofont-close-line"></i></a>
                    </div>
                </li>
            </ul>
            <div class="sidebar-subtotal">
                <span>Subtotal</span>
                <strong>$130</strong>
            </div>
            <div class="btn-holder">
                <div class="col">
                    <a href="shop-cart.html" class="btn-theme bordered bg-navy-blue btn-sm btn-block">View Cart</a>
                </div>
                <div class="col">
                    <a href="shop-checkout.html" class="btn-theme bg-orange btn-shadow btn-sm btn-block">Checkout</a>
                </div>
            </div>
        </div>
    </article>
    <section id="home">
        <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery" style="background:#aaaaaa;padding:0px;">

            <div id="rev_slider_26_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
                <ul>

                    <li data-index="rs-73" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="{{asset('/assets/images/slider/h5_slider_1.jpg')}}" data-kenburns="on" data-duration="5000" data-ease="Power3.easeInOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" style='background:linear-gradient(90deg, rgba(134,143,150,1) 0%, rgba(89,97,100,1) 100%)' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>


                        <div class="tp-caption btn-theme bg-orange btn-shadow" id="slide-73-layer-4" data-x="['left','left','left','left']" data-hoffset="['65','120','70','40']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','10']" data-width="['180','180','180','180']" data-height="none" data-whitespace="normal" data-type="button" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"sfxcolor":"#98cb46","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 5; white-space: normal; font-size: 18px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); font-family:'Karla', sans-serif;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; font-weight: 600; text-transform: uppercase;">
                            Give us call </div>

                        <div class="tp-caption tp-resizeme" id="slide-73-layer-1" data-x="['left','left','left','left']" data-hoffset="['270','325','270','40']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','65']" data-width="['180','180','180','180']" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":400,"speed":750,"sfxcolor":"#2f3b4a","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; color: #FFF; font-size: 18px;">
                            (+44) 123 456 789 </div>

                        <div class="tp-caption   tp-resizeme" id="slide-73-layer-3" data-x="['left','left','left','left']" data-hoffset="['45','100','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-177','-135','-135','-220']" data-width="['360','360','360','360']" data-height="none" data-whitespace="normal" data-type="text" ata-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#98cb46","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[20,20,20,20]" style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; font-family:Karla', sans-serif;">
                            Pet Care Services, in New York City </div>

                        <div class="tp-caption tp-resizeme" id="slide-73-layer-2" data-x="['left','left','left','left']" data-hoffset="['45','100','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-50','-30','-30','-110']" data-fontsize="['70','70','70','50']" data-lineheight="['70','70','70','50']" data-width="['600','650','620','380']" data-height="['200','200','200','200']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#98cb46","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[20,20,20,20]" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[20,20,20,20]" style="z-index: 8; font-family: 'Changa', sans-serif; min-width : 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px; font-weight: 700;">
                            We Provide Care, That Your Pet Deserves! </div>
                    </li>

                    <li data-index="rs-75" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="{{ asset('assets/images/slider/h5_slider_2.jpg')}}" data-kenburns="on" data-duration="5000" data-ease="Power3.easeInOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-bgcolor='linear-gradient(180deg, rgba(22,160,133,1) 0%, rgba(244,208,63,1) 100%)' ' style=' background:linear-gradient(180deg, rgba(22,160,133,1) 0%, rgba(244,208,63,1) 100%)' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>


                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-75-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['250','200','135','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"delay":500,"speed":750,"sfxcolor":"#27304b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; color: #FFF; font-size: 18px;">
                            (+44) 123 456 789 </div>

                        <div class="tp-caption   tp-resizeme" id="slide-75-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['10','-50','-100','-140']" data-fontsize="['70','70','70','50']" data-lineheight="['70','70','70','50']" data-width="['650','650','620','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#f15e42","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[20,20,20,20]" style="z-index: 8; font-family: 'Changa', sans-serif; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px; font-weight: 700;">
                            We Provide Care, That Your Pet Deserves! </div>

                        <div class="tp-caption   tp-resizeme" id="slide-75-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-140','-200','-250','-250']" data-width="['360','360','360','360']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#f15e42","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[20,20,20,20]" style="z-index: 7; text-align: center !important;  white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; font-family:Karla', sans-serif;">
                            Pet Care Services, in New York City </div>

                        <div class="tp-caption btn-theme bg-green btn-shadow tp-resizeme" id="slide-75-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['180','120','50','-20']" data-width="['180','180','180','180']" data-height="none" data-whitespace="normal" data-type="button" data-responsive_offset="on" data-frames='[{"delay":400,"speed":750,"sfxcolor":"#f15e42","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 5; white-space: normal; font-size: 18px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); font-family:'Karla', sans-serif;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; font-weight: 600; text-transform: uppercase;">
                            Give us call </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="height: 5px; background: rgba(255, 255, 255, 0.15);"></div>
            </div>
        </div>
    </section>

    <main id="body-content" class="non-overflow-intro">

        <section class="home-classis-box">
            <div class="container">
                <div class="row g-0">

                    <div class="col-md-6 col-lg-4 col-md-6 mb-0">
                        <div class="icon-box-bg-color bg-green">
                            <div class="icon">
                                <i class="icofont-paw"></i>
                            </div>
                            <div class="text">
                                <h3>We Heal</h3>
                                <p>Well gaudy hound hired set flailed much followed less this maternal well unavoidable crudely aloof more save groomed.</p>
                            </div>
                            <div class="numbers">
                                01
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 col-md-6 mb-0">
                        <div class="icon-box-bg-color bg-navy-blue">
                            <div class="icon">
                                <i class="icofont-paw"></i>
                            </div>
                            <div class="text">
                                <h3>Experienced Staff</h3>
                                <p>Well gaudy hound hired set flailed much followed less this maternal well unavoidable crudely aloof more save groomed.</p>
                            </div>
                            <div class="numbers">
                                02
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 col-lg-4 col-md-6 mb-0">
                        <div class="icon-box-bg-color bg-orange">
                            <div class="icon">
                                <i class="icofont-paw"></i>
                            </div>
                            <div class="text">
                                <h3>Easy Consultation</h3>
                                <p>Well gaudy hound hired set flailed much followed less this maternal well unavoidable crudely aloof more save groomed.</p>
                            </div>
                            <div class="numbers">
                                03
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-100 pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-center">
                        <img src="assets/images/cat_img.png" alt="">
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0">
                        <h1 class="heading-main wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                            <small>Quality & Experience <i class="pethund_repeat_grid"></i></small>
                            <span>Pet Grooming</span> & Care Center
                        </h1>
                        <p>At Pethund, the ambition is that you should always feel welcome both as an advertiser and a visitor. A modern and easy-to-manage page makes it easier for Users to maneuver forward. or then randomised words which don't look even slightly believable you need to be sure there isn't anything embarrassing vestibu lum at eros.</p>
                        <ul class="list-unstyled icons-listing theme-green paws fw-7 mt-5 txt-blue">
                            <li>Abore et dolore magna aliqua ut enim veniam</li>
                            <li>Quis nostrud exercitation ullamco laboris nisi aliquip</li>
                            <li>Eiusmod tempor incididunt labore.</li>
                        </ul>
                        <a href="about.html" class="btn-theme bg-navy-blue capusle mt-5 btn-shadow">Discover More</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-150 about-us-gap about-left-wrap" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-0">
                        <div class="about-left">
                            <img src="{{ asset('assets/images/about_left.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-us-wrap">
                            <h1 class="heading-main light-mode">
                                <small>Who We Are <i class="pethund_repeat_grid"></i></small>
                                Best Pet <span class="txt-blue">Care Service</span>
                            </h1>
                            <p>At Pethund, the ambition is that you should always feel welcome both as an advertiser and a visitor. A modern and easy-to-manage page makes it easier for Users to maneuver forward. or then randomised words which don't look even slightly believable </p>
                            <ul class="list-unstyled icons-listing theme-green paws fw-7 mt-5 txt-blue">
                                <li>Abore et dolore magna aliqua ut enim veniam</li>
                                <li>Quis nostrud exercitation ullamco laboris nisi aliquip</li>
                                <li>Eiusmod tempor incididunt labore.</li>
                            </ul>
                            <div class="about-video">
                                <a href="https://player.vimeo.com/video/7449107" class="popup-video">
                                    <i class="pethund_videoPlay"></i>
                                    <span>HOW WE WORK</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="take-care-img">
                            <img src="{{ asset('/assets/images/take_care_img.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <h1 class="heading-main">
                            <small>Why Choose Us <i class="pethund_repeat_grid"></i></small>
                            <span>Everything Your pet</span> needs in one place
                        </h1>
                        <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                        <div class="accordion accordion-flush theme-accordian" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        How to take care of your pets
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="content">
                                            Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Get bathing in our vet bath
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="content">
                                            Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Your pet is in good hands with us
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="content">
                                            Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        The best care takers of any kind of pets
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="content">
                                            Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 pb-0 bg-green dog-video-wrap">
            <div class="container">
                <h1 class="heading-main light-mode center wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <small>Quality & Experience <i class="pethund_repeat_grid"></i></small>
                    Best Pet <span class="txt-blue">Care Service</span>
                </h1>
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto text-center">
                        <p class="txt-white">At Pethund, the ambition is that you should always feel welcome both as an advertiser and a visitor. A modern and easy-to-manage page makes it easier for Users to maneuver forward. or then randomised words which don't look even slightly believable </p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="how-we-work">
                        <img src="assets/images/404_dogs_img.png" class="dog-video" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-150" id="services">
            <div class="container">
                <h1 class="heading-main center wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <small>What we offer for you <i class="pethund_repeat_grid"></i></small>
                    <span>Our Providing </span> Services
                </h1>
                <div class="row">

                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_petsitting"></i>
                            </div>
                            <div class="text">
                                <h3>Pet Sitting</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="services-single.html" class="read-more-arrow">
                                    Read More <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_pet_grooming"></i>
                            </div>
                            <div class="text">
                                <h3>Pet Grooming</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="services-single.html" class="read-more-arrow">
                                    Read More <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_adoption"></i>
                            </div>
                            <div class="text">
                                <h3>Pet Adoption</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="services-single.html" class="read-more-arrow">
                                    Read More <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_natural_product"></i>
                            </div>
                            <div class="text">
                                <h3>Natural Products</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="services-single.html" class="read-more-arrow">
                                    Read More <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_vaccinated"></i>
                            </div>
                            <div class="text">
                                <h3>Pet Vaccination</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="services-single.html" class="read-more-arrow">
                                    Read More <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_pet_food"></i>
                            </div>
                            <div class="text">
                                <h3>Pet Foods</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="services-single.html" class="read-more-arrow">
                                    Read More <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center wow fadeInUp col-md-12" data-wow-duration="0" data-wow-delay="0s">
                        <a href="our-services.html" class="btn-theme bordered capusle bg-navy-blue">View All Services</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="wide-tb-150 bg-testimonial pos-rel bg-navy-blue">
            <div class="bg-overlay blue opacity-60"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10 mx-auto">
                        <div class="testimonial-rounded">
                            <div class="owl-carousel owl-theme light-nav" id="bg-testimonial">

                                <div class="item">
                                    <div class="client-testimonial">
                                        <div class="quote-icon">
                                            <i class="pethund_quotes"></i>
                                        </div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare
                                            imperdiet, </p>
                                        <div class="client-testimonial-icon">
                                            <h3>Tina Cambell <span>Pet Owner</span></h3>
                                        </div>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="client-testimonial">
                                        <div class="quote-icon">
                                            <i class="pethund_quotes"></i>
                                        </div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare
                                            imperdiet, </p>
                                        <div class="client-testimonial-icon">
                                            <h3>Tina Cambell <span>Pet Owner</span></h3>
                                        </div>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="client-testimonial">
                                        <div class="quote-icon">
                                            <i class="pethund_quotes"></i>
                                        </div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare
                                            imperdiet, </p>
                                        <div class="client-testimonial-icon">
                                            <h3>Tina Cambell <span>Pet Owner</span></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wide-tb-150 column-four-gallery" id="gallery">
            <div class="container-fluid">
                <h1 class="heading-main center">
                    <small>Because We Really Care About Your Pets <i class="pethund_repeat_grid"></i></small>
                    <span>Our Pet</span> Gallery
                </h1>
                <div class="row">
                    <div class="col-md-12">
                        <ul id="portfolio-flters" class="list-unstyled">
                            <li data-filter="*" class="filter-active"><a href="javascript:">All</a></li>
                            <li data-filter=".birds"><a href="javascript:">Birds</a></li>
                            <li data-filter=".cats"><a href="javascript:">Cats</a></li>
                            <li data-filter=".dogs"><a href="javascript:">Dogs</a></li>
                            <li data-filter=".kittens"><a href="javascript:">Kittens</a></li>
                        </ul>
                    </div>
                </div>
                <div class="isotope-gallery captured-img-gallery row">
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 dogs">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_1.jpg" title="Sophie Cute"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Sophie Cute</a></h3>
                                <h5>Dog</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_1.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 kittens">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_2.jpg" title="Eartha Kitty"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Eartha Kitty</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_2.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 dogs">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_3.jpg" title="Simba Jake"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Simba Jake</a></h3>
                                <h5>Dog</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_3.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 kittens">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_4.jpg" title="Starlet Baby"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Starlet Baby</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_4.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 dogs">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_5.jpg" title="Charlie Taz"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Charlie Taz</a></h3>
                                <h5>Dog</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_5.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 birds">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_6.jpg" title="Misty Twitter"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Misty Twitter</a></h3>
                                <h5>Bird</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_6.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 dogs">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_7.jpg" title="Oreo Seal"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Oreo Seal</a></h3>
                                <h5>Dog</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_7.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 cats">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_8.jpg" title="Molly Cat"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Molly Cat</a></h3>
                                <h5>Cat</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_8.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 dogs">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_9.jpg" title="Gizmo Moody"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Gizmo Moody</a></h3>
                                <h5>Dog</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_9.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 dogs">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_10.jpg" title="Charlie Happy"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Charlie Happy</a></h3>
                                <h5>Dog</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_10.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 kittens">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_11.jpg" title="Lucky Kitty"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Lucky Kitty</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_11.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="gallery-item mb-4 col-md-6 col-xl-3 col-lg-4 col-12 dogs">
                        <div class="captured-gallery-item">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/gallery_img_12.jpg" title="Tiger Wood"><i class="icofont-plus"></i></span>
                                <h3><a href="gallery-single.html">Tiger Wood</a></h3>
                                <h5>Dog</h5>
                            </div>
                            <img src="assets/images/gallery/gallery_img_12.jpg" class="rounded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-40 counter-bg-curve bg-orange mb-5">
            <div class="container">
                <div class="row">

                    <div class="col col-6 col-lg-3 col-sm-6 wow fadeInLeft">
                        <div class="icon-box-3">
                            <div class="icon-font">
                                <i class="pethund_pet_belt"></i>
                            </div>
                            <div class="text">
                                <div class="counter-txt"><span class="counter">325</span>+</div>
                                <div>Adopted Pets</div>
                            </div>
                        </div>
                    </div>


                    <div class="col col-6 col-lg-3 col-sm-6 wow fadeInLeft">
                        <div class="icon-box-3">
                            <div class="icon-font">
                                <i class="pethund_pet_professional"></i>
                            </div>
                            <div class="text">
                                <div class="counter-txt"><span class="counter">20</span>+</div>
                                <div>Professionals</div>
                            </div>
                        </div>
                    </div>


                    <div class="w-100 d-none d-md-block d-lg-none spacer-60"></div>


                    <div class="col col-6 col-lg-3 col-sm-6 wow fadeInRight">
                        <div class="icon-box-3">
                            <div class="icon-font">
                                <i class="pethund_pet_awards"></i>
                            </div>
                            <div class="text">
                                <div class="counter-txt"><span class="counter">14</span>+</div>
                                <div>Pet Awards</div>
                            </div>
                        </div>
                    </div>


                    <div class="col col-6 col-lg-3 col-sm-6 wow fadeInRight">
                        <div class="icon-box-3">
                            <div class="icon-font">
                                <i class="pethund_pet_salon"></i>
                            </div>
                            <div class="text">
                                <div class="counter-txt"><span class="counter">795</span>+</div>
                                <div>Pets Gromming</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-150 mt-5" id="team">
            <div class="container">
                <h1 class="heading-main center wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <small>Our perfect staff <i class="pethund_repeat_grid"></i></small>
                    <span>Meet Our</span> Groomers
                </h1>
                <div class="owl-carousel owl-theme" id="team-slider-about">

                    <div class="item">
                        <div class="team-section-wrap">
                            <div class="img">
                                <div class="social-icons">
                                    <a href="#"><i data-feather="twitter"></i></a>
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                                <img src="assets/images/team/team-1.jpg" alt="">
                            </div>
                            <div class="team-name">
                                <h4><a href="team-single.html">Meghan Smith</a></h4>
                                <div><strong>Pet Trainer</strong></div>
                            </div>
                            <a href="team-single.html" class="read-more-arrow">
                                Read More <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="item">
                        <div class="team-section-wrap">
                            <div class="img">
                                <div class="social-icons">
                                    <a href="#"><i data-feather="twitter"></i></a>
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                                <img src="assets/images/team/team-2.jpg" alt="">
                            </div>
                            <div class="team-name">
                                <h4><a href="team-single.html">Alissa Silva</a></h4>
                                <div><strong>Pet Trainer</strong></div>
                            </div>
                            <a href="team-single.html" class="read-more-arrow">
                                Read More <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="item">
                        <div class="team-section-wrap">
                            <div class="img">
                                <div class="social-icons">
                                    <a href="#"><i data-feather="twitter"></i></a>
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                                <img src="assets/images/team/team-3.jpg" alt="">
                            </div>
                            <div class="team-name">
                                <h4><a href="team-single.html">Lucas Manson</a></h4>
                                <div><strong>Pet Trainer</strong></div>
                            </div>
                            <a href="team-single.html" class="read-more-arrow">
                                Read More <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="item">
                        <div class="team-section-wrap">
                            <div class="img">
                                <div class="social-icons">
                                    <a href="#"><i data-feather="twitter"></i></a>
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                                <img src="assets/images/team/team-4.jpg" alt="">
                            </div>
                            <div class="team-name">
                                <h4><a href="team-single.html">Cindey Harris</a></h4>
                                <div><strong>Veterinarian</strong></div>
                            </div>
                            <a href="team-single.html" class="read-more-arrow">
                                Read More <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="item">
                        <div class="team-section-wrap">
                            <div class="img">
                                <div class="social-icons">
                                    <a href="#"><i data-feather="twitter"></i></a>
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                                <img src="assets/images/team/team-5.jpg" alt="">
                            </div>
                            <div class="team-name">
                                <h4><a href="team-single.html">Alissa Silva</a></h4>
                                <div><strong>Veterinarian</strong></div>
                            </div>
                            <a href="team-single.html" class="read-more-arrow">
                                Read More <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="item">
                        <div class="team-section-wrap">
                            <div class="img">
                                <div class="social-icons">
                                    <a href="#"><i data-feather="twitter"></i></a>
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                                <img src="assets/images/team/team-6.jpg" alt="">
                            </div>
                            <div class="team-name">
                                <h4><a href="team-single.html">Lucas Manson</a></h4>
                                <div><strong>Veterinarian</strong></div>
                            </div>
                            <a href="team-single.html" class="read-more-arrow">
                                Read More <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 mt-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="text-center">
                            <strong>Meet our professionals</strong>
                            <p>We have an experienced qualified team to take care of your best friend</p>
                            <a href="our-team.html" class="btn-theme bg-orange capusle bordered me-4">View All Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-150 bg-light-gray" id="pricing">
            <div class="container">

                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main center wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <small>Our Affordable Rates <i class="pethund_repeat_grid"></i></small>
                        <span>Pricing </span> Plans
                    </h1>
                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-12">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <span class="bg-green">Regular Pack</span>
                            </div>
                            <div class="pricing">
                                <sup>$</sup>10
                            </div>
                            <div class="per-visit">Per Visit</div>
                            <ul class="list-unstyled">
                                <li>Pet Shower</li>
                                <li>Fitness Checkup</li>
                                <li>Pet Grooming</li>
                                <li>Hair And Nail Cut</li>
                                <li class="disabled">Control Hair Falling</li>
                                <li class="disabled">Brush & Blow Dry</li>
                                <li class="disabled">Pet Park And Games</li>
                            </ul>
                            <a href="#" class="btn-theme btn-long-arrow bg-navy-blue py-3 w-100">
                                Order Now <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12">
                        <div class="pricing-table best-seller">
                            <div class="pricing-head">
                                <span class="bg-green">Exclusive Pack</span>
                            </div>
                            <div class="pricing">
                                <sup>$</sup>40
                            </div>
                            <div class="per-visit">Per Visit</div>
                            <ul class="list-unstyled">
                                <li>Pet Shower</li>
                                <li>Fitness Checkup</li>
                                <li>Pet Grooming</li>
                                <li>Hair And Nail Cut</li>
                                <li>Control Hair Falling</li>
                                <li class="disabled">Brush & Blow Dry</li>
                                <li class="disabled">Pet Park And Games</li>
                            </ul>
                            <a href="#" class="btn-theme btn-long-arrow bg-navy-blue py-3 w-100">
                                Order Now <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <span class="bg-green">Premium Pack</span>
                            </div>
                            <div class="pricing">
                                <sup>$</sup>60
                            </div>
                            <div class="per-visit">Per Visit</div>
                            <ul class="list-unstyled">
                                <li>Pet Shower</li>
                                <li>Fitness Checkup</li>
                                <li>Pet Grooming</li>
                                <li>Hair And Nail Cut</li>
                                <li>Control Hair Falling</li>
                                <li>Brush & Blow Dry</li>
                                <li>Pet Park And Games</li>
                            </ul>
                            <a href="#" class="btn-theme btn-long-arrow bg-navy-blue py-3 w-100">
                                Order Now <span> <i class="icofont-simple-right"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-150 bg-scroll pos-rel callout_bg">
            <div class="bg-overlay black opacity-30"></div>
            <div class="container">
                <div class="text-center">

                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main light-mode center">
                            <small>Safety & Quality For Your Pet <i class="pethund_repeat_grid"></i></small>
                            We Take Care of <br> Your Pet 24/7
                        </h1>
                        <a href="#" class="btn-theme bg-green btn-shadow">Give us call</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-150 bg-light-gray" id="blog">
            <div class="container">
                <h1 class="heading-main center">
                    <small>Recent Blog Post <i class="pethund_repeat_grid"></i></small>
                    <span>Latest News </span> & Articles
                </h1>
                <div class="owl-carousel owl-theme" id="blog-slider-services">

                    <div class="item">
                        <div class="blog-wrap-modern">
                            <div class="img">
                                <a href="blog-single.html"><img src="assets/images/blog/blog_modern_1.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="blog-single.html">How to Create a Cat’s Patio, or Outdoor Space</a>
                                </h3>
                                <div class="description">
                                    <p>Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="thumb-author">
                                        <img src="assets/images/testimonial_thumb_large_1.jpg" alt="">
                                        Mila Flowers
                                    </div>
                                    <div class="date">04 Mar</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="blog-wrap-modern">
                            <div class="img">
                                <a href="blog-single.html"><img src="assets/images/blog/blog_modern_2.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="blog-single.html">Fun Overload Is When A Girl Is Exhausted From Fun</a>
                                </h3>
                                <div class="description">
                                    <p>Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="thumb-author">
                                        <img src="assets/images/testimonial_thumb_large_1.jpg" alt="">
                                        Mila Flowers
                                    </div>
                                    <div class="date">04 Mar</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="blog-wrap-modern">
                            <div class="img">
                                <a href="blog-single.html"><img src="assets/images/blog/blog_modern_3.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="blog-single.html">Dog Flu – Does Your Dog Need Protecting?</a>
                                </h3>
                                <div class="description">
                                    <p>Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="thumb-author">
                                        <img src="assets/images/testimonial_thumb_large_1.jpg" alt="">
                                        Mila Flowers
                                    </div>
                                    <div class="date">04 Mar</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="blog-wrap-modern">
                            <div class="img">
                                <a href="blog-single.html"><img src="assets/images/blog/blog_modern_4.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="blog-single.html">Watch Your Step When You Have a Cat</a>
                                </h3>
                                <div class="description">
                                    <p>Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="thumb-author">
                                        <img src="assets/images/testimonial_thumb_large_1.jpg" alt="">
                                        Mila Flowers
                                    </div>
                                    <div class="date">04 Mar</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="blog-wrap-modern">
                            <div class="img">
                                <a href="blog-single.html"><img src="assets/images/blog/blog_modern_5.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="blog-single.html">5 Tips to Help with Dog Separation Anxiety</a>
                                </h3>
                                <div class="description">
                                    <p>Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="thumb-author">
                                        <img src="assets/images/testimonial_thumb_large_1.jpg" alt="">
                                        Mila Flowers
                                    </div>
                                    <div class="date">04 Mar</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="blog-wrap-modern">
                            <div class="img">
                                <a href="blog-single.html"><img src="assets/images/blog/blog_modern_6.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="blog-single.html">How To Train Your Canine Running Partner</a>
                                </h3>
                                <div class="description">
                                    <p>Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.</p>
                                </div>
                                <div class="bottom-content">
                                    <div class="thumb-author">
                                        <img src="assets/images/testimonial_thumb_large_1.jpg" alt="">
                                        Mila Flowers
                                    </div>
                                    <div class="date">04 Mar</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-150 pb-0" id="contact">
            <div class="container">
                <h1 class="heading-main center wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <small>Contact with Us <i class="pethund_repeat_grid"></i></small>
                    <span>Make an</span> Appointment
                </h1>
                <div class="row">
                    <div class="col-lg-10 col-md-12 mx-auto">
                        <div class="need-help mt-0">
                            <form action="#" method="post" id="contact_form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <div class="mb-3">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="mb-3">
                                            <input type="email" name="lastname" id="lastname" class="form-control" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="mb-3">
                                            <input type="number" name="email" id="email" class="form-control" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="mb-3">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-0">
                                        <div class="mb-3">
                                            <textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Write your message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-theme bg-orange capusle">Submit Request</button>
                                    </div>
                                </div>
                            </form>
                            <section class="home-intor-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-light-gray clients-rounded-wrap need-help-topspace">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client1.png" alt="">
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client2.png" alt="">
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client3.png" alt="">
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client4.png" alt="">
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client5.png" alt="">
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client6.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <section class="bg-navy-blue subscribe-cruve">
        <div class="container">
            <div class="footer-subscribe  d-flex align-items-center">
                <div class="row align-items-center justify-content-between w-100">
                    <div class="col-lg-7">
                        <div class="d-sm-flex align-items-center">
                            <div class="icon">
                                <i data-feather="mail"></i>
                            </div>
                            <div class="heading">
                                <h3>Subscribe to our newsletter</h3>
                                <div>We send e-mails once a month, we never send Spam!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4 mt-lg-0">
                        <div class="d-md-flex align-items-center w-100">
                            <input type="text" name="subscribe" placeholder="Your email here">
                            <button type="submit" class="btn-theme bg-orange btn-shadow">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-intro">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 me-auto">
                    <div class="logo-footer">
                        <img src="assets/images/logo_gradient.svg" alt="">
                    </div>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    <div class="fw-7">
                        We are social
                    </div>
                    <div class="social-icons">
                        <a href="#"><i data-feather="facebook"></i></a>
                        <a href="#"><i data-feather="twitter"></i></a>
                        <a href="#"><i data-feather="instagram"></i></a>
                    </div>
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
            <div>
                Copyrights <span id="yearText"></span> <span class="txt-blue px-2">PetHund</span> All Rights Reserved.
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
    <script src="{{ asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/assets/js/theme-plugins.min.js')}}"></script>

    <script src="{{ asset('/assets/js/site-custom.js')}}"></script>

    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript">
        var tpj = jQuery;
        var revapi26;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_26_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_26_1");
            } else {
                revapi26 = tpj("#rev_slider_26_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 778,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 15,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 15,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "zeus",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 300],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "on",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
        /ready/
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7613f9150bc9d799","version":"2022.10.3","r":1,"token":"64224fc8786846928480d180dfc466bd","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from mannatstudio.com/html/pethund/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 12:40:15 GMT -->

</html>