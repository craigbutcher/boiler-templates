<?php get_header(); ?>

<main role="main">
  <header>
    <h1>
      <a class="main-logo" href="<?php echo home_url(); ?>">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dwlogo-2.png" alt="Drew Worthley" width="200" height="200" />
      </a>
    </h1>
  </header>


  <div class="single-post-layout">
    <article>
      <header>
        <h1><?php _e( '404: Page Not Found', 'tailor' ); ?></h1>
      </header>
      <div class="entry">
        <p><?php _e( 'We are terribly sorry, but the URL you typed no longer exists. It might have been moved or deleted.', 'tailor' ); ?></p>
      </div>
    </article>
  </div>

</main>

<?php get_footer(); ?>
