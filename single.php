<?php
/**
 * The Template for displaying all single posts
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

	<article>

		<h2><?php the_title(); ?></h2>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
		<?php the_content(); ?>

		<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
		<h3>About <?php echo get_the_author() ; ?></h3>
		<?php the_author_meta( 'description' ); ?>
		<?php endif; ?>

		<?php comments_template( '', true ); ?>

	</article>
	<?php endwhile; ?>

<?php Barren_Utilities::get_template_parts( array( 'parts/shared/footer' ) ); ?>
<?php Barren_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>
