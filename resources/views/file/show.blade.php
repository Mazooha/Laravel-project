@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Страница</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Главная</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header d-flex p-3">
                <div class="mr-3">
                  <a href="{{ route('file.edit', $file->id) }}" class="btn btn-primary">Редактировать</a>
                </div>
                <form action="{{ route('file.delete', $file->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
                
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  
                  <tbody>
                    <tr>
                      <td>ID</td>
                      <td>{{ $file->id }}</td>
                    </tr>
                    <tr>
                      <td>Наименование</td>
                      <td>{{ $file->file_name }}</td>
                    </tr>
                    <tr>
                      <td>Страница</td>
                      <td>{{ $page }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            
            </div>
            
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header p-3">Предпросмотр документа</div>
              <div class="card-body">
                <iframe height="100%" width=100% src='{{ asset("storage/" . $file->file_path) }}'></iframe>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection