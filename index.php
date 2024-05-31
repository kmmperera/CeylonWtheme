<?php get_header();?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

   <?php if ( has_post_thumbnail() ) :
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                            <img style="width:100px;height:100px;"  class="index-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
   <?php endif; ?>

    <?php  the_content();  ?>


<?php endwhile; else: endif;?>
<?php wp_reset_postdata(); ?>

				
<?php get_footer();?>