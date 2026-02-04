@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id' =>11, 'row_no' => 5, 'status' => 1])->first();
// dd($heading);
$data = App\Models\Topic::where(['webmaster_id' =>11, 'status' => 1])->whereIn('row_no',['1','2','3','4'])->orderBy('id','DESC')->get();
@endphp






<section class="features-area latest_news section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title default text-center">
                    <div class="section-top text-center">
                        <h1><b style="color:#fff;">Latest News </b></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="img-feature ">
                    <img src="{{asset('public/front/img/Latest_AAA/4.png')}}" alt="Video Thumbnail">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12" style="margin-top: 20px;">
                <div class="news_content owl-carousel">

                    @foreach($data as $dataItem)
                    <div class="single_news">
                        <div class="latest_news">
                            <p>{!! $dataItem->{"details_$language_code"} ?? '' !!}</p>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>
</section>