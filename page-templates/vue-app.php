<?php
/*
Template Name: Vue App
*/

get_header(); ?>

	<main class="main_wrapper">

		<?php while ( have_posts() ) : the_post(); ?>

			<header class="page_header">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</header>

			<div class="page_content">
				<div class="container">
					<div id="vue-app"></div>
				</div>
			</div>

		<?php endwhile; ?>

	</main>

<?php get_footer(); ?>
