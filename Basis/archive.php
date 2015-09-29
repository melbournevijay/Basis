<?php get_header(); ?>

<main role="main">
	<?php if (have_posts()) : ?>

	<h1>
		<?php if (is_day()) : ?>
			<?php printf(__('Daily Archives: %s', 'basis'), get_the_date()); ?>
		<?php elseif (is_month()) : ?>
			<?php printf(__('Monthly Archives: %s', 'basis'), get_the_date('F Y')); ?>
		<?php elseif (is_year()) : ?>
			<?php printf(__('Yearly Archives: %s', 'basis'), get_the_date('Y')); ?>
		<?php else : ?>
			<?php single_cat_title(); ?>
		<?php endif; ?>
	</h1>

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('partials/loop', 'list'); ?>
	<?php endwhile; ?>

	<?php get_template_part('partials/part', 'pagination'); ?>

	<?php else : ?>

		<?php get_template_part('partials/part', 'not_found'); ?>

	<?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>