<?php

get_header();
the_post();
?>

<h1 class="btn-default"><?php the_title(); ?></h1>
    <h5 class="btn-default"><?php the_content(); ?></h5>

<section class="container">
        <article class="col-md-8 fondo" >
            <h3 class="text-primary"><?php the_title(); ?></h3>
          



<form>
<div class="form-group">
  <label class="col-lg-offset-2 col-lg-10" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Nombre usuario" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>

<br>
<!-- Password input-->

  <label class="col-lg-offset-2 col-lg-10" for="passwordinput">Introduce una contraseña</label>
  <div class="col-md-5">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Contraseña" class="form-control input-md" required="">
    <span class="help-block">help</span>
  </div>
</div>

<div class="form-group">
    <label class="col-lg-offset-2 col-lg-10" for="ejemplo_email_2">Email</label>
    <input type="email" class="form-control" id="ejemplo_email_2"
           placeholder="Introduce tu email">
           <span class="help-block">help</span>  
  </div>
  
  <div class="form-group">
  <label class="col-lg-offset-2 col-lg-10" for="textinput">Dirección</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Escribe tú dirección" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="radios">¿Viajas muy seguido?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Sí
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      No
    </label>
	</div>
  </div>
</div>



<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Envíar</button>
    </div>
  </div>
            </form>


            <br>
        </article>
       
    </section>



<?php get_footer(); ?>