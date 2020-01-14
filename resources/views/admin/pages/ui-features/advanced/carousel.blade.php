@extends('layouts.admin.dashboard')

@section('title', 'Carousel')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}" />
@endsection

@section('content')
    @adminPageHeader(['title' => 'Carousel', 'item' => 'UI Elements'])
    @endadminPageHeader

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic carousel</h4>
                    <div class="owl-carousel owl-theme full-width">
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_12.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_2.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_1.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Carousel with captions</h4>
                    <div class="owl-carousel owl-theme full-width">
                        <div class="item">
                            <div class="card text-white">
                                <img class="card-img" src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_4.jpg') }}" alt="Card image">
                                <div class="card-img-overlay d-flex">
                                    <div class="mt-auto text-center w-100">
                                      <h3>Third Slide Label</h3>
                                      <h6 class="card-text mb-4 font-weight-normal">Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card text-white">
                                <img class="card-img" src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_5.jpg') }}" alt="Card image">
                                <div class="card-img-overlay d-flex">
                                    <div class="mt-auto text-center w-100">
                                      <h3>Third Slide Label</h3>
                                      <h6 class="card-text mb-4 font-weight-normal">Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card text-white">
                                <img class="card-img" src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_6.jpg') }}" alt="Card image">
                                <div class="card-img-overlay d-flex">
                                    <div class="mt-auto text-center w-100">
                                      <h3>Third Slide Label</h3>
                                      <h6 class="card-text mb-4 font-weight-normal">Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Loop</h4>
                    <div class="owl-carousel owl-theme loop">
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_7.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_8.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_9.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_10.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_11.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_12.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_2.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">non-Loop</h4>
                    <div class="owl-carousel owl-theme nonloop">
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_3.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_5.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_6.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_8.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_11.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lazy load</h4>
                    <div class="owl-carousel owl-theme lazy-load">
                        <img class="owl-lazy" data-src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_8.jpg') }}" data-src-retina="{{ asset('vendor/purple-admin-pro/images/carousel/banner_8.jpg') }}" />
                        <img class="owl-lazy" data-src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_10.jpg') }}" data-src-retina="{{ asset('vendor/purple-admin-pro/images/carousel/banner_10.jpg') }}" />
                        <img class="owl-lazy" data-src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_9.jpg') }}" />
                        <img class="owl-lazy" data-src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_11.jpg') }}" />
                        <img class="owl-lazy" data-src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_6.jpg') }}" />
                        <img class="owl-lazy" data-src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_3.jpg') }}" />
                        <img class="owl-lazy" data-src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_4.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Right to left</h4>
                    <div class="owl-carousel owl-theme rtl-carousel">
                      <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_6.jpg') }}" />
                      </div>
                      <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_9.jpg') }}" />
                      </div>
                      <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_12.jpg') }}" />
                      </div>
                      <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_3.jpg') }}" />
                      </div>
                      <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_7.jpg') }}" />
                      </div>
                      <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_10.jpg') }}" />
                      </div>
                      <div class="item">
                            <img src="{{ asset('vendor/purple-admin-pro/assets/images/carousel/banner_2.jpg') }}" />
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Video</h4>
                    <div class="owl-carousel owl-theme video-carousel">
                        <div class="item-video">
                            <a class="owl-video" href="https://www.youtube.com/watch?v=meBbDqAXago"></a>
                        </div>
                        <div class="item-video">
                            <a class="owl-video" href="https://www.youtube.com/watch?v=Pq9yPrLWMyU"></a>
                        </div>
                        <div class="item-video">
                            <a class="owl-video" href="https://vimeo.com/1084537"></a>
                        </div>
                        <div class="item-video">
                            <a class="owl-video" href="https://vimeo.com/35451452"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/owl-carousel.js') }}"></script>
@endsection
