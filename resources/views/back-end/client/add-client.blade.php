@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Clients</h1>
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
                 <h3>Add client
                 <a class="btn btn-success float-right"href="{{route('clients.view')}}"><i class="fa fa-plus-circle"></i>client List</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('clients.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="Heading">Heading</label>
                        <input type="text" class="form-control" id="Heading"  name="Heading" required>
                        @if ($errors->has('Heading'))
                          <span class="text-danger">{{ $errors->first('Heading') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image"  name="image" required>
                      </div>

                      <div class="form-group">
                        <img  id="showImage" src="{{asset('/upload/no_image.png')}}" width="450px" height="300px">
                        </div>
                      
                      <div class="form-group">
                        <label for="name">Descripton</label>
                        <textarea  type="text" class="form-control" id="description"  name="description"></textarea>
                        @if ($errors->has('description'))
                          <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name"  name="name" required>
                        @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
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
@endsection