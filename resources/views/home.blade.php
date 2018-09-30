@extends('layouts.app')

@section('content')
<style>
.stats_section {
    background: url(../imgs/312.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
</style>
<section class="page_content_main_slider" id="home">

    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mew_variety_1" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.5 fullscreen mode -->
        <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.5">
            <ul>

                <!-- SLIDE  -->
                {{-- <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_6072e-slider_slide_3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="http://www.themesindustry.com/html/arone/images/slider_slide_5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption tp-resizeme blue_color text-center" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['227','227','150','150']" data-voffset="['0','0','0','0']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <h1 class="text-captilize text-center raleway navy_blue swiper-slider-heading" style="text-align: center;">
                            Stick <strong style="font-weight: 400;">Drive</strong> Eran
                            <br>
                            <span class="making_slide_center_text text-center swiper-slider-small-heading" style="transition: none;text-align: center !important;line-height: 52px;border-width: 0px;margin: 0px;padding: 0px;letter-spacing: 0px;font-weight: 100;display: block !important;margin-top: 15px;"> Perfect for Startups </span>
                        </h1>
                    </div>
                    <div class="tp-caption tp-resizeme text-center button_div" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['400','390','300','300']" data-voffset="['0','0','0','0']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="#work" class="button light button_default_style bg_pink bg_before_navy scroll">Getting Started</a>
                        <a href="#skill_section" class="button navy_blue_important bg_before_navy_white button_default_style  bg_white btn2 bg_before_navy scroll">Learn more</a>
                    </div>
                </li> --}}

                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_6072e-slider_slide_3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="imgs/slider1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption tp-resizeme navy_blue text-center" data-x="['left','left','left','left']" data-hoffset="['0','0','0','15']" data-y="['227','227','150','150']" data-voffset="['0','0','0','0']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <h1 class="text-captilize text-center raleway navy_blue swiper-slider-heading" style="text-align: center;">
                            What <strong style="font-weight: 400;">Astick</strong> does?
                              
                            <br>
                            <span class=" text-center swiper-slider-small-heading ffont" style="transition: none;text-align: center !important;line-height: 52px;border-width: 0px;margin: 0px;padding: 0px;letter-spacing: 0px;font-weight: 100;display: block !important;margin-top: 15px;line-height: 25px;"> Astick pays you for driving your car  with our advertiser's <br> branding message. <br>
                                Stick . Drive . Earn </span>
                        </h1>
                    </div>
                    <div class="tp-caption tp-resizeme  button_div" data-x="['left','left','left','left']" data-hoffset="['0','0','0','15']" data-y="['400','390','300','300']" data-voffset="['0','0','0','0']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="#work" class="button light button_default_style bg_pink bg_before_navy scroll">Getting Started</a>
                        <a href="#skill_section" class="button navy_blue_important bg_before_navy_white button_default_style  bg_white btn2 bg_before_navy scroll">Learn more</a>
                    </div>
                </li>

                <!-- SLIDE  -->
                {{-- <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_6072e-slider_slide_3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="http://www.themesindustry.com/html/arone/images/slider_slide_7.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption tp-resizeme navy_blue" data-x="['right','right','right','right']" data-hoffset="['0','0','0','15']" data-y="['227','227','150','150']" data-voffset="['0','0','0','0']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <h1 class="text-captilize text-center raleway navy_blue swiper-slider-heading">
                            Creative <strong style="font-weight: 400;">One Page</strong> Template
                            <span class="making_slide_right_text text-center swiper-slider-small-heading" style="transition: none;text-align: center !important;line-height: 52px;border-width: 0px;margin: 0px;padding: 0px;letter-spacing: 0px;font-weight: 100;display: block !important;margin-top: 15px;"> Perfect for Startups </span>
                        </h1>
                    </div>
                    <div class="tp-caption tp-resizeme button_div text-right" data-x="['right','right','right','right']" data-hoffset="['0','0','0','15']" data-y="['400','390','300','300']" data-voffset="['0','0','0','0']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="#work" class="button light button_default_style bg_pink bg_before_navy scroll">Getting Started</a>
                        <a href="#skill_section" class="button navy_blue_important bg_before_navy_white button_default_style  bg_white btn2 bg_before_navy scroll">Learn more</a>
                    </div>
                </li> --}}

            </ul>
            <div class="tp-bannertimer" style="height: 5px; background: rgba(0,0,0,0.15);"></div>	</div>
    </div><!-- END REVOLUTION SLIDER -->

</section>

    <!-- /Header Section -->

    <!-- Half Section -->

    <section class="half_section_main bg_grey"  id="Advertisers">

        <div class="half_section_picture hidden-sm hidden-xs"></div>

        <div class="container container_big">

            <div class="row">

                <div class="col-md-6 col-md-offset-6">

                    <div class="side_section_text big_padding">

                        <p class="default_small_heading raleway blue_color font_200"></p>

                        <h3 class="default_section_heading raleway navy_blue">How <span class="font_200"> Astick </span> Works?</h3>

                        <hr class="default_divider default_divider_blue " style="margin-left: 0;">

                        <p class="default_text_light default_text open_sans">

                                Advertise on privately owned cars to get your message seen.
                                Spread your advertising / branding message all over Singapore by placing ads on our registered fleet of privately owned cars.
                        </p>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="icons_div_small">

                                    <p class="small_heading_navy raleway font_400"> <i class="fa fa-car pink_color" aria-hidden="true"></i></p>

                                    <p class="default_text default_text_light open_sans">

                                            Astick pays drivers to spread your advertising/branding message while they drive around Sudan.

                                    </p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="icons_div_small">

                                    <p class="small_heading_navy raleway font_400"> <i class="fa fa-taxi pink_color" aria-hidden="true"></i></p>

                                    <p class="default_text default_text_light open_sans">

                                            Outdoor / Out-of-home (OOH) advertising is the most cost effective way to reach the masses with your advertising message.
                                    </p>

                                </div>

                            </div>

                        </div>
                        <div class="row">
                                <a href="#" data-toggle="modal" data-target="#quotes" class="button light button_default_style bg_pink bg_before_navy scroll" style="    transition: none 0s ease 0s;
                                text-align: inherit;
                                line-height: 12px;
                                border-width: 0px;
                                margin: 0px;
                                padding: 14px 30px;
                                letter-spacing: 0px;
                                font-weight: 400;
                                font-size: 16px;">Request Quote</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- half Section Ended -->

    <!-- Circle Js Skill Section -->

    <!-- Skill Heading Section -->

   
    <!-- /Circel Js Skill Section -->

    <!-- Stats Section -->

    
    <!-- /Stats Section -->

    <!-- Portfolio Section -->

    {{-- <section class="portfolio_section big_padding" style="padding-bottom: 0;" id="work">

        <div class="container">

            <p class="default_small_heading raleway text-center blue_color font_200">Creative Portfolio</p>

            <h2 class="default_section_heading text-center">

                <span class="font_200"> Our </span>

                Awesome

                <span class="font_200">Work</span>

            </h2>

            <hr class="default_divider default_divider_blue default_divider_big">

        </div>

        <div  class="cube_fullwidth_style_portfolio">

            <div id="js-filters-mosaic-flat" class="cbp-l-filters-buttonCenter open_sans">

                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item open_sans button bg_before_pink">

                    All

                    <div class="cbp-filter-counter"></div>

                </div>

                <div data-filter=".branding" class="cbp-filter-item open_sans button bg_before_pink">

                    Branding

                    <div class="cbp-filter-counter"></div>

                </div>

                <div data-filter=".web-design" class="cbp-filter-item open_sans button bg_before_pink">

                    Web Design

                    <div class="cbp-filter-counter"></div>

                </div>

                <div data-filter=".photography" class="cbp-filter-item open_sans button bg_before_pink">

                    Photography

                    <div class="cbp-filter-counter"></div>

                </div>

            </div>

            <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">

                <div class="cbp-item web-design photography">

                    <a href="http://www.themesindustry.com/html/arone/images/projects-1.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                            <img src="http://www.themesindustry.com/html/arone/images/projects-1.jpg" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap">

                            <div class="cbp-l-caption-alignCenter">

                                <div class="cbp-l-caption-body">

                                    <div class="cbp-l-caption-title">Bolt UI</div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="cbp-item branding photography">

                    <a href="http://www.themesindustry.com/html/arone/images/projects-2.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock<br>by Paul Flavius Nechita">

                        <div class="cbp-caption-defaultWrap">

                            <img src="http://www.themesindustry.com/html/arone/images/projects-2.jpg" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap">

                            <div class="cbp-l-caption-alignCenter">

                                <div class="cbp-l-caption-body">

                                    <div class="cbp-l-caption-title">World Clock</div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="cbp-item branding photography">

                    <a href="http://www.themesindustry.com/html/arone/images/projects-3.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                            <img src="http://www.themesindustry.com/html/arone/images/projects-3.jpg" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap">

                            <div class="cbp-l-caption-alignCenter">

                                <div class="cbp-l-caption-body">

                                    <div class="cbp-l-caption-title">WhereTO App</div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="cbp-item branding graphic">

                    <a href="http://www.themesindustry.com/html/arone/images/projects-4.jpg" class="cbp-caption cbp-lightbox" data-title="Digital Menu<br>by Cosmin Capitanu">

                        <div class="cbp-caption-defaultWrap">

                            <img src="http://www.themesindustry.com/html/arone/images/projects-4.jpg" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap">

                            <div class="cbp-l-caption-alignCenter">

                                <div class="cbp-l-caption-body">

                                    <div class="cbp-l-caption-title">Digital Menu</div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

                <div class="cbp-item web-design branding">

                    <a href="http://www.themesindustry.com/html/arone/images/projects-6.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                            <img src="http://www.themesindustry.com/html/arone/images/projects-6.jpg" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap">

                            <div class="cbp-l-caption-alignCenter">

                                <div class="cbp-l-caption-body">

                                    <div class="cbp-l-caption-title">iDevices</div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>


                <div class="cbp-item photography">

                    <a href="http://www.themesindustry.com/html/arone/images/projects-5.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                            <img src="http://www.themesindustry.com/html/arone/images/projects-5.jpg" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap">

                            <div class="cbp-l-caption-alignCenter">

                                <div class="cbp-l-caption-body">

                                    <div class="cbp-l-caption-title">Seemple* Music</div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- /Portfolio Section -->

    {{-- <section class="team_section big_padding text-center " id="team">

        <div class="container">

            <p class="raleway default_small_heading blue_color font_200">Let's Meet</p>

            <div class="col-xs-12">

                <h2 class="default_section_heading text-center">

                            <span class="font_200">

                                Our

                            </span>

                    Creative

                    <span class="font_200">

                                Team

                            </span>

                </h2>

                <hr class="default_divider default_divider_blue default_divider_big">

                <div class="swiper-container team_slider">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="team_detail wow slideInLeft">

                                <div class="team_detail_inner">

                                    <img src="http://www.themesindustry.com/html/arone/images/team-1.jpg" alt="team_img">

                                </div>

                                <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Chris Martin</h3>

                                <p class="default_text text-center open_sans">CEO - Company</p>

                                <ul class="team_members_list">

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style google_team">

                                            <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                            <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                            <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="team_detail wow fadeInUpBig">

                                <div class="team_detail_inner">

                                    <img src="http://www.themesindustry.com/html/arone/images/team-2.jpg" alt="team_img">

                                </div>

                                <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Ellyse Perry</h3>

                                <p class="default_text text-center open_sans">Java Developer</p>

                                <ul class="team_members_list">

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style google_team">

                                            <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                            <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                            <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="team_detail wow fadeInDownBig">

                                <div class="team_detail_inner">

                                    <img src="http://www.themesindustry.com/html/arone/images/team-3.jpg" alt="team_img">

                                </div>

                                <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Danny M</h3>

                                <p class="default_text text-center open_sans">Web Designer</p>

                                <ul class="team_members_list">

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style google_team">

                                            <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                            <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                            <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="team_detail wow slideInRight">

                                <div class="team_detail_inner">

                                    <img src="http://www.themesindustry.com/html/arone/images/team-4.jpg" alt="team_img">

                                </div>

                                <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">Sarah Taylor</h3>

                                <p class="default_text text-center open_sans">Graphic Designer</p>

                                <ul class="team_members_list">

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style google_team">

                                            <i class="fa fa-linkedin team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style facebook_team">

                                            <i class="fa fa-facebook team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="#." class="team_members_icons anchor_none_style twiiter_team">

                                            <i class="fa fa-twitter team_members_icon_inner" aria-hidden="true"></i>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section> --}}
    <section class="combined_skills_section big_padding" id="About" >


            <section class="skill_section" >
    
                <div class="container">
    
                    <div class="skill_section_inner">
    
                        <p class="default_text raleway text-center default_small_heading blue_color font_200">About</p>
    
                        <h2 class="default_section_heading text-center">
    
                                <span class="font_200">
    
                                    Our
    
                                </span>
    
                            Awesome
    
                            <span class="font_200">
    
                                    Services
    
                                </span>
    
                        </h2>
    
                        <hr class="default_divider default_divider_blue default_divider_big">
    
                    </div>
    
                </div>
    
            </section>
    
            <!-- /Skill Section -->
    
            <section class="circle_pie_section">
    
                <div class="container">
    
                    <div class="row">
    
                        <div class="col-xs-12">
    
                            <div class="expertise_section_inner">
    
                                <div class="row">
    
                                    <div class="col-md-4">
    
                                        <div class="expertise_block text-center margin_after_tab wow slideInLeft">
    
                                            <h3 class="small_heading_navy text-center raleway h3_pink font_400"><span class="font_600 pink_color">01.</span> Get paid to drive
                                            </h3>
    
                                            <p class="default_text text-center open_sans default_text_light">
    
                                                    Get paid up to $500 a month for something you already do everyday! That is as good as “free” petrol every month when you join Astick. Joining Astick is absolutely free! No registration or subscription fee. At Astick, you do not pay us. We pay you
                                            </p>
    
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-4">
    
                                        <div class="expertise_block text-center margin_after_tab wow fadeInUp">
    
                                            <h3 class="small_heading_navy text-center raleway h3_pink font_400"><span class="font_600 pink_color">02.</span> Choose your favourite brand</h3>
    
                                            <p class="default_text text-center open_sans default_text_light">
    
                                                    Instead of dictating the advertisers for you, Astick empowers you to choose your own brand and advertisers based on your own brand / product preferences. Choose your own favourite brand or products of interest to advertise on your cars as you become ambassadors of these brand association and product affiliation.
                                            </p>
    
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-4">
    
                                        <div class="expertise_block text-center wow slideInRight">
    
                                            <h3 class="small_heading_navy text-center raleway h3_pink font_400"><span class="font_600 pink_color">03.</span> Empowerment/Outsourcing</h3>
    
                                            <p class="default_text text-center open_sans default_text_light">
    
                                                    we here at Carblicity, believe that mobile advertising can benefit everyone and should be made available to everyone.
                                                    By crowd-sourcing drivers of privately-owned vehicles, we are able to grow our very own fleet so that you are able to enjoy these benefits that previously only public transport vehicles could enjoy. 
                                            </p>
    
                                        </div>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
            </section>
    
        </section>
    
    <!-- Half Section -->

    <section class="half_section_main half_section_right bg_grey" id="Drivers">

        <div class="half_section_picture hidden-sm hidden-xs"></div>

        <div class="container container_big">

            <div class="row">

                <div class="col-md-6">

                    <div class="side_section_text big_padding">

                        <p class="default_small_heading raleway blue_color font_200">Drivers</p>

                        <h3 class="default_section_heading raleway navy_blue"><span class="font_200">5  </span> simple  <span class="font_200">  steps </span></h3>

                        <hr class="default_divider default_divider_blue " style="margin-left: 0;">

                        <p class="default_text_light default_text open_sans">

                              <b> 1. Register</b> your car in our fleet and gain access to all our advertisers. <br><br>
                               <b> 2.</b>You <b> choose </b>which advertiser you want to advertise for.<br><br>
                               <b> 3.</b>Make an appointment for the installation of the sticker ads at our workshop and we will install the sticker ads on your car.<br><br>
                               <b> 4.</b>Now all you need to do is <b> drive, drive, drive</b>.<br><br>
                               <b> 5.</b>Payouts vary according to each campaign's duration and number of sticker placement.<br>
                            </p>

                        <div class="progress_bar_outer_div">

                                <a href="#" data-toggle="modal" data-target="#regist" class="button light button_default_style bg_pink bg_before_navy scroll" style="    transition: none 0s ease 0s;
                                text-align: inherit;
                                line-height: 12px;
                                border-width: 0px;
                                margin: 0px;
                                padding: 14px 30px;
                                letter-spacing: 0px;
                                font-weight: 400;
                                font-size: 16px;">Register </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- half Section Ended -->

    <!-- Pricing Table -->

    {{-- <section class="pricing_section big_padding bg_grey" id="pricing_table">

        <div class="container">

            <div class="pricing_table_section">

                <p class="default_text raleway text-center default_small_heading blue_color font_200">New Plans</p>

                <h2 class="default_section_heading text-center">

                            <span class="font_200">

                                Our

                            </span>

                    Pricing

                    <span class="font_200">

                                Table

                            </span>

                </h2>

                <hr class="default_divider default_divider_blue default_divider_big">

                <div class="row">

                    <div class="col-sm-4">

                        <div class="pricing_table_column wow slideInLeft">

                            <h3 class="small_heading_navy raleway">Basic</h3>

                            <div class="price">

                                <div class="row">

                                    <div class="col-xs-4">

                                        <h2 class="open_sans font_400 pink_color"><span class="dollar raleway">$</span>19<br><span class="month raleway">Month</span></h2>

                                    </div>

                                    <div class="col-xs-8">

                                        <p>It has survived not only five centuries, but also the leap into electronic.</p>

                                    </div>

                                </div>

                            </div>

                            <ul class="packages">

                                <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Bandwidth</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Admin Panel</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Email Accounts</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>8 Free Forks Every Months</li>

                            </ul>

                            <div class="pricing_button">

                                <a href="#." class="bg_pink button button_default_style open_sans bg_before_navy">Buy Now</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="pricing_table_column blue_price wow fadeInUpBig">

                            <h3 class="small_heading_navy raleway white_color">Advance</h3>

                            <div class="price">

                                <div class="row">

                                    <div class="col-xs-4">

                                        <h2 class="open_sans font_400 white_color"><span class="dollar raleway">$</span>49<br><span class="month raleway">Month</span></h2>

                                    </div>

                                    <div class="col-xs-8">

                                        <p>It has survived not only five centuries, but also the leap into electronic.</p>

                                    </div>

                                </div>

                            </div>

                            <ul class="packages">

                                <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Bandwidth</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Admin Panel</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Email Accounts</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>8 Free Forks Every Months</li>

                            </ul>

                            <div class="pricing_button">

                                <a href="#." class="bg_white button button_default_style open_sans bg_before_pink navy_blue">Buy Now</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="pricing_table_column wow slideInRight">

                            <h3 class="small_heading_navy raleway">Premium</h3>

                            <div class="price">

                                <div class="row">

                                    <div class="col-xs-4">

                                        <h2 class="open_sans font_400 pink_color"><span class="dollar raleway">$</span>99<br><span class="month raleway">Month</span></h2>

                                    </div>

                                    <div class="col-xs-8">

                                        <p>It has survived not only five centuries, but also the leap into electronic.</p>

                                    </div>

                                </div>

                            </div>

                            <ul class="packages">

                                <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Bandwidth</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Powerful Admin Panel</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>Email Accounts</li>

                                <li><i class="fa fa-check" aria-hidden="true"></i>8 Free Forks Every Months</li>

                            </ul>

                            <div class="pricing_button">

                                <a href="#." class="bg_pink button button_default_style open_sans bg_before_navy">Buy Now</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- /Pricing Table -->

    <!-- Customer Review Slider -->

    {{-- <section class="customer_feedback_section big_padding text-center">

        <div class="container">

            <div class="feedaback_inner">

                

                <h2 class="default_section_heading text-center white_color">

                            <span class="font_200">

                                Client

                            </span>

                    Testimonials

                    

                </h2>

                <hr class="default_divider default_divider_white default_divider_big">

                <div class="swiper-container customer_feedback_slider white_pagination">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <p class="customer_feedback_text white_color open_sans default_text font_200">


                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique, tempor sagittis dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sit amet ligula consequat urna posuere
                                convallis.

                            </p>

                            <p class="customer_feedback_name white_color open_sans default_small_heading font_600">John Doe - Google CEO</p>

                        </div>

                        <div class="swiper-slide">

                            <p class="customer_feedback_text white_color open_sans default_text font_200">


                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique, tempor sagittis dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sit amet ligula consequat urna posuere
                                convallis.

                            </p>

                            <p class="customer_feedback_name white_color open_sans default_small_heading font_600">John Doe - Google CEO</p>

                        </div>

                        <div class="swiper-slide">

                            <p class="customer_feedback_text white_color open_sans default_text font_200">


                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique, tempor sagittis dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sit amet ligula consequat urna posuere
                                convallis.

                            </p>

                            <p class="customer_feedback_name white_color open_sans default_small_heading font_600">John Doe - Google CEO</p>

                        </div>

                    </div>

                    <!-- Add Pagination -->

                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->

                    <div class="swiper-button-next fa fa-angle-right hidden-sm hidden-xs"></div>

                    <div class="swiper-button-prev fa fa-angle-left hidden-sm hidden-xs"></div>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- /Customer Review Slider -->

    <!-- Blog Section -->

    

    <!-- /Blog Section -->

    <!-- Google Map Section -->

    {{-- <section id="map"></section> --}}

    <!-- /Google Map Section -->

    <!-- Contact Form Section -->
    <section class="stats_section big_padding">

            <div class="container">
    
                <div class="row">
    
                    <div class="col-md-3 col-sm-6 margin_after_tab text-center">
    
                        <div class="stats_section_inner">
    
                            <i class="fa fa-check white_color stats_section_icon text-center" aria-hidden="true"></i>
    
                            <h3 class="default_section_heading white_color raleway number-scroll"> 0 </h3>
    
                            <p class="small_heading_navy white_color open_sans font_200">Projects</p>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-3 col-sm-6 margin_after_tab text-center">
    
                        <div class="stats_section_inner">
    
                            <i class="fa fa-flag white_color stats_section_icon text-center" aria-hidden="true"></i>
    
                            <h3 class="default_section_heading white_color raleway number-scroll"> 0 </h3>
    
                            <p class="small_heading_navy white_color open_sans font_200">Campaigns</p>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-3 col-sm-6 margin_after_tab text-center">
    
                        <div class="stats_section_inner">
    
                            <i class="fa fa-globe white_color stats_section_icon text-center" aria-hidden="true"></i>
    
                            <h3 class="default_section_heading white_color raleway number-scroll"> 0</h3>
    
                            <p class="small_heading_navy white_color open_sans font_200">Users</p>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-3 col-sm-6 margin_after_tab text-center">
    
                        <div class="stats_section_inner">
    
                            <i class="fa fa-gift white_color stats_section_icon text-center" aria-hidden="true"></i>
    
                            <h3 class="default_section_heading white_color raleway number-scroll"> 0 </h3>
    
                            <p class="small_heading_navy white_color open_sans font_200">Award Winners</p>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
        </section>
    
    <section class="contact_form_section" id="contact-form">

        <div class="container">

            <div class="row">

                <div class="contact_form_inner big_padding clearfix">

                    <div class="col-md-6 wow slideInLeft">

                        <div class="contact_form_detail  center_on_mobile">

                            <p class="default_small_heading raleway blue_color font_200">Locate Us</p>

                            <h3 class="default_section_heading raleway navy_blue"> <span class="font_200">Let's Get In</span> Touch</h3>

                            <hr class="default_divider default_divider_blue " style="margin-left: 0;">

                            <p class="default_text_light default_text open_sans">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique, tempor sagittis dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sit amet ligula consequat urna posuere convallis.

                            </p>

                            <div class="row">

                                <div class="contact_form_extra_inner clearfix center_on_mobile">

                                    <div class="col-md-1 col-sm-12 form_padding_left_0">

                                        <i class="fa fa-map-marker blue_color text-center form_icon" aria-hidden="true"></i>

                                    </div>

                                    <div class="col-md-11 col-sm-12">

                                        <p class="default_text form_text open_sans default_text_light">

                                            58 alley, Mertle St, Rd 12, Apt 2C

                                        </p>

                                        <p class="default_text form_text open_sans default_text_light">

                                            Seattle, Washington

                                        </p>

                                    </div>

                                </div>

                                <div class="contact_form_extra_inner clearfix center_on_mobile">

                                    <div class="col-md-1 col-sm-12 form_padding_left_0">

                                        <i class="fa fa-phone blue_color text-center form_icon" aria-hidden="true"></i>

                                    </div>

                                    <div class="col-md-11 col-sm-12">

                                        <p class="default_text form_text open_sans default_text_light">

                                            +92 1440 59 58

                                        </p>

                                        <p class="default_text form_text open_sans default_text_light">

                                            +92 1440 59 58

                                        </p>

                                    </div>

                                </div>

                                <div class="contact_form_extra_inner clearfix center_on_mobile">

                                    <div class="col-md-1 col-sm-12 form_padding_left_0">

                                        <i class="fa fa-globe blue_color text-center form_icon" aria-hidden="true"></i>

                                    </div>

                                    <div class="col-md-11 col-sm-12">

                                        <a href="#." class="anchor_style_default">

                                            <p class="default_text form_text open_sans default_text_light">

                                                email@website.com

                                            </p>

                                        </a>

                                        <a href="#." class="anchor_style_default">

                                            <p class="default_text form_text open_sans default_text_light">

                                                www.website.com

                                            </p>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 wow slideInRight">

                        <form onsubmit="return false" class="form_class">

                            <div class="row">

                                <div class="mew_form clearfix">
                                    <div class="col-sm-12" id="result"></div>

                                    <div class="col-sm-6">

                                        <input placeholder="Your Name" class="form_inputs" id="name" name="name" required="required">

                                    </div>

                                    <div class="col-sm-6">

                                        <input placeholder="Email" class="form_inputs" id="email" name="email" required="required">

                                    </div>

                                    <div class="col-sm-12">

                                        <textarea placeholder="Your Message" class="form_inputs form_textarea" id="message" name="message" required="required"></textarea>

                                    </div>

                                    <div class="col-xs-12">

                                        <div class="button_div  center_on_mobile">
                                            <input id="submit_handle" type="submit" style="display: none" />
                                            <a href="javascript:" id="submit_btn" class="bg_pink button button_default_style open_sans bg_before_navy"> <i class="fa fa-envelope" aria-hidden="true"></i> Send Message</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- /Contact Form  Section -->

    <!-- Footer Section -->


@endsection
