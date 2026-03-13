<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mazzako_Portal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    @media (min-width: 967px) {
        #primary {
            padding: 0 2.5rem;

        }
		@media(max-width:767){
			.menusearchicon{
				display:none;
			}
		}
    }
    </style>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/scss/main.css' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62ca4f7c4d7c0900122da6f6&product=sop' async='async'></script>
    <style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px !important;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 5px !important;
        border-top: 2px solid red;
        border-bottom: 2px solid red;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #689948;
        border-radius: 5px;

    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: red;
    }
    </style>


</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'mazzako-portal'); ?></a>

        <header id="masthead" class="site-header">

            <div class="container-fluid top-bar">
                <div class="row" style="margin:2px 12px 2px 12px;">
                    <div class="col fsecondary">
                        <p class="text-dark "> <?php echo date('Y F j l'); ?></p>
                    </div>
                    <div class="col" style="margin-top:-6px;">
                        <span">
                            <?php dynamic_sidebar('headersocial'); ?>
                            </span>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row" style="margin:10px 0 10px 0;">
                    <div class="col-sm-4">
                        <div class="site-branding">
                            <?php
                            the_custom_logo();
                            if (is_front_page() && is_home()) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php
                            else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a></p>
                            <?php
                            endif;
                            $mazzako_portal_description = get_bloginfo('description', 'display');
                            if ($mazzako_portal_description || is_customize_preview()) :
                            ?>
                            <p class="site-description"><?php echo $mazzako_portal_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                            ?></p>
                            <?php endif; ?>
                        </div><!-- .site-branding -->
                    </div>
                    <div class="col-sm-8 float-end mt-1">
                        <?php dynamic_sidebar('header-ads'); ?>
                    </div>
                </div>

            </div>

            <div class="container-fluid sticky-top1">

            </div>
        </header><!-- #masthead -->


        <div class="row sticky-top">

            <nav class="sticky-top navbar navbar-expand-md navbar-dark pback fprimary fs-5 px-5 ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">अनलाइन बासगढ़ी</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">

                        <div class="row my-3 mb-2 mobilelogo">
                            <?php the_custom_logo(); ?>
                        </div>

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>



                        <button class="btn text-white menusearchicon me-5" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#rightsidesearch">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>




                    </div>
            </nav>




        </div>







        <div class="offcanvas offcanvas-end" id="rightsidesearch">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title">खोजि गर्नुहोस..</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <?php get_search_form(); ?>
            </div>
        </div>