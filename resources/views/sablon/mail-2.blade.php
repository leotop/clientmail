<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<!--  xmlns="http://www.w3.org/1999/xhtml -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>A Simple Responsive HTML Email</title>
        <style type="text/css">
        body {margin: 0; padding: 0; min-width: 100%!important;}
        .content {width: 100%; max-width: 600px;} 

        @media only screen and (min-device-width: 601px) {
        .content {width: 600px !important;}
        }
        .right-bloc {
            display: block;
            text-align: center;
            padding-top: 45px;
            color: #EC1921;
            font-weight: bold;
            font-size: 1.6em;
        }
        .lettre {
            background: url("http://client.cristalpirat.ru/img/lettre.png") center no-repeat;
            background-size: contain;
            height: 610px;
            width: 575px;
            vertical-align: baseline;
            padding: 122px 60px 0 88px;
        }
        .text {

        }
        </style>
    </head>
    <body yahoo bgcolor="#f6f8f1">
        <table width="100%" bgcolor="#D7E9FF" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <table class="content" bgcolor="#fff" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="150">
                                <img src="http://client.cristalpirat.ru/img/logo.png" width="150px" height="120px">
                            </td>
                            <td width="10">&nbsp;</td>
                            <td width="275">
                                <img src="http://client.cristalpirat.ru/img/woman.jpg" width="275px" height="120px">
                            </td>
                            <td width="150" class="right-bloc" bgcolor="#fff">
                                022 244 822
                            </td>
                        </tr>
                    </table>
                    <table class="content" bgcolor="#fff" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="lettre">
                                dsadasdsad ddddddddddddddddddddddd dddddddddddddd ddddddddddd ddddddddddddd dddddddddddddddd dddddddddddd
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>