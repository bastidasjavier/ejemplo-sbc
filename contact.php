<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
require_once('sendmail.php');
//use PHPMailer;
$validateCaptcha = validateCaptcha($_POST['g-recaptcha-response']);

if ($validateCaptcha) {

    // Aquí se deberían validar los datos ingresados por el usuario
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {

        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
        die();
    }

    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
    ];

    $respuestaSoporte = sendMailSupport($data);
    $respuestaCliente = sendMailClient($data);
    $url = $_SERVER['HTTP_REFERER'] . '#contact';

    if (!$respuestaSoporte['error'] && !$respuestaCliente['error']) {
        $_SESSION['error'] = false;
        header('Location:' . $url);
    } else {
        $_SESSION['error'] = true;
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['message'] = $data['message'];
        header('Location:' . $url);
    }


} else {
    echo 'Captcha Erroneo';
}

function validateCaptcha($captchaForm)
{
    $captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdTdyETAAAAAES4d1iqh5JNq5K9L6zpRmxU0lQS&response=' . $captchaForm . '&remoteip=' . $_SERVER['REMOTE_ADDR']),
        true);
    if ($captcha['success'] === true) {
        return true;
    } else {
        return false;
    }
}

function sendMailSupport($data)
{
    $subject = 'Mensaje del formulario de contacto';
    $body = '<!DOCTYPE html>
              <html lang="en">
              <head>
                <meta charset="UTF-8" />
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <title>Email DNComputing</title>
                <style type="text/css">

              @media screen and (max-width: 600px) {
                  table[class="container"] {
                      width: 95% !important;
                  }
              }

                #outlook a {padding:0;}
                  body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
                  .ExternalClass {width:100%;}
                  .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
                  #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
                  img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
                  a img {border:none;}
                  .image_fix {display:block;}
                  p {margin: 1em 0;}
                  h1, h2, h3, h4, h5, h6 {color: black !important;}

                  h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

                  h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
                    color: red !important;
                   }

                  h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
                    color: purple !important;
                  }

                  table td {border-collapse: collapse;}

                  table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

                  a {color: #000;}

                  @media only screen and (max-device-width: 480px) {

                    a[href^="tel"], a[href^="sms"] {
                          text-decoration: none;
                          color: black; /* or whatever your want */
                          pointer-events: none;
                          cursor: default;
                        }

                    .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                          text-decoration: default;
                          color: orange !important; /* or whatever your want */
                          pointer-events: auto;
                          cursor: default;
                        }
                  }


                  @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
                    a[href^="tel"], a[href^="sms"] {
                          text-decoration: none;
                          color: blue; /* or whatever your want */
                          pointer-events: none;
                          cursor: default;
                        }

                    .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                          text-decoration: default;
                          color: orange !important;
                          pointer-events: auto;
                          cursor: default;
                        }
                  }

                  @media only screen and (-webkit-min-device-pixel-ratio: 2) {
                    /* Put your iPhone 4g styles in here */
                  }

                  @media only screen and (-webkit-device-pixel-ratio:.75){
                    /* Put CSS for low density (ldpi) Android layouts in here */
                  }
                  @media only screen and (-webkit-device-pixel-ratio:1){
                    /* Put CSS for medium density (mdpi) Android layouts in here */
                  }
                  @media only screen and (-webkit-device-pixel-ratio:1.5){
                    /* Put CSS for high density (hdpi) Android layouts in here */
                  }
                  /* end Android targeting */
                  h2{
                    color:#181818;
                    font-family:Helvetica, Arial, sans-serif;
                    font-size:22px;
                    line-height: 22px;
                    font-weight: normal;
                  }
                  a.link1{

                  }
                  a.link2{
                    color:#fff;
                    text-decoration:none;
                    font-family:Helvetica, Arial, sans-serif;
                    font-size:16px;
                    color:#fff;border-radius:4px;
                  }
                  p{
                    color:#555;
                    font-family:Helvetica, Arial, sans-serif;
                    font-size:16px;
                    line-height:160%;
                  }
                </style>

              <script type="colorScheme" class="swatch active">
                {
                  "name":"Default",
                  "bgBody":"ffffff",
                  "link":"fff",
                  "color":"555555",
                  "bgItem":"ffffff",
                  "title":"181818"
                }
              </script>

              </head>
              <body>
                <!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
                <table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class="bgBody">
                <tr>
                  <td>
                <table cellpadding="0" width="620" class="container" align="center" cellspacing="0" border="0">
                <tr>
                  <td>
                  <!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->


                  <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                    <tr>
                      <td class="movableContentContainer bgItem">

                        <div class="movableContent">
                          <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                            <tr height="40">
                              <td width="200">&nbsp;</td>
                              <td width="200">&nbsp;</td>
                              <td width="200">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="200" valign="top">&nbsp;</td>
                              <td width="200" valign="top" align="center">
                                <div class="contentEditableContainer contentImageEditable">
                                          <div class="contentEditable" align="center" >
                                              <img src="http://i64.tinypic.com/am2nex.png" width="125" height="125"  alt="Logo"  data-default="placeholder" />
                                          </div>
                                        </div>
                              </td>
                              <td width="200" valign="top">&nbsp;</td>
                            </tr>
                            <tr height="25">
                              <td width="200">&nbsp;</td>
                              <td width="200">&nbsp;</td>
                              <td width="200">&nbsp;</td>
                            </tr>
                          </table>
                        </div>

                        <div class="movableContent">
                          <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                            <tr>
                              <td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:25px;">
                                <div class="contentEditableContainer contentTextEditable">
                                          <div class="contentEditable" align="center" >
                                              <h2 >DNComputing</h2>
                                          </div>
                                        </div>
                              </td>
                            </tr>
                            <tr>
                              <td width="100">&nbsp;</td>
                              <td width="400" align="center">
                                <div class="contentEditableContainer contentTextEditable">
                                          <div class="contentEditable" align="center" >
                                              <h2>Detalles de correo de contacto:</h2>
                                          </div>
                                          <div class="contentEditable" align="left" >
                                              <p><span style="font-weight: 700;">Nombre:</span>' . $data['name'] . '</p>
                                              <p><span style="font-weight: 700;">Correo:</span>' . $data['email'] . '</p>
                                              <p><span style="font-weight: 700;">Mensaje:</span></p>
                                              <p> ' . $data['message'] . '
                                              </p>
                                          </div>
                                        </div>
                              </td>
                              <td width="100">&nbsp;</td>
                            </tr>
                          </table>
                          <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                            <tr>
                              <td width="200">&nbsp;</td>
                              <td width="200" align="center" style="padding-top:25px;">
                              </td>
                              <td width="200">&nbsp;</td>
                            </tr>
                          </table>
                        </div>


                        <div class="movableContent">
                          <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                            <tr>
                              <td width="100%" colspan="2" style="padding-top:65px;">
                                <hr style="height:1px;border:none;color:#333;background-color:#ddd;" />
                              </td>
                            </tr>
                            <tr>
                              <td width="60%" height="70" valign="middle" style="padding-bottom:20px;">
                                <div class="contentEditableContainer contentTextEditable">
                                          <div class="contentEditable" align="left" >
                                              <span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">© DNC Derechos Reservados 2016</span>
                                    <br/>
                                    <span style="font-size:11px;color:#555;font-family:Helvetica, Arial, sans-serif;line-height:200%;"><a href="http://dncomputing.com/" target="_blank" title="dncomputing">www.dncomputing.com</a></span>
                                    <br/>

                                          </div>
                                        </div>
                              </td>

                            </tr>
                          </table>
                        </div>


                      </td>
                    </tr>
                  </table>




                </td></tr></table>

                  </td>
                </tr>
                </table>
                <!-- End of wrapper table -->
              </body>
              </html>
              ';
    $respuesta = sendMail('soporte@ngncloud.com', $subject, $body);
    return $respuesta;

}

function sendMailClient($data)
{
    $subject = 'Mensaje recibido ';
    $body = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8" />
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                      <title>Email DNComputing</title>
                      <style type="text/css">

                    @media screen and (max-width: 600px) {
                        table[class="container"] {
                            width: 95% !important;
                        }
                    }

                      #outlook a {padding:0;}
                        body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
                        .ExternalClass {width:100%;}
                        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
                        #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
                        img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
                        a img {border:none;}
                        .image_fix {display:block;}
                        p {margin: 1em 0;}
                        h1, h2, h3, h4, h5, h6 {color: black !important;}

                        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

                        h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
                          color: red !important;
                         }

                        h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
                          color: purple !important;
                        }

                        table td {border-collapse: collapse;}

                        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

                        a {color: #000;}

                        @media only screen and (max-device-width: 480px) {

                          a[href^="tel"], a[href^="sms"] {
                                text-decoration: none;
                                color: black; /* or whatever your want */
                                pointer-events: none;
                                cursor: default;
                              }

                          .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                                text-decoration: default;
                                color: orange !important; /* or whatever your want */
                                pointer-events: auto;
                                cursor: default;
                              }
                        }


                        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
                          a[href^="tel"], a[href^="sms"] {
                                text-decoration: none;
                                color: blue; /* or whatever your want */
                                pointer-events: none;
                                cursor: default;
                              }

                          .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                                text-decoration: default;
                                color: orange !important;
                                pointer-events: auto;
                                cursor: default;
                              }
                        }

                        @media only screen and (-webkit-min-device-pixel-ratio: 2) {
                          /* Put your iPhone 4g styles in here */
                        }

                        @media only screen and (-webkit-device-pixel-ratio:.75){
                          /* Put CSS for low density (ldpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1){
                          /* Put CSS for medium density (mdpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1.5){
                          /* Put CSS for high density (hdpi) Android layouts in here */
                        }
                        /* end Android targeting */
                        h2{
                          color:#181818;
                          font-family:Helvetica, Arial, sans-serif;
                          font-size:22px;
                          line-height: 22px;
                          font-weight: normal;
                        }
                        a.link1{

                        }
                        a.link2{
                          color:#fff;
                          text-decoration:none;
                          font-family:Helvetica, Arial, sans-serif;
                          font-size:16px;
                          color:#fff;border-radius:4px;
                        }
                        p{
                          color:#555;
                          font-family:Helvetica, Arial, sans-serif;
                          font-size:16px;
                          line-height:160%;
                        }
                      </style>

                    <script type="colorScheme" class="swatch active">
                      {
                        "name":"Default",
                        "bgBody":"ffffff",
                        "link":"fff",
                        "color":"555555",
                        "bgItem":"ffffff",
                        "title":"181818"
                      }
                    </script>

                    </head>
                    <body>
                      <!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
                      <table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class="bgBody">
                      <tr>
                        <td>
                      <table cellpadding="0" width="620" class="container" align="center" cellspacing="0" border="0">
                      <tr>
                        <td>
                        <!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->


                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                          <tr>
                            <td class="movableContentContainer bgItem">

                              <div class="movableContent">
                                <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                                  <tr height="40">
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="200" valign="top">&nbsp;</td>
                                    <td width="200" valign="top" align="center">
                                      <div class="contentEditableContainer contentImageEditable">
                                                <div class="contentEditable" align="center" >
                                                    <img src="http://i64.tinypic.com/am2nex.png" width="125" height="125"  alt="Logo"  data-default="placeholder" />
                                                </div>
                                              </div>
                                    </td>
                                    <td width="200" valign="top">&nbsp;</td>
                                  </tr>
                                  <tr height="25">
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>

                              <div class="movableContent">
                                <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                                  <tr>
                                    <td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:25px;">
                                      <div class="contentEditableContainer contentTextEditable">
                                                <div class="contentEditable" align="center" >
                                                    <h2 >DNComputing</h2>
                                                </div>
                                              </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="100">&nbsp;</td>
                                    <td width="400" align="center">
                                      <div class="contentEditableContainer contentTextEditable">
                                                <div class="contentEditable" align="left" >
                                                    <p >Hola ' . $data['name'] . ',
                                                      <br/>
                                                      <br/>
                                            Gracias por contactarnos, hemos recibido tu mensaje satisfactoriamente y en la mayor brevedad posible responderemos a tu solicitud, de igual forma queremos invitarte a nuestro sitio web para que evalues los servicios que podemos ofrecer para ti...
                                            .</p>
                                                </div>
                                              </div>
                                    </td>
                                    <td width="100">&nbsp;</td>
                                  </tr>
                                </table>
                                <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                                  <tr>
                                    <td width="200">&nbsp;</td>
                                    <td width="200" align="center" style="padding-top:25px;">
                                      <table cellpadding="0" cellspacing="0" border="0" align="center" width="200" height="50">
                                        <tr>
                                          <td bgcolor="#3498db" align="center" style="border-radius:4px;" width="200" height="50">
                                            <div class="contentEditableContainer contentTextEditable">
                                                      <div class="contentEditable" align="center" >
                                                          <a href="http://dncomputing.com/" target="_blank" title="dncomputing" class="link2">Ir a dncomputing</a>
                                                      </div>
                                                    </div>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                    <td width="200">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>


                              <div class="movableContent">
                                <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                                  <tr>
                                    <td width="100%" colspan="2" style="padding-top:65px;">
                                      <hr style="height:1px;border:none;color:#333;background-color:#ddd;" />
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="60%" height="70" valign="middle" style="padding-bottom:20px;">
                                      <div class="contentEditableContainer contentTextEditable">
                                                <div class="contentEditable" align="left" >
                                                    <span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">© DNC Derechos Reservados 2016</span>
                                          <br/>
                                          <span style="font-size:11px;color:#555;font-family:Helvetica, Arial, sans-serif;line-height:200%;"><a href="http://dncomputing.com/" target="_blank" title="dncomputing">www.dncomputing.com</a></span>
                                          <br/>

                                                </div>
                                              </div>
                                    </td>

                                  </tr>
                                </table>
                              </div>


                            </td>
                          </tr>
                        </table>




                      </td></tr></table>

                        </td>
                      </tr>
                      </table>
                      <!-- End of wrapper table -->
                    </body>
                    </html>
                    ';
    $respuesta = sendMail($data['email'], $subject, $body);
    return $respuesta;
}

?>