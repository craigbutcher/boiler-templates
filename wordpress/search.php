<?php get_header(); ?>
  <h1><?php printf( __( "Search results for '%s'", "tailor" ), get_search_query() ); ?></h1>
  <?php if ( have_posts() ) : ?>
    <?php get_template_part( 'loop' ); ?>
  <?php else : ?>
    <div>
      <p><?php printf( __( 'Sorry, your search for "%s" did not turn up any results. Please try again.', 'tailor' ), get_search_query());?></p>
      <?php get_search_form(); ?>
    </div>
  <?php endif; ?>


  <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <label class="hidden" for="s"><?php _e('Search for:'); ?></label>
      <div>
        <input type="text" value="Search & Hit Enter" name="s" id="s" onfocus="if (this.value == 'Search & Hit Enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search & Hit Enter';}" />
        <input type="submit" id="searchsubmit" value="Search" />
      </div>
  </form>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
