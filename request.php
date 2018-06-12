<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-type: application/json; charset=utf-8');
define("INFLEX", true);

if ( isset( $_POST ) && isset( $_POST[ 'p' ] ) ) {

    switch ( $_POST[ 'p' ] ) {
        default:
            returnError( "Invalid \'p\' parameter value." );
            break;
        case 'Login':
            require_once('includes/database.php');
            $output =  array('status' => 'OK');

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
            $output =  array('status' => 'OK');
                header("location: ../?page=Login");
            echo json_encode( $output );
            break;
    }
}