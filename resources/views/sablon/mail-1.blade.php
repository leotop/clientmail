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
        </style>
        
    </head>
    <body yahoo bgcolor="#f6f8f1">
        <table width="100%" bgcolor="#D7E9FF" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <table class="content" width="600" height="10" bgcolor="#D7E9FF" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr><td></td></tr>
                    </table>
                    <table width="600" class="content" bgcolor="#fff" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="150">
                                <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/img/logo.png" width="150px" height="120px">
                            </td>
                            <td width="10">&nbsp;</td>
                            <td width="300">
                                <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/img/woman.jpg" width="275px" height="120px">
                            </td>
                            <td width="150" class="right-bloc" bgcolor="#fff" style="
                            display: block; 
                            text-align: center;
                            padding-top: 45px;
                            color: #EC1921;
                            font-weight: bold;
                            font-size: 1.6em;
                            ">
                                022 244 822
                            </td>
                        </tr>
                    </table>
                  
                    <table class="content" width="600" height="25" bgcolor="#ED1C24" align="center" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <td width="10"></td>
                        <td style="color: #fff">
                          mun Chisinau str. Bucuriei 1</td>
                        <td></td>
                        <td align="right" style="color: #fff">
                          060 036 555, 060 036 600
                        </td>
                        <td width="10"></td>
                      </tr>
                    </table>
                  
                    <table class="content" width="600" height="200" bgcolor="#fff" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="">
                                <div style="padding: 20px">
                                	{!! $msg !!}
                                </div>
                            </td>
                        </tr>
                        <table class="content" width="600" height="10" bgcolor="#D7E9FF" align="center" cellpadding="0" cellspacing="0" border="0">
                          <tr><td align="center"> 
                          <a href="www.profsystem.md" target="t_blank" style="color: #ED1C24">www.profsystem.md</a> 
                          <a href="www.tehnologiasuccesului.md" target="t_blank" style="color: #ED1C24">www.tehnologiasuccesului.md</a> 
                         </td>
                         </tr>
                       </table>
                    </table>
                    
                    
                </td>
            </tr>
        </table>
    </body>
</html>