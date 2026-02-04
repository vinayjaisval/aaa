<!-- Footer -->
<footer class="footer" style="background-image:url('front/img/map.png')">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Footer About -->
                    <div class="single-widget footer-about widget">
                        <div class="logo">
                            <div class="img-logo">
                                <a class="logo" href="index-2.html" rel="noreferrer">
                                    <img class="img-responsive" src="{{asset('public/front')}}/img/AAA-Logo1.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="footer-widget-about-description">

                            <ul class="address-widget-list" style="margin-left:-10px">
                                @if(Helper::GeneralSiteSettings('contact_t1_' . Helper::currentLanguage()->code))
                                <li><i class="fas fa-map-marker-alt"></i>
                                    {{ Helper::GeneralSiteSettings('contact_t1_' . Helper::currentLanguage()->code) }}
                                </li>
                                @endif

                                @if(Helper::GeneralSiteSettings('contact_t3'))
                                <li><i class="fas fa-phone"></i> Tel:
                                    <a href="tel:{{ Helper::GeneralSiteSettings('contact_t3') }}">{{ Helper::GeneralSiteSettings('contact_t3') }}</a>
                                </li>
                                @endif

                                @if(Helper::GeneralSiteSettings('contact_t6'))
                                <li><i class="fas fa-envelope"></i>
                                    Email: <a href="mailto:{{ Helper::GeneralSiteSettings('contact_t6') }}">{{ Helper::GeneralSiteSettings('contact_t6') }}</a>
                                </li>
                                @endif

                                <li><button type="button" class="newsletter-btn">Rejoignez-nous</button></li>
                            </ul>


                        </div>
                        <div class="social">
                            <!-- Social Icons -->
                            <!-- <ul class="social-icons">
								<li ><a class="linkedin" href="https://in.linkedin.com/company/aaa-technologies-pvt-ltd-" target="_blank"><img style="height:30px" src="./img/Li11-removebg-preview.png" alt=""></a></li>
							</ul> -->
                        </div>

                    </div>
                    <!--/ End Footer About -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Footer Links -->
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">Company</h3>
                        <ul>
                            @if(Helper::GeneralWebmasterSettings("footer_menu_id") > 0)
                            @php
                            $MenuLinks = \App\Helpers\SiteMenu::List(Helper::GeneralWebmasterSettings("footer_menu_id"));
                            @endphp
                            @foreach($MenuLinks as $MenuLink)
                            <li>
                                <a href="{{ $MenuLink->url }}" target="{{ $MenuLink->target }}">
                                    {!! $MenuLink->icon ? "<i class='$MenuLink->icon'></i>" : '' !!}
                                    {{ $MenuLink->title }}
                                </a>
                            </li>
                            @if($MenuLink->sub)
                            @foreach($MenuLink->sub as $SubLink)
                            <li>
                                <a href="{{ $SubLink->url }}" target="{{ $SubLink->target }}">
                                    &nbsp;&nbsp;{!! Helper::currentLanguage()->direction == "rtl" ? "&#8617;" : "&#8618;" !!}
                                    {!! $SubLink->icon ? "<i class='$SubLink->icon'></i>" : '' !!}
                                    {{ $SubLink->title }}
                                </a>
                            </li>
                            @endforeach
                            @endif
                            @endforeach
                            @endif

                        </ul>

                    </div>
                    <!--/ End Footer Links -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Footer Links -->
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">Our Services</h3>
                        <ul>
                            <li><a rel="noreferrer" href="IT-System-Audit.html">IT Systems Audit</a></li>
                            <li><a rel="noreferrer" href="cyber-security-audit.html">Cyber Security Audit</a></li>
                            <li><a rel="noreferrer" href="IT-Security-Audit.html">IT Security Audit</a></li>
                            <li><a rel="noreferrer" href="IT-Assurance-compliance.html">IT Assurance & Compliance</a></li>
                            <li><a rel="noreferrer" href="IT-Governance.html">IT Governance</a></li>

                        </ul>
                    </div>
                    <!--/ End Footer Links -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Footer Contact -->
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">Ouick Links</h3>
                        <ul>
                            <li><a rel="noreferrer" href="overview.html">Overview</a></li>
                            <li><a rel="noreferrer" href="vision%26mission.html">Vision & Mission</a></li>
                            <li><a rel="noreferrer" href="milestone.html">Milestone</a></li>
                            <li><a rel="noreferrer" href="awards.html">Awards & Achievement</a></li>
                            <li><a rel="noreferrer" href="our-management.html">Our Management</a></li>
                            <li><a rel="noreferrer" href="gallery%26events.html">Gallery & Events</a></li>
                        </ul>
                    </div>
                    <!--/ End Footer Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-content">
                        <!-- Copyright Text -->
                        <p>© Copyright <a rel="noreferrer" href="index-2.html"><b>AAA Technologies Limited.</b></a> Design &amp; Developed By <a href="https://www.cokaco.com/Default.aspx" target="_blank" rel="noopener noreferrer"><b>CokaCo</b></a> | All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>