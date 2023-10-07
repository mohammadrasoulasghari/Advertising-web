<!doctype html>
<html class="no-js" lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>وبلاگ</title>
    <meta name="description" content="Gerow - Business Consulting HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>


    {{-- <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end --> --}}

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <div id="header-fixed-height"></div>
    <header class="header-style-six">
        <div class="heder-top-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="header-top-left">
                            <ul class="list-wrap">
                                <li><i class="flaticon-location"></i>خیابان 256، خیابان مارک، شهر نیویورک</li>
                                <li><i class="flaticon-mail"></i><a href="mailto:test@gmail.com">test@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="header-top-right">
                            <div class="header-contact">
                                <a href="tel:0123456789"><i class="flaticon-phone-call"></i>+123 8989 444</a>
                            </div>
                            <div class="header-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children"><a href="#">خانه</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">سرمایه گذاری</a></li>
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
                                                <li class="active"><a href="blog.html">وبلاگ ما</a></li>
                                                <li><a href="blog-details.html">برگه تکی وبلاگ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">تماس با ما</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul class="list-wrap">
                                        <input type="search" class="header-search" class="flaticon-search"
                                            name="" id="">
                                        <li class="header-search"><a href="#"><i
                                                    class="flaticon-search"></i></a></li>
                                        <li class="header-btn"><a href="contact.html" class="btn btn-two">مشاوره
                                                رایگان</a></li>
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
                                        <input type="text" name="q" placeholder="جستو ...">
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
                            <h2 class="title">... جستو کنید ...</h2>
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" name="search" placeholder="کلمه کلیدی خود را وارد کنید">
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-search-end -->

    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">تمام پست ها</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">وبلاگ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape-wrap">
                <img src="assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="assets/img/images/breadcrumb_shape02.png" alt="">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="inner-blog-wrap">
                    <div class="row justify-content-center">
                        <div class="col-71">
                            <div class="blog-post-wrap">
                                <div class="row">
                                    @foreach ($advertisings as $advertise)
                                        <div class="col-md-6">
                                            <div class="blog-post-item-two">
                                                <div class="blog-post-thumb-two">
                                                    <a href="blog-details.html"><img
                                                            src="assets/img/blog/h3_blog_img01.jpg"
                                                            alt=""></a>
                                                    <a href="blog.html"
                                                        class="tag tag-two">{{ $advertise->created_at }}</a>
                                                </div>
                                                <div class="blog-post-content-two">
                                                    <h2 class="title"><a
                                                            href="blog-details.html">{{ $advertise->name }}</a></h2>
                                                    <p>{{ $advertise->description }}
                                                    </p>
                                                    <div class="blog-meta">
                                                        <ul class="list-wrap">
                                                            <li>
                                                                <a href="blog-details.html"><img
                                                                        src="assets/img/blog/blog_avatar01.png"
                                                                        alt="">امین احمدی</a>
                                                            </li>
                                                            <li><i class="far fa-calendar"></i>تابستان 1402</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="pagination-wrap mt-30">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination list-wrap">
                                            <li class="page-item"><a class="page-link" href="#"><i
                                                        class="fas fa-angle-double-right"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item next-page"><a class="page-link" href="#"><i
                                                        class="fas fa-angle-double-left"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-29">
                            <aside class="blog-sidebar">
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="جستجو ...">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="blog-widget">
                                    <h4 class="bw-title">برترین مقالات</h4>
                                    <div class="rc-post-wrap">
                                        <div class="rc-post-item">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/rc_post01.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span class="date"><i class="far fa-calendar"></i>1402/05/27</span>
                                                <h2 class="title"><a href="blog-details.html">معرفی استارتاپ‌ های
                                                        موفق ایرانی</a></h2>
                                            </div>
                                        </div>
                                        <div class="rc-post-item">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/rc_post02.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span class="date"><i class="far fa-calendar"></i>1402/05/27</span>
                                                <h2 class="title"><a href="blog-details.html">معرفی استارتاپ‌ های
                                                        موفق خارجی</a></h2>
                                            </div>
                                        </div>
                                        <div class="rc-post-item">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/rc_post03.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span class="date"><i class="far fa-calendar"></i>1402/05/27</span>
                                                <h2 class="title"><a href="blog-details.html">تنظیمات اسکیما در
                                                        افزونه یواست سئو</a></h2>
                                            </div>
                                        </div>
                                        <div class="rc-post-item">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/rc_post04.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span class="date"><i class="far fa-calendar"></i>1402/05/27</span>
                                                <h2 class="title"><a href="blog-details.html">بهترین افزونه های حمل و
                                                        نقل ووکامرس</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-widget">
                                    <h4 class="bw-title">برچسب ها</h4>
                                    <div class="bs-tag-list">
                                        <ul class="list-wrap">
                                            <li><a href="#">مالیات</a></li>
                                            <li><a href="#">توسعه وب</a></li>
                                            <li><a href="#">دیتابیس</a></li>
                                            <li><a href="#">آژانس</a></li>
                                            <li><a href="#">مسافرت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->


    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <footer>
        <div class="footer-area footer-bg" data-background="assets/img/bg/footer_bg.jpg">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-3 col-md-7">
                            <div class="footer-widget">
                                <h4 class="fw-title">درباره ما</h4>
                                <div class="footer-info">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-pin"></i>
                                            </div>
                                            <div class="content">
                                                <p>خیابان تجاری 58 فراتون، استرالیا</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <a href="tel:0123456789">+123 888 9999</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-clock"></i>
                                            </div>
                                            <div class="content">
                                                <p>شنبه – پنج شنبه: 8 صبح – 5 عصر, <br> جمعه : <span>تعطیل</span></p>
                                            </div>
                                        </li>
                                    </ul>
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
                        <div class="col-lg-3 col-md-5 col-sm-6">
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
                                    <span>ما برای شما مزاحمت ایجاد نمیکنیم.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="left-sider">
                                <div class="f-logo">
                                    <a href="index.html"><img src="assets/img/logo/w_logo.png" alt=""></a>
                                </div>
                                <div class="copyright-text">
                                    <p>تمامی حقوق محفوظ است | فارس کد</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-social">
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
