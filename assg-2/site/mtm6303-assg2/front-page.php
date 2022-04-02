<?php
/**
 * Front Page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303-assg2
 */

get_header(); ?>

<?php
    while (have_posts()) : the_post();
        get_template_part('template-parts/page/content', 'front-page');
    endwhile; // End of the loop.

?>

<!-- Call to Action -->
<section class="row" id="tmCallToAction">
    <div class="col-12 tm-page-cols-container tm-call-to-action-col">
        <div class="tm-page-col-right">
            <div class="tm-call-to-action-box">
                <i class="fas fa-3x fa-rss-square tm-call-to-action-icon"></i>
                <div class="tm-call-to-action-text">
                    <h3 class="tm-call-to-action-title">
                        Vivamus sollicitudin tellus
                    </h3>
                    <p class="tm-call-to-action-description">
                        Maecenas maximus tellus in dolor auctor tristique. Nam
                        hendrerit posuere laoreet. Aliquam erat volutpat. Nulla eros
                        est, imperdiet vel feugiat non, ullamcorper mattis nulla.
                    </p>
                    <form action="#" method="GET" class="tm-call-to-action-form">
                        <input type="email" name="email" placeholder="Email" class="tm-email-input" required />
                        <button type="submit" class="btn btn-primary">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>