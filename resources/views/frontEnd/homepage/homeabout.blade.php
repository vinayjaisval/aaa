@php
$language_code = @Helper::currentLanguage()->code;
$discover = App\Models\Topic::where(['webmaster_id'=> 18,'row_no'=>5,'status'=>1])->first();

$cartds = App\Models\Topic::where(['webmaster_id'=> 18,'status'=>1])->whereIn('row_no', [1,2,3,4])->get();
@endphp



<section class="features-area " style="background-image:url('front/img/bg_20.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  col-12">
                <div class="section-title default text-center">
                    <div class="section-top text-center">
                        <h1><b>{{ $discover->{"title_$language_code"} }}</b></h1>
                    </div>
                    <div class="section-bottom ">
                        <div class="text about-para">
                            <p style="color:#000;">{!! $discover->{"details_$language_code"} !!}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($cartds as $items)
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Feature -->
                <div class="single-feature">
                    <div class="icon-head"><i class="fa fa-podcast"></i></div>
                    <h4><a href="overview.html">{{ $items->{"title_$language_code"} }}</a></h4>
                    <p> {!! $items->{"details_$language_code"} !!}</p>
                    <br>
                    <div class="button">
                        <a href="overview.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Read More</a>
                    </div>
                </div>
                <!--/ End Single Feature -->
            </div>
            @endforeach
        </div>
    </div>
</section>