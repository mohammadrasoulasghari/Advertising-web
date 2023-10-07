<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fudademo.ir/fudapanel/general_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:52 GMT -->

<x-layout-panel></x-layout-panel>


<body class="hold-transition dark-skin sidebar-mini theme-primary fixed rtl">



    <div class="wrapper">
        <div id="loader"></div>

        <x-header>
        </x-header>
        <x-side-bar-user :user='$user'></x-side-bar-user>

        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif

        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <a href="">

                            @foreach ($adversting as $item)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="box">
                                        <div class="box-body p-0">
                                            <div class="property-bx p-20">
                                                <div>
                                                    <h5 class="text-success mt-0 mb-20">480,000 - 530,000</h5>
                                                    <h3 class="mt-0"><a href=""
                                                            class="text-primary">{{ $item->name }}</a>
                                                    </h3>
                                                    <p class="text-muted"><i class="mdi mdi-pin me-5"></i>icon:
                                                        {{ $item->icon }}</p>
                                                    <p class="text-muted"><i class="mdi mdi-pin me-5"></i>icon:
                                                        {{ $item->category_id }}</p>
                                                    <p class="text-muted mb-0">توضیحات:{{ $item->description }}</p>
                                                </div>
                                                <a href="{{ route('advertising.destroy', $item->id) }}">
                                                    <button type="submit"
                                                        class="bg-gradient-danger waves-effect waves-light">حذف این
                                                        دسته
                                                        بندی</button>
                                                </a>
                                                <a href="{{ route('advertising.update', $item->id) }}">
                                                    <button type="submit"
                                                        class="bg-gradient-warning waves-effect waves-light">ویرایش
                                                        این دسته بندی</button>
                                                </a>
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
