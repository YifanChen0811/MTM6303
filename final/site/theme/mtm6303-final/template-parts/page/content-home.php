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





<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                <h1>Latest Posts</h1>
              </div>
            </div>
        </div>
     </div>
 </div>

 <div class="container">              <?php echo do_shortcode( ' [mtm6303finalplugin] ' ); ?></div>
<div class="container">
    <div class="row">
      <!-- <div class="col-md-6">
        <h2>Post Title</h2>
                <img class="img-responsive" src="./assets/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div>
      <div class="col-md-6">
        <h2>Post Title 2</h2>
                <img class="img-responsive" src="./assets/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div>
      <div class="col-md-6">
        <h2>Post Title 3</h2>
                <img class="img-responsive" src="./assets/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div>
      <div class="col-md-6">
        <h2>Post Title 4</h2>
                <img class="img-responsive" src="./assets/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div> -->
      <?php
      if ( have_posts() ) :
    while (have_posts()) : the_post();
    echo 
    '<div class="col-md-6">' .
    '<h2>' . get_the_title() . '</h2>'
           . get_the_post_thumbnail($post_id, array('class' => 'img-responsive' ))
           . '<br>'
   . '<p>' . get_the_content() . '</p>'
  . '</div>';
    endwhile; 
endif;
?>
    </div>
</div>
