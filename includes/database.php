<?php
/*
 *  Parent directory's path
 * @include config.php
 */

require(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php');

if (!defined("INFLEX")) {
    die("I miss you Inflex...");
}

function returnError($act, $error, $errno, $url = FALSE ) {

    $error = array(
        'act'   => $act,
        'error' => $error,
        'errno' => $errno,
    );
    if ( $url ) $error[ 'url' ] = $url;

    return $error;
}
function success ($act,$success,$status,$url = FALSE) {

    $success = array(
        'act'   => $act,
        'success' => $success,
        'status' => $status
    );

    if ( $url ) $error[ 'url' ] = $url;

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