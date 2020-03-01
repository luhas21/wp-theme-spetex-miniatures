<?php get_header();

while(have_posts()) {
    the_post(); ?>
    <header class="article-header">
    <section>
      <h1><?php the_title(); ?></h1>
      <p>
        <small>
          Published on:
          <strong><?php the_date('M j, Y'); ?></strong>
          <br />
          By: <strong><?php the_author() ?></strong>
          <br />
        </small>
      </p>
    </section>
  </header>
  <article>
  <?php if(the_post_thumbnail()){ ?>
    <div>
      <picture>
        <img class="in-text title-picture" alt="Petr sitting and painting."
          src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"
        />
      </picture>
    </div>
  <?php } ?>
    <p>
      <small><?php the_title(); ?></small>
    </p>
    <div id="disqus_thread"><?php the_content(); ?></div>
  </article>
  <script src="/disqus.js"></script>

    <?php    }

?>

<?php get_footer(); ?>