<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Lista de Compras</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Compras</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- row datos generales de la venta -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info shadow">
                    <div class="card-header">
                        <h3 class="card-title">Criterios de Búsqueda</h3>

                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <form id="frm-datos-registro-compras" class="needs-validation-registro-compras" novalidate>

                            <input type="hidden" name="id_compra" id="id_compra" value="0">

                            <div class="row mb-2">
                                <!-- RUC PROVEEDOR -->
                                <div class="col-12 col-lg-3 ">

                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-barcode mr-1 my-text-color"></i>Codigo de la compra</label>
                                    <input data-index="1" type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="iptCodigoBarras" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="col-12 col-lg-3">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Serie de la compra</label>
                                    <input data-index="2" type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="iptProducto" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="col-12 col-lg-3">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Fecha</label>
                                    <input data-index="3" type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="iptProducto" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                            </div>

                        </form>

                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>
        <!-- row para resumen de venta-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info shadow">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Compras</h3>
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-container" style="overflow-x: auto;">
                            <table id="tbl_compras" class="table w-100 shadow border border-secondary">
                                <thead class="bg-main text-left">
                                    <th></th>
                                    <th>Id</th>
                                    <th>Id Proveedor</th>
                                    <th>Proveedor</th>
                                    <th>Fec. Compra</th>
                                    <th>Id Tipo Comprobante</th>
                                    <th>Comprobante</th>
                                    <th>Serie</th>
                                    <th>Correlativo</th>
                                    <th>Moneda</th>
                                    <th>Ope Gravadas</th>
                                    <th>Ope Exoneradas</th>
                                    <th>Ope Inafectas</th>
                                    <th>Total IGV</th>
                                    <th>Descuento</th>
                                    <th>Total Compra</th>
                                    <th>Estado</th>
                                </thead>
                            </table>
                        </div>


                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12 offset-md-6 col-md-6 offset-lg-8 col-lg-4">
                <div class="row fw-bold">
                    <div class="d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-primary">Generar PDF</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div><!-- /.container-fluid -->