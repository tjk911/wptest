


	</div>
</section>

<footer class="row"><?php dynamic_sidebar("Footer"); ?></footer>
<a class="exit-off-canvas"></a>

  </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skrollr.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.js"></script>
<script type='text/javascript'>//<![CDATA[ 
  $(window).load(function(){
  $(".opac")
      .on("mouseover focus",  function() { $(this).animate({ opacity: 1 }); })
      .on("mouseleave blur", function() { 
          if ( $(this).val() == '' && !$(this).is(":focus") ) {
              $(this).animate({ opacity: .7 });
          }
      });

  });//]]>  

</script>
<script>
  var $container = $('#container');
  $container.imagesLoaded( function(){
    $container.masonry({
      itemSelector: '.box',
          isAnimated: !Modernizr.csstransitions,
          isFitWidth: true
    }); 
  });
</script>
<script type="text/javascript">
skrollr.init({
	mobileDeceleration: 0.010,
	smoothScrolling: true,
    forceHeight: false,

});
</script>
</body>
</html>