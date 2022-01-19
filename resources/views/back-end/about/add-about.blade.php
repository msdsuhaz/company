@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage About</h1>
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
                 <h3>Add About
                 <a class="btn btn-success float-right"href="{{route('about.view')}}"><i class="fa fa-plus-circle"></i>about list</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="header">Hader:</label>
                        <input type="text" class="form-control" id="header" name="header" required>
                      </div>
                      <div class="form-group" >
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" rows="4" cols="50" name="description" required></textarea>
                      </div>

                      <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="editor" id="image" placeholder="Enter image" name="image" required>
                      </div>
                      <div class="form-group">
                      <img  id="showImage" src="{{asset('/upload/no_image.png')}}">
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