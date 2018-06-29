<!DOCTYPE html>
<html>

<head <?php require_once 'settings.php'; ?> >
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="asset/img/iconsSVG.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($pagetitle) && !empty($pagetitle)) { echo $pagetitle; } else { echo "Error"; }?></title>

    <?php if(isset($fontAwesome) && $fontAwesome): ?>
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
    <?php endif; ?>
    <?php if(isset($animateCss) && $animateCss): ?>
        <link rel="stylesheet" href="asset/css/animate.css">
    <?php endif; ?>
    <?php if(isset($bootstrap) && $bootstrap): ?>
        <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css">
    <?php endif; ?>
    <?php if(isset($jasnyBootstrap) && $jasnyBootstrap): ?>
        <link rel="stylesheet" href="asset/css/bootstrap/jasny-bootstrap.min.css ">
    <?php endif; ?>
    <?php if(isset($dataTables) && $dataTables): ?>
        <link rel="stylesheet" href="asset/css/dataTables/dataTables.bootstrap4.css">
    <?php endif; ?>
    <?php if(isset($sweetAlert) && $sweetAlert): ?>
        <link rel="stylesheet" href="asset/css/swal/sweetalert2.css">
    <?php endif; ?>
    <?php if(isset($AdminCSS) && $AdminCSS): ?>
        <link rel="stylesheet" href="asset/css/dashboard-admins.css">
    <?php endif; ?>
    <?php if(isset($styleCss) && $styleCss): ?>
        <link rel="stylesheet" href="asset/css/style.css">
    <?php endif; ?>

</head>

<body class="back_col">

<div class="container">
    <div class = "head_first">
        <nav class="navbar navbar-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="text-right">
                <a href="?language_=en">English<img src="../asset/img/uk.png" width="54"></a>
                <a href="?language_=srb">Serbian<img src="../asset/img/srb.png" width="54"></a>
            </div>

        </nav>

        <div class="collapse" id="navbarToggleExternalContent">
            <div class=" p-4">
                <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab"  href="?page=home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" id="pills-repertoir-tab" href="?page=repertoir" role="tab" aria-controls="pills-repertoir" aria-selected="false">Repertoir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" href="?page=contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-reserve-tab" href="?page=reserve" role="tab" aria-controls="pills-reserve" aria-selected="false">Reserve</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-news-tab" href="?page=news" role="tab" aria-controls="pills-news" aria-selected="false">News</a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="pills-login-tab"  href="#" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-user"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="?page=Login">Login</a></li>
                        </ul>
                    </li>-->
                </ul>
            </div>

        </div>
    </div>





