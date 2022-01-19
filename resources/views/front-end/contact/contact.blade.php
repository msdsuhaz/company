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
            <li>Contact</li>
          </ul>
        </div>
      </div>
      <!-- //short-->
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
          <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>
          <div class="row">
            <!--//contact-map -->
            <div class="address_mail_footer_grids col-lg-6 col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
            </div>
            <!--contact-map -->
            <div class="col-lg-6 col-md-6 contact-form-txt">
            <form action="{{route('contact.store')}}" method="post">
              @csrf
                <div class="w3pvt-wls-contact-mid">
                  <div class="form-group contact-forms">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="">
                  </div>
                  <div class="form-group contact-forms">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                  </div>
                  <div class="form-group contact-forms">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required=""> 
                  </div>
                  <div class="form-group contact-forms">
                    <textarea class="form-control" placeholder="Message" rows="3" name="message" required=""></textarea>
                  </div>
                  <button type="submit" class="btn sent-butnn">Send</button>
                </div>
              </form>
              <div class="row mt-lg-5 mt-md-4 mt-3">
                <div class="contact-list-grid col-lg-6 col-md-6 col-sm-6">
                  <h4>Branch 1</h4>
                <p class="pt-2">{{$addr->name}}</p>
                </div>
              </div>
              <div class="row mt-lg-4 mt-3">
                <div class="contact-list-grid col-lg-6 col-md-6 col-sm-6">
                  <h4>Phone</h4>
                  <p class="pt-2">{{$addr->phone}}</p>
                </div>
                <div class="contact-list-grid col-lg-6 col-md-6 col-sm-6">
                  <h4>Email</h4>
                  <p class="pt-2"><a>{{$addr->email}}</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--//contact  -->
    
@endsection