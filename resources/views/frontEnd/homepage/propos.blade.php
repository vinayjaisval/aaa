@php
    $language_code = \Helper::currentLanguage()->code;
    $data = App\Models\Topic::where(['webmaster_id' => 23, 'row_no' => 1, 'status' => 1])->first();
@endphp

<section>
    <div class="proposal-title" id="proposal-title">
        <div class="container">
            <div class="main-proposal">
                <div class="row organization-info">
                    <div class="col-lg-5 px-md-0">
                        <img src="{{ asset('public/uploads/topics/' . $data->photo_file) }}" alt="{{ $data->{"title_$language_code"} }}" class="img-fluid" height="100%" width="100%">
                    </div>
                    <div class="col-lg-7 px-md-0">
                        <div class="organization-content mx-md-0">
                            <h2 class="organization-title-main text-white fw-bold p-2 px-2">{{ $data->{"title_$language_code"} }}</h2>
                            <p class="px-3">{!! $data->{"details_$language_code"} !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
