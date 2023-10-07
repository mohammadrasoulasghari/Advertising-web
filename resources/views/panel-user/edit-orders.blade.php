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
        <x-side-bar-user :user="$user"></x-side-bar-user>

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
                                                    <th>تعدا پست های خریداری شده</th>
                                                    <th>تاریخ</th>
                                                    <th>وضعیت</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>#12485791</td>
                                                        <td>{{ $order->plan_id }}</td>
                                                        <td>{{ $order->created_at }}</td>
                                                        <td><span class="badge badge-pill badge-success">پرداخت
                                                                شده</span>
                                                        </td>

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
