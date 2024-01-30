<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="vista/assets/dist/img/iconoprincipal.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">"Grupo Mupsa Perú"</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="vista/assets/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrador</a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link active" onclick="cargarContenido('vista/dashboard.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Menu Principal
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Producto
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/productos.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Inventario</p>
              </a>
            </li>
            <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/categorias.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Categorias</p>
              </a>
            </li>
            <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/carga_masiva.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Carga Masiva</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/ventas.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Ventas
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/compras.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Compras
            </p>
          </a>
        </li> -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Compras
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/compras.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Nueva compra</p>
              </a>
            </li>
            <li class="nav-item">
              <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/listacompras.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de compras</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/reportes.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Reportes
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/usuarios.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Usuarios
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link" onclick="cargarContenido('vista/configuracion.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Configuracion
            </p>
          </a>
        </li>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script>
  // Obtener todos los elementos de menú
  var menuItems = document.querySelectorAll('.nav-link');
  // Agregar un controlador de eventos de clic a cada elemento de menú
  menuItems.forEach(function(menuItem) {
    menuItem.addEventListener('click', function(event) {
      // Prevenir el comportamiento predeterminado del enlace
      event.preventDefault();
      // Eliminar la clase "active" de todos los elementos de menú
      menuItems.forEach(function(item) {
        item.classList.remove('active');
      });
      // Agregar la clase "active" al elemento de menú que se hizo clic
      this.classList.add('active');
    });
  });
</script>