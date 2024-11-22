<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="views/dist/img/klassy-logo.png" alt="Klassy Logo" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light">Klassy</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Search Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Buscar">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul id="menu" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Opción: Inicio -->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>Inicio</p>
          </a>
        </li>

        <!-- Opción: Videos -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-video"></i>
            <p>Videos</p>
          </a>
        </li>

        <!-- Opción: Imagenes -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>Imagenes</p>
          </a>
        </li>

        <!-- Opción: Salir -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Salir</p>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Botón Ver sitio -->
    <div class="text-center mt-3">
      <a href="../index.php" class="btn btn-primary" target="_blank">Ver sitio</a>
    </div>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Script para manejar la activación de Inicio, Videos e Imagenes -->
<script>
  document.getElementById('menu').addEventListener('click', function (e) {
    const target = e.target.closest('.nav-link');
    if (target && (target.innerText.trim() === 'Inicio' || target.innerText.trim() === 'Videos' || target.innerText.trim() === 'Imagenes')) {
      const links = document.querySelectorAll('.nav-link');
      links.forEach(link => link.classList.remove('active')); // Desactiva todos
      target.classList.add('active'); // Activa solo el seleccionado
    }
  });
</script>xamp
