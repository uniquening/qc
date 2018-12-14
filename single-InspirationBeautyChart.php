<?php
/*
Template Name Posts: 灵感美图InspirationBeautyChart
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
		<img src="<?php bloginfo('template_directory'); ?>/images/59f689549522a.jpg" class="autoWidth"></div>

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
					$count++;
					if ($count == 1) {
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

				<div class="bdsharebuttonbox">

					<a href="http://www.nnxyzs.com/detail/722.html#" class="bds_more" data-cmd="more"></a>
					<a href="http://www.nnxyzs.com/detail/722.html#" class="bds_qzone" data-cmd="qzone"></a>
					<a href="http://www.nnxyzs.com/detail/722.html#" class="bds_tsina" data-cmd="tsina"></a>
					<a href="http://www.nnxyzs.com/detail/722.html#" class="bds_tqq" data-cmd="tqq"></a>
					<a href="http://www.nnxyzs.com/detail/722.html#" class="bds_renren" data-cmd="renren"></a>
					<a href="http://www.nnxyzs.com/detail/722.html#" class="bds_weixin" data-cmd="weixin"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api//Websites/mifantuan/Templates/mft/Static/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1>
				家庭吧台装修效果图赏析
				<span class="f14 fe70">【】</span>
			</h1>
		</div>
		<div class="Column-L">
			<div class="msgInfo">
				<div class="msgPN fr">

					<a href="http://www.nnxyzs.com/detail/721.html" title="走廊过道装修效果图片" class="prev">上一篇:走廊过道装修效果图片</a>
					<a href="http://www.nnxyzs.com/detail/723.html" title="家装吊顶装修效果" class="next">下一篇:家装吊顶装修效果</a>
				</div> <em>上传时间：2017-02-05</em> <em><span class="fe70">271</span>
					人查看过该工地过程</em> 
			</div>

			<!-- 相册代码start -->
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zzsc.css">
			<section class="cntr">
				<div class="m10">

					<div class="cntr mt20">
						<div class="inspir-beauty-wide">
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
								.inspir-beauty-wide {
									min-width: 800px;
									width: 100%;
									height: 400px;
									position: relative;
									margin-bottom: 20px;
									/*overflow: hidden;*/
								}
								.inspir-beauty-wide .swiper-slide {
									opacity: 0;
								}
								.inspir-beauty-wide .swiper-slide-active {
									opacity: 1;
								}
								.inspir-beauty-wide .swiper-button-prev {
								    background: rgba(0,0,0,0.5);
								    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
								    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
								    border: 1px solid #777;
								    border-left: 0;
								    border-radius: 0 4px 4px 0;
								    position: absolute;
								    padding: 20px 20px 20px 15px;
								    left: -30px;
								    top: 45%;
								    cursor: pointer;
								    width: auto;
									height: auto;
								}
								.inspir-beauty-wide .swiper-button-next {
									background: rgba(0,0,0,0.5);
								    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
								    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
								    border: 1px solid #777;
								    border-right: 0;
								    border-radius: 4px 0 0 4px;
								    position: absolute;
								    padding: 20px 15px 20px 20px;
								    right: -30px;
								    top: 45%;
								    cursor: pointer;
								    width: auto;
								    height: auto;
								}
								.inspir-beauty-wide img {
									width: 100%;
									height: 100%;
								}
								.inspir-beauty-wide .ps-prevIcon {
								    border-color: transparent #fff transparent;
								    border-style: solid;
								    border-width: 10px 10px 10px 0;
								    display: block;
								}
								.inspir-beauty-wide .ps-nextIcon {
							        border-color: transparent #fff transparent;
								    border-style: solid;
								    border-width: 10px 0 10px 10px;
								    display: block;
								}				
							</style>
						</div>
						<div class="thumb-inspir-beauty-wide">
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
									.thumb-inspir-beauty-wide {
										/*overflow: hidden;*/
										position: relative;
									}
									.thumb-inspir-beauty-wide img {
										width: 100px;
										height: 100px;
										opacity: 0.6;
									}
									.thumb-inspir-beauty-wide .swiper-button-prev {
									    background: rgba(0,0,0,0.5);
									    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
									    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
									    border: 1px solid #777;
									    border-left: 0;
									    border-radius: 0 4px 4px 0;
									    position: absolute;
									    padding: 20px 20px 20px 15px;
									    left: -30px;
									    top: 45%;
									    cursor: pointer;
									    width: auto;
										height: auto;
									}
									.thumb-inspir-beauty-wide .swiper-button-next {
										background: rgba(0,0,0,0.5);
									    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endColorstr='#99000000');
									    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000')";
									    border: 1px solid #777;
									    border-right: 0;
									    border-radius: 4px 0 0 4px;
									    position: absolute;
									    padding: 20px 15px 20px 20px;
									    right: -30px;
									    top: 45%;
									    cursor: pointer;
									    width: auto;
									    height: auto;
									}									
									.thumb-inspir-beauty-wide .swiper-slide-thumb-active img {
										opacity: 1;
									}
									.thumb-inspir-beauty-wide .swiper-slide-thumb img {
										opacity: 0;
									}
									.thumb-inspir-beauty-wide .swiper-button-prev {
										left: -30px;
									}
									.thumb-inspir-beauty-wide .swiper-button-next {
										right: -30px;
									}
									.thumb-inspir-beauty-wide .ps-prevIcon {
									    border-color: transparent #fff transparent;
									    border-style: solid;
									    border-width: 10px 10px 10px 0;
									    display: block;
									}
									.thumb-inspir-beauty-wide .ps-nextIcon {
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
						<span style="font-family:宋体;font-size:14pt;line-height:25pt;">
							家庭吧台装修效果图专区,提供2017年国内外最新流行的家庭吧台装修效果图和家庭吧台装修样板案例,星艺装饰集成整装装修效果图家庭吧台专区每日更新高达数百套经典设计案例
						</span>
					</p>
				</div>
			</div>
			<div class="caseLike fl">
				<div class="msgPN fl">

					<a href="http://www.nnxyzs.com/detail/721.html" title="走廊过道装修效果图片" class="prev">上一篇:走廊过道装修效果图片</a>
					<a href="http://www.nnxyzs.com/detail/723.html" title="家装吊顶装修效果" class="next">下一篇:家装吊顶装修效果</a>
				</div>

				<div class="text fl">
					<span class="fyahei">如果你喜欢这样的风格,你还可以</span>
					<em class="fari">IF YOU LIKE THIS DESIGN STYLE,YOU CAN</em>
				</div>
				<a href="http://www.nnxyzs.com/page/39.html" title="立即预约：设计师" target="_blank" class="teamBtn order fl">立即预约</a>

				<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="在线咨询" target="_blank" class="teamBtn book fl">在线咨询</a>

			</div>
			<div class="hr20"></div>
			<div class="bigTitle">
				也许你还喜欢这样的设计
				<i></i>
			</div>
			<ul class="teamCases clearfix">
				<li>
					<a href="http://www.nnxyzs.com/detail/723.html" title="家装吊顶装修效果" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/5896f669b3a54.jpg" alt="家装吊顶装修效果">
						<p>家装吊顶装修效果</p>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/detail/722.html" title="家庭吧台装修效果图赏析" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/5896e5347b324.jpg" alt="家庭吧台装修效果图赏析">
						<p>家庭吧台装修效果图赏析</p>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/detail/721.html" title="走廊过道装修效果图片" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/5896dcdebda7c.jpg" alt="走廊过道装修效果图片">
						<p>走廊过道装修效果图片</p>
					</a>
				</li>
				<li id="end">
					<a href="http://www.nnxyzs.com/detail/720.html" title="客餐厅隔断装修设计效果赏析" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/5896d48dd111c.jpg" alt="客餐厅隔断装修设计效果赏析">
						<p>客餐厅隔断装修设计效果赏析</p>
					</a>
				</li>
			</ul>
			<div class="hr10"></div>
			<div class="bigTitle">
				我要评论
				<i></i>
				<!-- UY BEGIN -->
				<div id="uyan_frame"></div>
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/uyan.js"></script>
				<!-- UY END -->
			</div>
		</div>
		<div class="Column-R">
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
<?php get_footer(); ?>