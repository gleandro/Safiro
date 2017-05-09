<?=$header?>
<div id="login-page" class="row container">
  <div class="col s12 z-depth-4 card-panel">
    <form class="login-form" method="post" action="<?php echo base_url() ?>usuario/validar">
      <div class="row">
        <div class="input-field col s12 center">
          <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
          <p class="center login-form-text">Bienvenido a Safiro, Inicia sesion</p>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-social-person-outline prefix"></i>
          <input id="username" name="correo" type="text">
          <label for="username" class="center-align">Correo</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-action-lock-outline prefix"></i>
          <input id="password" name="clave" type="password">
          <label for="password">Clave</label>
        </div>
      </div>
      <div class="row">          
        <div class="input-field col s12 m12 l12  login-text">
          <input id="remember-me" type="checkbox">
          <label for="remember-me">Recordar</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light col s12" value="Iniciar sesion">Iniciar sesion</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="#">Registrate ahora!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="#">Recuperar tu clave</a></p>
        </div>          
      </div>
    </form>
  </div>
</div>
<?=$footer?>