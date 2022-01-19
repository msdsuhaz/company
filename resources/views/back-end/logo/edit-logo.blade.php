@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage logo</h1>
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
                 <h3>Edit logo
                 <a class="btn btn-success float-right"href="{{route('logo.view')}}"><i class="fa fa-plus-circle"></i>logo list</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('logo.update',$editData->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" required>
                      </div>
                      <div class="form-group">
                      <img  id="showImage" src="{{(!empty($editData->image))?asset('/upload/logo_image/'.$editData->image):asset('/upload/no_image.png')}}">
                      </div>
                    <button type="submit" class="btn btn-success">Update</button>
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