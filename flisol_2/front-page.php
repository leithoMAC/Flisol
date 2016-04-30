<?php

get_header();
the_post();
?>
  <?php get_template_part("partes/slider"); ?>
    
   
 
<h1 class="btn-default"><?php the_title(); ?></h1>
    <h5 class="btn-default"><?php the_content(); ?></h5>
     <section class="container">    
    	        <div class="row">
    	            <div class=" col-lg-3 clearfix">
    	                <div class="thumbnail borde">
	                 <h3 class="text-center">Promoción de la semana</h3>
            <img src="<?php echo get_template_directory_uri();?>/img/descuentos.jpg" alt="descuentos" class="img-responsive text-center">
          <div class="caption">
            <p class="text-justify">Cada temporada hay Descuentos en viajes ¡Aprovecha! </p>
            <bottom class="btn btn-success">Ver más</bottom>
          </div>
            </div>
              </div>
             
               
                   <div class=" col-lg-3 clearfix">
               <div class="thumbnail borde">
	             <h3 class="text-center">Reservaciones</h3>
                  <img src="<?php echo get_template_directory_uri();?>/img/reservaciones.jpg" alt="reservaciones" class="img-responsive">
      <div class="caption">
            <p class="text-justify">Ahora puedes reservar en la comodidad de tú casa .</p>
        <bottom class="btn btn-info">Enterate cómo.</bottom>
      </div>
        </div>
              </div>
               
               
               <div class=" col-lg-3 clearfix">
               <div class="thumbnail borde">
	             <h3 class="text-center">Hotel guide</h3>
      <img src="<?php echo get_template_directory_uri();?>/img/hotel2.jpg" alt="Hotel" class="img-responsive">
      <div class="caption">
        <p class="text-justify">Los mejores Hoteles a los mejores precios.</p>
        <bottom class="btn btn-danger">Ver más</bottom>
      </div>
        </div>
               </div>
    	        </div>
    	        
    	        
    	   
    	        
     
    	        
    	        
    	        </section>
    
    <?php get_footer(); ?>