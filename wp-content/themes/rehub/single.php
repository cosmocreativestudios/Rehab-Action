<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
<div class="single-post-banner" style="background-image:url(<?php echo get_field('post_image'); ?>)">
	
</div>
<div class="single-posts">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<div class="home-section home-section5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Featured Posts</h2>
				<div class="hs5-blocks">
					<?php
					$query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'orderby' => 'rand',
						'order'    => 'ASC',
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