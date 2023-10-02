<section class="features-area-two pt-80">
    <div class="container">
        <h2 class="title">لیست دسته بندی ها</h2>
        <div class="features-item-wrap">
            <div class="row justify-content-center">
                @foreach ($categories as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-two">
                            <div class="features-icon-two">
                                <i class="flaticon-profit"></i>
                            </div>
                            <div class="features-content-two">
                                <h4 class="title">{{ $item->name }}</h4>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
