<?php
/*
Template Name Posts: 赞誉与肯定(praise affirmation)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 66;
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
				<?php qfl_show_cat_id_slug(66); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f68a6d2f2cd.jpg" class="autoWidth" data-bd-imgshare-binded="1">
	</div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>

				<li class="current">
					<a href="<?php echo get_category_link(63); ?>">
						<span>赞誉与肯定</span>
					</a>
				</li>

				<?php $var = null; 
					global $post;
					
				?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=90&caller_get_posts=1&showposts=6&orderby=ID&order=ASC'); ?>
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
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">

				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542090879654">

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
		<div class="msgInfo">
			<div class="msgPN fr">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<span class="prev"><?php if (get_previous_post()) { previous_post_link('%link', '', true); }  ?></span>

					<span class="next"><?php if (get_next_post()) { next_post_link('%link', '', true); } ?></span>
	            <?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>

				<!-- <a href="http://www.nnxyzs.com/detail/1274.html" title="天誉花园业主送来锦旗" class="prev">上一篇:天誉花园业主送来锦旗</a>
				<a href="http://www.nnxyzs.com/detail/1430.html" title="龙光玖珑湖业主送来锦旗" class="next">下一篇:龙光玖珑湖业主送来锦旗</a> -->
			</div> <em>DATE：<?php the_time('Y-m-d');?></em> <em>READ：
				<span class="fe70">113<?php if(function_exists('the_views')) { the_views(); } ?></span></em> 

		</div>
		<div class="msgContent">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
	            <?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
			<!--<p>
				2018年8月，荣和千千树美美的孕妇业主送来锦旗一副，称赞星艺装饰项目经理李乾乾尽心尽责，最强监理，严格监理，热情服务，该项目星艺装饰设计师吕志良和业主合影。
			</p>
			<p>
				<br></p>
			<p>
				<img src="<?php bloginfo('template_directory'); ?>/images/5b6e43a8d1e24.jpg" alt="" data-bd-imgshare-binded="1"></p>
			<p>
				<br></p> -->
		</div>
		<div class="hr30"></div>

		<div class="bigTitle">
			更多业主评价
			<i></i>
		</div>
		<ul class="ThinkList clearfix">
			<?php if (have_posts()) : ?>
			<?php query_posts('cat=63&caller_get_posts=1&showposts=6'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<li class="even">
				<div class="ct">
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" class="imga fl">
						<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5b98d909d4512.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" data-bd-imgshare-binded="1"></a> -->
						<!-- <img src="<?php  ?>" alt="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" data-bd-imgshare-binded="1"> -->
						<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
					</a>
					<div class="txt fl">
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></a>
						</h3>
						<em class="fari">DATE:<?php the_time('Y-m-d') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>
						<em class="fari">READ:<?php if(function_exists('the_views')) { the_views(); } ?></em>
						<p class="note">
							<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 146,"……"); //修改显示字数 ?>
						</p>
					</div>
					<a href="http://www.nnxyzs.com/detail/1430.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
				</div>

			</li>
			<!--需要循环的模块-->
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>

			<!-- 

			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1430.html" title="龙光玖珑湖业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b98d909d4512.jpg" alt="龙光玖珑湖业主送来锦旗" data-bd-imgshare-binded="1"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1430.html" title="龙光玖珑湖业主送来锦旗">龙光玖珑湖业主送来锦旗</a>
						</h3>
						<em class="fari">DATE:2018-09-12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>
						<em class="fari">READ:130</em>
						<p class="note">
							9月9日一大早收到客户送来的锦旗，锦旗胜情书，客户对星艺的项目监理和服务团队竖起大拇指，（客户原话：非常不错！很专业，负责...
						</p>
					</div>
					<a href="http://www.nnxyzs.com/detail/1430.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1391.html" title="荣和千千树业主赠送锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b6e42ca00886.jpg" alt="荣和千千树业主赠送锦旗" data-bd-imgshare-binded="1"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1391.html" title="荣和千千树业主赠送锦旗">荣和千千树业主赠送锦旗</a>
						</h3>
						<em class="fari">DATE:2018-08-11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>
						<em class="fari">READ:176</em>
						<p class="note">
							2018年8月，荣和千千树美美的孕妇业主送来锦旗一副，称赞星艺装饰项目经理李乾乾尽心尽责，最强监理，严格监理，热情服务，该项目...
						</p>
					</div>
					<a href="http://www.nnxyzs.com/detail/1391.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
				</div>
			</li> -->
		</ul>
	</div>

	<!--<div class="specListInd_bg" id="specListInd_bg"></div>
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
	<div class="hr30"></div> -->

	<!-- /主体 -->

<?php get_footer(); ?>