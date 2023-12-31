<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fudademo.ir/fudapanel/general_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:52 GMT -->

<x-layout-panel></x-layout-panel>


<body class="hold-transition dark-skin sidebar-mini theme-primary fixed rtl">
    <x-alert></x-alert>
    <div class="wrapper">
        <div id="loader"></div>

        <x-header>
        </x-header>

        <x-side-bar-user :user='$user'></x-side-bar-user>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">اجزای اصلی فرم ها</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">فرم ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">اجزای کلی فرم ها
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">فرم نمونه </h4>
                                </div>
                                <!-- /.box-header -->
                                <form class="form" action="{{ route('update.user.adversting', $adversting->id) }}"
                                    method="POST">
                                    @csrf
                                    <div class="box-body">
                                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>اطلاعات
                                            شخصی</h4>
                                        <hr class="my-15">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">نام محصول</label>
                                                    <input type="text" value="{{ $adversting->name }}" name="name"
                                                        class="form-control" placeholder="نام محصول">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">توضیحات</label>
                                                    <input type="text" value="{{ $adversting->description }}"
                                                        name="description" class="form-control" placeholder="توضیحات">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">شماره تلفن</label>
                                                    <input type="text" value="{{ $adversting->phone_number }}"
                                                        name="phone_number" class="form-control"
                                                        placeholder="شماره تلفن">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">slug</label>
                                                    <input type="text" value="{{ $adversting->slug }}" name="slug"
                                                        class="form-control" placeholder="slug">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">ویرایش آدرس عکس</label>
                                                    <input type="text" value="{{ $adversting->picture_url }}"
                                                        name="picture_url" class="form-control" placeholder="slug">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">دسته بندی خود را ویرایش کنید</label>
                                                <select name="category_id" class="col-md-6 form-control select2"
                                                    style="">
                                                    {{-- <option selected="selected">یکی از موارد زیر را انتخاب کنید</option> --}}
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit">submit</button>
                </section>
                <!-- /.content -->

            </div>
        </div>




        <!-- Control Sidebar -->
        <x-side-bar-panel></x-side-bar-panel>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->




    <!-- Vendor JS -->

    <!-- Vendor JS -->
    <script src="{{ asset('assets-admin/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets-admin/icons/feather-icons/feather.min.js') }}"></script>


    <!-- Master Admin App -->
    <script src="{{ asset('assets-admin/js/template.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor_components/select2/dist/js/select2.full.js') }}"></script>

</body>


<!-- Mirrored from www.fudademo.ir/fudapanel/general_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:52 GMT -->

</html>
