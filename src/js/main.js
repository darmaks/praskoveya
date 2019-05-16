(function($) {
  var defaults={
      sm : 540,
      md : 720,
      lg : 960,
      xl : 1140,
      navbar_expand: 'lg'
  };
  $.fn.bootnavbar = function() {

      var screen_width = $(document).width();

      if(screen_width >= defaults.lg){
          $(this).find('.dropdown').hover(function() {
              $(this).addClass('show');
              $(this).find('.dropdown-menu').first().addClass('show').addClass('animated fadeIn').one('animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd', function () {
                  $(this).removeClass('animated fadeIn');
              });
          }, function() {
              $(this).removeClass('show');
              $(this).find('.dropdown-menu').first().removeClass('show');
          });
      }

      $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
          $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
          $('.dropdown-submenu .show').removeClass("show");
        });

        return false;
      });
  };
})(jQuery);

$( document ).ready(function(){
    $(".fancybox").fancybox();

      /*
    Параметры указываются в виде:
    {
    ключ: значение;
    ключ: значение;
    ...
    }
    Основные параметры
    selector - селектор формы (по умолчанию '#feedback-form')
    maxSizeFile - максимальный размер файла в мегабайтах (по умолчанию 0.5)
    validFileExtensions - допустимые расширения файлов для загрузки (по умолчанию 'jpg','jpeg','bmp','gif','png') 
    */
    var form2 = new ProcessForm({
        selector: '#feedback',
        isAgreement: false,
        codeFragmentAttachment: '<div class="form-group">' +
                  '<label for="validatedCustomFile">Выберите файл...</label>' +
                  '<input name="attachment[]" type="file" class="form-control-file" id="validatedCustomFile">' +
                '</div>'
    });
    form2.init();
    
    var selected_option_value = $("#regions option:selected").val();

    $('.group_shop_region').hide();
    $('#' + selected_option_value).fadeIn('slow');
  
    $("#regions").change(function() {

      var selected_id = $("#regions option:selected").val();
      
      $('.group_shop_region').hide();
      
      $('#' + selected_id ).fadeIn('slow');
      			
    });
  
  $('.rater').on('click', function(e){
    e.preventDefault();
    var el = e.target;
    var href = $(el).attr('href');
    var parameterString = href.replace(/.*\?(.*)/, "$1");
    var parameterTokens = parameterString.split("&"); // onclick="sndReq('j=1,q=2,t=127.0.0.1,c=5');
    var parameterList = new Array();

      for (j = 0; j < parameterTokens.length; j++) {
        var parameterName = parameterTokens[j].replace(/(.*)=.*/, "$1"); // j
        var parameterValue = parameterTokens[j].replace(/.*=(.*)/, "$1"); // 1
        parameterList[parameterName] = parameterValue;
      }
      var theratingID = parameterList['q'];
      var theVote = parameterList['j'];
      var theuserIP = parameterList['t'];
      var theunits = parameterList['c'];
      
      //for testing	alert('sndReq('+theVote+','+theratingID+','+theuserIP+','+theunits+')'); return false;
      sndReq(theVote,theratingID,theuserIP,theunits);
  });

  $(function () {
    $('#main_navbar').bootnavbar();
  });


  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }

  ( function() {

    var youtube = document.querySelectorAll( ".youtube" );
    
    for (var i = 0; i < youtube.length; i++) {
      
      var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
      
      var image = new Image();
          image.src = source;
          image.addEventListener( "load", function() {
            youtube[ i ].appendChild( image );
          }( i ) );
      
          youtube[i].addEventListener( "click", function() {
  
            var iframe = document.createElement( "iframe" );
  
                iframe.setAttribute( "frameborder", "0" );
                iframe.setAttribute( "allowfullscreen", "" );
                iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
  
                this.innerHTML = "";
                this.appendChild( iframe );
          } );	
    };
    
  } )();
});


