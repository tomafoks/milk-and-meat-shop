@extends('admin/layout/layout')

@section('content')

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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <a href="{{route('products.create')}}" class="btn btn-primary mb-3">
                Добавить продукт
            </a>
            @if (count($products))
              <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th>Статус</th>
                    <th>Фото</th>
                    <th style="width: 40px">Редактирование</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$cat[$product->category_id]}}</td>
                    <td>{{$product->status}}</td>
                    <td>
                    <img src="{{$product->getImage()}}" width="200" alt="фото">
                    </td>
                    <td>
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-info btn-sm float-left mr-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{route('products.destroy', $product->id)}}" method="POST" class="float-left">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердить удаление')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            @else
              <div>
                  <p>
                      Нет продуктов!
                  </p>
              </div>
            @endif
          </div>
        <!-- /.card-body -->

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              {{$products->links()}}
              {{-- <li class="page-item"><a class="page-link" href="#">«</a></li> --}}
              {{-- <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
              {{-- <li class="page-item"><a class="page-link" href="#">»</a></li> --}}
            </ul>
          </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
