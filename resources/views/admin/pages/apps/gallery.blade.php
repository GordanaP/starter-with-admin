@extends('layouts.admin.vendor_dashboard')

@section('title', 'Gallery')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/lightgallery/css/lightgallery.css') }}">
@endsection

@section('content')
    @adminPageHeader(['title' => 'Gallery', 'item' => 'Apps'])
    @endadminPageHeader

    <div class="row grid-margin">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">light Gallery</h4>
            <p class="card-text"> Click on any image to open in lightbox gallery </p>
            <div id="lightgallery" class="row lightGallery">
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/1.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/1.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/2.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/2.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/3.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/3.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/4.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/4.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/5.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/5.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/6.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/6.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/7.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/7.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/8.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/8.jpg') }}" alt="image small"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row grid-margin">
      <div class="col-lg-12">
        <div class="card px-3">
          <div class="card-body">
            <h4 class="card-title">Without Thumbnails</h4>
            <div id="lightgallery-without-thumb" class="row lightGallery">
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/9.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/9.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/10.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/10.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/11.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/11.jpg') }}" alt="image small"></a>
              <a href="{{ asset('vendor/purple-admin-pro/assets/images/samples/1280x768/12.jpg') }}" class="image-tile"><img src="{{ asset('vendor/purple-admin-pro/assets/images/samples/300x300/12.jpg') }}" alt="image small"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card px-3">
          <div class="card-body">
            <h4 class="card-title">Video Gallery</h4>
            <div id="video-gallery" class="row lightGallery">
              <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="https://www.youtube.com/watch?v=meBbDqAXago">
                <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/thumb-v-y-1.jpg') }}" alt="image" />
                <div class="demo-gallery-poster">
                  <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/play-button.png') }}" alt="image">
                </div>
              </a>
              <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="https://www.youtube.com/watch?v=Pq9yPrLWMyU">
                <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/thumb-v-y-2.jpg') }}" alt="image" />
                <div class="demo-gallery-poster">
                  <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/play-button.png') }}" alt="image">
                </div>
              </a>
              <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="https://vimeo.com/1084537">
                <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/thumb-v-v-1.jpg') }}" alt="image" />
                <div class="demo-gallery-poster">
                  <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/play-button.png') }}" alt="image">
                </div>
              </a>
              <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="https://vimeo.com/35451452">
                <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/thumb-v-v-2.jpg') }}" alt="image" />
                <div class="demo-gallery-poster">
                  <img src="{{ asset('vendor/purple-admin-pro/assets/images/lightbox/play-button.png') }}" alt="image">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/lightgallery/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/light-gallery.js') }}"></script>
@endsection