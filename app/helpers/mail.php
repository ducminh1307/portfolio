<?php
function sendMail($name, $phone, $mailFrom, $subject, $message)
{

    require './app/PHPMailer/PHPMailer.php';
    require './app/PHPMailer/SMTP.php';
    require './app/PHPMailer/Exception.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    $mailTo = 'phamducminh1302@gmail.com';
    try {

        $mail->isSMTP();
        $mail->CharSet = 'utf8';
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'truyentranhzuik20@gmail.com';
        $mail->Password   = 'ndvblqlzvqjhxyse';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('truyentranhzuik20@gmail.com', 'Contact from Portfolio: ' . $mailFrom);
        $mail->addAddress($mailTo);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body =    'This e-mail from <b>' . $name . '</b>
                            <br> Email: <b>' . $mailFrom . '</b>
                            <br> Phone number: <b>' . $phone . '</b>
                            <br><br> Message:
                            <br>' . $message;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
