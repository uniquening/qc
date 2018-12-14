<?php
/*
Template Name Posts: 在线订单(online order)
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
				<li class="current">
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
		<div class="msgTitle"> <i class="line"></i>
			<div class="jiathis_style fr">
				<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1542075363293">

					<a href="#" class="bds_more" data-cmd="more"></a>
					<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
					<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
					<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
					<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
					<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

			</div>
			<h1>在线订单</h1>
		</div>
		<div class="Column-L">
			<div class="post_tips">
				<span class="fe70 fb">温馨提示 :</span>
				<br>
				感谢您填写在线咨询信息。为了我们能及时与您取得联系，信息填写后，请保证您的电话处于正常开机状态，我们会有专员及时和您取得联系。若您还有疑问，您可以致电客服专线电话：
				<span class="fe70 fb">0771-5596299</span>
				，我们将会有客服为您解答疑虑。
			</div>
			<div class="post_book">
				<form method="post" action="/Messages/add.html" class="ajax-post">

					<div class="table ext cls_contact">
						<div class="left">
							<span class="red">*</span>
							业主姓名：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="name" data-validate="required:业主姓名必填" style="width:200px;"></td>

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
							联系手机：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<input type="text" class="input-text" name="phone" data-validate="required:电话必填,tel:电话格式不正确" style="width:200px;"></td>
											<td class="clue_on">&nbsp;请输入您的联系手机</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_phone">
						<div class="left">楼盘地址：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="input-text" name="address" style="width:350px;"></td>
											<td class="clue_on">&nbsp;填写详细楼盘或地址</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_phone">
						<div class="left">使用面积：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<input type="text" class="input-text" name="mianji" style="width:200px;"></td>
											<td class="clue_on">&nbsp;平方米</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_phone">
						<div class="left">装修预算：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<input type="text" class="input-text" name="yusuan" style="width:200px;"></td>
											<td class="clue_on">&nbsp;万元</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_phone">
						<div class="left">您的户型：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<select name="huxing" style="width:78px">
													<option value="三居以下" selected="selected">三居以下</option>
													<option value="四居">四居</option>
													<option value="跃层">跃层</option>
													<option value="复式楼">复式楼</option>
													<option value="别墅">别墅</option>

												</select>

											</td>

										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_phone">
						<div class="left">装修风格：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<select name="fengge" style="width:78px">
													<option value="现代简约" selected="selected">现代简约</option>
													<option value="新古典">新古典</option>
													<option value="欧式典雅">欧式典雅</option>
													<option value="美式风格">美式风格</option>
													<option value="地中海">地中海</option>
													<option value="新中式">新中式</option>
													<option value="中式风格">中式风格</option>
													<option value="东南亚">东南亚</option>
													<option value="工业风格">工业风格</option>
													<option value="法式浪漫">法式浪漫</option>
													<option value="北欧简约">北欧简约</option>
													<option value="混搭">混搭</option>
													<option value="田园">田园</option>
													<option value="港式">港式</option>
													<option value="日式">日式</option>

												</select>

											</td>

										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_phone">
						<div class="left">预约设计师：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<select name="shejishi" style="width:78px">
													<option value="汪洁" selected="selected">汪洁</option>
													<option value="粟成海">粟成海</option>
													<option value="周兵">周兵</option>
													<option value="陶佳彤">陶佳彤</option>
													<option value="兰瑞严">兰瑞严</option>
													<option value="张至">张至</option>
													<option value="方向">方向</option>
													<option value="张艺">张艺</option>
													<option value="杨云星">杨云星</option>
													<option value="杨艳">杨艳</option>
													<option value="李欣倩">李欣倩</option>
													<option value="周登峰">周登峰</option>
													<option value="黄尚">黄尚</option>
													<option value="屈忠涛">屈忠涛</option>
													<option value="黄林妮">黄林妮</option>
													<option value="陆飞">陆飞</option>
													<option value="曾相山">曾相山</option>
													<option value="陈略">陈略</option>
													<option value="肖俊">肖俊</option>
													<option value="刘亚">刘亚</option>
													<option value="罗芳">罗芳</option>
													<option value="李忠华">李忠华</option>
													<option value="冷运程">冷运程</option>
													<option value="张家辉">张家辉</option>
													<option value="凌立成">凌立成</option>
													<option value="张旭">张旭</option>
													<option value="彭丽萍">彭丽萍</option>
													<option value="郭剑阳">郭剑阳</option>
													<option value="黄媛">黄媛</option>
													<option value="吕志良">吕志良</option>
													<option value="朱晓丽">朱晓丽</option>
													<option value="林春燕">林春燕</option>
													<option value="熊峰">熊峰</option>
													<option value="郝建勋">郝建勋</option>
													<option value="庞淇桉">庞淇桉</option>
													<option value="温宝华">温宝华</option>
													<option value="程文芳">程文芳</option>
													<option value="陈忠波">陈忠波</option>
													<option value="孙诗浥">孙诗浥</option>
													<option value="王晶">王晶</option>
													<option value="夏轩">夏轩</option>
													<option value="张秋培">张秋培</option>
													<option value="卢永琦">卢永琦</option>
													<option value="韦高杰">韦高杰</option>
													<option value="黄兴源">黄兴源</option>
													<option value="汪鑫成">汪鑫成</option>
													<option value="甘卢华">甘卢华</option>
													<option value="李伟杰">李伟杰</option>
													<option value="李发">李发</option>
													<option value="陈合和">陈合和</option>
													<option value="潘妹樱">潘妹樱</option>
													<option value="姚炜鸿">姚炜鸿</option>
													<option value="张明">张明</option>
													<option value="拜倩">拜倩</option>
													<option value="梁敏">梁敏</option>
													<option value="马珑萍">马珑萍</option>
													<option value="谭淑文">谭淑文</option>
													<option value="余冰">余冰</option>
													<option value="罗靖华">罗靖华</option>
													<option value="马健月">马健月</option>

												</select>

											</td>

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
							装修要求：
						</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<textarea class="input-text" style="width:350px;height:80px" name="content" data-validate="required:装修要求必填"></textarea>

											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="table ext cls_phone">
						<div class="left">动工时间：</div>
						<div class="right">
							<div>
								<table cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td>

												<input type="text" class="input-text" name="time" style="width:200px;"></td>
											<td class="clue_on">&nbsp;请输入预计动工时间</td>
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
						<div class="right" style="float:left;">
							<input type="hidden" name="laiyuanip" value="117.36.239.19">
							<input name="verify" id="sys_check" type="text" class="input-text" style="width:50px;float:left;">
							<div style="width:100px;float:left;">
								<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="de" onclick="reloadcode()" data-bd-imgshare-binded="1" width="100" height="30"></div>

						</div>
						<div class="clear"></div>
					</div>
					<div class="table">
						<div class="left">&nbsp;</div>
						<div class="right">
							<input type="submit" class="button" id="_phpok_submit" value=" 提 交 "></div>
					</div>
				</form>
				<script language="javascript">

$(function(){
$('#submit').xbValidform();
});
function reloadcode(){
var verify=document.getElementById('de');

verify.setAttribute('src','/Messages/verify.html?'+Math.random());

}
</script>
			</div>
		</div>
		<div class="Column-R">

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