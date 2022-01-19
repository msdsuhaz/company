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
            <div class="card"></div>
                    <div class="card-header">
                        <h3>Footar list
                        <a class="btn btn-success float-right"href="{{route('footer.add')}}"><i class="fa fa-plus-circle"></i>Add footer</a>
                        </h3>
                    </div>
             
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Crated</th>
                      <th>Updated</th>
                      <th>hadding</th>
                      <th>facebook</th>
                      <th>twitter</th>
                      <th>Rss</th>
                      <th>Email</th>
                      <th>Instagram</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $alldata as $key => $footer)
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{$footer->created_by}}</td>
                        <td>{{$footer->updated_by}}</td>
                        <td>{{$footer->heading}}</td>
                        <td>{{$footer->facebook}}</td>
                        <td>{{$footer->twitter}}</td>
                        <td>{{$footer->rss}}</td>
                        <td>{{$footer->email}}</td>
                        <td>{{$footer->instagram}}</td>
                        
                        <td>
                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('footer.edit',$footer->id)}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" id ="delete"class="btn btn-sm btn-danger" href="{{route('footer.delete',$footer->id)}}"><i class="fa fa-trash"></i></a>
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