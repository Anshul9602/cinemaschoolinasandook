<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/image/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;700&family=Poppins:wght@400;500;600&family=Red+Hat+Text:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Purple People Lab - Rurban Digital Education</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            overflow-x: hidden;
        }

        body {
            overflow-x: hidden;
            /* transform: translateX(1px); */
            font-family: 'Red Hat Text', 'Poppins', sans-serif;
            background-color: #EDF3F6;
            color: #000;
        }

        p {
            margin-bottom: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .navbar {
            background-color: #642165 !important;
            padding: 10px 30px;
        }

        .film-library-logo {
            width: 80px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .film-library-logo img {
            width: 100%;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler .menu-icon {
            color: #fff !important;
            font-size: 26px;
        }

        .app__sidebar-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .center-school {
            margin-bottom: 0;
        }

        .center-classes {
            padding: 0 15px;
        }

        #Classes {
            width: 100%;
            background: transparent;
            font-size: 18px;
            font-weight: 500;
            color: #fff;
            border: none;
            outline: none;
        }

        #Classes .class-text {
            color: #000;
            font-weight: 500;
        }

        .top-menu {
            position: relative;
            cursor: pointer;
        }

        .top-menu .top-menu-popup {
            position: absolute;
            left: 0;
            right: 0;
            top: 40px;
            display: none;
        }

        .top-menu:hover .top-menu-popup {
            display: block;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top d-flex justify-content-between">
        <a class="navbar-brand film-library-logo" href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('assets/image/The_Film_Library_Logo.png'); ?>" alt="Film-librayr-logo">
        </a>
        <span class="top-menu" style="color:#fff;"> <img src="<?php echo base_url('assets/image/kps.png') ?>" style="width:40px"> Welcome
            <div class="top-menu-popup" style="padding:5px 10px; color:#000; background-color:#fff; border-radius:5px;">
                <a href="<?php echo base_url() ?>">Logout</a>
            </div>
        </span>


    </nav>