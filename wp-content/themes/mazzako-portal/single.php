<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mazzako_Portal
 */

get_header();
?>
<main id="primary" class="site-main">
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-9">




                <?php
                while (have_posts()) :
                    the_post();

                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                            if (is_singular()) :
                                the_title('<h1 class="entry-title">', '</h1>');
                            else :
                                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                            endif;

                            if ('post' === get_post_type()) :
                            ?>
                        <div class="container bg-light ">

                            <div class="row px-2 py-2 mb-2">
                                <div class="col-sm-6 col-md-8 col-lg-8">





                                    <div class="entry-meta">
                                        <span>
                                            <img src="<?php echo esc_url(get_avatar_url($post->post_author)); ?>"
                                                class="rounded-circle" width="26" height="26" />
                                        </span>
                                        <span class="post-author-name">
                                            <img draggable="false" role="img" class="emoji"
                                                alt="✍️" src="https://s.w.org/images/core/emoji/14.0.0/svg/270d.svg">
                                            <b>सेरोफेरो</b>
                                        </span>

                                        <span class="ptime"> &nbsp; -प्रकाशित मिति :
                                            <b><?php $post_date = get_the_date('l M j, Y');
                                                        echo $post_date; ?></b></span>
                                    </div><!-- .entry-meta -->
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <span> 
									
									<div class="sharethis-inline-share-buttons"></div>
									</span>

                                </div>

                            </div>


                        </div>



                        <?php endif; ?>
                    </header><!-- .entry-header -->

                    <?php mazzako_portal_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                            the_content(
                                sprintf(
                                    wp_kses(
                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mazzako-portal'),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post(get_the_title())
                                )
                            );

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'mazzako-portal'),
                                    'after'  => '</div>',
                                )
                            );
                            ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">

                    </footer><!-- .entry-footer -->
                </article>


				<div class="contaianer my-4 mx-4 bg-light rounded-pill" >
					<div class="row pt-2">
						<h2 class="text-dark text-center mt-3">
							यो खबर पढेर तपाईलाई कस्तो लाग्यो ?
						</h2>
						<div class="sharethis-inline-reaction-buttons"></div>
					</div>
				</div>
				



                <?php

                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__('अघिको:', 'mazzako-portal') . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__('पछाडी:', 'mazzako-portal') . '</span> <span class="nav-title">%title</span>',
                        )
                    );

                    // If comments are open or we have at least one comment, load up the comment template.








                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;








                endwhile; // End of the loop.
                ?>





                <div class="container-fluid">
                    <div class="row">
                        <?php $categories = get_the_category($post->ID); ?>
                        <?php if ($categories) : ?>
                        <?php $category_ids = array(); ?>
                        <?php foreach ($categories as $individual_category) : ?>
                        <?php $category_ids[] = $individual_category->term_id; ?>
                        <?php endforeach; ?>
                        <?php $args = array(
                                'category__in' => $category_ids,
                                'post__not_in' => array($post->ID),
                                'posts_per_page' => 6,
                                'ignore_sticky_posts' => 1,
                                'oderby' => 'rand'
                            ); ?>
                        <?php $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()) : ?>

                        <section class="container">
                            <h3 class="relatedpost">सम्बन्धित समाचार</h3>

                            <div class="row">
                                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <div class="col-md-4">

                                    <a href="<?php the_permalink() ?>"
                                        class="related-thumb"><?php the_post_thumbnail(); ?></a>
                                    <h4 class="title-like"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    </h4>

                                </div>
                                <?php endwhile; ?>
                            </div>

                        </section>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        <?php endif; ?>
                    </div>
                </div>






            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>



    </div>

</main><!-- #main -->

<?php

get_footer();