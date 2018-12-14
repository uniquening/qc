<?php get_header(); ?>
	<!-- 主体 -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>