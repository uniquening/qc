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
				<?php qfl_show_cat_id_slug(6); ?>

			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f6940059dc7.jpg" class="autoWidth"></div>

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
					if ($category_term_id == $cat_ID) {
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
		<ul class="NewsList clearfix">
			<?php $count = 0; ?>
			<?php global $post; if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++;
				if ($count % 3 == 0) {
					echo '<li id="end" >';
				} else {
					echo '<li>';
				}
			?>
				<div class="ht"> <em class="fari fr">READ:<?php if(function_exists('the_views')) { the_views(); } ?></em>
					<span class="time"> <i class="year"><?php the_time('y') ?></i>
						<i><?php the_time('m') ?></i>
						<i><?php the_time('d') ?></i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="<?php the_permalink() ?>" title="“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
				</h3>
				<a href="<?php the_permalink() ?>" title="“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="imga fl">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5bda6554e2278.jpg" alt="“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"> -->
					<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
				</a>
				<p><?php echo mb_strimwidth(get_the_content(), 0, 120,''); ?></p>
				
				<a href="<?php the_permalink() ?>" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			<?php
				echo '</li>';
			?>

			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>


<!-- 			<li>
				<div class="ht"> <em class="fari fr">READ:36</em>
					<span class="time"> <i class="year">18</i>
						<i>10</i>
						<i>25</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1454.html" title="“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1454.html" title="“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5bda6554e2278.jpg" alt="“<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"></a>
				<p>
					10月14日，于南宁会展中心8号展厅中，“星艺装饰•好饰连城5（南宁站）”在狂欢中圆满画上句号。感谢中行、建行以及各...
				</p>
				<a href="http://www.nnxyzs.com/detail/1454.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li> -->
<!-- 			<li class="">
				<div class="ht"> <em class="fari fr">READ:105</em>
					<span class="time">
						<i class="year">18</i>
						<i>09</i>
						<i>18</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1432.html" title="热烈祝贺星艺装饰荣获“全国室内装饰行业优秀企业”荣誉称号">热烈祝贺星艺装饰荣获“全国室内装饰行业优秀企业”荣誉称号</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1432.html" title="热烈祝贺星艺装饰荣获“全国室内装饰行业优秀企业”荣誉称号" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5ba60cf3aa4e3.jpg" alt="热烈祝贺星艺装饰荣获“全国室内装饰行业优秀企业”荣誉称号"></a>
				<p>
					9月10日，由中国室内装饰协会、联合国教科文组织“创意城市”（上海）推进工作办公室主办的2018中国室内设计周暨上海国...
				</p>
				<a href="http://www.nnxyzs.com/detail/1432.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li id="end" class="">
				<div class="ht">
					<em class="fari fr">READ:155</em>
					<span class="time">
						<i class="year">18</i>
						<i>09</i>
						<i>06</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1421.html" title="这个大会上，星艺南宁和一线商家们这么承诺">这个大会上，星艺南宁和一线商家们这么承诺</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1421.html" title="这个大会上，星艺南宁和一线商家们这么承诺" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5b90ece56248d.jpg" alt="这个大会上，星艺南宁和一线商家们这么承诺"></a>
				<p>
					2018年9月1日，星艺装饰•好饰连城5（南宁站）活动启动大会在南宁曼尔顿国际酒店隆重举行，星艺装饰南宁分公司总经理周...
				</p>
				<a href="http://www.nnxyzs.com/detail/1421.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li>
				<div class="ht">
					<em class="fari fr">READ:269</em>
					<span class="time">
						<i class="year">18</i>
						<i>07</i>
						<i>18</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1332.html" title="星艺装饰第十四届装饰文化节（南宁站）圆满落幕">星艺装饰第十四届装饰文化节（南宁站）圆满落幕</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1332.html" title="星艺装饰第十四届装饰文化节（南宁站）圆满落幕" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5b4ffbbdf3781.jpg" alt="星艺装饰第十四届装饰文化节（南宁站）圆满落幕"></a>
				<p>6月10日，星艺装饰第十四届装饰文化节（南宁站）在会展中心圆满落下帷幕，在广大客户和五十一家一线品牌联盟建材商家、...</p>
				<a href="http://www.nnxyzs.com/detail/1332.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li class="">
				<div class="ht">
					<em class="fari fr">READ:592</em>
					<span class="time">
						<i class="year">18</i>
						<i>05</i>
						<i>27</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1252.html" title="星艺愿援助“某装饰公司跑路”事件受害业主，为规范行业行为，促进行业诚信献力">星艺愿援助“某装饰公司跑路”事件受害业主，为规范行业行为，促进行业诚信献力</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1252.html" title="星艺愿援助“某装饰公司跑路”事件受害业主，为规范行业行为，促进行业诚信献力" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5b0f69731dd79.jpg" alt="星艺愿援助“某装饰公司跑路”事件受害业主，为规范行业行为，促进行业诚信献力"></a>
				<p>近期，“某装饰公司跑路”事件在南宁、柳州等地闹得沸沸扬扬，因为涉及的人数较多、金额巨大，涉事公司半个多月过去了...</p>
				<a href="http://www.nnxyzs.com/detail/1252.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li id="end" class="hover">
				<div class="ht">
					<em class="fari fr">READ:556</em>
					<span class="time">
						<i class="year">18</i>
						<i>03</i>
						<i>14</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1158.html" title="践行承诺，星艺装饰上门服务月正在进行中">践行承诺，星艺装饰上门服务月正在进行中</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1158.html" title="践行承诺，星艺装饰上门服务月正在进行中" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5aa8ec5e5e72c.jpg" alt="践行承诺，星艺装饰上门服务月正在进行中"></a>
				<p>星艺“服务月”，是每年新年开春之际，星艺工程部上门回访新老客户，实地检查，排除隐患，解决入住后产生的一些小瑕疵...</p>
				<a href="http://www.nnxyzs.com/detail/1158.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li>
				<div class="ht">
					<em class="fari fr">READ:974</em>
					<span class="time">
						<i class="year">17</i>
						<i>10</i>
						<i>17</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1061.html" title="2017年好饰连城4广西区（南宁站）圆满落幕">2017年好饰连城4广西区（南宁站）圆满落幕</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1061.html" title="2017年好饰连城4广西区（南宁站）圆满落幕" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/59e5c8168d1ed.jpg" alt="2017年好饰连城4广西区（南宁站）圆满落幕"></a>
				<p>
					在历经一个多月的时间里，2017年好饰连城4广西区（南宁站）圆满落下了帷幕，据不完全统计，此次活动全国联动，广西区域...
				</p>
				<a href="http://www.nnxyzs.com/detail/1061.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li>
				<div class="ht">
					<em class="fari fr">READ:883</em>
					<span class="time">
						<i class="year">17</i>
						<i>09</i>
						<i>06</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1018.html" title="2017年好饰连城4广西区启动大会暨1000单任务军令状签订仪式在南宁盛大举行">2017年好饰连城4广西区启动大会暨1000单任务军令状签订仪式在南宁盛大举行</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1018.html" title="2017年好饰连城4广西区启动大会暨1000单任务军令状签订仪式在南宁盛大举行" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/59af7101a1246.jpg" alt="2017年好饰连城4广西区启动大会暨1000单任务军令状签订仪式在南宁盛大举行"></a>
				<p>
					广东星艺装饰集团“好饰连城4全国480城大联动”广西站启动暨1000单任务军令状仪式于9月3日在南宁仙葫维也纳大酒店盛大...
				</p>
				<a href="http://www.nnxyzs.com/detail/1018.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li id="end">
				<div class="ht">
					<em class="fari fr">READ:530</em>
					<span class="time">
						<i class="year">17</i>
						<i>08</i>
						<i>13</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/1009.html" title="星艺装饰26周年暨入驻绿城南宁15周年庆活动圆满结束">星艺装饰26周年暨入驻绿城南宁15周年庆活动圆满结束</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/1009.html" title="星艺装饰26周年暨入驻绿城南宁15周年庆活动圆满结束" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5990223468029.jpg" alt="星艺装饰26周年暨入驻绿城南宁15周年庆活动圆满结束"></a>
				<p>
					8月12日，星艺装饰26周年暨入驻绿城15周年庆活动在沃顿国际大酒店圆满举办成功。本次活动上，与建行、中行合作装修分期...
				</p>
				<a href="http://www.nnxyzs.com/detail/1009.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li>
				<div class="ht">
					<em class="fari fr">READ:539</em>
					<span class="time">
						<i class="year">17</i>
						<i>06</i>
						<i>14</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/927.html" title="破十三年记录 2017年第13届广西南宁装饰文化节510单完美收官">破十三年记录 2017年第13届广西南宁装饰文化节510单完美收官</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/927.html" title="破十三年记录 2017年第13届广西南宁装饰文化节510单完美收官" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5940af5419d2d.jpg" alt="破十三年记录 2017年第13届广西南宁装饰文化节510单完美收官"></a>
				<p>中国星艺•广西第十三届装饰文化节南宁站活动今天圆满落幕，星艺人再次以创纪录的510单之成绩，又一次践行了“客户赞许...</p>
				<a href="http://www.nnxyzs.com/detail/927.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li>
				<div class="ht">
					<em class="fari fr">READ:393</em>
					<span class="time">
						<i class="year">17</i>
						<i>06</i>
						<i>04</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/917.html" title="6月3日中行携手星艺装饰 爱家大行动 圆满落幕">6月3日中行携手星艺装饰 爱家大行动 圆满落幕</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/917.html" title="6月3日中行携手星艺装饰 爱家大行动 圆满落幕" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/5933b16ea3827.jpg" alt="6月3日中行携手星艺装饰 爱家大行动 圆满落幕"></a>
				<p>为回馈大家长期既往地支持和厚爱，6月3日，中国银行携手星艺装饰在南宁锦华大酒店一楼和谐厅联合举办了以“爱家大行动...</p>
				<a href="http://www.nnxyzs.com/detail/917.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li>
			<li id="end">
				<div class="ht">
					<em class="fari fr">READ:523</em>
					<span class="time">
						<i class="year">17</i>
						<i>03</i>
						<i>29</i>
					</span>
					<i class="line"></i>
				</div>
				<h3>
					<a href="http://www.nnxyzs.com/detail/787.html" title="大咖一起来暨粤派工艺全新升级5.0活动圆满结束">大咖一起来暨粤派工艺全新升级5.0活动圆满结束</a>
				</h3>
				<a href="http://www.nnxyzs.com/detail/787.html" title="大咖一起来暨粤派工艺全新升级5.0活动圆满结束" class="imga fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/58db7ca655513.jpg" alt="大咖一起来暨粤派工艺全新升级5.0活动圆满结束"></a>
				<p>
					为期一个月，备受好评的“大咖一起来•粤派工艺全新升级5.0”活动于3月26日在跨世纪大酒店（5楼）圆满结束，在此衷心的...
				</p>
				<a href="http://www.nnxyzs.com/detail/787.html" title="查看详情" class="pubView">VIEW&gt;&gt;</a>
			</li> -->
		</ul>
	</div>
	<div class="paging">
			<?php wp_pagenavi(); ?> <div class="wp-pagenavi"><a>共 <?php echo $count; ?> 条</a></div>
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