<?php get_header() ?>
<?php get_sidebar() ?>

<div id="content">
     
	<?php while(have_posts()): the_post();?>
    <div class="postTitle"><h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3><div>
	<?php the_excerpt();?>
	<p id="postDate"><?php the_date();?><p>
    <hr>
    <?php endwhile;?>

                    </div>
                </div>

<?php get_footer() ?>