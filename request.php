<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-type: application/json; charset=utf-8');
define("INFLEX", true);
require_once('includes/database.php');
require_once('asset/phpmailer/PHPMailerAutoload.php');

function sendEmail($email,$fullName,$subject)
{

    $act = 'sendEmail';
    $res = array();

    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->Username = 'gagipredojevic65@gmail.com';
    $mail->Password = '07071993';
    $mail->SetFrom($email);
    $mail->FromName = $fullName;
    $mail->addAddress("gagipredojevic65@gmail.com", "Recepient Name");
    $mail->AddReplyTo('gagipredojevic65@gmail.com');
    $mail->Subject = $subject;
    $mail->AddEmbeddedImage('assets/img/facebook.svg', 'logo_2');
    $mail->AddEmbeddedImage('assets/img/google-plus.svg', 'logo_fb');
    $mail->AddEmbeddedImage('assets/img/instagram.svg', 'logo_gp');
    $mail->AddEmbeddedImage('assets/img/linkedin.svg', 'logo_li');
    $mail->AddEmbeddedImage('assets/img/twitter.svg', 'logo_tw');
    $mail->AddEmbeddedImage('assets/img/youtube.svg', 'logo_fw');
    $mail->Body ='test';
    $mail->send();
    /*if(!$mail->send())
    {
        $r = returnError($act, "Mailer Error: " . $mail->ErrorInfo, 400 );
        array_push( $res, $r );
    }
    else
    {
        $r = success($act,"OK",200);
        array_push( $res, $r );
    }*/

    return $mail;
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

    if(isset($_POST['title']) && isset($_POST['dateOf']) && isset($_POST['dateTo']) && isset($_POST['description']) && isset($_POST['file']) && !empty($_POST['title']) && !empty($_POST['dateOf']) && !empty($_POST['dateTo']) && !empty($_POST['description']) && !empty($_POST['file']))
    {
        $title = $_POST['title'];
        $dateOf = $_POST['dateOf'];
        $dateTo = $_POST['dateTo'];
        $desc = $_POST['description'];
        $file = $_POST['file'];

        $stmt = $db->prepare("INSERT INTO `CreateRep`(`title`, `dateOf`, `dateTo`, `description`, `file`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $title, $dateOf,$dateTo,$desc,$file);

        if ($stmt->execute()) {
            $r = success($act,"OK",200);
            if ( ! in_array( $r, $res ) ) array_push( $res, $r );

        } else {
            $r = returnError($act, 'Fill in all the fields!', 400 );
            if ( ! in_array( $r, $res ) ) array_push( $res, $r );

        }

    } else {
        $r = returnError($act, 'Error connected', 400 );
        if ( ! in_array( $r, $res ) ) array_push( $res, $r );
    }

    return $res;
}

function reservedForm(){

    global $db;

    $act = 'reserved-form';
    $res = array();

    if(isset($_POST['Title']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['address2']) && isset($_POST['country']) && isset($_POST['state']) && isset($_POST['zip']) && isset($_POST['tik_s']) && !empty($_POST['Title']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['address']) && isset($_POST['address2']) && !empty($_POST['country']) && !empty($_POST['state']) && !empty($_POST['zip']) && !empty($_POST['tik_s']))
    {
        $Title = $_POST['Title'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $email  = $_POST['email'];
        $adresse1 = $_POST['address'];
        $address2 = $_POST['address2'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $tik_s = $_POST['tik_s'];



        $stmt = $db->prepare("INSERT INTO `Reserved`(`title`,`fname`,`lname`,`user`,`email`,`address`,`address2`,`country`,`state`,`zip`,`tikets`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssssssss',$Title,$firstName,$lastName,$username,$email,$adresse1,$address2,$country,$state,$zip,$tik_s );

        if ($stmt->execute()) {
            $r = success($act,"OK",200);
            if ( ! in_array( $r, $res ) ) array_push( $res, $r );

        } else {
            $r = returnError($act, 'Invalid fields', 400 );
            if ( ! in_array( $r, $res ) ) array_push( $res, $r );

        }

    } else {
        $r =  returnError($act, 'Errors to database,please contact admin', 400 );
        if ( ! in_array( $r, $res ) ) array_push( $res, $r );
    }

    return $res;
}


if ( ! empty( $_GET[ 'p' ] ) &&  $_GET[ 'p' ] == 'file' ) {

    $act = 'SendFile';
    $res = array();

    if( !empty($_FILES['file']) && $_FILES['file']['error'] == 0){

        if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.basename($_FILES['file']['name']))){
            $r = success($act,"OK",200);
            if ( ! in_array( $r, $res ) ) array_push( $res, $r );
        }

    }

    echo json_encode($res);

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

        case 'reservedForm':
            $result = reservedForm();
            echo json_encode( $result[0] );
            break;

        case 'createRep':
            $result = createRepertoair();
            echo json_encode( $result[0] );
            break;

        case 'sendEmail':
            $result = sendEmail('gagipredojevic65@gmail.com', 'Dragoslav Predojevic','Presenting Repertoair');
            echo json_encode($result);
    }
}
