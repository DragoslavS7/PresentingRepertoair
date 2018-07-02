<?php
define("INFLEX", true);
require_once('includes/database.php');
session_start();

require('includes/header.php');

if(isset($_SESSION['admin'])){
    header('Location: admins/new-repertoair.php');
    die();
}

if (isset($_GET['page']) && isset($_GET['language_']) && !empty($_GET['page']) && !empty($_GET['language_']))
{
    $page = $_GET['page'];
    switch($page)
    {
        case 'home':
            include('parts/home.php');
            break;
        case 'repertoir':
            include('parts/repertoir.php');
            break;
        case 'contact':
            include('parts/contact.php');
            break;
        case 'reserve':
            include('parts/reserve.php');
            break;
        case 'news':
            include('parts/news.php');
            break;
        case 'Login':
            include('parts/Login.php');
            break;
        case 'his':
            include('secondaryLinks/history.php');
            break;
    }

} else {

    include('parts/404.php');

}
require("includes/footer.php");

?>