<?php get_header(); ?>
<?php $options = get_option('pb_options'); ?>
  <div id="middle-contents" class="clearfix">

   <div id="left-col">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="post">
     <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
     <ul class="post-info">
      <li><?php the_time(__('F jS, Y', 'piano-black')) ?></li>
      <?php if ($options['author']) : ?><li><?php _e('By ','piano-black'); ?><?php the_author_posts_link(); ?></li><?php endif; ?>
      <li class="write-comment"><a href="<?php the_permalink() ?>#comments"><?php _e('Write comment','piano-black'); ?></a></li>
      <?php edit_post_link(__('[ EDIT ]', 'piano-black'), '<li class="post-edit">', '</li>' ); ?>
     </ul>
     <div class="post-content">
       <?php the_content(__('Read more', 'piano-black')); ?>
       <?php wp_link_pages(); ?>
       
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style" style="padding: 0 0 0px 0px; position: relative; float: right;">
<a class="addthis_button_facebook_like" addthis:url="<?php the_permalink() ?>" addthis:title="<?php the_title(); ?>"></a>
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4c65cf51321f0bfe" class="addthis_button_compact" addthis:url="<?php the_permalink() ?>" addthis:title="<?php the_title(); ?>">Share</a>
<span class="addthis_separator">|</span>
<a class="addthis_button_facebook" addthis:url="<?php the_permalink() ?>" addthis:title="<?php the_title(); ?>"></a>
<a class="addthis_button_myspace" addthis:url="<?php the_permalink() ?>" addthis:title="<?php the_title(); ?>"></a>
<a class="addthis_button_google" addthis:url="<?php the_permalink() ?>" addthis:title="<?php the_title(); ?>"></a>
<a class="addthis_button_twitter" addthis:url="<?php the_permalink() ?>" addthis:title="<?php the_title(); ?>"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4c65cf51321f0bfe"></script>
<div style="clear: both;"></div>
<!-- AddThis Button END -->


     </div>
    </div>
    <div class="post-meta">
     <ul class="clearfix">
      <?php if($options['post_meta_type'] == 'category') { ?>
      <li class="post-category"><?php the_category(' . '); ?></li>
      <?php } else { ?>
      <?php the_tags('<li class="post-tag">', ' . ', '</li>'); ?>
      <?php } ?>
      <li class="post-comment"><?php comments_popup_link(__('Write comment', 'piano-black'), __('1 comment', 'piano-black'), __('% comments', 'piano-black')); ?></li>
     </ul>
    </div>


<?php endwhile; ?>

<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>

<a href="#pngfix-right" id="back-top" class="clear"><?php _e('Return top','piano-black'); ?></a>

<?php else: ?>
    <div class="common-navi-wrapper">
      <p><?php _e("Sorry, but you are looking for something that isn't here.","piano-black"); ?></p>
    </div>
<?php endif; ?>

   </div><!-- #left-col end -->

   <?php get_sidebar(); ?>

  </div><!-- #middle-contents end -->

<?php get_footer(); ?>