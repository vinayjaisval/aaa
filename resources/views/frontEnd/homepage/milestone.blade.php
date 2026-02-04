@php
    $language_code = \Helper::currentLanguage()->code;
    $heading1  = App\Models\Topic::where(['webmaster_id'=> 19,'row_no'=>1,'status'=>1])->first();
    $heading2  = App\Models\Topic::where(['webmaster_id'=> 19,'row_no'=>2,'status'=>1])->first();
    $heading3  = App\Models\Topic::where(['webmaster_id'=> 19,'row_no'=>3,'status'=>1])->first();
    
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 19,'status'=>1])->whereIn('row_no', [1,2,3])->get();
@endphp




 <section class="features-area" style="background-image:url('front/img/bg21.jpg')">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center">
                        <div class="section-top">
                            <h1><b>Our Milestone</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <h2 class="pb-5 pt-5 text-center mb-5 display-5">Our Milestone</h2> -->
            <!-- First Content Section-->
            <div class="row align-items-center connecting-lines d-flex">
                <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                    <div class="circle font-weight-bold"><i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="col-6">
                    <h4>2020</h4>
                    <p>{{ $heading1->{"title_$language_code"} ?? '' }}</p>
                </div>
            </div>
            <!-- Path Line -->
            <div class="row home_timeline">
                <div class="col-2">
                    <div class="corner top-right"></div>
                </div>
                <div class="col-8">
                    <hr />
                </div>
                <div class="col-2">
                    <div class="corner left-bottom"></div>
                </div>
            </div>
            <!-- Second Content Section-->
            <div class="row align-items-center justify-content-end connecting-lines d-flex">
                <div class="col-6 text-right">
                    <h4>2021</h4>
                    <p>{{ $heading2->{"title_$language_code"} ?? '' }}</p>
                </div>
                <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                    <div class="circle font-weight-bold"><i class="fa fa-check"></i></div>
                </div>
            </div>
            <!-- Path Line -->
            <div class="row home_timeline">
                <div class="col-2">
                    <div class="corner right-bottom"></div>
                </div>
                <div class="col-8">
                    <hr />
                </div>
                <div class="col-2">
                    <div class="corner top-left"></div>
                </div>
            </div>
            <!-- Third Content Section -->
            <div class="row align-items-center connecting-lines d-flex">
                <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                    <div class="circle font-weight-bold"><i class="fa fa-check"></i></div>
                </div>
                <div class="col-6">
                    <h4>2022</h4>
                    <p>{{ $heading3->{"title_$language_code"} ?? '' }}</p>
                    
                </div>
            </div>
        </div>
        <div class="button mt-5 text-center">
            <a href="milestone.html" class="bizwheel-btn theme-2">Know More</a>
        </div>
    </section>
