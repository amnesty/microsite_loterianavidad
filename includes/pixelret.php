<?php
//Tienen activa la cookie de aceptar cookies: cookieAlert3 = "1"
if (isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1) {
?>
	<!-- Google Code para etiquetas de remarketing DISPLAY -->

	<!--
	Es posible que las etiquetas de remarketing todavía no estén asociadas a la información de identificación personal o que estén en páginas relacionadas con las categorías delicadas. Para obtener más información e instrucciones sobre cómo configurar la etiqueta, consulte http://google.com/ads/remarketingsetup.
	-->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 966452768;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
	<noscript>
		<div style="display:none;">
			<img height="0" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/966452768/?guid=ON&amp;script=0"/>
		</div>
	</noscript>

	<!-- Google Code para etiquetas de remarketing DISPLAY -->

	<!--
	Es posible que las etiquetas de remarketing todavía no estén asociadas a la información de identificación personal o que estén en páginas relacionadas con las categorías delicadas. Para obtener más información e instrucciones sobre cómo configurar la etiqueta, consulte http://google.com/ads/remarketingsetup.
	-->

	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 973137582;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
	<noscript>
		<div style="display:none;">
			<img height="0" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/973137582/?guid=ON&amp;script=0"/>
		</div>
	</noscript>

<?php
	//VIENE DE TWITTER
	if(isset($_SESSION['pk_campaign']) && $_SESSION['pk_campaign'] == 'anuntwtt' || isset($_SESSION['utm_campaign']) && $_SESSION['utm_campaign'] == 'anuntwtt') {
?>
		<!-- Twitter single-event website tag code -->
		<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
		<script type="text/javascript">twttr.conversion.trackPid('nxiyc', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
		<noscript>
			<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nxiyc&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
			<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nxiyc&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
		</noscript>
		<!-- End Twitter single-event website tag code -->
<?php
	}
	
	//VIENE DE FACEBOOK
    if($_SESSION['pk_campaign'] == 'anunfbk' || $_SESSION['utm_campaign'] == 'anunfbk' || $_SESSION['utm_source'] == 'FBPAGE' || $_SESSION['utm_source'] == 'fbpage') {
?>
		<!-- Facebook Pixel Code para formularios 20/07/2017 -->
	    <script>
	    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	    document,'script','https://connect.facebook.net/en_US/fbevents.js');
	    fbq('init', '1076898019072470');
	    fbq('track', "PageView");
	    fbq('track', "ViewContent");
	    </script>
	    <noscript><img height="1" width="1" style="display:none"
	    src="https://www.facebook.com/tr?id=1076898019072470&ev=PageView&noscript=1"
	    /></noscript>
	    <!-- End Facebook Pixel Code -->
<?php
	}
}
?>