<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Carga Masiva</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Productos</a></li>
                    <li class="breadcrumb-item active">Carga Masiva</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Fila para input file -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Seleccionar archivo de carga (excel)</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <form action="" method="post" enctype="multipart/form-data" id="form-carga-productos">
                            <div class="row">
                                <div class="col-lg-10">
                                    <input type="file" name="fileProductos" id="fileProductos" class="form-control" accept=".xls, .xlsx">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" value="Cargar Productos" class="btn btn-primary" id="btnCargar">
                                </div>
                            </div>
                        </form>


                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

        <!-- fila para imagen de carga -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <img src="vista/assets/dist/img/loading.gif" style="display: none;">
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->