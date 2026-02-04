@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 30,'status'=>1,'row_no'=>1])->get();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 30,'status'=>1])->whereIn('row_no', [1])->get();
@endphp
<section>
        <div class="about-title" id="about-exit">
        @foreach($cartds as $items)
            <div class="about-body">
                <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="21">
                <div class="about-text fw-bold">  
                    <h4 class="fw-bold">{{ $items->{"title_$language_code"} ?? '' }} </h4>
                </div>
                @endforeach
            </div>
        </div>
          </section>
          


          <div class="services-title mt-5">
            <div class="container">
                <div class="serivce-head-title"> 
                  <h1 class="text-invest text-center text-uppercase fw-bold"> services </h1>
                  <!--<p class="text-center">Les entreprises installées en zone franche exercent des activités dans les domaines de-->
                  <!--la Biotechnologie ou des TIC. Il s’agit d'activités destinées à concevoir, à utiliser, à produire, -->
                  <!--à vendre ou à promouvoir des produits informatiques, télécoms, biotechnologiques et du service à forte valeur ajoutée </p>-->
                </div>
            </div>
        </div>