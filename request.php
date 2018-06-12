<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-type: application/json; charset=utf-8');
require_once('includes/database.php');
define("INFLEX", true);

function sendEmail($mail,$files,$param = FALSE)
{
    global $db;

    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = ''; // your host
    $mail->Port = 465;
    $mail->IsHTML(true);
    $mail->Username = ''; //your email
    $mail->Password = ''; // your pass
    $mail->SetFrom('gagi.predojevic93@hotmail.com');
    $mail->FromName = 'Dragoslav Predojevic';
    $mail->AddReplyTo('gagi.predojevic93@hotmail.com');
    $mail->Subject = 'Presenting Repertoair';
    $mail->AddEmbeddedImage('../assets/img/mail/bottom.png', 'logo_2');
    $mail->AddEmbeddedImage('../assets/img/mail/1.png', 'logo_fb');
    $mail->AddEmbeddedImage('../assets/img/mail/2.png', 'logo_gp');
    $mail->AddEmbeddedImage('../assets/img/mail/3.png', 'logo_li');
    $mail->AddEmbeddedImage('../assets/img/mail/4.png', 'logo_tw');
    $mail->AddEmbeddedImage('../assets/img/mail/5.png', 'logo_fw');
    $mail->AddEmbeddedImage('../assets/img/mail/6.png', 'logo_yt');
    $mail->AddEmbeddedImage('../assets/img/mail/7.png', 'logo_xi');
    $files = '/srv/www/FestivalApp2/uploads/';
    if (is_dir($files) && $dh = opendir($files)) {
        while (($file = readdir($dh)) !== false) {
            if (!is_dir($file) && $file !== "thumbnail") {
                $mimetype = mime_content_type($files.$file);
                $mail->addAttachment($files.$file, $file, 'base64', $mimetype);
            }
        }
    }
    $before = '';
    $mail->Body = $before;
    $mail->AddAddress('gagipredojevic65@gmail.com');
    $mail->Send();

    return $mail;
}



if ( isset( $_POST ) && isset( $_POST[ 'p' ] ) ) {
    $result = array();
    switch ( $_POST[ 'p' ] ) {
        default:
            returnError( "Invalid \'p\' parameter value." );
            break;
        case 'Login':
            require_once('includes/database.php');
            $output =  array("status" => "OK");

            if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];

                $stmt = $db->prepare("SELECT `log_email`,`log_password` FROM `login` WHERE `log_email`= ? AND `log_password`= ?");
                $stmt->bind_param('ss', $email, $password);
                $stmt->execute();
                $stmt->store_result();


                if ($stmt->num_rows > 0) {
                    $_SESSION['admin'] = $email;
                    $_SESSION['admin'] = $password;
                } else {
                    returnError('Invalid username/password');
                }

            } else {
                returnError('Errors to database,please contact admin');
            }

            echo json_encode( $output );
            break;

        case 'Logout':
                header("location: ../?page=Login");
            echo json_encode( $result );
            break;

        case 'createRep':
            require_once('includes/database.php');
            $output =  array("status" => "OK");
            if(isset($_POST['title']) && isset($_POST['dateOf']) && isset($_POST['dateTo']) && isset($_POST['description']) && !empty($_POST['title']) && !empty($_POST['dateOf']) && !empty($_POST['dateTo']) && !empty($_POST['description']))
            {
                $title = $_POST['title'];
                $dateOf = $_POST['dateOf'];
                $dateTo = $_POST['dateTo'];
                $desc = $_POST['description'];
                $file = $_POST['file'];

                $stmt = $db->prepare("INSERT INTO `CreateRep`(`title`, `dateOf`, `dateTo`, `description`, `file`) VALUES (?,?,?,?,?)");
                $stmt->bind_param("ssss", $title, $dateOf,$dateTo,$desc,$file);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $input = "OK";
                } else {
                    returnError('Data is not defined');
                }

            } else {
                returnError('Network connected');
            }

            echo json_encode( $output );
            break;
        case 'sendEmail':
            $result = sendEmail('gagi.predojevic93@hotmail.com', TRUE);
            echo json_encode($result);
    }
}