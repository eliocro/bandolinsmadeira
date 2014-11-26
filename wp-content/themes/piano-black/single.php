<?php get_header(); ?>
<?php $options = get_option('pb_options'); ?>

  <div id="middle-contents" class="clearfix">

   <div id="left-col">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="post" id="single">
     <h2><?php the_title(); ?></h2>
     <ul class="post-info">
      <li><?php the_time(__('F jS, Y', 'piano-black')) ?></li>
      <li><?php _e('Posted in ','piano-black'); ?><?php the_category(' . '); ?></li>
      <?php if ($options['author']) : ?><li><?php _e('By ','piano-black'); ?><?php the_author_posts_link(); ?></li><?php endif; ?>
      <li class="write-comment"><a href="#respond"><?php _e('Write comment','piano-black'); ?></a></li>
      <?php edit_post_link(__('[ EDIT ]', 'piano-black'), '<li class="post-edit">', '</li>' ); ?>

     </ul>
     <div class="post-content">
       <?php the_content(__('Read more', 'piano-black')); ?>
       <?php wp_link_pages(); ?>
     </div>

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style" style="padding: 0 0 20px 0; top: -10px; postion: relative; float: right;">
<a class="addthis_button_facebook_like"></a>
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4c65cf51321f0bfe" class="addthis_button_compact">Share</a>
<span class="addthis_separator">|</span>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_myspace"></a>
<a class="addthis_button_google"></a>
<a class="addthis_button_twitter"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4c65cf51321f0bfe"></script>
<div style="clear: both;"></div>
<!-- AddThis Button END -->

    </div>

<?php endwhile; else: ?>
    <div class="post-content">
      <p><?php _e("Sorry, but you are looking for something that isn't here.","piano-black"); ?></p>
    </div>
<?php endif; ?>

<?php if (function_exists('wp_list_comments')) { comments_template('', true); } else { comments_template(); } ?>

   </div><!-- #left-col end -->

   <?php get_sidebar(); ?>

  </div><!-- #middle-contents end -->

<?php get_footer(); ?>