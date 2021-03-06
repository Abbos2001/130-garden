@extends('kids.layout')
 
@section('content')
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Galereya</h2>
                <div class="page_link">
                  <a href="{{route('index')}}">Bosh sahifa</a>
                  <a href="#">Galereya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->
        <div class="section-top-border">
        <h3 class="title_color">Bizning rasmlar</h3>
        <div class="row gallery-item">
          <div class="col-md-4">
            <a href="img/elements/g1.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/1.jpg);"></div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="img/elements/2.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/2.jpg);"></div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="img/elements/3.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/3.jpg);"></div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="img/elements/4.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/4.jpg);"></div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="img/elements/5.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/5.jpg);"></div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="img/elements/6.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/6.jpg);"></div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="img/elements/7.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/7.jpg);"></div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="img/elements/g8.jpg" class="img-gal">
              <div class="single-gallery-image" style="background: url(img/elements/g8.jpg);"></div>
            </a>
          </div>
        </div>
      </div>
      
  <!--================ Start footer Area  =================-->
@endsection