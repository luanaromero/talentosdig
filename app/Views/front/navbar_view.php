 <!--Navegacion-->

 <?php
      $session = session();
      $nombre = $session->get('nombre');
      $perfil = $session->get('perfil_id');
      ?>


<nav class="navbar navbar-expand-lg"  style="background-color: #4caf50;">
  <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
              <img src="<?php echo base_url('assets/img/iconoavion.png')?>" alt="marca" width="75" height="30" class="img-fluid"/>
            </a>
        </div>
        <!-- Boton collapse -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--muestra el admin -->
        <?php if (session()->perfil_id == 1):?>
              <div class="btn btn-secondary active btnUser btn-sm ">
                    <a href="">ADMIN: <?php echo session('nombre');?> </a>
              </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo base_url('principal')?>" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="vuelos" aria-current="page">Vuelos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="acerca_de" aria-current="page">Nosotros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="contacto">Contacto</a>
                    </li>
                    
                    <!--cerrar sesion -->
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="<?php echo base_url('/logout');?>" tabindex="-1" arial-disabled="true" >Cerrar Sesion</a>
                    </li>        
              </ul>

                <!-- Buscador -->
              <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscador</button>
              </form>
        </div>

        <!--muestra el cliente -->
        <?php elseif (session()->perfil_id == 2):?>
              <div class="btn btn-secondary active btnUser btn-sm ">
                    <a href="">CLIENTE: <?php echo session('nombre');?> </a>
              </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo base_url('principal')?>" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="vuelos" aria-current="page">Vuelos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="acerca_de" aria-current="page">Nosotros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="contacto">Contacto</a>
                    </li>
                    
                    <!--cerrar sesion -->
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="<?php echo base_url('/logout');?>" tabindex="-1" arial-disabled="true" >Cerrar Sesion</a>
                    </li>        
              </ul>

                <!-- Buscador -->
              <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscador</button>
              </form>
        </div>
           
      <?php else: ?>

        <!-- Para el usuario no logueado -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo base_url('principal')?>" aria-current="page">Home</a>
                    </li>                    
                    <li class="nav-item">
                      <a class="nav-link active" href="acerca_de" aria-current="page">Nosotros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="registro">Registro</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="login">Login</a>
                    </li>                           
              </ul>

                <!-- Buscador -->
              <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscador</button>
              </form>
        </div>
      <?php endif; ?>


  </div>
</nav>
  
<!--fin navegacion-->