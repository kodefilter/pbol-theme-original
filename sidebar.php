<div class="widgetBox">
	<div id="recentPost" class="widgets">
		<h3>Lastest News</h3>
		<ul>
	<?php
	$args = array( 'numberposts' => '4' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><h4><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a></h4></li> ';
	}
?>
</ul>
	</div>
	
	<div id=contactInfo class="widgets">
	<h3> Contact Information </h3>
		<ul>
			<li id="contactPhone">+358(10)2722712</li>
			<li id="contactAddress">Rantakatu 5 92100 <br>Raahe Finland</li>
		</ul>
	
	</div>
	
	<div id="searchBox" class="widgets">
		<form role="search" method="get" id="searchform" action="http://localhost:8888/wordpress/">
            <div>
                <input type="text" value="" name="s" id="s">
                <input type="submit" id="searchsubmit" value="Search">
            </div>
        </form>
	</div>
	
</div>
                </div>
                <div id="right">
                    <div id="topBar">
                        <ul>
                            <li><a href="http://localhost:8888/wordpress/wp-admin/">Site Admin</a></li>
                            <li><a href="javascript:" onclick="setActiveStyleSheet('contrast')" >Contrast</a> | <a href="javascript:" onclick="setActiveStyleSheet('style')" >Normal</a></li>
							<li><a href="javascript:increaseFontSize();">A+</a> | <a href="javascript:decreaseFontSize();">A-</a></li>
                            <li>
                            	
                            
                                
                            </li>
                        </ul>  
                    </div>