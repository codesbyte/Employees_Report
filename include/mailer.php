<?php

class mailer 
{
    private $var;
    
    public function activeLink($message) 
    {
        $this->var = "<html>
                        <title>Employee Report</title>
                        <body bgcolor='#E3E3E3' text='#333333' style='background-color: #E3E3E3; margin-bottom: 0px; margin-left: 0px; margin-top: 0px; margin-right: 0px;'>
                            <div align='center'>
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='background:#fff'>
                                    <tbody>
                                        <tr>
                                            <td valign='bottom' style='font:normal 11px arial;color:#999;line-height:12px;padding:0 0 0 10px'>
                                                <a href='http://report.codesbyte.com/index.php'><img src='http://report.codesbyte.com/assets/images/40x40.png' alt=''/></a>
                                                <br>
                                                You have received this mail as a member of report.codesbyte.com
                                            </td>
                                        </tr>
                                        <tr><td height='10' colspan='2'></tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End logo section   --------------------------- -->
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='border:1px solid #5d8500;border-top:none'>
                                    <tbody>
                                        <tr>
                                            <td valign='center' height='62' bgcolor='#62a21d' style='font:24px arial;color:#fff;padding-left:15px;text-align:left;'>
                                                Activation Link For Change Password
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End login Detail section   --------------------------- -->
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='border:solid 1px #b0b6c4;border-top:none;background-color: #fff;'>
                                    <tbody>
                                        <!--<tr>
                                            <td valign='bottom' height='30' style='padding-left:15px;font:bold 14px arial;color:#333;text-align:left'>Dear $Name,</td>
                                            <td valign='bottom' style='font:normal 14px arial;color:#333;padding-right:15px;text-align:right'>
                                                <span class='aBn' data-term='goog_771714971' tabindex='0'>
                                                </span>
                                            </td>
                                        </tr>-->
                                        <tr>
                                            <td colspan='2' style='padding-left:15px;padding-top:10px'>
                                                <table cellspacing='0' cellpadding='0' width='560' border='0' bgcolor='#EFEEED' style='border:1px solid #d9d9d9'>
                                                    <tbody>
                                                        <tr>
                                                            <td width='130px' style='padding-left:15px;padding-top:20px;font:normal 12px arial;padding-bottom:5px'>
                                                                <img class='CToWUd' width='8' height='11' border='0' style='float:left;margin-right:10px;margin-top:2px' alt='codesbyte' src='http://report.codesbyte.com/assets/images/arrow.gif'>
                                                                $message
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr><td height='10' colspan='2'></td></tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End Dear section   --------------------------- -->
                            </div>
                        </body>
                    </html>";
        return $this->var;
    }
    
    public function changePassword($Email,$Password,$name) 
    {
        $this->var = "<html>
                        <title>Employee Report</title>
                        <body bgcolor='#E3E3E3' text='#333333' style='background-color: #E3E3E3; margin-bottom: 0px; margin-left: 0px; margin-top: 0px; margin-right: 0px;'>
                            <div align='center'>
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='background:#fff'>
                                    <tbody>
                                        <tr>
                                            <td valign='bottom' style='font:normal 11px arial;color:#999;line-height:12px;padding:0 0 0 10px'>
                                                <a href='http://report.codesbyte.com/index.php'><img src='http://report.codesbyte.com/assets/images/40x40.png' alt=''/></a>
                                                <br>
                                                You have received this mail as a member of report.codesbyte.com
                                            </td>
                                        </tr>
                                        <tr><td height='10' colspan='2'></tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End logo section   --------------------------- -->
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='border:1px solid #5d8500;border-top:none'>
                                    <tbody>
                                        <tr>
                                            <td valign='center' height='62' bgcolor='#62a21d' style='font:24px arial;color:#fff;padding-left:15px;text-align:left'>
                                                Employee login details
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End login Detail section   --------------------------- -->
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='border:solid 1px #b0b6c4;border-top:none;background-color: #fff;'>
                                    <tbody>
                                        <tr>
                                            <td valign='bottom' height='30' style='padding-left:15px;font:bold 14px arial;color:#333;text-align:left'>Dear $name,</td>
                                            <td valign='bottom' style='font:normal 14px arial;color:#333;padding-right:15px;text-align:right'>
                                                <span class='aBn' data-term='goog_771714971' tabindex='0'>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign='top' style='padding-right:10px;padding-left:15px;font:normal 12px arial;color:#333;text-align:left;line-height:20px' colspan='2'>
                                                <br>
                                                As requested please make note of your report.codesbyte.com login details.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='2' style='padding-left:15px;padding-top:10px'>
                                                <table cellspacing='0' cellpadding='0' width='560' border='0' bgcolor='#EFEEED' style='border:1px solid #d9d9d9'>
                                                    <tbody>
                                                        <tr>
                                                            <td width='130px' style='padding-left:15px;padding-top:20px;font:normal 12px arial;padding-bottom:5px'>
                                                                <img class='CToWUd' width='8' height='11' border='0' style='float:left;margin-right:10px;margin-top:2px' alt='codesbyte' src='http://report.codesbyte.com/assets/images/arrow.gif'>
                                                                Your Email ID is
                                                            </td>
                                                            <td style='padding-top:15px'>
                                                                <span style='font:bold 14px arial;background:#fff;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px'>
                                                                    <a target='_blank' href='mailto:$Email'>$Email</a>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width='130px' style='padding-left:15px;padding-top:20px;font:normal 12px arial;padding-bottom:5px'>
                                                                <img class='CToWUd' width='8' height='11' border='0' style='float:left;margin-right:10px;margin-top:2px' alt='' src='http://report.codesbyte.com/assets/images/arrow.gif'>
                                                                Your Password is
                                                            </td>
                                                            <td style='padding-top:8px'>
                                                                <span style='font:bold 14px arial;background:#fff;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px'> $Password</span>
                                                                <span style='font:normal 11px arial;color:#e46715;margin-left:15px'></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr><td height='10' colspan='2'></tr>
                                        <tr>
                                            <td valign='center' height='60' align='center' colspan='2'>
                                                <a target='_blank' style='outline:none' href='http://report.codesbyte.com/index.php'>
                                                   <img class='CToWUd' width='124' vspace='0' hspace='0' height='38' border='0' title='Login' alt='Login' src='http://report.codesbyte.com/assets/images/btn.gif'>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End Dear section   --------------------------- -->
                            </div>
                        </body>
                    </html>";
        return $this->var;
    }
    
    public function sendTask($date,$DESCRIPTION,$toEmail,$fromEmail) 
    {
        $this->var = "<html>
                        <title>Employee Report</title>
                        <body bgcolor='#E3E3E3' text='#333333' style='background-color: #E3E3E3; margin-bottom: 0px; margin-left: 0px; margin-top: 0px; margin-right: 0px;'>
                            <div align='center'>
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='background:#fff'>
                                    <tbody>
                                        <tr>
                                            <td valign='bottom' style='font:normal 11px arial;color:#999;line-height:12px;padding:0 0 0 10px'>
                                                <a href='http://report.codesbyte.com/index.php'><img src='http://report.codesbyte.com/assets/images/40x40.png' alt=''/></a>
                                                <br>
                                                You have received this mail as a member of report.codesbyte.com
                                            </td>
                                        </tr>
                                        <tr><td height='10' colspan='2'></tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End logo section   --------------------------- -->
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='border:1px solid #5d8500;border-top:none'>
                                    <tbody>
                                        <tr>
                                            <td valign='center' height='62' bgcolor='#62a21d' style='font:24px arial;color:#fff;padding-left:15px;text-align:left'>
                                                Employee login details
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End login Detail section   --------------------------- -->
                                <table cellspacing='0' cellpadding='0' width='600' border='0' style='border:solid 1px #b0b6c4;border-top:none;background-color: #fff;'>
                                    <tbody>
                                        <tr>
                                            <td valign='bottom' height='30' style='padding-left:15px;font:bold 14px arial;color:#333;text-align:left'>Dear $toEmail,</td>
                                            <td valign='bottom' style='font:normal 14px arial;color:#333;padding-right:15px;text-align:right'>
                                                <span class='aBn' data-term='goog_771714971' tabindex='0'>
                                                    $date
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign='top' style='padding-right:10px;padding-left:15px;font:normal 12px arial;color:#333;text-align:left;line-height:20px' colspan='2'>
                                                <br>
                                                TASK DESCRIPTION
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='2' style='padding-left:15px;padding-top:10px'>
                                                <table cellspacing='0' cellpadding='0' width='560' border='0' bgcolor='#EFEEED' style='border:1px solid #d9d9d9'>
                                                    <tbody>
                                                        <tr>
                                                            <td width='130px' style='padding-left:15px;padding-top:20px;font:normal 12px arial;padding-bottom:5px'>
                                                                $DESCRIPTION
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr><td height='10' colspan='2'></tr>
                                        <tr>
                                            <td valign='center' height='60' align='center' colspan='2'>
                                                <P style='text-align: right;width: 92%;'>$fromEmail</P>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ----------------   End Dear section   --------------------------- -->
                            </div>
                        </body>
                    </html>";
        return $this->var;
    }
}
