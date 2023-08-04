<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// buraya dokunma
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        // SMTP ayarları
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'irem.vsk121@gmail.com'; // eposta adresi
        $mail->Password = 'cctsxftblslystqo'; // app şifresi
        $mail->SMTPSecure = 'ssl'; 
        $mail->Port = 465; 

        $mail->setFrom(irem.vsk121@gmail.com);
        $mail->addAddress('irem.vsk121@gmail.com'); 
        $mail->Subject = "Yeni Mesaj: " . $name;
        $mail->Body = $message;

        $mail->send();

        echo "E-posta başarıyla gönderildi!";
    } catch (Exception $e) {
        echo "E-posta gönderilirken bir hata oluştu: " . $mail->ErrorInfo;
    }
}
?>
