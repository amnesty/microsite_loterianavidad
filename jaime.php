<?php 
include_once ("includes/config.php");

//Asignar el caso
$caso = 3;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Esta Navidad toca Justicia – Amnistía Internacional</title>
    <meta name="description" content="Personas como Antonio tienen familiares “desaparecidos” en fosas comunes. Todo lo que desean es que vuelva la Justicia. Firma y ayúdales a conseguirlo.">
    <link rel="canonical" href="<?php echo URL_SITE; ?>jaime" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-twt-antonio.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>jaime" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Esta Navidad toca Justicia – Amnistía Internacional" />
    <meta property="og:description" content="Personas como Antonio tienen familiares “desaparecidos” en fosas comunes. Todo lo que desean es que vuelva la Justicia. Firma y ayúdales a conseguirlo." />
    <meta property="og:site_name" content="Esta Navidad toca Justicia – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-caso-antonio.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>jaime" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Esta Navidad toca Justicia – Amnistía Internacional" />
    <meta name="twitter:description" content="Personas como Antonio tienen familiares “desaparecidos” en fosas comunes. Todo lo que desean es que vuelva la Justicia. Firma y ayúdales a conseguirlo." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-twt-antonio.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Esta Navidad toca Justicia – Amnistía Internacional" />
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

    <!-- Modal Carta petición -->
    <?php include "includes/peticion.php";?>

    <?php include "includes/header-interior.php";?>

	<section class="modulo-interior clearfix">
		<div class="container">
            <h1>Jaime Romera, su tío fue desaparecido y estaría en una fosa común</h1>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="box-text">
						<p class="subtitle">“Mi tío (Arsenio) todavía está enterrado en la cuneta de la carretera de Barcones, pero no sabemos dónde... le mataron por sus ideas. Mi ilusión es que un día podamos encontrar sus restos… y darle una sepultura en condiciones. ”</p>
                        <p>A Arsenio, el tío de Jaime, le detuvieron un 21 de julio de 1936 y su familia no volvió a saber nada de él. Era sindicalista y, varias semanas después de su detención, les contaron que le habían matado y enterrado en una fosa común.</p>
                        <p>Desde entonces, la familia no ha parado de buscarle. El caso de Arsenio ya se ha presentado ante la Justicia y se ha archivado en dos ocasiones. El Estado español nunca ha querido investigarlo de forma exhaustiva.</p>
                        <p>La  ilusión de Jaime es encontrar los restos de su tío para darles una sepultura digna y que se sepa lo que pasó con el fin de que no vuelva a pasar nunca más.</p>
                        <p>El caso de Jaime no es único. Se estima que miles de personas fueron víctimas de desaparición forzada durante la guerra civil y el franquismo, que aún están en fosas comunes de todo el territorio español. Personas que todavía hoy mantienen viva la ilusión de conseguir justicia.</p>
                    </div><!-- /box-text -->
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <div class="youtubevideowrap">
                        <div class="video-container">
                            <iframe width="580" height="320" src="https://www.youtube.com/embed/JtgxMb8r9dM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="rrss">
                        <ul class="clearfix">
                            <li><a data-e_c="justiciapornavidad" data-e_a="<?=$casos[$caso][2]?> comp FB" data-e_l="<?=$casos[$caso][2]?> comp FB" data-shareurl="<?php echo URL_SITE . 'jaime' . TRACK_FB_UTM ; ?>" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>                            
                            <li><a data-e_c="justiciapornavidad" data-e_a="<?=$casos[$caso][2]?> comp TW" data-e_l="<?=$casos[$caso][2]?> comp TW" data-shareurl="<?php echo urlencode('https://goo.gl/2ZtG4n'); ?>" data-texto="Firma y ayuda a Jaime a hacer realidad un deseo que lleva muchos años sin cumplirse justicia" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>
<?php
if($isMobile) {
?>
                            <li><a data-e_c="justiciapornavidad" data-e_a="<?=$casos[$caso][2]?> comp WH" data-e_l="<?=$casos[$caso][2]?> comp WH" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE; ?>jaime" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('Esta Navidad toca Justicia – Amnistía Internacional https://goo.gl/1FCsOG')?>"></a></li>
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