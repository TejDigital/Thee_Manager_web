<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpMailer/src/Exception.php';
// require 'phpMailer/src/PHPMailer.php';
// require 'phpMailer/src/SMTP.php';




// if(isset($_POST['send'])){
// //   $mail = new PHPMailer(true);
// //   $mail -> isSMTP();
// //   $mail ->Host ='smpt.gmail.com';
// //   $mail ->SMTPAuth = true;
// //   $mail ->Username ='tejpratap.digitalshakha@gmail.com'; // your gmail
// //   $mail ->Password ='ckytndyqptfopcns'; // your gmail app password
// //   $mail ->SMTPSecure ='ssl';
// //   $mail ->Port = 465;

// //   $mail -> setFrom('tejpratap.digitalshakha@gmail.com'); //your gmail
// //   $mail ->addAddress($_POST['email']);
// //   $mail -> isHTML(true);

// //   $mail ->Subject  = $_POST['name'];
// //   $mail ->Body = $_POST['message'];

// // $mail ->send();
// // echo"
// // <script>
// // alert('Thankyou WE  Connect Soon');
// // </script>
// // ";
// // header('location:index.php');
//     $name = $_POST['name'];
//     $number =$_POST['phone'];
//     $email  = $_POST['email'];
//     $message = $_POST['message'];

//     // $all =[$name,$number,$email,$message];

//     // foreach($all as $k => $v){
//     //         $data = $v;
//     // }
//     // // echo $all;
//     // // echo $name;
//     // print_r($all);

//     $to = "tejpratap.digitalshakha@gmail.com"; // Replace with the recipient's email address
//     $subject = "New Contact Form Submission";
//     $body = "Name: $name\nPhone: $number\nEmail: $email\nMessage:\n$message";

//     // Send the email using the mail() function
//     if (mail($to, $subject, $body)) {
//         echo "Thank you for your message! We will get back to you soon.";
//     } else {
//         echo "Oops! Something went wrong. Please try again later.";
//     }
// }
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;

require './PHPMailer/get_oauth_token.php';
// require './PHPMailerAutoload.php';

$name = $_POST['name'];
$number = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smpt.gmail.com';  // Replace with your SMTP host
$mail->Port = 587;  // Replace with the SMTP port (587 is the default for TLS)
$mail->SMTPAuth = true;
$mail->Username = 'tejpratap.digitalshakha@gmail.com';  // Replace with your SMTP username
$mail->Password = 'ckytndyqptfopcns';  // Replace with your SMTP password
$mail->SMTPSecure = 'tls';  // Enable TLS encryption; 'ssl' is also possible if supported by your server

$mail->setFrom('tejpratap.digitalshakha@gmail.com', 'Your Name');  // Replace with your email and name
$mail->addAddress('tejpratap.digitalshakha@gmail.com');  // Replace with the recipient's email address
$mail->Subject = 'New Contact Form Submission';
$mail->Body = "Name: $name\nPhone: $number\nEmail: $email\nMessage:\n$message";

if ($mail->send()) {
    echo "Thank you for your message! We will get back to you soon.";
} else {
    echo "Oops! Something went wrong. Please try again later.";
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>