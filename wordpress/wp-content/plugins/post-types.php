<?php 
/*Plugin Name: Create Product Post Type
Description: This plugin registers the post types needed in this project.
Version: 1.0
License: GPLv2
*/

add_action( 'init', 'product_blog_cpt' );

function product_blog_cpt() {

register_post_type( 'produto', array(
  'labels' => array(
    'name' => 'Produtos',
    'singular_name' => 'Produto',
   ),
  'description' => 'Lista de produtos.',
  'public' => true,
  'show_in_nav_menus' => true,
  'menu_position' => 17,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));
}



add_action( 'init', 'client_blog_cpt' );

function client_blog_cpt() {

register_post_type( 'cliente', array(
  'labels' => array(
    'name' => 'Clientes',
    'singular_name' => 'Cliente',
   ),
  'description' => 'Lista de clientes.',
  'public' => true,
  'show_in_nav_menus' => true,
  'menu_position' => 19,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));
}



add_action( 'init', 'order_blog_cpt' );

function order_blog_cpt() {

register_post_type( 'pedido', array(
  'labels' => array(
    'name' => 'Pedidos',
    'singular_name' => 'Pedido',
   ),
  'description' => 'Lista de pedidos.',
  'public' => true,
  'show_in_nav_menus' => true,
  'menu_position' => 18,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));
}

//register_taxonomy('Produtos', array('produto'), array('hierarchical' => true, 'label' => 'Produtos', 'singular_label' => 'Produto', 'rewrite' => true));


?>