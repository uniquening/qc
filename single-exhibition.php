<?php
/*
Template Name Posts: 展厅(exhibitionHall)
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
		<img src="<?php bloginfo('template_directory'); ?>/images/59f689ce6b3d5.jpg" class="autoWidth" data-bd-imgshare-binded="1"></div>

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
					if ($category_term_id == $current_cat_ID) {
						echo '<li class="current">';
					} else {
						echo '<li>';
					}
					echo '<a href="' . get_category_link($category_term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';										     
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
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">

				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542088963764">

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
		<div class="Column-L">
			<div class="msgInfo">
				<div class="msgPN fr">

					<a href="http://www.nnxyzs.com/detail/423.html" title="主材展厅实景之门窗" class="prev">上一篇:主材展厅实景之门窗</a>
					<a href="http://www.nnxyzs.com/detail/425.html" title="星艺主材展厅" class="next">下一篇:星艺主材展厅</a>
				</div> <em>上传时间：2016-10-28</em> <em><span class="fe70">1000</span>
					人查看过该产品</em> 
			</div>

			<!-- 相册代码start -->
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zzsc.css">
			<section class="cntr">
				<div class="m10">

					<div class="cntr mt20">
						<div class="pgwwide">
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
								.pgwwide {
									min-width: 800px;
									width: 100%;
									height: 400px;
									position: relative;
									margin-bottom: 20px;
									overflow: hidden;
								}
								.pgwwide .swiper-slide {
									opacity: 0;
								}
								.pgwwide .swiper-slide-active {
									opacity: 1;
								}
								.pgwwide .swiper-button-prev {
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
								.pgwwide .swiper-button-next {
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
								.pgwwide img {
									width: 100%;
									height: 100%;
								}
								.pgwwide .ps-prevIcon {
								    border-color: transparent #fff transparent;
								    border-style: solid;
								    border-width: 10px 10px 10px 0;
								    display: block;
								}
								.pgwwide .ps-nextIcon {
							        border-color: transparent #fff transparent;
								    border-style: solid;
								    border-width: 10px 0 10px 10px;
								    display: block;
								}				
							</style>
						</div>
						<div class="thumbpgwwide">
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
								.thumbpgwwide {
									overflow: hidden;
									position: relative;
								}
								.thumbpgwwide img {
									width: 100px;
									height: 100px;
									opacity: 0.6;
								}
								.thumbpgwwide .swiper-button-prev {
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
								.thumbpgwwide .swiper-button-next {
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
								.thumbpgwwide .swiper-slide-thumb-active img {
									opacity: 1;
								}
								.thumbpgwwide .swiper-slide-thumb img {
									opacity: 0;
								}
								.thumbpgwwide .swiper-button-prev {
									left: 0;
								}
								.thumbpgwwide .swiper-button-next {
									right: 0;
								}
								.thumbpgwwide .ps-prevIcon {
								    border-color: transparent #fff transparent;
								    border-style: solid;
								    border-width: 10px 10px 10px 0;
								    display: block;
								}
								.thumbpgwwide .ps-nextIcon {
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

			<div class="hr20"></div>
			<div class="casesNote clearfix">
				<div class="ht">
					<i class="fr"></i>
					<i class="fl"></i>
					产品简介&nbsp;
					<span class="fari">PRODUCT NOTE</span>
				</div>
				<div class="msgContent">
					集团为了全面服务好客户，满足各阶层客户个性化需求，在原有的高端设计机构—
					星艺·余工设计师楼、星艺·尚品的基础上，特成立广东星艺装饰集团广西有限公司集成分公司（简称“星艺集成”），星艺集成是由星艺装饰集团全资打造，集设
					计、施工、建材销售、软装配饰为一体，为客户提供整体家装一站式服务的新模式。全案设计，定制整装，超大规模的家居体验馆，通过整合国内外一线品牌建材，
					去除中间环节，立省30%，均符合国家环保标准，全责售后，全程无忧，真正让客户省时、省心、省力、省钱。规范行业标准，杜绝装修“陷阱”，做到人无我
					有，人有我优，整装项目更多、更全面、更真实。星艺集成将继续秉承“做装修等于做朋友”的经营理念，在广西树立起“诚信装修”的旗帜，持续追求客户的满意
					度，以星艺强大的品牌做后盾，一流的设计理念和规范管理、精湛的施工工艺，品质保证。再次升华 
					“把装修交给我，您放心上班去吧！”的服务理念，做高品位人居空间文化的引导者。
				</div>
			</div>
			<div class="caseLike fl">
				<div class="text fl">
					<span class="fyahei">如果你喜欢这样的风格,你还可以</span>
					<em class="fari">IF YOU LIKE THIS DESIGN STYLE,YOU CAN</em>
				</div>
				<a href="http://www.nnxyzs.com/page/39.html" title="立即预约：设计师" target="_blank" class="teamBtn order fl">立即预约</a>

				<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" title="在线咨询" target="_blank" class="teamBtn book fl">在线咨询</a>

			</div>
			<div class="hr20"></div>
			<div class="bigTitle">
				也许你还喜欢这样的风格
				<i></i>
			</div>
			<ul class="teamCases clearfix">
				<?php $count = 0; ?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=' . $current_cat_ID. '&caller_get_posts=1&showposts=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php 
					$count++; 
					if ($count % 4 == 0) {
						echo '<li id="end">';
					} else {
						echo '<li>';
					}
				?>
					<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
						<?php include(TEMPLATEPATH . '/thumbnail.php'); ?>
							<!-- <img src="<?php bloginfo('template_directory'); ?>/images/58636e6cc9439.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" data-bd-imgshare-binded="1"> -->
							<p><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></p>
						</a>
					</li>



				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>				
			</ul>
			<div class="hr10"></div>
		</div>
		<!--//Column-L End-->
		<div class="Column-R">

			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/php.js"></script>

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


<!-- 				<li class="first">
					<i class="num">1</i>
					<a href="http://www.nnxyzs.com/detail/1459.html" title="荣和悦澜山89平轻奢实景" target="_blank" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5be291beeb8f0.jpg" alt="荣和悦澜山89平轻奢实景" data-bd-imgshare-binded="1"></a>
					<p>
						<a href="http://www.nnxyzs.com/detail/1459.html" title="荣和悦澜山89平轻奢实景" target="_blank" class="tt">荣和悦澜山89平轻奢实景</a>
					</p>

					<p>
						人气：
						<span class="fe70">4029</span>
					</p>
				</li>
				<li>
					<span class="fe70 fr">3757</span>
					<i class="num red">2</i>
					<a href="http://www.nnxyzs.com/detail/1383.html" title="华润二十四城89平完工实景" target="_blank">华润二十四城89平完工实景</a>
				</li>
				<li>
					<span class="fe70 fr">3546</span>
					<i class="num red">3</i>
					<a href="http://www.nnxyzs.com/detail/442.html" title="凤景湾120平户型设计案例" target="_blank">凤景湾120平户型设计案例</a>
				</li>
				<li>
					<span class="fe70 fr">3532</span>
					<i class="num ">4</i>
					<a href="http://www.nnxyzs.com/detail/1333.html" title="嘉和城白鹭中州98平实景案例" target="_blank">嘉和城白鹭中州98平实景案例</a>
				</li>
				<li>
					<span class="fe70 fr">3439</span>
					<i class="num ">5</i>
					<a href="http://www.nnxyzs.com/detail/1362.html" title="荣和悦澜山109平完工实景" target="_blank">荣和悦澜山109平完工实景</a>
				</li>
				<li>
					<span class="fe70 fr">3389</span>
					<i class="num ">6</i>
					<a href="http://www.nnxyzs.com/detail/1212.html" title="名都苑168平装修实景" target="_blank">名都苑168平装修实景</a>
				</li>
				<li>
					<span class="fe70 fr">3327</span>
					<i class="num ">7</i>
					<a href="http://www.nnxyzs.com/detail/1339.html" title="瀚林学府105平装修案例" target="_blank">瀚林学府105平装修案例</a>
				</li>
				<li>
					<span class="fe70 fr">2844</span>
					<i class="num ">8</i>
					<a href="http://www.nnxyzs.com/detail/554.html" title="嘉和城温莎北郡89平装修案例" target="_blank">嘉和城温莎北郡89平装修案例</a>
				</li>
				<li>
					<span class="fe70 fr">2834</span>
					<i class="num ">9</i>
					<a href="http://www.nnxyzs.com/detail/393.html" title="中铁江湾山语城150平装修案例" target="_blank">中铁江湾山语城150平装修案例</a>
				</li>
				<li>
					<span class="fe70 fr">2666</span>
					<i class="num ">10</i>
					<a href="http://www.nnxyzs.com/detail/1235.html" title="合景天峻广场229平实景案例" target="_blank">合景天峻广场229平实景案例</a>
				</li> -->
			</ul>

		</div>
	</div>
	<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>js/ad-gallery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//案例图滚动
			var galleries = $('.ad-gallery').adGallery({loader_image: 'tpl/www/images/ad-gallery/loader.gif',animation_speed:500,effect: 'fade',slideshow: {autostart: true,speed: 3000,start_label: '播放',stop_label: '停止'} });
		//animation_speed: 动画速度
		//effect：效果  参数有 slide-hori/水平  slide-vert/垂直   resize/大小变换  fade/逐渐消失 
		//autostart: 是否自动播放 true/false
			//防盗
			var height1 = $('.ad-image-wrapper').height();
				var width1 = $('.ad-image-wrapper').width();
				$("<img />").attr({
					src: 'tpl/www/images/ad-gallery/bigshow.gif' //防盗图片路径
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/images/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" data-bd-imgshare-binded="1" border="0" align="top"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="html/php.htm"></script>
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