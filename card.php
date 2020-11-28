<div>
    <div class="img">
	    <?php ?>
    </div>
    <div class="contenu">
        <div class="title">
	        <?php ?>
        </div>
        <div class="content">
	        <?php ?>
        </div>
        <div class="authordate">
            <div><?php ?></div>
            <div><?php ?></div>
        </div>
    </div>
    <div class="liremorecatecom">
        <div><?php ?></div>
        <div><?php ?></div>
        <div><?php ?></div>
    </div>

</div>

<?php ?>

<?php get_header() ?>

<?php if ( have_posts() ): ?>
    <div class="row">
		<?php while ( have_posts() ): the_post(); ?>
            <div class="col-md-4 md-4">
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title"><strong><?php the_title() ?></strong></h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text mb-3">
							<?php the_excerpt(); ?>
                        </p>
                        <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
							<?php the_date(); ?>
                        </p>
                        <p class="font-small grey-text mb-0"><?php the_author() ?></p>
                        <p class="text-right mb-0 font-small font-weight-bold"><a href="<?php the_permalink(); ?>"> <i class="fas fa-align-left"></i> lire plus<i class="fas fa-angle-right"></i></a></p>
                    </div>
                    <!--/.Card content-->
                </div>
            </div>
		<?php endwhile; ?>
    </div>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>
