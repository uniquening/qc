<?php
/*
Template Name Posts: 在线保修(online guarantee)
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
				<?php qfl_show_cat_id_slug(66); ?>
			</div>
		</div>
	</div>
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/images/59f68a6d2f2cd.jpg" class="autoWidth" data-bd-imgshare-binded="1"></div>

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
				<li class="current">
					<a href="http://www.nnxyzs.com/page/55.html">
						<span>在线保修</span>
					</a>
				</li> -->

			</ul>
		</div>
	</div>

	<div class="Column clearfix">
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">
				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542075376347">

					<a href="#" class="bds_more" data-cmd="more"></a>
					<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
					<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
					<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
					<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
					<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1>在线报修</h1>
		</div>
		<div class="Column-L">
			<div class="post_tips">
				<span class="fe70 fb">温馨提示 :</span>
				<br>
				感谢您填写在线报修信息。为了我们能及时与您取得联系，信息填写后，请保证您的电话处于正常开机状态，我们会有专员及时和您取得联系。若您还有疑问，您可以致电客服专线电话：
				<span class="fe70 fb">0771-5596299</span>
				，我们将会有客服为您解答疑虑。
			</div>
			<div class="post_book">
				<form method="post" action="/Baoxiu/add.html" id="formbaoxiu" class="ajax-post">

					<div class="table ext cls_contact">
						<div class="left">
							<span class="red">*</span>
							合同姓名：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="name" id="contact" style="width:100px;" data-validate="required:合同姓名必填"></td>
											<td class="clue_on">&nbsp;请输入您的合同姓名</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_sex">
						<div class="left">
							<span class="red">*</span>
							性别：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<table cellspacing="0" cellpadding="0">
													<tbody>
														<tr>
															<td>
																<input type="radio" name="sex" value="男" checked="checked">男 &nbsp;</td>
															<td>
																<input type="radio" name="sex" value="女">女 &nbsp;</td>
														</tr>
													</tbody>
												</table>
											</td>
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
							联系手机：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="phone" id="phone" style="width:100px;" data-validate="required:电话必填,tel:电话格式不正确"></td>
											<td class="clue_on">&nbsp;请您填写手机号码，我们会保护您的隐私</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_addr">
						<div class="left">
							<span class="red">*</span>
							楼盘地址：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="addr" id="addr" style="width:350px;" data-validate="required:楼盘地址必填"></td>
											<td class="clue_on">&nbsp;填写详细楼盘或地址</td>

										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_manager">
						<div class="left">原工程经理：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="manager" id="manager" style="width:100px;"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_designer">
						<div class="left">原设计师：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="designer" id="designer" style="width:100px;"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_ztime">
						<div class="left">
							<span class="red">*</span>
							装修日期：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="time" id="ztime" style="width:150px;" data-validate="required:装修日期必填"></td>
											<td class="clue_on">&nbsp;请输入装修日期</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_wtime">
						<div class="left">
							<span class="red">*</span>
							维修时间：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="weixiu" id="wtime" style="width:150px;" data-validate="required:维修时间必填"></td>
											<td class="clue_on">&nbsp;请输入维修时间</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_kind">
						<div class="left">报修种类：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<table cellspacing="0" cellpadding="0">
													<tbody>
														<tr>
															<td>
																<input type="radio" name="kind" value="水电类">水电类 &nbsp;</td>
															<td>
																<input type="radio" name="kind" value="木制类">木制类 &nbsp;</td>
															<td>
																<input type="radio" name="kind" value="油漆类">油漆类 &nbsp;</td>
															<td>
																<input type="radio" name="kind" value="地板类">地板类 &nbsp;</td>
														</tr>
														<tr>
															<td>
																<input type="radio" name="kind" value="其他">其他 &nbsp;</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td class="clue_on">&nbsp;请选择报修种类</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_content">
						<div class="left">
							<span class="red">*</span>
							维修说明：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<textarea class="input-text" style="width:350px;height:80px" name="content" id="content" data-validate="required:维修说明必填"></textarea>
											</td>
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
							验证码：
						</div>
						<div class="right" style="float:left;">
							<input name="verify" type="text" class="input-text" style="width:100px;float:left;">
							<div style="width:100px;float:left;">
								<img src="<?php bloginfo('template_directory'); ?>/images/verify_002.png" class="margin-left-20" onclick="this.src='/Baoxiu/verify.html?'+Math.random();" data-bd-imgshare-binded="1" width="100" height="30"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="table">
						<div class="left">&nbsp;</div>
						<div class="right">
							<input type="submit" class="button" id="sub_baoxiu" value=" 提 交 "></div>
					</div>
				</form>
				<script>
					$(function(){
					$('#sub_baoxiu').xbValidform({'form':'#formbaoxiu'});
					});
				 </script>
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/php.js"></script>
			</div>
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
												<input type="text" class="input-text" name="name" data-validate="required:姓名不能为空" style="width:185px;"></td>
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
												<input type="text" class="input-text" name="phone" data-validate="required:电话不能为空,tel:电话格式错误" style="width:185px;"></td>
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
												<input type="text" class="input-text" name="loupan" data-validate="required:楼盘不能为空" style="width:185px;"></td>
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
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:80px;float:left;">
							<div style="width:100px;float:left;">
								<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="des" onclick="reloadcodee()" data-bd-imgshare-binded="1" width="100" height="30"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="table">
						<div class="left">&nbsp;</div>
						<div class="right">
							<input type="submit" class="teamBtn order" id="_phpok_submit" value="提交预约信息"></div>
					</div>
				</form>
			</div>
			<div class="hr20"></div>
			<script language="javascript">

				$(function(){
				$('#submit').xbValidform();
				});
				function reloadcodee(){
				var verify=document.getElementById('des');

				verify.setAttribute('src','/Messages/verify.html?'+Math.random());

				}
 			</script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/php.js"></script>

			<div class="bigTitle">
				案例排行榜
				<i></i>
			</div>

			<ul class="pubCTop clearfix">
				<li class="first">
					<i class="num">1</i>
					<a href="http://www.nnxyzs.com/detail/1459.html" title="荣和悦澜山89平轻奢实景" target="_blank" class="imga fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5be291beeb8f0.jpg" alt="荣和悦澜山89平轻奢实景" data-bd-imgshare-binded="1"></a>
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
				</li>
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