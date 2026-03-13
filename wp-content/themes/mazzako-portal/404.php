<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mazzako_Portal
 */

get_header();
?>

<main id="primary" class="site-main">


    <div class="container">
        <div class="row my-5 mx-5">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 style="color:#90cdf9; text-align:center; font-size:4rem; font-weight:900;">404! Error</h1>
                    <h1 class="page-title text-center">
                        <?php esc_html_e('माफ गर्नुहोला तपाइले खोज्नुभएको पेज भेट्न सकिएन !!', 'mazzako-portal'); ?>
                    </h1>
                </header><!-- .page-header -->

                <div class="page-content text-center">
                    <p><?php esc_html_e('यदि भेट्नु भएन भने के एकचोटी खोजबार बाट खोज्नुहोस !! ', 'mazzako-portal'); ?>
                    </p>

                    <?php
					get_search_form();

					?>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </div>
    </div>






</main><!-- #main -->

<?php
get_footer();