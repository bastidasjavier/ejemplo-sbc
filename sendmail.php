<?php
function sendMail($email, $subject, $body)
{
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sopor@ngncloud.com';                 // SMTP username
    $mail->Password = 'dae1e9d168ca6609df625234baf848b4';     // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('soporte@ngncloud.com', 'DNComputing');
    $mail->addAddress($email, 'Contacto DNComputing');     // Add a recipient
    $mail->addReplyTo('soporte@ngncloud.com', 'DNComputing');

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $body;

    if (!$mail->send()) {
        return [
            'error' => $mail->ErrorInfo,
            'estado' => false
        ];

    } else {
        return [
            'error' => false,
            'estado' => true
        ];
    }
}

?>