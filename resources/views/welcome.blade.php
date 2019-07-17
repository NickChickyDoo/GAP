<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Home - Startup - Multipurpose Bootstrap 4 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="trio/assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700%7CPlayfair+Display:400,400i" rel="stylesheet">

    <!--=== All Plugins CSS ===-->
    <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="{{ asset('assets/css/vendor.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="preloader-active">

    <!--== Start PreLoader Wrap ==-->
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!--== End PreLoader Wrap ==-->

    <!--== Start Header Area Wrapper ==-->
    <header class="header-area-wrapper transparent-header sticky-header">
        <div class="container-fluid">
            <div class="row">
                <!-- Start Logo Area Wrap -->
                <div class="col-6 col-lg-2">
                    <a href="index.html" class="logo-wrap d-block">
                        <img src="{{ asset('img/logo_GAP.1.0.png')}}" width="20%" alt="White Logo" />
                        <img src="{{ asset('img/logo_GAP.1.0.png')}}" width="20%" class="sticky-logo" alt="Black Logo" />
                    </a>
                </div>
                <!-- End Logo Area Wrap -->

                <!-- Start Main Navigation Wrap -->
                <div class="col-6 col-lg-10 my-auto ml-auto position-static">
                    <div class="header-right-area d-flex justify-content-end align-items-center">
                        <div class="navigation-area-wrap d-none d-lg-block">
                            <nav class="main-navigation">
                                <ul class="main-menu nav justify-content-end">
                                    <li class="dropdown-navbar arrow"><a href="index.html">Home</a>
                                        <ul class="dropdown-nav mega-menu-wrap">
                                            <li class="mega-menu-item"><a href="#" class="mega-title d-none">Home Group 01</a>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">Classic Agency</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title d-none">Home Group 02</a>
                                                <ul>
                                                    <li>
                                                        <a href="index-restaurant.html">Restaurant</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title d-none">Home Group 03</a>
                                                <ul>
                                                    <li>
                                                        <a href="index-blog-metro.html">Blog Metro</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-navbar arrow"><a href="#">Pages</a>
                                        <ul class="dropdown-nav">
                                            <li class="dropdown-navbar arrow"><a href="#">About Us</a>
                                                <ul class="dropdown-nav">
                                                    <li>
                                                        <a href="about-modern.html">About Us - Modern</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-navbar arrow"><a href="#">Our Services</a>
                                                <ul class="dropdown-nav">
                                                    <li>
                                                        <a href="services.html">Services - Simple</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-navbar arrow"><a href="#">Our Team</a>
                                                <ul class="dropdown-nav">
                                                    <li>
                                                        <a href="team.html">Team 01</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-navbar arrow"><a href="#">Contact</a>
                                                <ul class="dropdown-nav">
                                                    <li>
                                                        <a href="contact.html">Contact - Simple</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="pricing.html">Pricing</a>
                                            </li>
                                            <li><a href="faq.html">Faq</a>
                                            </li>
                                            <li><a href="partner.html">Partners</a>
                                            </li>
                                            <li><a href="404.html">404</a>
                                            </li>
                                            <li><a href="coming-soon.html">Coming Soon</a>
                                            </li>
                                            <li><a href="typography.html">Typography</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-navbar arrow"><a href="shop.html">Shop</a>
                                        <ul class="dropdown-nav">
                                            <li>
                                                <a href="shop.html">Product Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-navbar arrow full-width"><a href="blog.html">Blog</a>
                                        <ul class="dropdown-nav mega-menu-wrap">
                                            <li class="mega-menu-item"><a href="#" class="mega-title">Blog Basic</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog.html">Basic – Column No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title">Blog Classic</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog-classic.html">Classic – No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title">Blog Masonry</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog-masonry-full-width-4-column.html">Masonry – Fullwidth 4 Columns</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title">Blog Details</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-navbar arrow full-width"><a href="portfolio.html">Portfolio</a>
                                        <ul class="dropdown-nav mega-menu-wrap">
                                            <li class="mega-menu-item"><a href="#" class="mega-title">Portfolio Masonry</a>
                                                <ul>
                                                    <li>
                                                        <a href="portfolio-fullwidth-masonry-style-1.html">Fullwidth Masonry Style 1</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title">Portfolio Basic</a>
                                                <ul>
                                                    <li>
                                                        <a href="portfolio-modern-masonry-4-column.html">Modern Masonry – 4 Columns</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title">Creative Modern</a>
                                                <ul>
                                                    <li>
                                                        <a href="portfolio-creative-1.html">Creative Style 1</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mega-menu-item"><a href="#" class="mega-title">Portfolio Details</a>
                                                <ul>
                                                    <li>
                                                        <a href="portfolio-details.html">Portfolio Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-navbar arrow full-width bg-menu"><a href="#">elements</a>
                                        <ul class="dropdown-nav mega-menu-wrap">
                                            <li class="mega-menu-item"><a href="#" class="mega-title d-none">Elements Group 01</a>
                                                <ul>
                                                    <li>
                                                        <a href="element-gallery-box.html">Gallery Boxes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item"><a href="#" class="mega-title d-none">Elements Group 02</a>
                                                <ul>
                                                    <li>
                                                        <a href="element-pricing-table.html">Pricing Table</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item"><a href="#" class="mega-title d-none">Elements Group 03</a>
                                                <ul>
                                                    <li>
                                                        <a href="element-map.html">Map</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="off-canvas-area-wrap nav">
                        </a>
                            <button class="search-box-open d-block d-lg-none"><i class="fa fa-search"></i>
                            </button>
                            <button class="off-canvas-btn d-none d-lg-block"><i class="fa fa-bars"></i>
                            </button>
                            <button class="mobile-menu text-white d-lg-none"><i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Main Navigation Wrap -->
            </div>
        </div>
    </header>
    <!--== End Header Area Wrapper ==-->

    <!--== Start Slider Area Wrapper ==-->
    <div class="slider-area-wrapper fix">
        <div class="rev_slider_wrapper fullscreen-container" data-alias="classic-agency" data-source="gallery">
            <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_home_startup_004.jpg" data-rotate="0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/home-startup/1.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0"
                            data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme" id="slide-4-layer-3" data-x="['left','center','center','center']" data-hoffset="['0','-6','1','-1']" data-y="['middle','middle','middle','middle']" data-voffset="['-138','-181','-228','-178']" data-fontsize="['100','70','50','25']"
                            data-lineheight="['100','110','80','50']" data-width="['none','none','none','214']" data-height="['none','none','none','151']" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 5; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: rgba(255,255,255,1);font-family:Poppins;">
                            GOOD
                            <br/>AGING
                            <br/>IN PLACE.
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme" id="slide-4-layer-4" data-x="['left','center','center','center']" data-hoffset="['0','-13','0','-1']" data-y="['middle','middle','middle','middle']" data-voffset="['69','78','46','9']" data-fontsize="['18','18','18','16']"
                            data-lineheight="['24','24','24','22']" data-width="['700','600','601','320']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 6; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(255,255,255,1);">
                            We highlight behavioral brand truths, and create experiences that spark feelings worth sharing.
                        </div>

                        <!-- LAYER NR. 3 -->
                        {{--<div class="tp-caption btn-2 rev-btn " id="slide-4-layer-6" data-x="['left','left','center','center']" data-hoffset="['31','410','-4','8']" data-y="['middle','middle','middle','middle']" data-voffset="['176','229','225','168']" data-fontweight="['500','600','600','600']"
                            data-color="['rgb(0,0,0)','rgba(34,34,34,1)','rgba(34,34,34,1)','rgba(31,31,31,1)']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"https:\/\/themeforest.net\/item\/trio-a-super-mature-multipurpose-wordpress-theme\/19491254","delay":""}]'
                            data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[25,25,25,25]" data-paddingright="[35,35,35,35]" data-paddingbottom="[25,25,25,25]" data-paddingleft="[35,35,35,35]" style="z-index: 7; white-space: nowrap; color: #000000;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                            BUY THEME NOW
                        </div>--}}
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </div>
    <!--== End Slider Area Wrapper ==-->

    {{--<!--== Start Our Expertise Area ==-->
    <section class="startup-expertise-area pt-120 pt-md-80 pt-sm-60 pb-114 pb-md-76 pb-sm-56">
        <div class="container">
            <div class="row">
                <!-- Start Section title -->
                <div class="col-lg-6 m-auto text-center">
                    <div class="section-title-wrap layout--2">
                        <h2>Our Expertise</h2>
                        <p class="mb-0">You probably haven’t heard of them quinoa DIY, asymmetrical vice farm-to-table bicycle rights blog.</p>
                    </div>
                </div>
                <!-- End Section title -->
            </div>

            <div class="row align-items-center mtm-50">
                <div class="col-lg-4 col-md-6 order-1 order-lg-0">
                    <!-- Single Feature Item #1 -->
                    <div class="single-desc-item-wrap layout--2 d-flex">
                        <span class="desc-number">1</span>
                        <div class="busi-fea-info">
                            <h3>Best Stream</h3>
                            <p class="m-0">Etiam fringilla purused in tincidunted euismod. In lorem massa, fermentum and pharetra and pulvinar eget eros. A long radio-like mix of music can.</p>
                        </div>
                    </div>

                    <!-- Single Feature Item #2 -->
                    <div class="single-desc-item-wrap layout--2 d-flex">
                        <span class="desc-number">2</span>
                        <div class="busi-fea-info">
                            <h3>Suggested tracks</h3>
                            <p class="m-0">Etiam fringilla purused in tincidunted euismod. In lorem massa, fermentum and pharetra and pulvinar eget eros. A long radio-like mix of music can.</p>
                        </div>
                    </div>

                    <!-- Single Feature Item #3 -->
                    <div class="single-desc-item-wrap layout--2 d-flex">
                        <span class="desc-number">3</span>
                        <div class="busi-fea-info">
                            <h3>Enjoy the Station</h3>
                            <p class="m-0">Etiam fringilla purused in tincidunted euismod. In lorem massa, fermentum and pharetra and pulvinar eget eros. A long radio-like mix of music can.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 order-0 order-lg-1 my-auto pt-50">
                    <figure class="video-area-wrap ">
                        <img src="trio/assets/img/home-startup/video-btn-bg.jpg" alt="Video" />
                        <figcaption>
                            <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="btn-video-popup"><i

                                class="fa fa-play"></i></a>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-6 order-2">
                    <!-- Single Feature Item #4 -->
                    <div class="single-desc-item-wrap layout--2 d-flex">
                        <span class="desc-number">4</span>
                        <div class="busi-fea-info">
                            <h3>Premium Plugins Included</h3>
                            <p class="m-0">Etiam fringilla purused in tincidunted euismod. In lorem massa, fermentum and pharetra and pulvinar eget eros. A long radio-like mix of music can.</p>
                        </div>
                    </div>

                    <!-- Single Feature Item #5 -->
                    <div class="single-desc-item-wrap layout--2 d-flex">
                        <span class="desc-number">5</span>
                        <div class="busi-fea-info">
                            <h3>Best Stream</h3>
                            <p class="m-0">Etiam fringilla purused in tincidunted euismod. In lorem massa, fermentum and pharetra and pulvinar eget eros. A long radio-like mix of music can.</p>
                        </div>
                    </div>

                    <!-- Single Feature Item #6 -->
                    <div class="single-desc-item-wrap layout--2 d-flex">
                        <span class="desc-number">6</span>
                        <div class="busi-fea-info">
                            <h3>Suggested tracks</h3>
                            <p class="m-0">Etiam fringilla purused in tincidunted euismod. In lorem massa, fermentum and pharetra and pulvinar eget eros. A long radio-like mix of music can.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Our Expertise Area ==-->--}}

    <!--== Start Startup Banner Area ==-->
    <section class="startup-banner-wrapper bg-offwhite pb-sm-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <!-- Startup Banner Image Area -->
                    <figure class="startup-banner-image">
                        <img src="{{ asset('img/home-startup/desc.jpg')}}" alt="Banner" />
                    </figure>
                </div>

                <div class="col-md-6 my-auto mt-sm-40">
                    <!-- Startup Banner Content Area -->
                    <div class="startup-banner-content">
                        <h2>Good Aging in Place</h2>
                        <p>Good aging in place หรือ ‘สูงวัยสุขใจในบ้าน’ คือ การจัดสภาพที่อยู่อาศัยให้ผู้สูงอายุสามารถอยู่อาศัย
                            ในบ้านเดิมของตนเองได้ อย่างมีคุณภาพชีวิตที่ดีทั้งทางร่างกาย จิตใจ และสังคมได้อย่างยาวนานที่สุด
                            จากการสำรวจพบว่า ผู้สูงอายุ 90% อยากอยู่ในบ้านเดิมมากกว่าไปอยู่ในบ้านพักคนชรา
                            แต่บ้านที่สร้างไว้ตั้งแต่หนุ่มสาวอาจต้องการปรับสภาพหรือใช้เทคโนโลยีช่วยให้เหมาะสมกับวัยและการมีโรคประจำตัว
                            เวบไซต์นี้ประกอบด้วย สาระน่ารู้ ข่าวสารกิจกรรม แบบประเมินสำหรับบุคคลทั่วไป และแบบประเมินสำหรับวิชาชีพ
                            เพื่อช่วยให้ผู้สูงอายุไทย สุขใจในบ้าน ของตนเองได้มากขึ้น
                        </p>
                        {{--<a href="#" class="btn btn-bordered">View Demos</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Startup Banner Area ==-->
    
    <!--== Start Why Us Area Wrapper ==-->
    <section class="why-us-area-wrapper pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
        <div class="container">
            <div class="row">
                {{--<!-- Start Section title -->
                <div class="col-lg-6 m-auto text-center">
                    <div class="section-title-wrap layout--2">
                        <h2>All The Best You Need</h2>
                        <p class="mb-0">We’re a creative agency who pursue brilliance. We create new companies — and fix old ones.
                        </p>
                    </div>
                </div>
                <!-- End Section title -->--}}
            </div>

            <div class="row">
                <div class="col-lg-7 order-1 order-lg-0">
                    <div class="restaurant-why-us-accordion-wrap">
                        <div class="restaurant-why-us-accordion" id="whyUsAccordion">
                            <!-- Start Why Us Accordion #01 -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">

                                        <span>01.</span> Results-driven marketing

                                    </h3>
                                </div>

                                <div id="collapseOne" class="collapse show" data-parent="#whyUsAccordion">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut vidis commune scriptorem. Ad his suavitate com plectitur ruis dicant</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Why Us Accordion #02 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 data-toggle="collapse" data-target="#collapseTwo">

                                        <span>02.</span>Persona-driven design

                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#whyUsAccordion">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut vidis commune scriptorem. Ad his suavitate</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Why Us Accordion #03 -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 data-toggle="collapse" data-target="#collapseThree">

                                        <span>03.</span> Essential applications

                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#whyUsAccordion">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut vidis commune scriptorem.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Why Us Accordion #04 -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">

                                        <span> 04.</span> Lead generation

                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#whyUsAccordion">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut vidis commune scriptorem.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-5 order-0">
                    <!-- Start Why Us Right Content Area -->
                    <div class="why-us-left-area-content mb-sm-30 mb-md-30">
                        <img src="{{ asset('assets/img/home-startup/accordion-img.jpg')}}" alt="Why choose us" />
                    </div>
                    <!-- End Why Us Right Content Area -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Why Us Area Wrapper ==-->

   {{-- <!--== Start Pricing Table Area ==-->
    <section class="pricing-table-wrapper parallaxBg bg-img" data-bg="trio/assets/img/home-startup/pricing-bg.jpg">
        <div class="pricing-table-content nav">
            <!-- Start Single Pricing Table -->
            <div class="pricing-table-item-wrap text-center">
                <h4 class="price">30 <sup>$</sup></h4>
                <h2 class="plan-title">Basic Package</h2>
                <p>It takes a lot to be one of the most trusted themes on the market. Read more below why users keep coming back
                </p>
                <a href="#" class="btn btn-bordered">Free Trail</a>
            </div>
            <!-- End Single Pricing Table -->

            <!-- Start Single Pricing Table -->
            <div class="pricing-table-item-wrap featured text-center">
                <h4 class="price">40 <sup>$</sup></h4>
                <h2 class="plan-title">Regular Package</h2>
                <p>It takes a lot to be one of the most trusted themes on the market. Read more below why users keep coming back
                </p>
                <a href="#" class="btn btn-bordered">Free Trail</a>
            </div>
            <!-- End Single Pricing Table -->

            <!-- Start Single Pricing Table -->
            <div class="pricing-table-item-wrap text-center">
                <h4 class="price">50 <sup>$</sup></h4>
                <h2 class="plan-title">Gold Package</h2>
                <p>It takes a lot to be one of the most trusted themes on the market. Read more below why users keep coming back
                </p>
                <a href="#" class="btn btn-bordered">Free Trail</a>
            </div>
            <!-- End Single Pricing Table -->

            <!-- Start Single Pricing Table -->
            <div class="pricing-table-item-wrap text-center">
                <h4 class="price">60 <sup>$</sup></h4>
                <h2 class="plan-title">Premium Package</h2>
                <p>It takes a lot to be one of the most trusted themes on the market. Read more below why users keep coming back
                </p>
                <a href="#" class="btn btn-bordered">Free Trail</a>
            </div>
            <!-- End Single Pricing Table -->
        </div>
    </section>
    <!--== End Pricing Table Area ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="team-member-area pt-118 pt-md-80 pt-sm-60 pb-118 pb-md-80 pb-sm-60">
        <div class="container">
            <div class="row">
                <!-- Start Section title -->
                <div class="col-lg-6 m-auto text-center">
                    <div class="section-title-wrap layout--2">
                        <h2>Meet Our Team</h2>
                        <p class="mb-0">We’re a creative agency who pursue brilliance. We create new companies — and fix old ones.
                        </p>
                    </div>
                </div>
                <!-- End Section title -->
            </div>

            <div class="row mtm-50 mtm-sm-30">
                <!-- Start Team Member #01 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-member-wrap">
                        <figure class="speaker-thumbnail">
                            <img src="trio/assets/img/team/team-mem-01.jpg" alt="Team" />
                        </figure>
                        <div class="speaker-info">
                            <h3>Charlie puth</h3>
                            <h6 class="designation">Founder</h6>
                        </div>
                    </div>
                </div>

                <!-- Start Team Member #02 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-member-wrap">
                        <figure class="speaker-thumbnail">
                            <img src="assets/img/team/team-mem-02.jpg" alt="Team" />
                        </figure>
                        <div class="speaker-info">
                            <h3>Angela lily</h3>
                            <h6 class="designation">Co-Founder</h6>
                        </div>
                    </div>
                </div>

                <!-- Start Team Member #03 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-member-wrap">
                        <figure class="speaker-thumbnail">
                            <img src="assets/img/team/team-mem-03.jpg" alt="Team" />
                        </figure>
                        <div class="speaker-info">
                            <h3>Shawn mendes</h3>
                            <h6 class="designation">CEO</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Team Area Wrapper ==--> --}}

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area bg-img" data-bg="assets/img/home-startup/testimonial.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="testimonial-content-wrap">
                        <div class="ht-slick-slider" data-slick='{"slidesToShow": 1, "arrows": false}'>
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-wrap single-testimonial-wrap-black">
                                <p>“This is absolutely the best theme I have ever used. The design quality is exquisite. Their response time is unheard of.”</p>
                                <h3 class="client-name">Jessica Jung</h3>
                                <h5 class="client-designation">Graphic Design</h5>
                            </div>
                            <!-- Single Testimonial End -->

                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-wrap single-testimonial-wrap-black">
                                <p>“This is absolutely the best theme I have ever used. The design quality is exquisite. Their response time is unheard of.”</p>
                                <h3 class="client-name">Ken Wheeler</h3>
                                <h5 class="client-designation">JavaScript Dev</h5>
                            </div>
                            <!-- Single Testimonial End -->

                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-wrap single-testimonial-wrap-black">
                                <p>“This is absolutely the best theme I have ever used. The design quality is exquisite. Their response time is unheard of.”</p>
                                <h3 class="client-name">Raju Ahammad</h3>
                                <h5 class="client-designation">Front End</h5>
                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Testimonial Area Wrapper ==-->

   {{-- <!-- Start Startup Call to Action -->
    <section class="startup-call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="startup-call-to-action">
                        <img src="assets/img/home-startup/daimond.png" alt="Startup Call Action" />
                        <h2>Are You Ready ? Let’s Work !</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Startup Call to Action --> --}}

    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-wrapper">
        <!-- Start Footer Widget Area -->
        <div class="footer-widget-wrapper pt-120 pt-md-80 pt-sm-60 pb-116 pb-md-78 pb-sm-60">
            <div class="container">
                <div class="row mtm-44">
                    <!-- Start Single Widget Wrap -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-widget-wrap">
                            <h3 class="widget-title">Booking</h3>
                            <div class="widget-body">
                                <div class="about-text">
                                    <address>

                                    Max Weatherall. Productions <br>

                                    562 Sycamore Circle <br>

                                    Atlanta, GA 30342 <br>

                                    T: +920364426

                                </address>
                                    <a href="mailto:your@example.com">Email: your@example.com</a>
                                    <br>
                                    <a href="https://www.hastech.company" target="_blank">www.hastech.company</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget Wrap -->

                    <!-- Start Single Widget Wrap -->
                    <div class="col-lg-2 col-md-6">
                        <div class="single-widget-wrap">
                            <h3 class="widget-title">Links</h3>
                            <div class="widget-body">
                                <ul class="widget-list">
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                    </li>
                                    <li><a href="about.html">About us</a>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget Wrap -->

                    <!-- Start Single Widget Wrap -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-widget-wrap">
                            <h3 class="widget-title">Latest Form Blog</h3>
                            <div class="widget-body">
                                <div class="latest-blog-widget">
                                    <div class="single-blog-item">
                                        <h3><a href="blog-details.html">Work Passionately</a></h3>
                                        <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                    </div>
                                    <div class="single-blog-item">
                                        <h3><a href="blog-details.html">Creating electronic beats in the</a></h3>
                                        <span class="post-date"><i class="fa fa-clock-o"></i>  March 8, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget Wrap -->

                    <!-- Start Single Widget Wrap -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-widget-wrap">
                            <h3 class="widget-title">Get In Touch</h3>
                            <div class="widget-body">
                                <div class="newsletter-widget-wrap">
                                    <p>Enter your email and receive the latest news from us.</p>
                                    <div class="newsletter-form-wrap">
                                        <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a" method="post" id="mc-form" class="mc-form">
                                            <input type="email" id="mc-email" placeholder="Enter Email Address" required />
                                            <button class="btn-newsletter"><i class="fa fa-envelope"></i>
                                            </button>
                                        </form>

                                        <!-- MailChimp Alerts Start -->
                                        <div class="mailchimp-alerts text-centre">
                                            <div class="mailchimp-submitting"></div>
                                            <div class="mailchimp-success"></div>
                                            <div class="mailchimp-error"></div>
                                        </div>
                                        <!-- MailChimp Alerts End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget Wrap -->
                </div>
            </div>
        </div>
        <!-- End Footer Widget Area -->

        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-7 order-last">
                        <div class="footer-copyright-area mt-xs-10 text-center text-sm-left">
                            <p>Copyright © 2019 TRIO - All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5 order-first order-sm-last">
                        <div class="footer-social-icons nav justify-content-center justify-content-md-end">
                            <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Start Off Canvas Area Wrapper ==-->
    <aside class="off-canvas-area-wrapper">
        <!-- Off Canvas Overlay -->
        <div class="off-canvas-overlay"></div>

        <!-- Start Off Canvas Content Area -->
        <div class="off-canvas-content-wrap">
            <div class="off-canvas-content">
                <!-- Start Search Box Wrap -->
                <div class="search-box-wrap off-canvas-item">
                    <form action="#" method="post">
                        <input type="search" placeholder="Search.." />
                        <button class="btn-search"><i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>

                <!-- Start About Content Wrap -->
                <div class="about-content off-canvas-item">
                    <h2>Who We Are</h2>
                    <p>Organic seitan post-ironic, four loko bicycle rights art party tousled. Mlkshk tote bag stumptown.</p>
                </div>

                <!-- Start Useful Links Content -->
                <div class="useful-link-wrap off-canvas-item">
                    <h2>Useful Links</h2>

                    <ul class="useful-link-menu">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="shop.html">Shop</a>
                        </li>
                        <li><a href="about.html">About Us</a>
                        </li>
                        <li><a href="blog.html">Blog</a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Start Social Links Content -->
                <div class="social-links-wrap off-canvas-item">
                    <h2>Connect</h2>

                    <div class="social-links">
                        <a href="#" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Off Canvas Close Icon -->
            <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="left"><i class="fa fa-close"></i>
            </button>
        </div>
        <!-- End Off Canvas Content Area -->
    </aside>
    <!--== End Off Canvas Area Wrapper ==-->

    <!--== Start Off Canvas Area Wrapper ==-->
    <aside class="off-canvas-responsive-menu">
        <!-- Off Canvas Overlay -->
        <div class="off-canvas-overlay"></div>

        <!-- Start Off Canvas Content Area -->
        <div class="off-canvas-content-wrap">
            <div class="off-canvas-content">

            </div>
            <!-- Off Canvas Close Icon -->
            <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="right"><i class="fa fa-close"></i>
            </button>
        </div>
        <!-- End Off Canvas Content Area -->
    </aside>
    <!--== End Off Canvas Area Wrapper ==-->

    <!--== Start Off Canvas Area Wrapper ==-->
    <aside class="off-canvas-search-box">
        <!-- Off Canvas Overlay -->
        <div class="off-canvas-overlay"></div>

        <!--== Start Search Box Area ==-->
        <div class="search-box-wrapper text-center">
            <div class="search-box-content">
                <form action="#" method="post">
                    <input type="search" placeholder="Search" />
                    <button class="btn-search"><i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <!--== End Search Box Area ==-->
    </aside>
    <!--== End Off Canvas Area Wrapper ==-->

    <!--=== Start Quick View Content Wrapper ==-->
    <div class="modal fade" id="quick-view">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="quick-view-content-wrap">
                        <div class="row">
                            <!-- Start Product Thumbnail Area -->
                            <div class="col-md-6">
                                <div class="product-thumb-area">
                                    <div class="ht-slick-slider dots-style-three prod-thumb-inner" data-slick='{"slidesToShow": 1, "infinite": false, "dots": true}'>
                                        <figure class="port-details-thumb-item">
                                            <img src="assets/img/home-landing-page/portfolio/05.jpg" alt="product" />
                                        </figure>
                                        <figure class="port-details-thumb-item">
                                            <img src="assets/img/home-landing-page/portfolio/02.jpg" alt="product" />
                                        </figure>
                                        <figure class="port-details-thumb-item">
                                            <img src="assets/img/home-landing-page/portfolio/03.jpg" alt="product" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Thumbnail Area -->

                            <!-- Start Product Info Area -->
                            <div class="col-md-6">
                                <div class="product-details-info-content-wrap">
                                    <div class="prod-details-info-content">
                                        <h2>Lamp Shade</h2>
                                        <div class="price-group">
                                            <span class="price">$9.99</span>
                                        </div>

                                        <p>Created from either wood or recycled materials, it can be moulded into just about any shape and hardens to provide a hard shell. Additives can make it water resistant.
                                        </p>

                                        <div class="product-action mt-38 mb-20">
                                            <div class="action-top mb-40">
                                                <div class="pro-qty mr-10">
                                                    <input type="text" id="quantity" title="Quantity" value="1" />
                                                </div>
                                                <button class="btn btn-brand">Add to Cart</button>
                                            </div>

                                            <button class="btn-wishlist trio-tooltip" data-tippy-content="Add to Wishlist">
                                                <i class="fa fa-heart-o"></i>Add to Wishlist
                                            </button>
                                        </div>

                                        <div class="port-details-con-inner">
                                            <div class="single-post-details__footer m-0">
                                                <div class="single-post-details__footer__item">
                                                    <div class="footer-item-left">
                                                        <h5 class="item-head"><i class="fa fa-tags"></i> Categories:</h5>
                                                    </div>
                                                    <div class="footer-item-right">
                                                        <ul class="cate-list nav">
                                                            <li><a href="#">Design</a>
                                                            </li>
                                                            <li><a href="#">Interior</a>
                                                            </li>
                                                            <li><a href="#">Multi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="single-post-details__footer__item">
                                                    <div class="footer-item-left">
                                                        <h5 class="item-head"><i class="fa fa-share-alt"></i> Share:</h5>
                                                    </div>

                                                    <div class="footer-item-right">
                                                        <div class="share-item">
                                                            <a href="#" class="trio-tooltip" data-tippy-content="Share On Facebook"><i

                                                                class="fa fa-facebook"></i></a>
                                                            <a href="#" class="trio-tooltip" data-tippy-content="Share On Twitter"><i

                                                                class="fa fa-twitter"></i></a>
                                                            <a href="#" class="trio-tooltip" data-tippy-content="Share On Google Plus"><i

                                                                class="fa fa-google-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Info Area -->
                        </div>
                    </div>
                </div>

                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        </div>
    </div>
    <!--=== End Quick View Content Wrapper ==-->

    <!--=======================Javascript============================-->
    <!--=== All Vendor Js ===-->
    <script src="assets/js/vendor.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="assets/js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="assets/js/active.min.js"></script>

    <!--=== Revolution Slider Js ===-->
    <script src="assets/js/revslider/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revslider/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/js/revslider/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/revslider/extensions/revolution.extension.video.min.js"></script>


    <script src="assets/js/revslider/revslider-active.js"></script>
</body>

</html>
