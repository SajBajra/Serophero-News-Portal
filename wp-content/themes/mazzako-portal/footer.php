<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mazzako_Portal
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container-fluid   mfooter ">
        <div class="container">
            <div class="row" style="padding:30px 20px 10px 20px;">
                <div class="col-sm-4 ">
                    <h2>सम्पर्क:</h2>
                    <?php if (is_active_sidebar('footer-1')) { ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                    <?php } ?>

                </div>
                <div class="col-sm-4">
                    <h2>हाम्रो टीम:</h2>
                    <?php if (is_active_sidebar('footer-2')) { ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                    <?php } ?>

                </div>
                <div class="col-sm-4">
                    <h2>सोसल मिडिया:</h2>
                    <?php if (is_active_sidebar('footer-3')) { ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid cfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="site-info">
                        <?php
                        // Footer details adapted from SeroPheroOnline
                        echo 'Copyright &copy; ' . date('Y') . ' SeroPheroOnline TV || All Rights Reserved';
                        ?>
                    </div><!-- .site-info -->

                </div>
                <div class="col-md-4 ">


                    <nav id="footer-nav" class="footer-navigation">

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->

                    <style>
                    #footer-nav ul {
                        padding: 0;
                        margin: 0;
                        list-style: none;
                        overflow: hidden;

                    }

                    .footer-navigation li {

                        margin-right: 8px;
                        padding-right: 6px;
                        border-right: 1px solid gray;

                    }

                    .footer-navigation li a {
                        color: #c7c7c7;
                    }

                    @media screen and (min-width: 768px) {


                        #footer-nav ul {
                            justify-content: right;
                            display: flex;
                        }

                        .site-info {
                            justify-content: left;
                            display: flex;
                        }

                    }

                    @media screen and (max-width: 767px) {

                        #footer-nav ul {
                            justify-content: center;
                            display: flex;
                        }

                        .site-info {
                            justify-content: center;
                            display: flex;
                        }

                    }
                    </style>

                </div>
            </div>
        </div>
    </div>






</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



<!-- Back to top button -->
<button type="button" class="btn pback btn-floating btn-lg" id="btn-back-to-top">
    <i class="fa fa-arrow-up"></i>
</button>


<script>
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


</script>



</body>

</html>