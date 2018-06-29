<?php
require('includes/header.php');

define("INFLEX", true);
require_once('includes/database.php');
session_start();
if(isset($_SESSION['admin'])){
    header('Location: admins/new-repertoair.php');
    die();
}


if( !empty($_GET['language_'])) {
    $lang = $_GET['language_'];
    switch ($lang) {
        case 'en':
            require_once  'language/language_EN.php';
            break;
        case 'srb':
            require_once  'language/language_SRB.php';
            break;

    }
}


if (! isset($_GET['page']))
{
    include('parts/home.php');

} else {
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
}
require("includes/footer.php");

?>