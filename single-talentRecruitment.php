<?php
/*
Template Name Posts: 人才招聘(talent recruitment)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 65;
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
				<?php qfl_show_cat_id_slug(65); ?>

			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f68af30afa6.jpg" class="autoWidth"></div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>
				<?php $var = null; 
					global $post;
					
				?>
				<?php if (have_posts()) : ?>
				<?php query_posts('cat=65&caller_get_posts=1&showposts=6'); ?>
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
					<a href="http://www.nnxyzs.com/page/43.html">
						<span>公司简介</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/47.html">
						<span>公司荣誉</span>
					</a>
				</li>
				<li class="current">
					<a href="http://www.nnxyzs.com/lists/48.html">
						<span>人才招聘</span>
					</a>
				</li>

				<li>
					<a href="http://www.nnxyzs.com/lists/49.html">
						<span>联系我们</span>
					</a>
				</li>
				<li>
					<a href="http://www.nnxyzs.com/page/73.html">
						<span>星艺材料概述</span>
					</a>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">
				<span class="jiathis_txt">分享到：</span>
				<a class="jiathis_button_tsina" title="分享到新浪微博">
					<span class="jiathis_txt jiathis_separator jtico jtico_tsina">新浪微博</span>
				</a>
				<a class="jiathis_button_weixin" title="分享到微信">
					<span class="jiathis_txt jiathis_separator jtico jtico_weixin">微信</span>
				</a>
				<a class="jiathis_button_qzone" title="分享到QQ空间">
					<span class="jiathis_txt jiathis_separator jtico jtico_qzone">QQ空间</span>
				</a>
				<a class="jiathis_button_tqq" title="分享到腾讯微博">
					<span class="jiathis_txt jiathis_separator jtico jtico_tqq">腾讯微博</span>
				</a>
				<a class="jiathis_button_cqq" title="分享到QQ好友">
					<span class="jiathis_txt jiathis_separator jtico jtico_cqq">QQ好友</span>
				</a>
				<a href="javascript:;" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
			</div>
			<h1>人才招聘</h1>
		</div>
		<div class="Column-L">
			<div class="hr20"></div>

			<ul class="FaqList clearfix">
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						客户经理
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							岗位职责：
							<br>
							1、为客户做详细的家装介绍，并根据不同的客户对象，为其指派合适的设计师并督促设计师完成设计任务；
							<br>
							2、负责来客接待访问，客户回访，跟进客户问题，确保客户满意度的提升；
							<br>
							3、做好售前、售后指导和服务工作； 与各部门紧密配合，协调沟通；
							<br>
							4、VIP客户重点维护。
							<br>
							任职要求：
							<br>
							1、形象气质俱佳，男女不限（简历附相片），性格开朗，吃苦能力强，口头表达能力强，反应机灵；
							<br>
							2、工作责任心强，思路清晰，做事有条理，适应能力强；
							<br>
							3、熟练使用各种办公软件；
							<br>
							4、要求同行工作经验者优先。
							<br>
							公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
							<br>
							员工待遇：
							<br>
							1、薪资：职务工资+责任工资+提成+餐补。
							<br>
							2、全面培训：新员工培训+专业知识培训+素养培训；
							<br>
							3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
							<br></div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						家装顾问
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							<p class="MsoNormal">
								<span style="font-family:宋体;font-size:12px;line-height:1.5;">
									岗位职责：&nbsp;
									<br>
									1、分析客户装修需求，为客户提供专业的装修咨询服务；
									<br>
									2、通过电话、微信等形式挖掘潜在客户，并将潜在客户邀约至公司进行业务洽谈；&nbsp;
									<br>
									3、熟练掌握公司的核心的差异化竞争力。
									<br>
									任职要求：
									<br>
									1、积极乐观，认同企业文化，价值观统一，自我驱动力强；
									<br>
									2、抗压能力强，愿意挑战高薪；
									<br>
									3、有团队精神，善于和他人合作，乐于分享；
									<br>
									4、为人正直，愿意脚踏实地，肯吃苦耐劳。
									<br></span>
							</p>
							<p class="MsoNormal">
								<span style="font-family:宋体;font-size:12px;line-height:1.5;">
									公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
									<br>
									员工待遇：
									<br>
									1、薪资：职务工资+责任工资+提成+餐补。
									<br>
									2、全面培训：新员工培训+专业知识培训+素养培训；
									<br>
									3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
									<br>
									<br></span>
							</p>
							<p class="MsoNormal">
								<span style="font-family:宋体;font-size:12px;line-height:1.5;"></span>
								<span style="font-size:12px;line-height:1.5;font-family:宋体;"></span>
								<span style="font-size:12px;line-height:1.5;font-family:宋体;"></span>
							</p>
						</div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						网络营销
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							岗位职责：
							<br>
							1、负责官方网络平台的运营工作，开拓及维护网络营销渠道；
							<br>
							2、负责运营官方微信、微博，掌握市场动态，策划并制定可行的有效的适合公司的网络营销策略；
							<br>
							3、负责网站搜索优化，相关网站的合作等，配合公司业务在相适应的网站上进行信息发布与管理。
							<br>
							任职要求：
							<br>
							1、中专及以上学历，接收应届毕业生，对销售类工作有浓厚兴趣；&nbsp;
							<br>
							2、能吃苦耐劳，具备强烈的成就动机、良好的客户服务意识和抗压能力；
							<br>
							<p>3、乐观外向、乐于与人交往，具备良好的语言表达、人际沟通能力与执行力；</p>
							<p>
								公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
								<br>
								员工待遇：
								<br>
								1、薪资：职务工资+责任工资+提成+餐补。
								<br>
								2、全面培训：新员工培训+专业知识培训+素养培训；
								<br>
								3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
								<br></p>
						</div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						室内设计师
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							岗位职责：
							<br>
							1、 根据客户需求，为客户提供装修测量、设计平面方案、图纸设计服务，促成客户与公司合作；
							<br>
							2、 负责为客户提供选材，解决客户装修设计问题，提高客户满意度；
							<br>
							3、对南宁的建材市场及价格有一定了解，为客户提供装修主材、软装材料选样等服务；
							<br>
							4、积极配合材料部、工程部、市场部的对接工作；
							<br>
							5、及时到施工现场交底，保证工期顺利进行和客户满意；
							<br>
							6、维护客户关系。
							<br>
							任职要求：
							<br>
							1、大专以上学历，环境艺术、装潢装修、室内设计等相关专业；
							<br>
							2、具备独立接单、谈单、设计创意、制图能力，独立完成设计方案；
							<br>
							3、熟练掌握AutoCAD、3D MAX、Photoshop等绘图软件，会手绘者优先。
							<br>
							4、具备良好的服务心态、沟通能力、协调能力；有较强的上进心、抗压能力、责任感；
							<br>
							5、较强的沟通协调能力,计划与执行能力,高度的责任心和敬业精神，具备优秀的团队合作意识及服务意识。
							<br>
							公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
							<br>
							员工待遇：
							<br>
							1、薪资：职务工资+责任工资+提成+餐补。
							<br>
							2、全面培训：新员工培训+专业知识培训+素养培训；
							<br>
							3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
							<br></div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						电话营销
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							<p class="MsoNormal">
								岗位职责：
								<br>
								1.负责通过电话约访客户，成功邀约客户；
								<br>
								2.负责电销专业话术的学习，邀约率的成功；
								<br>
								3.负责对目标小区等销售活动的支持，协助团队成员共同完成任务，达到预期目标；
								<br>
								4.负责部门其他临时性工作。
								<br>
								任职要求：
								<br>
								1、有冲劲，良好的表达沟通能力，反应快，普通话表达准确。
								<br>
								3、吃苦耐劳，能承受业绩压力，责任心强。
								<br>
								4、有志成为销售精英，挑战高薪。
								<br>
								公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
								<br>
								员工待遇：
								<br>
								1、薪资：职务工资+责任工资+提成+餐补。
								<br>
								2、全面培训：新员工培训+专业知识培训+素养培训；
								<br>
								3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
								<br></p>
							<p class="MsoNormal">
								<br></p>
						</div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						市场部经理
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							<p class="MsoNormal">
								岗位职责：
								<br>
								1、了解目标楼盘信息，带领团队拓展楼盘；
								<br>
								2、与物业及开发商建立合作伙伴关系并及时维护，完成公司下达的任务要求；
								<br>
								3、协调公司内部资源 ，提高客户满意度；
								<br>
								4、协助公司大型营销活动的策划与实施。
								<br>
								5、负责协助市场总监开展市场部各项运营管理工作；
								<br>
								任职要求：
								<br>
								1、市场营销管理类或相关专业专科及以上学历；
								<br>
								2、2年市场营销工作经验，具有家装行业一定的了解；
								<br>
								3、具备较强的策划能力，熟悉各类媒体运作方式，有大型市场活动推广成功经验；
								<br>
								4、具有敏感的商业和市场意识，分析问题及解决问题能力强，具有优秀的资源整合能力和业务推进能力；
								<br>
								5、具备良好的沟通合作技巧及丰富的团队建设经验。
								<br>
								公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
								<br>
								员工待遇：
								<br>
								1、薪资：职务工资+责任工资+提成+餐补。
								<br>
								2、全面培训：新员工培训+专业知识培训+素养培训；
								<br>
								3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
								<br></p>
						</div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						行政前台
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							岗位职责：
							<br>
							1、负责公司来客的服务接待工作；
							<br>
							2、负责外来领导、来客引领工作；
							<br>
							3、负责公司环境卫生安排；
							<br>
							4、负责办公用品的采购，发放和管理；
							<br>
							5、完成上级领导交给其他任务。
							<br>
							任职要求：
							<br>
							1、身高160cm以上，形象好气质佳，普通话标准，熟练使用办公软件（WORD、EXCEL）；
							<br>
							<p>2、性格开朗，活泼大方，工作责任心强，思路清晰，善于与人沟通交流。</p>
							<p>
								公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
								<br>
								员工待遇：
								<br>
								1、薪资：职务工资+责任工资+提成+餐补。
								<br>
								2、全面培训：新员工培训+专业知识培训+素养培训；
								<br>
								3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
								<br></p>
						</div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						3D绘图员
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							岗位要求：
							<br>
							1、熟练运用3DMAX,CAD，Photoshop等设计软件。
							<br>
							2、制作效果图速度快,效果好；
							<br>
							3、了解装饰行业施工工艺,细心,能吃苦,有团队精神,有志从事设计行业的优先；
							<br>
							4、可接收优秀毕业生。
							<br>
							公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
							<br>
							员工待遇：
							<br>
							1、薪资：职务工资+责任工资+提成+餐补。
							<br>
							2、全面培训：新员工培训+专业知识培训+素养培训；
							<br>
							3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
							<br></div>
					</div>
				</li>
				<li class="even">
					<h3>
						<span class="fe70">&nbsp;招聘：</span>
						设计师助理
					</h3>
					<div class="msg">
						<div class="arrow"></div>
						<div class="ove">
							岗位职责：
							<br>
							1、协助设计师完成测量、绘图，为客户提供完整设计方案，能熟练的使用AutoCAD，自备笔记本电脑；
							<br>
							2、协助设计师个人业绩目标的达成，协助相关部门处理客户交付的其他问题；
							<br>
							3、完成部门上级交办的临时任务。
							<br>
							任职要求：
							<br>
							1、积极向上，态度端正，认同企业文化，价值观统一，自我驱动力强，有责任心；
							<br>
							2、优秀的设计专业水平与设计发展潜力，有明确志向目标；
							<br>
							3、团队合作意识强，具备共好精神及工作执行力强；
							<br>
							4、熟练操作CAD、3D等设计软件，熟练制作效果图。
							<br>
							公司福利：年终奖金,季度奖金,节日福利,生日福利,餐饮补贴,员工旅游,员工培训
							<br>
							员工待遇：
							<br>
							1、薪资：职务工资+责任工资+提成+餐补。
							<br>
							2、全面培训：新员工培训+专业知识培训+素养培训；
							<br>
							3、人性化的环境：80、90后的年轻团队，精致舒适的工作环境。
							<br>
							<div>
								<br></div>
						</div>
					</div>
				</li>
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
												<input type="text" class="input-text" name="name" style="width:185px;" data-validate="required:姓名必填"></td>
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
												<input type="text" class="input-text" name="phone" style="width:185px;" data-validate="required:手机号必填,tel:填写正确的手机号"></td>
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
												<input type="text" class="input-text" name="loupan" style="width:185px;" data-validate="required:楼盘必填"></td>
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
						<div class="right">
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:90px;">
							<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="ddd" onclick="reloadcode()" width="60" height="30"></div>
					</div>
					<div class="table">
						<div class="left">&nbsp;</div>
						<div class="right">
							<button type="submit" class="teamBtn order" id="_phpok_submit" value="提交预约信息"></button>
						</div>
					</div>
				</form>
			</div>
			<div class="hr20"></div>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/php.js"></script>
			<script type="text/javascript">
		$(function(){
		$('#submit').xbValidform();
		});
		function reloadcode(){
		var verify=document.getElementById('ddd');
		verify.setAttribute('src','/Messages/verify.html?'+Math.random());
		}						
		</script>

			<div class="bigTitle">
				案例排行榜
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
						<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5be291beeb8f0.jpg" alt="荣和悦澜山89平轻奢实景" data-bd-imgshare-binded="<?php echo $count; ?>"> -->
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
				<!-- <li class="first">
					<i class="num">1</i>
					<a href="http://www.nnxyzs.com/detail/1459.html" title="荣和悦澜山89平轻奢实景" target="_blank" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5be291beeb8f0.jpg" alt="荣和悦澜山89平轻奢实景"></a>
					<p>
						<a href="http://www.nnxyzs.com/detail/1459.html" title="荣和悦澜山89平轻奢实景" target="_blank" class="tt">荣和悦澜山89平轻奢实景</a>
					</p>

					<p>
						人气：
						<span class="fe70">4028</span>
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
					<span class="fe70 fr">2843</span>
					<i class="num ">8</i>
					<a href="http://www.nnxyzs.com/detail/554.html" title="嘉和城温莎北郡89平装修案例" target="_blank">嘉和城温莎北郡89平装修案例</a>
				</li>
				<li>
					<span class="fe70 fr">2833</span>
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