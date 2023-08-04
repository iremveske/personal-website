<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Excception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset ($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'irem.vsk121@gmail.com'; //gmail hesabı
    $mail->Password = 'veske2312' //gmail şifresi
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom(); //gmail hesabı

    $mail->addAdress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    <document.location.href" = 'index.php';
    </script>
    ";
}
?>