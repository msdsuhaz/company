@extends('front-end.master')

@section('body')


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
          <a href="{{route('singlepage')}}" class=" scroll">Read More</a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- //about -->
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
  <!-- service -->
  <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Services</h3>
      <div class="row">
  
        @foreach ($servicedata as $key => $service)
        <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
          <div class="ser-Agriculture-grid">
            <div class="about-icon mb-md-4 mb-3">
            <span class="fa fa-apple" aria-hidden="true"></span>
            </div>
            <div class="ser-sevice-grid">
              <h4 class="pb-3">{{$service->name}}</h4>
              <p>{{$service->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- //service -->
  <!-- client -->
  <section class="client py-lg-4 py-md-3 py-sm-3 py-3" id="client">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Clients</h3>
      <div class="row">
        @foreach ($clientdata as $client)
            
          <div class="col-lg-6 col-md-6 col-sm-6 cilent-item text-center">
            <div class="mb-lg-4 mb-3 clients-ile-img">
              <img src="{{(!empty($client->image)?asset('/upload/clients_image/'.$client->image):asset('/upload/no_image.png'))}}" alt=" " class="img-fluid">
            </div>
            <div class="clients-color-ile text-center">
              <p>
                {{$client->description}}
              </p>
              <div class="mt-3 clients-txt-ile">
              <h4>{{$client->name}}</h4>
              </div>
            </div>
          </div>
          
        @endforeach
      </div>
    </div>
  </section>
  <!--//client -->
   <!-- collection -->
  <section class="collection py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Features</h3>
      <!--row -->
      <div class="row">
        @foreach ($featuredata as $feature)
            
        
        <div class="col-lg-7 col-md-6 collection-w3layouts">
          <h4> {{$feature->title}}</h4>
        <p class="mt-2">{{$feature->description}}</p>
          <div class="view-buttn mt-lg-4 mt-3">
            <a href="single.html" class="">Read More</a>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <img src="{{(!empty($feature->image)?asset('/upload/feature_image/'.$feature->image):asset('/upload/no_image.png'))}}" alt="news image" class="img-fluid">
        </div>
      </div>
      @endforeach
      <!--// row -->
    </div>
  </section>
  <!-- collection -->
    
@endsection