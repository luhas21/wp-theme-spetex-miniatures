<footer>
  <section>
    <aside>
      <div>
        <a href="/"><img class="spetex" alt="spetex" src="<?php echo get_theme_file_uri('/images/spetex.jpg') ?>">
        <h1>spetex miniatures</a></h1>
      </div>
      <p>
        <q>
          Blogging about my miniature painting journey.
        </q>
      </p>
    </aside>
    <nav><nav id="footer-navigation" class="site-navigation footer-navigation" role="navigation">
       <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
      <ul class="social">
        <li>
          <a href="mailto:spetex@icloud.com" aria-label="Send me an email."
            ><i class="fas fa-envelope-square"></i
          ></a>
        </li>
        <li>
          <a
            href="https://spetex-minis.com"
            target="_blank"
            rel="noopener"
            aria-label="Visit my blog."
            ><i class="fas fa-rss-square"></i
          ></a>
        </li>
        <li>
          <a
            href="https://www.instagram.com/spetex.miniatures/"
            target="_blank"
            rel="noreferrer"
            aria-label="Visit my instagram."
            ><i class="fab fa-instagram"></i
          ></a>
        </li>
        <li>
          <a
            href="https://www.facebook.com/spetex.minatures/"
            target="_blank"
            rel="noreferrer"
            aria-label="Visit my Facebook Page."
            ><i class="fab fa-facebook-square"></i
          ></a>
        </li>
        <li>
          <a
            href="https://twitter.com/spetex_minis"
            target="_blank"
            rel="noreferrer"
            aria-label="Visit my twitter account."
            ><i class="fab fa-twitter-square"></i
          ></a>
        </li>
        <li>
          <a
            href="https://www.youtube.com/channel/UCh6uIKKKDQw-cHyqpnod6xw"
            target="_blank"
            rel="noreferrer"
            aria-label="Visit my YouTube Channel."
            ><i class="fab fa-youtube-square"></i
          ></a>
        </li>
      </ul>
    </nav>
  </section>
</footer>


<?php wp_footer(); ?>
</body>
</html>