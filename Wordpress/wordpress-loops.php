<?php
//The WordPress Loop

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

//Content Here

<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




//--------------------------------------------

//Loop Custom Post Types

<?php 
    $newCPTQuery = new WP_Query('post_type=gin&posts_per_page=4');
    while ($newCPTQuery->have_posts()) : $newCPTQuery->the_post();
?> 

<?php 
    endwhile; 
    wp_reset_query()
?>