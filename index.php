<?php get_header() ?>

<?php if ( have_posts() ): ?>

	<?php while ( have_posts() ): the_post(); ?>
        <div class="container my-5 py-5 z-depth-1">
			<?php if ( has_post_thumbnail( $post->ID ) ): ?>
                <div class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
                    <div class="row">

                        <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="font-weight-bold">
								<?php the_title() ?>
                            </div>
                            <div class="text-muted">
								<?php the_excerpt(); ?>
                            </div>
                            <div class="font-weight-bold">
                                <div><?php the_author() ?></div>
                                <div><?php the_date() ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-4"><?php the_category(); ?></div>
                        <div class="col-4">
                            <a href="<?php the_permalink(); ?>" class="font-weight-bold btn btn-blue-grey">
                                <i class="fas fa-align-left"></i>
                                lire plus
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
			<?php else: ?>
                <div>
                    <div class="col text-center">
                        <div class="font-weight-bold">
                            <?php the_title() ?>
                        </div>
                        <div class="text-muted">
	                        <?php the_excerpt(); ?>
                        </div>
                        <div class="font-weight-bold">
                            <div><?php the_author() ?></div>
                            <div><?php the_date() ?></div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-4"><?php the_category(); ?></div>
                        <div class="col-4">
                            <a href="<?php the_permalink(); ?>" class="font-weight-bold btn btn-blue-grey">
                                <i class="fas fa-align-left"></i>
                                lire plus
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

			<?php endif; ?>
        </div>
	<?php endwhile; ?>

<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>
