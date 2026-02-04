@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id' =>2, 'row_no' => 5, 'status' => 1])->first();
// dd($heading);
$data = App\Models\Topic::where(['webmaster_id' =>2, 'status' => 1])->whereIn('row_no',['1','2','3','4'])->orderBy('id','DESC')->get();
@endphp



<section class="team section-bg section-space" style="background:#FFF;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><b>Our Services</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-slider">
               @foreach($data as $dataItem)
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="{{asset('public/uploads/topics/' . $dataItem->photo_file)}}" alt="{{$dataItem->{"title_$language_code"} ?? ''}}">
                    </div>
                    <div class="service-content">
                        <h4><a href="IT-System-Audit.html">{!! $dataItem->{"title_$language_code"} ?? '' !!}</a></h4>
                        <p>{!! $dataItem->{"details_$language_code"} ?? '' !!}</p>

                        <a class="btn" href="IT-System-Audit.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
             @endforeach
        </div>
    </div>
</section>