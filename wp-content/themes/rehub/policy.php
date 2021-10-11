<?php /* Template Name: Policy Cover Rehab */ ?>
<?php get_header(); ?>
<div class="banner op3-banner" style="background-image: url(<?php bloginfo('template_url') ?>/img/policy-banner.png)">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7 col-md-7 col-12">
				<h1>
					Does Your Insurance Policy Cover Rehab?
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
<?php get_footer(); ?>