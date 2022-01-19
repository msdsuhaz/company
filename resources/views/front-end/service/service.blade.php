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
            <li>service</li>
          </ul>
        </div>
      </div>
      <!-- //short-->
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