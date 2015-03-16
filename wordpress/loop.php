<main role="main" class="frontpage">
  <header>
    <h1><a class="main-logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dwlogo-2.png" alt="Drew Worthley" width="200" height="200" /></a></h1>
  </header>


<?php if ( have_posts() ) : ?>

<?php query_posts('cat=1&posts_per_page=11');?>
  <?php while ( have_posts() ) : the_post(); ?>


      <a class="post-image-box" href="<?php the_permalink(); ?>">

      <?php the_post_thumbnail( array(200,200) ); ?>

        <div class="blog-info">
          <header>
            <h1><?php the_title();?></h1>
            <h2 class="post-date"><?php the_time( __( 'j F Y', 'tai' ) ); ?></h2>
          </header>
        </div>
      </a>

  <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<?php wp_reset_query()?>
  <?php else : ?>
<?php endif; ?>


</main><!-- end main -->
