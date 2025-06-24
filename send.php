<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'fikriadityaky@gmail.com';      // GANTI DENGAN EMAILMU
        $mail->Password   = 'jepwdxjgiwebubvi';   // GANTI DENGAN APP PASSWORD
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipient
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('fikriadityaky@gmail.com'); // GANTI DENGAN EMAILMU

        // Content
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body    = nl2br("Nama: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\n\nPesan:\n" . $_POST['message']);

        $mail->send();
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Pesan gagal dikirim: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
