<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpMailer/src/Exception.php';
// require 'phpMailer/src/PHPMailer.php';
// require 'phpMailer/src/SMTP.php';




if(isset($_POST['send'])){
//   $mail = new PHPMailer(true);
//   $mail -> isSMTP();
//   $mail ->Host ='smpt.gmail.com';
//   $mail ->SMTPAuth = true;
//   $mail ->Username ='tejpratap.digitalshakha@gmail.com'; // your gmail
//   $mail ->Password ='ckytndyqptfopcns'; // your gmail app password
//   $mail ->SMTPSecure ='ssl';
//   $mail ->Port = 465;

//   $mail -> setFrom('tejpratap.digitalshakha@gmail.com'); //your gmail
//   $mail ->addAddress($_POST['email']);
//   $mail -> isHTML(true);

//   $mail ->Subject  = $_POST['name'];
//   $mail ->Body = $_POST['message'];

// $mail ->send();
// echo"
// <script>
// alert('Thankyou WE  Connect Soon');
// </script>
// ";
// header('location:index.php');
    $name = $_POST['name'];
    $number =$_POST['phone'];
    $email  = $_POST['email'];
    $message = $_POST['message'];

    $all =[$name,$number,$email,$message];

    foreach($all as $k => $v){
            $data = $v;
    }
    // echo $all;
    // echo $name;
    print_r($all);

      // Predefined client email
      $client_email = "tejpratap.digitalshakha@gmail.com";

      // Compose the email content
      $subject = "New email from website";
      $message = "You received a new email from: " . $data;
      $headers = "From: " . $email;
  
      // Send the email
      if (mail($client_email, $subject, $message, $headers)) {
          echo "Email sent successfully.";
        //   header('location:../index.php');
      } else {
          echo "Failed to send email.";
        //   header('location:../index.php');
      }
}
?>