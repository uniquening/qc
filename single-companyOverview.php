<?php
/*
Template Name Posts: 公司简介companyOverview
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();

$current_cat = $category[0]->cat_name;

$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 65;
$cur_par_cat = get_category($cur_par_cat_ID);
$cur_par_cat_slug = $cur_par_cat->slug;
$cur_par_cat_name = get_cat_name($cur_par_cat_ID);
?>
<?php get_header(); ?>
	<!-- 主体 -->
	<div class="Column-100 moduleTop">
		<div class="Column clearfix">
			<div class="Leader fr">
				当前位置：
				<a href="<?php bloginfo('home_url'); ?>">首页</a>
				&nbsp;&gt;&nbsp;
				<a href="<?php echo get_category_link($current_cat_ID); ?>"><?php echo $current_cat;?></a>
				&nbsp;&gt;&nbsp;
				<a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
			</div>
			<div class="moduleTt news">
				<!--<span style="font-size:40px;color:#fff;font-weight:blod;"><?php echo $cur_par_cat_slug ?></span>
				<span style="font-size:30px;color:#fff;"><?php echo $cur_par_cat_name ?></span> -->
				<?php qfl_show_cat_id_slug(65); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f68af30afa6.jpg" class="autoWidth">
	</div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">
			<ul>
				<?php $var = null; 
					global $post;
					
				?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=65' . $mcatID. '&caller_get_posts=1&showposts=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $current_id = $post->ID; ?>
				<?php 
					if ($page_id == $current_id) {
						echo '<li class="current">';
					} else {
						echo '<li>';
					}
				?>
					<a href="<?php the_permalink(); ?>">
						<span><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></span>
					</a>
					<?php echo '</li>';?>
				<!--需要循环的模块-->
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 

				<!--<li>
					<a href="http://www.nnxyzs.com/page/43.html">
						<span>公司简介</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/47.html">
						<span>公司荣誉</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/48.html">
						<span>人才招聘</span>
					</a>
				</li>
				<li class="current">
					<a href="http://www.nnxyzs.com/lists/49.html">
						<span>联系我们</span>
					</a>
				</li>

				<li>
					<a href="http://www.nnxyzs.com/page/73.html">
						<span>星艺材料概述</span>
					</a>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<!--需要循环的模块-->
		<?php endwhile; ?>
		<?php endif; wp_reset_query(); ?> 
	</div>



	<!-- /主体 -->

<?php get_footer(); ?>