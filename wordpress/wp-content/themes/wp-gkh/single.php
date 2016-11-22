<?php get_header(); ?>

  <div class="content left">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <div class="article">
        <h1><?php the_title(); ?></h1>
        <div class="a-image">
          <div class="a-date"><?php the_time('j.n.Y'); ?> в <?php the_time('G:i'); ?></div>
          <?php if ( has_post_thumbnail()) :?>
            <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_post_thumbnail();  ?>
            </a>
          <?php endif; ?><!-- /post thumbnail -->
        </div>
        <div class="rbtns">
          <div class="soc">
            <div class="title">Поделитесь новостью:</div>
            <div class="socbuttons">
              <div class="socbuttons-wrp">
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div class="views icn"><?php echo getPostViews(get_the_ID()); ?></div>
          <div class="comments icn"><?php comments_number( '0', '1', '%'); ?></div>
          <a href="<?php the_permalink(); ?>?print" class="print icn" title="Версия для печати" target="_blank">Версия для печати</a>
          <?php if (get_field('fotosource')) { ?>
            <div class="foto"><?php the_field('fotosource') ?></div>
          <?php } ?>
        </div>
        <div class="clear"></div>
        <?php if (get_field('description')) { ?>
          <div class="a-introtxt">
            <?php the_field('description') ?>
          </div>
        <?php } ?>
        <div class="a-fulltxt">
          <?php the_post(); the_content(); ?>
          <?php setPostViews(get_the_ID()); ?>
        </div>
      </div>
      <div class="a-tags">
        <?php the_tags('Теги:', ', ', ''); ?>
      </div>

    <div class="subscr-social">
      <div class="subscribe">
        <div class="txt">Не пропустите важные новости!</div>
        <a href="#" class="btn btn-red" rel="modal:open">Подпишитесь</a>
      </div>
      <div class="social">
      </div>
    </div>

    <h3 class="comments-head nocomments">Комментарии</h3>
    <div class="mod comments list" style="display:none;">
      <div class="modwrap">
        <div class="comments-items">
        </div>
      </div>
    </div>

    <div class="mod comments addform" id="addform">
      <div class="modwrap">
        <h3>Есть мнение? Добавьте комментарий:</h3>
        <form>
          <div class="authorize"><a href="#" class="btn btn-red btn-send loginform-link" rel="modal:open">Авторизуйтесь чтобы добавить комментарий</a></div>
        </form>
      </div>
    </div>


    <div class="mod news">
      <div class="head">
        <h3><a href="#">Другие новости раздела</a></h3>
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
          </a>
          <div class="news-info">
            <div class="views"><?php echo getPostViews(get_the_ID()); ?></div>
            <div class="clock"><?php the_time('j.n.Y'); ?> в <?php the_time('G:i'); ?></div>
          </div>
        </div>
        <?php $i++; endwhile; endif; ?>
        <?php wp_reset_query(); ?>

      </div>
    </div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
