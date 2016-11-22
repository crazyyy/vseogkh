<?php get_header(); ?>

    <div class="content left">
      <div class="topbar">
        <h1><?php the_category(', '); ?></h1>
      </div>

      <div class="news-list news">

        <?php $i = '1'; if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php if ( $i == 1) { ?>
            <div class="last-news">
          <?php } ?>

          <?php if ( $i == 1 || $i == 2 || $i == 3 ) { ?>
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
                <div class="views"><?php wpb_get_post_views(get_the_ID()); ?></div>
                <div class="clock"><?php the_time('j.n.Y'); ?> в <?php the_time('G:i'); ?></div>
              </div>
            </div>
          <?php } else { ?>
            <div class="itm itm-<?php echo $i; ?> itm-list">
              <a href="<?php the_permalink(); ?>">
                <div class="foto">
                  <?php if ( has_post_thumbnail()) :
                    the_post_thumbnail('medium');
                  else: ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php endif; ?>
                </div>
                <div class="rcont">
                  <div class="title"><?php the_title(); ?></div>
                  <div class="news-info">
                    <div class="views"><?php wpb_get_post_views(get_the_ID()); ?></div>
                    <div class="comments">0</div>
                    <div class="clock"><?php the_time('j.n.Y'); ?> в <?php the_time('G:i'); ?></div>
                  </div>
                  <div class="intro"><?php wpeExcerpt('wpeExcerpt10'); ?></div>
                </div>
              </a>
            </div>
          <?php } ?>

          <?php if ($i == 3) { ?>
            </div><!-- last-news -->
            <div>
          <?php } ?>

          <?php $i++; ?>
        <?php endwhile; endif; ?>

      </div>
    </div><!-- news-list -->

    <?php get_template_part('pagination'); ?>

    <div class="results"></div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
