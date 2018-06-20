<?php
define("INFLEX", true);
require_once('../includes/database.php');
session_start();
if (!isset($_SESSION['admin'])){
    header('location: ../?page=Login');
    die();
}
?>
<!DOCTYPE html>
<html>

<head <?php require_once 'settings.php'; ?> >
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../asset/img/iconsSVG.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($pagetitle) && !empty($pagetitle)) { echo $pagetitle; } else { echo "Error"; }?></title>
    <link rel="stylesheet" href="../asset/css/animate.css">
    <link rel="stylesheet" href="../asset/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/bootstrap/jasny-bootstrap.min.css ">
    <link rel="stylesheet" href="../asset/css/dataTables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../asset/css/swal/sweetalert2.css">
    <link rel="stylesheet" href="../asset/css/dashboard-admins.css">

</head>
<body>

<div class="wrapper">
    <header>
        <section class="userpanel">
            <div class="user">
                <div class="notification"></div>
                <div class="picture"><img src="../asset/img/default.png" alt="User Name" /></div>
                <div class="name">Dragoslav Predojevic<span class="entypo-down-open"></span></div>
                <div class="drop">
                    <ul>
                        <li><a  class="finish btn btn-outline-dark mb-2"><span class="entypo-login"></span>Logout</a></li>
                        <li><a href="../?page=home" class="btn btn-outline-dark">Customer</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </header>
    <aside>
        <nav role='navigation'>
            <ul>
                <img src="../asset/img/iconsSVG.png" width="70%">
                <li><a href="new-repertoair.php"><span class="entypo-rocket"></span><span class="menu-item">Create</span></a></li>
                <li><a href="tables-repertoair.php"><span class="entypo-archive"></span><span class="menu-item">Tables</span></a></li>
                <li><a href="custom-repertoair.php"><span class="entypo-user"></span><span class="menu-item">Customer</span></a></li>
                <!--<li class="has-sub"><a href="#"><span class="entypo-battery"></span><span class="menu-item">T</span></a>
                </li>
                <ul class="subnav">
                    <li><a href="#"><span class="entypo-right-open"></span> <span>T1</span></a></li>
                    <li><a href="#"><span class="entypo-right-open"></span> <span>T2</span></a></li>
                </ul>-->
            </ul>
        </nav>
    </aside>