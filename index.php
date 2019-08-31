<?php require_once 'dist/scripts/includes.php';
$page = new ProjectTaxIncludes();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="dist/Styles/layout.css">
    <script src="https://kit.fontawesome.com/f618f790f8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>TaxIt.ng || Home</title>
</head>
<body>
   <div class="header-section">
       <div class="top-nav">
           <?php echo $page->topnav(); ?>

       </div>
       <div class="logo-section">
            <img src="https://res.cloudinary.com/dcczd9zz5/image/upload/v1567174130/ff_nbwkbr.png" width="300px">
        </div>
        <div class="main-nav">
            <?php echo $page->mainnav(); ?>

        </div>
   </div>
   <div class="intro-section">
        <div>
            <h1>Best Way to pay Tax</h1>
        </div>
   </div>

   <div class="footer-section">
       <div style="margin: 30px;">
          <?php echo $page->footer1();
           echo $page->footer2();
           echo $page->footer3();
            echo $page->footer4(); ?>
       </div>
       <hr style="margin:0px 50px;">
       <?php echo $page->copyright(); ?>
   </div>

</body>
</html>
