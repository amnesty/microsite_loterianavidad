<?php
include_once ("includes/config.php");

//Asignar el caso
$caso = 2;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Esta Navidad toca justicia – Amnistía Internacional</title>
    <meta name="description" content="Este vídeo de Rosa me ha emocionado. Yo ya he firmado para que cumpla su ilusión de conseguir justicia por ser torturada #EstaNavidadToca.">
    <link rel="canonical" href="<?php echo URL_SITE; ?>rosa-garcia" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw-caso-rosa.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>rosa-garcia" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Esta Navidad toca justicia" />
    <meta property="og:description" content="Este vídeo de Rosa me ha emocionado. Yo ya he firmado para que cumpla su ilusión de conseguir justicia por ser torturada #EstaNavidadToca." />
    <meta property="og:site_name" content="Esta Navidad toca justicia" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-caso-rosa.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>rosa-garcia" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Esta Navidad toca justicia" />
    <meta name="twitter:description" content="Este vídeo de Rosa me ha emocionado. Yo ya he firmado para que cumpla su ilusión de conseguir justicia por ser torturada #EstaNavidadToca." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw-caso-rosa.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Esta Navidad toca justicia" />
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
<body class="template-caso">

    <!-- Modal Carta petición -->
    <?php include "includes/peticion.php";?>

    <?php include "includes/header-interior.php";?>

	<section class="modulo-interior clearfix">
		<div class="container">
            <h1>Rosa García, denuncia que fue torturada por pertenecer a una asociación de estudiantes.</h1>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="box-text">
						<p class="subtitle">“Me detuvieron en la calle a las 11 de la noche… Me llevaron a la Dirección General de Seguridad. Allí me recibió Billy El Niño a bofetadas, puñetazos, golpes… Violar, matar. Era una amenaza bastante común a las mujeres.”</p>
                        <p>Rosa tiene previsto interponer una denuncia por tortura contra el antiguo miembro de la policía franquista Antonio González Pacheco, alias Billy el Niño. Y no será la primera en hacerlo. En 2013, la juez argentina María Servini dictó una orden de extradición para interrogar a Billy el Niño por su posible relación con otros casos de torturas. Pero el gobierno español está bloqueando la investigación.</p>
                        <p>La ilusión de Rosa es que se haga justicia.</p>
                        <p>Su caso no es único. Muchas personas fueron detenidas injustamente y torturadas durante el franquismo por motivos políticos, entre otras razones. Todavía hoy mantienen viva la ilusión de conseguir justicia.</p>
                    </div><!-- /box-text -->
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <div class="youtubevideowrap">
                        <div class="video-container">
														<iframe width="580" height="320" src="https://www.youtube.com/embed/2NMm9tbhcyk" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="rrss">
                        <ul class="clearfix">
                            <li><a data-e_c="justiciapornavidad" data-e_a="<?=$casos[$caso][2]?> comp FB" data-e_l="<?=$casos[$caso][2]?> comp FB" data-shareurl="<?php echo URL_SITE . 'rosa-garcia' . TRACK_FB_UTM ; ?>" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
                            <li><a data-e_c="justiciapornavidad" data-e_a="<?=$casos[$caso][2]?> comp TW" data-e_l="<?=$casos[$caso][2]?> comp TW" data-shareurl="<?php echo urlencode('https://goo.gl/X47sf3'); ?>" data-texto="Ya he firmado para que Rosa cumpla su ilusión de conseguir justicia por ser torturada #EstaNavidadToca" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>
<?php
if($isMobile) {
?>
                            <li><a data-e_c="justiciapornavidad" data-e_a="<?=$casos[$caso][2]?> comp WH" data-e_l="<?=$casos[$caso][2]?> comp WH" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE; ?>rosa-garcia" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('Ya he firmado para que Rosa cumpla su ilusión de conseguir justicia por ser torturada #EstaNavidadToca https://goo.gl/FGacKb')?>"></a></li>
<?php
}
?>
                        </ul>
                    </div>

				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /modulo-interior -->

    <!-- Módulo Firma -->
    <?php
    include "includes/firma-form.php";
    ?>

    <!-- Footer -->
    <?php include "includes/footer.php";?>

    <!-- Boton Firma -->
    <a href="#firma" title="Firma" class="boton-fijo btns btn-firma">Firma</a>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>

</body>
</html>
