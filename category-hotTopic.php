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
	<img src="<?php bloginfo('template_directory'); ?>/images/5a1e6603296b3.jpg" class="autoWidth"></div>

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
	<ul class="SpecList clearfix">
		<?php $count = 0; ?>
		<?php global $post; if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php $count++; ?>
		<li class="">
			<div class="ht">
				<h2 class="fl fn">
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:<?php the_time('Y-m-d') ?>&nbsp;&nbsp;READ:<?php if(function_exists('the_views')) { the_views(); } ?></span>
			</div>
			<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" class="imga fl">
				<!-- <img src="<?php bloginfo('template_directory'); ?>/images/5bd95c016bcf3.png" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"> -->
				<?php include( TEMPLATEPATH . '/thumbnail.php' ); ?>
			</a>
			<div class="note"><?php echo mb_strimwidth(get_the_content(), 0, 150,''); ?></div>
			<p class="date">
				<span class="fb">活动时间：</span>
				<?php echo get_post_meta($post_id, '活动时间', true) ?>
				2018-11-01至2018-11-30
				<br>
				<span class="fb">活动地点：</span>
				<?php echo get_post_meta($post_id, '活动地点', true) ?>
				南宁星艺装饰各门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="<?php the_permalink() ?>" title="查看详情" class="btn view">查看详情</a>
		</li>
		<?php endwhile; ?>
		<?php endif; wp_reset_query(); ?>			

<!-- 		<li class="">
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/1420.html" title="2018年好饰连城5全国460城大联动（南宁站）">2018年好饰连城5全国460城大联动（南宁站）</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2018-09-05&nbsp;&nbsp;READ:462</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/1420.html" title="2018年好饰连城5全国460城大联动（南宁站）" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/5b8f7be7d7889.jpg" alt="2018年好饰连城5全国460城大联动（南宁站）"></a>
			<p class="note">
				主题：2018年好饰连城5全国460城大联动（南宁站）


	
			时间：
		
		
			2018年9月1日-2018年10月14日
		


		
			地点：
		
		
			南宁星艺各...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2018-09-01至2018-10-14
				<br>
				<span class="fb">活动地点：</span>
				南宁星艺各门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/1420.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li class="">
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/1321.html" title=" 2018年星艺装饰，筑家27载，入邕16周年感恩大行动">2018年星艺装饰，筑家27载，入邕16周年感恩大行动</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2018-07-14&nbsp;&nbsp;READ:473</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/1321.html" title=" 2018年星艺装饰，筑家27载，入邕16周年感恩大行动" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/5b4967d628722.jpg" alt=" 2018年星艺装饰，筑家27载，入邕16周年感恩大行动">
			</a>
			<p class="note">
				主题：星艺装饰，筑家27载，入邕16周年感恩大行动正式启动！

				时间：2018年7月1日－2018年8月19日
				地点：南宁星艺装饰各门店
				内容： &nbsp;星艺装饰19...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2018-06-30至2018-08-19
				<br>
				<span class="fb">活动地点：</span>
				星艺装饰南宁五家门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/1321.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li>
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/1192.html" title="中国·星艺广西第十四届装饰文化节（南宁站）">中国·星艺广西第十四届装饰文化节（南宁站）</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2018-04-15&nbsp;&nbsp;READ:5712</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/1192.html" title="中国·星艺广西第十四届装饰文化节（南宁站）" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/5ad3288a67d80.jpg" alt="中国·星艺广西第十四届装饰文化节（南宁站）"></a>
			<p class="note">
				主题：中国·星艺广西第十四届装饰文化节（南宁站）
				时间：2018-4-13至2018-6-10
				地点：南宁星艺各门店


				"家"是人们生活起居必需之地，也是人们...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2018-04-13至2018-06-10
				<br>
				<span class="fb">活动地点：</span>
				南宁星艺装饰各门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/1192.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li class="">
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/1157.html" title="盛饰开年旺满园暨2018设计潮流品鉴会">盛饰开年旺满园暨2018设计潮流品鉴会</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2018-02-28&nbsp;&nbsp;READ:589</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/1157.html" title="盛饰开年旺满园暨2018设计潮流品鉴会" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/5a965464e4b66.jpg" alt="盛饰开年旺满园暨2018设计潮流品鉴会"></a>
			<p class="note">
				主题：盛饰开年旺满园暨2018设计潮流品鉴会


				时间：2018年2月23日－2018年4月1日


				地点：南宁星艺装饰集成整装门店


				星艺装饰1991年创...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2018-02-23至2018-04-01
				<br>
				<span class="fb">活动地点：</span>
				沃顿国际大酒店（悉尼厅）
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/1157.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li>
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/1112.html" title="“跨年装修、保你无忧”全国480城跨年大联动（南宁站）">“跨年装修、保你无忧”全国480城跨年大联动（南宁站）</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2017-12-15&nbsp;&nbsp;READ:635</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/1112.html" title="“跨年装修、保你无忧”全国480城跨年大联动（南宁站）" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/5a33417fb9f73.jpg" alt="“跨年装修、保你无忧”全国480城跨年大联动（南宁站）">
			</a>
			<p class="note">
				家是慰藉心灵的港湾，带给我们温馨与幸福；家是人生的驿站，带给我们舒适与回忆；家是精神的乐园，带给我们欢乐和力量；家是一种文化，一段时光，一种...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2017-12-09至2018-01-28
				<br>
				<span class="fb">活动地点：</span>
				南宁星艺装饰集成门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/1112.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li class="">
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/1017.html" title="2017年好饰连城4全国460城大联动（南宁站）">2017年好饰连城4全国460城大联动（南宁站）</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2017-09-06&nbsp;&nbsp;READ:1110</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/1017.html" title="2017年好饰连城4全国460城大联动（南宁站）" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/59af6fb5f130e.jpg" alt="2017年好饰连城4全国460城大联动（南宁站）"></a>
			<p class="note">
				主题：2017年好饰连城4全国460城大联动（南宁站）


	
				时间：
			
			
				2017年9月1日-2017年10月15日
			


			
				地点：
			
			
				南宁星艺各...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2017-09-01至2017-10-15
				<br>
				<span class="fb">活动地点：</span>
				南宁星艺各门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/1017.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li>
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/1068.html" title="广西首届双11家装狂欢节（南宁站）">广西首届双11家装狂欢节（南宁站）</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2017-11-06&nbsp;&nbsp;READ:465</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/1068.html" title="广西首届双11家装狂欢节（南宁站）" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/59ffd39010d80.jpg" alt="广西首届双11家装狂欢节（南宁站）"></a>
			<p class="note">
				主题：广西首届双11家装狂欢节（南宁站）
		
		
			
				时间：
			
			
				2017年11月1日-2017年12月3日
			
		
		
			
				地点：
			...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2017-11-01至2017-12-03
				<br>
				<span class="fb">活动地点：</span>
				南宁星艺装饰集成店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/1068.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li>
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/976.html" title="星艺装饰26年周年庆暨入驻绿城南宁15周年感恩大行动">星艺装饰26年周年庆暨入驻绿城南宁15周年感恩大行动</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2017-07-15&nbsp;&nbsp;READ:752</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/976.html" title="星艺装饰26年周年庆暨入驻绿城南宁15周年感恩大行动" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/5969db7b82781.png" alt="星艺装饰26年周年庆暨入驻绿城南宁15周年感恩大行动"></a>
			<p class="note">
				星艺装饰1991年创立于广州，自2002年入驻南宁，全区已开设22个分支机构。26年的品牌沉淀，传承经典，载誉绿城。星艺装饰在绿城十五年的发展和成长，离...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2017-07-01至2017-08-12
				<br>
				<span class="fb">活动地点：</span>
				南宁集成门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/976.html" title="查看详情" class="btn view">查看详情</a>
		</li>
		<li>
			<div class="ht">
				<h2 class="fl fn">
					<a href="http://www.nnxyzs.com/detail/834.html" title="中国·星艺广西第十三届装饰文化节（南宁站）">中国·星艺广西第十三届装饰文化节（南宁站）</a>
				</h2>
				<span class="fari f99">&nbsp;&nbsp;DATE:2017-04-20&nbsp;&nbsp;READ:1245</span>
			</div>
			<a href="http://www.nnxyzs.com/detail/834.html" title="中国·星艺广西第十三届装饰文化节（南宁站）" class="imga fl">
				<img src="<?php bloginfo('template_directory'); ?>/images/58f85b7b2fc5f.jpg" alt="中国·星艺广西第十三届装饰文化节（南宁站）"></a>
			<p class="note">
				家是身之居所，心之寄托！是慰藉心灵的港湾，带给我们温馨与幸福；家是人生的驿站，带给我们舒适与回忆；家是精神的乐园，带给我们欢乐和力量；家是一...
			</p>
			<p class="date">
				<span class="fb">活动时间：</span>
				2017-04-15至2017-06-11
				<br>
				<span class="fb">活动地点：</span>
				南宁星艺装饰各门店
			</p>

			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=4000193800&amp;site=qq&amp;menu=yes" title="" class="btn order" value="8934" name="" target="_blank">在线咨询</a>

			<a href="http://www.nnxyzs.com/detail/834.html" title="查看详情" class="btn view">查看详情</a>
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
				<img id="imgcode" src="<?php bloginfo('template_directory'); ?>
				/images/26f3182c2b504bea93dc80a825db4483.htm" style="width:65px;height:27px;cursor:pointer;" onclick="check_code(this)" title="点击更换验证码" border="0" align="top">
			</div>
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