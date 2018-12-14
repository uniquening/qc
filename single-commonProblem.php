<?php
/*
Template Name Posts: 常见问题解答(common problem)
*/
$page_id =  get_the_ID();
$post = get_post($page_id);
$slug = $post->slug; 
$title = get_post($page_id)->post_title;
$category = get_the_category();
$current_cat = $category[0]->cat_name;
$current_cat_ID = $category[0]->cat_ID;
$cur_par_cat_ID = 66;
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
			<?php qfl_show_cat_id_slug(66); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f68a6d2f2cd.jpg" class="autoWidth" data-bd-imgshare-binded="1">
	</div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">

			<ul>
				<li>
					<a href="<?php echo get_category_link(63); ?>">
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
			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<ul class="FaqList clearfix">
			<li class="even">
				<h3>
					<span class="fe70">&nbsp;问：</span>
					<!-- <?php echo $post_id; ?> -->
					<?php echo get_post_meta($page_id, 'question', false)[0]; ?>
					我想装修房子，请问流程是什么样的？
				</h3>
				<div class="msg">
					<div class="arrow"></div>
					<div class="ove">
						<p class="p0" style="margin-bottom:0pt;margin-top:0pt;"></p>
						<div class="ove">
							<p class="p0">
								<!-- <?php echo get_post_meta($page_id, 'answer', false)[0]; ?> -->
								<span style="font-size:10.5000pt;font-family:&#39;Times New Roman&#39;;">您可以在线咨询我们的</span>
								<span style="font-size:10.5000pt;font-family:&#39;宋体&#39;;">客服</span>
								<span style="font-size:10.5000pt;font-family:&#39;Times New Roman&#39;;">，也可以</span>
								<span style="font-size:10.5000pt;font-family:&#39;宋体&#39;;">直拨</span>
								<span style="font-size:10.5000pt;font-family:&#39;Times New Roman&#39;;">我们的咨询热线进行前期沟通，了解您的需求后我们会安排相应</span>
								<span style="font-size:10.5000pt;font-family:&#39;宋体&#39;;">的公司人员</span>
								<span style="font-size:10.5000pt;font-family:&#39;Times New Roman&#39;;">与您联系，安排相应设计师与您接洽。</span>
							</p>
						</div>
						<p></p>
					</div>
				</div>
			</li>
			<?php 
				$questionArr = get_post_meta($page_id, 'question', false);
				$answerArr = get_post_meta($page_id, 'answer', false);
				for ($i = 1; $i < count($questionArr); $i++) {
					if ($i == 1) {
						echo '<li class="even hover">';
					} else {
						echo '<li class="even">';
					}
					?>
				<h3>
					<span class="fe70">&nbsp;问：</span>

					<?php echo $questionArr[$i]; ?>
					
				</h3>
				<div class="msg">
					<div class="arrow"></div>
					<div class="ove">
						<p class="p0" style="margin-bottom:0pt;margin-top:0pt;">
							<?php echo $answerArr[$i]; ?>
							
						</p>
					</div>
				</div>
					<?
					echo '</li>';
				}

			 ?>
		</ul>
		<div class="paging">
			<ul class="paging_ul">
				<li class="paging_current">
					<a href="http://www.nnxyzs.com/lists/37/p/1.html">1</a>
				</li>
				<li class="paging_page">
					<a href="http://www.nnxyzs.com/lists/37/p/2.html">2</a>
				</li>
				<li class="paging_next">
					<a href="http://www.nnxyzs.com/lists/37/p/2.html">下一页</a>
				</li>
				<li class="total">
					<a>共 19 条</a>
				</li>
			</ul>
		</div>

	</div>



	<!--<div class="specListInd_bg" id="specListInd_bg"></div>
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
 	-->
	<!-- /主体 -->

<?php get_footer(); ?>