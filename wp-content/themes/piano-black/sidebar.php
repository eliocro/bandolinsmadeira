<div id="right-col">

 <?php $options = get_option('pb_options'); ?>
 <?php if ($options['show_information']) : ?>
 <h3 class="side-title" id="information-title"><?php if($options['information_title']) { echo ($options['information_title']); } else { _e('INFORMATION','piano-black'); } ?></h3>
 <div class="information-contents">
 <?php if($options['information_contents']) { echo ($options['information_contents']); } else { _e('Change this sentence and title from admin Theme option page.','piano-black'); } ?>
 </div>
 <?php endif; ?>

<div id="lessons">
  <h3 class="side-title">MANDOLIN LESSONS</h3>
  <iframe width="270" height="220" src="//www.youtube-nocookie.com/embed/videoseries?list=PL97636CEFED3F437D" frameborder="0" allowfullscreen></iframe>
</div>

<div id="highlights">
	<h3 class="side-title">ON FACEBOOK</h3>
	<div style="margin-left: -10px; width: 292px;">
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fbandolinsmadeira&amp;width=290&amp;height=400&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=293769500831812" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:290px; height:400px;" allowTransparency="true"></iframe>
	</div>
</div>

<div id="highlights">
  <h3 class="side-title">XXVIII ENCONTRO</h3>
  <img src="<?php bloginfo('template_url'); ?>/img/encontro_regional_2013.jpg" >
</div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('top') ) : ?>
 <div id="side-top">
  <div class="side-box">
   <h3 class="side-title"><?php _e('RECENT ENTRY','piano-black'); ?></h3>
   <ul>
    <?php $myposts = get_posts('numberposts=5'); foreach($myposts as $post) : ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
   </ul>
  </div>
 </div>
 <div id="side-left-ex">
  <div class="side-box-short">
   <h3 class="side-title"><?php _e('CATEGORY','piano-black'); ?></h3>
   <ul>
    <?php wp_list_cats('sort_column=name'); ?>
   </ul>
  </div>
 </div>
 <div id="side-right-ex">
  <div class="side-box-short">
   <h3 class="side-title"><?php _e('ARCHIVES','piano-black'); ?></h3>
   <ul>
    <?php wp_get_archives('type=monthly'); ?>
   </ul>
  </div>
 </div>
 <div id="side-bottom-ex">
  <div class="side-box">
   <h3 class="side-title"><?php _e('LINKS','piano-black'); ?></h3>
   <ul>
    <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
   </ul>
  </div>
 </div>
 <?php endif; ?>

 <div id="side-left">
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left') ) : ?>
 <?php endif; ?>
 </div>

 <div id="side-right">
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right') ) : ?>
 <?php endif; ?>
 </div>

 <div id="side-bottom">
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bottom') ) : ?>
 <?php endif; ?>
 </div>

 <center><img src="<?php bloginfo('template_url'); ?>/img/abm.png" ></center>

 <div class="side-box">
  <ul id="copyrights">
   <li>
      <?php
           global $wpdb;
           $post_datetimes = $wpdb->get_row($wpdb->prepare("SELECT YEAR(min(post_date_gmt)) AS firstyear, YEAR(max(post_date_gmt)) AS lastyear FROM $wpdb->posts WHERE post_date_gmt > 1970"));
           if ($post_datetimes) {
             $firstpost_year = $post_datetimes->firstyear;
             $lastpost_year = $post_datetimes->lastyear;
             $copyright = __('&copy;&nbsp; ', 'piano-black') . $firstpost_year;
             if($firstpost_year != $lastpost_year) {
               $copyright .= '-'. $lastpost_year;
             }
             $copyright .= ' ';
             echo $copyright;
           }
       ?>
    &nbsp;<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></li>
   <li><?php _e('Theme designed by <a href="http://www.mono-lab.net/">mono-lab</a>','piano-black'); ?> / <a href="http://www.projecto24.com/" target="_blank">Projecto24</a></li>
   <li id="wp"><?php _e('Powered by <a href="http://wordpress.org/">WordPress</a>','piano-black'); ?></li>
  </ul>
 </div>

</div><!-- #left-col end -->
