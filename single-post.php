<?php get_header() ?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <!-- contenu d'un page seule affichant un article et une page -->

    <h2><?php the_title() ?> </h2>
    <div><?php the_content(); ?></div>
    <div class="row">
        <div class="col">

            <div class="text-center text-decoration-none"><h3 class="text-center massEffect"><?php the_author() ?></h3></div>
            <div class="text-center text-decoration-none"><?php the_date() ?></div>
            <div class=""> Catégorie de l'article :<?php the_category(); ?></div>

        </div>

        <div class="col text-center">
			<?php the_post_thumbnail( 'medium' ); ?>
        </div>

    </div>
<?php endwhile; endif; ?>

<?php get_footer() ?>
