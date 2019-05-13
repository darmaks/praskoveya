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
});