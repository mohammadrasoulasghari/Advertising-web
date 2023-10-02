<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="user-profile px-30 py-15">
            <div class="text-center">
                <div class="image">
                    <img src="{{ asset('images/avatar/1.jpg') }}" class="avatar avatar-xxxl box-shadowed" alt="User Image">
                </div>
                <div class="info mt-20">
                    <a class="dropdown-toggle px-20" data-bs-toggle="dropdown" href="#">مختار
                        مینائی</a>
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
                        <a href="{{ route('index.page') }}">
                            <i data-feather="list"></i>
                            <span>لیست آگهی ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('showEditAdverstingPage') }}">
                            <i data-feather="list"></i>
                            <span>لیست آگهی ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add.category') }}">
                            <i data-feather="grid"></i>
                            <span>افزودن دسته بندی</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('delete.category') }}">
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
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="home"></i>
                            <span>نوع ملک</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="apartment.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>آپارتمان</a>
                            </li>
                            <li><a href="office.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>اداره</a>
                            </li>
                            <li><a href="shop.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>خرید
                                    املاک</a></li>
                            <li><a href="villa.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>ویلا</a>
                            </li>
                        </ul>
                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i data-feather="grid"></i>
                            <span>فروشگاه</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="store_index.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>داشبورد</a>
                            </li>
                            <li><a href="product.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>محصولات</a>
                            </li>
                            <li><a href="products_edit.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>ویرایش
                                    محصول</a></li>
                            <li><a href="cart.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>سبد
                                    خرید</a></li>
                            <li><a href="orders.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>سفارشات</a>
                            </li>
                            <li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>صورتحساب</a>
                            </li>
                            <li><a href="product_details.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>جزئیات
                                    محصول</a></li>
                            <li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>فاکتور</a>
                            </li>
                            <li><a href="expenses.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>هزینه
                                    ها</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="users"></i>
                            <span>مشاوران</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="agentslist.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>همه
                                    مشاوران</a></li>
                            <li><a href="addagent.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>عضویت
                                    مشاوران</a></li>
                            <li><a href="agentprofile.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>پروفایل
                                    مشاوران</a></li>
                        </ul>
                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i data-feather="grid"></i>
                            <span>فرم ها-جداول-نمودارها</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="basic_form.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i> دیت
                                    پیکر شمسی</a></li>
                            <li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i> فرم
                                    ویزارد</a></li>
                            <li><a href="general_form.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>فرم
                                    کلی</a></li>
                            <li><a href="form_mask.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>ماسک
                                    فرم</a></li>
                            <li><a href="form_editors.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>ادیتور
                                    ها</a></li>
                            <li><a href="charts-flot.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>فلت
                                    چارت</a></li>
                            <li><a href="charts-chartjs.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>چارت
                                    js</a></li>
                            <li><a href="charts-sparkline.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>اسپارک
                                    لاین</a></li>

                            <li><a href="tables-datatable.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>دیتا
                                    تیبل</a></li>
                            <li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>جداول
                                    ساده</a></li>
                            <li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>جداول
                                    رنگی</a></li>
                        </ul>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="users"></i>
                            <span>رابط کاربری</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>باکس های
                                    پیشرفته</a></li>
                            <li><a href="tabs.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>تب
                                    ها</a></li>
                            <li><a href="buttons.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>دکمه
                                    ها</a></li>
                            <li><a href="colors.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>رنگ
                                    ها</a></li>
                            <li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>باکس
                                    ساده</a></li>
                            <li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>باکس
                                    گروهی</a></li>
                            <li><a href="alerts.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>هشدار
                                    ها</a></li>
                            <li><a href="cards.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>کارد
                                    ها</a></li>
                            <li><a href="sliders.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>اسلایدرها</a></li>
                            <li><a href="s_icon.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>ایکون
                                    ساده</a></li>
                            <li><a href="g_icon.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>گلیف
                                    ایکون</a></li>
                            <li><a href="dropdown.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>دراپ
                                    دان</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="users"></i>
                            <span>امکانات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="modals.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>مدال
                                    ها</a></li>
                            <li><a href="sweetaler.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>سوئیت
                                    الرت</a></li>
                            <li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>باکس
                                    ساده</a></li>
                            <li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>باکس
                                    گروهی</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="reports.html">
                            <i data-feather="pie-chart"></i>
                            <span>گزارشات</span>
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
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="alert-triangle"></i>
                            <span>احراز هویت</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>ورود</a>
                            </li>
                            <li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>ثبت
                                    نام</a></li>
                            <li><a href="auth_lockscreen.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>قفل
                                    صفحه</a></li>
                            <li><a href="auth_user_pass.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>بازیابی
                                    رمز عبور</a></li>
                        </ul>
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
