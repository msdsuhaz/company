@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Feature</h1>
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
                 <a class="btn btn-success float-right"href="{{route('feature.view')}}"><i class="fa fa-plus-circle"></i>feature List</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('feature.update',$editdata->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" value="{{$editdata->title}}" name="title" required>
                        @if ($errors->has('title'))
                          <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="description">Descripton</label>
                        <textarea  type="text" class="form-control" id="description"  name="description">{{$editdata->description}}</textarea>
                        @if ($errors->has('description'))
                          <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image"  name="image" >
                      </div>

                      <div class="form-group">
                        <img  id="showImage" src="{{(!empty($editdata->image))?asset('/upload/feature_image/'.$editdata->image):asset('/upload/no_image.png')}}" width="200px" height="150px">
                        </div>

                    

                    <button type="submit" class="btn btn-success">update</button>
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