<?php
/**
 * Plugin Name:Carrousel para woocommerce
 * Plugin URI: 
 * Description: Plugin  modo ladrillo (Masonry - style) solo utilizar  [shortcode-listadoMansory ]
 * Version: 1.0
 * Author: Jorge Ochoa 
 * Author URI: 
 */


function listadoObjeto($atts)
{

    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'product',
        'post_status'    => 'publish' 
    );
    $featured_product = new WP_Query( $args );
    
    if ( $featured_product->have_posts() ) : 
    
    echo '<div class="row">';
    
    while ( $featured_product->have_posts() ) : $featured_product->the_post();
    
    $post_thumbnail_id     = get_post_thumbnail_id();
    $product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'shop-feature');
    $product_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
    ?> 
    
    <a href="<?php the_permalink();?>">
        <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="<?php echo $product_thumbnail[0];?>" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
                <h1> <Strong style="color:white;"><?php the_title();?></strong></h1> 
            <p><?php
            if(has_excerpt())
            { 
                echo 'Producto sin descripción';
            }else{
                the_excerpt();
            }
            ?></strong></p> 
             <img src="<?php echo $product_thumbnail[0];?>" alt="Avatar" style="width:50px;height:50px;">
                 <p ><a href="<?php the_permalink();?>"> Ver más </a></p>
            </div>
        </div>
        </div> 
    </a>
    <?php 
    endwhile; 
    echo'</div>';
    
    endif; 
            
     wp_reset_query(); } 
add_shortcode("shortcode-listadoMansory","listadoObjeto" );