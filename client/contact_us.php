<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>E-BURAK</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <?php include 'includes/header.php';?>
     
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>

         <!-- header inner -->
       <?php include 'includes/nav_tab.php';?>
         <!-- end header inner -->

      </header>
      <!-- end header -->
<br><br>
      <section>
      <!-- <?php include 'includes/section.php'?> -->
      </section>

      

     

      <!--contact -->
      <?php include 'includes/contact.php'?>
      <!-- end contact -->
      <!-- footer -->
      <footer>
      <?php include 'includes/footer.php'?>
      </footer>
      <!-- end footer -->
     

      <?php include 'includes/footer_scripts.php'?>
   </body>
</html>