 @php
      $prefix = Request::route()->getPrefix();
      $route =Route::current()->getName();
 @endphp
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('/')}}/admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{(!empty(Auth::user()->image))?asset('/upload/user_image/'.Auth::user()->image):asset('/upload/no_image.png')}}">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         @if(Auth::user()->usertype =='Admin')
          <li class="nav-item has-treeview {{($prefix=='/user')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('user.view')}}" class="nav-link {{($route=='user.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view user</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item has-treeview  {{($prefix=='/profile')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('profile.view')}}" class="nav-link {{($route=='profile.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>your profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('password.view')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Change password</p>
                  </a>
                </li>
            </ul>
          </li>
          <li class="nav-item has-treeview  {{($prefix=='/logo')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage logo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('logo.view')}}" class="nav-link {{($route=='logo.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view logo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{($prefix=='/header')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage header
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('header.view')}}" class="nav-link {{($route=='header.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view header</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{($prefix=='/about')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage About
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('about.view')}}" class="nav-link {{($route=='about.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view about</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{($prefix=='/chooseus')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage choose Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('chooseus.view')}}" class="nav-link  {{($route=='chooseus.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view chooseus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{($prefix=='/success')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Success
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('success.view')}}" class="nav-link {{($route=='success.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Success</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Service
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('service.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Service</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Clients
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('clients.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Clients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Address
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('address.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Address</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Feature
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('feature.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view feature</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Footer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('footer.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Footer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Manage Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('contact.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view contact</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
