<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<!-- example cavier -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>miwasnack</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>depan/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url(); ?>depan/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url(); ?>depan/css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="<?php echo base_url(); ?>depan/img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="<?php echo base_url(); ?>depan/img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="<?php echo base_url(); ?>depan/img/core-img/preload-3.png" alt="">
        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="">Miwasnack</a>
                        <!-- <img src="img/admin.jpeg" alt="logo"> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#kami">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#produk">Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#penghargaan">Penghargaan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testimonial">Testimonial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#kontak">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#alamat">Alamat</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->