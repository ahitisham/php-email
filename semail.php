<!-- unable smtp first = https://www.google.com/settings/u/0/security/lesssecureapps -->

<!-- https://touchmail.uservoice.com/knowledgebase/articles/560391-enabling-third-party-apps-in-gmail-->
<?php
require("PHPMailer-master/PHPMailerAutoload.php");
require("PHPMailer-master/class.phpmailer.php");
require("PHPMailer-master/class.smtp.php");

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'ahitisham.j2ee@gmail.com';
$mail->Password = '05361269081';
$mail->SMTPSecure = 'ss';

$mail->From = 'ahitisham.j2ee@gmail.com';
$mail->FromName = 'ahitisham.j2ee@gmail.com';
$mail->addAddress('ahitisham.a@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Test Mail Subject! now';
$mail->Body    = 'This is SMTP Email Test';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
}