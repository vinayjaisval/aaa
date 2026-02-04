@php
    $language_code = \Helper::currentLanguage()->code;
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 29,'status'=>1])->whereIn('row_no', [3])->first();
  
@endphp
<section>
        <div class="about-us-second mt-4" id="about-us-second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-second-head">
                            <img src="{{asset('public/assets/assets')}}/image/img16.png" alt="img16">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-second">
                            <h1 class="heading-text fw-bold text-uppercase">
                            {{ $cartds->{"title_$language_code"} ?? '' }}
                            </h1>
                            <p class="font-weight-normal">{!! $cartds->{"details_$language_code"} ?? '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>