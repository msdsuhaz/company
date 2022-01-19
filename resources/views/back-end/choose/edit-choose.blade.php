@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Choose</h1>
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
                 <h3>Add choose
                 <a class="btn btn-success float-right"href="{{route('chooseus.view')}}"><i class="fa fa-plus-circle"></i>choose List</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('chooseus.update',$editData->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="heading">Headding</label>
                    <input type="text" class="form-control" id="heading" value="{{$editData->heading}}"  name="heading" required>
                        @if ($errors->has('heading'))
                          <span class="text-danger">{{ $errors->first('heading') }}</span>
                        @endif
                      </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image"  name="image" >
                    </div>
                    <div class="form-group">
                        <img  id="showImage" src="{{(!empty($editData->image))?asset('/upload/choose_image/'.$editData->image):asset('/upload/no_image.png')}}">
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" value="{{$editData->title}}"  name="title" required>
                        @if ($errors->has('title'))
                           <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                      </div>
                     
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" id="description"  name="description" required>{{$editData->description}}"</textarea>
                        @if ($errors->has('description'))
                          <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
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
@endsection