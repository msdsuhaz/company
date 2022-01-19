<div class="main-top" id="home">
<div class="headder-top">
  <!-- nav -->
  <nav >
    <div id="logo">
      <h1><a href="index.html">Mulching</a></h1>
    </div>
    <label for="drop" class="toggle">Menu</label>
    <input type="checkbox" id="drop">
    <ul class="menu mt-2">
    <li class="active"><a href="{{url('/')}}">Home</a></li>
    <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="{{route('about')}}">About</a></li>
      <li><a href="{{route('service')}}">Services</a></li>
      <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
        <!-- First Tier Drop Down -->
        <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
        </label>
        <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
        <input type="checkbox" id="drop-2">
        <ul>
        <li><a href="{{route('gallary')}}" class="drop-text">Gallery</a></li>
          <li><a href="{{route('blog')}}" class="drop-text">Blog</a></li>
        </ul>
      </li>
     <li><a href="{{route('contact')}}">Contact Us</a></li>
    </ul>
  </nav>
  <!-- //nav -->
  </div>
      
<div class="main-banner text-center">
  <div class="container">
    <div class="style-banner">
    <h4 class="mb-2">{{$alldata->title}}</h4>
      <h5>{{$alldata->header}}
      </h5>
    </div>
    <div class="two-demo-button mt-md-4 mt-3">
      <p> {{$alldata->paragraph}} </p>
    </div>
    
</div>
</div>
</div>
  