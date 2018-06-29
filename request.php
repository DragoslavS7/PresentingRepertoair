<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('session.cookie_lifetime',1);
ini_set('session.cookie_httponly',1);
ini_set('session.use_strict_mod',1);

header('Content-type: application/json; charset=utf-8');
define("INFLEX", true);
require_once('includes/database.php');

$lifetime= 3600;
session_set_cookie_params ($lifetime);
if(!isset($_SESSION))session_start();
setcookie(session_name(),session_id(),time() + $lifetime);
session_regenerate_id();


function sendEmail($email,$fullName,$subject,$body)
{

    require_once('asset/phpmailer/PHPMailerAutoload.php');

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
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->addAddress($email, $fullName);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = 'This is a plain-text message body';
    $files = '/var/www/PresentingRepertoir/uploads/';

    if (is_dir($files) && $dh = opendir($files)) {
        while (($file = readdir($dh)) !== false) {
            if (!is_dir($file) && $file !== "thumbnail") {
                $mimetype = mime_content_type($files.$file);
                $mail->addAttachment($files.$file, $file, 'base64', $mimetype);
            }
        }
    }
    if(!$mail->send())
    {
        $r = returnError($act, "Mailer Error: " . $mail->ErrorInfo, 400 );
        array_push( $res, $r );
    } else {
        $r = success($act,"OK",200);
        array_push( $res, $r );
    }

    return $res;
}

function HtmlBody()
{

    ob_start();

    global $db;

    $stms = $db->query("SELECT `title`, `fname`, `lname`, `user`, `email`, `address`, `address2`, `country`, `state`, `zip`, `tikets`, `date` FROM `Reserved` ORDER BY `title`, `fname`, `lname`, `user`, `email`, `address`, `address2`, `country`, `state`, `zip`, `tikets`, `date`");

    if($stms->num_rows > 0){
        while($rep = $stms->fetch_assoc()){
            if ( is_file( 'secondaryLinks/mail.php' ) ) require_once 'secondaryLinks/mail.php';
        }
    }


    return ob_get_clean();

}

function HtmlAfterFix()
{

    ob_start();

        if ( is_file( 'includes/emailFix.php' ) ) require_once 'includes/emailFix.php';

    return ob_get_clean();

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
            $_SESSION['admin'] = $email;
            $_SESSION['admin'] = $password;
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



if (!empty($_GET['p'])) {
    switch ($_GET['p']) {
        default:
            break;

        case 'file':
            $act = 'SendFile';
            $res = array();

            $allowed = array('png', 'jpg', 'gif');
            if (!empty($_FILES['file']) && $_FILES['file']['error'] == 0) {

                $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                if (!in_array(strtolower($extension), $allowed)) {
                    $r = returnError($act, 'Errors!', 400);
                    if (!in_array($r, $res)) array_push($res, $r);
                }

                if (move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . basename($_FILES['file']['name']))) {
                    $r = success($act, "OK", 200);
                    if (!in_array($r, $res)) array_push($res, $r);
                }

            }
            echo json_encode($res);

            break;
        case 'lang':
            if ( !empty($_GET['language']) ) {
                $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'srb';
            } else {
                $_COOKIE['language'] = 'srb';
            }
            setcookie('language', $_COOKIE['lang']);
            break;

        case 'logout':
            $res = array();

            if(isset($_SESSION["admin"]))
            {
                unset($_SESSION["admin"]);
                session_destroy();
            }else{
                $r = returnError('Logout', 'Errors!', 400);
                if (!in_array($r, $res)) array_push($res, $r);
            }

            echo json_encode($res);
            break;
    }
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

        case 'reservedForm':
            $result = reservedForm();
            echo json_encode( $result[0] );
            break;

        case 'createRep':
            $result = createRepertoair();
            echo json_encode( $result[0] );
            break;

        case 'sendEmail':
            $after = HtmlAfterFix();
            $body = HtmlBody();
            $result = sendEmail('gagipredojevic65@gmail.com', 'Dragoslav Predojevic','Presenting Repertoair',$body.$after);
            echo json_encode($result);
            break;
    }
}
