<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Compras</h1>
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
                        <h3 class="card-title">Datos de la compra</h3>

                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <form id="frm-datos-registro-compras" class="needs-validation-registro-compras" novalidate>

                            <input type="hidden" name="id_compra" id="id_compra" value="0">

                            <div class="row mb-2">
                                <!-- RUC PROVEEDOR -->
                                <div class="col-12 col-md-5 col-lg-3 mb-2">
                                    <input type="hidden" name="id_proveedor" id="id_proveedor" value="0">

                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-id-card mr-1 my-text-color"></i> Nro Documento</label>
                                    <div class="input-group input-group-sm mb-3 ">
                                        <span class="input-group-text btnBuscarProveedor" id="inputGroup-sizing-sm" style="cursor: pointer;"><i class="fas fa-search ml-1 text-white "></i></span>
                                        <input type="text" class="form-control form-control-sm readonly" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;" aria-label="Sizing example input" id="proveedor" name="proveedor" aria-describedby="inputGroup-sizing-sm" required>
                                        <div class="invalid-feedback">Ingrese al Proveedor </div>
                                    </div>
                                </div>

                                <!-- RAZON SOCIAL -->
                                <div class="col-12 col-md-5 col-lg-6 mb-2">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-file-signature mr-1 my-text-color"></i> Razón Social/Nombre Completo</label>
                                    <input type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="razon_social" name="razon_social" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                                </div>

                                <!-- FECHA DE COMPRA -->
                                <div class="col-12 col-md-4 col-lg-3 mb-2">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-id-card mr-1 my-text-color"></i> Fecha Registro</label>
                                    <div class="input-group input-group-sm mb-3 ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm" style="cursor: pointer;" data-toggle="datetimepicker" data-target="#fecha_registro"><i class="fas fa-calendar-alt ml-1 text-white"></i></span>
                                        <input type="text" class="form-control form-control-sm datetimepicker-input" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;" aria-label="Sizing example input" id="fecha_registro" name="fecha_registro" aria-describedby="inputGroup-sizing-sm" required>
                                        <div class="invalid-feedback">Ingrese Fecha de Registro</div>
                                    </div>
                                </div>

                                <!-- TIPO COMPROBANTE -->
                                <div class="col-12 col-md-4 col-lg-3 mb-2">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-file-alt mr-1 my-text-color"></i> Comprobante</label>
                                    <select class="form-select" id="tipo_comprobante" name="tipo_comprobante" aria-label="Floating label select example" required>
                                    </select>
                                    <div class="invalid-feedback">Seleccione Tipo de Comprobante</div>
                                </div>

                                <!-- SERIE -->
                                <div class="col-12 col-md-4 col-lg-3 mb-2">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-barcode mr-1 my-text-color"></i>Serie</label>
                                    <input type="text" style="border-radius: 20px;" class="form-control form-control-sm text-uppercase" id="serie" name="serie" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
                                    <div class="invalid-feedback">Ingrese la serie</div>
                                </div>

                                <!-- CORRELATIVO -->
                                <div class="col-12 col-md-4 col-lg-3 mb-2">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-list-ol mr-1 my-text-color"></i>Correlativo</label>
                                    <input type="text" style="border-radius: 20px;" class="form-control form-control-sm" maxlength="8" name="correlativo" id="correlativo" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
                                    <div class="invalid-feedback">Ingrese el correlativo</div>
                                </div>

                                <!-- MONEDA -->
                                <div class="col-12 col-md-4 col-lg-3 mb-2">
                                    <input type="hidden" name="simbolo_moneda" id="simbolo_moneda" value="">
                                    <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-file-alt mr-1 my-text-color"></i> Moneda</label>
                                    <select class="form-select" id="moneda" name="moneda" aria-label="Floating label select example" required>
                                    </select>
                                </div>

                                <!-- BUSCAR PRODUCTO -->
                                <div class="col-12 col-lg-3 d-flex align-items-center ">
                                    <button type="button" class="btn btn-primary">Agregar Producto</button>
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
                        <h3 class="card-title">Detalle de productos</h3>
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-container" style="overflow-x: auto;">
                            <table id="tbl_ListadoProductos" class="table  w-100 shadow border border-secondary">
                                <thead class="bg-main text-left">
                                    <th></th>
                                    <th>Cod Producto</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Cantidad Temp</th>
                                    <th>Costo Unit.</th>
                                    <th>Costo Unit. Temp</th>
                                    <th>Descuento</th>
                                    <th>Descuento Temp</th>
                                    <th>SubTotal</th>
                                    <th>Impuesto</th>
                                    <th>Total</th>
                                    <th>Tipo Afectacion</th>
                                    <th>Factor Igv</th>
                                    <th>% Igv</th>
                                </thead>
                            </table>
                        </div>

                        <div class="col-12 offset-md-6 col-md-6 offset-lg-8 col-lg-4">
                            <div class="row fw-bold">

                                <!-- OP. GRAVADAS -->
                                <div class="col-12">
                                    <span>OP. GRAVADAS</span>
                                    <span class="float-right" id="resumen_opes_gravadas">S/ 0.00</span>
                                </div>

                                <!-- OP. INAFECTAS -->
                                <div class="col-12">
                                    <span>OP. INAFECTAS</span>
                                    <span class="float-right" id="resumen_opes_inafectas">S/ 0.00</span>
                                </div>

                                <!-- OP. EXONERADAS -->
                                <div class="col-12">
                                    <span>OP. EXONERADAS</span>
                                    <span class="float-right" id="resumen_opes_exoneradas">S/
                                        0.00</span>
                                </div>

                                <!-- SUBTOTAL -->
                                <div class="col-12">
                                    <span>SUBTOTAL</span>
                                    <span class="float-right" id="resumen_subtotal">S/ 0.00</span>
                                </div>

                                <!-- IGV -->
                                <div class="col-12">
                                    <span>IGV</span>
                                    <span class="float-right" id="resumen_total_igv">S/ 0.00</span>
                                </div>

                                <!-- DESCUENTO -->
                                <div class="col-12 text-danger">
                                    <span>DESCUENTO</span>
                                    <span class="float-right" id="resumen_total_descuento">S/ 0.00</span>
                                    <hr class="m-1" />
                                </div>

                                <!-- TOTAL -->
                                <div class="col-12 fs-5">
                                    <span>TOTAL</span>
                                    <span class="float-right" id="resumen_total_venta">S/ 0.00</span>
                                </div>

                            </div>

                        </div>

                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12 offset-md-6 col-md-6 offset-lg-8 col-lg-4">
                <div class="row fw-bold">
                    <div class="d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-primary">Guardar Compra</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div><!-- /.container-fluid -->
