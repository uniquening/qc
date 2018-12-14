<?php
/*
Template Name Posts: 在施工地constructionSite
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
echo $current_cat_ID;
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
						if ($category_term_id == 37) {
							echo '<li class="current">';
						} else {
							echo '<li>';
						}
						echo '<a href="' . get_category_link($category_term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';										     
					}
				?>
				<!-- <li>
					<a href="http://www.nnxyzs.com/lists/8.html">
						<span>热装楼盘</span>
					</a>
				</li>
				<li class="current">
					<a href="http://www.nnxyzs.com/lists/9.html">
						<span>工地开口说话</span>
					</a>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="msgTitle"> <i class="line"></i>
			<!-- 社会化分享 -->
			<div class="jiathis_style fr">		
				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542421923327">

					<a href="http://www.nnxyzs.com/detail/669.html#" class="bds_more" data-cmd="more"></a>
					<a href="http://www.nnxyzs.com/detail/669.html#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
					<a href="http://www.nnxyzs.com/detail/669.html#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
					<a href="http://www.nnxyzs.com/detail/669.html#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
					<a href="http://www.nnxyzs.com/detail/669.html#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
					<a href="http://www.nnxyzs.com/detail/669.html#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			</div>
			<h1>
				<?php the_title();?>
				<span class="f14 fe70">【<?php echo get_post_meta($post_id, 'phase', true); ?>安装阶段】</span>
			</h1>
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
					<!-- <span class="prev"><?php if (get_previous_post()) { previous_post_link('%link', '', true); }  ?></span>
					<span class="next"><?php if (get_next_post()) { next_post_link('%link', '', true); } ?></span> -->

					<!-- <a href="http://www.nnxyzs.com/detail/580.html" title="荣和千千树127平欧式风格" class="prev">上一篇:荣和千千树127平欧式风格</a>
					<a href="http://www.nnxyzs.com/detail/699.html" title="联发尚筑86平现代简约" class="next">下一篇:联发尚筑86平现代简约</a> -->
				</div> <em>上传时间：<?php the_time('Y-m-d');?>  </em> <em><span class="fe70"><?php if(function_exists('the_views')) { the_views(); } ?></span>
					人查看过该工地过程</em> 
			</div>
			<div class="casesInfo clearfix">

				<em>风格：现代简约<?php echo get_post_meta($page_id, 'design-style', true) ?></em>

				<em>户型：四居<?php echo get_post_meta($page_id, 'housetype', true) ?></em>
				<em>面积：180平<?php echo get_post_meta($page_id, 'acreage', true) ?></em>
				<em>预算：<?php echo get_post_meta($page_id, 'budget', true) ?></em>
				<em>阶段：安装阶段<?php echo get_post_meta($page_id, 'phase', true) ?></em>
				<em>设计：
					<a href="http://www.nnxyzs.com/detail/146.html" title="陆飞" target="_blank" class="f66">陆飞<?php echo get_post_meta($page_id, 'designer', true) ?></a></em> 
				<em>
					该工地由
					<span style="color:#E70;">项目经理：<?php echo get_post_meta($page_id, '项目经理', true) ?></span>
					执行：<?php echo get_post_meta($page_id, '执行', true) ?>
				</em>
			</div>

			<div class="msgRes clearfix">
				<div class="resCon first">
					<div class="circle">介绍</div>
					<div class="box">
						<div class="txt">
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<p>
								龙基传媒星城占地约150亩，总建筑面积约60万平方米，3000多户，规划建设有高档住宅、欧洲风情商业街和超高层公寓。建筑风格上沿袭并升级了南宁;联盟新城的纯欧式建筑风格，将三色外墙砖、欧式线条、哥特式坡屋顶等欧式元素融入建筑中，构筑出地道的欧式社区。龙基传媒星城项目投资商为广西龙基置业集团，曾开发过青年·国际、现代·国际、南宁·联盟新城等项目，龙基传媒星城为升级力作，项目位于兴宁区与青秀区琅东商圈交汇处，尊享两区繁华，紧临3000余亩药用植物园，畅享健康生活。
							</p>
							<?php endwhile; ?>
							<?php endif; wp_reset_query(); ?> 
							<p>
								<img src="<?php bloginfo('template_directory'); ?>/images/584fb772a7d3f.jpg" alt="" data-bd-imgshare-binded="1">
								<img src="<?php bloginfo('template_directory'); ?>/images/584fb7732e853.jpg" alt="" data-bd-imgshare-binded="1"></p>
						</div>
					</div>
				</div>

				<div class="resCon">
					<div class="circle">阶段</div>
					<div class="box">
						<div class="ht">安装阶段</div>
						<div class="f14" style="padding: 10px 10px 0;"></div>
						<ul class="pic">

							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/584fa93c82352.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/584fa93c82352.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/584fa93cf05c0.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/584fa93cf05c0.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/584fa93d2bb26.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/584fa93d2bb26.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/584fa93d64c93.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/584fa93d64c93.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/584fa93dd2754.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/584fa93dd2754.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/584fa93e58477.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/584fa93e58477.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/586c9a30c13a3.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/586c9a30c13a3.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/586c9b6a392d2.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/586c9b6a392d2.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997ed14ef21d.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997ed14ef21d.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997ed1c305b4.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997ed1c305b4.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f422cdb2f.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f422cdb2f.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f42841a75.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f42841a75.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f42b024c8.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f42b024c8.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f42deeb3f.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f42deeb3f.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f42841a75.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f42841a75.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f43416218.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f43416218.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f43c892f9.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f43c892f9.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f43cc6522.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f43cc6522.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f43d48782.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f43d48782.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f43d88d86.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f43d88d86.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f4428aa94.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f4428aa94.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
							<li>
								<a rel="group" href="<?php bloginfo('template_directory'); ?>/images/5997f442bb12c.jpg">
									<img src="<?php bloginfo('template_directory'); ?>/images/5997f442bb12c.jpg" alt="龙基传媒星城180平现代简约" data-bd-imgshare-binded="1"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
					
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/fancybox.css">
			<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/images/jquery.fancybox.js"></script>
			<script type="text/javascript">
				/*点击图片 弹出大图*/
				$(function(){
					$("a[rel=group]").fancybox({
						'titlePosition' : 'over',
						'cyclic'        : true,
						'titleFormat'	: function(title, currentArray, currentIndex, currentOpts) {
							return '<span id="fancybox-title-over">' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
						}
					});
				});
			</script>

			<div class="caseLike fl">
				<div class="text fl tr">
					<span class="fyahei">星艺的施工还没看够,你还可以</span>
					<em class="fari">AREN'T YOU TIRED OF THAT YET ? YOU CAN ALSO</em>
				</div>
				<a href="<?php echo get_permalink(126) ?>" title="立即报名参观：龙基传媒星城180平现代简约" target="_blank" class="teamBtn visit fl">报名参观</a>

				<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="在线咨询" target="_blank" class="teamBtn book fl">在线咨询</a>

			</div>
		</div>
		<!--//Column-L End-->
		<div class="Column-R">
			<div class="pubIndent clearfix">
				<div class="ht">预约设计师为我设计规划</div>
				<div class="tips">
					&nbsp; &nbsp; &nbsp; 我们会根据你提供的楼盘信息，优先安排做过您家楼盘的设计师，为您提供户型规划和装修预算，解决装修中的诸多问题。
				</div>
				<form method="post" action="http://www.nnxyzs.com/Messages/add.html" onsubmit="return pubIndent_submit();">
					<div class="table ext cls_contact">
						<div class="left">
							<span class="red">*</span>
							姓名：
						</div>

						<div class="right">
							<div>
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="name" id="contact" value="" style="width:185px;"></td>
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
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="phone" id="phone" value="" style="width:185px;"></td>
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

								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td>

												<input type="text" class="input-text" name="loupan" id="addr" value="" style="width:185px;"></td>
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
						<div class="right" style="float:left;">
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:80px;float:left;">
							<input type="hidden" name="laiyuanip" value="1.82.24.83">
							<div style="width:100px;float:left;">
								<img src="<?php bloginfo('template_directory'); ?>/html/verify.html" width="100" height="30" class="margin-left-20" id="de" onclick="reloadcode()" data-bd-imgshare-binded="1"></div>
						</div>
						<div class="clear"></div>
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
				var verify=document.getElementById('de');

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
				更多在施工地
				<i></i>
			</div>
			<ul class="prMore clearfix">
				<!-- 和视频公装模板类似 -->
				<?php $count = 0; ?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=37&caller_get_posts=1&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $count++ ?>
				<?php if ($count % 2 == 0) {
					echo '<li id="end">';
				} else {
					echo '<li>';
				} ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
						<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
						<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5a473b44aff4c.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" data-bd-imgshare-binded="1"> -->
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
				<!-- 和视频公装模块一样 -->
				<?php $count = 0; ?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=37&caller_get_posts=1&showposts=20'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $count++ ?>
				<?php if ($count == 1) {
					?>
					<li class="first">
					<i class="num"><?php echo $count; ?></i>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 20,''); ?>" target="_blank" class="imga fl">
						<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5be291beeb8f0.jpg" alt="荣和悦澜山89平轻奢实景" data-bd-imgshare-binded="<?php echo $count; ?>"></a> -->
						<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
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

	<div class="specListInd_bg" id="specListInd_bg"></div>
	<div class="specListInd" id="specListInd">
		<div class="ht">
			<span>免费报名</span>
			<a href="javascript:;" class="close fr">×</a>
		</div>
		<p class="tips">请必须填写正确信息，以便我们更好的为您服务！</p>

		<form method="post" action="http://www.nnxyzs.com/detail/669.html?c=post&amp;f=setok&amp;module_id=132" onsubmit="return specListInd_submit();">
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/images/26f3182c2b504bea93dc80a825db4483.gif" border="0" align="top" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" data-bd-imgshare-binded="1"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/php.js"></script>
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