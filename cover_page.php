<?php

/*
    Template Name: Cover Page;

*/

?>
<?php get_header() ?>
<?php get_sidebar() ?>

<div id="content">

<?php
  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
  if ($children) { ?>
          <h3><?php the_title() ?></h3>
    <hr>

  <ul id="mainNav">
  <?php echo $children; ?>
  </ul>
<?php } ?>   
                    </div>
                </div>

<?php get_footer() ?>