<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mir
 */

?>

    <div class="page-content" style="padding-top: 15%;">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                    <div class="section-title">
                        <div class="title-effect title-effect-2">
                            <div class="ellipse"></div> <i class="la la-cubes"></i>
                        </div>
                        <h2 class="title"><?php  the_field('project_name');?></h2>
                        <p><?php  the_field('project_desc');?></p>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-effect pos-r">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 image-column">
                        <div class="blink-img">
                            <img class="img-fluid blinkblink" src="<?php echo bloginfo('template_url') ?>/assets/images/pattern/04.png" alt="">
                        </div>
                        <img class="img-fluid" src="<?php the_field('project_img');?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 md-mt-5 ml-auto">
                        <div class="section-title mb-3">
                            <div class="title-effect title-effect-2">
                                <div class="ellipse"></div> <i class="la la-info"></i>
                            </div>
                            <h2>Story</h2>
                        </div>
                        <p class="lead">
	                        <?php  the_field('project_story');?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ////////////////////////////////////////////////////// -->

        <section id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 order-lg-12">
                        <img class="img-fluid w-100" src="<?php  the_field('project_img2');?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 md-mt-5 order-lg-1">
                        <div class="section-title mb-3">
                            <div class="title-effect title-effect-2">
                                <div class="ellipse"></div> <i class="la la-info"></i>
                            </div>
                            <h2>Challenge</h2>
                        </div>
                        <p class="lead">
	                        <?php  the_field('proejct_challenge');?>
                        </p>
                </div>
            </div>
        </section>
        <!-- ////////////////////////////////////////////////////// -->

        <section class="bg-effect pos-r">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 image-column">
                        <div class="blink-img">
                            <img class="img-fluid blinkblink" src="<?php echo bloginfo('template_url') ?>/assets/images/projects_photo/04.png" alt="">
                        </div>
                        <img class="img-fluid" src="<?php  the_field('project_img3');?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 md-mt-5 ml-auto">
                        <div class="section-title mb-3">
                            <div class="title-effect title-effect-2">
                                <div class="ellipse"></div> <i class="la la-info"></i>
                            </div>
                            <h2>Solution</h2>
                        </div>
	                    <?php  the_field('project_solution');?>
                    </div>
                </div>
            </div>
        </section>

    </div>

