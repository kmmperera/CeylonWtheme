<?php get_header();?>
<?php 
 if (is_singular()){
    get_template_part('template-parts/content', 'single');
 }
else{
    get_template_part('template-parts/content', get_post_format());
}
?>
				
<?php get_footer();?>