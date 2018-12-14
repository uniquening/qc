<?php get_header(); ?>
<?php
    $cat_ID = get_query_var('cat');
    $category = get_category($cat_ID);
    $cat_parent_ID = $category->category_parent;    
?>
	<!-- 主体 -->
	<div class="Column-100 moduleTop">
		<div class="Column clearfix">
			<div class="Leader fr">
				当前位置：
				<a href="<?php echo home_url();?>">首页</a>
				&nbsp;&gt;&nbsp;
				<?php
					if ($cat_parent_ID) {
				?>
				<a href="<?php echo get_category_link($cat_parent_ID); ?>"><?php echo get_cat_name($cat_parent_ID);?></a>
				&nbsp;&gt;&nbsp;
				<?php
					} else {
						echo "";
					}
				?>
				<a href="<?php echo get_category_link($cat_ID); ?>"><?php echo get_cat_name($cat_ID);?></a>
			</div>
			<div class="moduleTt news">
				<?php qfl_show_cat_id_slug(66); ?>

			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f68a6d2f2cd.jpg" class="autoWidth"></div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>

				<li class="current">
					<a href="<?php echo get_category_link($cat_ID); ?>">
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
<!-- 				<li>
					<a href="http://www.nnxyzs.com/lists/37.html">
						<span>常见疑问解答</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/36.html">
						<span>服务承诺</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/35.html">
						<span>装修流程</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/39.html">
						<span>在线订单</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/55.html">
						<span>在线保修</span>
					</a>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<ul class="ThinkList clearfix">

			<?php $count = 0; ?>
			<?php global $post; if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++; ?>
			<li class="even">
				<div class="ct">
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="imga fl">
						<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5b98d909d4512.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"> -->
						<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
					</a>
					<div class="txt fl">
						<h3>
							<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
						</h3> <em class="fari fr">READ:<?php if(function_exists('the_views')) { the_views(); } ?></em>
						<span class="time"> <i class="year"><?php the_time('y') ?></i>
							<i><?php the_time('m') ?></i>
							<i><?php the_time('d') ?></i>
						</span>

						<div class="note">
							<?php echo mb_strimwidth(get_the_content(), 0, 200, ''); ?>
						</div>
						
						<a href="<?php the_permalink() ?>" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>

			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>			

<!-- 			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1430.html" title="龙光玖珑湖业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b98d909d4512.jpg" alt="龙光玖珑湖业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1430.html" title="龙光玖珑湖业主送来锦旗">龙光玖珑湖业主送来锦旗</a>
						</h3> <em class="fari fr">READ:129</em>
						<span class="time"> <i class="year">18</i>
							<i>09</i>
							<i>12</i>
						</span>
						<p class="note">
							9月9日一大早收到客户送来的锦旗，锦旗胜情书，客户对星艺的项目监理和服务团队竖起大拇指，（客户原话：非常不错！很专业，负责...
						</p>
						<a href="http://www.nnxyzs.com/detail/1430.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li> -->
<!-- 			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1391.html" title="荣和千千树业主赠送锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b6e42ca00886.jpg" alt="荣和千千树业主赠送锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1391.html" title="荣和千千树业主赠送锦旗">荣和千千树业主赠送锦旗</a>
						</h3> <em class="fari fr">READ:174</em>
						<span class="time">
							<i class="year">18</i>
							<i>08</i>
							<i>11</i>
						</span>
						<p class="note">
							2018年8月，荣和千千树美美的孕妇业主送来锦旗一副，称赞星艺装饰项目经理李乾乾尽心尽责，最强监理，严格监理，热情服务，该项目...
						</p>
						<a href="http://www.nnxyzs.com/detail/1391.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1274.html" title="天誉花园业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b3356aa6dcb1.jpg" alt="天誉花园业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1274.html" title="天誉花园业主送来锦旗">天誉花园业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:153</em>
						<span class="time">
							<i class="year">18</i>
							<i>06</i>
							<i>27</i>
						</span>
						<p class="note">2018年6月27日，天誉花园业主黄先生送来锦旗，赞扬星艺装饰南宁公司设计师陈忠波尽心尽责，设计精湛。</p>
						<a href="http://www.nnxyzs.com/detail/1274.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1273.html" title="奥园瀚林朗庭业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b31ef19713db.jpg" alt="奥园瀚林朗庭业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1273.html" title="奥园瀚林朗庭业主送来锦旗">奥园瀚林朗庭业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:151</em>
						<span class="time">
							<i class="year">18</i>
							<i>06</i>
							<i>24</i>
						</span>
						<p class="note">2018年6月23日，奥园瀚林朗庭业主送来锦旗称赞广东星艺装饰南宁公司项目经理刘国江工匠精神，服务周到。</p>
						<a href="http://www.nnxyzs.com/detail/1273.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1039.html" title="中国中铁业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/59ce13605c63b.jpg" alt="中国中铁业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1039.html" title="中国中铁业主送来锦旗">中国中铁业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:795</em>
						<span class="time">
							<i class="year">17</i>
							<i>09</i>
							<i>29</i>
						</span>
						<p class="note">
							2017年9月29日，中国中铁送来锦旗，赞扬星艺装饰设计精湛 施工优良，特别感谢设计师杨刚，项目经理：陈景奇，南宁星艺装饰余工楼...
						</p>
						<a href="http://www.nnxyzs.com/detail/1039.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1031.html" title="江湾山语城业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/59c78062716a1.jpg" alt="江湾山语城业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1031.html" title="江湾山语城业主送来锦旗">江湾山语城业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:463</em>
						<span class="time">
							<i class="year">17</i>
							<i>09</i>
							<i>24</i>
						</span>
						<p class="note">正值好饰连城4活动期间，江湾山语城业主送来锦旗一面，赞誉工程部项目经理何工何飞工作细致，服务周到。</p>
						<a href="http://www.nnxyzs.com/detail/1031.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/1016.html" title="师范学院业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/59abb81292846.jpg" alt="师范学院业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/1016.html" title="师范学院业主送来锦旗">师范学院业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:457</em>
						<span class="time">
							<i class="year">17</i>
							<i>09</i>
							<i>02</i>
						</span>
						<p class="note">2017年9月2日，师范学院业主梁姐送来锦旗，赞扬广东星艺装饰南宁集成公司工程部项目经理李宁认真负责，工艺精湛。</p>
						<a href="http://www.nnxyzs.com/detail/1016.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/945.html" title="荣和千千树业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/594f6c6795626.jpg" alt="荣和千千树业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/945.html" title="荣和千千树业主送来锦旗">荣和千千树业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:508</em>
						<span class="time">
							<i class="year">17</i>
							<i>06</i>
							<i>25</i>
						</span>
						<p class="note">
							2016年年底好饰连城3签订的业主，把装修交给星艺后，对整个装修过程非常满意，真正诠释了“把装修交给我们，您放心上班去”的理念...
						</p>
						<a href="http://www.nnxyzs.com/detail/945.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/924.html" title="云星华府业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/593b6ce1b0e73.jpg" alt="云星华府业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/924.html" title="云星华府业主送来锦旗">云星华府业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:468</em>
						<span class="time">
							<i class="year">17</i>
							<i>06</i>
							<i>09</i>
						</span>
						<p class="note">6月9日中国广西第十三届装饰文化节（南宁站）现场云星华府业主送来锦旗，感谢设计师项目经理，工艺精湛，服务周到。</p>
						<a href="http://www.nnxyzs.com/detail/924.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li>
			<li class="even">
				<div class="ct">
					<a href="http://www.nnxyzs.com/detail/872.html" title="联发君澜业主送来锦旗" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/59155a4fab225.jpg" alt="联发君澜业主送来锦旗"></a>
					<div class="txt fl">
						<h3>
							<a href="http://www.nnxyzs.com/detail/872.html" title="联发君澜业主送来锦旗">联发君澜业主送来锦旗</a>
						</h3>
						<em class="fari fr">READ:574</em>
						<span class="time">
							<i class="year">17</i>
							<i>05</i>
							<i>12</i>
						</span>
						<p class="note">
							联发君澜业主林女士2017年5月12日送来锦旗，赞扬星艺装饰设计师朱晓丽和项目经理韩易书工作认真、客户至上、施工规范、服务周到。...
						</p>
						<a href="http://www.nnxyzs.com/detail/872.html" title="查看详情" class="fe70">详情&gt;&gt;</a>
					</div>
				</div>

			</li> -->

		</ul>

		<div class="paging">
			<?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/images/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" border="0" align="top"></div>
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