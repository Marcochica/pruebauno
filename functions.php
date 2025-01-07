<?php 
/** 
 * Esta función pone en cola el Normalize.css para su uso. El primer parámetro es un nombre para la hoja de estilo, el segundo es la URL. Aquí usamos 
 * una versión en línea del archivo css. 
*/
function add_normalize_CSS() { 
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"); 
} 

add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Registra una nueva barra lateral simplemente llamada 'sidebar' 
function add_widget_support() { 
    register_sidebar( array( 
                    'name' => 'Sidebar', 
                    'id' => 'sidebar', 
                    'before_widget' => '<div>', 
                    'after_widget' => '</div>', 
                    'before_title' => '<h2>', 
                    'after_title' => '</h2>', 
    ) ); 
} 
// Engancha la iniciación del widget y ejecuta nuestra función 
add_action( 'widgets_init', 'add_widget_support' );

// Registrar una nueva 
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Enganche al gancho de acción init, ejecute nuestra función de menú de navegación 
add_action( 'init', 'add_Main_Nav' );