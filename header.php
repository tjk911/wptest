<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <div class="off-canvas-wrap">
  <div class="inner-wrap">

  <nav class="tab-bar show-for-small-only">
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    </section>
    <section class="middle tab-bar-section">
      
      <h1 class="title"><?php bloginfo( 'name' ); ?></h1>

    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>

  <div class="top-bar-container contain-to-grid show-for-medium-up">
      <nav class="top-bar" data-topbar="">
          <ul class="title-area">
              <li class="name">
                  <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
              </li>          
          </ul>
          <section class="top-bar-section">
              <?php foundationPress_top_bar_l(); ?>
              <?php foundationPress_top_bar_r(); ?>
          </section>
      </nav>
  </div>

<!-- <header class="row" role="banner" style="height:auto;">
  <div data-magellan-expedition="fixed">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>
      <section class="right-section">
        <dl class="sub-nav hide-for-small">
          <dd data-magellan-arrival="home"><a href="#home">Home</a></dd>
          <dd data-magellan-arrival="bio"><a href="#bio">Bio</a></dd>
          <dd data-magellan-arrival="skills"><a href="#skills">Skills</a></dd>
          <dd data-magellan-arrival="photo"><a href="#photo">Photography</a></dd>
          <dd data-magellan-arrival="coding"><a href="#coding">Coding</a></dd>
          <dd data-magellan-arrival="resume"><a href="#resume">Resume</a></dd>
          <dd data-magellan-arrival="contact"><a href="#contact">Contact</a></dd>
        </dl>

      </section>
    </nav>
  </div>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
 -->    <!-- <ul class="off-canvas-list">
      <li data-magellan-arrival="home"><a href="#home">Home</a></li>
      <li data-magellan-arrival="bio"><a href="#bio">Bio</a></li>
      <li data-magellan-arrival="skills"><a href="#skills">Skills</a></li>
      <li data-magellan-arrival="photo"><a href="#photo">Photography</a></li>
      <li data-magellan-arrival="coding"><a href="#coding">Coding</a></li>
      <li data-magellan-arrival="resume"><a href="#resume">Resume</a></li>
      <li data-magellan-arrival="contact"><a href="#contact">Contact</a></li>
    </ul> -->
  <!-- </aside>
</header> -->


<section class="container" role="document">
  <div class="row">