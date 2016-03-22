<?php
/*
Template Name: Página de Clientes
*/
?>



<?php get_header(); ?>

<?php 

$args = array(
    'post_type'=> 'cliente',
    'order'    => 'ASC'
    );              

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

?>


        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php //the_terms($post->ID, 'project_type', '', '  <span class="color">|</span> ', ' ' ); ?>
		
        <?php echo get_post_meta($post->ID,'nome',true) . '<br/>' ?> 
         <?php echo get_post_meta($post->ID,'e-mail',true) . '<br/>' ?> 
         <?php echo get_post_meta($post->ID,'telefone',true) ?> 

<?php endwhile; else: ?>

    <p>Nothing Here.</p>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>