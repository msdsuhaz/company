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
                @if($countable<4)
                    <div class="card-header">
                        <h3>Success list
                        <a class="btn btn-success float-right"href="{{route('success.add')}}"><i class="fa fa-plus-circle"></i>Add Success</a>
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
                      <th>Number</th>
                      <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $alldata as $key => $success)
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{$success->created_by}}</td>
                        <td>{{$success->Updated_by}}</td>
                        <td>{{$success->number}}</td>
                        <td>{{$success->name}}</td>
                        <td>
                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('success.edit',$success->id)}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" id ="delete"class="btn btn-sm btn-danger" href="{{route('success.delete',$success->id)}}"><i class="fa fa-trash"></i></a>
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