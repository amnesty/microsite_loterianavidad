<footer class="clearfix">
  <div class="container">
    <p class="title">Amnistía Internacional <?php echo date("Y"); ?></p>
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

  document.addEventListener('trackPage', function(){

    _paq.push(['trackPageView']);

    stats_allowed = document.cookie.search(/omCookieConsent=[^;]+group-1.1/) > -1? 1: 0;
    /*cookie consent*/
    if(stats_allowed === 1){
        _paq.push(['setCookieConsentGiven']);
    } else {
        _paq.push(['forgetCookieConsentGiven']);
    }

    _paq.push(['trackVisibleContentImpressions']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//estadisticas.es.amnesty.org/piwik/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  });
</script>
<noscript><p><img src="//estadisticas.es.amnesty.org/piwik/matomo.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
