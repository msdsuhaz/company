@extends('front-end.master')
@section('body')

   <!--//headder-->
    <!-- short -->
    <div class="using-border py-3">
        <div class="inner_breadcrumb  ml-4">
          <ul class="short_ls">
            <li>
            <a href="{{route('home')}}">Home</a>
              <span>/ /</span>
            </li>
            <li>Gallery</li>
          </ul>
        </div>
      </div>
      <!-- //short-->
      <!--Gallery-->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
          <h3 class="title mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-center"> Our Gallery</h3>
          <div class="row gallery-info">
            <div class="col-lg-4 col-md-4 col-sm-4 gallery-img-grid p-0">
              <div class="gallery-grids">
                <a href="#gal1"><img src="front/images/g1.jpg" alt="news image" class="img-fluid"></a>
              </div>
              <div class="gallery-grids">
                <a href="#gal2"><img src="front/images/g2.jpg" alt="news image" class="img-fluid"></a>
              </div>
              <div class="gallery-grids">
                <a href="#gal3"><img src="front/images/g3.jpg" alt="news image" class="img-fluid"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery-img-grid p-0">
              <div class="gallery-grids">
                <a href="#gal4"><img src="front/images/g4.jpg" alt="news image" class="img-fluid"></a>
              </div>
              <div class="gallery-grids">
                <a href="#gal5"><img src="front/images/g5.jpg" alt="news image" class="img-fluid"></a>
              </div>
              <div class="gallery-grids">
                <a href="#gal6"><img src="front/images/g6.jpg" alt="news image" class="img-fluid"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 gallery-img-grid p-0">
              <div class="gallery-grids">
                <a href="#gal7"><img src="front/images/4.jpg" alt="news image" class="img-fluid"></a>
              </div>
              <div class="gallery-grids">
                <a href="#gal8"><img src="front/images/2.jpg" alt="news image" class="img-fluid"></a>
              </div>
              <div class="gallery-grids">
                <a href="#gal9"><img src="front/images/3.jpg" alt="news image" class="img-fluid"></a>
              </div>
            </div>
          </div>
          <!-- popup-->
          <div id="gal1" class="popup-effect">
            <div class="popup">
              <img src="front/images/g1.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal2" class="popup-effect">
            <div class="popup">
              <img src="front/images/g2.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal3" class="popup-effect">
            <div class="popup">
              <img src="front/images/g3.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal4" class="popup-effect">
            <div class="popup">
              <img src="front/images/g4.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal5" class="popup-effect">
            <div class="popup">
              <img src="front/images/g5.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal6" class="popup-effect">
            <div class="popup">
              <img src="front/images/g6.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal7" class="popup-effect">
            <div class="popup">
              <img src="front/images/4.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal8" class="popup-effect">
            <div class="popup">
              <img src="front/images/2.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal9" class="popup-effect">
            <div class="popup">
              <img src="front/images/3.jpg" alt="Popup Image" class="img-fluid" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
        </div>
      </section>
      <!--//Gallery-->
    
@endsection