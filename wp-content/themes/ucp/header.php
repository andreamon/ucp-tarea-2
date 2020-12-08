<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body>
    <div class="top-nav-section">
        <div class="container-css top-nav">

            <ul class="top-nav-item hidden-sm">
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/cloud.svg" alt="Educacion a distancia" height="15px">
                        <span>EDUCACIÓN A DISTANCIA</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/lock.svg" alt="Sistema de alumnos" height="15px">
                        <span>SISTEMA DE ALUMNOS</span>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/book.svg" alt="Aulas virtuales" height="15px">
                        <span>AULAS VIRTUALES</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/world.svg" alt="Mundo cuenca TV" height="20px">
                        <span>MUNDO CUENCA TV</span>
                    </a>
                </li>
            </ul>

            <ul class="top-nav-item hidden-sm">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/position.svg" alt="Ubicacion" height="15px">
                    <span>LAVALLE 50</span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/phone.svg" alt="Telefono" height="20px">
                    <span>+54 (0379) 443-6299</span>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/facebook.svg" alt="Facebook" height="15px">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/twitter.svg" alt="Twitter" height="15px">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/instagram.svg" alt="Instagram" height="15px">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/youtube.svg" alt="YouTube" height="20px">
                    </a>
                </li>
            </ul>
            <div class="mobile-menu visible-sm">
                <a class="mobile-menu-burger" onclick="toggleMenu()"><i class="fas fa-bars"></i></a>
                <ul class="top-nav-item collapsed">
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/cloud.svg" alt="Educacion a distancia" height="15px">
                            <span>EDUCACIÓN A DISTANCIA</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/lock.svg" alt="Sistema de alumnos" height="15px">
                            <span>SISTEMA DE ALUMNOS</span>
                        </a>

                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/book.svg" alt="Aulas virtuales" height="15px">
                            <span>AULAS VIRTUALES</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/world.svg" alt="Mundo cuenca TV" height="20px">
                            <span>MUNDO CUENCA TV</span>
                        </a>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/position.svg" alt="Ubicacion" height="15px">
                        <span>LAVALLE 50</span>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/phone.svg" alt="Telefono" height="20px">
                        <span>+54 (0379) 443-6299</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/facebook.svg" alt="Facebook" height="15px">
                        </a>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/twitter.svg" alt="Twitter" height="15px">
                        </a>

                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/instagram.svg" alt="Instagram" height="15px">
                        </a>

                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/redes/youtube.svg" alt="YouTube" height="20px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-css logo">
        <img src="<?php echo get_template_directory_uri(); ?>/public/logos/logo_ucp.svg" alt="Cuenca del Plata">
    </div>
    <div class="nav">
        <div class="container-css nav-items">
            <div class="nav-home">
                <a href="http://www.ucp.edu.ar" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/house.svg" alt="Ir a ucp.edu.ar" width="20px">
                    <span>Ir a www.ucp.edu.ar</span>
                </a>
            </div>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/search.svg" alt="Buscar" width="20px">
            </a>
        </div>
    </div>