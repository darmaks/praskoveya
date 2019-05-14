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
    console.log(parameterString);
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
});