<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage mtm6303-final
 * @since MTM6303 Final 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="msapplication-tap-highlight" content="no">
    <title><?php
    // Print the <title> tag based on what is being viewed.
    global $page, $paged;?></title>
</head>

<body>
    <!-- Add your content of header -->
    <header>
    <nav class="navbar  navbar-fixed-top navbar-default">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="./index.php" title="">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/apple-icon-180x180.png" class="navbar-logo-img" alt=""> -->
            <!-- </a> -->
        </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
                <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="./index.html" title="" class="active">Home</a></li>
            <li><a href="./page.html" title=""> About</a></li>
            <li><a href="./contact.html" title=""> Contact Us </a></li> -->
                    <?php
                         $menu_items = mtm6303_getnav("top");
                         foreach ($menu_items as $menu_item) {
                    ?>
                    <li>
                        <a href="<?php echo $menu_item["url"] ?>" class="<?php echo ($menu_item["active"]) ? "active" : "" ?>">
                            <?php echo $menu_item["title"] ?>
                        </a>
                    </li>
                    <?php
                                    }
                                ?>
                </ul>
            </div>
        </div>
    </nav>
    </header>