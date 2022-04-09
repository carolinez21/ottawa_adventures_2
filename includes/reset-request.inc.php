<?php

    require('../PHPMailer/PHPMailerAutoload.php');


if (isset($_POST["reset-request-submit"])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "localhost/ottawa_adventures_2/forgottenpwd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    require 'dbh.inc.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetselector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;

    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'ottadventures4@gmail.com';                 
    $mail->Password = 'exploreott1';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = '587'; 

    $mail->setFrom('ottadventures4@gmail.com', 'Mailer');
    $mail->addAddress($userEmail);                  
    $mail->addReplyTo('ottadventures4@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Reset your password for Ottawa Adventures';
    $mail->Body    = 'We received a request to reset your password. Reset your password by clicking the link below. If you did not make this request, please ignore this email.<p>Password reset link: </br><a href="' . $url . '">' . $url . '</a></p>';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

    /*$to = $userEmail;

    $subject = 'Reset your password for Ottawa Adventures';

    $message = '<p>We received a request to reset your password. Reset your password by clicking the link below. If you did not make this request, please ignore this email.</p>';
    $message .= '<p>Password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: Ottawa Adventures <ottadventures4@gmail.com>\r\n";
    $headers .= "Reply-To: ottadventures4@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);*/

    header("Location: ../reset-password.php?reset=success");

} else {
    header("location: ../index.php");
}