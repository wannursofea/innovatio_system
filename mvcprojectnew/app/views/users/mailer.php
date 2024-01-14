<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once APPROOT . '/PHPMailer/src/Exception.php';
require_once APPROOT . '/PHPMailer/src/PHPMailer.php';
require_once APPROOT . '/PHPMailer/src/SMTP.php';

function createMailerInstance() {
    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = 2;
    // $mail = new PHPMailer(true);
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;  // Use port 587 for STARTTLS


    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    // $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "youthventure06@gmail.com";
    $mail->Password = "ssrx xbnm cxnb bqug";
    $mail->isHtml(true);

    return $mail;
}
?>