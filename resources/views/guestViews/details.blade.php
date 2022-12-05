@extends('layouts.guest')

@section('content')

<section class="breadcrumbs-page-wrap">
<div class="bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
<img class="ptt-png" src="assets/images/Dot-Shape.png" alt="png">
<div class="container">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Gallery Single</li>
</ol>
</nav>
<h1>Gallery Single</h1>
</div>
</div>
</section>


<main id="body-content">

<section class="wide-tb-100 pb-0">
<div class="container">
<div class="img-single-gallery">
<img src="assets/images/gallery/gallery_img_large.jpg" alt="">
</div>
<div class="row">
<div class="col-md-10 mx-auto">
<div class="row">
<div class="col-lg-8">
<h1 class="heading-main">
<small>About <i class="pethund_repeat_grid"></i></small>
<span>Sophie</span>
</h1>
<p>Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Mi proin sed libero enim sed faucibus turpis. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Leo urna molestie at elementum eu facilisis sed odio. Urna nec tincidunt praesent semper. Eros in cursus turpis massa tincidunt dui. Velit aliquet sagittis id consectetur purus. Elementum eu facilisis sed odio morbi quis commodo. Ullamcorper velit sed ullamcorper morbi.</p>
<p>Sit amet venenatis urna cursus eget nunc scelerisque. Suspendisse ultrices gravida dictum fusce ut placerat. At risus viverra adipiscing at in tellus integer feugiat scelerisque. Sapien faucibus et molestie ac. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus. At augue eget arcu dictum varius duis at consectetur. Urna nec tincidunt praesent semper feugiat. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Fringilla urna porttitor rhoncus dolor purus non enim praesent elementum.</p>
</div>
<div class="col-lg-4">
<div class="pet-details">
<ul class="list-unstyled mb-0">
<li>
<span>Name</span>
Sophie
</li>
<li>
<span>Gender</span>
Female
</li>
<li>
<span>Age</span>
3 Years
</li>
<li>
<span>Vaccinated</span>
Yes
</li>
</ul>
</div>
<div class="owl-carousel owl-theme" id="gallery-single">

<div class="item">
<div class="img">
<img src="assets/images/gallery/gallery_img_1.jpg" alt="">
</div>
</div>


<div class="item">
<div class="img">
<img src="assets/images/gallery/gallery_img_2.jpg" alt="">
</div>
</div>


<div class="item">
<div class="img">
<img src="assets/images/gallery/gallery_img_3.jpg" alt="">
</div>
</div>

</div>
</div>
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