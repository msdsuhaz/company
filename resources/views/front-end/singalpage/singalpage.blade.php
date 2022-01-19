@extends('front-end.master')

@section('body')


  <!-- short -->
  <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
          <a href="index.html">Home</a>
          <span>/ /</span>
        </li>
        <li>Singe Page</li>
      </ul>
    </div>
  </div>
  <!-- //short-->
  <!--single page-->
  <section class="single page py-lg-4 py-md-3 py-sm-3 py-3" id="single-page">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-center">Single Page </h3>
      <div class="row">
        <div class="col-lg-6 color-img-three">
          <img src="{{(!empty($aboutdata->image)?asset('/upload/about_image/'.$aboutdata->image):asset('/upload/no_image.png'))}}" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-6 blog-left-sub">
          <h4 class="pb-3">{{$aboutdata->header}}</h4>
          <p>{{$aboutdata->description}}
          </p>
          <div class="row mt-lg-4 mt-md-4 mt-3">
            <div class="col-lg-6 col-md-6 col-6 blog-image">
              <p class="mt-2">{{$aboutdata->created_by}}</p>
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
      <div class="newsletter mt-lg-5 mt-md-4 mt-3">
        <h4 class="mb-3">Subscribe to our newsletter</h4>
        <form action="#" method="post" class="d-flex">
          <input type="email" name="Your Email" class="form-control" placeholder="Your Email" required="">
          <button class="btn1">
          <span class="fa fa-envelope" aria-hidden="true"></span>
          </button>
        </form>
      </div>
      <div class="comments-w3layouts-grid pt-lg-5 pt-md-4 pt-3">
        <div class="comments-grid-right mb-lg-4 mb-3">
          <h4>Our Recent Comments</h4>
        </div>
        <div class="comment-list mb-lg-4 mb-3">
          <div class="row pt-3">
            <div class="col-lg-2 col-md-3 col-sm-3 comment-imgs ">
              <img src="images/cc1.jpg" alt=" " class="img-fluid">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 single-title text-left">
              <h4>Michael Crisp</h4>
              <p class="my-2">Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit<br>
                amet scelerisque massa. Duis porta risus id urna finibus aliquet.
              </p>
              <ul>
                <li>5 December 2016 <i>|</i></li>
                <li><a href="single.html" class="clr-two">Reply</a></li>
              </ul>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-lg-2 col-md-3 col-sm-3 comment-imgs ">
              <img src="images/cc2.jpg" alt=" " class="img-fluid">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 single-title text-left">
              <h4>Michael Crisp</h4>
              <p class="my-2">Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit<br>
                amet scelerisque massa. Duis porta risus id urna finibus aliquet.
              </p>
              <ul>
                <li>5 December 2016 <i>|</i></li>
                <li><a href="single.html" class="clr-two">Reply</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!--//comments-->
        <!--comments-form-->
        <div class="pt-3 form-comment">
          <div class="mb-3 comments-grid-right text-left">
            <h4>Leave a Comment</h4>
          </div>
          <form class="pt-lg-2" action="#" method="post">
            <div class="row wls-contact-mid">
              <div class="col-lg-6 form-group contact-forms">
                <input type="text" class="form-control" placeholder="Name" required="">
              </div>
              <div class="col-lg-6 form-group contact-forms">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
            </div>
            <div class="form-group contact-forms mb-0">
              <textarea class="form-control" placeholder="Message" rows="2" required=""></textarea>
            </div>
            <button type="submit" class="btn mt-lg-4 mt-3 sent-butnn">Submit</button>
          </form>
          <!--//comments-form-->
        </div>
      </div>
    </div>
  </section>

@endsection