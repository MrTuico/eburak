<?php session_start();
   unset($_SESSION['x']);

   ?>
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
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
     
     
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
      <br><br><br><br><br><br>
      <section>
      <!-- <div id="contact" class="carousel slide banner-main"> -->
      <?php include 'includes/cart.php';?>
      <!-- </div> -->
      <br>
      <br>
      </section>

    


      <!--Gallery -->
    
      <!-- end Gallery -->

     
      <footer>
      <?php include 'includes/footer.php'?>
      </footer>
      <!-- end footer -->
     

      <?php include 'includes/footer_scripts.php'?>

      <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  
 <script>
  $(document).ready(function () {
    $('#example').DataTable();
});

</script>
      
   </body>
</html>