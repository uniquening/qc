<?php get_header(); ?>
<?php
    // global $wp_query;
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;
    // echo $category->slug;
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
		<img src="<?php bloginfo('template_directory'); ?>/images/59f6883fa2b35.jpg" class="autoWidth"></div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>
			<?php
				$args=array(
					'orderby' => 'id',
					'order' => 'ASC',
					'parent' => 67,
					'number' => 5,
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
<!-- 				<li>
					<a href="http://www.nnxyzs.com/lists/8.html">
						<span>热装楼盘</span>
					</a>
				</li>
				<li class="current">
					<a href="http://www.nnxyzs.com/lists/9.html">
						<span>工地开口说话</span>
					</a>
				</li>
 -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="pubSearch clearfix">
			<dl>
				<dt> <i></i>
					地区
				</dt>
				<dd>
					<?php 
						$qfl_cur_uri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
						$area = 'area';
						$consite = 'consite';
						$housetype = 'housetype';
						$designstyle = 'designstyle';
						if (strpos($qfl_cur_uri, $area) !== false) {
							$qfl_cur_uri = $qfl_cur_uri;
						} else {
							$qfl_cur_uri .= '&area=0&consite=0&housetype=0&designstyle=0';
						}
					?>
					<?php
						$terms = get_terms("area");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $area .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $area . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a>';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								$reg = '/'. $area .'\=\w+/';
								$qfl_cur_uri = preg_replace($reg, $area . '=' . $cur_slug, $qfl_cur_uri);
								echo '<a href="'. $qfl_cur_uri . '">' . $term->name . ' </a> ';

							}
						}
					?>
				</dd>
			</dl>
			<dl>
				<dt>
					<i></i>
					施工进度
				</dt>
				<dd>
					<?php 
						$qfl_cur_uri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

						// echo $qfl_cur_uri;
						// echo "<br>";
						$consite = 'consite';
						if (strpos($qfl_cur_uri, $consite) !== false) {
							$qfl_cur_uri = $qfl_cur_uri;
						} else {
							$qfl_cur_uri .= '&area=0&consite=0&housetype=0&designstyle=0';
						}
						// echo $qfl_cur_uri;
					?>
					<?php
						$terms = get_terms("consite");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $consite .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $consite . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a>';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								
								$qfl_cur_uri = preg_replace($reg, $consite . '=' . $cur_slug, $qfl_cur_uri);
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
						$qfl_cur_uri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

						// echo $qfl_cur_uri;
						// echo "<br>";
						if (strpos($qfl_cur_uri, $housetype) !== false) {
							$qfl_cur_uri = $qfl_cur_uri;
						} else {
							$qfl_cur_uri .= '&area=0&consite=0&housetype=0&designstyle=0';
						}
						// echo $qfl_cur_uri;
					?>
					<?php
						$terms = get_terms("housetype");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $housetype .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $housetype . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a>';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								
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
					风格
				</dt>
				<dd>
					<?php 
						$qfl_cur_uri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

						// echo $qfl_cur_uri;
						// echo "<br>";
						if (strpos($qfl_cur_uri, $designstyle) !== false) {
							$qfl_cur_uri = $qfl_cur_uri;
						} else {
							$qfl_cur_uri .= '&area=0&consite=0&housetype=0&designstyle=0';
						}
						// echo $qfl_cur_uri;
					?>
					<?php
						$terms = get_terms("designstyle");
						$num = 0;
						$count = count($terms);
						$reg = '/'. $designstyle .'\=\w+/';
						$qfl_cur_uri = preg_replace($reg, $designstyle . '=0', $qfl_cur_uri);
						echo '<a href="' . $qfl_cur_uri  .'" class="active">全部</a>';
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								$cur_slug = $term->slug;
								
								$qfl_cur_uri = preg_replace($reg, $designstyle . '=' . $cur_slug, $qfl_cur_uri);
								echo '<a href="'. $qfl_cur_uri . '">' . $term->name . ' </a> ';

							}
						}
					?>					
				</dd>
			</dl>			
		</div>
		<ul class="ThinkList clearfix">
			<?php $count = 0; ?>
			<?php global $post; if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++; 
				$post_id = $post->ID;
			?>
			<li>
				<div class="ct">
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="imga fl">
						<!-- <img src="<?php bloginfo('template_directory'); ?>/images/584f6c5beb9c4.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"> -->
						<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
					</a>
					<div class="txt fl">
						<h3>
							<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
						</h3>
						<?php  ?>
						<div class="ReservaList clearfix"> <em>地区：<?php echo get_post_meta($post_id, 'area', true); ?></em> <em>阶段：<?php echo get_post_meta($post_id, 'phase', true); ?></em>
							<em>户型：<?php echo get_post_meta($post_id, 'housetype', true); ?></em>
							<em>面积：<?php echo get_post_meta($post_id, 'acreage', true); ?></em>
							<em>预算：<?php echo get_post_meta($post_id, 'budget', true); ?>万</em>

							<p class="fl">
								<a href="<?php the_permalink() ?>" title="查看详情" class="fe70 fb">查看详情&nbsp;&gt;&gt;</a>
							</p>
						</div>
						<p>
							<span class="fe70">1907</span>
							&nbsp;人查看该工地过程
						</p>
					</div>
					<div class="r_zhi undis">安装阶段</div>
					<div class="r_jindu">
						<div class="r_line">
							<div class="r_line_bg r_line_c"></div>
							<div class="r_line_bg r_line_jin"></div>
							<ul>
								<li class="current">开工</li>
								<li class="current">砌墙阶段</li>
								<li class="current">水电改造</li>
								<li class="current">泥瓦阶段</li>
								<li class="current">木作阶段</li>
								<li class="current">油漆阶段</li>
								<li class="current">安装阶段</li>
								<li>验收</li>

							</ul>
						</div>

						<div class="r_jieduan">
			<?php
				$count = 0;
				$args=array(
					'orderby' => 'id',
					'order' => 'ASC',
					'parent' => 75,
					'number' => 8,
				);
				$categories=get_categories($args);

			?>
			<?php

				foreach($categories as $category) {
					$cat_name = $category->name;

					$count++;
					if ($cat_name == get_post_meta($post_id, 'phase', true)) {
						echo '<em class="current">';
					} else {
						echo '<em>';
					}
			?>
						<span><?php echo $cat_name; ?></span>
								&nbsp;▶
							</em>
			<?php
				}
			?>
						<!-- <em><span>开工</span>
								&nbsp;▶</em> 
							<em><span>砌墙阶段</span>
								&nbsp;▶</em> 
							<em>
								<span>水电改造</span>
								&nbsp;▶
							</em>
							<em>
								<span>泥瓦阶段</span>
								&nbsp;▶
							</em>
							<em>
								<span>木作阶段</span>
								&nbsp;▶
							</em>
							<em>
								<span>油漆阶段</span>
								&nbsp;▶
							</em>
							<em class="current">
								<span>安装阶段</span>
								&nbsp;▶
							</em>
							<em>
								<span>验收</span>
								&nbsp;▶
							</em> -->

						</div>
					</div>
				</div>
			</li>
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>

		</ul>

		<div class="paging">
			<?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
		</div>

	</div>
	<script type="text/javascript">
		$(".ThinkList li").each(function() {
			var r_zhi = $(this).find(".r_zhi").text();
			$(this).find(".r_jindu .r_jieduan em").each(function() {
				var r_jieduan = $(this).find("span").text();
				if( r_jieduan == r_zhi ){
					$(this).addClass('current');
				}
			});
			$(this).find(".r_jindu .r_line ul li").each(function() {
				var r_jieduan = $(this).text();
				if( r_jieduan == r_zhi ){
					$(this).addClass('current').prevAll("li").addClass('current');
				}
			});
			var l_cu = $(this).find(".r_jindu .r_line ul .current").length;
			var l_jin = $(this).find(".r_jindu .r_line_jin");
			if(l_cu == 1){
				$(l_jin).css({left:-530});
			}else{
				$(l_jin).css({left: - (565 - (l_cu * 70)+30)});
			}
		});
	</script>

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



