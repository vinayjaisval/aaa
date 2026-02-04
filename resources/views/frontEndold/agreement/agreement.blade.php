@php
    $language_code = \Helper::currentLanguage()->code;
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 31,'status'=>1])->whereIn('row_no', [1,2,4,3])->get();
@endphp
<section>
    <div class="agreememt-title pt-5 mt-5">
        <div class="container">
            <div class="row">
                @foreach($cartds as $items)
                <div class="col-lg-3">
                    <div class="download-agreement text-center">
                        <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="VITIB agreement" width="100%" height="auto">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>





    <section>
        <div class="form-check  d-flex justify-content-center gap-2">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
         <label class="form-check-label" for="flexCheckDefault">
         J'accepte les termes et conditions.
  </label>
</div>
        <div class="vn-red" style="text-align: center;">
        <a href="assets/image/gif/Formulaire de demande d'agrément VITIB_V 6.5 (1).pdf.zip" download>Télécharger le PDF <i class="fa fa-rocket fa-lg fa-spin"></i></a> 
        </div>
</section>