<?php
require('includes/header.php');

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
        case 'profile':
            include('parts/profile.php');
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