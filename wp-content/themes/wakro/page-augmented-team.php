<?php
/*
	Template Name: Augmented Team
*/
?>

<?php
get_header();
?>

	<section id="home" class="fullscreen-banner banner p-0" data-bg-img="<?php echo bloginfo('template_url') ?>/assets/images/pattern/01.png" style="height: 402px; background-image: url(&quot;<?php echo bloginfo('template_url') ?>/assets/images/pattern/01.png&quot;);">
		<div class="hero-bg">
			<img class="img-fluid" src="<?php echo bloginfo('template_url') ?>/assets/images/bg/04.png" alt="">
		</div>
		<div class="align-center p-0" style="padding-top: 90px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-7 col-md-12 img-side">
						<img class="img-center" src="<?php the_field('hero_img'); ?>" alt="">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-12 md-mt-5 ml-auto">
						<h1 class="mb-4 font-weight-normal wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;"><?php the_field('hero_title'); ?></h1>
						<p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;"><?php the_field('hero_desc'); ?></p>

					</div>
				</div>
			</div>
		</div>
		<div class="round-shape"></div>
	</section>
	<!--hero section end-->

	<div class="container">


		<!--about start-->

		<section class="pos-r pt-0">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<img class="img-fluid w-100" src="<?php the_field('second_block_img'); ?>" alt="">
					</div>
					<div class="col-lg-6 col-md-12 md-mt-5">
						<div class="section-title mb-4">
							<div class="title-effect title-effect-2">
								<div class="ellipse"></div> <i class="la la-info"></i>
							</div>
							<h2><?php the_field('second_block_title'); ?></h2>
							<p class="mb-4"><?php the_field('second_block_small_desc'); ?></p>
						</div>
                        <?php the_field('second_block_desc'); ?>
					</div>
				</div>
			</div>
		</section>

		<!--about end-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="tab style-2">
						<div class="tab-content" id="nav-tabContent">
							<div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
								<div class="row align-items-center">
									<div class="col-lg-6 col-md-12 md-mt-5">
										<h4 class="mb-4"><?php the_field('helper_block_title'); ?></h4>
										<p class="mb-4"><?php the_field('helper_block_small_desc'); ?></p>
										<ul class="custom-li list-unstyled list-icon-2 d-inline-block">
											<?php the_field('helper_block_desc'); ?>
										</ul>
									</div>

									<div class="col-lg-6 col-md-12">
										<img class="img-fluid" src="<?php the_field('helper_block_img'); ?>" alt="">
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container" style="padding-top: 5%; padding-left: 40%;">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<a class="btn btn-theme wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="contacts" style="visibility: visible;">Let’s form your team!</a>
					</div>
				</div>
			</div>


<?php
get_footer();
?>