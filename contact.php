<?php
require __DIR__ . '/vendor/autoload.php';
require_once ('sendmail.php');
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

    $data= [
         'name'=>$_POST['name'],
         'email'=>$_POST['email'],
         'message'=>$_POST['message'],
        ];
        
        function sendMailSupport($data){
            $subject='Mensaje del formulario de contacto';
            $body= '<!DOCTYPE html>
                      <html lang="en">
                         <head>
                            <meta charset="UTF-8" />
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                            <title>Email Contacto DNComputing</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                         </head>

                         <body style="margin: 0; padding: 0;">
                           <table align="center" border="1" cellpadding="0" cellspacing="0" width="600">
                             <tr>
                                <td align="center" bgcolor="#fff" style="padding: 5px 0 5px 0;">
                                  <img src="http://i64.tinypic.com/am2nex.png" alt="Creating Email Magic" width="120" height="120" style="display: block;" />
                                </td>
                             </tr>
                             <tr>
                                <td bgcolor="#fff" style="padding: 40px 20px 30px 20px">
                                  <h2 align="center">Detalles de correo de contacto DNComputing</h2>
                                  <h3>Nombre:</h3>
                                  <h3>Email:</h3>
                                  <h3>Mensaje:</h3>
                                </td>
                             </tr>
                             <tr>
                                <td bgcolor="#fff" style="padding: 40px 20px 30px 20px">
                                   <p>DNComputing</p>
                                   <a href="http://dncomputing.com/" target="_blank" title="dncomputing">www.dncomputing.com</a>
                                </td>
                             </tr>
                           </table>
                         </body>
                      </html>';
            sendMail('soporte@ngncloud.com',$subject,$body);

        }


        function sendMailClient($data){
            $subject='Mensaje recibido ';
            $body= '<!DOCTYPE html>
                      <html lang="en">
                         <head>
                            <meta charset="UTF-8" />
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                            <title>Email Contacto DNComputing</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                         </head>

                         <body style="margin: 0; padding: 0;">
                           <table align="center" border="1" cellpadding="0" cellspacing="0" width="600">
                             <tr>
                                <td align="center" bgcolor="#fff" style="padding: 5px 0 5px 0;">
                                  <img src="http://i64.tinypic.com/am2nex.png" alt="Creating Email Magic" width="120" height="120" style="display: block;" />
                                </td>
                             </tr>
                             <tr>
                                <td bgcolor="#fff" style="padding: 40px 20px 30px 20px">
                                  <h2 align="center">Gracias por contactarnos</h2>
                                  <p>A la brevedad posible le responderemos</p>
                                </td>
                             </tr>
                             <tr>
                                <td bgcolor="#fff" style="padding: 40px 20px 30px 20px">
                                   <p>DNComputing</p>
                                   <a href="http://dncomputing.com/" target="_blank" title="dncomputing">www.dncomputing.com</a>
                                </td>
                             </tr>
                           </table>
                         </body>
                      </html>';
            sendMail($data['email'],$subject,$body);
        }

        sendMailSupport($data);
       sendMailClient($data);
        
        
    
}

?>