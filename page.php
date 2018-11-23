<?php get_header() ?>
<?php get_sidebar() ?>

<div id="content">

<?php while(have_posts()): the_post();?>
    
    <h3><?php the_title()?></h3>
    <hr>
    <?php the_content();?>
    
    <?php endwhile;?>    
                    </div>
                </div>

<?php get_footer() ?>