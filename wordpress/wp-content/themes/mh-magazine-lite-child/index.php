<?php get_header(); ?>

<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-loop mh-content" role="main">
		<div id="main-content1" class="mh-loop mh-content" role="main" itemprop="mainContentOfPage">
			<h2>Actualités</h2>

			<?php
			$args = array('category_name' => "Actualités" );
			$posts = get_posts($args);
			get_template_part( 'template-parts/content_loop_post');
			?>
			
		<h2>Elections</h2>
		<?php

		$args = array('category_name' => "Elections" );
		$posts = get_posts($args);
		get_template_part( 'template-parts/content_loop_post');

		?>

		<h2>Divers</h2>

		<?php
		$args = array('category_name' => "Divers" );
		$posts = get_posts($args);
		get_template_part( 'template-parts/content_loop_post');
		?>

		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
