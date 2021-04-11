@extends('admin/layout/layout')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Заказы</h1>
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
            <h3 class="card-title">Заказы</h3>

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
            @if (count($orders))
              <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>ФИО</th>
                    <th>Номер телефона</th>
                    <th>Дата</th>
                    <th>Сумма</th>
                    <th style="width: 40px">Действие</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->created_at->format('H:i:s d/m/Y')}}</td>
                    <td>{{$order->getFullPrice()}}</td>
                    <td>
                    <a href="{{route('admin.show', $order)}}" class="btn btn-info btn-sm float-left mr-1">
                            <i class="fas fa-pencil-alt">Открыть</i>
                        </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            @else
              <div>
                  <p>
                      Нет заказов!
                  </p>
              </div>
            @endif
          </div>
        <!-- /.card-body -->

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              {{-- {{$orders->links()}} --}}
              {{-- <li class="page-item"><a class="page-link" href="#">«</a></li> --}}
              {{-- <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
              {{-- <li class="page-item"><a class="page-link" href="#">»</a></li> --}}
            </ul>
          </div>
        <!-- /.card-footer-->
      </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection