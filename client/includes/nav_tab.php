
<div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"><h1><strong>E-BURAK</strong></h1> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li > <a href="index">Home</a> </li>
                                 <li> <a href="gallery">Gallery</a> </li>
                                 <li><a href="cart_list">Cart list</a></li>
                                 <li><a href="add_to_cart">Add to Cart</a></li>
                                 <li><a href="contact_us">Contact us</a></li>
                                 <?php if(!isset($_SESSION['user'])){?>
                                    <li><a href="sign-in">Sign-in</a></li>
                                  
                                   <?php }else{?> 
                                    <li><a href="">Sign-out</a></li>
                                 <?php }?>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>