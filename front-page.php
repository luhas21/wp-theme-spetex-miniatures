
<?php get_header(); ?>

<main>
<?php
$args = array(
    'posts_per_page'    => 7,
    'post_type'     => 'post',  //choose post type here
    'order' => 'DESC',
);
// query
$the_query = new WP_Query( $args );
?>

<h2>Articles</h2>
<div class="grid">
  <?php if( $the_query->have_posts() ){
  while($the_query->have_posts()) {
    $the_query->the_post();
    get_template_part('loop'); ?>
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
      <p><small>on <strong><?php echo the_time('M j, Y'); ?></strong></small></p>
    </a>
    <p class="intro"><?php the_excerpt(); ?></p>
  </div>
<?php } } ?>
</div>
<p class="show-more"><a href="/articles">Show more content...</a></p>
</main>

<?php get_footer();
?>
