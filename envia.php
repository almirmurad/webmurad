<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'assets/php/lib/vendor/autoload.php';
/**
 * precisamos confirmar se a captcha está correta
 */ 

if(isset($_POST['codigo'])) 
{
    $c = $_POST['codigo'];

    if($c == $_SESSION['captcha']){
        if (!isset($_POST['assunto']) && empty($_POST['assunto'])) {
        $assunto = 'Contato Web Murad - Desenvolvimento Web';
        }
        if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
        $mensagem = addslashes($_POST['mensagem']);
        }
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        }
        if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        }
        if (isset($_POST['fone']) && !empty($_POST['fone'])) {
        $fone = addslashes($_POST['fone']);
        }
        $mail = new PHPMailer(true);

        try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.webmurad.com.br';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'developer@webmurad.com.br';                     //SMTP username
        $mail->Password   = 'ZGJq06t~S7w)';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('developer@webmurad.com.br', 'Web Murad - Contato');
        $mail->addAddress('developer@webmurad.com.br', 'Web Murad - Contato');     //Add a recipient
        $mail->addAddress('almirmuradojr@gmail.com', 'Web Murad - Contato');
        //linguagem 
        $mail->setLanguage('pt_br', 'assets/php/lib/optional/path/to/language/directory/');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contato Web Murad - Desenvolvimento Web';
        $mail->Body    = '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Email de contato Web Murad - desenvolvimento Web</title>
        </head>
        <body>

        <h1>'.$assunto.'</h1>
        E mail enviado através do formulário de <b>contato</b> do site Web Murad.<br>
        Seguem os dados:<br>
        Nome: '.$nome.'<br>
        Telefone: '.$fone.'<br>
        E-mail: '.$email.'<br>
        Mensagem: '.$mensagem.'<br>
        Assim que possível retorne o contato, obrigado!
        </body>
        </html>';
        $mail->AltBody = 'E mail enviado através do formulário de contato do site Web Murad.\n';

        $mail->send();
        $n = rand(1000, 9999);
        $_SESSION['captcha'] = $n;
        echo "<script> alert('Mensagem enviada com sucesso');
        window.location='https://www.webmurad.com.br/';
        </script>";
        } catch (Exception $e) {
        echo "Mensagem não pode ser enviada!. Erro: {$mail->ErrorInfo}";
        }

    }else{
        $flash = "Errou Captcha!";
        $_SESSION['mensagem'] = $flash;
        header("Location: contato.php");
        die();
    }

}
    

        
?>