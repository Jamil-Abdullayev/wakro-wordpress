<?php
    add_action('wp_enqueue_scripts','add_wakro_styles');
    add_action('wp_enqueue_scripts','add_wakro_scripts');

    function add_wakro_styles(){


	    wp_enqueue_style('bootstrap-style',get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('animate-style',get_template_directory_uri() . '/assets/css/animate.css');

	    wp_enqueue_style('fw-all-style',get_template_directory_uri() . '/assets/css/fontawesome-all.css');
	    wp_enqueue_style('lw-style',get_template_directory_uri() . '/assets/css/line-awesome.min.css');
	    wp_enqueue_style('mag-popup-style',get_template_directory_uri() . '/assets/css/magnific-popup/magnific-popup.css');
	    wp_enqueue_style('owl-carousel-style',get_template_directory_uri() . '/assets/css/owl-carousel/owl.carousel.css');

	    wp_enqueue_style('base-style',get_template_directory_uri() . '/assets/css/base.css');
	    wp_enqueue_style('shortcodes-style',get_template_directory_uri() . '/assets/css/shortcodes.css');

        wp_enqueue_style('responsive-style',get_template_directory_uri() . '/assets/css/responsive.css');

        //magnific-pop-up

        //theme-color
        wp_enqueue_style('theme-color-style1',get_template_directory_uri() . '/assets/css/theme-color/color-1.css');
        wp_enqueue_style('theme-color-style2',get_template_directory_uri() . '/assets/css/theme-color/color-2.css');
        wp_enqueue_style('theme-color-style3',get_template_directory_uri() . '/assets/css/theme-color/color-3.css');
        wp_enqueue_style('theme-color-style4',get_template_directory_uri() . '/assets/css/theme-color/color-4.css');
        wp_enqueue_style('theme-color-style5',get_template_directory_uri() . '/assets/css/theme-color/color-5.css');
        wp_enqueue_style('theme-color-style6',get_template_directory_uri() . '/assets/css/theme-color/color-6.css');

        //owl-carousel

	    wp_enqueue_style('wakro-style',get_stylesheet_uri());
    }

    function add_wakro_scripts(){
        //js

	    wp_enqueue_script('wakro-theme-script',get_template_directory_uri() . '/assets/js/theme.js',array(),null,true);
	    wp_enqueue_script('wakro-menu-script',get_template_directory_uri() . '/assets/js/menu/jquery.smartmenus.js',array('jquery'),null,true);
	    wp_enqueue_script('wakro-owl-carousel-script',get_template_directory_uri() . '/assets/js/owl-carousel/owl.carousel.min.js',array(),null,true);
	    wp_enqueue_script('wakro-magnific-script',get_template_directory_uri() . '/assets/js/magnific-popup/jquery.magnific-popup.min.js',array('jquery'),null,true);
	    wp_enqueue_script('wakro-counter-script',get_template_directory_uri() . '/assets/js/counter/counter.js',array(),null,true);
	    wp_enqueue_script('wakro-countdown-script',get_template_directory_uri() . '/assets/js/countdown/jquery.countdown.min.js',array('jquery'),null,true);

        wp_enqueue_script('wakro-canvas-script',get_template_directory_uri() . '/assets/js/canvas.js',array(),null,true);
        wp_enqueue_script('wakro-confetti-script',get_template_directory_uri() . '/assets/js/confetti.js',array(),null,true);
	    wp_enqueue_script('wakro-snap-script',get_template_directory_uri() . '/assets/js/snap.svg.js',array(),null,true);
	    wp_enqueue_script('wakro-step-script',get_template_directory_uri() . '/assets/js/step.js',array(),null,true);
	    wp_enqueue_script('wakro-contact-form-script',get_template_directory_uri() . '/assets/js/contact-form/contact-form.js',array(),null,true);
	    wp_enqueue_script('wakro-wow-script',get_template_directory_uri() . '/assets/js/wow.min.js',array(),null,true);
	    wp_enqueue_script('wakro-themes-script',get_template_directory_uri() . '/assets/js/theme-script.js',array(),null,true);

        wp_enqueue_script('wakro-morph-script',get_template_directory_uri() . '/assets/js/morph.js',array(),null,true);

        //in folders scripts


    }


    add_theme_support('custom-logo');
    add_theme_support('menus');
flush_rewrite_rules( false );


	add_filter('nav_menu_link_attributes','filter_nav_menu_link_attributes',10,3);

	function filter_nav_menu_link_attributes($atts,$item,$args)
	{
		if($args->menu=='Main')
		{
			$atts['class']='nav-item nav-link';
			if($item->current)
			{
				$atts['class'].=' active';
			}
		}

		return $atts;

	}
?>