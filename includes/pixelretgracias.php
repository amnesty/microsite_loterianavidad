<?php
//Tienen activa la cookie de aceptar cookies: cookieAlert3 = "1"
if (isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1) {

    //VIENE DE GOOGLE Grants
    if($_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl') {
?>
		<!-- Google Code for pixel_firmas_grant Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 973137582;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "lfA3CIPcvnAQrs2D0AM";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/973137582/?label=lfA3CIPcvnAQrs2D0AM&amp;guid=ON&amp;script=0"/>
			</div>
		</noscript>
<?php
    }

    //VIENE DE GOOGLE Display
    if($_SESSION['pk_campaign'] == 'anunggl_visual' || $_SESSION['utm_campaign'] == 'anunggl_visual') {
?>
		<!-- Google Code for Pixel_firmas Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 966452768;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "gEVDCNmMmWwQoMzrzAM";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/966452768/?label=gEVDCNmMmWwQoMzrzAM&amp;guid=ON&amp;script=0"/>
			</div>
		</noscript>
<?php
    }

    //VIENE DE FACEBOOK
    if($_SESSION['pk_campaign'] == 'anunfbk' || $_SESSION['utm_campaign'] == 'anunfbk' || $_SESSION['utm_source'] == 'FBPAGE' || $_SESSION['utm_source'] == 'fbpage') {
?>
    <!--  Facebook Pixel Code  -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1076898019072470');
    fbq('track', "PageView");
    fbq('track', 'Lead');
    </script>
    <noscript>
    	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1076898019072470&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
<?php
    }

	//VIENE DE TWITER
    if($_SESSION['pk_campaign'] == 'anuntwtt' || $_SESSION['utm_campaign'] == 'anuntwtt' || $_SESSION['utm_source'] == 'anuntwtt' ) {
?>
    <!-- Twitter single-event website tag code -->
    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
    <script type="text/javascript">twttr.conversion.trackPid('nxpyj', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
    <noscript>
	    <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nxpyj&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
	    <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nxpyj&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
    </noscript>
    <!-- End Twitter single-event website tag code -->
<?php
    }
}
?>