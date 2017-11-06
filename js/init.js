var player = {};
var videoOnReady = 'showVideo';

// Load the YouTube API. For some reason it's required to load it like this
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


$(document).ready(function() {

	// HEADER
    if($(window).scrollTop() == 0) {
		$('header').removeClass('gold');
	}else {
		$('header').addClass('gold');
	}

	$('.slide-casos').owlCarousel({
		center: true,
		items:2,
		loop:true,
		margin:0,
		mouseDrag: true,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		onChanged: callbackOwl,
		responsive:{
			0:{
				items:1
			},
			767:{
				items:2
			}
		}		
	});


	//SOCIAL SHARE
	$('.twitter-share').click(function(e){
		e.preventDefault();
		var shareurl = $(this).data('shareurl');
		var texto = $(this).data('texto');
		var long_tweet = 113;
		var texto2 = (texto.length > long_tweet) ? texto.slice(0, long_tweet) : texto;
		texto2 += (texto.length > long_tweet) ? '...' : '';
		texto2 = window.encodeURIComponent(texto2);
		window.open('https://twitter.com/intent/tweet?text=' + texto2 + '&url=' + shareurl, 'ventana-twitter', "toolbar=0, status=0, width=650, height=450");
	});

	$('.facebook-share').click(function(e){
		e.preventDefault();
		var shareurl = $(this).data('shareurl');		
		window.open('https://www.facebook.com/sharer/sharer.php?u=' + shareurl +'' , 'ventana-facebook', "toolbar=0, status=0, width=650, height=450");
	});


	// on page load...
    moveProgressBar();
    // on browser resize...
    $(window).resize(function() {
        moveProgressBar();
    });

    //BARRA DE FIRMAS
    function moveProgressBar() {
        var getPercent = ($('.progress-wrap-firmas').data('progress-percent') / 100);
        var getProgressWrapWidth = $('.progress-wrap-firmas').width();
        var progressTotal = getPercent * getProgressWrapWidth;
        var animationLength = 2500;

        // on page load, animate percentage bar to data percentage length
        // .stop() used to prevent animation queueing
        $('.progress-bar-firmas').stop().animate({left: progressTotal}, animationLength);
    }

	$('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

	$(window).resize(function() {
		$('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

		if($(window).width() > 800) {
			$('.boton-fijo.btn-firma').css('display', 'none');
		}else {
			$('.boton-fijo.btn-firma').css('display', 'block');
		}
	});

	//AVISO COOKIES
	cli_show_cookiebar({
		settings: '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#fff","border":"#cea153","border_on":true,"button_1_button_colour":"#cea153","button_1_button_hover":"#cea153","button_1_link_colour":"#fff","button_1_as_button":true,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#cea153","button_2_as_button":false,"header_fix":false,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"top","scroll_close":false,"scroll_close_reload":false,"showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#838383","show_once_yn":false,"show_once":"10000"}'
	});

	$('#videoModal').on('show.bs.modal', function (e) {
		if(!isMobile) {
			playVideo();
		}
	});
	$('#videoModal').on('hidden.bs.modal', function (e) {
		stopVideo();
	})

	//CLICK BOTON FIRMA
	var capaHeaderHeight = $("header").innerHeight();
	$('.boton-fijo.btn-firma, .btn-header.btn-firma').bind('click', function(event) {
	    event.preventDefault();
	    $('html, body').animate({scrollTop: $(this.hash).offset().top - capaHeaderHeight + 1}, 600);
	});

	//EVENTOS GOOGLE ANALYTICS
    $('.send-piwik-event').on('click', function(event) {
    	if ( !$(this).hasClass( "disabled" )) {
	        var category  = $(this).data("e_c");
	        var action  = $(this).data("e_a");
	        var label  = $(this).data("e_l");

	        piwik_event(category, action, label);
        }

    });


});//.document ready


if (existeCookie('cookieAlert3')) {
	videoOnReady = "hideVideo";
}else {
	var param_video = getParameterByName('video');
	if (is_novideo (param_video) ) {
	    videoOnReady = "hideVideo";
	}else {
	    videoOnReady = "showVideo";
	}
}

// FUNCION SENG GOOGLE EVENT
function piwik_event(category, action, label) {
    _paq.push(['trackEvent', category, action, label]);
}


// Setup a callback for the YouTube api to attach video event handlers
function onYouTubeIframeAPIReady() {
	player = new YT.Player('video', {
	  //height: '703',
	  //width: '1250',
	  videoId: 'pXMzICtx9iA',
	  playerVars: {
       'autoplay': 0,
       'controls': 0,
       'rel': 0,
       'showinfo': 0,
       'loop': 0,
       'enablejsapi': 1,
       'modestbranding': 1,
       'disablekb': 0,
       'iv_load_policy': 3
      },
	  events: {
	  	'onReady': videoOnReady,
        'onStateChange': onPlayerStateChange
      }
	});
}

function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.ENDED) {		
		$('#videoModal').modal('hide');
	}
}
function showVideo() {
	$('#videoModal').modal('show');
}
function hideVideo() {
	$('#videoModal').modal('hide');
}
function playVideo() {
	player.playVideo();
}
function stopVideo() {
	player.stopVideo();
}

var lastScrollTop = 0;
$(window).scroll(function(event) {

	//MOSTRAR/OCULTAR BACKGROUND CABECERA
	var destacadaHomeHeight = $("section.modulo-home").innerHeight();
	var capaHeaderHeight = $("header").innerHeight();

	if ($(window).scrollTop() > destacadaHomeHeight - capaHeaderHeight) {
		$('header').addClass('gold');
	}else {
		$('header').removeClass('gold');
	}

	//MOSTRAR/OCULTAR CABECERA
	var wintop = $(window).scrollTop(), winheight = $(window).height();
    var docheight = $(document).height();
    var totalScroll = (wintop/(docheight-winheight))*100;
    $(".KW_progressBar").css("width",totalScroll+"%");

    if($(window).width() <= 768){
		var st = $(this).scrollTop();
		if (st > lastScrollTop && st > 0){
		   // downscroll code
		   $('header').css('display','none');
		} else {
		  // upscroll code
		  $('header').css('display','block');
		}
		lastScrollTop = st;
	}else {
		$('header').css('display','block');
	}

	//BOTON FIRMA MOSTRAR/OCULTAR
	if($(window).width() <= 800) {
		if($(window).scrollTop() == ($(document).height() - $(window).height())) {
			$('.boton-fijo.btn-firma').css('display', 'none');
		}else {
			$('.boton-fijo.btn-firma').css('display', 'block');
		}
	}

	//CREAR COOKIE AL HACER SCROLL
    if(!existeCookie('cookieAlert3')) {
        crearCookie('cookieAlert3', '1', 365, '.es.amnesty.org');
        crearCookie('cookieAlert3', '1', 365, ''); //localhost
    }

});

function getParameterByName(name, url) {
    if (!url) {
		url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function is_novideo( param ) {
    if (param == 'novideo') {
        return true;
    } else {
        return false;
    }
}

function crearCookie(name,value,days,domain) {
    //console.log("--> Nombre: "+name+" Valor: "+value+" Dias: "+days);
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/; domain="+domain;
    //document.cookie = name+"="+value+expires+"; path=/";
}


function existeCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') {
			c = c.substring(1,c.length);
		}
		if (c.indexOf(nameEQ) === 0) {
			return true;
		}
	}
	return false;
}


function validarFormFirma(f) {
	$(".error").css('visibility', 'hidden');
	error = 0;

	//VALIDAR DATOS PERSONALES
	if (f.nombre.value.search(/\S/) == -1 || f.nombre.value.length < 3) {

		$(".error.nombre").html("El nombre no puede estar vacío.");
		$(".error.nombre").css('visibility', 'visible');

		f.nombre.focus();
		error = 1;
	}

	if(f.apellidos.value.search(/\S/) == -1 || f.apellidos.value.length < 3) {

		$(".error.apellidos").html("Los apellidos no pueden estar vacíos.");
		$(".error.apellidos").css('visibility', 'visible');

		f.apellidos.focus();
		error = 1;
	}

	if(f.email.value.search(/\S/) == -1) {

		$(".error.email").html("El email no puede estar vacío.");
		$(".error.email").css('visibility', 'visible');

		f.email.focus();
		error = 1;
	}else if (f.email.value.search(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.[a-z]{2,}$/i) == -1) {

		$(".error.email").html("Email con formato incorrecto.");
		$(".error.email").css('visibility', 'visible');

		f.email.focus()
		error = 1;
	}

	if(f.telefono.value.search(/\S/) == 0) {
		if(f.telefono.value.length != 9 || isNaN(f.telefono.value)) {
			$(".error.telefono").html("Teléfono con formato incorrecto.");
			$(".error.telefono").css('visibility', 'visible');

			f.telefono.focus()
			error = 1;
		}
	}

	if(f.pais.value == 0) {
		$(".error.pais").html("Selecciona el país de residencia.");
		$(".error.pais").css('visibility', 'visible');

		f.pais.focus()
		error = 1;
	}

	if(error == 1){
		//MOSTRAR LOS ERRORES
		return false;
	}else{

		$('#btnEnviar').css('display', 'none');
		$('#btnEnviando').css('display', 'block');

		return true;
	}
}

function soloNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if((tecla < 48 || tecla > 57) && (tecla != 32 && tecla != 43 && tecla != 8 && tecla != 0)){
        return false;
    }
}

function ocultarTel(valor) {
	if(valor == '1198') {
		$('input[name=telefono]').removeAttr('disabled');
		$('input[name=telefono]').removeAttr('readonly');
	}else {
		$('input[name=telefono]').attr('disabled', 'disabled');
		$('input[name=telefono]').attr('readonly', 'readonly');
		$('input[name=telefono]').val('');
	}
}

function callbackOwl(event) {
    // Provided by the core
    var page = event.page.index;     // Position of the current page

	//console.log('> '+page);

    $('.owl-item .item').each(function( index ) {
    	if($(this).hasClass('num-'+page) != page && page != -1) {
    		$('.owl-item .item a').attr('href', 'javascript:void(0);');
    		$('.owl-item .item a').addClass('disabled');
    		$('.owl-item .item a').removeClass('enabled');
    	}
    });

	$('.owl-item .item.num-'+page+' a').removeClass('disabled');
	$('.owl-item .item.num-'+page+' a').addClass('enabled');
	$('.owl-item .item.num-'+page+' a').attr('href', $('.owl-item .item.num-'+page).data('enlace'));
}