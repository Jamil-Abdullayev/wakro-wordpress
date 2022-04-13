<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas, software"/>
    <meta name="description" content="We are a leading IT services company that helps startups and businesses get top-level solutions in different industries. Contact us to get a quote now!"/>
    <meta name="author" content="wakro-media.de"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo bloginfo('name') ?> | <?php echo bloginfo('description')?></title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/logo-short.png"/>

    <!-- inject css start -->

    <!--== bootstrap -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">


    <!-- inject css end -->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PMD7RVQ');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMD7RVQ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader">
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-wrap-text">
                <div class="text">
                    <span>W</span><span>A</span><span>K</span><span>R</span><span>O</span><span>-</span><span>M</span><span>E</span><span>D</span><span>I</span><span>A</span>
                </div>
            </div>
        </div>
    </div>

    <!-- preloader end -->


    <!--header start-->

    <header id="site-header" class="header header-1">
        <div class="container-fluid">
            <div id="header-wrap" class="box-shadow">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-brand logo">
                                <?php the_custom_logo();?>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-expanded="false"
                                    aria-label="Toggle navigation"><span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <!-- Left nav -->

                                <?php
                                wp_nav_menu( [
	                                'menu'            => 'Main',
	                                'container'       => false,
	                                'menu_class'      => 'nav navbar-nav ml-auto mr-auto',
	                                'echo'            => true,
	                                'fallback_cb'     => 'wp_page_menu',
	                                'items_wrap'      => '  <ul id="main-menu" class="nav navbar-nav ml-auto mr-auto">%3$s</ul>',
	                                'depth'           => 1
                                ] );
                                ?>

<!--                                <ul id="main-menu" class="nav navbar-nav ml-auto mr-auto">-->
<!--                                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a>-->
<!--                                    </li>-->
<!--                                                                        <li class="nav-item"><a class="nav-link" href="hire_developers.html">Hire Developers</a>-->
<!--                                                                        </li>-->
<!--                                    <li class="nav-item"><a class="nav-link" href="augmented_team.html">Augmented Team</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item"><a class="nav-link" href="case_studies.html">Case Studies</a>-->
<!--                                    <li class="nav-item"><a class="nav-link" href="contacts.html">Contacts</a>-->
<!--                                </ul>-->
                            </div>
                            <a class="btn btn-theme btn-sm" href="contacts" data-text="Send a project"> <span>S</span><span>e</span><span>n</span><span>d</span>
                                <span>a</span>
                                <span>p</span><span>r</span><span>o</span><span>j</span><span>e</span><span>c</span><span>t</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--header end-->
