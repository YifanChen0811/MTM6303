<?php $title = "A Simple PHP Files"; ?>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      
<?php

    /******************************** 
     All PHP variables and 
     Functions are 
     defined in this section
    *******************************/
    
    // Titles are defined here 
    $title_num = 1;
    
    $title_1 = "Title " . $title_num;
    // $title_num = 1 + 1;
    $title_num = $title_num + 1;
    $title_2 = "Title " . $title_num;
    // 2 + 1 = 3
    $title_num++;
    $title_3 = "Title " . $title_num;
    
    $imgUrlStart = "https://www.algonquincollege.com/future-students/files";
    
    $img_1 = $imgUrlStart . "/2021/08/Scriptwriting.jpg";
    $img_2 = $imgUrlStart . "/2021/09/how-to-apply-768x513.jpg";
    $img_3 = $imgUrlStart . "/2021/09/ongoing-afternoons-768x513.jpg";
    
    
    $para_1 = "do you have prior work, life, or academic experience? Learn more about how you can turn this experience into course credit.";
    $para_2 = "join us to learn how to go through the steps to apply to college. Thursdays at 3:30pm";
    $para_3 = "join a recruiter for a daily drop-in session about all of our campuses, programs and services. Plus get your questions answered in our live Q&A. Tuesdays at 3:30pm";
    
    
    // Button Class 
    $btn_class = "success";
    
    // Paragrpah End 
    $end_value = 102;
    # This is a comment
    // echo $title1;
    
    
    // Link variables
    $link_start = "https://algonquincollege.zoom.us/webinar/register";
    $link_1 = $link_start . "/WN_Apmao0mxReGikDv-d6vJpg";
    $link_2 = $link_start . "/WN_qmrPjdPYSmWG8ctN-S-6IQ";
    $link_2 = $link_start . "/WN_DisQR6KmSPKmVeTqle2tWA";
?>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="<?php echo $img_1 ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo "Hello, $title_1"; ?></h5>
        <?php 
            echo '<p class="card-text">'. substr(ucfirst($para_1), 0, $end_value) .'...</p>';
        ?>
      <a href="<?php echo $link_1?>" class="btn btn-<?php echo $btn_class ?>">Button</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo $img_2 ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo "Hello," . " " . $title_2; ?></h5>
        <?php 
            echo '<p class="card-text">'. substr(strtoupper($para_2), 0 , $end_value) .'..</p>';
        ?>
        <a href="<?php echo $link_2?>" class="btn btn-<?php echo $btn_class ?>">Button</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo $img_3 ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo "Hello," . " " . $title_3; ?></h5>
        <?php 
            echo '<p class="card-text">'. substr(ucwords($para_3), 0 , $end_value) .'..</p>';
        ?>
        <a href="<?php echo $link_3?>" class="btn btn-<?php echo $btn_class ?>">Button</a>
      </div>
    </div>
  </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>