<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="user-profile px-30 py-15">
            <div class="text-center">
                <div class="image">
                    <img src="{{ asset('images/avatar/1.jpg') }}" class="avatar avatar-xxxl box-shadowed" alt="User Image">
                </div>
                <div class="info mt-20">
                    <a class="dropdown-toggle px-20" data-bs-toggle="dropdown" href="#">{{ $user->name }} عزیز
                        وقتت بخیر</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="ti-user"></i>پروفایل</a>
                        <a class="dropdown-item" href="#"><i class="ti-email"></i>صندوق ورودی</a>
                        <a class="dropdown-item" href="#"><i class="ti-link"></i>ارتباطات</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="ti-settings"></i>تنظیمات</a>
                    </div>
                </div>
            </div>
            <ul class="list-inline profile-setting mt-20 mb-0 d-flex justify-content-center">
                <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"><i
                            data-feather="search"></i></a></li>
                <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"><i
                            data-feather="bell"></i></a></li>
                <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"><i
                            data-feather="message-square"></i></a></li>
                <li><a href="auth_login.html" data-bs-toggle="tooltip" data-bs-placement="top"><i
                            data-feather="log-out"></i></a></li>
            </ul>
        </div>
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">منو</li>
                    <li>
                        <a href="index-2.html">
                            <i data-feather="compass"></i>
                            <span>داشبورد</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add.adversting') }}">
                            <i data-feather="list"></i>
                            <span>افزودن آگهی</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('showDeleteAdverstingPage') }}">
                            <i data-feather="list"></i>
                            <span>ویرایش آگهی</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add.category') }}">
                            <i data-feather="grid"></i>
                            <span>افزودن دسته بندی</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('edit.category') }}">
                            <i data-feather="award"></i>
                            <span>ویرایش دسته بندی ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="propertydetails.html">
                            <i data-feather="file-text"></i>
                            <span>جزئیات ملک</span>
                        </a>
                    </li>

                    <li class="header">اپلیکیشن ها</li>
                    <li>
                        <a href="mailbox.html">
                            <i data-feather="mail"></i>
                            <span>صندوق ایمیل</span>
                        </a>
                    </li>
                    <li>
                        <a href="file-manager.html">
                            <i data-feather="file-plus"></i>
                            <span>فایل منیجر</span>
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <i data-feather="phone-call"></i>
                            <span>ارتباطات</span>
                        </a>
                    </li>

                </ul>

                <div class="sidebar-widgets">
                    <div class="copyright text-start m-25">
                        <p><strong class="d-block">قالب پنل مدیریت فوداتم</strong> © 2023 حق کپی رایت محفوظ
                            است</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
