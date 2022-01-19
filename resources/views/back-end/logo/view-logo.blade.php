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
                @if($counting<1)
                 <h3>Add logo
                 <a class="btn btn-success float-right"href="{{route('logo.add')}}"><i class="fa fa-plus-circle"></i>Add Logo</a>
                 </h3>
                @endif
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Images</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $alldata as $key => $logo)
                    <tr>
                        <td>{{$key++}}</td>
                        <td><img class="profile-user-img img-fluid "
                            src="{{(!empty($logo->image))?asset('/upload/logo_image/'.$logo->image):asset('/upload/no_image.png')}}"
                         alt="User profile picture" width="300px" height="150px"></td>
                        <td>
                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('logo.edit',$logo->id)}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" id ="delete"class="btn btn-sm btn-danger" href="{{route('logo.delete',$logo->id)}}"><i class="fa fa-trash"></i></a>
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