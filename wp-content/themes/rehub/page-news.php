<?php get_header(); ?>
<div class="banner op3-banner" style="background-image: url(<?php bloginfo('template_url') ?>/img/news-banner.jpg)">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7 col-md-7 col-12">
				<h1>
					News
				</h1>
			</div>
			<div class="col-lg-5 col-md-5 col-12">
				<div class="banner-contact-form">
					<div class="cf-header">
						<h4>Wondering if your insurance is covered? </h4>
						<p>Fill out the form and one of our team members will contact you as soon as possible.</p>
					</div>
					<div class="cf-body">
						<?php echo do_shortcode('[contact-form-7 id="28" title="Contact form 1"]'); ?>
					</div>
					<div class="cf-footer">
						Your information will never be shared.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="home-section home-section5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="hs5-blocks">
					<?php
					$query = new WP_Query(array(
						'post_type' => 'post',
						'post_per_page' => 10,
					));
					while($query->have_posts()) : $query->the_post();
					?>
					<div class="hs5-block">
						<a href="<?php the_permalink(); ?>" class="home-post-img">
							<?php the_post_thumbnail(); ?>
						</a>
						<div class="home-post-date">8/16/13</div>
						<h4 class="home-post-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h4>
						<a href="<?php the_permalink(); ?>" class="btn-white r-more">Read More</a>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>