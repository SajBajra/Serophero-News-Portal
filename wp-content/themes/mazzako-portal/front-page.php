<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mazzako_Portal
 */

function hometitle($cname, $clink)
{
?>
<div class="hometitle my-1">
    <a href="<?php echo $clink; ?>">
        <h2><?php echo $cname; ?></h2>
    </a>
</div>

<?php
}

get_header();
?>

<style>

</style>

<main id="primary" class="site-main">

    <div class="container-xxl mazzako-container my-4 px-4">

        <div>
            <?php dynamic_sidebar('Home longAds1'); ?>
        </div>


        <!--first row -->
        <div class="row">
            <div class="col">

                <?php echo do_shortcode('[postlist id=1726]'); ?>
                <?php echo do_shortcode('[postlist id=1728]'); ?>

            </div>
        </div>

        <!--second row -->
        <div class="row">
            <div class="col-sm-4">
                <?php echo do_shortcode('[postlist id=1731]'); ?>
            </div>
            <div class="col-sm-5">
                <?php echo do_shortcode('[postlist id=1732]'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('aside-ads'); ?>
            </div>

        </div>


        <!--Third row -->
        <div class="row">
            <?php hometitle('बाँसगढी बिशेष', 'https://onlinebansgadhi.com/category/basgad-bises/'); ?>
            <div class="col-sm-3">
                <?php echo do_shortcode('[postlist id=1734]'); ?>
            </div>
            <div class="col-sm-6">
                <?php echo do_shortcode('[postlist id=1736]'); ?>
            </div>
            <div class="col-sm-3">
                <?php echo do_shortcode('[postlist id=1735]'); ?>
            </div>
        </div>






        <!--fifth row -->
        <div class="row">
            <?php dynamic_sidebar('homeadss'); ?>
            <div class="col-sm-8">
                <?php hometitle('राजनीति', 'https://onlinebansgadhi.com/category/politics/'); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo do_shortcode('[postlist id=1741]'); ?>
                    </div>
                    <div class="col-sm-6">
                        <?php echo do_shortcode('[postlist id=1742]'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <?php hometitle('बिचार', 'https://onlinebansgadhi.com/category/opinion/'); ?>
                <?php echo do_shortcode('[postlist id=1998]'); ?>
            </div>
        </div>



        <!--sixth row -->
        <div class="row">
            <?php hometitle('प्रदेश समाचार', '#'); ?>
            <div class="col-sm-5">
                <?php echo do_shortcode('[postlist id=1746]'); ?>
            </div>
            <div class="col-sm-7">
                <?php echo do_shortcode('[postlist id=1748]'); ?>
            </div>
        </div>



        <!-- Video row (before अर्थ / स्वास्थ्य) -->
        <div class="row my-4">
            <?php hometitle('भिडियो', '#'); ?>
            <div class="col-sm-12">
                <?php echo do_shortcode('[postlist id=9371]'); ?>
            </div>
        </div>

        <!--seventh row -->
        <div class="row">
            <?php dynamic_sidebar('homeadsss'); ?>
            <div class="col-sm-8">

                <?php hometitle('अर्थ', 'https://onlinebansgadhi.com/category/echo'); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo do_shortcode('[postlist id=1749]'); ?>
                    </div>
                    <div class="col-sm-6">
                        <?php echo do_shortcode('[postlist id=1750]'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <?php hometitle('स्वास्थ्य', 'https://onlinebansgadhi.com/category/health/'); ?>
                <?php echo do_shortcode('[postlist id=1751]'); ?>
            </div>
        </div>


		
        <!--fourth row -->
        <div class="row">
            <div class="col-sm-8">
                <?php hometitle('बिज्ञान / प्रबिधि ', 'https://onlinebansgadhi.com/category/technology/'); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo do_shortcode('[postlist id=1737]'); ?>
                    </div>
                    <div class="col-sm-6">

                        <?php echo do_shortcode('[postlist id=1738]'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <?php hometitle('शिक्षा', 'https://onlinebansgadhi.com/category/education/'); ?>


                <?php echo do_shortcode('[postlist id=1739]'); ?>
            </div>
        </div>		
		
		


        <!--Eighth row -->
        <div class="row">
            <div class="col-sm-9">
                <?php hometitle('खेलकुद', 'https://onlinebansgadhi.com/category/sports/'); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo do_shortcode('[postlist id=1752]'); ?>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <?php echo do_shortcode('[postlist id=1753]'); ?>
                            </div>
                            <div class="col-sm-6">
                                <?php echo do_shortcode('[postlist id=1754]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <?php hometitle('अन्तरास्ट्रिय', '#'); ?>
                <?php echo do_shortcode('[postlist id=1997]'); ?>
            </div>
        </div>





        <!--nineth row -->
        <div class="row">
            <?php hometitle('विजनेस', 'https://onlinebansgadhi.com/category/business/'); ?>
            <div class="col-md-3">
                <?php echo do_shortcode('[postlist id=1756]'); ?>
            </div>
            <div class="col-md-3">
                <?php echo do_shortcode('[postlist id=1757]'); ?>
            </div>
            <div class="col-md-3">
                <?php echo do_shortcode('[postlist id=1758]'); ?>
            </div>
            <div class="col-md-3">
                <?php echo do_shortcode('[postlist id=1759]'); ?>
            </div>
        </div>


        <!--Tenth row -->
        <div class="row">
            <?php hometitle('मनोरंजन', 'https://onlinebansgadhi.com/category/entertainment/'); ?>
            <div class="col-md-4">
                <?php echo do_shortcode('[postlist id=1760]'); ?>
            </div>
            <div class="col-md-4">
                <?php echo do_shortcode('[postlist id=1761]'); ?>
            </div>
            <div class="col-md-4">
                <?php echo do_shortcode('[postlist id=1762]'); ?>
            </div>
        </div>









    </div>
</main>
<?php
get_footer();