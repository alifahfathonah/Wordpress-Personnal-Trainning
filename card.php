<div class="col-md-4 mb-4">
	<!--Card-->
	<div class="card">

		<!--Card image-->
		<div class="view overlay">
			<img src="<?php the_post_thumbnail_caption();?>" class="card-img-top" alt="">
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
				<?php  the_content('en voir plus');?>
			</p>
			<p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
				<?php the_date(); ?>
			</p>
			<p class="font-small grey-text mb-0"><?php the_author() ?></p>
			<p class="text-right mb-0 font-small font-weight-bold"><a href="<?php the_permalink(); ?>">read more <i class="fas fa-angle-right"></i></a></p>
		</div>
		<!--/.Card content-->

	</div>
	<!--/.Card-->

</div>

<?php ?>