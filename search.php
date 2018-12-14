<?php get_header(); ?>
	<!-- 主体 -->
	<div class="Column-100 moduleTop">
		<div class="Column clearfix">
			<div class="Leader fr">
				当前位置：
				<a href="http://www.nnxyzs.com/">首页</a>
				&nbsp;&gt;&nbsp;
				<a style="color:#3bb0e8;">搜索: <?php echo get_search_query(); ?></a>

			</div>
			<div class="moduleTt news">
				<span style="font-size:40px;color:#fff;font-weight:blod;">search</span>
				<span style="font-size:30px;color:#fff;">搜索</span>

			</div>
		</div>
	</div>

	<div class="Column-100 CateList">
		<div class="Column clearfix">
			<?php wp_nav_menu( array( 'container' => '','menu_class' => 'Column','menu_id' => 'Nav', 'theme_location' => 'search-menu') ); ?>
		</div>
	</div>
<style>
	.searchimage img {
		width: 60px;
		height: 50px;
	}
</style>
	<div class="cgal">
		<div class="xwzx">
			<div class="xwzx-01">
				<?php $count = 0; ?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $count++; ?>
				<div class="xwzx-09" style="border-bottom:1px solid #ccc;width:84%;margin:0 auto;margin-bottom:10px;">
					<div class="xwzx-10 linkxw" style="margin-left:10px;float:left;">
						<div class='searchimage' style="float:left;">
							<!-- <img src="<?php bloginfo('template_directory'); ?>/5923f66ebbde2.jpg" width="60" height="50"> -->
							<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
						</div>
						<div style="float:left; line-height:50px;">
							<a href="<?php the_permalink(); ?>" target="_blank" style="color:red;">&nbsp;&nbsp;<?php echo mb_strimwidth(get_the_title(), 0, 24,''); ?></a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_time('Y-m-d'); ?>
						</div>
					</div>
					<div class="xwzx-11 dates-z" style="clear:both;"></div>
				</div>				
				<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>

				<div class="paging">
					<ul class="paging_ul">
						<li class="total">
							<a>共 <?php echo $count; ?> 条</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<div class="specListInd_bg" id="specListInd_bg"></div>
	<div class="specListInd" id="specListInd">
		<div class="ht">
			<span>免费报名</span>
			<a href="javascript:;" class="close fr">×</a>
		</div>
		<p class="tips">请必须填写正确信息，以便我们更好的为您服务！</p>

		<form method="post" action="http://www.nnxyzs.com/search?c=post&amp;f=setok&amp;module_id=132" onsubmit="return specListInd_submit();">
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
						<table cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="contact" id="contact" value="" style="width:180px;"></td>
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
						<table cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="phone" id="phone" value="" style="width:180px;"></td>
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
						<table cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="input-text" name="house" id="house" value="" style="width:180px;"></td>
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
					<img id="imgcode" src="<?php bloginfo('template_directory'); ?>/images/26f3182c2b504bea93dc80a825db4483.gif" border="0" align="top" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码"></div>
			</div>
			<div class="table">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" class="button" id="_phpok_submit" value="免费报名"></div>
			</div>
		</form>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/php.js.下载"></script>
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



