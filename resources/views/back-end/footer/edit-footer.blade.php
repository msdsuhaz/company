@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Footer</h1>
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
                 <h3>Add Footer
                 <a class="btn btn-success float-right"href="{{route('footer.view')}}"><i class="fa fa-plus-circle"></i>footer List</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('footer.update',$editdata->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="heading">heading</label>
                      <input type="text" class="form-control" id="heading" value="{{$editdata->heading}}" name="heading" required>
                        @if ($errors->has('heading'))
                          <span class="text-danger">{{ $errors->first('heading') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" value="{{$editdata->facebook}}" name="facebook" required>
                        @if ($errors->has('facebook'))
                          <span class="text-danger">{{ $errors->first('facebook') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="twitter">twitter</label>
                        <input type="text" class="form-control" id="twitter"  value="{{$editdata->twitter}}"    name="twitter" required>
                        @if ($errors->has('twitter'))
                          <span class="text-danger">{{ $errors->first('twitter') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="rss">rss</label>
                        <input type="text" class="form-control" id="rss"  value="{{$editdata->rss}}"   name="rss" required>
                        @if ($errors->has('rss'))
                          <span class="text-danger">{{ $errors->first('rss') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email"  value="{{$editdata->email}}"   name="email" required>
                        @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="instagram">instagram</label>
                        <input type="text" class="form-control" id="instagram"  value="{{$editdata->instagram}}"   name="instagram" required>
                        @if ($errors->has('instagram'))
                          <span class="text-danger">{{ $errors->first('instagram') }}</span>
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