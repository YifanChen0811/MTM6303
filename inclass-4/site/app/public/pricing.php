<?php
    // Require the Session start function
    require_once "includes/session_include.php";
    // Added Page title to be stored in the $_SESSION variable
    $_SESSION["page_title"] = "Pricing Page";
    $_SESSION["current_page"] = "pricing";
    
    // Including the header
    include "includes/header.php"; 
?>
<div class="section-container">
    <div class="container">
        <div class="row section-container-spacer">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1>Pricing</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <p>Adipiscing vitae proin sagittis nisl rhoncus mattis. Bibendum enim facilisis gravida neque
                        convallis
                        a cras semper auctor. Sit amet risus nullam eget felis eget. Metus dictum at tempor commodo
                        ullamcorper
                        a lacus vestibulum. Sit amet facilisis magna etiam tempor orci eu. Eleifend mi in nulla posuere.
                        Et magnis dis parturient montes nascetur ridiculus mus mauris vitae.
                    </p>
                </div>
            </div>
        </div>



        <?php 
            $title_num = 1;

            $cards = [
                "card_1" => [
                    "title" => "Personal",
                    "class" => "pricing-primary",
                    "para" => "<li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    <li>Gravida arcu ac tortor dignissim</li>",
                    "link" => "#"
                ],
                "card_2" => [
                    "title" => "Professional",
                    "class" => "pricing-info",
                    "para" => "<li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    <li>Gravida arcu ac tortor dignissim</li>
                    <li>Gravida arcu ac tortor dignissim convallis aenean</li>",
                    "link" => "#"
                ],
                "card_3" => [
                    "title" => "Business",
                    "class" => "pricing-secondary",
                    "para" => "<li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    <li>Gravida arcu ac tortor dignissim</li>
                    <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    <li>Gravida arcu ac tortor dignissim</li>",
                    "link" => "#"
                ],
            ];
        ?>

        <div class="row">
            <?php foreach ($cards as $card_key => $card_value) { 
            $price = "";
            switch($title_num) {
                case 1:
                    $price =  "18";
                    break;
                case 2:
                    $price =  "28";
                    break;
                case 3:
                    $price =  "48";
                    break;
                }    
            ?>

            <div class="col-md-4">
                <div class="pricing-card <?php echo $card_value['class'] ?>" id="<?php echo $card_key ?>">
                    <h3><?php echo $card_value['title']?></h3>
                    <h6 class="price"><?php echo $price?> <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <?php echo $card_value['para'] ?>
                    </ul>

                    <a href="<?php echo $card_value['link'] ?>" class="btn btn-primary" title="">Subscribe</a>
                </div>

            </div>
            <?php $title_num++;} ?>
        </div>
    </div>
</div>

<?php
    // Including the footer
    include "includes/footer.php"; 
?>