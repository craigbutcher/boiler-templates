<?php
/*
 * Template Name: Default
 *
 */

get_header(); ?>

<main role="main" class="blog">
  <header>
    <h1><a class="main-logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dwlogo-2.png" alt="Drew Worthley" width="200" height="200" /></a></h1>
  </header>

  <div class="single-page-layout">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <header>
        <h1><?php the_title();?></h1>
      </header>
      <div class="entry">
        <?php the_content(); ?>
      </div>

    </article>

    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>



  </div>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
