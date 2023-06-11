<?php
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    include 'sms_controller.php';
    // abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
    function otp($length = 4) {
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

    if(isset($_POST['send'])){
        
       
        
        $means = $_POST['verify'];
        
        if($means == 'CONTACT'){
        
        $otp =otp();
        $message="Your OTP is".":".$otp;
        $_SESSION['otp']=$otp;
        $mobilenumber=$_POST['contact'];
        $_SESSION['contact']=$mobilenumber;
        $send = send_text_api($mobilenumber,$message);
        if($send == false){
            echo json_encode("Success.");
            // header("Location:code_verification");	
        }else if($send == true){
            echo json_encode("Message Sent.");
            // header("Location:code_verification");
        }else{
            
            header("Location:contact_us");
        }
    }
 
    if($means =='EMAIL'){
        $email = $_POST['email'];
        $_SESSION['otp']=otp();

       $_SESSION['email']=$email;
       

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    
    
    $mail = new PHPMailer(true);
    
    
    
    try {
     
                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'eburak2023@gmail.com';                    
        $mail->Password   = 'blhsyscatyeeyfnv';                             
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                    
    
      
        $mail->setFrom('eburak2023@gmail.com', 'E-BURAK');
    
        $mail->addAddress($email);             
    
        // $mail->addAttachment('img/fav.jpg','fav.jpg');
    
        $mail->isHTML(true);                                 
        $mail->Subject = 'EMAIL VERIFICATION';
        $mail->Body    = '<h1 align="center" style="margin-bottom:0px;">E-BURAK: Flower Management System</h1><br><h2 align="center" style="margin-top:0px;"> OTP Code: <span style="color:red">'.$_SESSION['otp'].'</span></h2>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo '<script>alert("OTP has been  sent! Please check your Gmail account.")</script>';
        echo '<script>window.location="code_verification"</script>';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo '<script>alert("Check your Internet Connection and please try again!.")</script>';
        echo '<script>window.location="contact_us"</script>';
    }

    }
     
    }
  

?>