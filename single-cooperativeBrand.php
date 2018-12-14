<?php
/*
Template Name Posts: 合作品牌(Cooperative Brand)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 60;
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
				<?php qfl_show_cat_id_slug(60); ?>

			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f689ce6b3d5.jpg" class="autoWidth"></div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>
			<?php
				$args=array(
					'orderby' => 'id',
					'order' => 'ASC',
					'parent' => 60,
					'number' => 2,
				);
				$categories=get_categories($args);
				foreach($categories as $category) {
					$category_term_id = $category->term_id; 
					if ($category_term_id == $cat_ID) {
						echo '<li class="current">';
					} else {
						echo '<li>';
					}
					echo '<a href="' . get_category_link($category_term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . 'target="_blank">' . $category->name.'</a></li>';										     
				}
			?>
				<li>
					<a href="<?php echo get_post(113)->guid; ?>">

						<span><?php echo get_post(113)->post_title; ?></span>
					</a>
				</li>

			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="BrandList clearfix">
			<div class="bigTitle">
				基材类 <i></i>
			</div>
				<?php 
					$imageSrc =  get_post_meta($page_id, 'imageSrc', false); 
					$imageTitle=  get_post_meta($page_id, 'imageTitle', false); 
					for ($i = 0; $i < count($imageSrc); ++$i) {
				?>
					<div class="imga">
						<img src="<?php echo $imageSrc[$i]; ?>" alt="<?php echo $imageTitle[$i]; ?>">
						<p><?php echo $imageTitle[$i]; ?></p>
					</div>
				<?php		
					}
				?>								
		</div>
		<div class="BrandList clearfix">
			<div class="bigTitle">
				主材类
				<i></i>
			</div>
			<?php 
				$mainImageSrc =  get_post_meta($page_id, 'mainImageSrc', false); 
				$mainImageTitle =  get_post_meta($page_id, 'mainImageTitle', false); 
				for ($i = 0; $i < count($mainImageSrc); ++$i) {
			?>
				<div class="imga">
					<img src="<?php echo $mainImageSrc[$i]; ?>" alt="<?php echo $mainImageTitle[$i]; ?>">
					<p><?php echo $mainImageTitle[$i]; ?></p>
				</div>
			<?php		
				}
			?>
			
<!-- 			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59feb783801bb.jpg" alt="志邦橱柜">
				<p>志邦橱柜</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59f81d088b20c.jpg" alt="尚高卫浴">
				<p>尚高卫浴</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59feb8185ad7b.jpg" alt="老板抽油烟机">
				<p>老板抽油烟机</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59feb8cdb0905.jpg" alt="欧神诺瓷砖">
				<p>欧神诺瓷砖</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59feb94c33625.jpg" alt="L&amp;D陶瓷">
				<p>L&amp;D陶瓷</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59feb9a30acf7.jpg" alt="金牌亚洲陶瓷">
				<p>金牌亚洲陶瓷</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59febadbcf540.jpg" alt="苏宁电器">
				<p>苏宁电器</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59febae8c9aa3.jpg" alt="源阁门业">
				<p>源阁门业</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59febaf472d85.jpg" alt="罗芬卫浴">
				<p>罗芬卫浴</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59febb06568c7.jpg" alt="蒙娜丽莎瓷砖">
				<p>蒙娜丽莎瓷砖</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/5811a1f047429.jpg" alt="大西洋木地板">
				<p>大西洋木地板</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/5811a134ab914.jpg" alt="德贝橱柜">
				<p>德贝橱柜</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/5811a7d3e20e2.jpg" alt="楷模木门">
				<p>楷模木门</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/5811a2550343c.jpg" alt="吉象地板">
				<p>吉象地板</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59312f681a28b.jpg" alt="富林地板">
				<p>富林地板</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59312de54f922.jpg" alt="创维照明">
				<p>创维照明</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59312cecb230e.jpg" alt="明信门业">
				<p>明信门业</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59312cba358f2.jpg" alt="新标整体门窗">
				<p>新标整体门窗</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59312b2029782.jpg" alt="海尔橱柜">
				<p>海尔橱柜</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/59312acf2c5a8.jpg" alt="沁园净水器">
				<p>沁园净水器</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/593129ac08a8b.jpg" alt="卓远陶瓷">
				<p>卓远陶瓷</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/5931290c2ef02.jpg" alt="澳林莱铝扣板">
				<p>澳林莱铝扣板</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/5931284e106fe.jpg" alt="友邦铝扣板">
				<p>友邦铝扣板</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/593127da2ab74.jpg" alt="世家丽贝壳粉涂料">
				<p>世家丽贝壳粉涂料</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/5931267b649da.jpg" alt="硅藻君硅藻泥">
				<p>硅藻君硅藻泥</p>
			</div>
			<div class="imga">
				<img src="<?php bloginfo('template_directory'); ?>/images/593125b9de08d.jpg" alt="荣星大理石">
				<p>荣星大理石</p>
			</div> -->
		</div>

	</div>

	<div class="specListInd_bg" id="specListInd_bg"></div>
	<div class="specListInd" id="specListInd">
		<div class="ht">
			<span>免费报名</span>
			<a href="javascript:;" class="close fr">×</a>
		</div>
		<p class="tips">请必须填写正确信息，以便我们更好的为您服务！</p>

		<form method="post" action="http://www.nnxyzs.com/lists/26.html?c=post&amp;f=setok&amp;module_id=132" onsubmit="return specListInd_submit();">
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
						<table cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="contact" id="contact" value="" style="width:180px;"></td>
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
						<table cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="phone" id="phone" value="" style="width:180px;"></td>
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
						<table cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="house" id="house" value="" style="width:180px;"></td>
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/images/26f3182c2b504bea93dc80a825db4483.gif" border="0" align="top" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/php.js"></script>
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