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
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// spl_autoload_register(function ($classname) {
//     $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
//     $filename = __DIR__ . DIRECTORY_SEPARATOR . 'A_email' . DIRECTORY_SEPARATOR . 'PHPMailer' . DIRECTORY_SEPARATOR . $classPath . '.php';
//     if (is_readable($filename)) {
//         require $filename;
//     }
// });



// Comment out or remove these lines, as they are not required
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$number = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = SMTP::DEBUG_OFF; // or SMTP::DEBUG_SERVER to enable debugging
$mail->Host = 'smtp.gmail.com';  // Replace with your SMTP host
$mail->Port = 587;  // Replace with the SMTP port (587 is the default for TLS)
$mail->SMTPAuth = true;
$mail->Username = 'tejpratap.digitalshakha@gmail.com';  // Replace with your SMTP username
$mail->Password = 'ckytndyqptfopcns';  // Replace with your SMTP password
$mail->SMTPSecure = 'tls';  // Enable TLS encryption; 'ssl' is also possible if supported by your server

$mail->setFrom('tejpratap.digitalshakha@gmail.com', $name);  // Replace with your email and name
$mail->addAddress('tejpratap.digitalshakha@gmail.com');  // Replace with the recipient's email address
$mail->Subject = 'New Contact Form Submission';
// $mail->Body = "Name: $name\nPhone: $number\nEmail: $email\nMessage:\n$message";
$mail->Body = '<html>
                  <head>
                    <style>
                      body {
                        font-family: Arial, sans-serif;
                        background-color: #f1f1f1;
                      }
                      h1 {
                        color: #333;
                      }
                      h1 span{
                        color:#000000;
                      }
                      p {
                        color: #555;
                      }
                    </style>
                  </head>
                  <body>
                    <h1>New query from the <span> Thee Manager </span></h1>
                    <p><strong>Name:</strong> ' . $name . '</p>
                    <p><strong>Phone:</strong> ' . $number . '</p>
                    <p><strong>Email:</strong> ' . $email . '</p>
                    <p><strong>Message:</strong></p>
                    <p>' . $message . '</p>
                  </body>
                </html>';

if ($mail->send()) {
    $_SESSION['thee_msg'] = "Thank you for your message! We will get back to you soon.";
    // echo "Thank you for your message! We will get back to you soon.";
    header('location:../index.php');
} else {
    echo "Oops! Something went wrong. Please try again later.";
    echo "Mailer Error: " . $mail->ErrorInfo;
}



// if(isset($_POST['send'])){
//     ini_set('SMTP', 'smtp.example.com');
//     ini_set('smtp_port', 587);
//     stream_context_set_option($options, 'ssl', 'verify_peer', false);
//     stream_context_set_option($options, 'ssl', 'verify_peer_name', false);
//     $name = $_POST['name'];
// $number = $_POST['phone'];
// $email = $_POST['email'];
// $message = $_POST['message'];

//     $toEmail = 'tejpratap.digitalshakha@gmail.com';
//     $emailSubject = 'New email from your contact form';
//     $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
//     $bodyParagraphs = ["Name: {$name}","Phone:{$number}", "Email: {$email}" , "Message:", $message];
//     $body = join(PHP_EOL, $bodyParagraphs);

//     if (mail($toEmail, $emailSubject, $body, $headers)) {
//         echo "done";
//         // header('Location: ./index.php');
//     } else {
//         echo "Failed";
//         // $errorMessage = 'Oops, something went wrong. Please try again later';
//     }
// }
?>