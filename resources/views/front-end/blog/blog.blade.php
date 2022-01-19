@extends('front-end.master')
@section('body')
   <!-- short -->
   <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
        <a href="{{route('home')}}">Home</a>
          <span>/ /</span>
        </li>
        <li>Blog</li>
      </ul>
    </div>
  </div>
  <!-- //short-->
  <!--blog-->
  <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-center"> Latest Blog</h3>
      <div class="row">
        <div class="col-lg-6 color-img-three">
          <a href="{{route('singlepage')}}"><img src="front/images/1.jpg" alt="news image" class="img-fluid"></a>
        </div>
        <div class="col-lg-6 blog-left-sub">
          <h4 class="pb-3"><a href="{{route('singlepage')}}">Vestibulum nibh urna, euismod ut ornare non Lorem</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet Lorem ipsum dolor
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet Lorem ipsum dolor
          </p>
          <div class="row mt-lg-4 mt-md-4 mt-3">
            <div class="col-lg-6 col-md-6 col-6 blog-image">
              <img src="front/images/bg1.jpg" alt="news image" class="img-fluid">
              <p class="mt-2">by Lolly Mess</p>
            </div>
            <div class="blog-date-time col-lg-6 col-md-6 col-6 text-right pt-lg-4">
              <ul>
                <li><span class="fa fa-heart" aria-hidden="true"></span><a href="single.html">7</a></li>
                <li><span class="fa fa-comments" aria-hidden="true"></span><a href="single.html">5</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-lg-5 mt-md-4 mt-3">
        <div class="col-lg-6 blog-left-sub">
          <h4 class="pb-3"><a href="single.html">Vestibulum nibh urna, Change Your Agriculture</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet Lorem ipsum dolor
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet Lorem ipsum dolor
          </p>
          <div class="row mt-lg-4 mt-md-4 mt-3">
            <div class="col-lg-6 col-md-6 col-6 blog-image">
              <img src="front/images/bg1.jpg" alt="news image" class="img-fluid">
              <p class="mt-2">by Lolly Mess</p>
            </div>
            <div class="blog-date-time col-lg-6 col-md-6 col-6 text-right pt-lg-4">
              <ul>
                <li><span class="fa fa-heart" aria-hidden="true"></span><a href="single.html">7</a></li>
                <li><span class="fa fa-comments" aria-hidden="true"></span><a href="single.html">5</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 color-img-three">
          <a href="single.html"><img src="front/images/2.jpg" alt="news image" class="img-fluid"></a>
        </div>
      </div>
    </div>
  </section>
    
@endsection