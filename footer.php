	<!-- 底部  -->
	<div class="box-2-youj">
		<div class="dikuanglan-2">

			<ul class="dikuanglan-2_yi">
				<div>
					<a href="http://www.nnxyzs.com/lists/11.html" title="装修案例">装修案例</a>
				</div>
				<?php
					$args=array(
						'orderby' => 'id',
						'order' => 'ASC',
						'parent' => 4,
						'number' => 6,
					);
					$categories=get_categories($args);
					foreach($categories as $category) {
						echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
					}
				?>
<!-- 				<li>
					<a href="http://www.nnxyzs.com/lists/11.html" title="家装效果案例">家装效果案例</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/14.html" title="完工实景">完工实景</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/16.html" title="视频样板房">视频样板房</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/77.html" title="公装案例">公装案例</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/62.html" title="灵感美图">灵感美图</a>
				</li> -->
			</ul>
			<ul class="dikuanglan-2_yi">
				<div>
					<a href="http://www.nnxyzs.com/lists/18.html" title="设计团队">设计团队</a>
				</div>
				<?php
					$args=array(
						'orderby' => 'id',
						'order' => 'ASC',
						'parent' => 5,
						'number' => 6,
					);
					$categories=get_categories($args);
					foreach($categories as $category) {
						echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
					}
				?>
			</ul>

			<ul class="dikuanglan-2_yi">
				<div>
					<a href="http://www.nnxyzs.com/lists/2.html" title="星艺活动">星艺活动</a>
				</div>
				<?php
					$args=array(
						'orderby' => 'id',
						'order' => 'ASC',
						'parent' => 6,
						'number' => 6,
					);
					$categories=get_categories($args);
					foreach($categories as $category) {
						echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
					}
				?>

			</ul>
			<ul class="dikuanglan-2_yi">
				<div>
					<a href="http://www.nnxyzs.com/page/43.html" title="走进星艺">走进星艺</a>
				</div>
				<li>
					<a href="http://www.nnxyzs.com/page/43.html" title="公司简介">公司简介</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/47.html" title="公司荣誉">公司荣誉</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/48.html" title="人才招聘">人才招聘</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/lists/49.html" title="联系我们">联系我们</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/73.html" title="星艺材料概述">星艺材料概述</a>
				</li>
			</ul>
			<ul class="dikuanglan-2_yi" id="footYouj">
				<div style="font-size:24px;">
					<a href="javascript:void(0);">关注我们</a>
				</div>
				<li class="ico weixin">
					<a href="javascript:void(0);">
						<i></i>
						微信
					</a>
					<img src="<?php bloginfo('template_directory'); ?>/images/5805d17ecacf9.jpg" alt="星艺微信服务号二维码">
				</li>

			</ul>
			<div class="dikuanglan-2_yi-3">
				<div class="youjiashangbi">
					<img src="<?php bloginfo('template_directory'); ?>/images/5a20bbf6345f8.png" width="240" height="66"></div>
				<div class="dianhuahaoma">0776-2856606</div>
				<div class="wenzixinxi">
					广西省百色市体育馆左侧商业街2层
					<br>
					<br>
					<a id="___szfw_logo___" href="<?php echo home_url(); ?>" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/images/cert.png" border="0"></a>
					<script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
				</div>
			</div>
		</div>
	</div>

	<div class="Column-100 youqinglianjie">
		<div class="Column clearfix">
			友情链接：&nbsp;
			<?php wp_list_bookmarks('title_li=0&categorize=0&before=&after=&limit=24&orderby=updated'); ?>
		</div>
	</div>

	<div class="zhigezhengs">
		桂ICP备18009195号&nbsp;
		<a href="<?php echo home_url();?>" class="f99" target="_blank">广东星艺装饰集团股份有限公司百色集成分公司 版权所有</a>
	</div>

	<style type="text/css">
.fudong-kuang-2{z-index: 99999;width:82px;position:fixed;right:5px;top:137px;}
.fudong-kuang-2 li{float:left;margin-top:5px;border: 1px solid #EAE8E8}
.fudong-kuang-2 li img{width:100%;display: block;}
</style>
	<ul class="fudong-kuang-2">
		<li>
			<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw" target="_blank" title="">
				<img src="<?php bloginfo('template_directory'); ?>/images/2224.jpg"></a>
		</li>

		<li>
			<a href="<?php echo get_permalink(126); ?>" target="_blank" title="">
				<img src="<?php bloginfo('template_directory'); ?>/images/2226.jpg"></a>
		</li>
		<li>
			<a href="javascript:void(0);" id="backTop">
				<img src="<?php bloginfo('template_directory'); ?>/images/2225.jpg"></a>
		</li>
	</ul>


	<!--[if lte IE 6]>
	<a href="http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank" class="IE6">系统检测到您还在使用老掉牙的IE 6……为了更好浏览页面，请更新您的浏览器……</a>
	<![endif]-->

	<!-- JiaThis Button BEGIN -->
	<!--
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jia.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/html/plugin.htm" charset="utf-8"></script>
	-->
	<!-- JiaThis Button END -->
	<!--<span id="cnzz">
		<script src="<?php bloginfo('template_directory'); ?>/js/c.js" language="JavaScript" charset="gb2312"></script>
	</span>-->
	<div style="display:none;">
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/1029_1034.js" charset="utf-8"></script>
		<iframe src="http://add.gbai.cn/qqsvc/phoneqq.ashx?action=saveQQ&amp;uid=1029&amp;wid=1034&amp;llurl=&amp;domain=www.nnxyzs.com&amp;thepage=http%3A%2F%2Fwww.nnxyzs.com%2F" scrolling="" style="display:none" width="550px" height="550px" frameborder="0"></iframe>
	</div>

	<div class="main bg">
		<a id="launchBtn" class="btnText onlineBtnText" href="javascript:;">QQ交谈</a>
		<a id="launchBtnOffline" class="btnText offlineBtnText" href="javascript:;">QQ离线</a>
	</div>

	<script>
// var _hmt = _hmt || [];
// (function() {
//   var hm = document.createElement("script");
//   hm.src = "//hm.baidu.com/hm.js?0ecbee183820699325b15374bf2d9ec3";
//   var s = document.getElementsByTagName("script")[0];
//   s.parentNode.insertBefore(hm, s);
// })();
// </script>

	<!-- /底部 -->
	<script src="<?php bloginfo('template_directory'); ?>/swiper-4.4.2/dist/js/swiper.min.js"></script>
	<script>
		var mySwiper = new Swiper ('.swiper-container', {
			direction: 'horizontal', // 垂直切换选项
			loop: true, // 循环模式选项

			// 如果需要分页器
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},

			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// 如果需要滚动条

			autoplay: true,
		})
		var iNewsActivity = new Swiper ('.iNews-activity', {
			direction: 'horizontal', // 垂直切换选项
			loop: true, // 循环模式选项

			// 如果需要分页器
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},

			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// 如果需要滚动条

			autoplay: true,
		})

		var thumbpgwwide = new Swiper('.thumbpgwwide', {
			spaceBetween: 10,
			slidesPerView: 8,
			watchSlidesVisibility: true,
		}) 	
		var pgwwide = new Swiper('.pgwwide', {
			direction: 'horizontal', // 垂直切换选项
			loop: true, // 循环模式选项

			// 如果需要分页器
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},

			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-prev',
				prevEl: '.swiper-button-next',
			},
			spaceBetween: 10,
			thumbs: {
				swiper: thumbpgwwide,
			},

			// 如果需要滚动条

			autoplay: true,

		}) 	
		var thumbRenovationWide = new Swiper('.thumb-renovation-wide', {
			spaceBetween: 10,
			slidesPerView: 8,
			watchSlidesVisibility: true,
		}) 	
		var renovationWide = new Swiper('.renovation-wide', {
			direction: 'horizontal', // 垂直切换选项
			loop: true, // 循环模式选项

			// 如果需要分页器
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},

			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-prev',
				prevEl: '.swiper-button-next',
			},
			spaceBetween: 10,
			thumbs: {
				swiper: thumbRenovationWide,
			},

			// 如果需要滚动条

			autoplay: true,

		}) 
		var thumbInspirBeautyWide = new Swiper('.thumb-inspir-beauty-wide', {
			spaceBetween: 10,
			slidesPerView: 8,
			watchSlidesVisibility: true,
		}) 	
		var inspirBeautyWide = new Swiper('.inspir-beauty-wide', {
			direction: 'horizontal', // 垂直切换选项
			loop: true, // 循环模式选项

			// 如果需要分页器
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},

			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-prev',
				prevEl: '.swiper-button-next',
			},
			spaceBetween: 10,
			thumbs: {
				swiper: thumbInspirBeautyWide,
			},

			// 如果需要滚动条

			autoplay: true,

		}) 			
	</script>
</body>
</html>