  <aside class="right">
    <div class="news-search">
      <form action="<?php echo home_url(); ?>" method="get" class="form-search">
        <input name="searchword" id="search-searchword" maxlength="30" class="inp-search" type="text" size="20" value="" placeholder="Искать в новостях">
        <input type="submit" value="Найти" class="btn-search" onclick="this.form.searchword.focus();">
      </form>
    </div>

    <div class="widget widget-navi">
      <div class="mod categories">
        <div class="head red">
          <h3>Рубрики</h3>
        </div>
        <?php wpeSideNav(); ?>
      </div>
    </div><!-- /.widget widget-navi -->

    <div id="calendar-cont">
      <table class="DynarchCalendar-topCont" align="center" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td>
              <div class="DynarchCalendar"><button class="DynarchCalendar-focusLink"></button>
                <div class="DynarchCalendar-topBar">
                  <div dyc-type="nav" dyc-btn="-Y" dyc-cls="hover-navBtn,pressed-navBtn" class="DynarchCalendar-prevYear DynarchCalendar-navBtn">
                    <div></div>
                  </div>
                  <div dyc-type="nav" dyc-btn="+Y" dyc-cls="hover-navBtn,pressed-navBtn" class="DynarchCalendar-nextYear DynarchCalendar-navBtn">
                    <div></div>
                  </div>
                  <div dyc-type="nav" dyc-btn="-M" dyc-cls="hover-navBtn,pressed-navBtn" class="DynarchCalendar-prevMonth DynarchCalendar-navBtn">
                    <div></div>
                  </div>
                  <div dyc-type="nav" dyc-btn="+M" dyc-cls="hover-navBtn,pressed-navBtn" class="DynarchCalendar-nextMonth DynarchCalendar-navBtn">
                    <div></div>
                  </div>
                  <table class="DynarchCalendar-titleCont" align="center" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td>
                          <div dyc-type="title" dyc-btn="menu" dyc-cls="hover-title,pressed-title" class="DynarchCalendar-title">
                            <div unselectable="on">Ноябрь 2016</div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="DynarchCalendar-dayNames">
                    <table align="center" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td>
                            <div>ПН</div>
                          </td>
                          <td>
                            <div>ВТ</div>
                          </td>
                          <td>
                            <div>СР</div>
                          </td>
                          <td>
                            <div>ЧТ</div>
                          </td>
                          <td>
                            <div>ПТ</div>
                          </td>
                          <td>
                            <div class="DynarchCalendar-weekend">СБ</div>
                          </td>
                          <td>
                            <div class="DynarchCalendar-weekend">ВС</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="DynarchCalendar-body">
                  <table class="DynarchCalendar-bodyTable" align="center" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr class="DynarchCalendar-week DynarchCalendar-first-row">
                        <td class=" DynarchCalendar-first-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161031" class="DynarchCalendar-day DynarchCalendar-day-othermonth">31</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161101" class="DynarchCalendar-day">1</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161102" class="DynarchCalendar-day">2</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161103" class="DynarchCalendar-day">3</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161104" class="DynarchCalendar-day">4</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161105" class="DynarchCalendar-day DynarchCalendar-weekend">5</div>
                        </td>
                        <td class=" DynarchCalendar-last-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161106" class="DynarchCalendar-day DynarchCalendar-weekend">6</div>
                        </td>
                      </tr>
                      <tr class="DynarchCalendar-week">
                        <td class=" DynarchCalendar-first-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161107" class="DynarchCalendar-day">7</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161108" class="DynarchCalendar-day">8</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161109" class="DynarchCalendar-day">9</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161110" class="DynarchCalendar-day">10</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161111" class="DynarchCalendar-day">11</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161112" class="DynarchCalendar-day DynarchCalendar-weekend">12</div>
                        </td>
                        <td class=" DynarchCalendar-last-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161113" class="DynarchCalendar-day DynarchCalendar-weekend">13</div>
                        </td>
                      </tr>
                      <tr class="DynarchCalendar-week">
                        <td class=" DynarchCalendar-first-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161114" class="DynarchCalendar-day">14</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161115" class="DynarchCalendar-day">15</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161116" class="DynarchCalendar-day">16</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161117" class="DynarchCalendar-day">17</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161118" class="DynarchCalendar-day">18</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161119" class="DynarchCalendar-day DynarchCalendar-weekend">19</div>
                        </td>
                        <td class=" DynarchCalendar-last-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161120" class="DynarchCalendar-day DynarchCalendar-weekend">20</div>
                        </td>
                      </tr>
                      <tr class="DynarchCalendar-week">
                        <td class=" DynarchCalendar-first-col DynarchCalendar-td-selected">
                          <div dyc-type="date" unselectable="on" dyc-date="20161121" class="DynarchCalendar-day DynarchCalendar-day-today DynarchCalendar-day-selected">21</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161122" class="DynarchCalendar-day">22</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161123" class="DynarchCalendar-day">23</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161124" class="DynarchCalendar-day">24</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161125" class="DynarchCalendar-day">25</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161126" class="DynarchCalendar-day DynarchCalendar-weekend">26</div>
                        </td>
                        <td class=" DynarchCalendar-last-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161127" class="DynarchCalendar-day DynarchCalendar-weekend">27</div>
                        </td>
                      </tr>
                      <tr class="DynarchCalendar-week">
                        <td class=" DynarchCalendar-first-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161128" class="DynarchCalendar-day">28</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161129" class="DynarchCalendar-day">29</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161130" class="DynarchCalendar-day">30</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161201" class="DynarchCalendar-day DynarchCalendar-day-othermonth">1</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161202" class="DynarchCalendar-day DynarchCalendar-day-othermonth">2</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161203" class="DynarchCalendar-day DynarchCalendar-weekend DynarchCalendar-day-othermonth">3</div>
                        </td>
                        <td class=" DynarchCalendar-last-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161204" class="DynarchCalendar-day DynarchCalendar-weekend DynarchCalendar-day-othermonth">4</div>
                        </td>
                      </tr>
                      <tr class="DynarchCalendar-week DynarchCalendar-last-row">
                        <td class=" DynarchCalendar-first-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161205" class="DynarchCalendar-day DynarchCalendar-day-othermonth">5</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161206" class="DynarchCalendar-day DynarchCalendar-day-othermonth">6</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161207" class="DynarchCalendar-day DynarchCalendar-day-othermonth">7</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161208" class="DynarchCalendar-day DynarchCalendar-day-othermonth">8</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161209" class="DynarchCalendar-day DynarchCalendar-day-othermonth">9</div>
                        </td>
                        <td class="">
                          <div dyc-type="date" unselectable="on" dyc-date="20161210" class="DynarchCalendar-day DynarchCalendar-weekend DynarchCalendar-day-othermonth">10</div>
                        </td>
                        <td class=" DynarchCalendar-last-col">
                          <div dyc-type="date" unselectable="on" dyc-date="20161211" class="DynarchCalendar-day DynarchCalendar-weekend DynarchCalendar-day-othermonth">11</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="DynarchCalendar-bottomBar">
                  <table align="center" cellspacing="0" cellpadding="0" style="width:100%">
                    <tbody>
                      <tr>
                        <td>
                          <table align="center" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td>
                                  <div dyc-btn="today" dyc-cls="hover-bottomBar-today,pressed-bottomBar-today" dyc-type="bottomBar-today" class="DynarchCalendar-bottomBar-today">Сегодня</div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="DynarchCalendar-menu" style="display: none">
                  <table height="100%" align="center" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td>
                          <table style="margin-top: 1.5em" align="center" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td colspan="3"><input dyc-btn="year" class="DynarchCalendar-menu-year" size="6" value="2016"></td>
                              </tr>
                              <tr>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="today">Сегодня</div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <p class="DynarchCalendar-menu-sep">&nbsp;</p>
                          <table class="DynarchCalendar-menu-mtable" align="center" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m0" class="DynarchCalendar-menu-month">Январь</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m1" class="DynarchCalendar-menu-month">Февраль</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m2" class="DynarchCalendar-menu-month">Март</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m3" class="DynarchCalendar-menu-month">Апрель</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m4" class="DynarchCalendar-menu-month">Май</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m5" class="DynarchCalendar-menu-month">Июнь</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m6" class="DynarchCalendar-menu-month">Июль</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m7" class="DynarchCalendar-menu-month">Август</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m8" class="DynarchCalendar-menu-month">Сентябрь</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m9" class="DynarchCalendar-menu-month">Октябрь</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m10" class="DynarchCalendar-menu-month">Ноябрь</div>
                                </td>
                                <td>
                                  <div dyc-type="menubtn" dyc-cls="hover-navBtn,pressed-navBtn" dyc-btn="m11" class="DynarchCalendar-menu-month">Декабрь</div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="DynarchCalendar-tooltip"></div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <?php if ( is_active_sidebar('widgetarea1') ) : ?>
      <?php dynamic_sidebar( 'widgetarea1' ); ?>
    <?php else : ?>

    <?php endif; ?>

  </aside>
