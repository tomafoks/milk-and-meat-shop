<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERROR 500</title>
</head>
<body>
    <div class="content-wrapper" style="min-height: 1589.56px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Ошибка 500</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('index')}}">На главную</a></li>
                  <li class="breadcrumb-item active">Ошибка 500</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="error-page">
            <h2 class="headline text-danger">500</h2>
    
            <div class="error-content">
              <h3><i class="fas fa-exclamation-triangle text-danger"></i> Опа! что-то пошло не так</h3>
    
              <p>
                We will work on fixing that right away.
                Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
              </p>
    
              <form class="search-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search">
    
                  <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
                <!-- /.input-group -->
              </form>
            </div>
          </div>
          <!-- /.error-page -->
    
        </section>
        <!-- /.content -->
      </div>
</body>
</html>