@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id'=> 28, 'row_no' => 1, 'status' => 1])->first();
$cartds = App\Models\Topic::where(['webmaster_id' => 28, 'status' => 1])
->whereIn('row_no', range(1, 30))
->get();
@endphp



<div class="clients section-bg" style="background-image:url('img/bg21.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><b>Current empanelment</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text">
                            <p>As a testimonial to our expertise, following regulatory bodies and prominent organizations have chosen to confer unto us empanelment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12">

                <div class="partner-slider">
                    @foreach($cartds as $items)
                    <!-- Single client -->
                    <div class="single-slider">
                        <div class="single-client">
                            <img src="{{ asset('public/uploads/topics/' . $items->photo_file) }}" alt="Partner {{ $items->row_no }}">


                        </div>
                    </div>
                    <!--/ End Single client -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>