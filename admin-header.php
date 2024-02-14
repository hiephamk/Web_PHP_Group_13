<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="stylesheet" href="./styles/styles-<?php echo $title; ?>.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles-header-footer.css">
</head>

<body>
    <div class="body-container">
        <!-- Header -->
        <div class="header-container fs-5 fw-bold text-dark">
            <!-- Logo -->
            <div class="logo-container">
                <img class="img-fluid" src="./img/logo.png" alt="logo">
            </div>
            <!-- Navigation -->
            <div class=" navibar-container">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav-item-container" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="admin.php" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Product Management
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Update News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Contact Management</a>
                                </li>

                            </ul>

                            <div class="profile-nav">
                                <?php
                                if (isset($_SESSION['email']) && ($_SESSION['email'] != "")) {

                                    echo '<div class="dropdown btn-profile">
                                        <button class="rounded-2 btn-profile dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">'
                                        . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item " href="admin.php"> Admin-product</a></li>
                                        <li><a class="dropdown-item " href="admin.php"> Admin-news</a></li>
                                        <li><a class="dropdown-item " href="logout.php"> Log out</a></li>
                                        </ul>
                                    </div>';
                                    //echo '<a class="" href="logout.php"><button class=" btn btn-logout btn-primary" style="margin-bottom: 30px;width:100px">Log Out</button></a>';
                                } else {
                                ?>
                                <div class="login-btn">
                                    <a href="register.php"><button class="btn-signup btn-primary">Sign
                                            Up</button></a>
                                    <a href="login.php"><button class="btn-login btn-primary ">Log
                                            In</button></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </div>