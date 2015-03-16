<!doctype html>
<html <?php language_attributes( 'html' ) ?>>
<head>
  <title><?php wp_title(''); ?></title>

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:300|Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>

  <!-- Basic Meta Data -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width">

  <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="http://drewworthley.co.uk/feed" />

  <!--[if lt IE 9]>
       <script src="<?php bloginfo('stylesheet_directory'); ?>/js/html5shiv.min.js"></script>
       <script src="<?php bloginfo('stylesheet_directory'); ?>/js/selectivizr-min.js"></script>
       <script src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.min.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- ADD MODERNIZR here -->

  <!-- WordPress -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<section role="masthead" class="cf">
  <header>
    <h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dwlogo-2.png" alt="Drew Worthley" width="200" height="200" /></a></h1>
  </header>

<?php wp_nav_menu(
  array(
    'theme_location' => 'primary',
    'container_class' => 'nav',
    'menu' => 'dw'
  )
); ?>

</section><!-- ./masthead -->
