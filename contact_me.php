<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$db = new SQLite3('db/contact_me.db');
$db->exec("INSERT INTO Contacts(email,name,message) VALUES ('$email','$name','$message');");


$mail1 = new PHPMailer(true);
try {
    //Server settings
    $mail1->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail1->isSMTP();                                            // Set mailer to use SMTP
    $mail1->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail1->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail1->Username   = 'niam@khuigandui.com';                     // SMTP username
    $mail1->Password   = 'wugemwymaoxxpevu';                               // SMTP password
    $mail1->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail1->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail1->setFrom('niam@khuigandui.com', 'KhuiGanDui');
    //$mail1->addReplyTo('niam@khuigandui.com', 'KhuiGanDui');     // Add a recipient
    $mail1->addAddress($email, $name);
    //$mail->addCC('kaniamrongmei@gmail.com');
    //$mail->addBCC('kaniamrongmei@gmail.com');

    // Attachments
    //$mail->addAttachment('img/intro.jpg', 'new.jpg');    // Optional name

	$message1 = <<<EOD
	<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if !mso]><!-- -->
    <link href="https://fonts.googleapis.com/css?family=Playfair Display:400,400i,700,700i" rel="stylesheet">
    <!--<![endif]-->
</head>

<body>
    <div class="es-wrapper-color">
        <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#f6f6f6"></v:fill>
			</v:background>
		<![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table class="es-header esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="es-adaptive esd-stripe" align="center">
                                        <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p10t es-p10b es-p10r es-p10l" esd-general-paddings-checked="true" align="left">
                                                        <!--[if mso]><table width="580" cellpadding="0" cellspacing="0"><tr><td width="280" valign="top"><![endif]-->
                                                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="es-m-p20b esd-container-frame" width="280" align="left">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-empty-container" style="display: none;"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="20"></td><td width="280" valign="top"><![endif]-->
                                                        <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="280" align="left">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-empty-container" style="display: none;"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" esd-custom-block-id="2919" align="center">
                                        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-banner" style="position: relative;" align="center" esdev-config="h2">
                                                                                        <a target="_blank" href="https://khuigandui.com"> <img class="adapt-img esdev-stretch-width esdev-banner-rendered" src="https://khuigandui.com/img/gallery-bg.jpg" alt="KhuiGanDui.com" title="KhuiGanDui.com" width="100%" style="display: block;"></a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" style="background-color: rgb(255, 255, 255);" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p40t es-p40b es-p40r es-p40l" esd-general-paddings-checked="false" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="520" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                                                                                             
                                                                                <tr>
                                                                                    <td class="esd-block-text es-m-txt-c es-p10t" align="center">
																						 <p style="color: #000; line-height: 150%;">Thank you !! I got your message.</p>
                                                                                        <p style="color: #000;">Please follow me in Instagram ! <br><a target="_blank" href="https://www.instagram.com/khuigandui">@khuigandui</a></p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-footer esd-footer-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure" esd-general-paddings-checked="true" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                               
                                                                                <tr>
                                                                                    <td class="esd-block-text es-p20t es-p15b es-p15r es-p15l" align="center">
                                                                                        <p><span style="font-size:20px;"><span style="line-height: 150%;">KhuiGaiDui.com</span></span>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-social" align="center">
                                                                                        <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="es-p10r" valign="top" align="center">
                                                                                                        <a target="_blank" href="https://wasap.my/+918586038848"><img title="Whatsapp" src="https://demo.stripocdn.email/content/assets/img/messenger-icons/logo-black/whatsapp-logo-black.png" alt="Whatsapp" width="24" height="24"></a>
                                                                                                    </td>
                                                                                                    <td class="es-p10r" valign="top" align="center">
                                                                                                        <a target="_blank" href="https://m.me/khuigandui"><img title="Messenger" src="https://demo.stripocdn.email/content/assets/img/messenger-icons/logo-black/messenger-logo-black.png" alt="Messenger" width="24" height="24"></a>
                                                                                                    </td>
                                                                                                    <td class="es-p10r" valign="top" align="center">
                                                                                                        <a target="_blank" href="mailto:niam@khuigandui.com"><img title="Mail me" src="https://demo.stripocdn.email/content/assets/img/messenger-icons/logo-black/mailruagent-logo-black.png" alt="Mail.Ru Agent" width="24" height="24"></a>
                                                                                                    </td>
                                                                                                    <td class="es-p10r" valign="top" align="center">
                                                                                                        <a target="_blank" href="https://www.youtube.com/khuigandui?sub_confirmation=1"><img title="Youtube" src="https://demo.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png" alt="Yt" width="24" height="24"></a>
                                                                                                    </td>
                                                                                                    <td class="es-p10r" valign="top" align="center">
                                                                                                        <a target="_blank" href="https://twitter.com/khuigandui"><img title="Twitter" src="https://demo.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png" alt="Tw" width="24" height="24"></a>
                                                                                                    </td>
                                                                                                    <td valign="top" align="center">
                                                                                                        <a target="_blank" href="https://www.instagram.com/khuigandui"><img title="Instagram" src="https://demo.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png" alt="Ig" width="24" height="24"></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-p15t es-p20b es-p15r es-p15l" align="center">
                                                                                        <p style="font-size: 13px; line-height: 150%;">You are receiving this email because you have visited our site or sent message.</p>
                                                                                        <p style="font-size: 13px; line-height: 150%;">Also you're subscribe to KhuiGanDui.com, you'll receive any notifiacation mail in future.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
EOD;
    // Content
    $mail1->isHTML(true);                                  // Set email format to HTML
    $mail1->Subject = 'KhuiGanDui.com | Thank You '.$name;
    $mail1->Body    = $message1;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail1->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail1->ErrorInfo}";
}

?>

