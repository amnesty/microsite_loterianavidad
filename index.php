<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Esta Navidad toca justicia – Amnistía Internacional</title>
    <meta name="description" content="No te pierdas este emotivo anuncio de Navidad. Haz que se cumpla la ilusión de miles de personas.">
	<link rel="canonical" href="<?php echo URL_SITE; ?>" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Esta Navidad toca justicia – Amnistía Internacional" />
    <meta property="og:description" content="No te pierdas este emotivo anuncio de Navidad. Haz que se cumpla la ilusión de miles de personas." />
    <meta property="og:site_name" content="Esta Navidad toca justicia – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Esta Navidad toca justicia – Amnistía Internacional" />
    <meta name="twitter:description" content="No te pierdas este emotivo anuncio de Navidad. Haz que se cumpla la ilusión de miles de personas." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Esta Navidad toca justicia – Amnistía Internacional" />
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

    <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>

    <script type="text/javascript">
<?php
if($isMobile) {
?>
        var isMobile = 1;
<?php
}else {
?>
        var isMobile = 0;
<?php
}
?>
    </script>

    <!-- Init -->
    <script src="js/init.js"></script>

	<!-- Tipografía Maven -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet">

</head>
<body>
    <div class="KW_progressContainer">
        <div class="KW_progressBar">
        </div>
    </div>

    <!-- Modal Video -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button data-e_c="justiciapornavidad" data-e_a="home boton saltar video" data-e_l="home boton saltar video" type="button" class="close send-piwik-event" data-dismiss="modal" aria-hidden="true">
              <span aria-hidden="true">Saltar video</span>
            </button>

            <div class="video-container">
                <div id="video"></div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal Carta petición -->
    <?php include "includes/peticion.php";?>

    <!-- Header -->
    <?php include "includes/header-home.php";?>

	<!-- Módulo Home -->
    <section class="modulo-home clearfix">
        <div class="rrss">
            <ul class="clearfix">
                <li><a data-e_c="justiciapornavidad" data-e_a="home comp FB" data-e_l="home comp FB" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" class="fa fa-facebook-official facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
                <li><a data-e_c="justiciapornavidad" data-e_a="home comp TW" data-e_l="home comp TW" data-shareurl="<?php echo urlencode('https://goo.gl/MxgU6p') ; ?>" data-texto="Me ha encantado este anuncio de Navidad de @amnistiaespana. ¡Emocionante! #EstaNavidadToca" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>
<?php
if($isMobile) {
?>
                <li><a data-e_c="justiciapornavidad" data-e_a="home comp WH" data-e_l="home comp WH" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-enlace="<?php echo URL_SITE; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('Me ha encantado este anuncio de Navidad de Amnistia España. ¡Emocionante! #EstaNavidadToca https://goo.gl/uF4wXP')?>"></a></li>
<?php
}
?>
            </ul>
        </div>

		<div class="container">
            <div class="box-text row center middle">
                <div class="col-12">
                    <h1><img src="images/logo-loteria.png" alt="Esta Navidad toca Justicia"></h1>

                    <div class="box">
                        <p>Firma para hacer realidad la ilusión de miles de personas.</p>
                        <a data-e_c="justiciapornavidad" data-e_a="home boton ver video" data-e_l="home boton ver video" id="myplay" href="#" title="play" data-toggle="modal" data-target="#videoModal" class="send-piwik-event"><img src="images/play-button.png" alt=""><span>Ver vídeo</span></a>
                    </div>

                </div>
            </div>
		</div><!-- /container -->
	</section><!-- /modulo-home -->

    <!-- Módulo Firma -->
    <?php
    include "includes/firma-form.php";
    ?>

    <!-- Módulo Casos -->
    <section class="modulo-casos">
        <div class="container">
            <div class="box-text">
                <h2>Cuatro historias de personas que mantienen viva la ilusión de conseguir justicia.</h2>
                <p>Entre las víctimas de la guerra civil y el franquismo que mantienen viva la ilusión por conseguir justicia, hay miles de casos de desapariciones forzadas, con muchas personas aún enterradas en fosas comunes que fueron ejecutadas extrajudicialmente, de bebés robados a sus familias y de torturas que nunca se han investigado.</p>
            </div>

            <div class="slide-casos owl-carousel owl-theme">
            <div class="item num-0" data-enlace="antonio-narvaez">
                <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Antonio" data-e_l="home boton firma_por_Antonio" href="antonio-narvaez" class="send-piwik-event"><img src="images/caso-antonio.jpg" alt="Antonio Narváez"></a>
                <div class="box-content clearfix">
                    <div class="box-text">
                        <h3><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Antonio" data-e_l="home boton firma_por_Antonio" href="antonio-narvaez" title="Antonio Narváez" class="send-piwik-event">Antonio Narváez,</a></h3>
                        <p><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Antonio" data-e_l="home boton firma_por_Antonio" href="antonio-narvaez" title="sus padres estarían en una fosa común" class="send-piwik-event">sus padres estarían en una fosa común.</a></p>
                    </div>
                    <div class="box-boton">
                        <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Antonio" data-e_l="home boton firma_por_Antonio" class="btn-caso send-piwik-event" href="antonio-narvaez" title="Ver su historia">Ver su historia</a>
                    </div>
                </div>
            </div>

            <div class="item num-1" data-enlace="rosa-garcia">
                <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Rosa" data-e_l="home boton firma_por_Rosa" class="disabled send-piwik-event" href="rosa-garcia"><img src="images/caso-rosa.jpg" alt="Rosa García"></a>
                <div class="box-content clearfix">
                    <div class="box-text">
                        <h3><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Rosa" data-e_l="home boton firma_por_Rosa" class="disabled send-piwik-event" href="rosa-garcia" title="Rosa María">Rosa García,</a></h3>
                        <p><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Rosa" data-e_l="home boton firma_por_Rosa" class="disabled send-piwik-event" href="rosa-garcia" title="denuncia que fue torturada">denuncia que fue torturada.</a></p>
                    </div>
                    <div class="box-boton">
                        <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Rosa" data-e_l="home boton firma_por_Rosa" class="btn-caso disabled send-piwik-event" href="rosa-garcia" title="Ver su historia">Ver su historia</a>
                    </div>
                </div>
            </div>

            <div class="item num-2" data-enlace="jaime-romera">
                <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Jaime" data-e_l="home boton firma_por_Jaime" class="disabled send-piwik-event" href="jaime-romera"><img src="images/caso-jaime.jpg" alt="Jaime"></a>
                <div class="box-content clearfix">
                    <div class="box-text">
                        <h3><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Jaime" data-e_l="home boton firma_por_Jaime" class="disabled send-piwik-event" href="jaime-romera" title="Jaime">Jaime Romera,</a></h3>
                        <p><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Jaime" data-e_l="home boton firma_por_Jaime" class="disabled send-piwik-event" href="jaime-romera" title="sigue buscando a su tío">sigue buscando a su tío.</a></p>
                    </div>
                    <div class="box-boton">
                        <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Jaime" data-e_l="home boton firma_por_Jaime" class="btn-caso disabled send-piwik-event" href="jaime-romera" title="Ver su historia">Ver su historia</a>
                    </div>
                </div>
            </div>

            <div class="item num-3" data-enlace="soledad-luque">
                <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Soledad" data-e_l="home boton firma_por_Soledad" class="disabled send-piwik-event" href="soledad-luque"><img src="images/caso-soledad.jpg" alt="Soledad"></a>
                <div class="box-content clearfix">
                    <div class="box-text">
                        <h3><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Soledad" data-e_l="home boton firma_por_Soledad" class="disabled send-piwik-event" href="soledad-luque" title="Soledad">Soledad Luque,</a></h3>
                        <p><a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Soledad" data-e_l="home boton firma_por_Soledad" class="disabled send-piwik-event" href="soledad-luque" title="su hermano podría ser un "bebé robado"">su hermano podría ser un "bebé robado".</a></p>
                    </div>
                    <div class="box-boton">
                        <a data-e_c="justiciapornavidad" data-e_a="home boton firma_por_Soledad" data-e_l="home boton firma_por_Soledad" class="btn-caso disabled send-piwik-event" href="soledad-luque" title="Ver su historia">Ver su historia</a>
                    </div>
                </div>
            </div>

          </div>

        </div>
    </section>

    <!-- Módulo Gobierno -->
    <section class="modulo-gobierno">
        <div class="container">
            <div class="box-text">
                <h2>¿Qué pedimos a los representantes políticos en el parlamento español?</h2>
                <p>Que la ilusión de las víctimas de la guerra civil y el franquismo se haga realidad no es una cuestión de suerte. Depende de que el gobierno y el resto de grupos parlamentarios en el Congreso y en el Senado den los pasos adecuados.</p>
                <p>Por eso, pedimos que:
                <br/>Frente a las violaciones de derechos humanos cometidas, impulsen medidas para garantizar: <b>que se conozca la verdad</b> de lo ocurrido, que se investiguen los hechos para <b>que se haga justicia</b> y <b>que se repare</b> el sufrimiento de las víctimas y de sus familias como merecen.</p>
                <!--<p>Ya hemos entregado más de 200.000 firmas al Ministro de Justicia: ahora queremos enviar muchas más a los grupos parlamentarios.</p>-->
            </div>
        </div>
    </section>

    <!-- Módulo Dona -->
    <section class="modulo-dona">
        <div class="container">
            <div class="row">
                <div class="bola col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="images/estrella.png" alt="Bola navidad">
                </div>
                <div class="box-content col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="box-content-text">
                        <h2>Adorna esta Navidad de una forma diferente</h2>
                        <p>Decora tu casa y a la vez colabora con el trabajo que hacemos por el derecho a la verdad, justicia y reparación de todas las personas.</p>
                        <p><b>Haz un donativo y recibirás en tu casa esta estrella</b> en el idioma que escojas, para que la cuelgues en el árbol, en tu puerta o para regalarla a quien quieras. Así ayudarás a mantener viva la ilusión de miles de personas durante estas fechas.</p>
                        <a data-e_c="justiciapornavidad" data-e_a="home boton haz donativo" data-e_l="home boton haz donativo" class="btn-principal send-piwik-event" target="_blank" href="https://crm.es.amnesty.org/haz-un-donativo-loteria/?origen=justiciapornavidad" title="Consigue el adorno">Consigue el adorno</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Módulo colabora -->
    <section class="modulo-colabora">
        <div class="container">
            <h2>Colabora con la campaña.</h2>
            <div class="box-sms">
                <p>Envía un SMS<sup>*</sup> con la palabra</p>
                <h4>JUSTICIA al 28014</h4>
                <p>para donar 1,20€.</p>
            </div>
        </div>
    </section>

    <!-- Módulo socio -->
    <section class="modulo-socio">
        <div class="container">
            <h2>Hazte socio/a.<br/>Puedes mantener viva la ilusión por conseguir justicia de quienes más sufren</h2>
            <div class="box-text">
                <p>Hacer realidad la ilusión de conseguir justicia depende de personas como Antonio, Rosa María y Jaime. Y también de personas como tú. Ser socio/a es hacer más fuerte la defensa de las víctimas de graves violaciones de derechos humanos.</p>
                <p>Sin ti, no hay Amnistía Internacional: <b>necesitamos tu apoyo.</b></p>
                <a data-e_c="justiciapornavidad" data-e_a="home boton socio" data-e_l="home boton socio" class="btn-principal send-piwik-event" target="_blank" href="https://crm.es.amnesty.org/unete-a-amnistia-loteria/?origen=justiciapornavidad" title="Hazte socio/a">Hazte socio/a</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "includes/footer.php";?>

    <!-- Boton Firma -->
    <a data-e_c="justiciapornavidad" data-e_a="home boton footer firma" data-e_l="home boton footer firma" href="#firma" title="Firma" class="boton-fijo btns btn-firma send-piwik-event">Firma</a>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>

</body>

</html>
