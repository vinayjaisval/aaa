@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1,'row_no'=>2])->get();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1])->whereIn('row_no', [2,3,4,5,6,7,8,9,10])->get();
@endphp
<section>
    <div class="blog-title">
        <div class="container">
            <div class="row">
                @foreach($cartds as $items)
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="blog-head-title">
                            <div class="first-blog">
                                <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" class="img-fluid">
                            </div>
                            <div class="comited-import-title px-2 py-2">
                                <h2 class="h6 fw-bold">{{ $items->{"title_$language_code"} ?? '' }}</h2>
                                <p>{!! $items->{"details_$language_code"} ?? '' !!}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>05 March 2025</span>
                                    <a href="blog_detail.html">
                                        <button>Voir Plus</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
