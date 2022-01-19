@extends('front-end.master')

@section('body')

<!--//headder-->
<!-- short -->
<div class="using-border py-3">
  <div class="inner_breadcrumb  ml-4">
    <ul class="short_ls">
      <li>
      <a href="{{url('/')}}">Home</a>
        <span>/ /</span>
      </li>
      <li>About</li>
    </ul>
  </div>
</div>
<!-- //short-->
<!-- about -->
<!-- //short-->
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
          <div class="row">
           <div class="col-lg-6 about-imgs-txt">
               <img src="{{(!empty($aboutdata->image)?asset('/upload/about_image/'.$aboutdata->image):asset('/upload/no_image.png'))}}" alt="news image" class="img-fluid">
            </div>
           <div class="col-lg-6 text-right about-two-grids">
              <h3 class="title  mb-md-4 mb-sm-3 mb-3">{{$aboutdata->header}}</h3>
              <div class="about-para-txt">
              <p class="mt-2">{{$aboutdata->description}}</p>
              </div>
              <div class="view-buttn mt-lg-5 mt-md-4 mt-3">
                <a href="single.html" class=" scroll">Read More</a>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- //about -->
      <!-- stats -->
      <section class="stats-count py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
          <div class="row text-center">
            @foreach ($successdata as $success)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 number-w3three-info ">
              <span class="fa fa-smile-o" data-blast="bgColor"></span>
             <h5>{{$success->number}}</h5>
             <h6 class="pt-2">{{$success->name}}</h6>
             </div>
            @endforeach
          </div>
        </div>
      </section>
      <!--//stats -->
      <section class="blog_w3ls pb-5" id="why">
    
        <div class="container pb-xl-5 pb-lg-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Why Choose Us</h3>
           
              
                <div class="row">
                    @foreach ($choosedata as $choose) 
                    <!-- blog grid -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 med-blog">
                            <div class="card-header p-0">
                                <a href="">
                                    <img class="card-img-bottom" src="{{(!empty($choose->image)?asset('/upload/choose_image/'.$choose->image):asset('/upload/no_image.png'))}}" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body border border-top-0">
                                <div class="mb-3">
                                    <h5 class="blog-title card-title m-0">{{$choose->title}}
                                    </h5>
                                    <div class="blog_w3icon">
                                        <span>
                                          {{$choose->created_by}}</span>
                                    </div>
                                </div>
                                <p> {{$choose->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
           
        </div>
    </section>
    
    
@endsection