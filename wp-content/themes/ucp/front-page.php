<?php get_header(); ?>
<div class="banner">
    <ul class="banner-items">
        <li>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/public/logos/cuenca.png" alt="Cuenca del Plata" height="40px"></a>
        </li>
        <li>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/public/logos/accedeNEA.png" alt="Accede Nea" height="40px"></a>
        </li>
        <li>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/public/logos/CentroAcceso.png" alt="Centro de Acceso a justicia" height="40px"></a>
        </li>
        <li>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/public/logos/ministerioJusticia.png" alt="Ministerio de Justicia" height="40px"></a>
        </li>
    </ul>
</div>
<div class="banner-shadow"></div>
<div class="section">
    <div class="container-css main">
        <div class="main-welcome">
            <h4>Bienvenidos</h4>
            <div class="main-content">
                <img src="<?php echo get_template_directory_uri(); ?>/public/welcome.png" alt="Welcome" width="100%">
                <ul class="main-links">
                    <li><a href="">Qué es AccedeNEA?</a></li>
                    <li><a href="">Qué es SEJUR?</a></li>
                    <li><a href="">Qué es el patrocinio jurídico gratuito de la Universidad?</a></li>
                </ul>
            </div>
        </div>
        <div>
            <h4>Consultas Jurídicas</h4>
            <div class="main-form">
                <form action="#">
                    <p>Ingrese aquí su consulta, nuestro <br> servicio le responderá a la brevedad</p>
                    <div class="form-input"><input type="text" name="name" id="name" placeholder="Nombre y Apellido"
                            class="width-100"></div>
                    <div class="form-input phone-input">
                        <select name="type" id="type">
                            <option value="Celular">Celular</option>
                            <option value="Telefono">Telefono</option>
                        </select>
                        <span>0</span><input class="area-code">
                        <span>15</span><input class="phone-number">
                    </div>
                    <div class="form-input"><input type="text" name="email" id="email" placeholder="Correo Electrónico"
                            class="width-100"></div>
                    <div class="form-input"><input type="text" name="localidad" id="localidad" placeholder="Localidad"
                            class="width-100"></div>
                    <div class="form-input"><textarea name="consulta" id="consulta" placeholder="Mensaje/Consulta"
                            class="width-100" rows="5"></textarea></div>
                    <div class="text-right"><button class="button" type="submit">ENVIAR</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="section-news">
    <div class="news container-css">
        <h4>Últimas Noticias</h4>
        <ul class="news-items">
            <li>
                <img class="item-image" src="<?php echo get_template_directory_uri(); ?>/public/news.png" alt="Noticias">
                <div class="item-content">Título de un artículo, noticias o evento, pero este es uno que ocupa dos
                    lineas</div>
            </li>
            <li>
                <img class="item-image" src="<?php echo get_template_directory_uri(); ?>/public/news.png" alt="Noticias">
                <div class="item-content">Título de un artículo, noticias o evento, pero este es uno que ocupa dos
                    lineas</div>
            </li>
            <li>
                <img class="item-image" src="<?php echo get_template_directory_uri(); ?>/public/news.png" alt="Noticias">
                <div class="item-content">Título de un artículo, noticias o evento, pero este es uno que ocupa dos
                    lineas</div>
            </li>
            <li>
                <img class="item-image" src="<?php echo get_template_directory_uri(); ?>/public/news.png" alt="Noticias">
                <div class="item-content">Título de un artículo, noticias o evento, pero este es uno que ocupa dos
                    lineas</div>
            </li>
        </ul>
    </div>
</div>
<div class="section-maps">
    <div class="maps container-css">
        <h4>Lugares y Horarios de Atención</h4>
        <hr>
        <div class="maps-content">
            <ul class="maps-item">
                <li>
                    <a onclick="goToSede(-27.4860818,-58.8624274)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Corrientes</span>
                    </a>
                </li>
                <li>
                    <a onclick="goToSede(-26.1719849,-58.2650107)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Formosa</span>
                    </a>
                </li>
                <li>
                    <a onclick="goToSede(-29.7853834,-58.0767604)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Curuzú Cuatiá</span>
                    </a>
                </li>
                <li>
                    <a onclick="goToSede(-29.7039694,-57.1904785)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Paso de los Libres</span>
                    </a>
                </li>
                <li>
                    <a onclick="goToSede(-27.3961395,-55.9945566)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Posadas</span>
                    </a>
                </li>
                <li>
                    <a onclick="goToSede(-26.7908949,-60.471519)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Sáenz Peña</span>
                    </a>
                </li>
                <li>
                    <a onclick="goToSede(-29.1505338,-59.2932944)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Goya</span>
                    </a>
                </li>
                <li>
                    <a onclick="goToSede(-27.4604917,-59.065386)">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/iconos/sedes.svg" alt="Sede" height="30px">
                        <span>Resistencia</span>
                    </a>
                </li>
            </ul>
            <div class="maps-info">
                <span>Lunes de 8 a 11 hs. en Plácido Martínez 886 y viernes de 8 a 11 hs. en CA.R.I.D.I. "JESUS
                    NAZARENO" ubicado en Suipacha y Perugorría.</span>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>