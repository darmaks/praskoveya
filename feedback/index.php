<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include("../includes/head.php");?>
      
   </head>
   <body class="feedback_page">
      <?php include("../includes/navigation.php") ?>
      <!-- <h3><?php print $CURRENT_PAGE;?></h3> -->
      <div class="container">
         <div class="row">
            <div class="sub-header">
               <h1>Контакты</h1>
               <p class="h1-description">					
                  свяжитесь с нами
               </p>
            </div>
         </div>
      </div>
      <section class="content">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-9">
                  <article class="intro">
                     <h2 class="article-heading">обратная связь</h2>
                     <div class="mx-auto mb-4 rounded-0" style="max-width: 42rem;">
                        <div class="card-body position-relative">
                           <!-- Форма обратной связи -->
                           <form id="feedback" action="/feedback/process/process.php" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-sm-6">
                                    <!-- Имя пользователя -->
                                    <div class="form-group">
                                       <label for="name" class="control-label">Имя</label>
                                       <input id="name" type="text" name="name" class="form-control" value="" placeholder="Имя" minlength="2"
                                          maxlength="30" required="required">
                                       <div class="invalid-feedback"></div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <!-- Email пользователя -->
                                    <div class="form-group email" >
                                       <label for="email" class="control-label">Email-адрес</label>
                                       <input id="email" type="email" name="email" required="required" class="form-control" value=""
                                          placeholder="Email-адрес">
                                       <div class="invalid-feedback"></div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Сообщение пользователя -->
                              <div class="form-group">
                                 <label for="message" class="control-label">Сообщение (не менее 20 символов)</label>
                                 <textarea id="message" name="message" class="form-control" rows="3" placeholder="Сообщение (не менее 20 символов)" minlength="20" maxlength="500" required="required"></textarea>
                                 <div class="invalid-feedback"></div>
                              </div>
                              <!-- Файлы, для прикрепления к форме -->
                              <div class="form-group">
                                 <p style="font-weight: 700; margin-bottom: 0;">Прикрепить к сообщению файлы (до <span class="countFiles">5</span>):</p>
                                 <p class="text-secondary">jpg, jpeg, bmp, gif, png (до 512 Кбайт)</p>
                                 <div class="attachments" data-counts="5">
                                    <div class="form-group">
                                       <label for="validatedCustomFile">Выберите файл...</label>
                                       <input name="attachment[]" type="file" class="form-control-file" id="validatedCustomFile">
                                    </div>
                                 </div>
                              </div>
                              <!-- Капча -->
                              <div class="form-group captcha">
                                 <img class="img-captcha" src="../../feedback/captcha/captcha.php" data-src="../../feedback/captcha/captcha.php">
                                 <div class="btn btn-light position-relative refresh-captcha">Обновить</div>
                                 <div class="form-group">
                                    <label for="captcha" class="control-label">Код, показанный на изображении</label>
                                    <input type="text" name="captcha" maxlength="6" required="required" id="captcha" class="form-control captcha"
                                       placeholder="******" autocomplete="off" value="">
                                    <div class="invalid-feedback"></div>
                                 </div>
                              </div>
                              <!-- Сообщение при ошибке -->
                              <div class="alert alert-danger form-error d-none">
                                 Исправьте данные и отправьте форму ещё раз.
                              </div>
                              <!-- Индикация отправки данных формы на сервер -->
                              <div class="progress d-none mb-2">
                                 <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                    <span class="sr-only">0%</span>
                                 </div>
                              </div>
                              <!-- Кнопка для отправки формы -->
                              <div class="text-right submit">
                                 <button type="submit" class="btn btn-success position-relative">Отправить
                                 сообщение</button>
                              </div>
                           </form>
                           <!-- Сообщение об успешной отправки формы -->
                           <div class="form-result-success d-none text-center justify-content-center align-items-center" style="position: absolute;
                              top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,.6); color: #fff; font-size: 1.25rem; z-index: 1000;">
                              <div class="alert alert-success rounded-0" style="z-index: 1001;">Форма успешно отправлена. Нажмите на <a class="alert-link" href="#" data-reloadform="#feedback">ссылку</a>, чтобы отправить ещё одно сообщение.</div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="col-lg-3">
                  <?php include($_SERVER["DOCUMENT_ROOT"].'/data/aside.php'); ?>
               </div>
            </div>
         </div>
      </section>
      <?php include("../includes/footer.php") ?>
      <?php include("../includes/footer_scripts.php") ?>
   </body>
</html>

