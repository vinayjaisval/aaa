@if(Helper::GeneralWebmasterSettings("header_menu_id") >0)
<?php
// Get list of main menu links
$MenuLinks = \App\Helpers\SiteMenu::List(Helper::GeneralWebmasterSettings("header_menu_id"));

?>
@if(count($MenuLinks)>0)

<header class="header">
    <!-- Middle Header -->
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="middle-inner">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-12">
                                <!-- Logo -->
                                <div class="logo">
                                    <!-- Image Logo -->
                                    <div class="img-logo">

                                        @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
                                        <a href="index-2.html" rel="noreferrer">
                                            <img src="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}" alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}">
                                        </a>
                                        @else
                                        <a href="index-2.html" rel="noreferrer">
                                            <img alt="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}" src="{{ URL::to('public/uploads/settings/nologo.png') }}">
                                        </a>
                                        @endif

                                    </div>
                                </div>
                                <div class="mobile-nav"></div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-12" style="float:right;">
                                <div class="menu-area" style="float:right;">
                                    <!-- Main Menu -->
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="navbar-collapse">
                                            <div class="nav-inner">
                                                <div class="menu-home-menu-container">
                                                    <!-- Naviagiton -->
                                                    <ul id="nav" class="nav main-menu menu navbar-nav">
                                                      
                                                        @foreach($MenuLinks as $MenuLink)

                                                        @if(!empty($MenuLink->sub) && count($MenuLink->sub) > 0)
                                                        {{-- Menu WITH dropdown --}}
                                                        <li class="icon-active">
                                                            <a href="{{ @$MenuLink->url ?? 'javascript:void(0)' }}" rel="noreferrer">
                                                                {{ @$MenuLink->title }}
                                                            </a>
                                                            <ul class="sub-menu">
                                                                @foreach($MenuLink->sub as $SubMenu)
                                                                <li>
                                                                    <a href="{{ @$SubMenu->url }}" target="{{ @$SubMenu->target }}" rel="noreferrer">
                                                                        {!! (@$SubMenu->icon) ? "<i class='".@$SubMenu->icon."'></i> " : "" !!}
                                                                        {{ @$SubMenu->title }}
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @else
                                                        {{-- Menu WITHOUT dropdown --}}
                                                        <li>
                                                            <a href="{{ @$MenuLink->url }}" target="{{ @$MenuLink->target }}" rel="noreferrer">
                                                                {!! (@$MenuLink->icon) ? "<i class='".@$MenuLink->icon."'></i> " : "" !!}
                                                                {{ @$MenuLink->title }}
                                                            </a>
                                                        </li>
                                                        @endif

                                                        @endforeach




                                                    </ul>
                                                    <!--/ End Naviagiton -->
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Middle Header -->
</header>

@endif
@endif