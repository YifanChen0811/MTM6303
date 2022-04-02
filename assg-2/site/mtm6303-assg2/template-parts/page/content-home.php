<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php  get_template_part('template-parts/page/content', 'page-header'); ?>





<div class="white-text-container background-image-container" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/img-home.jpg)">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Yifan's Assignment 2</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="/type-something/" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2>Home Content</h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
     </div>
 </div>

<?php get_footer(); ?>