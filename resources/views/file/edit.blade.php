@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактировать страницу</h1>
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
          <form action="{{ route('file.update', $file->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <input type="text" name="file_name" class="form-controller" value="{{ $file->file_name }}" placeholder="Наименование">
            </div>

            <div class="form-group">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="file_path" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Выберите файл для замены</label>
                </div>
                <!-- <div class="input-group-append">
                  <span class="input-group-text">Загрузить</span>
                </div> -->
              </div>
            </div>

            <div class="form-group">
              <select class="form-control pages" name="page_id" style="width: 100%;">
                <!-- <option selected="selected" disabled>{{ $page->page_name }}</option> -->
                @foreach ($pages as $page)
                    <option value="{{ $page->id }}">{{ $page->page_name }}</option>
                @endforeach
              </select>
              
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
          </form>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection