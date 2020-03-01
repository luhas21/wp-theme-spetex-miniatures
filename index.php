<?php get_header(); ?>

  <main>
  <h2>Articles</h2>
  <div class="grid">
    <?php while(have_posts()) {
    the_post(); ?>
    <div class="grid-item">
      <a href="<?php the_permalink(); ?>">
        <?php
        if(has_post_thumbnail()){ ?>
          <img class="grid-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
          <?php }
        else { ?>                
          <div class="article-image-placeholder">
            <p><?php the_title(); ?></p>
          </div>
        <?php } ?>
        <h4><?php the_title(); ?></h4>
        <p><small>on <strong><?php echo get_the_date('M j, Y'); ?></strong></small></p>
      </a>
      <p class="intro"><?php echo wp_trim_words(get_the_content(),30); ?></p>
    </div>
  <?php } ?>
  </div>
  <p class="show-more"><a href="/articles">Show more content...</a></p>
</main>




<?php get_footer();

?>

