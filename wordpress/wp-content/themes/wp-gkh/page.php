<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="content left">
    <div class="article">
      <h1><?php the_title(); ?></h1>
      <div class="a-fulltxt">
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
      </div>
    </div>
  </div>
  <?php endwhile; else: // If 404 page error ?>
  <div class="content left">
    <div class="article">
      <h1><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h1>
    </div>
  </div>
  <?php endif; ?>

  <aside class="right" style="height: 0px;"></aside>

<?php get_footer(); ?>
