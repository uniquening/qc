<!-- 设计团队 -->
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
				<?php qfl_show_cat_id_slug(5); ?>

			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f689549522a.jpg" class="autoWidth"></div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>

			<?php
				$args=array(
					'orderby' => 'id',
					'order' => 'ASC',
					'parent' => 5,
					'number' => 8,
				);
				$categories=get_categories($args);
				foreach($categories as $category) {
					$category_term_id = $category->term_id; 
					if ($category_term_id == $cat_ID) {
						echo '<li class="current">';
					} else {
						echo '<li>';
					}
					echo '<a href="' . get_category_link($category_term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';										     
				}
			?>
<!-- 				<li class="current">
					<a href="http://www.nnxyzs.com/lists/19.html">
						<span>集成整装设计</span>
					</a>
				</li>

				<li>
					<a href="http://www.nnxyzs.com/lists/20.html">
						<span>汇东设计部</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/21.html">
						<span>尚品设计院</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/22.html">
						<span>余工设计楼</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/75.html">
						<span>媒体专访</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/81.html">
						<span>富安居设计</span>
					</a>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="hr20"></div>

		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/94fdc15e0cbf4f2d89c8d4cd737a371a.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".pubSearch .input").placeholder();});</script>
		<ul class="TeamList clearfix">

			<?php $count = 0 ?>
			<?php if (have_posts()) : ?>
			<?php 
				query_posts('cat=' . $cat_ID . '&caller_get_posts=1&showposts=12'); 
			?>
			<?php while (have_posts()) : the_post(); ?>
			<?php 
				$post_id = $post->ID;	
				$count++;
				if ($count % 4 == 0) {
					echo '<li id="end">';
				} else {
					echo '<li>';
				}
			 ?>
				<p class="show fari">DESIGNER SHOW</p>
				<div class="info">
					<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="免费预约"  class="pubOrder fr">免费预约</a> <i class="cup fl"></i>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="name fl"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
					<p class="fl">
						<?php echo get_post_meta($page_id, '公司职务', true) ?>
						<br><?php echo get_post_meta($page_id, '工作经验', true) ?>年经验</p>
				</div>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="imga">
					<?php include(TEMPLATEPATH . '/thumbnail.php'); ?>
					<!-- <img src="<?php bloginfo('template_directory'); ?>/images/58219756e2c7e.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"> -->
				</a>
				<div class="cases">
					<a href="<?php echo qfl_catch_works_link(0, $post_id) ?>" title="<?php echo qfl_catch_works_title(0, $post_id) ?>" class="fl">
						<img src="<?php qfl_catch_thumbnail_image(0, $post_id); ?>" alt="<?php echo $current_post_works1->post_title; ?>"></a>
					<a href="<?php echo qfl_catch_works_link(1, $post_id) ?>" title="<?php echo qfl_catch_works_title(1, $post_id) ?>" class="fl" id="end">
						<img src="<?php qfl_catch_thumbnail_image(1, $post_id); ?>" alt="<?php echo $current_post_works2->post_title; ?>"></a>
				</div>	
			<?php echo '</li>'; ?>
			<!--需要循环的模块-->
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>

		</ul>

		<div class="paging">
			<?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
		</div>

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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/images/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" border="0" align="top"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/php.htm"></script>
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