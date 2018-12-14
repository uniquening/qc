<!-- 装修案例模板 -->
<?php get_header(); ?>
<?php
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;
?>
	<!-- 主体 -->
	<div class="Column-100 moduleTop">
		<div class="Column clearfix">
			<div class="Leader fr">
				当前位置：
				<a href="<?php echo home_url();?>">首页</a>
				&nbsp;&gt;&nbsp;
				<?php
					if ($cat_parent_ID) {
				?>
				<a href="<?php echo get_category_link($cat_parent_ID); ?>"><?php echo get_cat_name($cat_parent_ID);?></a>
				&nbsp;&gt;&nbsp;
				<?php
					} else {
						echo "";
					}
				?>
				<a href="<?php echo get_category_link($cat_ID); ?>"><?php echo get_cat_name($cat_ID);?></a>
			</div>
			<div class="moduleTt news">
				<?php qfl_show_cat_id_slug(4); ?>

			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f68d1cf0043.jpg" class="autoWidth"></div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">
			<ul>
				<?php
					$count = 0;
					$args=array(
						'orderby' => 'id',
						'order' => 'ASC',
						'parent' => 4,
						'number' => 16,
					);
					$categories=get_categories($args);

				?>
				<?php

				foreach($categories as $category) {
					$category_term_id = $category->term_id;
					$count++;
					if ($category_term_id == $cat_ID) {
				?>
					<li class="current">
						<!-- <a href="<?php echo get_category_link(4); ?>">
							<span><?php echo get_cat_name(4); ?></span>
						</a> -->
						<a href="<?php echo get_category_link($category->term_id); ?>">
						<span><?php echo $category->name; ?></span>
					</a>
					</li>
				<?php
					} else {
				?>
				<li>
					<a href="<?php echo get_category_link($category->term_id); ?>">
						<span><?php echo $category->name; ?></span>
					</a>
				</li>
				<?php					
					}
					
				}
				?>



				<!-- <li>
					<a href="http://www.nnxyzs.com/lists/16.html">
						<span>视频样板房</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/77.html">
						<span>公装案例</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/62.html">
						<span>灵感美图</span>
					</a>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="pubSearch clearfix">
			<div class="search fr">
				<form method="post" action="/search" class="form fl">

					<input name="keyword" id="search_keywords" type="text" class="input" placeholder="请输入您要找的小区案例">
					<input name="" type="submit" value="search" class="button"></form>
			</div>
			<dl>
				<dt> <i></i>
					风格
				</dt>
				<dd>
					<?php 
						$qfl_cur_uri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
						$designstyle = 'designstyle';
						$housetype = 'housetype';
						$area = 'area';
						$budget = 'budget';

						
						if (strpos($qfl_cur_uri, $designstyle) !== false) {
							$qfl_cur_uri = $qfl_cur_uri;
						} else {
							$qfl_cur_uri .= '&designstyle=0&housetype=0&area=0&budget=0';
						}
					?>
					<?php
						$terms = get_terms("designstyle");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $designstyle .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $designstyle . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a> ';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								$reg = '/'. $designstyle .'\=\w+/';
								$qfl_cur_uri = preg_replace($reg, $designstyle . '=' . $cur_slug, $qfl_cur_uri);
								echo '<a href="'. $qfl_cur_uri . '">' . $term->name . ' </a> ';

							}
						}
					?>					
				</dd>
			</dl>
			<dl>
				<dt>
					<i></i>
					户型
				</dt>
				<dd>
					<?php
						$terms = get_terms("housetype");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $housetype .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $housetype . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a> ';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								$reg = '/'. $housetype .'\=\w+/';
								$qfl_cur_uri = preg_replace($reg, $housetype . '=' . $cur_slug, $qfl_cur_uri);
								echo '<a href="'. $qfl_cur_uri . '">' . $term->name . ' </a> ';

							}
						}
					?>

				</dd>
			</dl>
			<dl>
				<dt>
					<i></i>
					面积
				</dt>
				<dd>
					<?php
						$terms = get_terms("acreage");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $acreage .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $acreage . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a> ';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								$reg = '/'. $acreage .'\=\w+/';
								$qfl_cur_uri = preg_replace($reg, $acreage . '=' . $cur_slug, $qfl_cur_uri);
								echo '<a href="'. $qfl_cur_uri . '">' . $term->name . ' </a> ';

							}
						}
					?>
				</dd>
			</dl>
			<dl>
				<dt>
					<i></i>
					造价
				</dt>
				<dd>
					<?php
						$terms = get_terms("budget");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $budget .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $budget . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a> ';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								$reg = '/'. $budget .'\=\w+/';
								$qfl_cur_uri = preg_replace($reg, $budget . '=' . $cur_slug, $qfl_cur_uri);
								echo '<a href="'. $qfl_cur_uri . '">' . $term->name . ' </a> ';

							}
						}
					?>
				</dd>
			</dl>
		</div>
		<ul class="CasesList clearfix">

			<?php $count = 0; ?>
			<?php global $post; if (have_posts()) : ?>

			<?php 
			// query_posts('cat=' . $cat_ID .'&ignore_sticky_posts=1&showposts=8'); 
			?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++;
				$post_id = $post->ID;
				if ($count % 4 == 0) {
					echo '<li id="end">';
				} else {
					echo '<li>';
				}
			?>
				<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="imga">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/images/595df94db975e.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"> -->
					<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
					<div class="info">
						设计风格：新中式<?php echo get_post_meta($post_id, '风格', true);?>
						<br>
						建筑类型：复式楼<?php echo get_post_meta($post_id, 'housetype', true);?>
						<br>
						装修面积：240平<?php echo get_post_meta($post_id, 'acreage', true);?>
						<br>
						装修预算：<?php echo get_post_meta($post_id, 'budget', true);?>
						<br></div>
				</a>
				<p> <em class="fe70 f10 fr">新中式<?php echo get_post_meta($post_id, '风格', true);?></em>
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="tt f14"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
				</p>
				<p class="f10 f99 fari"> <em class="fr">READ:<?php if(function_exists('the_views')) { the_views(); } ?></em>
					<em>DATE:<?php the_time('Y-m-d'); ?></em>
				</p>

			<?php
				echo '</li>';
			?>

			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>


		</ul>
	</div>
		<div class="paging">
			<?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
		</div>


	<div class="specListInd_bg" id="specListInd_bg"></div>
	<div class="specListInd" id="specListInd">
		<div class="ht">
			<span>免费报名</span>
			<a href="javascript:;" class="close fr">×</a>
		</div>
		<p class="tips">请必须填写正确信息，以便我们更好的为您服务！</p>

		<form method="post" action="?c=post&amp;f=setok&amp;module_id=132" onsubmit="return specListInd_submit();">
			<input type="hidden" id="tourl" name="tourl" value="goback">
			<input type="hidden" id="tomsg" name="tomsg" value="预约成功，我们将通过电话联系您！">
			<input type="hidden" id="subject" name="subject" value="">
			<input type="hidden" id="spec" name="spec" value="">
			<div class="table ext cls_contact">
				<div class="left">
					<span class="red">*</span>
					真实姓名：
				</div>
				<div class="right">
					<div>
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="contact" id="contact" style="width:180px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table ext cls_phone">
				<div class="left">
					<span class="red">*</span>
					联系电话：
				</div>
				<div class="right">
					<div>
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="phone" id="phone" style="width:180px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table ext cls_house">
				<div class="left">楼盘地址：</div>
				<div class="right">
					<div>
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="house" id="house" style="width:180px;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="left">
					<span class="red">*</span>
					验证码：
				</div>
				<div class="right">
					<input name="sys_check" id="sys_check" type="text" class="input-text" style="width:90px;">
					<img id="imgcode" src="images/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" border="0" align="top"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="html/php.htm"></script>
		<script type="text/javascript">
		function specListInd_submit(){
			var specList_contact = $(".specListInd #contact");
			if(!specList_contact.val()){
					alert("请输入您的称呼");
					specList_contact.focus();
					return false;
			}
			var specList_phone = $(".specListInd #phone");
			if(!(/^1[3|5|8][0-9]\d{7,8}$/.test(specList_phone.val()))){
					alert("手机号码未填写或填写错误");
					specList_phone.focus();
					return false;
			}
			var specList_check = $(".specListInd #sys_check");
			if(!specList_check.val()){
					alert("请输入验证码");
					specList_check.focus();
					return false;
			}
			getid("_phpok_submit").disabled = true;
			return true;
		}
		</script>
		<script type="text/javascript"></script>
	</div>
	<div class="hr30"></div>

	<!-- /主体 -->


<?php get_footer(); ?>