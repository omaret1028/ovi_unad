var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

function controlesmenu(){
    $('.app-menu li.tiene-submenu>a').on('click', function(e){
      e.preventDefault();
  		var element = $(this).parent('li');
  		if (element.hasClass('abierto')) {
  			element.removeClass('abierto');
  			element.find('li').removeClass('abierto');
  			element.find('ul').slideUp();
  		}
  		else {
  			element.addClass('abierto');
  			element.children('ul').slideDown();
  			element.siblings('li').children('ul').slideUp();
  			element.siblings('li').removeClass('abierto');
  			element.siblings('li').find('li').removeClass('abierto');
  			element.siblings('li').find('ul').slideUp();
  		}
  	});
    /* Soporte para dispositivos móviles
        Desplegar menú en dispositivos móviles. */
    $('.btn-menu').click(function(e){
      e.preventDefault();
      if ($(document).width()<450) {
          if (!$(".app-menu").hasClass("tblecep")) {
              $(".app-menu").addClass("tblecep");
          }else{
              $(".app-menu").removeClass("tblecep");
          }
      }
      $('.app-menu > ul').slideToggle();
    });
    // Muestra el menú al cambiar de resolución.
    $(window).resize(function(){
      if ($(document).width() > 450) {
        $('.app-menu > ul').css({'display':'block'});
      } else {
        $('.app-menu > ul').css({'display' : 'none'});
        $('.app-menu li ul').slideUp();
        $('.app-menu li').removeClass('abierto');
      }
    });
    // En caso de moviles, el menú se oculta luego del click.
    $('.app-menu li>a').on('click', function(e){
      if ($(document).width() < 450) {
        var element = $(this).parent('li');;
        if (!element.hasClass('tiene-submenu')) {
          $('.app-menu li').removeClass('abierto');
          $('.app-menu ul').slideUp();
          $(".app-menu").removeClass("tblecep");
        }
      }
    });
}

function insertarcontenido(url,contenedor){
  $.ajax({
    type: "POST",
    data:{},
    url: url,
    dataType: "html",
    success: function(html) {
      $(contenedor).html(html);
    },error: function(xhr, textStatus, errorThrown){
      console.log("NO SE OBTUVO RESPUETA DEL SERVIDOR");
    }
  });
}
