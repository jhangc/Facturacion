<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categorias</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Categorias</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content pb-2">
    <div class="row p-0 m-0">

        <!--LISTADO DE CATEGORIAS -->
        <div class="col-md-8">
            <div class="card card-info shadow">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-list"></i> Listado de Categorias</h3>
                </div>
                <div class="card-body">
                    <table id="tbl_categorias" class="table table-striped w-100 shadow border border-secondary">
                        <thead class="bg-info text-left">
                            <th>id</th>
                            <th>Categoría</th>
                            <!-- <th>Medida</th> -->
                            <th>Estado</th>
                            <th>F. Creación</th>

                        </thead>
                        <tbody class="small text left">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--FORMULARIO PARA REGISTRO Y EDICION -->
        <div class="col-md-4">
            <div class="card card-info shadow">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-edit"></i> Registro de Categorías</h3>
                </div>
                <div class="card-body">

                    <form class="needs-validation-categorias" novalidate>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-floating mb-2">

                                    <input type="text" id="descripcion" class="form-control" name="descripcion" required>
                                    <label for="descripcion">Categoria</label>
                                    <div class="invalid-feedback">Ingrese la categoría</div>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group m-0 mt-2">
                                    <a style="cursor:pointer;" class="btn btn-primary btn-sm w-100" id="btnRegistrarCategoria">Registrar Categoría
                                    </a>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>
<!-- /.content -->