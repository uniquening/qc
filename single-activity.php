<?php
/*
Template Name Posts: 活动(activity)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 6;
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
				<!--<span style="font-size:40px;color:#fff;font-weight:blod;"><?php echo $cur_par_cat_slug ?></span>
				<span style="font-size:30px;color:#fff;"><?php echo $cur_par_cat_name ?></span> -->
				<?php qfl_show_cat_id_slug(6); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/5a1e6603296b3.jpg" class="autoWidth" data-bd-imgshare-binded="1">
	</div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>
			<?php
				$args=array(
					'orderby' => 'id',
					'order' => 'ASC',
					'parent' => 6,
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
					echo '<a href="' . get_category_link($category_term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';										     
				}
			?>
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="msgTitle"> <i class="line"></i>
			<!-- 社会化分享 -->
			<div class="jiathis_style fr">

				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542091723489">

					<a href="#" class="bds_more" data-cmd="more"></a>
					<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
					<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
					<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
					<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
					<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1><?php echo $title; ?></h1>
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
					<!-- <a href="http://www.nnxyzs.com/detail/1321.html" title=" 2018年星艺装饰，筑家27载，入邕16周年感恩大行动" class="prev">上一篇: 2018年星艺装饰，筑家27载，入邕16周年感恩...</a>
					<a href="http://www.nnxyzs.com/detail/1458.html" title="星艺装饰家装福利狂欢节！" class="next">下一篇:星艺装饰家装福利狂欢节！</a> -->
				</div> <em>DATE：<?php the_time('Y-m-d');?></em> <em>READ：
					<span class="fe70">463</span></em> 
				<em class="f66">发布者：<?php the_author(); ?>星艺小编</em>
			</div>

			<div class="msgContent">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>
			</div>
			<div class="hr20"></div>

		</div>
		<!--//Column-L-->

		<div class="Column-R">
			<div class="casesInd clearfix">
				<div class="ht">
					<img src="<?php bloginfo('template_directory'); ?>/images/note.png" class="fr" data-bd-imgshare-binded="1">
					我家需要装修
					<br>
					<span class="fe70" style="font-size:15px;">在线获取省钱装修方案</span>
				</div>
				<p>提交信息，试看</p>
				<form method="post" action="/Messages/add.html" target="_blank" onsubmit="return casesInd_submit();">
					<input type="hidden" id="tourl" name="tourl" value="search?cid=1&amp;ext[houses]=">
					<input type="hidden" id="tomsg" name="tomsg" value="预约成功，我们将通过电话联系您！马上跳转查看小区案例">
					<input type="hidden" id="subject" name="subject" value="来源：1月30日长乐家装大典，有家装饰1元开仓！">
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
												<input type="text" class="input-text" name="name" id="contact" style="width:238px;" placeholder="&nbsp;请输入您的称呼"></td>
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
												<input type="text" class="input-text" name="phone" id="phone" style="width:238px;" placeholder="&nbsp;请输入您的手机号码"></td>
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
												<input type="text" class="input-text" name="loupan" id="addr" style="width:238px;" placeholder="&nbsp;请输入您的楼盘名称"></td>
											<input type="hidden" name="laiyuanip" value="117.36.239.19">
											<td class="clue_on">&nbsp;请输入您的楼盘名称</td>
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
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:120px;float:left;" placeholder="请输入验证码">

							<div style="width:100px;float:left;">
								<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="de" onclick="reloadcode()" data-bd-imgshare-binded="1" width="100" height="30"></div>
							<div class="clue_on" style="float:left;">请输入验证码</div>
						</div>

					</div>
					<div class="clear"></div>
					<br>
					<div class="table">
						<div class="left">&nbsp;</div>
						<div class="right">
							<input type="submit" class="button" id="_phpok_submit" value="提交信息"></div>
					</div>
					<p>为您提供小区户型装修效果图参考！</p>
				</form>
			</div>
			<div class="hr10"></div>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/8eb83a30a8694069a0cb06eb0776e76b.js"></script>
			<script type="text/javascript">
				function reloadcode(){
				var verify=document.getElementById('de');

				verify.setAttribute('src','/Messages/verify.html?'+Math.random());

				}
				function casesInd_submit(){
					var ci_contact = $(".casesInd #contact");
					if(!ci_contact.val()){
							alert("请输入您的称呼");
							ci_contact.focus();
							return false;
					}
					var ci_phone = $(".casesInd #phone");
					if(!(/^1[3|5|8][0-9]\d{7,8}$/.test(pi_phone.val()))){
							alert("手机号码未填写或填写错误");
							ci_phone.focus();
							return false;
					}
					var ci_check = $(".casesInd #sys_check");
					if(!ci_check.val()){
							alert("请输入验证码");
							ci_check.focus();
							return false;
					}
					getid("_phpok_submit").disabled = true;
					return true;
				}
				$(document).ready(function(){
				  $(".casesInd").find("input[type='text'],textarea").each(function() {
						var clue_on = $(this).closest(".right").find(".clue_on");
							$(this).attr('placeholder', clue_on.text());
				  }).placeholder();
				});
			</script>
			<!--[if !IE]-->
			<script type="text/javascript">
				$(document).ready(function(){
				  $(".casesInd").find("input").each(function(){
					  var placeholder = $(this).attr("placeholder");
					  $(this).focus(function(){$(this).attr("placeholder",'');});
					  $(this).blur(function(){$(this).attr("placeholder",placeholder);});
				  });
				});
			</script>
			<!--[endif]-->
			<div class="bigTitle">
				热装楼盘
				<i></i>
			</div>

			<ul class="pubCTop clearfix">

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
						<img src="<?php bloginfo('template_directory'); ?>/images/5be291beeb8f0.jpg" alt="荣和悦澜山89平轻奢实景" data-bd-imgshare-binded="<?php echo $count; ?>">
						<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
					</a>
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
			<div class="hr20"></div>
			<div class="bigTitle">
				更多精彩推荐
				<i></i>
			</div>
			<ul class="prMoreNews clearfix">
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=17' . $mcatID. '&caller_get_posts=1&showposts=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<li style="border-bottom:1px dotted #EAEAEA;line-height: 30px;">
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="f66 f14">
							<p><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></p>
						</a>
					</li>

				<!--需要循环的模块-->
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>

				<!-- <li style="border-bottom:1px dotted #EAEAEA;line-height: 30px;">
					<a href="http://www.nnxyzs.com/detail/1458.html" title="星艺装饰家装福利狂欢节！" target="_blank" class="f66 f14">
						<p>星艺装饰家装福利狂欢节！</p>
					</a>
				</li>
				<li style="border-bottom:1px dotted #EAEAEA;line-height: 30px;">
					<a href="http://www.nnxyzs.com/detail/1420.html" title="2018年好饰连城5全国460城大联动（南宁站）" target="_blank" class="f66 f14">
						<p>2018年好饰连城5全国460城大联动</p>
					</a>
				</li>
				<li style="border-bottom:1px dotted #EAEAEA;line-height: 30px;">
					<a href="http://www.nnxyzs.com/detail/1321.html" title=" 2018年星艺装饰，筑家27载，入邕16周年感恩大行动" target="_blank" class="f66 f14">
						<p>2018年星艺装饰，筑家27载，入邕</p>
					</a>
				</li>
				<li style="border-bottom:1px dotted #EAEAEA;line-height: 30px;">
					<a href="http://www.nnxyzs.com/detail/1192.html" title="中国·星艺广西第十四届装饰文化节（南宁站）" target="_blank" class="f66 f14">
						<p>中国·星艺广西第十四届装饰文化</p>
					</a>
				</li>
				<li style="border-bottom:1px dotted #EAEAEA;line-height: 30px;">
					<a href="http://www.nnxyzs.com/detail/1157.html" title="盛饰开年旺满园暨2018设计潮流品鉴会" target="_blank" class="f66 f14">
						<p>盛饰开年旺满园暨2018设计潮流品</p>
					</a>
				</li>
				<li style="border-bottom:1px dotted #EAEAEA;line-height: 30px;">
					<a href="http://www.nnxyzs.com/detail/1112.html" title="“跨年装修、保你无忧”全国480城跨年大联动（南宁站）" target="_blank" class="f66 f14">
						<p>“跨年装修、保你无忧”全国480城</p>
					</a>
				</li> -->
			</ul>
			<div class="hr20"></div>
			<div class="bigTitle">
				热门活动
				<i></i>
			</div>
			<div class="iNews-activity clearfix prSpec" id="prSpec">
				
			    <div class="swiper-wrapper">
	    			<?php 
						$imageSrc =  get_post_meta(479, 'imageSrc', false); 
						$imagelink = get_post_meta(479, 'imagelink', false);
						$imagealt =  get_post_meta(479, 'imagealt', false);
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
			</div>
			
			<style>
				.iNews-activity {
					min-width: 270px;
					width: 100%;
					height: auto;
					overflow: hidden;
					position: relative;
				}
				.iNews-activity img {
					width: 100%;
					height: 100%;
				}				
			</style>

			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/c4fc37d2b611433ca467bb7595c64a6c.js"></script>
			<script type="text/javascript">jQuery("#prSpec").slide({titCell:".len",mainCell:".bd ul",effect:"leftLoop",autoPage:"<li>&nbsp;</li>",autoPlay:true, trigger:"mouseover"});</script>
		</div>
		<!--//Column-R-->

		<div class="Column-R recommend-box">
			<div class="bigTitle">
				大家都在看
				<a href="javascript:;"></a>
			</div>
			<ul class="recommend-list">
				<li>
					<a href="/detail/1454.html">“星艺装饰•好饰连城5（南宁站）”在圆满画上句号</a>
				</li>
				<li>
					<a href="/detail/1432.html">热烈祝贺星艺装饰荣获“全国室内装饰行业优秀企业”荣誉称号</a>
				</li>
				<li>
					<a href="/detail/1421.html">这个大会上，星艺南宁和一线商家们这么承诺</a>
				</li>
				<li>
					<a href="/detail/1332.html">星艺装饰第十四届装饰文化节（南宁站）圆满落幕</a>
				</li>
				<li>
					<a href="/detail/1252.html">星艺愿援助“某装饰公司跑路”事件受害业主，为规范行业行为，促进行业诚信献力</a>
				</li>
				<li>
					<a href="/detail/1158.html">践行承诺，星艺装饰上门服务月正在进行中</a>
				</li>
			</ul>
		</div>

		<div class="bigTitle">
			更多精彩推荐
			<i></i>
		</div>
		<ul class="ThinkList clearfix">
			<?php if (have_posts()) : ?>
			<?php query_posts('cat=17&caller_get_posts=1&showposts=6'); ?>
			<?php while (have_posts()) : the_post(); ?>
				<li class="even">
					<div class="ct">
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?>" class="imga fl">
							<img src="<?php bloginfo('template_directory'); ?>/images/59ab64516272d.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" data-bd-imgshare-binded="1"></a>
						<div class="txt fl">
							<h3>
								<a href="<?php the_permalink(); ?>" title="半包装修业主需要买哪些材料？"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
							</h3>
							<em class="fari">DATE:<?php the_time('Y-m=d'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>
							<em class="fari">READ:<?php if(function_exists('the_views')) { the_views(); } ?>1166</em>
							<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 70,"……"); //修改显示字数 ?>
							<!-- <p class="note">半包装修包人工和辅材，地板、卫浴等主材方面材料都是需要业主自行选购，常见装修方式除了半包外，还有全包...</p> -->
						</div>
						<a href="<?php the_permalink(); ?>" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>

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