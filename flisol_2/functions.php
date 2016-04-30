<?php
/*Funciones para cargar estilo y scripts */
function cargar_css_del_tema(){

  wp_enqueue_style("bootstrap", get_stylesheet_directory_uri()."/css/bootstrap.min.css");
     wp_enqueue_style("style", get_stylesheet_directory_uri()."/css/style.css");
}

 function cargar_js_del_tema(){
   wp_enqueue_script("jquery", get_stylesheet_directory_uri()."/js/jquery.js");
   wp_enqueue_script("bootstrap", get_stylesheet_directory_uri()."/js/bootstrap.min.js");

}
add_action("wp_enqueue_scripts","cargar_js_del_tema");
 add_action("wp_enqueue_scripts","cargar_css_del_tema");

/* ***FIN***Funciones para cargar estilo y scripts */



require_once('wp_bootstrap_navwalker.php');
add_theme_support("menus");
add_theme_support("post-thumbnails");

function registrar_mis_menus(){
    register_nav_menus(array(
    'menu_cabecera' => 'Menu en Cabecera'
    ));
    
}
add_action('init','registrar_mis_menus'); 