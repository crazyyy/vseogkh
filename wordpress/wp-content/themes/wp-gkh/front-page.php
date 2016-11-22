<?php /* Template Name: Home Page Template */ get_header(); ?>


      <div class="content fsize">
        <div class="home">

          <div class="top-news">
            <div class="head">
              <h3>Главные новости</h3>
              <div class="time" id="time"><?php $now = new DateTime(); echo $now->format('H:i');  ?></div>
              <div class="news-search">
                <form action="http://vseogkh.ru/77/search" method="get" class="form-search">
                  <input name="searchword" id="search-searchword" maxlength="30" class="inp-search" type="text" size="20" value="" placeholder="Искать в новостях">
                  <input type="submit" value="Найти" class="btn-search" onclick="this.form.searchword.focus();">
                </form>
              </div>
            </div>
            <?php query_posts("showposts=3&cat=1"); ?>
            <?php $i=1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="itm itm-<?php echo $i; ?>">
              <a href="<?php the_permalink(); ?>">
                <div class="foto">
                  <?php if ( has_post_thumbnail()) :
                    the_post_thumbnail('medium');
                  else: ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php endif; ?>
                </div>
                <div class="title"><?php the_title(); ?></div>
              </a>
              <div class="news-info">
                <div class="views"><?php echo getPostViews(get_the_ID()); ?></div>
                <div class="comments"><?php comments_number( '0', '1', '%'); ?></div>
                <div class="clock"><?php the_time('j.n'); ?> в <?php the_time('G:i'); ?></div>
              </div>
            </div>
          <?php $i++; endwhile; endif; ?>
          <?php wp_reset_query(); ?>
          </div><!-- top-news -->

          <div class="blk">
            <div class="content-left">

              <div class="mod news events">
                <div class="head">
                  <h3><a href="http://vseogkh.ru/77/news/events">События дня</a></h3>
                  <a href="http://vseogkh.ru/77/news/events" class="btn f-rgt btn-red">Читать все</a>
                </div>
                <div class="modwrap">
                  <?php query_posts("showposts=3&cat=1"); ?>
                  <?php $i=1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="itm itm-<?php echo $i; ?>">
                      <a href="<?php the_permalink(); ?>">
                        <div class="foto">
                          <?php if ( has_post_thumbnail()) :
                            the_post_thumbnail('medium');
                          else: ?>
                            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php endif; ?>
                        </div>
                        <div class="title"><?php the_title(); ?></div>
                        <div class="category"><?php the_category(', '); ?></div>
                      </a>
                      <div class="news-info">
                        <div class="views"><?php echo getPostViews(get_the_ID()); ?></div>
                        <div class="comments"><?php comments_number( '0', '1', '%'); ?></div>
                        <div class="clock"><?php the_time('j.n'); ?> в <?php the_time('G:i'); ?></div>
                      </div>
                    </div>
                  <?php $i++; endwhile; endif; ?>
                  <?php wp_reset_query(); ?>
                </div>
              </div>

              <div class="mod news projects">
                <div class="head">
                  <h3><a href="http://vseogkh.ru/77/projects">Спецпроекты</a></h3>
                  <a href="http://vseogkh.ru/77/projects" class="btn f-rgt btn-red">Читать все</a>
                  <a href="http://vseogkh.ru/77/feedback/specprojects" class="btn btn-head f-rgt btn-red" rel="modal:open">Стать участником!</a>
                </div>
                <div class="modwrap">

                  <?php query_posts("showposts=3&cat=8"); ?>
                  <?php $i=1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="itm itm-<?php echo $i; ?>">
                      <a href="<?php the_permalink(); ?>">
                        <div class="foto">
                          <?php if ( has_post_thumbnail()) :
                            the_post_thumbnail('medium');
                          else: ?>
                            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php endif; ?>
                        </div>
                        <div class="title"><?php the_title(); ?></div>
                        <div class="category"><?php the_category(', '); ?></div>
                      </a>
                      <div class="news-info">
                        <div class="views"><?php echo getPostViews(get_the_ID()); ?></div>
                        <div class="comments"><?php comments_number( '0', '1', '%'); ?></div>
                        <div class="clock"><?php the_time('j.n'); ?> в <?php the_time('G:i'); ?></div>
                      </div>
                    </div>
                  <?php $i++; endwhile; endif; ?>
                  <?php wp_reset_query(); ?>
                </div>
              </div>

            </div>

            <div class="content-right">
              <div class="mod newsfeed">
                <div class="head red">
                  <h3><a href="http://vseogkh.ru/77/news/newsfeed">Лента новостей</a></h3>
                </div>
                <div class="modwrap">
                  <div class="newsbody">
                    <div class="newsfeed-move">

                      <?php query_posts("showposts=10&cat=8"); ?>
                      <?php $i=1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="news-itm itm-<?php echo $i; ?>">
                          <div class="newsdate">
                            <div class="date"><?php the_time('j.n'); ?></div>
                            <div class="time"><?php the_time('G:i'); ?></div>
                          </div>
                          <div class="newstitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        </div>
                      <?php $i++; endwhile; endif; ?>
                      <?php wp_reset_query(); ?>

                    </div>
                  </div>

                  <div onclick="movenewsfeed(200)" class="newsfeeddown"></div>
                  <div onclick="movenewsfeed(-200)" class="newsfeedup"></div>
                </div>
                <div class="read-all">
                  <a href="http://vseogkh.ru/77/news">Читать все новости <span>→</span></a>
                </div>
              </div>
            </div>
          </div>

          <noindex>
            <div style="height: 180px;" class="bnrs">
              <a href="http://vseogkh.ru/banclk/6"><img src="<?php echo get_template_directory_uri(); ?>/img/6.jpg" alt="Баннер"></a>
            </div>
          </noindex>

          <div class="blk">
            <div class="content-left">
              <div class="mod house-online section obj-online">
                <div class="head">
                  <h3><a href="http://vseogkh.ru/77/house/online">Дома онлайн</a></h3>
                  <ul class="tabs">
                    <li class="current"><span>Онлайн</span></li>
                    <li><span>Самые активные</span></li>
                  </ul>
                  <a href="http://vseogkh.ru/77/house/online" class="btn f-rgt btn-red btn-head">Смотреть все</a>
                </div>
                <div class="modwrap border">
                  <div class="tab visible">
                    <a href="http://vseogkh.ru/77/house/page/1852538" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/81fb708e81db68e28775f0e6ed932f6d.jpg" alt=""></div>
                      <div class="address">Рогожская, 117</div>
                      <div class="city">г. Ногинск</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1748842" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">Трубецкая, 104</div>
                      <div class="city">г. Балашиха</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728771" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">Баулинская, 3</div>
                      <div class="city">г. Островцы</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1866532" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">43 Армии, 17</div>
                      <div class="city">г. Подольск</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1917621" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">Советская, 19</div>
                      <div class="city">г. Раменское</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728750" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">Подмосковная, 17</div>
                      <div class="city">г. Островцы</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728768" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/34c798eed71a9e34ca97094df5c3178c.jpg" alt=""></div>
                      <div class="address">Подмосковная, 34</div>
                      <div class="city">г. Островцы</div>
                    </a>
                  </div>
                  <div class="tab">
                    <a href="http://vseogkh.ru/77/house/page/1746820" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">Белякова, 3</div>
                      <div class="city">г. Балашиха</div>
                      <div class="comments icon">1</div>
                      <div class="views icon">7691</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728774" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/459bc4b20e7cf39c2f9f1fa3a10a1622.jpg" alt=""></div>
                      <div class="address">Баулинская, 5/1</div>
                      <div class="city">г. Островцы</div>
                      <div class="comments icon">3</div>
                      <div class="views icon">32523</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1824033" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">Советская, 64</div>
                      <div class="city">г. Ногинск</div>
                      <div class="comments icon">1</div>
                      <div class="views icon">6521</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728770" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/4d024889438fe309f6dd96afd2521580.jpg" alt=""></div>
                      <div class="address">Подмосковная, 36</div>
                      <div class="city">г. Островцы</div>
                      <div class="comments icon">2</div>
                      <div class="views icon">28280</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728769" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ca9c12ff629ee24b386377847d119b0a.jpg" alt=""></div>
                      <div class="address">Подмосковная, 35</div>
                      <div class="city">г. Островцы</div>
                      <div class="comments icon">3</div>
                      <div class="views icon">23649</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728767" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/7b29745d341d027feeb25f7522314ce8.jpg" alt=""></div>
                      <div class="address">Подмосковная, 33</div>
                      <div class="city">г. Островцы</div>
                      <div class="comments icon">1</div>
                      <div class="views icon">17701</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1728768" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/34c798eed71a9e34ca97094df5c3178c.jpg" alt=""></div>
                      <div class="address">Подмосковная, 34</div>
                      <div class="city">г. Островцы</div>
                      <div class="comments icon">12</div>
                      <div class="views icon">48399</div>
                    </a>
                    <a href="http://vseogkh.ru/77/house/page/1911810" class="itm">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/house.jpg" alt=""></div>
                      <div class="address">Дружбы, 5</div>
                      <div class="city">г. Протвино</div>
                      <div class="comments icon">1</div>
                      <div class="views icon">9381</div>
                    </a>
                  </div>
                </div>
              </div>

              <div class="mod house-wall">
                <div class="head turq">
                  <h3 class="turq">Живая лента</h3></div>
                <div class="modwrap border">
                  <a href="http://vseogkh.ru/77/house/page/1959196#wi-92" class="itm">
                    <div class="address">Победы, 5/2</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1.jpg"></div>
                    <div class="wall-msg">Посадили дерево, маленькое дерево… И не только фото Второго ноября ...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1746820#wi-91" class="itm">
                    <div class="address">Белякова, 3</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(1).jpg"></div>
                    <div class="wall-msg">Жители Балашихи мигрируют из одного «квартала» в другой фото Не так...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1911810#wi-90" class="itm">
                    <div class="address">Дружбы, 5</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(2).jpg"></div>
                    <div class="wall-msg">Допрос с пристрастием фото Уже почти год вывозом мусора в Протвино ...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1728774#wi-89" class="itm">
                    <div class="address">Баулинская, 5/1</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(3).jpg"></div>
                    <div class="wall-msg">Какого тарифа ждать жителям Новых Островцов 36,6 или 42,42 рублей за к...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1728774#wi-88" class="itm">
                    <div class="address">Баулинская, 5/1</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(4).jpg"></div>
                    <div class="wall-msg">Повестка нового голосования обезопасит жителей Новых Островцов от посл...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1728768#wi-87" class="itm">
                    <div class="address">Подмосковная, 34</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(5).jpg"></div>
                    <div class="wall-msg">Тяготы выбора фото В трёх жилых домах в Островцах по улице Подмо...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1728768#wi-86" class="itm">
                    <div class="address">Подмосковная, 34</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(6).jpg"></div>
                    <div class="wall-msg">Слив засчитан фото Вчера в Раменском городском суде было рассмотрен...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1728768#wi-85" class="itm">
                    <div class="address">Подмосковная, 34</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(7).jpg"></div>
                    <div class="wall-msg">Обоюдная глухота фото В прошедшую субботу в администрации деревн...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1824033#wi-84" class="itm">
                    <div class="address">Советская, 64</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/user-gr.svg"></div>
                    <div class="wall-msg">Помогите нам решить вопрос с ремонтом кровли, в 2013 был произведен ка...</div>
                  </a>
                  <a href="http://vseogkh.ru/77/house/page/1728770#wi-83" class="itm">
                    <div class="address">Подмосковная, 36</div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/d4515fdca24e7e6b414d98ee165ca1a1(8).jpg"></div>
                    <div class="wall-msg">Жители Островцов устроили собственный «Единый день голосования»﻿ фот...</div>
                  </a>
                  <div class="search">
                    <a href="http://vseogkh.ru/77/house/search" class="btn btn-red">Найдите Ваш дом</a>
                  </div>
                </div>
              </div>


              <div class="mod school-online obj-online">
                <div class="head">
                  <h3><a href="http://vseogkh.ru/77/school/online">Школы онлайн</a></h3>
                  <a href="http://vseogkh.ru/77/catalog/school" class="btn f-rgt btn-red btn-head">Все</a>
                </div>
                <div class="modwrap border">
                </div>
              </div>


              <div class="mod kinder-online obj-online">
                <div class="head">
                  <h3><a href="http://vseogkh.ru/77/kinder/online">Садики онлайн</a></h3>
                  <a href="http://vseogkh.ru/77/catalog/kinder" class="btn f-rgt btn-red btn-head">Все</a>
                </div>
                <div class="modwrap border">
                </div>
              </div>

              <div class="clear"></div>
            </div>
            <div class="content-right">
              <div class="mod persons">
                <div class="head red">
                  <h3 class="red"><a href="http://vseogkh.ru/77/person">Персоны</a></h3>
                </div>
                <div class="modwrap">
                  <div class="itm itm-1">
                    <a href="http://vseogkh.ru/77/person/page/4">
                      <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="Соков Вадим"></div>
                    </a>
                    <a href="http://vseogkh.ru/77/person/page/4" class="name">Соков Вадим</a>
                    <div class="post">Главный государственный жилищный инспектор Московской области</div>
                    <a href="http://vseogkh.ru/user/formappeal/person/4" class="btn btn-turq btn-appeal" rel="modal:open">Написать обращение</a>
                  </div>
                  <div class="itm itm-2">
                    <a href="http://vseogkh.ru/77/person/page/25">
                      <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/img/25.jpg" alt="Разворотнева Светлана"></div>
                    </a>
                    <a href="http://vseogkh.ru/77/person/page/25" class="name">Разворотнева Светлана</a>
                    <div class="post">Исполнительный директор Национального центра общественного контроля в сфере ЖКХ «ЖКХ контроль»</div>
                    <a href="http://vseogkh.ru/user/formappeal/person/25" class="btn btn-turq btn-appeal" rel="modal:open">Написать обращение</a>
                  </div>
                  <div class="all-persons">
                    <a href="http://vseogkh.ru/77/person">Все персоны <span>→</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mod realty section">
            <div class="head">
              <h3><a href="http://vseogkh.ru/77/realty">Недвижимость</a></h3>
              <ul class="tabs">
                <li class="current"><span>Продажа</span></li>
                <li><span>Аренда</span></li>
              </ul>
              <a href="http://vseogkh.ru/77/login" class="btn f-rgt btn-red btn-head btn-add" rel="modal:open">Подать объявление</a>
            </div>
            <div class="modwrap">
              <div class="tab visible">
                <a href="http://vseogkh.ru/77/house/realty/1872483/739" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/8f25bf1df95bf2d0277f701c44dcd6b6.jpg">
                    <div class="price">3 950 000</div>
                  </div>
                  <div class="descr">
                    <div class="title">Продам 2-к квартиру, 44 м²</div>
                    <div class="address">пр. Макаренко, 12А</div>
                    <div class="district">р-н г. Королев</div>
                  </div>
                </a>
                <a href="http://vseogkh.ru/77/house/realty/1746287/738" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/7fb042e344c4d12c99cef722194659b1.jpg">
                    <div class="price">5 650 000</div>
                  </div>
                  <div class="descr">
                    <div class="title">Продам 2-к квартиру, 63 м²</div>
                    <div class="address">ул. Свердлова, 38</div>
                    <div class="district">р-н г. Балашиха</div>
                  </div>
                </a>
                <a href="http://vseogkh.ru/77/house/realty/1746447/737" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ca6805882a077aa86c688a6a2b676090.jpg">
                    <div class="price">3 500 000</div>
                  </div>
                  <div class="descr">
                    <div class="title">Продам 2-к квартиру, 45 м²</div>
                    <div class="address">ш. Энтузиастов, 47</div>
                    <div class="district">р-н г. Балашиха</div>
                  </div>
                </a>
                <a href="http://vseogkh.ru/77/house/realty/1746284/736" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/14aecb5e359de24ed0963534e750ce24.jpg">
                    <div class="price">4 700 000</div>
                  </div>
                  <div class="descr">
                    <div class="title">Продам 3-к квартиру, 64 м²</div>
                    <div class="address">ул. Свердлова, 24</div>
                    <div class="district">р-н г. Балашиха</div>
                  </div>
                </a>
              </div>
              <div class="tab">
                <a href="http://vseogkh.ru/77/house/realty/1764830/733" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/67093e630f3c0f0c080118ab72d7203c.jpg">
                    <div class="price">30 000</div>
                  </div>
                  <div class="descr">
                    <div class="title">Сдам 2-к квартиру, 45 м²</div>
                    <div class="address">ул. Мира, 21</div>
                    <div class="district">р-н г. Мытищи</div>
                  </div>
                </a>
                <a href="http://vseogkh.ru/77/house/realty/1764809/728" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/84081cbfdcbad0ddf9082b591f11bc5c.jpg">
                    <div class="price">18 500</div>
                  </div>
                  <div class="descr">
                    <div class="title">Сдам 3-к квартиру, 69 м²</div>
                    <div class="address">ул. Колпакова, 42</div>
                    <div class="district">р-н г. Мытищи</div>
                  </div>
                </a>
                <a href="http://vseogkh.ru/77/house/realty/1824520/726" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ee0fc4769b3cda3fb7ab820f2e69bb38.jpg">
                    <div class="price">15 000</div>
                  </div>
                  <div class="descr">
                    <div class="title">Сдам 1-к квартиру, 37 м²</div>
                    <div class="address">ул. Электрическая, 7</div>
                    <div class="district">р-н г. Ногинск</div>
                  </div>
                </a>
                <a href="http://vseogkh.ru/77/house/realty/1850834/725" class="itm">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/6a492f46f3a4e309b59e524695ce2b6f.jpg">
                    <div class="price">14 000</div>
                  </div>
                  <div class="descr">
                    <div class="title">Сдам 1-к квартиру, 41 м²</div>
                    <div class="address">ул. 8 Марта, 19</div>
                    <div class="district">р-н г. Ногинск</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>

<?php get_footer(); ?>
