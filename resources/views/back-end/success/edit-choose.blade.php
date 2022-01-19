@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Success</h1>
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
                 <h3>Edit Success
                 <a class="btn btn-success float-right"href="{{route('success.view')}}"><i class="fa fa-plus-circle"></i>success List</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('success.update',$editData->id)}}" method="POST"  >
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" value="{{$editData->name}}"  name="name" required>
                        @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <div class="number-input md-number-input">
                            <label for="number">Number</label>
                            <input class="quantity" min="0" value="{{$editData->number}}" type="number"  name="number" >
                        </div>
                        </div>
                        @if ($errors->has('number'))
                          <span class="text-danger">{{ $errors->first('number') }}</span>
                        @endif
                      </div>
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