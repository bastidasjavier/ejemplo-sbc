<?php
function sendMail($email, $subject, $body)
{
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contacto@dncomputing.com';                 // SMTP username
    $mail->Password = 'aec128e4a4912ec475e9a522f06c5f30';     // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('contacto@dncomputing.com', 'DNComputing');
    $mail->addAddress($email, 'Contacto DNComputing');     // Add a recipient
    $mail->addReplyTo('contacto@dncomputing.com', 'DNComputing');

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