<?php get_header() ?>

	<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

	<!-- contenu d'un page seule affichant un article et une page -->

	<h2><?php the_title() ?> </h2>
		<?php the_content(); ?>
		<?php the_author()?>
		<?php the_post_thumbnail('medium');?>
	<?php endwhile; endif; ?>

<?php get_footer() ?>
