<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRD Agency</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header class="encabezado">
        <div class="container-fluid gx-5 py-3">
            <div class="row">
                <div class="encabezado__hamburguesa col-2">
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-menu.svg" alt="menu icon">
                    </a>
                </div>
                <div class="enbezado__logo col-5 col-md-2 px-2 px-md-4">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo5.webp" width="100%" alt="Logo TRD Agency">
                    </a>
                </div>
                <div class="encabezado__menu col-6 col-md-5">
                    <ul>
                        <li class="encabezado__item current"><a href="#">Todo</a></li>
                        <li class="encabezado__item"><a href="#">Ropa</a></li>
                        <li class="encabezado__item"><a href="#">Electrodomesticos</a></li>
                        <li class="encabezado__item"><a href="#">Muebles</a></li>
                        <li class="encabezado__item"><a href="#">Jueguetes</a></li>
                        <li class="encabezado__item"><a href="#">Otros</a></li>
                    </ul>
                </div>
                <div class="encabezado__cart col-5 col-md-1">
                    <a href="sign_in.html" class="encabezado_sign-in">
                        Iniciar Sesión
                    </a>
                    <a href="#" class="encabezado__link active">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/header-empty-card.svg" alt="cart">
                    </a>
                </div>
            </div>
            <div class="encabezado__menu-responsive">
                <ul>
                    <li class="encabezado__item current"><a href="#">Todo</a></li>
                    <li class="encabezado__item"><a href="#">Ropa</a></li>
                    <li class="encabezado__item"><a href="#">Electrodomesticos</a></li>
                    <li class="encabezado__item"><a href="#">Muebles</a></li>
                    <li class="encabezado__item"><a href="#">Jueguetes</a></li>
                    <li class="encabezado__item"><a href="#">Otros</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="productos">
        <div class="container-fluid gx-5">