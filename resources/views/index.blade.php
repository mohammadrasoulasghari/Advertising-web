<!doctype html>
<html class="no-js" lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>شرکت آراز دیوار</title>
    <meta name="description" content="Gerow - Business Consulting HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>



    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header id="sticky-header" class="transparent-header header-style-two">
        <div class="container custom-container">
            <div class="heder-top-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="header-top-left">
                            <ul class="list-wrap">
                                <li><i class="flaticon-location"></i>تهران سعادت آباد</li>
                                <li><i class="flaticon-mail"></i><a href="mailto:test@test.com">test@test.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="header-top-right">
                            <div class="header-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            @if ($user_info)
                                <div class="header-top-btn">
                                    <a href="{{ route('profile.index') }}"><i
                                            class="flaticon-briefcase"></i>{{ $user_info }} خوش
                                        آمدید</a>
                                </div>
                            @else
                                <div class="header-top-btn">
                                    <a href="{{ route('login') }}"><i>وارد حساب کاربری خود
                                            شوید!</i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-area">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    {{-- <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a> --}}
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="#">صفحه اصلی</a>
                                            <ul class="sub-menu">
                                                <li class="active"><a href="index.html">سرمایه گذاری</a></li>
                                                <li><a href="index-2.html">مشاوره</a></li>
                                                <li><a href="index-3.html">بیمه</a></li>
                                                <li><a href="index-4.html">دیجیتال مارکتینگ</a></li>
                                                <li><a href="index-5.html">کسب و کار</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">درباره ما</a></li>
                                        <li class="menu-item-has-children"><a href="#">برگه ها</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.html">خدمات ما</a></li>
                                                <li><a href="services-details.html">برگه تکی خدمات ما</a></li>
                                                <li><a href="project-details.html">برگه تکی نمونه کار</a></li>
                                                <li><a href="team-details.html">برگه تکی تیم ما</a></li>
                                                <li><a href="error.html">برگه 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">وبلاگ</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">وبلاگ ما</a></li>
                                                <li><a href="blog-details.html">برگه تکی وبلاگ</a></li>
                                            </ul>
                                        </li>
                                        @if ($user_info)
                                            <li><a href="{{ route('logout') }}">خارج شدن</a></li>
                                        @else
                                            <li><a href="{{ route('register') }}">حسابی ندارید؟ ثبت نام کنید</a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="header-action">
                                    <ul class="list-wrap">
                                        <li class="header-contact-two">
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <span>تماس بگیرید</span>
                                                <a href="tel:0123456789">+123 8989 444</a>
                                            </div>
                                        </li>
                                        <li class="header-search"><a href="#"><i
                                                    class="flaticon-search"></i></a></li>
                                        <li class="offcanvas-menu">
                                            <a href="#" class="menu-tigger">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div class="mobile-search">
                                    <form action="#">
                                        <input type="text" placeholder="جستجو کنید ...">
                                        <button><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>

        <!-- header-search -->
        <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="search-close">
                <span><i class="fas fa-times"></i></span>
            </div>
            <div class="search-wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">... جستجو کنید ...</h2>
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" name="search" placeholder="دنبال چی میگردی  ؟">
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-search-end -->

        <!-- offCanvas-menu -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button><i class="far fa-window-close"></i></button>
            </div>
            <div class="logo-side mb-30">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>آدرس شرکت ما</h4>
                    <p>شیراز <br> بلوار چمران - هتل چمران</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>شماره تماس</h4>
                    <p>123456789</p>
                    <p>021123456789</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>آدرس ایمیل</h4>
                    <p>info@example.com</p>
                    <p>example.mail@hum.com</p>
                </div>
            </div>
            <ul class="side-instagram list-wrap">
                <li><a href="#"><img src="assets/img/images/sb_insta01.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta02.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta03.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta04.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta05.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta06.jpg" alt=""></a></li>
            </ul>
            <div class="social-icon-right mt-30">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offCanvas-menu-end -->

    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner-area-two banner-bg-two" data-background="assets/img/banner/h2_banner_bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content-two">
                            <span class="sub-title" data-aos="fade-up" data-aos-delay="0">آراز دیوار</span>
                            <h2 class="title" data-aos="fade-up" data-aos-delay="300">آراز دیوار</h2>
                            <p data-aos="fade-up" data-aos-delay="500">این یه سایتیه که شبیه دیوار هست</p>
                            <div class="banner-btn">
                                <a href="services.html" class="btn" data-aos="fade-right"
                                    data-aos-delay="700">خدمات ما</a>
                                <a href="https://persian8.asset.aparat.com/aparat-video/86a881301907e2ce1f856860af1ec5ee52952572-1080p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6Ijc2ZTc5MzNkYWQ5ZjliYWMwZDNkYmQ3ZjAzY2JiZGJhIiwiZXhwIjoxNjkyMjY3MTQxLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.JnkcgNNve1OA6qCJ4xjj1K-SQ8vUxpxN3VVuAEsE4uk"
                                    class="play-btn popup-video" data-aos="fade-left" data-aos-delay="700"><i
                                        class="fas fa-play"></i> <span>معرفی ما</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img text-center">
                            <img src="assets/img/banner/h2_banner_img.png" alt="" data-aos="fade-left"
                                data-aos-delay="400">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape-wrap">
                <img src="assets/img/banner/h2_banner_shape01.png" alt="">
                <img src="assets/img/banner/h2_banner_shape02.png" alt="">
                <img src="assets/img/banner/h2_banner_shape03.png" alt="" data-aos="zoom-in-up"
                    data-aos-delay="800">
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- categories-area -->
        <x-show-category :categories="$categories"></x-show-category>
        <!-- categories-area-end -->




        <!-- pricing-area -->
        <section class="pricing-area-two">
            <div class="pricing-shape">
                <img src="assets/img/images/pricing_shape.png" alt="" data-aos="fade-left"
                    data-aos-delay="200">
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">قیمت گذاری منعطف</span>
                            <h2 class="title">ما بهترین طرح را چیده ایم!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="section-top-content mb-30">
                            <p>آیا تا به حال متوجه شده اید که به صفحه کامپیوتر خود خیره شده اید و شعار مشاوره ای خوبی به
                                ذهنتان خطور می کند؟ اغلب اوقات.</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-item-wrap">
                    <div class="pricing-tab">
                        <span class="tab-btn monthly_tab_title">ماهانه</span>
                        <span class="pricing-tab-switcher"></span>
                        <span class="tab-btn annual_tab_title">سالانه</span>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-two">
                                <div class="pricing-head-two">
                                    <h4 class="title">طرح پایه</h4>
                                    <div class="pricing-price-two">
                                        <h2 class="price monthly_price">19000<strong>تومان</strong></h2>
                                        <h2 class="price annual_price">119000<strong>تومان</strong></h2>
                                    </div>
                                </div>
                                <div class="pricing-bottom">
                                    <div class="pricing-list">
                                        <ul class="list-wrap">
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">5000 کاربر
                                                فعال</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">دسترسی
                                                نامحدود</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">بدون شارژ
                                                مخفی</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">بکاپ
                                                روزانه</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">دسترسی به
                                                سورس فایل</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">و ...</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn-two">
                                        <a href="" class="btn">فعال سازی این طرح</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-two">
                                <span class="popular">پیشنهادی</span>
                                <div class="pricing-head-two">
                                    <h4 class="title">طرح تیمی</h4>
                                    <div class="pricing-price-two">
                                        <h2 class="price monthly_price">49000<strong>تومان</strong></h2>
                                        <h2 class="price annual_price">499000<strong>تومان</strong></h2>
                                    </div>
                                </div>
                                <div class="pricing-bottom">
                                    <div class="pricing-list">
                                        <ul class="list-wrap">
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">5000 کاربر
                                                فعال</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">دسترسی
                                                نامحدود</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">بدون شارژ
                                                مخفی</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">بکاپ
                                                روزانه</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">دسترسی به
                                                سورس فایل</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">و ...</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn-two">
                                        <a href="contact.html" class="btn">فعال سازی این طرح</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-two">
                                <div class="pricing-head-two">
                                    <h4 class="title">طرح نامحدود</h4>
                                    <div class="pricing-price-two">
                                        <h2 class="price monthly_price">99000<strong>تومان</strong></h2>
                                        <h2 class="price annual_price">999000<strong>تومان</strong></h2>
                                    </div>
                                </div>
                                <div class="pricing-bottom">
                                    <div class="pricing-list">
                                        <ul class="list-wrap">
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">5000 کاربر
                                                فعال</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">دسترسی
                                                نامحدود</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">بدون شارژ
                                                مخفی</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">بکاپ
                                                روزانه</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">دسترسی به
                                                سورس فایل</li>
                                            <li><img src="assets/img/icons/check_icon02.svg" alt="">و ...</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn-two">
                                        <a href="contact.html" class="btn">فعال سازی این طرح</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <footer>
        <div class="footer-area-two footer-bg-two" data-background="assets/img/bg/h2_footer_bg.jpg">
            <div class="footer-top-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-7">
                            <div class="footer-widget">
                                <div class="fw-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer-content">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است.</p>
                                    <div class="footer-info">
                                        <ul class="list-wrap">
                                            <li>
                                                <div class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </div>
                                                <div class="content">
                                                    <a href="tel:0123456789">123 888 9999</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="flaticon-clock"></i>
                                                </div>
                                                <div class="content">
                                                    <p>شنبه – پنج شنبه: 8 صبح – 5 عصر, <br> جمعه : <span>تعطیل</span>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">منو</h4>
                                <div class="footer-link">
                                    <ul class="list-wrap">
                                        <li><a href="about.html">شرکت</a></li>
                                        <li><a href="contact.html">مشاغل</a></li>
                                        <li><a href="contact.html">رسانه های مطبوعاتی</a></li>
                                        <li><a href="blog.html">وبلاگ</a></li>
                                        <li><a href="contact.html">حریم خصوصی</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">دسترسی سریع</h4>
                                <div class="footer-link">
                                    <ul class="list-wrap">
                                        <li><a href="contact.html">چگونه کار می کند</a></li>
                                        <li><a href="contact.html">شرکا</a></li>
                                        <li><a href="contact.html">گواهینامه ها</a></li>
                                        <li><a href="contact.html">مطالعات موردی</a></li>
                                        <li><a href="contact.html">قیمت گذاری</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="footer-widget">
                                <h4 class="fw-title">خبرنامه ما</h4>
                                <div class="footer-newsletter">
                                    <p>با عضویت در خبرنامه از جدیدترین مقاله و تخفیفات ما مطلع شوید.</p>
                                    <form action="#">
                                        <input type="email" placeholder="ایمیل خود را وارد کنید">
                                        <button type="submit">عضویت</button>
                                    </form>
                                    <div class="footer-social footer-social-two">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text-two text-center">
                                <p>تمامی حقوق محفوظ است | فارس کد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/ScrollTrigger.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/gsap-animation.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
