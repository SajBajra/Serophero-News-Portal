<?php get_header(); ?>
<main id="primary" class="site-main">
    <div class="container-fluid">
        <div id="content" class="row py-3">

            <div id="main" class="col-md-9" role="main">

                <div class="container-fluid bg-light text-denger lh-lg fw-bolder fs-2 px-3 py-2">


                    <div class="page-header">
                        <?php if (is_category()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("", "wpbootstrap"); ?></span> <?php single_cat_title(); ?>
                        </h1>
                        <?php } elseif (is_tag()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Posts Tagged:", "wpbootstrap"); ?></span> <?php single_tag_title(); ?>
                        </h1>
                        <?php } elseif (is_author()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Posts By:", "wpbootstrap"); ?></span>
                            <?php get_the_author_meta('display_name'); ?>
                        </h1>
                        <?php } elseif (is_day()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Daily Archives:", "wpbootstrap"); ?></span> <?php the_time('l, F j, Y'); ?>
                        </h1>
                        <?php } elseif (is_month()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Monthly Archives:", "wpbootstrap"); ?></span> <?php the_time('F Y'); ?>
                        </h1>
                        <?php } elseif (is_year()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Yearly Archives:", "wpbootstrap"); ?></span> <?php the_time('Y'); ?>
                        </h1>
                        <?php } ?>
                    </div>
                </div>

                <div class="row" style="margin:0 0 20px 0;">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <style>
                    .card p {
                        margin-bottom: 1px;

                    }
                    </style>
                    <div class="col-lg-6 mb-2 mt-2">
                        <div class="card">

                            <a href="<?php the_permalink() ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top archive-image"
                                    style=""></a>

                            <style>
                            .archive-image {
                                height: 20vw !important;
                                width: 100% !important;
                                object-fit: cover;
                            }

                            @media screen and (max-width: 990px) {
                                .archive-image {
                                    height: aito !important;

                                }
                            }
                            </style>

                            <div class="card-body">
                                <a href="<?php the_permalink() ?>">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                </a>
                                <p class="card-text" style="color:gray;">


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

                                </p>

                            </div>
                        </div>
                    </div>






                    <?php endwhile; ?>
                </div>


                <?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active 
                ?>

                <?php wp_bootstrap_page_navi(); // use the page navi function 
                    ?>

                <?php } else { // if it is disabled, display regular wp prev & next links 
                ?>
                <nav class="wp-prev-next">
                    <ul class="nav justify-content-center">
                        <li class="next nav-item btn page-nation">
                            <?php previous_posts_link(_e('', "wpbootstrap")) ?>
                        </li>
                        &nbsp; &nbsp; &nbsp;
                        <li class="previous nav-item btn page-nation">
                            <?php next_posts_link(_e('', "wpbootstrap")) ?>
                        </li>

                    </ul>
                </nav>
                <?php } ?>


                <?php else : ?>

                <article id="post-not-found">
                    <header>
                        <h1 class="text-danger"><?php _e("कुनै पोस्ट भेटिएन !", "wpbootstrap"); ?></h1>
                    </header>
                    <section class="post_content">
                        <p><?php _e("माफ गर्नुहोला यहा कुनै पनि पोस्टहरु छैनन् !!", "wpbootstrap"); ?></p>
                    </section>
                </article>
            </div>

            <?php endif; ?>
        </div> <!-- end #main -->
        <div id="main" class="col-md-3 " role="main">
            <?php get_sidebar(); // sidebar 1 
            ?>
        </div>
    </div> <!-- end #content -->
    </div>
</main>
<?php get_footer(); ?>