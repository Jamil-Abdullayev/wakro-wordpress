<?php
get_header();
?>

    <!--hero section start-->

    <section id="home" class="fullscreen-banner banner p-0 bg-contain bg-pos-rt"
             data-bg-img="<?php echo bloginfo( 'template_url' ); ?>/assets/images/bg/01.png">
        <div class="spinner-eff">
            <div class="spinner-circle circle-1"></div>
            <div class="spinner-circle circle-2"></div>
        </div>
        <div class="align-center pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 order-lg-1">
                        <img class="img-center wow jackInTheBox" data-wow-duration="3s"
                             src="<?php the_field( 'image_of_hero' ); ?>"
                             alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-1 md-mt-5">
                        <h1 class="mb-4 wow fadeInUp"
                            data-wow-duration="1.5s"><?php the_field( 'title_of_hero' ); ?></h1>
                        <p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s"
                           style="background: #000000; color: #ffffff; padding: 5px"><?php the_field( 'description_of_hero' ); ?></p>
                        <a class="btn btn-theme" href="contacts" data-text="Let's discuss your project">
                            <span>L</span><span>e</span><span>t</span><span>'</span><span>s</span>
                            <span>d</span><span>i</span><span>s</span><span>c</span><span>u</span><span>s</span><span>s</span>
                            <span>y</span><span>o</span><span>u</span><span>r</span>
                            <span>p</span><span>r</span><span>o</span><span>j</span><span>e</span><span>c</span><span>t</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--hero section end-->


    <!--about start-->

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab style-2">
                        <div class="tab-content" id="nav-tabContent">
                            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4"><?php the_field( 'dedicate_team_title' ); ?></h4>
                                        <p class="mb-4"><?php the_field( 'dedicated_team_desc' ); ?></p>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="<?php the_field( 'dedicated_team_image' ); ?>"
                                             alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>


    <!--about end-->

    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-10 ml-auto mr-auto">
                <div class="section-title">
                    <div class="title-effect">
                        <div class="bar bar-top"></div>
                        <div class="bar bar-right"></div>
                        <div class="bar bar-bottom"></div>
                        <div class="bar bar-left"></div>
                    </div>
                    <!--                            <h6>Our flexible engagement models</h6>-->
                    <h2 class="title"><?php the_field( 'engagement_title' ); ?></h2>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-12 md-mt-5">
                <div class="featured-item style-2">
                    <div class="featured-icon"><i class="flaticon-collaboration"></i>
                        <span class="rotateme"></span>
                    </div>
                    <div class="featured-title">
                        <h5><?php the_field( 'engagement_block1_title' ); ?></h5>
                    </div>
                    <div class="featured-desc">
                        <p><?php the_field( 'engagement_block1_desc' ); ?></p>
                        <!--                        <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>-->
                        <!--                        </a>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 md-mt-5">
                <div class="featured-item style-2">
                    <div class="featured-icon"><i class="flaticon-market"></i>
                        <span class="rotateme"></span>
                    </div>
                    <div class="featured-title">
                        <h5><?php the_field( 'engagement_block2_title' ); ?></h5>
                    </div>
                    <div class="featured-desc">
                        <p><?php the_field( 'engagement_block2_desc' ); ?></p>
                        <!--                        <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>-->
                        <!--                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--step start-->

    <section class="text-center pos-r" id="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 ml-auto mr-auto">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <!--                            <h6>Our flexible engagement models</h6>-->
                        <h2 class="title"><?php the_field( 'benefits_of_working_title' ); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="svg-container">
                    <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120"
                         preserveAspectRatio="xMidYMid meet"></svg>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="work-process">
                        <div class="box-loader"><span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="step-num-box">
                            <div class="step-icon"><span><i class="la la-lightbulb-o"></i></span>
                            </div>
                            <div class="step-num">01</div>
                        </div>
                        <div class="step-desc">
                            <h4><?php the_field( 'benefits_block1_title' ); ?></h4>
                            <p class="mb-0"><?php the_field( 'benefits_block1_desc' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mt-5">
                    <div class="work-process">
                        <div class="box-loader"><span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="step-num-box">
                            <div class="step-icon"><span><i class="la la-rocket"></i></span>
                            </div>
                            <div class="step-num">02</div>
                        </div>
                        <div class="step-desc">
                            <h4><?php the_field( 'benefits_block2_title' ); ?></h4>
                            <p class="mb-0"><?php the_field( 'benefits_block2_desc' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mt-5">
                    <div class="work-process">
                        <div class="step-num-box">
                            <div class="step-icon"><span><i class="la la-check-square"></i></span>
                            </div>
                            <div class="step-num">02</div>
                        </div>
                        <div class="step-desc">
                            <h4><?php the_field( 'benefits_block3_title' ); ?></h4>
                            <p class="mb-0"><?php the_field( 'benefits_block3_desc' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--step end-->


    <!--section class="pos-r o-hidden">
        <div class="bg-animation">
            <img class="zoom-fade" src="/<?php echo bloginfo( 'template_url' ); ?>/assets/images/pattern/03.png" alt="">
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 col-md-12 ml-auto mr-auto">
                    <h2>Services</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="tab style-2">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="true"> <i class="flaticon-data"></i>
                                    <h5>Web Dev</h5>
                                </a> <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="false"><i class="flaticon-research"></i> <h5>Build a team</h5></a>
                                <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab1-3" role="tab" aria-selected="false"><i class="flaticon-analytics"></i> <h5>Build MVP</h5></a>
                            </div></nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/svg/04.svg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4">Web development</h4>
                                        <p class="mb-4">The expertise of our web team is based on: Node.js, PHP/Laravel, Python/Django, React, and Vue.js.</p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/svg/05.svg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4">Build a team</h4>
                                        <p class="mb-4">You’re guaranteed to work with top developers only regardless of whether you are developing a startup or enterprise level application.
                                            We set high recruitment standards – only 5% of applicants are offered a job. We take care of developers’ personal growth and motivation.</p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab1-3">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/svg/06.svg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4">Build MVP</h4>
                                        <p class="mb-4">We will develop an mvp project for you in just a few weeks at a low price.</p>
                                        <ul class="text-left list-unstyled list-icon-2 d-inline-block">
                                            <li>You will get a working concept with all the source code.</li>
                                            <li>We deploy your project on a server, register a domain and install infrastructure.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->

    <!--    section services end-->

    <section id="about2" class="text-center"
             data-bg-img="/<?php echo bloginfo( 'template_url' ); ?>/assets/images/pattern/01.png"
             style="background-image: url(&quot;/<?php echo bloginfo( 'template_url' ); ?>/assets/images/pattern/01.png&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 ml-auto mr-auto">
                    <h2><?php the_field( 'tech_stack_title' ); ?></h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-12">
                    <div class="featured-item style-2">
                        <div class="featured-icon"><i class="flaticon-web-design"></i>
                            <span class="rotateme"></span>
                        </div>
                        <div class="featured-title">
                            <h5><?php the_field( 'tech_stack_block1_title' ); ?></h5>
                        </div>
                        <div class="featured-desc">
                            <ul class="text-left list-unstyled list-icon-2 d-inline-block">
								<?php the_field( 'tech_stack_block1_list' ); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mt-5">
                    <div class="featured-item style-2">
                        <div class="featured-icon"><i class="flaticon-software"></i>
                            <span class="rotateme"></span>
                        </div>
                        <div class="featured-title">
                            <h5><?php the_field( 'tech_stack_block2_title' ); ?></h5>
                        </div>
                        <div class="featured-desc">
                            <ul class="text-left list-unstyled list-icon-2 d-inline-block">
								<?php the_field( 'tech_stack_block2_list' ); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mt-5">
                    <div class="featured-item style-2">
                        <div class="featured-icon"><i class="flaticon-resolution"></i>
                            <span class="rotateme"></span>
                        </div>
                        <div class="featured-title">
                            <h5><?php the_field( 'tech_stack_block3_title' ); ?></h5>
                        </div>
                        <div class="featured-desc">
                            <ul class="text-left list-unstyled list-icon-2 d-inline-block">
								<?php the_field( 'tech_stack_block3_list' ); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    section tec stack end-->


    <section id="team" class="bg-effect right pos-r o-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h6>Creative Team</h6>
                        <h2 class="title">Meet Our Expert team member will ready for your service</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-10 col-lg-11 col-md-10 ml-auto">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag" data-dots="false" data-items="3"
                         data-md-items="2" data-sm-items="1" data-autoplay="true">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-1063px, 0px, 0px); transition: all 0.25s ease 0s; width: 3899px;">

	                            <?php
	                            $posts=get_posts(array(
		                            'numberposts'=>-1,
		                            'category_name'=>'team_slider',
		                            'orderby'=>'date',
		                            'order'=>'ASC',
		                            'post_type'=>'post',
		                            'suppress_filters'=>true,
	                            ));

	                            foreach ($posts as $post)
	                            {
		                            setup_postdata($post);
		                            ?>


                                <div class="owl-item " style="width: 354.443px;">
                                    <div class="item">
                                        <div class="team-member style-1">
                                            <div class="team-images">
                                                <img class="img-fluid radius box-shadow"
                                                     src="<?php the_field('image'); ?>"
                                                     alt="">
                                                <div class="social-icons social-colored circle team-social-icon">
                                                </div>
                                            </div>
                                            <div class="team-description"><span><?php the_field('position'); ?></span>
                                                <h5><?php the_field('name');?></h5>
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
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span
                                        class="fas fa-long-arrow-alt-left"><span></span></span></button>
                            <button type="button" role="presentation" class="owl-next"><span
                                        class="fas fa-long-arrow-alt-right"></span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--body content start-->

    <div class="page-content">

        <!--feature end-->


        <!--testimonial start-->


    </div>

<?php
get_footer();
?>