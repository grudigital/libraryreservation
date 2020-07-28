<?php
require '../phpmailler/src/phpMailer.php';

       if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
                 $assunto = $_POST['assunto'];
       }
       if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
                  $mensagem = $_POST['mensagem'];
       }

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'mail.khi.fi.it';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'proto@khi.fi.it';
    $mail->Password = 'Cl3matis!';
    $mail->Port = 587;

    $mail->setFrom('proto@khi.fi.ti', 'Contato');
    $mail->addAddress('email@mail.com.br');

    $mail->isHTML(true);

    $mail->Subject = $assunto;
    $mail->Body    = nl2br($mensagem);
    $mail->AltBody = nl2br(strip_tags($mensagem));

    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
         header('Location: reservation-mail-enviado.php?enviado');
    }

    ?>
