<?php
/*
Template Name Posts: 装修案例renovation case
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
<!-- 				<li class="current">
					<a href="http://www.nnxyzs.com/lists/11.html">
						<span>家装效果案例</span>
					</a>
				</li>

				<li>
					<a href="http://www.nnxyzs.com/lists/14.html">
						<span>完工实景</span>
					</a>
				</li>
				<li>
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
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">

				<div class="bdsharebuttonbox">

					<a href="#" class="bds_more" data-cmd="more"></a>
					<a href="#" class="bds_qzone" data-cmd="qzone"></a>
					<a href="#" class="bds_tsina" data-cmd="tsina"></a>
					<a href="#" class="bds_tqq" data-cmd="tqq"></a>
					<a href="#" class="bds_renren" data-cmd="renren"></a>
					<a href="#" class="bds_weixin" data-cmd="weixin"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api//Websites/mifantuan/Templates/mft/Static/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1>
				<?php wp_title(''); ?>
				<span class="f14 fe70">【<?php echo get_post_meta($page_id, 'design-style', true);?>】</span>
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
				<!-- 	<a href="http://www.nnxyzs.com/detail/968.html" title="荣和悦澜山109平装修案例" class="prev">上一篇:荣和悦澜山109平装修案例</a>
					<a href="http://www.nnxyzs.com/detail/970.html" title="华发国宾一号110平装修案例" class="next">下一篇:华发国宾一号110平装修案例</a> -->
				</div> <em>上传时间：<?php the_time('Y-m-d');?></em> <em><span class="fe70"><?php if(function_exists('the_views')) { the_views(); } ?></span>
					人查看过该工地过程</em> 
			</div>
			<div class="casesInfo clearfix">
				<em>地区：华发国宾一号240平装修案例<?php echo get_post_meta($page_id, 'area', true);?></em>

				<em>楼盘：华发国宾壹号<?php echo get_post_meta($page_id, '所属小区', true);?></em>

				<em>风格：<?php echo get_post_meta($page_id, 'design-style', true);?></em>
				<em>户型：<?php echo get_post_meta($page_id, 'housetype', true);?></em>
				<em>面积：<?php echo get_post_meta($page_id, 'acreage', true);?></em>
				<em>预算：<?php echo get_post_meta($page_id, 'budget', true);?></em>

				<em>设计：<?php $designerId =  get_post_meta($page_id, 'designerID', true); $post1 = get_post($designerId); ?>
					<!-- <?php echo $designerId; ?> -->
					<a href="javascript:;" title="<?php echo $post1->post_title; ?>" target="_blank" class="f66"><?php echo $post1->post_title; ?></a></em> 

				<em>
					该案例由
					<span style="color:#e1322c;">项目经理：<?php echo get_post_meta($page_id, '项目经理', true);?></span>
					执行
				</em>

			</div>

			<!-- 相册代码start -->
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zzsc.css">
			<section class="cntr">
				<div class="m10">

					<div class="cntr mt20">
						<div class="renovation-wide">
						    <div class="swiper-wrapper">
				    			<?php 
									$imageSrc =  get_post_meta($page_id, 'imageSrc', false); 
									$imagelink = get_post_meta($page_id, 'imagelink', false);
									$imagealt =  get_post_meta($page_id, 'imagealt', false);
									for ($i = 0; $i < count($imageSrc); ++$i) {
								?>
									<div class="swiper-slide"><a href="<?php echo $imagelink[$i]; ?>"></a><img src="<?php echo $imageSrc[$i]; ?>" alt="<?php echo $imagealt[$i]; ?>"></a></div>
								
								<?php		
									}
								?>
						    </div>
						    <!-- 如果需要分页器 -->
						    <div class="swiper-pagination"></div>
						    
						    <!-- 如果需要导航按钮 -->
						    <!-- <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div> -->
						    <div id="icon-zuojiantou" class="swiper-button-prev"><span class="ps-prevIcon"></span></div> <!-- 白色 -->
							<div id="icon-youjiantou" class="swiper-button-next"><span class="ps-nextIcon"></span></div>
							<style>
								.renovation-wide {
									min-width: 800px;
									width: 100%;
									height: 400px;
									position: relative;
									margin-bottom: 20px;
									overflow: hidden;
								}
								.renovation-wide .swiper-slide {
									opacity: 0;
								}
								.renovation-wide .swiper-slide-active {
									opacity: 1;
								}
								.renovation-wide .swiper-button-prev {
								    background: rgba(0,0,0,0.5);
								    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
								    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
								    border: 1px solid #777;
								    border-left: 0;
								    border-radius: 0 4px 4px 0;
								    position: absolute;
								    padding: 20px 20px 20px 15px;
								    left: 0;
								    top: 45%;
								    cursor: pointer;
								    width: auto;
									height: auto;
								}
								.renovation-wide .swiper-button-next {
									background: rgba(0,0,0,0.5);
								    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
								    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
								    border: 1px solid #777;
								    border-right: 0;
								    border-radius: 4px 0 0 4px;
								    position: absolute;
								    padding: 20px 15px 20px 20px;
								    right: 0;
								    top: 45%;
								    cursor: pointer;
								    width: auto;
								    height: auto;
								}
								.renovation-wide img {
									width: 100%;
									height: 100%;
								}
								.renovation-wide .ps-prevIcon {
								    border-color: transparent #fff transparent;
								    border-style: solid;
								    border-width: 10px 10px 10px 0;
								    display: block;
								}
								.renovation-wide .ps-nextIcon {
							        border-color: transparent #fff transparent;
								    border-style: solid;
								    border-width: 10px 0 10px 10px;
								    display: block;
								}				
							</style>
						</div>
						<div class="thumb-renovation-wide">
							<div class="swiper-wrapper">
					    			<?php 
										$imageSrc =  get_post_meta($page_id, 'imageSrc', false); 
										$imagelink = get_post_meta($page_id, 'imagelink', false);
										$imagealt =  get_post_meta($page_id, 'imagealt', false);
										for ($i = 0; $i < count($imageSrc); ++$i) {
									?>
										<div class="swiper-slide"><a href="<?php echo $imagelink[$i]; ?>"></a><img src="<?php echo $imageSrc[$i]; ?>" alt="<?php echo $imagealt[$i]; ?>"></a></div>
									
									<?php		
										}
									?>
							    </div>
							    <!-- 如果需要分页器 -->
							    <div class="swiper-pagination"></div>
							    
							    <!-- 如果需要导航按钮 -->
							    <div class="swiper-button-prev"><span class="ps-prevIcon"></span></div>
							    <div class="swiper-button-next"><span class="ps-nextIcon"></span></div>
								<style>
									.thumb-renovation-wide {
										overflow: hidden;
										position: relative;
									}
									.thumb-renovation-wide img {
										width: 100px;
										height: 100px;
										opacity: 0.6;
									}
									.thumb-renovation-wide .swiper-button-prev {
									    background: rgba(0,0,0,0.5);
									    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
									    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
									    border: 1px solid #777;
									    border-left: 0;
									    border-radius: 0 4px 4px 0;
									    position: absolute;
									    padding: 20px 20px 20px 15px;
									    left: 0;
									    top: 45%;
									    cursor: pointer;
									    width: auto;
										height: auto;
									}
									.thumb-renovation-wide .swiper-button-next {
										background: rgba(0,0,0,0.5);
									    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
									    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
									    border: 1px solid #777;
									    border-right: 0;
									    border-radius: 4px 0 0 4px;
									    position: absolute;
									    padding: 20px 15px 20px 20px;
									    right: 0;
									    top: 45%;
									    cursor: pointer;
									    width: auto;
									    height: auto;
									}									
									.thumb-renovation-wide .swiper-slide-thumb-active img {
										opacity: 1;
									}
									.thumb-renovation-wide .swiper-slide-thumb img {
										opacity: 0;
									}
									/*.thumb-renovation-wide .swiper-button-prev {
										left: -30px;
									}
									.thumb-renovation-wide .swiper-button-next {
										right: -30px;
									}*/
									.thumb-renovation-wide .ps-prevIcon {
									    border-color: transparent #fff transparent;
									    border-style: solid;
									    border-width: 10px 10px 10px 0;
									    display: block;
									}
									.thumb-renovation-wide .ps-nextIcon {
								        border-color: transparent #fff transparent;
									    border-style: solid;
									    border-width: 10px 0 10px 10px;
									    display: block;
									}																		
							    </style>											
						</div>
					</div>
				</div>
			</section>
			<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js" type="text/javascript"></script>

			<!-- 相册代码end -->

			<!--//ad-gallery-->
			<div class="hr20"></div>
			<div class="casesNote clearfix">
				<div class="ht">
					<i class="fr"></i>
					<i class="fl"></i>
					设计说明&nbsp;
					<span class="fari">DESIGN NOTE</span>
				</div>
				<div class="msgContent">
					<p class="MsoNormal">
						<span style="font-family:宋体;font-size:14pt;line-height:25pt;"></span>
					</p>
					<h2 style="text-align:center;">
						<span style="line-height:1.5;"><?php wp_title(); ?></span>
					</h2>
					<?php if (have_posts()) : ?>
				
					<?php query_posts('cat=' . $current_cat_ID . '&caller_get_posts=1&showposts=6'); ?>

					<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>		
								
					<!--需要循环的模块-->
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>
				</div>
			</div>
			<div class="caseLike fl">
				<div class="msgPN fl">
					<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<span class="prev"><?php if (get_previous_post()) { previous_post_link('%link', '', true); }  ?></span>

					<span class="next"><?php if (get_next_post()) { next_post_link('%link', '', true); } ?></span>
	            <?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
					<!-- <a href="http://www.nnxyzs.com/detail/968.html" title="荣和悦澜山109平装修案例" class="prev">上一篇:荣和悦澜山109平装修案例</a>
					<a href="http://www.nnxyzs.com/detail/970.html" title="华发国宾一号110平装修案例" class="next">下一篇:华发国宾一号110平装修案例</a> -->
				</div>

				<div class="text fl">
					<span class="fyahei">如果你喜欢这样的风格,你还可以</span>
					<em class="fari">IF YOU LIKE THIS DESIGN STYLE,YOU CAN</em>
				</div>
				<a href="<?php echo get_permalink(126) ?>" title="立即预约：设计师" target="_blank" class="teamBtn order fl">立即预约</a>

				<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="在线咨询" target="_blank" class="teamBtn book fl">在线咨询</a>

			</div>
			<div class="hr20"></div>
			<div class="bigTitle">
				也许你还喜欢这样的设计
				<i></i>
			</div>
			<ul class="teamCases clearfix">
				<?php $count = 0; ?>
					<?php if (have_posts()) : ?>
					<?php query_posts('cat=' . $current_cat_ID . '&caller_get_posts=1&showposts=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php 
					$count++;
					if ($count % 4 == 0) {
						echo "<li id='end'>";
					} else {
						echo "<li>";
					}
				?>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/595df94db975e.jpg" alt="华<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>">
						<p><?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></p>
					</a>
				</li>
	            <?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>				
			</ul>
			<div class="hr10"></div>
			<div class="bigTitle">
				我要评论
				<i></i>
				<!-- UY BEGIN -->
				<!-- UY BEGIN -->
				<div id="uyan_frame"></div>
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/uyan.js"></script>
				<!-- UY END -->
				<!-- UY END -->
			</div>
		</div>
		<!--//Column-L End-->
		<div class="Column-R">
			<div class="bigTitle">
				本案设计师
				<i></i>
			</div>

			<div class="TeamList casesTeam clearfix">
				<p class="show fari">DESIGNER SHOW</p>
				<div class="info">
					<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="免费预约" target="_blank" class="pubOrder fr">免费预约</a>
					<i class="cup fl"></i>
					<a href="<?php echo get_permalink($designerId); ?>" title="<?php echo $post1->post_title; ?>" class="name fl"><?php echo $post1->post_title; ?></a>
					<p class="fl">
						<?php echo get_post_meta($designerId, '公司职务', true); ?>
						
						<br><?php echo get_post_meta($designerId, '工作经验', true); ?>年工作经验</p>
				</div>
				<a href="http://www.nnxyzs.com/detail/172.html" title="张旭" class="imga">
					<img src="<?php bloginfo('template_directory'); ?>/images/58218cc8ac094.jpg" alt="张旭"></a>
			</div>

			<div class="bigTitle">
				所属小区
				
				<i></i>
			</div>

			<div class="casesHouse clearfix">
				<a href="<?php the_permalink(); ?>" title="华发国宾壹号" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/58140969d797b.jpg" alt="<?php echo get_post_meta($page_id, '所属小区', true); ?>"></a>
				<a href="<?php the_permalink(); ?>" title="华发国宾壹号<?php echo get_post_meta($page_id, '所属小区', true); ?>" class="tt"><?php echo get_post_meta($page_id, '所属小区', true); ?></a>
				<p>
					<span class="fari fe70"><?php if(function_exists('the_views')) { the_views(); } ?>1068</span>
					人查看该楼盘信息
				</p>
				<a href="http://www.nnxyzs.com/detail/433.html" title="华发国宾壹号" class="view">查看详情</a>
			</div>
			<div class="bigTitle">
				根据小区查看案例
				<i></i>
			</div>
			<div class="casesInd clearfix">
				<div class="ht">
					想看哪个
					<span class="fe70">楼盘</span>
					,哪个
					<span class="fe70">户型</span>
					?
				</div>
				<p>提交信息，试看</p>
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

												<input type="text" class="input-text" name="name" data-validate="required:姓名不能为空" style="width:230px;" placeholder="请输入你的称呼"></td>
											<td class="clue_on">&nbsp;请输入您的称呼</td>
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
												<input type="text" class="input-text" name="phone" placeholder="请输入你的手机号码" style="width:230px;"></td>
											<td class="clue_on">&nbsp;请输入您的手机号码</td>
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
												<input type="text" class="input-text" name="loupan" placeholder="请输入您的楼盘名称" style="width:230px;"></td>

											<td class="clue_on">&nbsp;请输入您的楼盘名称</td>
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
						<div class="right" style="float:left;margin-left:5px;">
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:100px;float:left;" placeholder="请输入验证码">
							<div style="width:100px;float:left;">
								<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="dee" onclick="reloadcode()" width="100" height="30"></div>
							<div class="clue_on">请输入验证码</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table">
						<div class="left">&nbsp;</div>
						<div class="right">
							<button type="submit" class="button">提交信息</button>
						</div>
					</div>
					<p>为您提供小区户型装修效果图参考！</p>

				</form>
			</div>
			<script type="text/javascript">
				$(function(){
				$('#submit').xbValidform();
				});
				function reloadcode(){
				var verify=document.getElementById('dee');

				verify.setAttribute('src','/Messages/verify.html?'+Math.random());

				}
			 </script>
			<div class="hr10"></div>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/8eb83a30a8694069a0cb06eb0776e76b.js"></script>

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
	<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/js/ad-gallery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//案例图滚动
			var galleries = $('.ad-gallery').adGallery({loader_image: '/Websites/mifantuan/Templates/mft/Static/images/Picture/thumb_20352.jpg',animation_speed:500,effect: 'fade',slideshow: {autostart: true,speed: 3000,start_label: '播放',stop_label: '停止'} });
		//animation_speed: 动画速度
		//effect：效果  参数有 slide-hori/水平  slide-vert/垂直   resize/大小变换  fade/逐渐消失 
		//autostart: 是否自动播放 true/false
			//防盗
			var height1 = $('.ad-image-wrapper').height();
				var width1 = $('.ad-image-wrapper').width();
				$("<img />").attr({
					src: '/Websites/mifantuan/Templates/mft/Static/images/Picture/thumb_20352.jpg' //防盗图片路径
				}).css({
					position: "absolute",
					zIndex: 99,
					width: width1,
					height: height1
				}).appendTo('.ad-image-wrapper')
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/html/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" border="0" align="top"></div>
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