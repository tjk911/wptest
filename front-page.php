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
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr-transitions.js"></script>
  </head>
  <body <?php body_class(); ?>>

  <div class="off-canvas-wrap">
  <div class="inner-wrap">

  <header class="row" role="banner">
    <div class="large-12" id="header" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -200px;" data-magellan-destination="home">
      
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
          <!-- <ul class="off-canvas-list">
            <li data-magellan-arrival="home"><a href="#home">Home</a></li>
            <li data-magellan-arrival="bio"><a href="#bio">Bio</a></li>
            <li data-magellan-arrival="skills"><a href="#skills">Skills</a></li>
            <li data-magellan-arrival="photo"><a href="#photo">Photography</a></li>
            <li data-magellan-arrival="coding"><a href="#coding">Coding</a></li>
            <li data-magellan-arrival="resume"><a href="#resume">Resume</a></li>
            <li data-magellan-arrival="contact"><a href="#contact">Contact</a></li>
          </ul> -->
        </aside>
        <a name="home"></a>
        <div class="centervh"><h1 id="whitefont" style="font-size:10vh;">Kai Teoh</h1>
          <h2 id="whitefont" style="font-size:4vh;">I make things happen</h2>
          <a href="#intro" class="button" id="tab">Learn More</a>
        </div>

    </div>
  </header>
  
<!--         <div class="top-bar-container contain-to-grid show-for-medium-up">
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
        </div> -->



<section class="container" role="document">
  <div class="row">
    <div class="large-12 columns" style="height:30vh;" id="blackfont">
      <div class="center" >
        <a name="bio"></a>
        <h3 data-magellan-destination="bio" id="blackfont">Coder, Photographer, Journalist</h3>
        <p id="blackfont">I am a photojournalist that fell through the rabbit hole into the world of<br> <i>data viz</i> and <i>web development</i>. I move fast and make things.</p>
      </div>
    </div>
    <div class="large-12 columns" style="background:#36B0B5;height:100vh;">
      <div class="center">
        <a name="skills"></a>
        <h3 data-magellan-destination="skills" id="whitefont">List off my l33t skills</h3>
        <div class="large-6 columns">Skill1</div>
        <div class="large-6 columns">Skill2</div>
      </div>
    </div>
    <div class="large-12 columns center transitions-enabled" style="height:auto;">
      <a name="photo"></a>
      <h3 data-magellan-destination="photo" id="blackfont">I'm a BAMF photographer</h3>
      
      <?php query_posts('category_name=featured'); ?>
        <?php if ( have_posts() ) : ?>
          <div id="container">
              <?php $i = 1; echo '<div class="box col4">'; while ( have_posts() ): the_post();?>
              <?php if ( has_post_thumbnail() ): ?>
                  <?php the_post_thumbnail('thumb-medium border'); ?>
              <?php endif; ?>
              <?php if($i % 1 == 0) { echo '</div><div class="box col4">'; } $i++; endwhile; echo '</div>';?>
          </div>
        <?php endif; ?>
        <div class="large-12 columns">
          <?php
              // Get the ID of a given category
              $category_id = get_cat_ID( 'photography' );

              // Get the URL of this category
              $category_link = get_category_link( $category_id );
          ?>
          <a href="<?php echo esc_url(  $category_link ); ?>" class="button">Photos and shit</a>
        </div>


      
      <!-- <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/065/JKT-8417,medium_large.jpg?1376348261"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/067/JKT-7980,medium_large.jpg?1377563013"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/005/JKT-5966-1,large.jpg?1370573137"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/051/0326-leblanc-student-1,medium_large.jpg?1370974723"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/057/STC-0226-children-homes-1,medium_large.jpg?1370974735"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/056/hockey-4,medium_large.jpg?1370974733"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/006/JKT-6562-2-2,large.jpg?1370573150"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/050/0309-sequester-1,medium_large.JPG?1370974722"></div>

      <div class="box col3"><img class="opac" src="http://kaiteoh.com/storage/cache/images/000/056/hockey-4,medium_large.jpg?1370974733"></div> -->


                                  
    </div>
    <div class="large-12 columns" style="background:#36b0b5;height:100vh;">
      <div class="center">
        <a name="coding"></a>
        <h3 data-magellan-destination="coding" id="whitefont">I'm a BAMF coder</h3>
      </div>
    </div>
    <div class="large-12 columns" style=";height:30vh;">
      <div class="center">
        <a name="resume"></a>
        <h3 data-magellan-destination="resume" id="blackfont">resume and shit</h3>
      </div>
    </div>
    <div class="large-12 columns" style="background:#36b0b5;height:30vh;">
      <div class="center">
        <a name="contact"></a>
        <h3 data-magellan-destination="contact" id="whitefont">Contact</h3>
      </div>
    </div>


<?php
get_sidebar();
get_footer();
