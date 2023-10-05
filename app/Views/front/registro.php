
<body>
  <div class="container_registro">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registro</h5>
             <!--Inicio validacion -->
            <?php $validation = \Config\Services::validation(); ?>
            <form method = "post" action ="<?php echo base_url('/enviar-form')?>">
              <?=csrf_field();?>
              <?=csrf_field();?>
                  <?php if (!empty (session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                    <?php endif;?>

                    <?php if (!empty (session()->getFlashdata('success'))):?>
                      <div class="alert alert-danger"><?session()->getFlashdata('success');?></div>
                      <?php endif?> 
              <!--Fin validacion -->

              <!--Inicio Nombre -->
              <div class="form-floating mb-3">
                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="myusername" required autofocus>
                <label for="nombre">Nombre</label>
                <!--Error -->
                    <?php if($validation->getError('nombre')) {?>
                      <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('nombre'); ?>
                        </div>
                        <?php }?>              
              </div>
              <!--Fin Nombre -->
              <!-- Inicio Apellido -->
              <div class="form-floating mb-3">
                <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" required >
                <label for="apellido">Apellido</label>
                 <!--Error -->
                 <?php if($validation->getError('apellido')) {?>
                      <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('apellido'); ?>
                        </div>
                        <?php }?>  
              </div>
              <!--FIn apellido  -->
              <!--Inicio Usuario -->
              <div class="form-floating mb-3">
                <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Usuario" required >
                <label for="usuario">Usuario</label>
                <!--Error -->
                    <?php if($validation->getError('usuario')) {?>
                      <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('usuario'); ?>
                        </div>
                        <?php }?>              
              </div>

                 <!--Inicio email -->
              <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email </label>
                 <!--Error -->
                 <?php if($validation->getError('email')) {?>
                      <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('email'); ?>
                        </div>
                        <?php }?>  
              </div>
                  <!--Fin email -->
              

                 <!-- inicio contraseña -->
              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="Contraseña">Password</label>
                 <!--Error -->
                 <?php if($validation->getError('password')) {?>
                      <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('password'); ?>
                        </div>
                        <?php }?>  
              </div>              
                  <!--fin contraseña -->
                 <!--Boton Registro -->
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
              </div>

              <a class="d-block text-center mt-2 small" href="<?php echo base_url('/login'); ?> ">Tiene una cuenta? Inicia Sesión</a>

              <hr class="my-4">

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-google me-2"></i>Iniciar con Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-facebook-f me-2"></i>Iniciar con Facebook
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
