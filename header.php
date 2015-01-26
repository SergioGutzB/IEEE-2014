<!-- flush comienzo -->
<?php flush(); ?>
<!-- flush fin -->
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
 
<head>
    <meta charset= <?php bloginfo( 'charset' ); ?> >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <META name="Author" content="Sergio Alexander Gutiérrez Bustos">
    <META name="Copyright" content="sergut18©gmail.com">
    <META NAME="keywords" CONTENT="Rama, IEEE, IEEE_UD, UD, Universidad Distrital, Universidad Distrital Francisco José de Caldas, Rama IEEE-UD">
    <META NAME="description" CONTENT="Portal web de la Rama IEEE de la Universidad Distrital Francisco José de Caldas">
    <META NAME="robots" CONTENT="all | index | follow">
    <title><?php wp_title(); ?></title>

    <!-- Definir viewport para dispositivos web móviles -->
    <meta name="viewport" content="width=device-width, minimum-scale=1">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/demo.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/component.css" type="text/css" />

    
    <!--[if lt IE 9]>
        <script src="dist/html5shiv.js"></script>
        <link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
    <![endif]-->

    <!--[if lt IE 9.0000]> 
        <SCRIPT LANGUAGE="Javascript">
        alert("Estás usando una versión de Internet Explorer anterior a la 9, para visualizar correctamente el sitio web de la Rama IEEE-UD actualiza tu navegador. ");

        </SCRIPT>
    <![endif]-->

    <!--<script src="<?php bloginfo('template_directory'); ?>/js/stalactite.js"></script>-->

<!--
    <link rel="shortcut icon" href="wp-content/themes/IEEE/favicon.ico">
    <link rel="stylesheet" href="wp-content/themes/IEEE/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/IEEE/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/IEEE/css/demo.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/IEEE/css/component.css" type="text/css" />

    <script src="wp-content/themes/IEEE/js/jquery.js"></script>
    <script src="wp-content/themes/IEEE/js/jquery.form.min.js"></script>    
    <script src="wp-content/themes/IEEE/js/modernizr.custom.js"></script>
    <script src="wp-content/themes/IEEE/bootstrap/js/bootstrap.js"></script>
    <script src="wp-content/themes/IEEE/js/masonry.js"></script>
-->

<script>
var nua = navigator.userAgent;
var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1);
if (isAndroid) {
  $('select.form-control').removeClass('form-control').css('width', '100%');
}
</script>
 
</head>
<body>

    <header>
        <div class="contenedor">
             <ul id="gn-menu" class="gn-menu-main">                
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li class="gn-search-item">

                                    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                                      <input type="search" placeholder="Search" class="gn-search" value="<?php the_search_query(); ?>" name="s" id="s" />
                                      <!-- <button type="submit" class="icon-only"  id="searchsubmit"></button> -->
                                    </form>                                   
                                    <a class="gn-icon gn-icon-search"></a>
                                </li>
                                <li>
                                    
                                </li>
                                
                                <li>
                                    <a><span class="gicon icon-ieee"></span>IEEE</a>
                                    <ul class="gn-submenu">
                                        <li><a href="<?php echo home_url('/'); ?>que-es-ieee">¿Qué es IEEE?</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>se-miembro/">Sé Miembro</a></li>
                                       <!--  <li><a href="<?php echo home_url('/'); ?>electrolatina/">Proyecto Electrolatina</a></li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a><span class="gicon icon-rama"></span>Nuestra Rama</a>
                                    <ul class="gn-submenu">
                                        <li><a href="<?php echo home_url('/'); ?>quienes-somos/">¿Quiénes Somos?</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>comite-2014/">Nuestro Comité</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>voluntarios/">Sé Voluntario</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>premios/">Premios y Reconocimientos</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>resena/">Reseña Histórica</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>galeria_ud/">Galería</a></li>
                                    </ul>
                                </li>

                                 <!-- <li>
                                    <a ><span class="gicon icon-tv-capitulos"></span>Capítulos</a>
                                    <ul class="gn-submenu">
                                        <li><a href="<?php echo home_url('/'); ?>capitulos/semillero-de-investigacion/">Semillero de Investigación <strong>IEEE-UD</strong></a></li>
					                    <li><a href="<?php echo home_url('/'); ?>power-energy-society-pes/">POWER & ENERGY SOCIETY <strong>(PES)</strong></a></li>
                                        <li><a href="<?php echo home_url('/'); ?>sistemas-aeroespaciales-electronicos/">Sistemas Aeroespaciales y Electrónicos <strong>(AESS)</strong></a></li>
                                        <li><a href="<?php echo home_url('/'); ?>capitulos/computer-y-comsoc/">Computación y Comunicaciones</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>capitulos/aplicaciones-industruales/">Aplicaciones Industriales <strong>(IAS)</strong></a></li>
                                        <li><a href="<?php echo home_url('/'); ?>capitulos/emb/">Bioingeniería <strong>(EMB's)</strong></a></li>
                                        <li><a href="<?php echo home_url('/'); ?>capitulos/geociencia/">Geoiencia</a></li>
                                        <li><a href="<?php echo home_url('/'); ?>capitulos/control/">Sistemas de Control <strong>(CSS)</strong></a></li>
                                        <li><a href="<?php echo home_url('/'); ?>robotica-y-automatizacion/">Robótica y Automatización <strong>(RAS)</strong></a></li>
                                        <li><a href="<?php echo home_url('/'); ?>capitulos/wie/">Afinidad de Mujeres en la Ingeniéria <strong>(WIE)</strong></a></li>
                                        
                                    </ul>
                                </li> -->

                                 <li>
                                    <a href=""><span class="gicon icon-servicio"></span>Servicios</a>
                                    <ul class="gn-submenu">
                                        <li><a href="<?php echo home_url('/'); ?>sala-kirrmann-abbb/">Sala KIRRMANN ABB</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li><a href="<?php echo home_url('/'); ?>"><span class="glyphicon glyphicon-home"></span></a></li>                
                <li><a href="<?php echo home_url('/'); ?>contactanos/"><span class="glyphicon glyphicon-comment"></span></a></li>  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Capítulos<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu role-menu">
                        <li><a href="<?php echo home_url('/'); ?>capitulos/semillero-de-investigacion/">Semillero de Investigación <strong>IEEE-UD</strong></a></li>
                        <li><a href="<?php echo home_url('/'); ?>power-energy-society-pes/">POWER & ENERGY SOCIETY <strong>(PES)</strong></a></li>
                        <li><a href="<?php echo home_url('/'); ?>sistemas-aeroespaciales-electronicos/">Sistemas Aeroespaciales y Electrónicos <strong>(AESS)</strong></a></li>
                        <li><a href="<?php echo home_url('/'); ?>capitulos/computer-society/">Computación y Comunicaciones</a></li>
                        <li><a href="<?php echo home_url('/'); ?>capitulos/aplicaciones-industruales/">Aplicaciones Industriales <strong>(IAS)</strong></a></li>
                        <li><a href="<?php echo home_url('/'); ?>?p=15">Bioingeniería <strong>(EMB's)</strong></a></li>
                        <li><a href="<?php echo home_url('/'); ?>geociencia1/">Geociencia</a></li>
                        <li><a href="<?php echo home_url('/'); ?>capitulos/control-css/">Sistemas de Control <strong>(CSS)</strong></a></li>
                        <li><a href="<?php echo home_url('/'); ?>robotica-y-automatizacion/">Robótica y Automatización <strong>(RAS)</strong></a></li>
                        <li><a href="<?php echo home_url('/'); ?>capitulos/wie/">Afinidad de Mujeres en la Ingeniéria <strong>(WIE)</strong></a></li>
                    </ul>
                </li>
                <li><a href="<?php echo home_url('/'); ?>videos/">Videos</a></li> 
                
                <li ><a href="http://www.ieee.org"><span class="gicon2 icon-ieee2"></span></a></li>

            </ul>

            <script src="wp-content/themes/IEEE/js/classie.js"></script>
            <script src="wp-content/themes/IEEE/js/gnmenu.js"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>     

        </div>
     

    <!-- <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
    <hr>
    <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?> -->


    </header>

    