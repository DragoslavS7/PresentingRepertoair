<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



function Login(){
    header('Content-type: application/json; charset=utf-8');
    define("INFLEX", true);
    $output = array("status" => "OK");
    require_once('includes/database.php');
    ini_set('session.cookie_lifetime', 1);
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_strict_mod', 1);
    $lifetime = 3600;
    session_set_cookie_params($lifetime);
    session_start();
    setcookie(session_name(), session_id(), time() + $lifetime);
    session_regenerate_id();

    global $db;

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
return $output;
}


if ( isset( $_POST ) && isset( $_POST[ 'p' ] ) ) {
    $result = array();

    switch ( $_POST[ 'p' ] ) {
        default:
            returnError( "Invalid \'p\' parameter value." );
            break;
        case 'Login':
            $result = Login();
            break;
    }

    echo json_encode( $result );
}