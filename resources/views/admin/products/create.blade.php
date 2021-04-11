@extends('admin/layout/layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Продукты</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Создание продукта</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Название продукта">
                      </div>
                      <div class="form-group">
                        <label for="description">Описание</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Описание продукта">
                      </div>
                      <div class="form-group">
                          <label for="quantity">Кол-во</label>
                          <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" placeholder="Кол-во на складе">
                        </div>
                        <div class="form-group">
                          <label for="price">Цена</label>
                          <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Название продукта">
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            <select class="form-control select2" name="category_id" style="width: 100%; @error('category_id') is-invalid @enderror" placeholder="Выбор категории">
                              @foreach ($categories as $k=>$v)
                              <option value="{{$k}}">{{$v}}</option>
                              @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                            <label for="thumbnail">Фото продукта</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Выбрать</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
@endsection
