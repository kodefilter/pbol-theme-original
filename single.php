<?php get_header() ?>
<?php get_sidebar() ?>

<div id="content">

<?php while(have_posts()): the_post();?>
    
    <h3><?php the_title()?></h3>
    <?php the_content();?>
    <div style=" color: red; font-weight: bold; "><?php the_date() ?></div>
    <br>
    <br>
	<div style="margin-right: 350px;
	display:inline;"><?php previous_post_link('%link', 'Link To Previous News'); ?></div>    
	<?php next_post_link('%link', 'Link To Next News'); ?> 
    
    <?php endwhile;?>
  
                    </div>
                </div>

<?php get_footer() ?>