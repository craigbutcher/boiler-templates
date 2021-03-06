<?php get_header(); ?>

<main role="main">
  <header>
    <h1><a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
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

    </article>

    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

    <?php comments_template( '', true ); ?>

  </div>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
