@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 27,'row_no'=>1,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 27,'status'=>1])->whereIn('row_no', [2,3,4])->get();
@endphp



<section>
    <div class="elements-title-tech mt-5 pt-4" id="elements-title-tech">
        <div class="container">
            <div class="elements-heads text-center py-2">
                <h2 class="font-weight-bold  text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
                <p>{!! $heading->{"details_$language_code"} ?? '' !!}</p>
            </div>
        </div>
    </div>
</section>