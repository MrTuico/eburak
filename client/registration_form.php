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

      <section>
     
      </section>

      

     

      <!--contact -->
   
      <div id="contact" class="carousel slide banner-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h1><b>REGISTRATION FORM</b></h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 paddimg-right">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                       
                        <form action="" method="POST">
                        <h3><b>(Registration Form) Please fill up the input fields.</b></h3>
                           <div class="row">
                         

                           <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                 <input  class="form-control" placeholder="Firstname*" type="text" name="fname" required>
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Middlename" type="text" name="mname" required>
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Surname*" type="text" name="sname"  required>
                              </div>
                        
                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                 <input readonly class="form-control" placeholder="Email" type="text" name="email" value="<?php echo $_SESSION['email']?>" required>
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Contact Number" type="number" name="contact" required>
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Birthday" type="date" name="bdate" required>
                              </div>

                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Address*" type="text" name="address"  required>
                              </div>
                             
                              
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <button type="submit" name="send" class="btn btn-danger form-control">SUBMIT</button>
                              </div>
                           </div>
                        </form>
                     </div>
                    
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!-- footer -->
</br>
      <footer>
      <?php include 'includes/footer.php'?>
      </footer>
      <!-- end footer -->
     

      <?php include 'includes/footer_scripts.php'?>
   </body>
</html>