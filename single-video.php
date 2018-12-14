<?php
/*
Template Name Posts: 视频样板房和公装videoModelHouse and frock
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 4;
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
				<?php qfl_show_cat_id_slug(4); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f689549522a.jpg" class="autoWidth" data-bd-imgshare-binded="1"></div>

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
					if ($category_term_id == $current_cat_ID) {
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
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">

				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542079821631">

					<a href="#" class="bds_more" data-cmd="more"></a>
					<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
					<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
					<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
					<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
					<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1><?php wp_title('');?></h1>
		</div>
		<div class="Column-L">
			<div class="msgInfo">
				<div class="msgPN fr">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<span class="prev"><?php if (get_previous_post()) { previous_post_link('%link', '', true); }  ?></span>

					<span class="next"><?php if (get_next_post()) { next_post_link('%link', '', true); } ?></span>
	            <?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
					<!-- <a href="http://www.nnxyzs.com/detail/1099.html" title="星艺装饰周铉设计师作品之广源国际社区美式VR" class="prev">上一篇:星艺装饰周铉设计师作品之广源国际社区美式...</a> -->
				</div> <em>DATE：<?php the_time('Y-m-d'); ?></em> <em>READ：
					<span class="fe70"><?php if(function_exists('the_views')) { the_views(); } ?></span></em> 
			</div>
			<div class="Column-100 tc" -id="VideoPlay">
				<?php if ($current_cat_ID == 9 ) { ?>
					<iframe src="<?php echo get_post_meta($page_id, 'vrvideo', true) ?>" width="600" height="480" frameborder="0"></iframe>

				<?php }  else { ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				 	<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>
				<?php  } ?>
				
			</div>
			<div class="hr30"></div>
			<div class="bigTitle">
				视频说明
				<i></i>
			</div>
			<div class="msgContent">
				<span style="color:#666666;font-family:'hiragino sans gb', 'microsoft yahei';font-size:14px;line-height:25px;background-color:#f3f3f3;"></span>
				<?php if ($current_cat_ID == 9) { ?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>				
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 
				<?php } ?>

				
				<!-- 此全景视频案例由星艺装饰设计师郭建阳提供，来自凤景湾160平现代简约案例 -->
			</div>
		</div>
		<div class="Column-R">
			<div class="pubIndent clearfix">
				<div class="ht">预约设计师为我设计规划</div>
				<div class="tips">
					&nbsp; &nbsp; &nbsp; 我们会根据你提供的楼盘信息，优先安排做过您家楼盘的设计师，为您提供户型规划和装修预算，解决装修中的诸多问题。
				</div>
				<form method="post" action="/Messages/add.html" onsubmit="return pubIndent_submit();">
					<input type="hidden" id="tourl" name="tourl" value="goback">
					<input type="hidden" id="tomsg" name="tomsg" value="预约成功，我们将通过电话联系您！">
					<input type="hidden" id="subject" name="subject" value="来源：5.10母亲节有家装饰&amp;融信澜郡·筑爱分享荟">
					<div class="table ext cls_contact">
						<div class="left">
							<span class="red">*</span>
							姓名：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="name" id="contact" style="width:185px;"></td>
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
							手机：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="phone" id="phone" style="width:185px;"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="table ext cls_addr">
						<div class="left">楼盘：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="loupan" id="addr" style="width:185px;"></td>
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
							验证：
						</div>
						<input type="hidden" name="laiyuanip" value="117.36.239.19">
						<div class="right">
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:90px;">
							<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="dea" onclick="reloadcode()" data-bd-imgshare-binded="1" width="60" height="30"></div>
					</div>
					<div class="table">
						<div class="left">&nbsp;</div>
						<div class="right">
							<input type="submit" class="teamBtn order" id="_phpok_submit" value="提交预约信息"></div>
					</div>
				</form>
			</div>
			<div class="hr20"></div>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/php.js"></script>
			<script type="text/javascript">
				function reloadcode(){
				var verify=document.getElementById('dea');

				verify.setAttribute('src','/Messages/verify.html?'+Math.random());

				}
				function pubIndent_submit(){
					var pi_contact = $(".pubIndent #contact");
					if(!pi_contact.val()){
							alert("请输入您的称呼");
							pi_contact.focus();
							return false;
					}
					var pi_phone = $(".pubIndent #phone");
					if(!(/^1[3|5|8][0-9]\d{7,8}$/.test(pi_phone.val()))){
							alert("手机号码未填写或填写错误");
							pi_phone.focus();
							return false;
					}
					var pi_check = $(".pubIndent #sys_check");
					if(!pi_check.val()){
							alert("请输入验证码");
							pi_check.focus();
							return false;
					}
					getid("_phpok_submit").disabled = true;
					return true;
				}
			</script>
			<div class="bigTitle">
				更多视频赏析
				<i></i>
			</div>
			<ul class="prMore clearfix">
				<?php $count = 0; ?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=' . $current_cat_ID . '&caller_get_posts=1&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $count++ ?>
				<?php if ($count % 2 == 0) {
					echo '<li id="end">';
				} else {
					echo '<li>';
				} ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/5a473b44aff4c.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" data-bd-imgshare-binded="1">
						<p><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></p>
					</a>
				</li>

				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 
			</ul>

			<div class="bigTitle">
				案例排行榜
				<i></i>
			</div>

			<ul class="pubCTop clearfix">
				<?php $count = 0; ?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=4&caller_get_posts=1&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $count++ ?>
				<?php if ($count == 1) {
					?>
					<li class="first">
					<i class="num"><?php echo $count; ?></i>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?>" target="_blank" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5be291beeb8f0.jpg" alt="荣和悦澜山89平轻奢实景" data-bd-imgshare-binded="<?php echo $count; ?>"></a>
					<p>

						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?>" target="_blank" class="tt"><?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?></a>
					</p>

					<p>
						人气：
						<span class="fe70"><?php if(function_exists('the_views')) { the_views(); } ?></span>
					</p>
				<?php  					
					} else {

				?>
					<li>
						<span class="fe70 fr"><?php if(function_exists('the_views')) { the_views(); } ?></span>
				<?php
					if ($count == 2 || $count == 3) {
						echo '<i class="num red">' . $count . '</i>';
					} else {
						echo '<i class="num">' . $count . '</i>';
					}

				?>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?>" target="_blank">
						<?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?></a>
					<p>
				<?php
					
				} ?>

				</li>
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 

			</ul>

		</div>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swfobject.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var so = new SWFObject("http://static.video.qq.com/TPout.swf?vid=y0154ki6k9d&auto=0", "myflash", "780", "540", "9", "#fff");
			so.addParam("flashvars", "isAutoPlay=true&autoPlay=true");
			so.addParam("allowFullScreen", "true");
			so.addParam("wmode", "transparent");
			so.write("VideoPlay");
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/html/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" data-bd-imgshare-binded="1" border="0" align="top"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/html/php.htm"></script>
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