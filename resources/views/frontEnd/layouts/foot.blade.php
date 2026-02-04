



		
<!-- Jquery JS -->
<script src="{{asset('public/front')}}/js/jquery.min.js"></script>
<!--<script src="js/jquery-migrate-3.0.0.js"></script>-->
<script src="{{asset('public/front')}}/js/jquery-migrate-3.4.0.js"></script>
<!-- Popper JS -->
<script src="{{asset('public/front')}}/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('public/front')}}/js/bootstrap.min.js"></script>
<!-- Modernizr JS -->
<script src="{{asset('public/front')}}/js/modernizr.min.js"></script>
<!-- ScrollUp JS -->
<script src="{{asset('public/front')}}/js/scrollup.js"></script>
<!-- FacnyBox JS -->
<script src="{{asset('public/front')}}/js/jquery-fancybox.min.js"></script>
<!-- Cube Portfolio JS -->
<script src="{{asset('public/front')}}/js/cubeportfolio.min.js"></script>
<!-- Slick Nav JS -->
<script src="{{asset('public/front')}}/js/slicknav.min.js"></script>
<!-- Slick Nav JS -->
<script src="{{asset('public/front')}}/js/slicknav.min.js"></script>
<!-- Slick Slider JS -->
<script src="{{asset('public/front')}}/js/owl-carousel.min.js"></script>
<!-- Easing JS -->
<script src="{{asset('public/front')}}/js/easing.js"></script>
<!-- Magnipic Popup JS -->
<script src="{{asset('public/front')}}/js/magnific-popup.min.js"></script>
<!-- Active JS -->
<script src="{{asset('public/front')}}/js/active.js"></script>
<!-- <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script> -->
<!-- <script src='https://threejs.org/examples/js/libs/stats.min.js'></script> -->
<script  src="{{asset('public/front')}}/js/script.js"></script>


<!-- js add by rohit  -->
<script src="../use.fontawesome.com/1744f3f671.js" integrity="sha384-1tNnl00ClS7hiiB925at1fTxVT4pOTslCeQLsbztIpUAMf8iE55FqgT/HyQ7qJ2I" crossorigin="anonymous"></script>


<script src="../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js" integrity="sha384-BP0iZA3MHnezhqarl/DGMJGkwDr9H5JBGCMpRjhB7TxedIX+f2bLrU61p4KW7gjU" crossorigin="anonymous"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js" integrity="sha384-YeUZ6bm5HaV9hAVzDbZNHOf/1Dez0BMOoh2YzcFprAJAw6UEXThti5aeLOBJ922Z" crossorigin="anonymous"></script>


<?php
if (@$PageTitle == "") {
    $PageTitle = Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code);
}
?>
@include("frontEnd.layouts.cookie")
{!! Helper::SaveVisitorInfo($PageTitle) !!}

