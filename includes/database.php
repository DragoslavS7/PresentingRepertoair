<?php
/*
 *  Parent directory's path
 * @include config.php
 */

require(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php');

if (!defined("INFLEX")) {
    die("I miss you Inflex...");
}

function returnError( $error, $errno, $url = FALSE ) {

    $error = array(
        'error' => $error,
        'errno' => $errno,
    );
    if ( $url ) $error[ 'url' ] = $url;

    return $error;
}
function success ( $success ) {

    $success = array(
        'success' => $success
    );

    return $success;
}

/*
 * Connect with database
 */
$db = new mysqli($conf['db_host'], $conf['db_user'], $conf['db_password'], $conf['db_database']);
if ($db->connect_error) {
    die("ERROR: ".$db->connect_error);
} else {
    $db->query("SET NAMES utf8mb4");
}
