
<?php
    use PHPMailer\PHPHMailer\PHPMailer;
    use PHPMailer\PHPHMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);


    $mail->setForm('gainbuff@gmail.com', 'Тест лист');

    $mail->addAddress('vilnifund@gmail.com');

    $mail->Subject = 'Лист з форми сайту';
    
    $body = '<h1>Лист з форми сайту</h1>';


    mail($)


    if(trim(!empty($_POST['name']))){
        $body.="<p><strong>Ім'я</strong> " .$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['organization']))){
        $body.="<p><strong>Організація</strong> " .$_POST['organization'].'</p>';
    }
    if(trim(!empty($_POST['phone']))){
        $body.="<p><strong>Телефон</strong> " .$_POST['phone'].'</p>';
    }
    if(trim(!empty($_POST['email']))){
        $body.="<p><strong>E-mail</strong> " .$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['message']))){
        $body.="<p><strong>Повідомлення</strong> " .$_POST['message'].'</p>';
    }

        $mail->Body = $body;

        if (!$mail->send()) {
            $message = 'Помилка';
        } else{
            $message = 'Дані відправлено';
        }

        $response = ['message' => $message];

        header('Content-type: application/json')
        echo json_encode($response);

?>
