
<?php
$SliderBanners = Helper::BannersList(Helper::GeneralWebmasterSettings("home_banners_section_id"));

?>
@if(count($SliderBanners)>0)

@foreach($SliderBanners->slice(0,1) as $SliderBanner)
        <?php
                try {
                    $SliderBanner_type = $SliderBanner->webmasterBanner->type;
                } catch (Exception $e) {
                    $SliderBanner_type = 0;
                }
                ?>
            @endforeach
            <?php
            $title_var = "title_" . @Helper::currentLanguage()->code;
            $title_var2 = "title_" . config('smartend.default_language');
            $details_var = "details_" . @Helper::currentLanguage()->code;
            $details_var2 = "details_" . config('smartend.default_language');
            $file_var = "file_" . @Helper::currentLanguage()->code;
            $file_var2 = "file_" . config('smartend.default_language');
            $link_var = "link_" . @Helper::currentLanguage()->code;
        ?>

@if($SliderBanner_type==1)

@php($i=0)
@foreach($SliderBanners as $SliderBanner)
    <?php
    if ($SliderBanner->$title_var != "") {
        $BTitle = $SliderBanner->$title_var;
    } else {
        $BTitle = $SliderBanner->$title_var2;
    }
    $BDetails = $SliderBanner->$details_var;
    if ($SliderBanner->$file_var != "") {
        $BFile = $SliderBanner->$file_var;
    } else {
        $BFile = $SliderBanner->$file_var2;
    }
?>
<section>
    <div class="skylabs-title" style="display: inline-block;">
        <img src="{{ URL::to('public/uploads/banners/'.$BFile) }}" alt="{{ URL::to('public/uploads/banners/'.$BFile) }}" width="100%" height="auto">
        <div class="absolute-define"></div>
        <div class="communicatioin-title">
            @if($BDetails != "" || $SliderBanner->$link_var != "")
                @if($BTitle != "")
                    <h2 class="text-uppercase"><em>{{ $BTitle }}</em></h2>
                @endif

                @if($BDetails != "")
               <?= $BDetails ?>
                @endif
            @endif

        </div>
    </div>
</section>
@php($i++)
@endforeach
@endif
@endif
