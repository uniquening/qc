<?php
/*
Template Name Posts: 热装楼盘hotOutfit
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 67;
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
				<?php qfl_show_cat_id_slug(67); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f6883fa2b35.jpg" class="autoWidth" data-bd-imgshare-binded="1">
	</div>

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
					if ($category_term_id == $current_cat_ID) {
						echo '<li class="current">';
					} else {
						echo '<li>';
					}
					echo '<a href="' . get_category_link($category_term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . 'target="_blank">' . $category->name.'</a></li>';										     
				}
			?>
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="pubSearch clearfix">
			<div class="search fr">
				<form method="get" action="/search" class="form fl">
					<input type="hidden" name="mid" value="111">
					<input name="keyword" id="search_keywords" type="text" class="input" placeholder="搜索楼盘名称">
					<input name="" type="submit" value="search" class="button"></form>
			</div>
			<dl></dl>
		</div>
		<script type="text/javascript" src="js/94fdc15e0cbf4f2d89c8d4cd737a371a.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".pubSearch .input").placeholder();});</script>
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">

				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542083244681">

					<a href="#" class="bds_more" data-cmd="more"></a>
					<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
					<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
					<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
					<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
					<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1><?php wp_title(); ?></h1>
		</div>
		<div class="houseInfo clearfix">
			<div class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/58677072a8b13.jpg" alt="招商雍景湾" data-bd-imgshare-binded="1"></div>
			<div class="txt fl">
				<div class="num fl">
					<span class="fr">
						<i class="fe70">1580<?php if(function_exists('the_views')) { the_views(); } ?></i>
						&nbsp;人查看该楼盘信息
					</span> <em class="fl">&gt;咨询客户&nbsp;
						<span class="fe70"><?php echo get_post_meta($page_id, '咨询客户', true) ?></span>
						户</em>  <em class="fl">&gt;已签约&nbsp;
						<span class="fe70"><?php echo get_post_meta($page_id, '已签约', true) ?></span>
						个</em> 
				</div>
				<p class="fl">
					<span class="fb">楼盘地址：</span><?php echo get_post_meta($page_id, '楼盘地址', true) ?>
					
				</p>
				<p class="fl">
					<span class="fb">竣工时间：</span><?php echo get_post_meta($page_id, '竣工时间', true) ?>
					
				</p>
				<p class="fl">
					<span class="fb">物业类型：</span><?php echo get_post_meta($page_id, '物业类型', true) ?>
				</p>
				<p>
					<span class="fb">楼盘简介：</span>
				</p>
<?php echo get_post_meta($page_id, '楼盘简介', true) ?>
<!-- 				<span style="color:#464646;font-family:宋体;line-height:25px;background-color:#FFFFFF;">
					招
商·雍景湾，由招商蛇口开发建设。招商蛇口的母公司及大股东——招商局，由李鸿章创立于1872年，至今已有144年历史，是中国民族工商业的先驱和硕果
仅存的百年民族企业。招商局是中央直管的国有重要骨干企业，在国际工商界具有广泛影响。32年，33城，招商蛇口已在全国33个城市覆盖近百个作品。
				</span>
				<br>
				<span style="color:#464646;font-family:宋体;line-height:25px;background-color:#FFFFFF;">
					项目坐落于南宁市柳沙半岛国宾区域，位于英华路中段，同时可270°远眺邕江江湾，自然景观丰富。四桥飞架、四大公园环绕，景观、交通、文化、配套系统为精英阶层营造了一个良好的品味栖息地。&nbsp;
				</span>
				<br>
				<span style="color:#464646;font-family:宋体;line-height:25px;background-color:#FFFFFF;">
					招商·雍景湾总占地约129亩，总建筑面积超40万平米，计划分三期开发。项目新古典主义的建筑风格，尽显高贵、典雅、和谐，兼具怀古情怀与现代时尚，展现极致的品质感和独特体验。&nbsp;
				</span>
				<br>
				<span style="color:#464646;font-family:宋体;line-height:25px;background-color:#FFFFFF;">
					小区内部园林打造异域特色景观，空中画廊、空中仙境、空中花园三大空中美景，将“空中之城”的云端生活，尽情展现尊贵、诗意、浪漫的格调。小区内设置品牌幼儿园、沿街商业、便民菜市、无边际泳池、架空层小区泛会所等。&nbsp;
				</span>
				<br>
				<span style="color:#464646;font-family:宋体;line-height:25px;background-color:#FFFFFF;">实力招商，打造中国当代岛居样板。</span> -->
			</div>
		</div>

		<!-- 楼盘户型图s -->

		<div class="houseTitle">

			<span>实量楼盘户型设计方案</span>
		</div>
		<ul class="houseCase1 clearfix">
			<?php 
				$imageUrl =  get_post_meta($page_id, 'imageSrc', false);
				for ($i = 0; $i < count($imageUrl); $i++) {
					echo '<li style="height:235px;width:333px;margin: 0 20px 45px 0;"><img src="'.$imageUrl[$i]. '" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>';
				}

		 	?>

<!-- 			<li style="height:235px;width:333px;margin: 0 20px 45px 0;">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9d106cd947f.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>
			<li style="height:235px;width:333px;margin: 0 20px 45px 0;">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9d106cd947f.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>
			<li style="height:235px;width:333px;margin: 0 20px 45px 0;">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9e5ea8c75e8.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>
			<li style="height:235px;width:333px;margin: 0 20px 45px 0;">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9e5edf954f1.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>
			<li style="height:235px;width:333px;margin: 0 20px 45px 0;" id="end">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9e5f7576ebc.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>
			<li style="height:235px;width:333px;margin: 0 20px 45px 0;">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9e5fb7e7ee0.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>
			<li style="height:235px;width:333px;margin: 0 20px 45px 0;">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9e609e8d432.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li>
			<li style="height:235px;width:333px;margin: 0 20px 45px 0;">

				<img src="<?php bloginfo('template_directory'); ?>/images/5a9e617a52bf8.jpg" alt="工地开口说话" style="width:333px;height:235px;" data-bd-imgshare-binded="1"></li> -->
		</ul>

		<!-- 楼盘户型图e -->
		<!-- unrun:$dbcs -->

		<div class="houseTitle">
			<a href="http://www.nnxyzs.com/lists/11.html" target="_blank" class="more">查看全部案例&nbsp;&gt;</a>
			<span>小区签约设计作品</span>
		</div>
		<ul class="houseCase clearfix">

			<!-- 家装效果装修案例模块 -->

			<?php $count = 0 ?>
			<?php if (have_posts()) : ?>
			<?php query_posts('cat=7' . $mcatID. '&caller_get_posts=1&showposts=12'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++;
				$post_id = $post->ID;
				if ($count % 2 == 0) {
					echo '<li id="end">';
				} else {
					echo '<li>';
				}
			?>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" target="_blank" class="imga fl">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5940f77e6c1fb.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" data-bd-imgshare-binded="1"> -->
					<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
				</a>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" target="_blank" class="tt"><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></a>
				<p>风格：欧式典雅<?php echo get_post_meta($post_id, 'design-style', true); ?></p>
				<p>造价：<?php echo get_post_meta($post_id, 'budget', true); ?></p>
				<p class="view">
					<span class="fe70">631<?php if(function_exists('the_views')) { the_views(); } ?></span>
					&nbsp;人查看该装修案例
				</p>
				<p>
					本装修设计方案由&nbsp;
					<span class="fe70">
						设计师：
						<a href="http://www.nnxyzs.com/detail/156.html" title="设计师：罗芳" target="_blank" class="fe70"><?php echo get_post_meta($post_id, 'designer', true); ?>罗芳</a>
						&nbsp;提供
					</span>
				</p>

			</li>			

			<!--需要循环的模块-->
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>  



		</ul>
		<!-- unrun:$dbcs -->

		<ul class="houseRes clearfix">
			<div class="houseTitle">
				<a href="http://www.nnxyzs.com/lists/9.html" target="_blank" class="more">查看全部工地&nbsp;&gt;</a>
				<span>在建工地</span>
			</div>
					
			<div style="clear:both;"></div>
		</ul>

		<!-- unrun:$dbcs -->
<ul class="houseCase clearfix">

			<!-- 家装效果装修案例模块 -->

			<?php $count = 0 ?>
			<?php if (have_posts()) : ?>
			<?php query_posts('cat=37' . $mcatID. '&caller_get_posts=1&showposts=12'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++;
				$post_id = $post->ID;
				if ($count % 2 == 0) {
					echo '<li id="end">';
				} else {
					echo '<li>';
				}
			?>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" target="_blank" class="imga fl">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5940f77e6c1fb.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" data-bd-imgshare-binded="1"> -->
					<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
				</a>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" target="_blank" class="tt"><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></a>
				<p>风格：欧式典雅<?php echo get_post_meta($post_id, 'design-style', true); ?></p>
				<p>造价：<?php echo get_post_meta($post_id, 'budget', true); ?></p>
				<p class="view">
					<span class="fe70">631<?php if(function_exists('the_views')) { the_views(); } ?></span>
					&nbsp;人查看该装修案例
				</p>
				<p>
					本装修设计方案由&nbsp;
					<span class="fe70">
						设计师：
						<a href="http://www.nnxyzs.com/detail/156.html" title="设计师：罗芳" target="_blank" class="fe70"><?php echo get_post_meta($post_id, 'designer', true); ?>罗芳</a>
						&nbsp;提供
					</span>
				</p>

			</li>			

			<!--需要循环的模块-->
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>  



		</ul>
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/images/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" data-bd-imgshare-binded="1" border="0" align="top"></div>
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