@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Clients</h1>
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
                        <h3>client list
                        <a class="btn btn-success float-right"href="{{route('clients.add')}}"><i class="fa fa-plus-circle"></i>Add Clients</a>
                        </h3>
                    </div>
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Crated</th>
                      <th>Updated</th>
                      <th>Heading</th>
                      <th>image</th>
                      <th>Name</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $alldata as $key => $client)
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{$client->created_by}}</td>
                        <td>{{$client->updated_by}}</td>
                        <td>{{$client->Heading}}</td>
                        <td><img src="{{(!empty($client->image))?asset('/upload/clients_image/'.$client->image):asset('/upload/no_image.png')}}" width="200px" height="150px"></td>
                        <td>{{$client->name}}</td>
                        <td>{{ $client->description}}</td>
                        <td>
                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('clients.edit',$client->id)}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" id ="delete"class="btn btn-sm btn-danger" href="{{route('clients.delete',$client->id)}}"><i class="fa fa-trash"></i></a>
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