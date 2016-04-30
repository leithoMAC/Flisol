  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Leo Gabriel <span class="glyphicon glyphicon-plane">  </span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
    wp_nav_menu( array(
        'menu' => 'top-menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'nav navbar-nav',
       
        'walker' => new wp_bootstrap_navwalker())
        );
        ?>
      
      <!--Lado izq del menu-->
      <ul class="nav navbar-nav navbar-center">
        <li class="dropdown">
          <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<span class="caret"></span></a>
          
          <ul class="dropdown-menu">
           
            <li><a href="#">Telefonos</a></li>
            <li><a href="#">Ubicacion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Atencion a clientes</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
 
</nav>

 <form class="form-inline form-right" role="form-right">
  <div class="form-group">
    <label class="sr-only" for="ejemplo_email_2">Email</label>
    <input type="email" class="form-control" id="ejemplo_email_2"
           placeholder="Introduce tu email">
     </div>
  <div class="form-group">
    <label class="sr-only" for="ejemplo_password_2">Contraseña</label>
    <input type="password" class="form-control" id="ejemplo_password_2" 
           placeholder="Contraseña">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> No cerrar sesión
    </label>
  </div>
  <button type="submit" class="btn btn-default">Entrar</button>
</form>









