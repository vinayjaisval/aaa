<!DOCTYPE html>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">

<head>
    <!-- ======= Meta & CSS ======= -->
    @stack('before-styles')
    @include('frontEnd.layouts.head')

    @yield('headInclude')
    @stack('after-styles')
    @if(Helper::GeneralSiteSettings("css")!="")
    <style type="text/css">
        {
            ! ! Helper: :GeneralSiteSettings("css") ! !
        }
    </style>
    @endif
    {!! Helper::GeneralSiteSettings("js") !!}

</head>

<body class="dir-{{ @Helper::currentLanguage()->direction }} lang-{{ @Helper::currentLanguage()->code }} {{ (!Helper::GeneralSiteSettings("style_change") && Helper::GeneralSiteSettings("style_type"))?"dark":"" }}">

    @include('frontEnd.layouts.header')

    <!-- ======= Main contents ======= -->
    <main id="main" class="{{ (Helper::GeneralSiteSettings("style_header"))?"fixed-top-margin":"" }}">
        @yield('content')
    </main>
    <!-- ======= Footer ======= -->
    @include('frontEnd.layouts.footer')

    <!-- ======= JS Including ======= -->
    @stack('before-scripts')
    @include('frontEnd.layouts.foot')
    @yield('footInclude')
    @stack('after-scripts')
    {!! Helper::GeneralSiteSettings("body") !!}
</body>

</html>