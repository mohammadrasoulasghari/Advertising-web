<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <!-- Logo -->
        <a href="index-2.html" class="logo">
            <!-- logo-->
            <div class="logo-mini w-30">
                <span class="light-logo"><img src="{{ asset('images/logo-letter.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/logo-letter.png') }}" alt="logo"></span>
            </div>
            <div class="logo-lg">
                <span class="light-logo"><img src="{{ asset('images/logo-dark-text.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/logo-light-text.png') }}" alt="logo"></span>
            </div>
        </a>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-outline no-border"
                        data-toggle="push-menu" role="button">
                        <img src="{{ asset('images/svg-icon/collapse.svg') }}" class="img-fluid svg-icon"
                            alt="">
                    </a>
                </li>
                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="جستجو" aria-label="Search"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon3"><img
                                                src="{{ asset('images/svg-icon/search.svg') }}"
                                                class="img-fluid svg-icon" alt=""></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="btn-group nav-item d-none d-xl-inline-block">
                    <a href="#" class="waves-effect waves-light nav-link btn-outline no-border svg-bt-icon"
                        title="چت">
                        <img src="{{ asset('images/svg-icon/event.svg') }}" class="img-fluid svg-icon" alt="">
                    </a>
                </li>
                <li class="btn-group nav-item d-none d-xl-inline-block">
                    <a href="#" class="waves-effect waves-light btn-outline no-border nav-link svg-bt-icon"
                        title="تسک بار">
                        <img src="{{ asset('images/svg-icon/correct.svg') }}" class="img-fluid svg-icon" alt="">
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen"
                        class="waves-effect waves-light nav-link btn-outline no-border full-screen" title="تمام صفحه">
                        <img src="{{ asset('images/svg-icon/fullscreen.svg') }}" class="img-fluid svg-icon"
                            alt="">
                    </a>
                </li>


                <!-- Notifications -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border"
                        data-bs-toggle="dropdown" title="اعلانات">
                        <img src="{{ asset('images/svg-icon/notifications.svg') }}" class="img-fluid svg-icon"
                            alt="">
                    </a>
                    <ul class="dropdown-menu animated bounceIn">

                        <li class="header">
                            <div class="p-20">
                                <div class="flexbox">
                                    <div>
                                        <h4 class="mb-0 mt-0">اعلانات</h4>
                                    </div>
                                    <div>
                                        <a href="#" class="text-danger">پاک کردن همه</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu sm-scrol">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-info"></i> گروه جدید مشاوران تصمیمات
                                        جدیدی را ...
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-warning"></i> خطایی در ثبت بوجود
                                        امد...
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-danger"></i> بررسی کامل کارشناسان تائید
                                        شد...
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-success"></i> ثبت سفارش جدید
                                        اعلام شد
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-danger"></i> کارشناس جدید هنوز مدارک
                                        خودرا ارسال نکرده است
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-primary"></i>تغییر سطح کاربری ادمین تیکت
                                        ها
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">مشاهده همه</a>
                        </li>
                    </ul>
                </li>

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border"
                        data-bs-toggle="dropdown" title="کاربر">
                        <img src="{{ asset('images/svg-icon/user.svg') }}" class="img-fluid svg-icon"
                            alt="">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i>
                                پروفایل</a>
                            <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i>
                                کیف پول</a>
                            <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i>
                                تنظیمات</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i>خروج</a>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar" title="تنظیمات"
                        class="waves-effect waves-light btn-outline no-border">
                        <img src="images/svg-icon/settings.svg" class="img-fluid svg-icon" alt="">
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</header>
