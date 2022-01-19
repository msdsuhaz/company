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
              @if($countdata<3)
              <div class="card-header">
                 <h3>Choose list
                 <a class="btn btn-success float-right"href="{{route('chooseus.add')}}"><i class="fa fa-plus-circle"></i>Add Choose</a>
                 </h3>
              </div>
              @endif
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Crated</th>
                      <th>Updated</th>
                      <th>Headding</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $alldata as $key => $choose)
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{$choose->created_by}}</td>
                        <td>{{$choose->updated_by}}</td>
                        <td>{{$choose->heading}}</td>
                        <td><img src="{{(!empty($choose->image))?asset('/upload/choose_image/'.$choose->image):asset('/upload/no_image.png')}}" width="300px" height="150px"></td>
                        <td>{{$choose->title}}</td>
                        <td>{{$choose->description}}</td>
                        <td>
                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('chooseus.edit',$choose->id)}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" id ="delete"class="btn btn-sm btn-danger" href="{{route('chooseus.delete',$choose->id)}}"><i class="fa fa-trash"></i></a>
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