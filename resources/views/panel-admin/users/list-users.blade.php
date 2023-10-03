<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fudademo.ir/fudapanel/general_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>قالب ادمین - همه منظوره</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/skin_color.css') }}">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed rtl">



    <div class="wrapper">
        <div id="loader"></div>

        <x-header>
        </x-header>
        <x-side-bar-panel></x-side-bar-panel>

        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif

        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">سفارشات</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">فروشگاه</li>
                                        <li class="breadcrumb-item active" aria-current="page">سفارشات</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="productorder" class="table table-hover no-wrap product-order"
                                            data-page-size="10">
                                            <thead>
                                                <tr>
                                                    <th>مشتری</th>
                                                    <th>سفارش ID</th>
                                                    <th>سطح دسترسی</th>
                                                    <th>تاریخ</th>
                                                    <th>وضعیت</th>
                                                    <th>عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->name }}</td>
                                                        <td>#12485791</td>
                                                        <td>{{ $user->permission }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td><span class="badge badge-pill badge-success">پرداخت
                                                                شده</span>
                                                        </td>
                                                        <td><a href="{{ route('showEditPage', $user->id) }}"
                                                                class="text-info me-10" data-bs-toggle="tooltip"
                                                                data-bs-original-title="ویرایش">
                                                                <i class="ti-marker-alt"></i>
                                                            </a>
                                                            <a href="{{ route('delete.users', $user->id) }}"
                                                                class="text-danger" data-bs-original-title="حذف"
                                                                data-bs-toggle="tooltip">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>


                <!-- /.content -->
            </div>
        </div>


        <!-- /.content -->
    </div>
    </div>
    <!-- /.content-wrapper -->




    <!-- Control Sidebar -->

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
s
