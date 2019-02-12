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
    <title>Seguimos pidiendo justicia - Amnistía Internacional</title>
    <meta name="description" content="Yo ya he firmado para pedir justicia y para que se cumpla la ilusión de miles de personas. ¡Firma ahora!">
    <link rel="canonical" href="<?php echo URL_SITE; ?>" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/COMPARTIR-TWT-WEB-fase2.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Seguimos pidiendo justicia - Amnistía Internacional" />
    <meta property="og:description" content="Yo ya he firmado para pedir justicia y para que se cumpla la ilusión de miles de personas. ¡Firma ahora!" />
    <meta property="og:site_name" content="Seguimos pidiendo justicia" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/COMPARTIR-FB-WEB-fase2.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Seguimos pidiendo justicia - Amnistía Internacional" />
    <meta name="twitter:description" content="Yo ya he firmado para pedir justicia y para que se cumpla la ilusión de miles de personas. ¡Firma ahora!" />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/COMPARTIR-TWT-WEB-fase2.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Seguimos pidiendo justicia - Amnistía Internacional" />
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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JHK4F4');</script>
<!-- End Google Tag Manager -->


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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129198217-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-129198217-1', { 'optimize_id': 'GTM-WM7GM4Z'});
</script>


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JHK4F4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php
    // Pixels de retargetting de FB, Google, Twitter,...
    include_once("includes/pixelretgracias.php");
?>

    <!-- Header -->
    <header class="interior">
        <div class="capa"></div>
        <div class="logo"><a data-e_c="justiciapornavidad" data-e_a="gracias logo header volver_campaña" data-e_l="gracias logo header volver_campaña" href="<?php echo URL_SITE; ?>" title="Amnistía Internacional" class="send-piwik-event"><img src="images/logo-amnistia-blanco.png" alt="Amnistía Internacional"></a></div>
        <div class="botones">
            <ul class="clearfix">
                <li><a data-e_c="justiciapornavidad" data-e_a="gracias boton header volver_campaña" data-e_l="gracias boton header volver_campaña" href="<?php echo URL_SITE; ?>" title="Volver a la campaña" class="btn-header animated-button btn-animate-white btn-gracias send-piwik-event">Ir a la campaña</a></li>
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
                                        <?php /* <img src="images/estrella.png" alt="Bola navidad"> */?>
                                    </div>
                                    <div class="row middle box-content col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="box-content-text">
                                            <div class="col-12">
                                                <p><b>Sigue colaborando con la campaña:</b> haz un donativo y ayúdanos a seguir trabajando por el derecho a la verdad, la justicia y al reparación de todas las personas: este año puede pasar.</p>

                                                <a data-e_c="justiciapornavidad" data-e_a="gracias boton haz donativo" data-e_l="gracias boton haz donativo" class="btn-principal send-piwik-event" target="_blank" href="https://crm.es.amnesty.org/haz-un-donativo/loteria/<?=$segmentacion_origen?>" title="Dona">Dona</a>
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
                                    <a data-e_c="justiciapornavidad" data-e_a="gracias boton socio" data-e_l="gracias boton socio" class="btn-principal send-piwik-event" href="https://crm.es.amnesty.org/unete-a-amnistia/loteria/<?=$segmentacion_origen?>" target="_blank" title="Únete">Únete</a>
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

    <footer class="clearfix">
      <div class="container">
        <p class="title">Amnistía Internacional <?php echo date("Y"); ?></p>
        <p>*Coste 1,2 euros (donación integra para la ONG). Servicio de SMS para recaudación de fondos en campaña de tipo solidario operado por Altiria TIC, <a href="http://www.altiria.com" target="_blank">www.altiria.com</a>, y la Asociación Española de Fundraising, <a href="http://www.aefundraising.org" target="_blank">www.aefundraising.org</a>, nº. atn. clte. 902 00 28 98, apdo. correos 36059 –28080 Madrid.<br/> Colaboran Movistar, Vodafone, Orange, Yoigo, Euskaltel y Telecable.<br/> Más información sobre el uso de los datos en <a href="https://www.es.amnesty.org/politica-de-privacidad" target="_blank">https://www.es.amnesty.org/politica-de-privacidad</a></p>
      </div>
    </footer>

    <!-- Piwik -->
    <script type="text/javascript">
        var nuevoFirmante = <?php echo $_GET['s']; ?>;
        var casoPiwik = <?php echo $_GET['caso']; ?>;
        //console.log('nuevoFirmante: '+nuevoFirmante);
        var _paq = _paq || [];
        _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
        _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
        _paq.push(["setDomains", ["*.es.amnesty.org",]]);
        // definimos custom events para cada caso
        if (casoPiwik == 1) {
            _paq.push(['setCustomDimension', 4, 'Antonio']);
        } else if (casoPiwik == 2) {
            _paq.push(['setCustomDimension', 4, 'Rosa']);
        } else if (casoPiwik == 3) {
            _paq.push(['setCustomDimension', 4, 'Jaime']);
        } else if (casoPiwik == 4) {
            _paq.push(['setCustomDimension', 4, 'Soledad']);
        } else {
            _paq.push(['setCustomDimension', 4, 'general']);
        }
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        // marcamos los goals, tanto geneŕicos como especiales de la micro
        _paq.push(["trackGoal", 6]);
        _paq.push(["trackGoal", 33]);
        _paq.push(['trackGoal', 45]);
        if (nuevoFirmante == 1) {
            _paq.push(["trackGoal", 57]);
        } else if (nuevoFirmante == 2) {
            _paq.push(["trackGoal", 8]);
            _paq.push(["trackGoal", 59]);
        } else {
            _paq.push(["trackGoal", 58]);
        }
        // Lanzamos eventos para cada caso
        if (casoPiwik == 1) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Antonio']);
        } else if (casoPiwik == 2) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Rosa']);
        } else if (casoPiwik == 3) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Jaime']);
        } else if (casoPiwik == 4) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Soledad']);
        } else {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias general']);
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
