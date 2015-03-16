<?php get_header(); ?>

<div class="content">
  <?php if ( have_posts() ) : ?>
    <h1 class="small-header"><?php _e( 'Blog Archives', 'tailor' ); ?></h1>
    <?php get_template_part( 'loop' ); ?>
  <?php else : ?>
    <p><?php _e( 'No posts found.', 'tailor' ); ?></p>
  <?php endif; ?>
</div><!--end content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
