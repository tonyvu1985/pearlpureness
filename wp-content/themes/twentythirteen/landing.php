<?php
/**
 * Template Name: Pearlpureness Landing Page
 *
 */

get_header(); ?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
       		 <div class="pearlpureness-welcome">               
			<!-- get page welcome -->	
			<?php $welcome = get_page(20);?>
			<header class="entry-header">
				<h1 class="entry-title"><?php echo $welcome->post_title ?></h1>
			</header>
			<div class="entry-content">
			 	<?php echo $welcome->post_content; ?>
			</div>
		</div>
		<div class="pearlpureness-trust">
			<img src="" alt="" />
		</div>
        </div><!-- #content -->
        
    </div><!-- #primary -->
   
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
