<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * 
 *
 * @package 	WordPress
 * @subpackage 	Barren
 * @since 		Barren 1.0
 */
?>
<?php Barren_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<?php Barren_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php comments_template( '', true ); ?>
	<?php endwhile; ?>

<?php Barren_Utilities::get_template_parts( array( 'parts/shared/footer' ) ); ?>
<?php Barren_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>