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

        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <a href="">

                            @foreach ($categories as $item)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body p-0">
                                            <div class="property-bx p-20">
                                                <div>
                                                    <h5 class="text-success mt-0 mb-20">480,000 - 530,000</h5>
                                                    <h3 class="mt-0"><a
                                                            href="{{ route('store.delete.category', $item->id) }}"
                                                            class="text-primary">{{ $item->name }}</a>
                                                    </h3>
                                                    <p class="text-muted"><i class="mdi mdi-pin me-5"></i>ولیعصر - زرتشت
                                                        غربی</p>
                                                    <p class="text-muted mb-0">توضیحات تستی</p>
                                                </div>
                                                <div class="mt-15 fs-18">
                                                    <a href="#" title="Square Feet" class="me-15"><i
                                                            class="mdi mdi-view-dashboard me-10"></i><span>158</span></a>
                                                    <a href="#" title="Bedroom" class="me-15"><i
                                                            class="mdi mdi-hotel me-10"></i><span>4</span></a>
                                                    <a href="#" title="Parking space" class="me-15"><i
                                                            class="mdi mdi-car-taxi me-10"></i><span>2</span></a>
                                                    <a href="#" title="Garages" class="me-15"><i
                                                            class="mdi mdi-home me-10"></i><span> 24H</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </a>
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
