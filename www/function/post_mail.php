<?php
require_once('../mail/class.phpmailer.php');
function post_mail($to,$subject = "",$html_path = ""){
    //$to 表示收件人地址 $subject 表示邮件标题 $body表示邮件正文
    //error_reporting(E_ALL);
    date_default_timezone_set("Asia/Shanghai");//设定时区东八区
    $mail             = new PHPMailer(); //new一个PHPMailer对象出来
    $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP(); // 设定使用SMTP服务
   // $mail->SMTPDebug  = 1;                     // 启用SMTP调试功能
                                           // 1 = errors and messages
                                           // 2 = messages only
    $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
    $mail->SMTPSecure = "ssl";                 // 安全协议
    $mail->Host       = "smtp.qq.com";      // SMTP 服务器
    $mail->Port       = 465;                   // SMTP服务器的端口号
    $mail->Username   = "542848679@qq.com";  // SMTP服务器用户名
    $mail->Password   = "0592XIAMENtaiwan";            // SMTP服务器密码
    $mail->SetFrom('542848679@qq.com', 'webmaster');
    $mail->AddReplyTo("542848679@qq.com","webmaster");
    $mail->Subject    = $subject;
    $mail->AltBody    = "对不起,您的邮件客户端不支持html文档的显示,请选择支持html文档显示的邮件客户端!";
    $mail->MsgHTML(file_get_contents($html_path),dirname(__FILE__));
    $mail->AddAddress($to);
    if(!$mail->Send()) {
        echo '发送失败!'; 
    } else {
        echo "邮件已发送,请注意查收!";
        }
    }
?>

