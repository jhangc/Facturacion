<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inventario</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Inventario</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- row para criterios de busqueda -->
        <div class="row">

            <div class="col-lg-12">
                <div class="card card-info shadow">
                    <div class="card-header">
                        <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                        <!--<div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool text-warning" id="btnLimpiarBusqueda">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>  ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <div class="row">

                            <div class="col-12 col-lg-3 mb-2">

                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-barcode mr-1 my-text-color"></i>Código del Producto</label>
                                <input data-index="1" type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="iptCodigoBarras" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="col-12 col-lg-3 mb-2">
                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-layer-group mr-1 my-text-color"></i> Categorías</label>
                                <select data-index="2" class="form-select" id="id_categoria_busqueda" aria-label="Floating label select example" required>
                                </select>
                            </div>

                            <div class="col-12 col-lg-3 mb-2">
                                <label class="mb-0 ml-1 text-sm my-text-color"><i class="fas fa-gifts mr-1 my-text-color"></i>Producto</label>
                                <input data-index="4" type="text" style="border-radius: 20px;" class="form-control form-control-sm" id="iptProducto" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-primary" id="btnAbrirModalAgregarProducto">Agregar Producto</button>
                            </div>


                        </div>

                    </div> <!-- ./ end card-body -->

                </div>

            </div>

        </div>

        <!-- row para listado de productos/inventario -->
        <div class="row">
            <div class="col-lg-12">
                
                    <table id="tbl_productos" class="table w-100 shadow border border-secondary">
                        <thead class="bg-main">
                            <tr style="font-size: 15px;">
                                <!-- <th> </th> -->
                                <th class="text-center">Codigo</th> <!-- 2 -->
                                <th class="text-center">Nombre</th> <!-- 5 -->
                                <th class="text-center">Categoría</th> <!-- 5 -->
                                <th class="text-center">Precio Unit.</th> <!-- 11 -->
                                <th class="text-center">Precio Mayor</th> <!-- 14 -->
                                <th class="text-center">Unidad Medida</th> <!-- 10 -->
                                <th class="text-center">Stock</th> <!-- 18 -->
                                <th class="text-center">Min. Stock</th> <!-- 19 -->
                                <th class="text-center">Tiene IGV</th> <!-- 19 -->
                                <th class="text-center">Opciones</th> <!-- 24 -->
                            </tr>
                        </thead>
                        <tbody class="text-small">
                            <tr>
                                <th class="text-center">001</th> <!-- 2 -->
                                <th class="text-center">Aceite</th> <!-- 5 -->
                                <th class="text-center">Comida</th> <!-- 5 -->
                                <th class="text-center">S/. 10.00</th> <!-- 11 -->
                                <th class="text-center">S/. 9.45</th> <!-- 14 -->
                                <th class="text-center">dnidad</th> <!-- 10 -->
                                <th class="text-center">5600</th> <!-- 18 -->
                                <th class="text-center">500</th> <!-- 19 -->
                                <th class="text-center">Si</th> <!-- 19 -->
                                <td class="text-center">
                                    <!-- Agregar iconos en lugar de texto para las opciones -->
                                    <button type="button" class="btn btn-warning btn-sm" title="Actualizar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" title="Guardar">
                                        <i class="fas fa-save"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">001</th> <!-- 2 -->
                                <th class="text-center">Aceite</th> <!-- 5 -->
                                <th class="text-center">Servicio</th> <!-- 5 -->
                                <th class="text-center">S/. 10.00</th> <!-- 11 -->
                                <th class="text-center">S/. 9.45</th> <!-- 14 -->
                                <th class="text-center">dnidad</th> <!-- 10 -->
                                <th class="text-center">5600</th> <!-- 18 -->
                                <th class="text-center">500</th> <!-- 19 -->
                                <th class="text-center">Si</th> <!-- 19 -->
                                <td class="text-center">
                                    <!-- Agregar iconos en lugar de texto para las opciones -->
                                    <button type="button" class="btn btn-warning btn-sm" title="Actualizar" id="actualizarProducto">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Eliminar" id="eliminarProducto">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" title="Guardar" id="guardarProducto">
                                        <i class="fas fa-save"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<!-- =============================================================================================================================
VENTA MODAL PARA REGISTRAR O ACTUALIZAR UN PRODUCTO 
===============================================================================================================================-->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">

    <div class="modal-dialog modal-lg" role="document">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title titulo-modal-productos">Agregar Producto</h5>

                <button type="button" class="btn btn-danger text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">

                <form id="frm-datos-producto" class="needs-validation" novalidate>

                    <!-- Abrimos una fila -->
                    <div class="row">

                        <input type="hidden" name="impuesto_producto" id="impuesto_producto">

                        <!-- CODIGO DE BARRAS -->
                        <div class="col-12 col-lg-6">

                            <div class="form-floating mb-2">

                                <input type="text" id="codigo_producto" class="form-control" onchange="validateJS(event, 'codigo_producto')" name="codigo_producto" required>
                                <label for="codigo_producto">Código de Barras</label>

                                <div class="invalid-feedback">Ingrese el codigo del Producto</div>

                            </div>

                        </div>

                        <!-- CATEGORIAS -->
                        <div class="col-12 col-lg-6">

                            <div class="form-floating mb-2">

                                <select class="form-select select2" id="id_categoria" name="id_categoria" aria-label="Floating label select example" required>
                                </select>
                                <label for="id_categoria">Categorías</label>

                                <div class="invalid-feedback">Seleccione la categoría</div>

                            </div>

                        </div>

                        <!-- DESCRIPCION DEL PRODUCTO -->
                        <div class="col-12">

                            <div class="form-floating mb-2">

                                <input type="text" class="form-control text-uppercase" id="descripcion" name="descripcion" required>
                                <label for="descripcion">Descripción</label>

                                <div class="invalid-feedback">Ingrese la descripción</div>

                            </div>

                        </div>

                        <!-- TIPO AFECTACIÓN -->
                        <div class="col-12 col-lg-6">

                            <div class="form-floating mb-2">

                                <select class="form-select select2" id="id_tipo_afectacion_igv" name="id_tipo_afectacion_igv" aria-label="Floating label select example" required>
                                </select>
                                <label for="id_tipo_afectacion_igv">Tipo Afectación</label>

                                <div class="invalid-feedback">Seleccione el Tipo de Afectación</div>

                            </div>

                        </div>

                        <!-- IMPUESTO -->
                        <div class="col-12 col-lg-2">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control form-control-sm" id="impuesto" name="impuesto" readonly>
                                <label for="impuesto">IGV (%) </label>
                            </div>
                        </div>

                        <!-- UNIDAD MEDIDA -->
                        <div class="col-12 col-lg-4">

                            <div class="form-floating mb-2">

                                <select class="form-select select2" id="id_unidad_medida" name="id_unidad_medida" aria-label="Floating label select example" required>
                                </select>
                                <label for="id_unidad_medida">Unidad/Medida</label>

                                <div class="invalid-feedback">Seleccione la Unidad de Medida</div>

                            </div>

                        </div>


                        <!-- IMAGEN -->
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <input type="file" class="form-control form-control-sm" id="imagen" name="imagen" accept="image/*" onchange="previewFile(this)">
                            </div>
                        </div>

                        <!-- PREVIEW IMAGEN -->
                        <div class="col-12 col-lg-5">
                            <div style="width: 100%; height: 255px;">
                                <img id="previewImg" src="vistas/assets/imagenes/no_image.jpg" class="border border-secondary" style="object-fit: fill; width: 100%; height: 100%;" alt="">
                            </div>
                        </div>

                        <div class="col-lg-7">

                            <div class="row">

                                <!-- PRECIO DE VENTA (INC. IGV) -->
                                <div class="col-12 col-lg-6">

                                    <div class="form-floating mb-2">

                                        <input type="number" min="0" class="form-control form-control-sm" id="precio_unitario_con_igv" name="precio_unitario_con_igv" step="0.01" required>
                                        <label for="precio_unitario_con_igv">Precio (con IGV)</label>
                                        <div class="invalid-feedback">Ingrese el Precio del Producto</div>
                                    </div>

                                </div>

                                <!-- PRECIO DE VENTA (SIN. IGV) -->
                                <div class="col-12 col-lg-6">

                                    <div class="form-floating mb-2">

                                        <input type="number" min="0" value="0" class="form-control form-control-sm" id="precio_unitario_sin_igv" name="precio_unitario_sin_igv" step="0.01" readonly>
                                        <label for="precio_unitario_sin_igv">Precio (sin IGV)</label>
                                    </div>

                                </div>

                                <!-- PRECIO DE VENTA x MAYOR (INC. IGV) -->
                                <div class="col-12 col-lg-6">

                                    <div class="form-floating mb-2">

                                        <input type="number" min="0" class="form-control form-control-sm" id="precio_unitario_mayor_con_igv" name="precio_unitario_mayor_con_igv" step="0.01">
                                        <label for="precio_unitario_mayor_con_igv">Precio x Mayor (con IGV)</label>

                                    </div>

                                </div>

                                <!-- PRECIO DE VENTA x MAYOR (SIN. IGV) -->
                                <div class="col-12 col-lg-6">

                                    <div class="form-floating mb-2">

                                        <input type="number" min="0" value="0" class="form-control form-control-sm" id="precio_unitario_mayor_sin_igv" name="precio_unitario_mayor_sin_igv" step="0.01" readonly>
                                        <label for="precio_unitario_mayor_sin_igv">Precio x Mayor (sin IGV)</label>

                                    </div>

                                </div>

                                <!-- PRECIO VENTA EN OFERTA (INC. IGV) -->
                                <div class="col-12 col-lg-6">

                                    <div class="form-floating mb-2">

                                        <input type="number" min="0" class="form-control form-control-sm" id="precio_unitario_oferta_con_igv" name="precio_unitario_oferta_con_igv" step="0.01">
                                        <label for="precio_unitario_oferta_con_igv">Precio Oferta (con IGV)</label>

                                    </div>

                                </div>

                                <!-- PRECIO VENTA EN OFERTA (SIN. IGV) -->
                                <div class="col-12 col-lg-6">

                                    <div class="form-floating mb-2">

                                        <input type="number" min="0" class="form-control form-control-sm" id="precio_unitario_oferta_sin_igv" name="precio_unitario_oferta_sin_igv" value="0" step="0.01" readonly>
                                        <label for="precio_unitario_oferta_sin_igv">Precio Oferta (sin IGV)</label>

                                    </div>

                                </div>

                                <!-- MINIMO STOCK -->
                                <div class="col-12 col-lg-12">
                                    <div class="form-floating mb-2">
                                        <input type="number" min="0" class="form-control form-control-sm" id="minimo_stock" name="minimo_stock">
                                        <label for="minimo_stock">Mínimo Stock</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- BOTONERA -->
                        <div class="col-12 text-right">
                            <!-- <a type="button" class="btn btn-outline-danger mt-1 mx-1" style="width:170px;" data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</a>
                            <a style="width:170px;" class="btn btn-outline-success mt-1 mx-1" id="btnGuardarProducto">Guardar Producto</a> -->

                            <a class="btn btn-danger  fw-bold " id="btnCancelarRegistro" style="position: relative; width: 160px;">
                                <span class="text-button">CANCELAR</span>
                                <span class="btn fw-bold icon-btn-danger ">
                                    <i class="fas fa-times fs-5 text-white m-0 p-0"></i>
                                </span>
                            </a>

                            <a class="btn btn-success  fw-bold " id="btnGuardarProducto" style="position: relative; width: 160px;">
                                <span class="text-button">GUARDAR</span>
                                <span class="btn fw-bold icon-btn-success ">
                                    <i class="fas fa-save fs-5 text-white m-0 p-0"></i>
                                </span>
                            </a>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>


</div>
<!-- /. End -->

<!-- =============================================================================================================================
VENTA MODAL PARA AUMENTAR O DISMINUIR EL STOCK DEL PRODUCTO
===============================================================================================================================-->
<div class="modal fade" id="mdlGestionarStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Adicionar Stock</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12 mb-3">
                        <label for="" class="form-label text-primary d-block">Codigo: <span id="stock_codigoProducto" class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Producto: <span id="stock_Producto" class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Stock: <span id="stock_Stock" class="text-secondary"></span></label>
                    </div>

                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptStockSumar">
                                <i class="fas fa-plus-circle fs-6"></i> <span class="small" id="titulo_modal_label">Agregar al Stock</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptStockSumar" placeholder="Ingrese cantidad a agregar al Stock">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label text-danger">Nuevo Stock: <span id="stock_NuevoStock" class="text-secondary"></span></label><br>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <a class="btn btn-secondary btn-sm" data-bs-dismiss="modal" id="btnCancelarRegistroStock">Cancelar</a>
                <a class="btn btn-primary btn-sm" id="btnGuardarNuevorStock">Guardar</a>
            </div>

        </div>
    </div>
</div>
<!-- /. End -->

<script>
document.getElementById('btnAbrirModalAgregarProducto').addEventListener('click', function() {
    // Utiliza el método modal de Bootstrap para mostrar la ventana modal
    $('#mdlGestionarProducto').modal('show');
});
document.getElementById('actualizarProducto').addEventListener('click', function() {
    // Utiliza el método modal de Bootstrap para mostrar la ventana modal
    $('#mdlGestionarStock').modal('show');
});

</script>