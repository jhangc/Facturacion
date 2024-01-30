<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ventas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Ventas</li>
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
                        <h3 class="card-title">Datos de la venta</h3>

                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12 col-lg-2 mb-2">
                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Tipo de comprobante</label>
                                <select data-index="2" class="form-select" id="id_categoria_busqueda" aria-label="Floating label select example" required>
                                    <option value="opcion1">Boleta electrónica</option>
                                    <option value="opcion2">Factura electronica</option>
                                    <option value="opcion3">Nota de venta</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-5 mb-2">
                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Nombre del cliente / <a href="#">Nuevo Cliente</a> </label>
                                <input data-index="2" type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="iptProducto" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="col-12 col-lg-2 mb-2">
                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Fecha </label>
                                <input data-index="3" type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="iptProducto" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="col-12 col-lg-3 d-flex align-items-center ">
                                <button type="button" class="btn btn-primary">Agregar Producto</button>
                            </div>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>
        <!-- row para resumen de venta-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info shadow">
                    <div class="card-header">
                        <h3 class="card-title">Detalle de la venta</h3>
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-container" style="overflow-x: auto;">
                            <table id="tbl_productos" class="table w-100 shadow border border-secondary">
                                <thead class="bg-main">
                                    <tr style="font-size: 15px;">
                                        <th class="text-center">Codigo</th> <!-- 2 -->
                                        <th class="text-center" colspan="2">Descripción</th> <!-- 5 -->
                                        <th class="text-center">Unidad</th> <!-- 5 -->
                                        <th class="text-center">Cantidad</th> <!-- 11 -->
                                        <th class="text-center">Precio Unitario</th> <!-- 14 -->
                                        <th class="text-center">Total</th> <!-- 18 -->
                                        <th class="text-center">Opciones</th> <!-- 24 -->
                                    </tr>
                                </thead>
                                <tbody class="text-small">
                                </tbody>
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

                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Metodo de pago</label>
                                <select data-index="1" class="form-select" id="id_categoria_busqueda" aria-label="Floating label select example" required>
                                    <option value="opcion1">Efectivo</option>
                                    <option value="opcion2">Yape</option>
                                    <option value="opcion3">Plin</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-4 mb-2">
                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Condición de pago</label>
                                <select data-index="2" class="form-select" id="id_categoria_busqueda" aria-label="Floating label select example" required>
                                    <option value="opcion1">Al contado</option>
                                    <option value="opcion2">Credito</option>
                                    <option value="opcion3">Una parte</option>
                                </select>
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
                        <button type="button" class="btn btn-primary">Realizar venta</button>
                    </div>
                </div>

            </div>
        </div>
    </div>





</div><!-- /.container-fluid -->

<!-- /.content -->