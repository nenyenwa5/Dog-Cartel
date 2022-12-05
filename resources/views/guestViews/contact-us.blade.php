@extends('layouts.guest')

@section('content')

<section class="breadcrumbs-page-wrap">
<div class="bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
<img class="ptt-png" src="assets/images/Dot-Shape.png" alt="png">
<div class="container">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
</ol>
</nav>
<h1>Contact Us</h1>
</div>
</div>
</section>


<main id="body-content">

<section class="wide-tb-100 pb-0">
<div class="container">
<section class="map-wrap">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
</section>
</div>
</section>


<section class="wide-tb-100 pb-0">
<div class="container">
<h1 class="heading-main center">
<small>Get in touch with us <i class="pethund_repeat_grid"></i></small>
<span>Make</span> Online Enquiry?
</h1>
<div class="row">
<div class="col-lg-8 col-md-12 mx-auto">
<div class="need-help">
<div id="sucessmessage"></div>
<form action="#" method="post" id="contact_form" novalidate="novalidate">
<div class="row">
<div class="col-md-6 mb-0">
<div class="mb-3">
<input type="text" name="name" id="name" class="form-control" placeholder="First Name">
</div>
</div>
<div class="col-md-6 mb-0">
<div class="mb-3">
<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
</div>
</div>
<div class="col-md-6 mb-0">
<div class="mb-3">
<input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
</div>
</div>
<div class="col-md-6 mb-0">
<div class="mb-3">
<input type="number" name="phone" id="phone" class="form-control" placeholder="Phone Number">
</div>
</div>
<div class="col-md-12 mb-0">
 <div class="mb-3">
<textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12 text-center">
<button type="submit" class="btn-theme bg-green mt-3 capusle">Submit Request</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<section class="wide-tb-100 bg-light-gray clients-rounded-wrap need-help-topspace">
<div class="container pos-rel">
<div class="contact-map-img">
<img src="assets/images/World-Map-PNG-Picture.png" alt="">
</div>
<div class="row">

<div class="col-md-4 col-sm-6">
<div class="icon-box-4 h-100">
<i data-feather="map-pin"></i>
<h3>Visit Us</h3>
<div>Morningview Lane Artland Latimer, NA 5045 / 23654</div>
</div>
</div>


<div class="col-md-4 col-sm-6">
<div class="icon-box-4 h-100">
<i data-feather="phone"></i>
<h3>Phone Us</h3>
<div>+0123 456 789 <br>+704 279 1249</div>
</div>
</div>


<div class="col-md-4 col-sm-6 mx-auto">
<div class="icon-box-4 h-100">
<i data-feather="mail"></i>
<h3>Mail Us</h3>
<div><a href="https://mannatstudio.com/cdn-cgi/l/email-protection#ee9d9b9e9e819c9aae9e8b9a869b808ac08d8183"><span class="__cf_email__" data-cfemail="e89b9d9898879a9ca8988d9c809d868cc68b8785">[email&#160;protected]</span></a></div>
<div><a href="https://mannatstudio.com/cdn-cgi/l/email-protection#3159545d417141544559445f551f525e5c"><span class="__cf_email__" data-cfemail="d4bcb1b8a494a4b1a0bca1bab0fab7bbb9">[email&#160;protected]</span></a></div>
</div>
</div>

</div>
</div>
</section>

</main>

<div class="container footer-top-callout">
<div class="row">

<div class="col-sm-12">
<div class="callout-style-side-img d-lg-flex align-items-center">
<div class="img-callout">
<img src="assets/images/callout_side_img.jpg" alt="">
</div>
<div class="text-callout">
<div class="d-md-flex align-items-center">
<div class="icon">
<i data-feather="headphones"></i>
</div>
<div class="heading">
<h3>Have Questions? Call Us <span class="txt-green">+1 (800) 123 456 789</span>
</h3>
<div>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat,
nec elementum ipsum convall.</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
@endsection