<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-type: application/json; charset=utf-8');
define("INFLEX", true);
require_once('includes/database.php');

function sendEmail($email,$fullName,$subject)
{
    require_once('asset/phpmailer/PHPMailerAutoload.php');
    $act = 'sendEmail';
    $res = array();

    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->IsHTML(true);
    $mail->Username = 'gagipredojevic65@gmail.com';
    $mail->Password = '07071993';
    $mail->SetFrom($email);
    $mail->FromName = $fullName;
    $mail->AddReplyTo('gagi.predojevic93@hotmail.com');
    $mail->Subject = $subject;
    $mail->AddEmbeddedImage('../assets/img/mail/bottom.png', 'logo_2');
    $mail->AddEmbeddedImage('../assets/img/mail/1.png', 'logo_fb');
    $mail->AddEmbeddedImage('../assets/img/mail/2.png', 'logo_gp');
    $mail->AddEmbeddedImage('../assets/img/mail/3.png', 'logo_li');
    $mail->AddEmbeddedImage('../assets/img/mail/4.png', 'logo_tw');
    $mail->AddEmbeddedImage('../assets/img/mail/5.png', 'logo_fw');
    $mail->AddEmbeddedImage('../assets/img/mail/6.png', 'logo_yt');
    $mail->AddEmbeddedImage('../assets/img/mail/7.png', 'logo_xi');
    if(!$mail->send())
    {
        $r = returnError($act, "Mailer Error: " . $mail->ErrorInfo, 400 );
        array_push( $res, $r );
    }
    else
    {
        $r = success($act,"OK",200);
        array_push( $res, $r );
    }

    return $res;
}

function Login(){

    global $db;
    $act = 'Login';
    $res = array();

    if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $db->prepare("SELECT `log_email`,`log_password` FROM `login` WHERE `log_email`= ? AND `log_password`= ?");
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $stmt->store_result();


        if ($stmt->num_rows > 0) {
           $r = success($act,"OK",200);
           if ( ! in_array( $r, $res ) ) array_push( $res, $r );

        } else {
           $r = returnError($act, 'Invalid email/password', 400 );
           if ( ! in_array( $r, $res ) ) array_push( $res, $r );

        }

    } else {
       $r =  returnError($act, 'Errors to database,please contact admin', 400 );
       if ( ! in_array( $r, $res ) ) array_push( $res, $r );
    }

    return $res;
}

function Logout(){
    $res =  array();
    header("location: ../?page=Login");
    return $res;
}

function createRepertoair(){

    global $db;

    $act = 'createRepertoair';
    $res = array();

    if(isset($_POST['title']) && isset($_POST['dateOf']) && isset($_POST['dateTo']) && isset($_POST['description']) && !empty($_POST['title']) && !empty($_POST['dateOf']) && !empty($_POST['dateTo']) && !empty($_POST['description']))
    {
        $title = $_POST['title'];
        $dateOf = $_POST['dateOf'];
        $dateTo = $_POST['dateTo'];
        $desc = $_POST['description'];
        $file = $_POST['file'];

        $stmt = $db->prepare("INSERT INTO `CreateRep`(`title`, `dateOf`, `dateTo`, `description`, `file`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $title, $dateOf,$dateTo,$desc,$file);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $r = success($act,"OK",200);
            if ( ! in_array( $r, $res ) ) array_push( $res, $r );
        } else {
            $r = returnError($act, 'Not ok', 400 );
            if ( ! in_array( $r, $res ) ) array_push( $res, $r );
        }

    } else {
        $r = returnError($act, 'Error connected', 400 );
        if ( ! in_array( $r, $res ) ) array_push( $res, $r );
    }

    return $res;
}

function sendFile(){
    $act = 'createRepertoair';
    $res = array();

    $extension = array('png', 'jpg', 'gif','jpeg');

        $img  = $_FILES[ 'file' ];
        $file = fopen( $img[ 'tmp_name' ], 'r' );

        echo json_encode( $res );

    return $res;
}



if ( isset( $_POST ) && isset( $_POST[ 'p' ] ) ) {
    $result = array();
    switch ( $_POST[ 'p' ] ) {
        default:
            $result = returnError('ERROR', 'Invalid \'p\' parameter value.', 400 );
            break;

        case 'Login':
            $result = Login();
            echo json_encode( $result[0] );
            break;

        case 'Logout':
            $result = Logout();
            echo json_encode( $result );
            break;

        case 'createRep':
            $result = createRepertoair();
            echo json_encode( $result[0] );
            break;

        case 'sendFile':
            $result = sendFile();
            echo json_encode( $result[0] );
            break;

        case 'sendEmail':
            $result = sendEmail('gagipredojevic65@gmail.com', 'Dragoslav Predojevic','Presenting Repertoair');
            echo json_encode($result);
    }
}
