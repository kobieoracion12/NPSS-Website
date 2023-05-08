<?php
include_once "database.php";
require("../PHPMailer-master/src/Exception.php");
require("../PHPMailer-master/src/PHPMailer.php");
require("../PHPMailer-master/src/SMTP.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $application_id = $_POST['application_id'];
    $schedule_date = $_POST['schedule_date'];
    $schedule_time = $_POST['schedule_time'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    

    $insert = mysqli_query($config, "INSERT INTO schedule (application_id, date_sched, time_sched, message) VALUES ('$application_id', '$schedule_date', '$schedule_time', '$message')");

    if($insert) {
        $update = mysqli_query($config, "UPDATE application SET status = 'outgoing' WHERE application_id = '$application_id'");
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        //SMTP::DEBUG_OFF = off (for production use)
        //SMTP::DEBUG_CLIENT = client messages
        //SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = 1;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
        //if your network does not support SMTP over IPv6,
        //though this may cause issues with TLS

        //Set the SMTP port number:
        // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
        // - 587 for SMTP+STARTTLS
        $mail->Port = 465;

        //Set the encryption mechanism to use:
        // - SMTPS (implicit TLS on port 465) or
        // - STARTTLS (explicit TLS on port 587)
        $mail->SMTPSecure = 'ssl';

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'richardramos1425@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'ndyidjjdczljxwkz';

        //Set who the message is to be sent from
        //Note that with gmail you can only use your account address (same as `Username`)
        //or predefined aliases that you have configured within your account.
        //Do not use user-submitted addresses in here
        $mail->setFrom('donotreply@gmail.com', 'NAR');

        //Set an alternative reply-to address
        //This is a good place to put user-submitted addresses
        $mail->addReplyTo('ramosrichard310@gmail.com', 'NAR');

        //Set who the message is to be sent to
        $mail->addAddress($email);

        //Set the subject line
        $mail->Subject = "Interview Schedule";
        $mail->Body = "<h4>what</h4>
                        <p>what</p>";

        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } 
        else {
            if ($update) {
                header("Location: ../admin/main/nar-applicants.php?sort=unread&success");
            }
        }
    }
    else {
        header("Location: ../admin/main/nar-applicants.php?sort=unread&failed");
    }
}

?>