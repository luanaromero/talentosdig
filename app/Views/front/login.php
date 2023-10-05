<section>
<div class="container-fluid px-2 my-2">
  <div class="row justify-content-center">
    <div class="col-xl-7">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row justify-content-center g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image"></div>
              <img src="assets/img/avion.jpg" alt="DAC">
              <div class="col-sm-6 justify-content-center">
              <div class="col-sm-12 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Bienvenidos</div>
                  <p class="mb-4 text-muted">Iniciar sesión!</p>
                </div>

                <!-- Mensaje de error -->
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                      <?= session()->getFlashData('msg')?>
                    </div>
                <?php endif; ?>

                <!-- Inicio del formulario de login -->
                    <form id="contactForm" method="post" action="<?php echo base_url('/enviarlogin') ?>">

                      <div class="form-floating mb-3">
                        <input name="email" class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                        <label for="emailAddress">direccion de email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Email requerido.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:invalid">Email no valido.</div>
                      </div>
                      
                      <div class="form-floating mb-3">
                        <input name="password" class="form-control" id="password" type="password" placeholder="Password" data-sb-validations="required" />
                        <label for="password">Contraseña</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">contraseña requerida.</div>
                        <div class="invalid-feedback" data-sb-feedback="password:invalid">contraseña no válida</div>
                      </div>

                     <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                          <div class="fw-bolder">Acceder</div>
                          <p>To activate this form, sign up at</p>
                          <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                      </div>
                      <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error al acceder!</div>
                      </div>-->

                      <div class="d-grid">
                        <button class="btn btn-success btn-lg " id="submitButton" type="submit" value="Ingresar" >Ingresar</button>
                        <a href="<?php echo base_url('/login'); ?> ">Cancelar</a>
                        <br> <span>¿Aun no se Registró? <a href="<?php echo base_url('/registro'); ?>">Registrarse Aqui</a></span>
                      </div>
                    </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>