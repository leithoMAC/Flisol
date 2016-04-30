
    <section id="header">
        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>¿Te interesa?</b>envía tú e-mail para resivir boletines</h1>
            </header>
            <!-- START TIMER -->
            <div id="timer" data-animated="FadeIn">
                <p id="message"></p>
                <div id="days" class="timer_box"></div>
                <div id="hours" class="timer_box"></div>
                <div id="minutes" class="timer_box"></div>
                <div id="seconds" class="timer_box"></div>
            </div>
            <!-- END TIMER -->
            <div class="col-lg-4 col-lg-offset-4 mt centered">
            	<h4>No registro solo resiviras promociones y más</h4>
				<form class="form-inline" role="form">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputEmail2">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="ingresa email">
				  </div>
				  <button type="submit" class="btn btn-info">envíar</button>
				</form>            
			</div>
            
        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <br>
        <br>
        <div class="container">
            <div class="row">
            <div class="col-xs-6">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo get_template_directory_uri();?>/img/slider-1.jpg" alt="descuentos">
          <div class="container">
            <div class="carousel-caption">
              <h1>Viaja con grandes descuentos</h1>
              <p>Siempre viaja cuando quieras y donde quieras, solo pregunta por los viajes que esten al alcanze de tus bolsillos y cotiza sin perder el miedo a viajar ¡ANIMATE!</p>
              <p><a class="btn btn-md btn-primary" href="#" role="button">Saber más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo get_template_directory_uri();?>/img/slider-2.jpg" alt="viajes">
          <div class="container">
            <div class="carousel-caption">
              <h1>HOTELES HOT SALE</h1>
              <p>Gracias a nuestra forma de atenderte tenemos siempre los mejores hoteles a los mejores precios.</p>
              <p><a class="btn btn-md btn-primary" href="#" role="button">Ver</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo get_template_directory_uri();?>/img/slider-3.jpg" alt="hoteles">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cotizaciones</h1>
              <p>Los mejores viajes disponibles al alcanze de tu presupuesto.</p>
              <p><a class="btn btn-md btn-primary" href="#" role="button">Ingresa</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    </div>
    <div class="col-xs-4">
         <div class="well">
              
               <form class="form-horizontal">
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Tipo De vuelo</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Redondo
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Sencillo
    </label>
	</div>
  </div>
</div>

</fieldset>
</form>    
              <form>
<div class="form-group">
  <label class="col-lg-offset-2 col-lg-10" for="textinput">Origen</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Escribe el aereopuerto de origen" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
</div>
    </form>  
            <form> 
             <div class="form-group">
  <label class="col-lg-offset-2 col-lg-10" for="textinput">Destino</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Escribe el aereopuerto de Destino" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
</div>
    </form>  
              
               <div id="datetimepicker" class="input-append date">
      <input type="text">Fecha se salida</input>
      
       <span class="add-on">
       <span class="glyphicon glyphicon-calendar">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
        </span>
    </div>
   
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'es_MX'
      });
    </script> 
                  <div id="datetimepicker" class="input-append date">
      <input type="text">Fecha se Llegada</input>
      
       <span class="add-on">
       <span class="glyphicon glyphicon-calendar">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
        </span>
    </div>
    
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'es_MX'
      });
    </script>              
     </div>	      
        </div>
    </div>
</div>
    