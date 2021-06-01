<footer class="clearfix">
  <div class="container">
    <p class="title">Amnistía Internacional <?php echo date("Y"); ?></p>
    <p>*Coste 1,2 euros (donación integra para la ONG). Servicio de SMS para recaudación de fondos en campaña de tipo solidario operado por Altiria TIC, <a href="http://www.altiria.com" target="_blank">www.altiria.com</a>, y la Asociación Española de Fundraising, <a href="http://www.aefundraising.org" target="_blank">www.aefundraising.org</a>, nº. atn. clte.  913 311 198, Av. General Perón, 6 – 28020 Madrid.<br/> Colaboran Movistar, Vodafone, Orange, Yoigo, Euskaltel y Telecable.<br/> Más información sobre el uso de los datos en <a href="https://www.es.amnesty.org/politica-de-privacidad" target="_blank">https://www.es.amnesty.org/politica-de-privacidad</a></p>
  </div>
</footer>

<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
  _paq.push(["setDomains", ["*.es.amnesty.org",]]);

  /*cookie consent*/
  _paq.push(['requireCookieConsent']);

  stats_allowed = document.cookie.search(/omCookieConsent=[^;]+group-1.1/) > -1? 1: 0;
   /*cookie consent*/
    if(stats_allowed === 1){
        _paq.push(['setCookieConsentGiven']);
    } else {
        _paq.push(['forgetCookieConsentGiven']);
    }

  document.addEventListener('trackPage', function(){

    stats_allowed = document.cookie.search(/omCookieConsent=[^;]+group-1.1/) > -1? 1: 0;
    /*cookie consent*/
    if(stats_allowed === 1){
        _paq.push(['setCookieConsentGiven']);
    } else {
        _paq.push(['forgetCookieConsentGiven']);
    }
  });
  document.addEventListener('trackPageWithCookieConsent', function(){

    stats_allowed = document.cookie.search(/omCookieConsent=[^;]+group-1.1/) > -1? 1: 0;
    /*cookie consent*/
    if(stats_allowed === 1){
        _paq.push(['setCookieConsentGiven']);
    } else {
        _paq.push(['forgetCookieConsentGiven']);
    }
  });

    _paq.push(['trackPageView']);
    _paq.push(['trackVisibleContentImpressions']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//estadisticas.es.amnesty.org/piwik/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();

</script>
<noscript><p><img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
