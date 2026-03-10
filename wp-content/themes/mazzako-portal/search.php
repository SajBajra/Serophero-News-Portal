<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Mazzako_Portal
 */

get_header();
?>

<main id="primary" class="site-main">

    <div class="container">
        <div class="row">
            <div class="col-md-8">





                <?php if (have_posts()) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                            /* translators: %s: search query. */
                            printf(esc_html__('तपाइले खोज्नु भएको: %s', 'mazzako-portal'), '<span>' . get_search_query() . '</span>');
                            ?>
                    </h1>
                </header><!-- .page-header -->
                <div class="row my-3 gy-3" style="margin:0 0 20px 0;">
                    <?php
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                        ?>
                    <div class="col-lg-6">
                        <div class="card">
                            <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('wpbs-featured'); ?></a>
                            <div class="card-body">
                                <a href="<?php the_permalink() ?>">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                </a>
                                <p class="card-text">
                                    <?php _e("<i class='fa fa-user-circle-o' aria-hidden='true'></i>", "wpbootstrap"); ?>
                                    <?php the_author_posts_link(); ?>
                                    <?php _e("&nbsp; | &nbsp; <i class='fa fa-clock-o' aria-hidden='true'></i>", "wpbootstrap"); ?>
                                    <time datetime="<?php echo the_time('Y-m-j'); ?>"
                                        pubdate><?php the_time(); ?></time>
                                    <?php $exshort = substr(the_excerpt(), 0, 100);
                                            echo $exshort; ?>

                                </p>
                                <a href="<?php the_permalink() ?>" class="btn btn-primary">पुरा पढ्नुस् &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part('template-parts/content', 'none');
                        ?>
                    <div> <?php
                            endif;
                                ?>

                    </div>



                </div>
                <div class="col-md-4">
                    <?php get_sidebar();
                        ?>

                </div>
            </div>

        </div>



</main><!-- #main -->

<?php

get_footer();