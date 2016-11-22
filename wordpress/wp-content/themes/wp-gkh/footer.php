
      <div class="clear"></div>
    </div><!-- wrapper middle -->
  </div>

  <footer>
    <div class="footer-menu">
      <div class="wrapper">
        <a class="logo-img" href="http://vseogkh.ru/77">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo_bottom.svg">
        </a>
        <div class="menu-top region-menu">
          <a href="http://vseogkh.ru/77/news" class="">
            Новости    </a>
          <a href="http://vseogkh.ru/77/projects" class="">
            Спецпроекты    </a>
          <a href="http://vseogkh.ru/77/realty" class="">
            Недвижимость    </a>
          <a href="http://vseogkh.ru/77/catalog" class="">
            Справочник    </a>
        </div>
        <div class="search-bottom">
          <div class="search-input"></div>
          <div class="search-btn"></div>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <noindex>
        <div class="cols">
          <div class="col col-1">
            <h3>vseogkh.ru</h3>
            <a href="http://vseogkh.ru/77/st/certificate"><span style="color: #999; line-height: 1.2;">Свидетельство о регистрации СМИ<br>ЭЛ № ФС 77 - 67037</span></a>
            <span style="color: #666; line-height: 1.2; font-size: 12px; padding: 12px 20px 0 0;">Мнение редакции может не совпадать с мнением отдельных авторов.</span>
            <span style="color: #666; line-height: 1.2; font-size: 12px; padding: 6px 20px 0 0;">При использовании материалов сайта ссылка обязательна.</span>
          </div>
          <div class="col col-2">
            <h3>Всё о ЖКХ</h3>
            <a href="http://vseogkh.ru/77/info/about">О проекте</a>
            <a href="http://vseogkh.ru/77/info/advertising">Размещение рекламы</a>
            <a href="http://vseogkh.ru/77/info/contacts">Контакты</a>
            <a href="http://vseogkh.ru/77/info/termsofservice">Пользовательское соглашение</a>
          </div>
          <div class="col col-3">
            <h3>Обратная связь</h3>
            <a href="http://vseogkh.ru/77/feedback" rel="modal:open">Обратная связь</a>
            <a href="http://vseogkh.ru/77/feedback/sendnews" rel="modal:open">Отправить новость</a>
            <a href="http://vseogkh.ru/77/feedback/support" rel="modal:open">Техподдержка</a>
            <a href="http://vseogkh.ru/77/info/vacancies">Вакансии</a>
          </div>
          <div class="col col-4">
            <h3>Контакты</h3>
            <span>info@vseogkh.ru</span>
            <span>8 800 250 93 90</span>
          </div>
        </div>
      </noindex>
    </div>
  </footer>
  <a href="http://vseogkh.ru/77" class="btn-top" id="ubar"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-1.svg"><br>наверх</a>
  <div id="region-form" class="modal">
    <div class="header">Выберите ваш регион</div>
    <ul class="region-link">
      <li><span>Москва и область</span></li>
      <li><a href="http://vseogkh.ru/45">Курганская область</a></li>
      <li><a href="http://vseogkh.ru/59">Пермский край</a></li>
      <li><a href="http://vseogkh.ru/66">Свердловская область</a></li>
      <li><a href="http://vseogkh.ru/72">Тюменская область</a></li>
      <li><a href="http://vseogkh.ru/86">ХМАО</a></li>
      <li><a href="http://vseogkh.ru/74">Челябинская область</a></li>
      <li><a href="http://vseogkh.ru/89">ЯНАО</a></li>
    </ul>
  </div>

  <?php wp_footer(); ?>
      <script>
        $('.btn-allcomments').click(function() {
          $('.other-comments').toggle();
          $('.btn-allcomments').toggle();
        });
      </script>
      <script>
        $(function() {
          $("a[href$='.jpg'],a[href$='.JPG'],a[href$='.png'],a[href$='.gif']").attr('rel', 'gallery').fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            padding: 5
          });

          $.ajax({
            url: '/news',
            type: 'POST',
            dataType: 'JSON',
            data: {
              'task': 'get_fotogallery',
              'folder': $('#fotogallery').attr('data-folder'),
              'img': $('#fotogallery').attr('data-img')
            },
            success: function(data) {
              $('#fotogallery').html(data['html']);
            }
          });
        });
      </script>

<script type="text/javascript">
        if (typeof Calendar != "undefined") {

          Calendar.LANG("ru", "русский", {
            fdow: 1, // first day of week for this locale; 0 = Sunday, 1 = Monday, etc.
            goToday: "Сегодня",
            today: "Сегодня", // appears in bottom bar
            wk: "нед",
            weekend: "0,6", // 0 = Sunday, 1 = Monday, etc.
            AM: "am",
            PM: "pm",
            mn: ["Январь",
              "Февраль",
              "Март",
              "Апрель",
              "Май",
              "Июнь",
              "Июль",
              "Август",
              "Сентябрь",
              "Октябрь",
              "Ноябрь",
              "Декабрь"
            ],

            smn: ["Январь",
              "Февраль",
              "Март",
              "Апрель",
              "Май",
              "Июнь",
              "Июль",
              "Август",
              "Сентябрь",
              "Октябрь",
              "Ноябрь",
              "Декабрь"
            ],

            dn: ["воскресенье",
              "понедельник",
              "вторник",
              "среда",
              "четверг",
              "пятница",
              "суббота",
              "воскресенье"
            ],

            sdn: ["ВС",
              "ПН",
              "ВТ",
              "СР",
              "ЧТ",
              "ПТ",
              "СБ",
              "ВС"
            ]
          });
          $(function() {
            if (typeof currentDate == "undefined") {
              date = new Date();
            } else {
              date = new Date(currentDate);
            }
            var LEFT_CAL = Calendar.setup({
              cont: "calendar-cont",
              weekNumbers: false,
              selectionType: Calendar.SEL_SINGLE,
              selection: Calendar.dateToInt(date), //Calendar.dateToInt(currentDate),
              animation: false,
              onSelect: function() {
                  var date = this.selection.sel[0];
                  date = Calendar.intToDate(date);
                  date = Calendar.printDate(date, "%Y-%m-%d");
                  location.href = "/77/news/date/" + date;
                }
                // titleFormat: "%B %Y"
            });
            LEFT_CAL.setLanguage("ru");
            if (typeof currentDate != "undefined") {
              LEFT_CAL.moveTo(currentDate);
            }
          });
        }
      </script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/fancybox.js"></script>
  <script type="text/javascript">
    var newsFeedAnimate = false;

    function movenewsfeed(dif) {
      if (newsFeedAnimate)
        return;
      newsFeedAnimate = true;
      var moveDiv = $($('.newsfeed-move')[0]);
      nextMarg = calcMove(moveDiv, dif);
      $('.newsfeed-move').animate({
        'margin-top': nextMarg + 'px'
      }, 500, function() {
        newsFeedAnimate = false;
      });
    }

    function calcMove(moveDiv, dif) {
      var curMarg = parseInt(moveDiv.css('margin-top'));
      var nextMarg = curMarg + dif;
      var parH = parseInt(moveDiv.parent().css('height'));
      var newsH = parseInt(moveDiv.css('height'));
      if (-nextMarg >= newsH - parH) {
        console.log('befor: ' + nextMarg);
        nextMarg = -(newsH - parH);
        console.log('after: ' + nextMarg);
        $('.newsfeedup').hide();
      } else {
        $('.newsfeedup').show();
      }
      if (nextMarg > 0) {
        $('.newsfeeddown').hide();
        nextMarg = 0;
      } else {
        $('.newsfeeddown').show();
      }
      console.log(parH);
      console.log(nextMarg);
      return nextMarg;
    }
  </script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/chosen.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/autocomplete.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/swfobject.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


</body>

</html>
