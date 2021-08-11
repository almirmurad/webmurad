<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'assets/php/lib/vendor/autoload.php';


     if (!isset($_POST['assunto']) && empty($_POST['assunto'])) {
                 $assunto = 'Contato Web Murad - Desenvolvimento Web';
       }
    if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
                  $mensagem = $_POST['mensagem'];
       }
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = $_POST['nome'];
        }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
        }
    if (isset($_POST['fone']) && !empty($_POST['fone'])) {
    $fone = $_POST['fone'];
        }


        $mail = new PHPMailer(true);

        try {
             //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.webmurad.com.br';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'contato@webmurad.com.br';                     //SMTP username
            $mail->Password   = 'h}qafHTxw@gC';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom('contato@webmurad.com.br', 'Web Murad - Contato');
            $mail->addAddress('contato@webmurad.com.br', 'Web Murad - Contato');     //Add a recipient
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
            echo "<script> alert('Mensagem enviada com sucesso');
            window.location='https://www.webmurad.com.br/';
                </script>";
} catch (Exception $e) {
    echo "Mensagem não pode ser enviada!. Erro: {$mail->ErrorInfo}";
}

        
?>