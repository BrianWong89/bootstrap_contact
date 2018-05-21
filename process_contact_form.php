<?php
require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer();
//Enable SMTP debugging.
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "brian.alphis@gmail.com";
$mail->Password = "samada12";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    )
);
$mail->setFrom('brian.alphis@gmail.com', 'Brian\'s Testing Email');
$mail->addAddress('darkness3nity@yahoo.com.sg', 'Brian Wong');
$mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <!--[if !mso]><!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/><!--<![endif]-->
    <!-- Stylesheets -->
    <style>
        #outlook a {
            padding: 0;
        }

        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0 !important;
            padding: 0 !important;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }

        .bodytbl {
            margin: 0;
            padding: 0;
            width: 100% !important;
            -webkit-text-size-adjust: none;
        }

        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
            image-rendering: optimizeQuality;
            display: block;
            max-width: 100%;
        }

        a img {
            border: none;
        }

        p {
            margin: 1em 0;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        table td {
            border-collapse: collapse;
        }

        .o-fix table, .o-fix td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        body, .bodytbl {
            background-color: #FAFAFA /*Background Color*/;
        }

        table {
            color: #787878 /*Text Color*/;
        }

        td, p {
            color: #787878;
        }

        .h1 {
            color: #353535 /*Headings*/;
        }

        .h2 {
            color: #353535;
        }

        .cta .h2 {
            color: #FFFFFF;
        }

        .cta .h3 {
            color: #FFFFFF;
        }

        .quote {
            color: #AAAAAA;
        }

        .invert, .invert h1, .invert td, .invert p {
            background-color: #353535;
            color: #FAFAFA !important;
        }

        .wrap.header {
        }

        .wrap {
            background-color: #FAFAFA;
        }

        .wrap.body-i {
            background-color: #353535;
        }

        .wrap.footer {
        }

        .padd {
            width: 20px;
        }

        a {
            color: #00A9E0;
        }

        a:link, a:visited, a:hover {
            color: #00A9E0 /*Contrast*/;
        }

        .btn, .btn div, .btn a {
            color: #FFFFFF /*Contrast Link Color*/;
        }

        .btn a, .btn a img {
            background: #00A8E0 /*Button Color*/;
        }

        .invert .btn a, .invert .btn a img {
            background: none;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #353535;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
        }

        h1 {
            font-size: 24px;
            letter-spacing: -2px;
            margin-bottom: 6px;
            margin-top: 6px;
            line-height: 24px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 12px;
            margin-top: 2px;
            line-height: 24px;
        }

        h3 {
            font-size: 18px;
            margin-bottom: 12px;
            margin-top: 2px;
            line-height: 24px;
        }

        h4 {
            font-size: 16px;
        }

        h5 {
            font-size: 14px;
        }

        h6 {
            font-size: 12px;
        }

        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
            color: #00A9E0;
        }

        h1 a:active, h2 a:active, h3 a:active, h4 a:active, h5 a:active, h6 a:active {
            color: #00A9E0 !important;
        }

        h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
            color: #00A9E0 !important;
        }

        .h1 {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 55px;
            font-weight: bold;
            line-height: 40px !important;
            letter-spacing: -2px;
        }

        .h2 {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 19px;
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 24px;
        }

        .h3 {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 17px;
            letter-spacing: -1px;
            line-height: 24px;
        }

        .line {
            border-bottom: 1px solid #AAAAAA /*Separator*/;
        }

        table {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px;
        }

        td, p {
            line-height: 24px;
        }

        ul, ol {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        li {
            line-height: 24px;
        }

        td, tr {
            padding: 0;
        }

        .quote {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 24px;
            letter-spacing: 0;
            margin-bottom: 6px;
            margin-top: 6px;
            line-height: 24px;
            font-style: italic;
        }

        .small {
            font-size: 10px;
            color: #787878;
            line-height: 15px;
            text-transform: uppercase;
            word-spacing: -1px;
            margin-bottom: 4px;
            margin-top: 6px;
        }

        table.plan {
            width: 100%;
            min-width: 100%;
        }

        table.plan td {
            border-right: 1px solid #EBEBEB /*Lines*/;
            border-bottom: 1px solid #EBEBEB;
            text-align: center;
        }

        table.plan td.last {
            border-right: 0;
        }

        table.plan th {
            text-align: center;
            border-bottom: 1px solid #EBEBEB;
        }

        a {
            text-decoration: none;
            padding: 2px 0px;
        }

        .btn {
            display: block;
        }

        .btn a {
            display: inline-block;
            padding: 0;
            line-height: 0.5em;
        }

        .btn img, .social img {
            display: inline;
            margin: 0;
        }

        .social .btn a, .social .btn a img {
            background: none;
        }

        .right {
            text-align: right;
        }

        table.textbutton td {
            background: #00A8E0;
            padding: 1px 14px 1px 14px;
            color: #FFF;
            display: block;
            height: 24px;
            vertical-align: top;
            margin-right: 4px;
            margin-bottom: 4px;
        }

        table.textbutton a {
            color: #FFF;
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            width: 100%;
            display: inline-block;
        }

        .label table.textbutton {
            width: auto !important;
        }

        .label table.textbutton td {
            height: auto !important;
        }

        .label table.textbutton a {
            padding: 2px 0 !important;
            font-size: 12px !important;
        }

        .cta table.textbutton td {
            height: 32px;
            padding: 4px 16px 7px 16px;
        }

        .cta table.textbutton a {
            font-size: 19px;
            line-height: 32px;
        }

        div.preheader {
            line-height: 0px;
            font-size: 0px;
            height: 0px;
            display: none !important;
            visibility: hidden;
            text-indent: -9999px;
        }

        @media only screen and (max-width: 599px) {
            body {
                -webkit-text-size-adjust: 120% !important;
                -ms-text-size-adjust: 120% !important;
            }

            .wrap {
                width: 96% !important;
            }

            .wrap .padd {
                width: 10px !important;
            }

            .wrap table {
                width: 100% !important;
            }

            .wrap img {
                max-width: 100% !important;
                height: auto !important;
            }

            .wrap .m-padd {
                padding: 0 20px !important;
            }

            .wrap .m-w-auto {
                width: auto !important;
            }

            .wrap .m-l {
                text-align: left !important;
            }

            .wrap .h div {
                letter-spacing: -1px !important;
                font-size: 18px !important;
            }

            .wrap .m-0 {
                width: 0;
                display: none;
            }

            .wrap .m-b, {
                margin-bottom: 20px !important;
            }

            .wrap .m-b, .m-b img {
                display: block;
                min-width: 100% !important;
                width: 100% !important;
            }

            table {
                font-size: 15px !important;
            }

            table.textbutton td {
                height: 44px !important;
            }

            .cta table.textbutton td {
                height: 50px !important;
            }

            table.textbutton a {
                padding: 10px 0 !important;
                font-size: 18px !important;
            }
        }

        @media only screen and (max-width: 479px) {
        }

        @media only screen and (max-width: 320px) {
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
            body {
                -webkit-text-size-adjust: 170% !important;
                -ms-text-size-adjust: 170% !important;
            }
        }

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) {
            body {
                -webkit-text-size-adjust: 170% !important;
                -ms-text-size-adjust: 170% !important;
            }
        }
    </style>
    <title>Welcome to Locums.Drugs</title>
</head>
<body>
<table class="bodytbl" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr height="20">
                    <td width="600" align="left" valign="bottom">
                        <div class="preheader"><!-- PREHEADER --></div>
                        <div class="small"><span>Trouble seeing something? <a href="#">view it online</a> or <a
                                        href="#">unsubscribe</a></span></div>
                    </td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" class="wrap line">
                <tr>
                    <td width="600" height="39">&nbsp;</td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" align="right" class="m-w-auto">
                            <tr>
                                <td valign="top" align="right" width="600" class="small label">
                                    <table class="textbutton" align="right">
                                        <tr>
                                            <td align="center" width="auto"><a href="" label="Go to top">Welcome
                                                    {{user}}</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Full Size Image start  -->
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td width="600" valign="top" align="left">
                        <table cellpadding="0" cellspacing="0" class="o-fix">
                            <tr>
                                <td width="298" valign="top" align="left">
                                    <img src="https://www.alphis.net/locum-logo.png" alt=""
                                         width="298" height="48" border="0" style="max-width:600px;"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Full Size Image end   -->
            <table width="600" cellpadding="0" cellspacing="0" class="wrap line">
                <tr>
                    <td height="19">&nbsp;</td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td height="40">&nbsp;</td>
                </tr>
            </table>
            <!-- ☺ header block ends here -->
            <!-- 1/1 Text start  -->
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td width="600" valign="top" align="left">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <!-- CONTENT start -->
                                <td width="600" valign="top" align="left">
                                    <h1><span>Lorem Ipsum</span></h1>
                                    <div><p>
                                            Li Europan lingu es es membres del sam familie. Lor separat existentie es un
                                            myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.
                                            Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                            vocabules.
                                        </p></div>
                                </td>
                                <!-- CONTENT end -->
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td width="600" valign="top" align="left">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <!-- CONTENT start -->
                                <td width="600" valign="top" align="left">
                                    <div><p>
                                            Li Europan lingu es es membres del sam familie. Lor separat existentie es un
                                            myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.
                                            Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                            vocabules.
                                        </p></div>
                                </td>
                                <!-- CONTENT end -->
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td width="600" valign="top" align="left">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <!-- CONTENT start -->
                                <td width="600" valign="top" align="left">
                                    <div><p>
                                            Li Europan lingu es es membres del sam familie. Lor separat existentie es un
                                            myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.
                                            Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                            vocabules.
                                        </p></div>
                                    <div class="btn">
                                        <table class="textbutton" align="left">
                                            <tr>
                                                <td align="center" width="auto"><a href="" label="Visit Site">Visit
                                                        Site</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <!-- CONTENT end -->
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- 1/1 Text end   -->
            <!-- Footer start -->
            <table width="600" cellpadding="0" cellspacing="0" class="wrap line">
                <tr>
                    <td width="600" height="39">&nbsp;</td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td></td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                <tr>
                    <td width="600" valign="top" align="left">
                        <table cellpadding="0" cellspacing="0" class="o-fix">
                            <tr>
                                <!-- CONTENT start -->
                                <td width="600" valign="top" align="left">
                                    <table cellpadding="0" cellspacing="0" align="left">
                                        <tr>
                                            <td width="600" class="small" align="left" valign="top">
                                                <div><span>&copy; 2017 Locums.sg. All rights reserved.</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!-- CONTENT end -->
                            </tr>
                            <tr class="m-0">
                                <td height="24">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Footer end -->
        </td>
    </tr>
</table>
</body>
</html>
';
$mail->IsHTML(true);
if (!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}