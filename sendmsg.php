<?php
require_once 'connection.php';

    use PHPMailer as GlobalPHPMailer;
    use PHPMailer\PHPMailer\PHPMailer;

    
?>
<?php
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $mail = mysqli_real_escape_string($connection,$_POST['mail']);
    $msg = mysqli_real_escape_string($connection,$_POST['msg']);

    $email = "kavindasupun0618@gmail.com";
    $subject = "Test Message";

    if(strlen($name) > 50){
        echo 'fname_long';
    }else if(strlen($name) < 2){
        echo 'fname_short';
    }else if(strlen($mail) > 50){
        echo 'email_long';
    }else if(strlen($mail) < 3){
        echo 'email_short';
    }else if(filter_var($mail,FILTER_VALIDATE_EMAIL) === false){
        echo 'eformat';
    }else if(strlen($msg) > 500){
        echo 'message_long';
    }else if(strlen($msg) < 3){
        echo 'message_short';
    }else{
        
        require 'phpmailer/src/PHPMailer.php';

        $mail2 = new PHPMailer();

        $mail2->isSMTP();
        $mail2->Host = 'smtp.gmail.com';
        $mail2->SMTPAuth = true;
        $mail2->Username = 'kavindasupun0618@gmail.com';
        $mail2->Password = 'uhrjxwjqofouvtch';
        $mail2->SMTPSecure = 'tls';

        $mail2->Port = 587;

        $mail2->addReplyTo($mail);
        $mail2->From = $email;
        $mail2->FromName = $name;
        $mail2->addAddress('kavindasupun0618@gmail.com','Admin');

        $mail2->isHTML(true);

        $mail2->Subject = $subject;
        $mail2->Body = $msg;
        $mail2->AltBody = 'This is the body in Plain Text for non-HTML mail clients';

        if(!$mail2->send()){
            echo 'Message could not be send';
            echo 'Mailer Error';
        }else{
            echo 'true';
        }
    }
?>