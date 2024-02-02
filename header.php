<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="stylesheet" href="styles-<?php echo $title; ?>.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles-header-footer.css">
</head>

<body>
    <div class="container-fluid full-page">
        <!-- Header -->
        <div class="header-container align-content-center fs-5 fw-bold text-dark">
            <!-- Logo -->
            <div class="logo-container">
                <img src="./img/logo.png" alt="logo">
            </div>
            <!-- Navigation -->
            <div class="nav-container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav-item" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php" aria-current="page"
                                        href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="Products.php" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Products
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="Products.php">Electric Cars</a></li>
                                        <li>
                                            <a class="dropdown-item" href="Products.php">SUV Cars</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="Products.php">Sedan Cars</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="Products.php">Assessories</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="News.php">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Contact.php">Contact</a>
                                </li>
                            </ul>
                            <div class="search">
                                <input type="text" class="search-input" placeholder="Search" name="Search">
                                <a href="#" class="search-icon">
                                    <img src="img/icons8-search.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>