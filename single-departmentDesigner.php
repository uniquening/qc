<?php
/*
Template Name Posts: 部门设计师departmentDesigner
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 5;
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
				<!-- <span style="font-size:40px;color:#fff;font-weight:blod;"><?php echo $cur_par_cat_slug ?></span>
				<span style="font-size:30px;color:#fff;"><?php echo $cur_par_cat_name ?></span> -->
				<?php qfl_show_cat_id_slug(5); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f689549522a.jpg" class="autoWidth" data-bd-imgshare-binded="1"></div>

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
					if ($category_term_id == $current_cat_ID) {
						echo '<li class="current">';
					} else {
						echo '<li>';
					}
					echo '<a href="' . get_category_link($category_term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';										     
				}
			?>
				<!--<li>
					<a href="http://www.nnxyzs.com/lists/19.html">
						<span>集成整装设计</span>
					</a>
				</li>
				<li class="current">
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
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">

				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542087826361">

					<a href="#" class="bds_more" data-cmd="more"></a>
					<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
					<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
					<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
					<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
					<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1><?php wp_title(''); ?></h1>
		</div>
		<div class="Column-L">
			<div class="teamInfo">
				<div class="img fl">
					<img src="<?php echo get_post_meta($page_id, 'designer-photo', true) ?>" alt="兰瑞严" class="imga" data-bd-imgshare-binded="1">
					<div class="hr10"></div>
					<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="立即预约：设计师" target="_blank" class="teamBtn order fl">立即预约</a>

					<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="在线咨询" target="_blank" class="teamBtn book fl">在线咨询</a>

					<div class="hr15"></div>

					<img src="<?php bloginfo('template_directory'); ?>/images/58c0c130a9c98.jpg" alt="" data-bd-imgshare-binded="1"></div>
				<div class="txt fl">
					<div class="msgPN fr">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<span class="prev"><?php if (get_previous_post()) { previous_post_link('%link', '', true); }  ?></span>

							<span class="next"><?php if (get_next_post()) { next_post_link('%link', '', true); } ?></span>
			            <?php endwhile; ?>
						<?php endif; wp_reset_query(); ?>
						<!-- <a href="http://www.nnxyzs.com/detail/13.html" title="陶佳彤" class="prev">上一篇:陶佳彤</a>
						<a href="http://www.nnxyzs.com/detail/120.html" title="杨云星" class="next">下一篇:杨云星</a> -->
					</div>

					<div class="orderNum fl">
						<span> <?php echo get_post_meta($page_id, '服务人数', true) ?></span>
						&nbsp;人已委托TA设计
					</div>
					<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="免费预约" target="_blank" class="pubOrder fl">免费预约</a>
					<div class="hr20"></div> <em><?php echo get_post_meta($page_id, '公司职务', true) ?>设计总监</em>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em><?php echo get_post_meta($page_id, '工作经验', true) ?>9年经验</em>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<em class="hits">人气：
						<span class="fe70">1930</span></em> 
					<div class="hr15 line"></div>

					<p>所在部门：设计一部<?php echo get_post_meta($page_id, '所在部门', true) ?></p>

					<p>公司职务：设计总监<?php echo get_post_meta($page_id, '公司职务', true) ?></p>
					<p>擅长风格：现代简约<?php echo get_post_meta($page_id, 'design-style', true) ?></p>
					<p>设计理念：设计源于生活，高于生活；设计在于创造，勇于创新<?php echo get_post_meta($page_id, '设计理念', true) ?></p>
					<div class="hr15 line"></div>
					<p class="fb fe70">&gt;&gt;个人简介</p>
					<div class="msgContent">
					    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <?php  the_content(); ?>
                        <?php endwhile; ?>
                        <?php endif; wp_reset_query(); ?> 
						<?php echo get_post_meta($page_id, '个人简介', true) ?>
					</div>
				</div>
			</div>
			<!--//teamInfo End-->
			<div class="hr20"></div>
			<div class="bigTitle">
				TA的所有案例
				<i></i>
			</div>
			<ul class="teamCases clearfix">
				<?php $designerID =  get_post_meta($page_id, '设计案例id', false); ?>
				<?php 
					for ($i = 0; $i < count($designerID); ++$i) {
						if ($i % 4 == 0) {
							echo '<li class="end">';
						} else {
							echo '<li>';
						}
						$post[$i] = get_post($designerID[$i]); 
						$title[$i] = $post[$i]->post_title;
						$getThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),full);
						
				?>
								<a href="<?php the_permalink(); ?>" title="<?php echo $title[$i]; ?>" target="_blank" class="imga">
									<img src="<?php echo $getThumbnail[0]; ?>" alt="<?php echo $title[$i]; ?>" data-bd-imgshare-binded="1">
									<p><?php echo $title[$i]; ?></p>
								</a>
							</li>
				<?php
					}
				?>

			</ul>

			<div class="hr10"></div>

			<div class="bigTitle">
				更多设计师
				<i></i>
			</div>
			<ul class="moreTeam clearfix">
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=' . $current_cat_ID . '&caller_get_posts=1&showposts=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $count++;
					if ($count % 4 == 0) {
						echo '<li id="end">';
					} else {
						echo '<li>';
					}
				?>
					<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/58637e2fa15ba.jpg" alt="<?php echo get_the_title(); ?>" data-bd-imgshare-binded="1"></a>
					<div class="info">
						<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="预约该设计师" target="_blank" class="pubOrder fr">免费预约</a>
						<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" target="_blank" class="name"><?php echo get_the_title(); ?></a>
					</div>
					<p><?php echo get_post_meta($page_id, '公司职务', true) ?>设计总监&nbsp;&nbsp;<?php echo get_post_meta($page_id, '工作经验', true) ?>9年经验</p>
				</li>

				<!--需要循环的模块-->
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?> 

			</ul>

		</div>
		<div class="Column-R">
			<div class="pubIndent clearfix">
				<div class="ht">预约设计师为我设计规划</div>
				<div class="tips">
					&nbsp; &nbsp; &nbsp; 我们会根据你提供的楼盘信息，优先安排做过您家楼盘的设计师，为您提供户型规划和装修预算，解决装修中的诸多问题。
				</div>
				<form method="post" action="/Messages/add.html" class="ajax-post">



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
												<input type="text" class="input-text" name="name" data-validate="required:姓名不能为空" style="width:185px;"></td>
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

												<input type="text" class="input-text" name="phone" data-validate="required:姓名不能为空,tel:电话格式错误" style="width:185px;"></td>

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
												<input type="text" class="input-text" name="loupan" data-validate="required:楼盘不能为空" style="width:185px;"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<input type="hidden" name="laiyuanip" value="117.36.239.19">
					<div class="table">
						<div class="left">
							<span class="red">*</span>
							验证：
						</div>
						<div class="right" style="float:left;">
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:80px;float:left;">
							<div style="width:100px;float:left;">
								<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="des" onclick="reloadcode()" data-bd-imgshare-binded="1" width="100" height="30"></div>
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
				var verify=document.getElementById('des');

				verify.setAttribute('src','/Messages/verify.html?'+Math.random());

				}
				$(function(){
				$('#submit').xbValidform();
				});
			</script>

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