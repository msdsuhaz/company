@extends('back-end.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Header</h1>
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
                 <h3>Edit Header
                 <a class="btn btn-success float-right"href="{{route('header.view')}}"><i class="fa fa-plus-circle"></i>header List</a>
                 </h3>
              </div>
              <div class="card-body">
              <form action="{{route('header.update',$editdata->id)}}" method="POST" id="myfrom">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" value="{{$editdata->title}}" placeholder="Enter user Roll" name="title" required>
                        @if ($errors->has('title'))
                           <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="header">Header</label>
                        <input type="text" class="form-control" id="header" value="{{$editdata->header}}" placeholder="Enter user name" name="header" required>
                        @if ($errors->has('header'))
                          <span class="text-danger">{{ $errors->first('header') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="paragraph">Paragraph</label>
                      <textarea type="text" class="form-control" id="paragraph"  name="paragraph" required>{{$editdata->paragraph}}</textarea>
                        @if ($errors->has('paragraph'))
                          <span class="text-danger">{{ $errors->first('paragraph') }}</span>
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

  <script type="text/javascript">
    $(document).ready(function () {
      $('#myfrom').validate({
        rules: {
         title: {
            required: true,
          },
          header: {
            required: true,
          },
          paragraph: {
            required: true,
          }
        },
        messages: {
          title: {
            required: "Title most be needed"
          },
          header: {
            required: "Header most be needed"
          },
          paragraph: {
            required: "Paragraph most be needed"
          },
          
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>
  <!-- /.content-wrapper -->
@endsection