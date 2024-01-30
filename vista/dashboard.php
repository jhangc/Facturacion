<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Menu Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- TARJETAS INFORMATIVAS -->
        <div class="row">
            <!-- tarjeta total de productos -->
            <div class="col-lg-2">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Productos Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a href="#" class="small-box-footer"> Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- tarjeta total de ventas -->
            <div class="col-lg-2">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>S/. 150</h3>
                        <p>Total de compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- tarjeta total de compras -->
            <div class="col-lg-2">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>S/. 150</h3>
                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-pulse"></i>
                    </div>
                    <a href="#" class="small-box-footer"> Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- tarjeta total de ganancias -->
            <div class="col-lg-2">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>S/. 150</h3>
                        <p>Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-barcode"></i>
                    </div>
                    <a href="" class="small-box-footer"> Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- tarjeta total de productos en stock -->
            <div class="col-lg-2">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Productos poco stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-alert"></i>
                    </div>
                    <a href="" class="small-box-footer"> Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- tarjeta total de Ganancias -->
            <div class="col-lg-2">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>S/. 150</h3>
                        <p>Ganancias Dia</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-calendar"></i>
                    </div>
                    <a href="" class="small-box-footer"> Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- GRAFICO DE BARRAS  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Ventas del mes: S/. 1200.00</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 250px; height:300px; max-height:350px; width:100%;">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- LISTA DE PRODUCTOS MAS VENDIDOS -->
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Los 10 productos mas vendidos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_productos_mas_vendidos">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Ventas</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LISTA DE PRODUCTOS POCO STOCK -->
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Listado de productos con poco stock</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_productos_mas_vendidos">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Stock actual</th>
                                        <th>Minimo stock</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>








    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->