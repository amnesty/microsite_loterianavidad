<?php
/*
[VERSIÓN 2017]

Se añadió la segmentación por casos $segmentacion_origen = $casos[$caso][1];
*/

include_once ("includes/config.php"); 

$caso = $_GET['caso'];

if($caso) {
    $segmentacion_origen = "?origen=justiciapornavidad&caso=".$casos[$caso][2];
}else {
    $segmentacion_origen = "?origen=justiciapornavidad";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <title>Seguimos pidiendo Justicia – Amnistía Internacional</title>
    <meta name="description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma para pedir al gobierno que este año no se olvide de ellas.">
    <link rel="canonical" href="<?php echo URL_SITE; ?>" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw-2.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <meta property="og:description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma para pedir al gobierno que este año no se olvide de ellas." />
    <meta property="og:site_name" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-2.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <meta name="twitter:description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma para pedir al gobierno que este año no se olvide de ellas." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw-2.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <!--Open Graph-->

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/owlcarousel/assets/owl.theme.default.min.css">

    <!-- CSS Bootstrap v4.0.0 -->
    <link href="css/bootstrap-flex.css" rel="stylesheet">
    <!-- CSS Reticula -->
    <link href="css/reticula.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Style.css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- hover.min.css -->
    <link href="css/hover.min.css" rel="stylesheet">
    <!-- animate.css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- cli-style.css -->
    <link href="css/cli-style.css" rel="stylesheet">


    <!-- jQuery 1.12.4 -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- tether.min Obligatorio para BS tooltip -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap v4.0.0 -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- cookielawinfo.js -->
    <script type="text/javascript" src="js/cookielawinfo.js"></script>
    <!-- owl.carousel.min.js -->
    <script type="text/javascript" src="js/owlcarousel/owl.carousel.min.js"></script>

    <!-- Init -->
    <script src="js/init.js"></script>

    <!-- Tipografía Maven -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet">

</head>
<body>

<?php
    // Pixels de retargetting de FB, Google, Twitter,...
    include_once("includes/pixelretgracias.php");
?>

    <!-- Header -->
    <header class="interior">
        <div class="capa"></div>
        <div class="logo"><a href="<?php echo URL_SITE; ?>" title="Amnistía Internacional"><img src="images/logo-amnistia-blanco.png" alt="Amnistía Internacional"></a></div>
        <div class="botones">
            <ul class="clearfix">
                <li><a href="<?php echo URL_SITE; ?>" title="Volver a la campaña" class="btn-header animated-button btn-animate-white btn-gracias">Ir a la campaña</a></li>
            </ul>
        </div>
    </header>
        

    <!-- Módulo Firma -->
    <div class="gracias-firma">

        <div class="container">
            <div class="gracias">
<?php
if($_GET['error_form'] == 1){
?>
                <div class="box-text error">
                    <h4>¡Error!</h4>
                    <p class="subtitle">Lo sentimos, se ha producido un error al guardar tus datos. Por favor, inténtalo más tarde.</p>
                    <p><a href="<?php echo URL_SITE; ?>" title="Volver a la campaña" class="btn-volver">Volver</a></p>
                </div>

<?php
} else {
?>
                <div class="box-text">
                    <h4>¡Muchas gracias!</h4>
                    <p class="subtitle">Por firmar la petición para hacer realidad la ilusión de miles de personas: <b>conseguir justicia.</b></p>
                </div>

                <div class="row ">
                    <div class="gracias-adorno col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- Módulo Dona -->
                        <section class="modulo-dona">
                            <div class="container">
                                <div class="row">
                                    <div class="bola col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <img src="images/estrella.png" alt="Bola navidad">
                                    </div>
                                    <div class="row middle box-content col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="box-content-text">
                                            <div class="col-12">
                                                <p><b>Sigue colaborando con la campaña</b> y, al mismo tiempo, adorna tu Navidad con buenos deseos. Haz un donativo y te enviaremos este adorno para que lo coloques en casa o lo uses como postal para felicitar las fiestas.</p>
                                            
                                                <a class="btn-principal" target="_blank" href="https://crm.es.amnesty.org/haz-un-donativo-loteria/<?=$segmentacion_origen?>" title="Consigue el adorno">Consigue el adorno</a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gracias-hazte-socio">
                        <!-- Módulo socio -->
                        <section class="modulo-socio">
                            <div class="container">
                                <div class="box-text">
                                    <p><b>ÚNETE a Amnistía Internacional para apoyar la defensa de los derechos humanos todos los días.</b></p>
                                    <p>Somos independientes porque no aceptamos subvenciones de gobiernos ni donaciones de partidos políticos. La independencia nos hace libres para defender los derechos humanos en cualquier lugar.</p>
                                    <a class="btn-principal" href="https://crm.es.amnesty.org/unete-a-amnistia-loteria/<?=$segmentacion_origen?>" target="_blank" title="Únete">Únete</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div><!--.row-->

                <!--</div>-->
 <?php } ?>
            </div><!-- /Gracias -->
        </div>
    </div>
    <!-- Módulo Gracias -->


    <!-- Piwik -->
    <script type="text/javascript">
        var nuevoFirmante = <?php echo $_GET['s']; ?>;
        //console.log('nuevoFirmante: '+nuevoFirmante);
        var _paq = _paq || [];
        _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
        _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
        _paq.push(["setDomains", ["*.es.amnesty.org",]]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        _paq.push(['trackGoal', 45]);
        _paq.push(["trackGoal", 6]);
        _paq.push(["trackGoal", 33]);
        if (nuevoFirmante == 2) {
            _paq.push(["trackGoal", 8]);
        }
        (function() {
            var u="//estadisticas.es.amnesty.org/piwik/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

</body>
</html>