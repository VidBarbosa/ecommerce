<?php
/**
 * Plugin Name: ecommerce
 * Description: Plugin personalizado para consumir una API externa y mostrar los datos en una grilla.
 * Version: 1.0
 * Author: David Barbosa
 */

// Registro y encola un archivo de estilo CSS
wp_register_style('ecommerce-style', plugins_url('css/style.css', __FILE__));
wp_enqueue_style('ecommerce-style');

// Registro y encola un archivo de script JS
wp_register_script('ecommerce-script', plugins_url('js/script.js', __FILE__));
wp_enqueue_script('ecommerce-script');
