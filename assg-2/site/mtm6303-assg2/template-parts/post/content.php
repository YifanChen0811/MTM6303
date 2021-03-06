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
<div class="row">
    <h2 class="tm-text-secondary">
        <a href="<?php echo get_permalink() ?>"><?php echo get_the_title();?></a>
    </h2>
    <div class="col-md-12">
        <?php the_post_thumbnail('medium_large') ?>
    </div>

    <div class="entry-content-page">
        <?php the_excerpt(); ?>
    </div>
</div>