<?php
require __DIR__ . '/vendor/autoload.php';
//use PHPMailer;
if(isset($_POST['email'])) {

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'soporte@ngncloud.com';                 // SMTP username
    $mail->Password = 'dae1e9d168ca6609df625234baf848b4';     // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('soporte@ngncloud.com', 'Mensaje del formulario de contacto');
    $mail->addAddress('soporte@ngncloud.com', 'Mensaje del formulario de contacto');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('soporte@ngncloud.com', 'Mensaje enviado');
    /*$mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/
/*
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje del formulario de contacto';
    $mail->Body = "<b>Detalles del formulario de contacto:</b>\n\n".
    "Nombre: " . $name . "\n".
    "E-mail: " . $email . "\n".
    "Mensaje: " . $message . "\n\n";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Mensaje no se pudo enviar.';
        //echo 'Hubo un error: ' . $mail->ErrorInfo;
        var_dump($mail);
    } else {
        echo 'Mensaje enviado con exito.';
    }
}

?>