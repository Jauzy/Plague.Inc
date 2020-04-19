<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/external.css">
    <script src=" https://kit.fontawesome.com/2ed1788daf.js" crossorigin="anonymous"></script>

    <!-- https://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/slick/slick-theme.css" />

    <!-- morris js -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <title><?php echo $judul ?></title>
</head>

<body class='font-lato'>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class='container py-3'>
            <a class="btn btn-main-alt" href="<?= base_url(); ?>"><i class='fa fa-plus-circle mr-2'></i>PLAGUE.INC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-2">
                        <a class="btn btn-main-alt" href="<?= base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn btn-main-alt" href="<?= base_url(); ?>registerdokter">Register</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn btn-main-alt" href="<?= base_url(); ?>logindokter">Login</a>
                    </li>
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <button class="btn btn-main dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hello, User name
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>