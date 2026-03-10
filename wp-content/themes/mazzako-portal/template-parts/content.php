<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mazzako_Portal
 */

?>
<div class="container">
    <div class="row">
        <div class="col mb-2 mt-2">
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
                        <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time>
                        <?php $exshort = substr(the_excerpt(), 0, 100);
						echo $exshort; ?>

                    </p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">पुरा पढ्नुस् &rarr;</a>
                </div>
            </div>
        </div>
    </div>




</div>

<!-- #post-<?php the_ID(); ?> -->