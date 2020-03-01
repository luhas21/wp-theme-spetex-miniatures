<?php get_header(); ?>
<main>
  <h2>Articles</h2>
  <ul class="articles">
    <?php if (have_posts()) {
      while(have_posts()) {
      the_post(); ?>
      <div>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      </div>
      <div>
        <p><small>Published by <?php the_author_posts_link(); ?> on <?php the_time('M j, Y') ?> in <?php echo get_the_category_list(', ') ?></small></p>
      </div>
      <div>
        <?php the_excerpt(); ?>
        <p class="show-more"><a href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
      </div>
      <?php } } else { ?>
        <p><?php echo "Sorry, no posts matched your criteria."; ?></p>
    <?php } ?>
  </ul>
</main>

<?php get_footer(); ?>