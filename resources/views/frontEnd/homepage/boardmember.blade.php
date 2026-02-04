@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id' =>20, 'row_no' => 5, 'status' => 1])->first();
// dd($heading);
$data = App\Models\Topic::where(['webmaster_id' =>20, 'status' => 1])->whereIn('row_no',['1','2','3','4'])->orderBy('id','DESC')->get();
@endphp




<section class="sec sec-2 bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><b>BOARD MEMBERS</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text">
                            <p>People who are doing things the right way and their brief profiles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-10 col-12">
                <div class="owl-carousel owl-theme" id="staff">
                    @foreach($data as $dataItem)
                    <div class="item">
                        <div class="box-b staff">
                            <div class="box-img" style="margin-left:70px">
                                <img src="{{asset('public/uploads/topics/' . $dataItem->photo_file)}}">
                            </div>
                            <h3><a href="our-management.html">{!! $dataItem->{"title_$language_code"} ?? '' !!}</a></h3>
                            <p><a href="our-management.html">{!! $dataItem->{"details_$language_code"} ?? '' !!}</a></p><br>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>