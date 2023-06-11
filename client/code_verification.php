<?php session_start();
 

if(isset($_POST['verify'])){
    $verify=$_POST['otp1'];
    $verified=$_POST['otp2'];

    if ($verify != $verified) {
      //   echo "<script>alert('OTP doesn't matched!')</script>";
      //   echo '<script>window.location="code_verification"</script>';
      
      $_SESSION['x'] = "OTP doesn't matched!";
       header("Location:code_verification");

        
    }else{

        $_SESSION['o']=$verified;
        echo "<script>alert('OTP matched! Please click ok to proceed!')</script>";
        echo '<script>window.location="registration_form"</script>';
        
    }
}


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

      <section>

      </section>

      

     

      <!--contact -->
      

      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>OTP Verification</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 paddimg-right">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                       
                        <form action="" method="POST">
                           <div class="row">
                           <h3><b>Please input the otp we send to your gmail(<font color="blue"><?php echo $_SESSION['email'];?></font>) for verification.</b></h3>

                           <h1> <strong><font color="red">
                              <?php if(isset($_SESSION['x'])){?>
                                   
                                    <?php echo $_SESSION['x'];?>
                                  <?php }?>  
                           </font></strong></h1>  
                           <input type="hidden" name="otp2" value="<?= $_SESSION['otp'];?>"class="form-control">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="XXXX" type="number" name="otp1" required>
                              </div>
                             
                              
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <button type="submit" name="verify" class="btn btn-danger form-control">Verify</button>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="map_section">
                           <figure><img src="images/map.jpg"></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 paddimg-left">
                  <div class="Nursery-img">
                     <figure>
                        <img src="images/contactimg.jpg" alt="img"/>
                        <div class="text-box">
                           <h3>Welcome our dear Clients!</h3>
                        </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <!-- end contact -->
      <!-- footer -->
      <footer>
      <?php include 'includes/footer.php'?>
      </footer>
      <!-- end footer -->
     

      <?php include 'includes/footer_scripts.php'?>
   </body>
</html>