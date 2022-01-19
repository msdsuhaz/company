@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Address</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Footer Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                 <h3>Add Address
                 <a class="btn btn-success float-right"href="{{route('address.view')}}"><i class="fa fa-plus-circle"></i>address List</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('address.store')}}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Branch Name:</label>
                        <input type="text" class="form-control" id="name"   name="name" required>
                        @if ($errors->has('name'))
                           <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="number" class="form-control" id="phone"  name="phone" required>
                        @if ($errors->has('phone'))
                          <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <textarea type="text" class="form-control" id="email"  name="email" required></textarea>
                        @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
            
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

 
  <!-- /.content-wrapper -->
@endsection