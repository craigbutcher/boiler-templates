<?php

/**
 * Template Name: About/Services/Team Page Template
 * Description: About/Services/Team Page Template
 *
 */

get_header(); ?>

		<?php if(!is_front_page()):?>
		
		<div id="pageHead">

		<?php

if (
	is_page('mortgageadvice') ||
	is_page('pensionsandinvestments') ||
	is_page('protectionandinsurance')
) {
?>
	<h1>Smart <span class="pageHead-color">Services</span></h1>
<?php	
} elseif (is_page('aboutsmartadvicefinancialsolutions')) {
?>
	<h1><span class="pageHead-color">About</span> <?php the_title();?></h1>
<?php
} else if (is_page('meet-the-team')) {
   	'<h1><span class="pageHead-color">About</span> Smart Advice Financial Solutions</span></h1>';
}

?>

		</div>

		<?php endif; ?>					 
		<div class="page-content clearfix">
			<?php while (have_posts()) : the_post(); ?>
			    <div class="post">						
					<?php the_content(); ?>				
				</div>				
			<?php endwhile; ?>					    	
		</div>

<?php get_sidebar(); ?>



<?php

if (
	is_page('mortgageadvice') ||
	is_page('aboutsmartadvicefinancialsolutions')
) {
?>
	<?php get_footer('statement'); ?>
<?php
} else  {
?>
	<?php get_footer(); ?>
<?php } ?>
