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
            <div class="card"></div>
                    <div class="card-header">
                        <h3>feature list
                        <a class="btn btn-success float-right"href="{{route('feature.add')}}"><i class="fa fa-plus-circle"></i>Add Feature</a>
                        </h3>
                    </div>
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Crated</th>
                      <th>Updated</th>
                      <th>title</th>
                      <th>Description</th>
                      <th>image</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $alldata as $key => $feature)
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{$feature->created_by}}</td>
                        <td>{{$feature->updated_by}}</td>
                        <td>{{$feature->title}}</td>
                        <td>{{$feature->description}}</td>
                        <td><img src="{{(!empty($feature->image))?asset('/upload/feature_image/'.$feature->image):asset('/upload/no_image.png')}}" width="200px" height="150px"></td>
                        <td>
                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('feature.edit',$feature->id)}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" id ="delete"class="btn btn-sm btn-danger" href="{{route('feature.delete',$feature->id)}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tfoot>
                  </table>
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