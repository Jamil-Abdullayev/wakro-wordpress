<?php
/*
    Template Name: Case Studies
*/
?>

<?php
get_header();
?>


<div class="page-content" style="padding-top: 5%;">
	<section id="blog" class="pos-r o-hidden">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-8 col-md-12 ml-auto mr-auto">
					<div class="section-title">
						<div class="title-effect title-effect-2">
							<div class="ellipse"></div> <i class="la la-btc"></i>
						</div>
						<h2 class="title">Case Studies</h2>
						<!--              <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>-->
					</div>
				</div>
			</div>
			<div class="row">

                <?php
                    $posts=get_posts(array(
                            'numberposts'=>-1,
                            'category_name'=>'case_studies',
                            'orderby'=>'date',
                            'order'=>'ASC',
                            'post_type'=>'post',
                            'suppress_filters'=>true,
                    ));

                    foreach ($posts as $post)
                    {
                        setup_postdata($post);
                ?>

                        <div class="col-lg-4 col-md-12 md-mt-5">
                            <div class="post">
                                <div class="post-image">
                                    <img class="img-fluid h-100 w-100" src="<?php the_field('project_img'); ?>" alt="">
                                    <a class="post-categories" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="post-desc">
                                    <div class="post-meta">
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                    wp_reset_postdata();
                ?>

			</div>
		</div>
	</section>
</div>


<?php
get_footer();
?>
