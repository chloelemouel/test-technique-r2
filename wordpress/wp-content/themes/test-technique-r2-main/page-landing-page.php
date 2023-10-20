<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-technique
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<div id="section1">
			<?php $image = get_field('background_hero'); ?>
			<img src="<?php echo esc_url( $image['url'] ); ?>" alt="background image" id="image1" />
			<div id="section1-text">
					<h1><?php the_field('titre_du_hero');  ?></h1>
					<span></span> <!-- to have the blue rectangle -->
					<p> <?php the_field('texte_hero');  ?> </p>
			</div>
		</div>
		
		<div id="section2">
		<?php $image = get_field('image_section2'); ?>
    	<img src="<?php echo esc_url( $image['url'] ); ?>" alt="illustration image" id="image2" />
			<div id="section2-text">
					<h2><?php the_field('titre_section2');  ?></h2>
					<p id="question"> <?php the_field('question');  ?> </p>
					<p> <?php the_field('paragraphe_section2');  ?> </p>
					<div id="button2"><?php the_field('bouton_section2');  ?><img src="\test-technique-r2\wordpress\wp-content\uploads\2023\10\arrow.png"/></div>
			</div>
		</div>
		
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();