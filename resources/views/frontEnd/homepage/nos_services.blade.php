@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id'=> 25,'row_no'=>1,'status'=>1])->first();
$cartds = App\Models\Topic::where(['webmaster_id'=> 25,'status'=>1])->whereIn('row_no', [2,3,4,5,6,7])->get();
@endphp




<section class="team section-bg section-space" style="background:#2e2751;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1 style="color:#FFF"><b>{{ $heading->{"title_$language_code"} ?? '' }}</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-slider" style="margin-top:-20px">
            @foreach($cartds as $items)
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px ;">
                        <h3>{{ $items->{"title_$language_code"} ?? '' }}</h3>
                        <p>{!! $items->{"details_$language_code"} ?? '' !!}</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            @endforeach

        </div>
        <div class="button mt-3 text-center">
            <a href="awards.html" class="bizwheel-btn theme-2">Know More</a>
        </div>
    </div>
</section>