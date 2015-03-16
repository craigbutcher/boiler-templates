<?php get_header(); ?>

<section role="main" class="blog cf">
  <header>
    <h1><a class="main-logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dwlogo-2.png" alt="Drew Worthley" width="200" height="200" /></a></h1>
  </header>

  <div class="single-post-layout">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <header>
        <h1><?php the_title();?></h1>
      </header>
      <div class="entry">
        <?php the_content(); ?>
      </div>

      <ul class="footer-nav cf">
        <li class="prev"><?php next_post_link('%link', '&laquo; %title ', TRUE); ?></li>
        <li class="next"><?php previous_post_link('%link', '%title &raquo;', TRUE); ?></li>
      </ul>

    <?php comments_template(); ?>

    </article>

    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>



  </div>

  <?php endif; ?>

</section>

<?php get_footer(); ?>
