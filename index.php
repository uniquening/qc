<?php get_header(); ?>
	<!-- 主体 -->

	<!-- banner -->
	<div class="Column-100 iPlayer" id="iPlayer">
		<?php echo do_shortcode("[huge_it_slider id='2']"); ?>
	</div>
	<!-- banner end -->

	<!-- 服务流程 -->
	<div class="Column-100 index150425">
		<?php wp_nav_menu( array( 'container' => '','menu_class' => 'Column FootSer clearfix','menu_id' => 'Nav','theme_location' => 'server-menu',) ); ?>
		<ul class="Column FootSer clearfix">
			<li class="f14">
				<span class="icon_ht"></span>
				服务流程
				<br>Services</li>
			<li>
				<span class="icon">1</span>
				装修咨询
				<br>0776-2856606</li>
			<li>
				<span class="icon">2</span>
				约见设计师
				<br>上门洽谈设计方案</li>
			<li>
				<span class="icon">3</span>
				确认方案
				<br>并签装修设计合同</li>
			<li>
				<span class="icon">4</span>
				严格把控质量
				<br>满意竣工验收</li>
			<li>
				<span class="icon">5</span>
				星艺装饰为您提供
				<br>终身VIP售后服务</li>
			<li class="btn">
				<a class="b_lf" href="http://www.nnxyzs.com/page/39.html" target="_blank" style="width:87px;margin-left:-10px;"></a>
			</li>
		</ul>
	</div>
	<!-- 服务流程end -->

	<!-- 装修设计 -->
	<div class="hr20"></div>
	<div class="Column">
		<div class="ibTitle iCases_tt hd">
			<?php
				$args=array(
					'orderby' => 'name',
					'order' => 'ASC',
					'parent' => 20,
					'number' => 15,
				);
				$categories=get_categories($args);
			?>
			<div class="iCate f99">
				&nbsp;&nbsp;
				<a href="<?php get_category_link(20);?>" title="热装楼盘" target="_blank">更多设计</a>
			</div>
			<ul class="tab-title">
				<?php
					foreach($categories as $category) {
						echo '<li>' . $category->name.'</li> '; 
					}
				?>
			</ul>
			<h3>装修设计/CASES</h3>
		</div>
		<div class="bd">
				<?php
				$num = 0;
				foreach($categories as $category) {
					// echo '<li>' . $category->name.'</li> '; 
					$id = $category->term_id ;
					$num++;
					if ($num == 1) { ?>
						<ul class="iCases clearfix">

							<?php $count = 0; ?>
							<?php if (have_posts()) : ?>
							<?php query_posts('cat=' . $id. '&ignore_sticky_posts=1&showposts=8'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<?php if ($count % 4 == 0 ) {
								echo '<li class="end">';
							} else {
								echo '<li>';
							}
							?>

								<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
									<img src="<?php bloginfo('template_directory'); ?>/images/58535dde9efb9.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
									<div class="info">
										设计风格：现代简约 <?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计风格');?>
										<br>
										建筑类型：四居 <?php echo get_post_meta($post_id, '建筑类型');?>
										<br>
										装修面积：150平方<?php echo get_post_meta($post_id, '装修面积');?>
										<br></div>
								</a>
								<p>
									<span class="fe70">[<?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计风格');?>]</span>
									<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>

									<a href="<?php echo get_post_meta($post_id, '设计师链接');?>" title="<?php echo get_post_meta($post_id, '设计师姓名');?>" target="_blank" class="fr f12 f99"><?php echo get_post_meta($post_id, '设计师姓名');?></a>

								</p>
								<?php 
									echo "</li>";
								?>
							<?php endwhile; ?>
							<?php endif; wp_reset_query(); ?> 

						</ul>	
					<?php					
					} else {
					?>
						<ul class="iCases clearfix" style="display: none">
								<?php if (have_posts()) : ?>
								<?php query_posts('cat=' . $id. '&ignore_sticky_posts=1&showposts=8'); ?>
								<?php while (have_posts()) : the_post(); ?>
								<li>
									<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
										<img src="<?php bloginfo('template_directory'); ?>/images/58535dde9efb9.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
										<div class="info">
											设计风格：现代简约 <?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计风格');?>
											<br>
											建筑类型：四居 <?php echo get_post_meta($post_id, '建筑类型');?>
											<br>
											装修面积：150平方<?php echo get_post_meta($post_id, '装修面积');?>
											<br></div>
									</a>
									<p>
										<span class="fe70">[<?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计风格');?>]</span>
										<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>

										<a href="<?php echo get_post_meta($post_id, '设计师链接');?>" title="<?php echo get_post_meta($post_id, '设计师姓名');?>" target="_blank" class="fr f12 f99"><?php echo get_post_meta($post_id, '设计师姓名');?></a>

									</p>
								</li>
								<?php endwhile; ?>
								<?php endif; wp_reset_query(); ?> 						

						</ul>
					<?php
					}
				}
					?>
		<!-- 170-1895 -->

		</div>
		<script>
            $(function (){
                $('.Column').slide({});
			})
		</script>
	</div>
	<!-- 装修设计 end -->

	<!-- 设计团队 -->
	<div class="hr20"></div>
	<div class="Column clearfix">
		<div class="ibTitle iTeam_tt">
			<div class="iCate f99">
			<?php
				$args=array(
					'orderby' => 'name',
					'order' => 'ASC',
					'parent' => 5,
					'number' => 5,
				);
				$categories=get_categories($args);
				$count = 0;

				foreach($categories as $category) {
					echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . 'target="_blank">' . $category->name.'</a> &nbsp;|&nbsp; ';				
				}
			?>

			</div>
			<h3>设计团队/TEAM</h3>
		</div>
		<div class="iTeam fl" id="iTeam">

			<ul class="ht fl" id="iTeam_ht">
				<?php
				foreach($categories as $category) {
					$count++;
					if ($count == 1) {
						echo '<li class="on current"><span>' . $category->name.'</span></li> '; 
					} else {
						echo '<li><span>' . $category->name.'</span></li> '; 
					}
					
				}
				?>
			</ul>
			<div class="ct fl">
				<div class="tempWrap" style="overflow:hidden; position:relative; height:317px">
					<div class="box fl" style="height: 2219px; position: relative; padding: 0px; margin: 0px; top: -317px;">

						<?php
							$num = 0;
							foreach($categories as $category) {
								echo '<li>' . $category->name.'</li> '; 
								$id = $category->term_id ;
								$num++;
								if ($num == 1) { 
						?>
									<ul class="clone" style="height: 317px;">
										<?php $count = 0; ?>
										<?php global $post; if (have_posts()) : ?>
										<?php query_posts('cat=' . $id. '&ignore_sticky_posts=1&showposts=5'); ?>
										<?php while (have_posts()) : the_post(); ?>
										<?php 
											$count++; 
											if ($count == 5) {
										?>
										<li id = "end">
											<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
												<img src="<?php bloginfo('template_directory'); ?>/images/59d7502281498.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
												<div class="info"><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计理念');?>设计理念：空间以人为本，故设计来源于生活，体验生活，创造生活。应在体验的基础上用艺术的创作手法来创造一种和谐幸福的空间</div>
											</a>
											<div class="bg abs"></div>
											<div class="infobox abs">
												<div>
													<span><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></span>
													<?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '职位');?>设计总监
												</div>
												<p>
													从业年限： <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '从业年限');?>8</strong>
													年
												</p>
												<p>
													为 <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '服务用户数');?>288</strong>
													户家庭设计过房子
												</p>
											</div>
											<a class="btn ac btn1" href="<?php the_permalink() ?>">查看案例</a>
											<a class="btn ac btn2" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw">预约设计师</a>
										</li>	
										<?php
											} else {					
										?>
										<li>
											<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
												<img src="<?php bloginfo('template_directory'); ?>/images/59d7502281498.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
												<div class="info"><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计理念');?>设计理念：空间以人为本，故设计来源于生活，体验生活，创造生活。应在体验的基础上用艺术的创作手法来创造一种和谐幸福的空间</div>
											</a>
											<div class="bg abs"></div>
											<div class="infobox abs">
												<div>
													<span><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></span>
													<?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '职位');?>设计总监
												</div>
												<p>
													从业年限： <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '从业年限');?>8</strong>
													年
												</p>
												<p>
													为 <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '服务用户数');?>288</strong>
													户家庭设计过房子
												</p>
											</div>
											<a class="btn ac btn1" href="<?php the_permalink() ?>">查看案例</a>
											<a class="btn ac btn2" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw">预约设计师</a>
										</li>
										<?php
											}
										?>
										<?php endwhile; ?>
										<?php endif; wp_reset_query(); ?> 	
									</ul>								
						<?php					
								} else {
						?>
									<ul class="clone" style="height: 317px;">
										<?php $count = 0; ?>
										<?php global $post; if (have_posts()) : ?>
										<?php query_posts('cat=' . $id. '&ignore_sticky_posts=1&showposts=5'); ?>
										<?php while (have_posts()) : the_post(); ?>
										<?php 
											$count++; 
											if ($count == 5) {
										?>
										<li id = "end">
											<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
												<img src="<?php bloginfo('template_directory'); ?>/images/59d7502281498.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
												<div class="info"><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计理念');?>设计理念：空间以人为本，故设计来源于生活，体验生活，创造生活。应在体验的基础上用艺术的创作手法来创造一种和谐幸福的空间</div>
											</a>
											<div class="bg abs"></div>
											<div class="infobox abs">
												<div>
													<span><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></span>
													<?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '职位');?>设计总监
												</div>
												<p>
													从业年限： <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '从业年限');?>8</strong>
													年
												</p>
												<p>
													为 <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '服务用户数');?>288</strong>
													户家庭设计过房子
												</p>
											</div>
											<a class="btn ac btn1" href="<?php the_permalink() ?>">查看案例</a>
											<a class="btn ac btn2" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw">预约设计师</a>				
										</li>	
										<?php
											} else {					
										?>
										<li>
											<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
												<img src="<?php bloginfo('template_directory'); ?>/images/59d7502281498.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
												<div class="info"><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '设计理念');?>设计理念：空间以人为本，故设计来源于生活，体验生活，创造生活。应在体验的基础上用艺术的创作手法来创造一种和谐幸福的空间</div>
											</a>
											<div class="bg abs"></div>
											<div class="infobox abs">
												<div>
													<span><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></span>
													<?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '职位');?>设计总监
												</div>
												<p>
													从业年限： <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '从业年限');?>8</strong>
													年
												</p>
												<p>
													为 <strong><?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '服务用户数');?>288</strong>
													户家庭设计过房子
												</p>
											</div>
											<a class="btn ac btn1" href="<?php the_permalink() ?>">查看案例</a>
											<a class="btn ac btn2" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODAxNTk0Nl80ODQxOTRfNDAwMDE5MzgwMF8yXw">预约设计师</a>
										</li>
										<?php
											}
										?>
										<?php endwhile; ?>
										<?php endif; wp_reset_query(); ?> 	

									</ul>
						<?php
								}
							}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 设计团队 end -->

	<!-- 热装楼盘 -->
	<div class="hr20"></div>
	<div class="Column">
		<div class="ibTitle iHouse_tt">
			<div class="iCate f99">
				&nbsp;&nbsp;
				<a href="<?php echo get_category_link(36); ?>" title="更多案例" target="_blank">更多楼盘</a>
			</div>
			<h3>热装楼盘/BUILDINGS</h3>
		</div>
		<ul class="iHouse clearfix">
			<?php $count = 0; ?>
			<?php global $post; if (have_posts()) : ?>
			<?php query_posts('cat=36&ignore_sticky_posts=1&showposts=7'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++;
				if ($count == 1) {
			?>
				<li class="first">
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
						<img src="<?php bloginfo('template_directory'); ?>/images/58677072a8b13.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
						<p class="tran"> <em class="f14"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></em> <em>咨询数&nbsp;30户<?php $post_id =  get_the_ID(); echo get_post_meta($post_id, '咨询数');?></em>
						</p>
					</a>
				</li>
			<?php
				} else {
			?>
				<li>
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="fl">
						<img src="<?php bloginfo('template_directory'); ?>/images/5b4064f81a2e2.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"></a>
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="tt f14"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
					<p style="line-height:45px;">
						&gt;咨询数
						<span class="fe70">&nbsp;36&nbsp;</span>
						户
					</p>
					<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="pubView">VIEW&gt;&gt;</a>
				</li>
			<?php
				}
			?>
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>

		</ul>
		<div class="iBuild clearfix">
			<div class="tempWrap" style="overflow:hidden; position:relative; width:1120px">
				<ul style="width: 22260px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -904px;">
					<?php $count = 0; ?>
					<?php global $post; if (have_posts()) : ?>
					<?php query_posts('cat=36&ignore_sticky_posts=1'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $count++;
						if ($count == 1) {
							echo '<li class="clone" style="float: left; width: 120px;">';
						} else {
							echo '<li style="float: left; width: 120px;">';
						}
					?>
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
							<img src="<?php bloginfo('template_directory'); ?>/images/5bb5c22889ad5.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
						</a>
					<?php
							echo '</li>';
					?>
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>
				</ul>
			</div>
			<a href="javascript:;" class="btn next">&gt;</a>
			<a href="javascript:;" class="btn prev">&lt;</a>
		</div>
	</div>
	<!-- 热装楼盘 end -->

	<!-- 在建工地 -->
	<div class="hr20"></div>
	<div class="Column">
		<div class="ibTitle iHouse_tt">
			<div class="iCate f99">
				&nbsp;&nbsp;
				<a href="<?php echo get_category_link(37); ?>" title="更多案例" target="_blank">更多工地</a>
			</div>
			<h3 style="background:url(/Websites/mifantuan/Templates/mft/Static/<?php bloginfo('template_directory'); ?>/images/zjian.png)no-repeat;">在建工地/BUILDINGS</h3>
		</div>
		<ul class="iHouse clearfix">
			<?php $count = 0; ?>
			<?php global $post; if (have_posts()) : ?>
			<?php query_posts('cat=37&ignore_sticky_posts=1&showposts=7'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++;
				if ($count == 1) {
			?>
			<li class="first">
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="imga">
					<img src="<?php bloginfo('template_directory'); ?>/images/584f6c5beb9c4.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>">
					<p class="tran">
						<em class="f14"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></em>
						<em>&nbsp;已有1907人浏览</em>
					</p>
				</a>
			</li>
			<?php
				} else {
			?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="fl">
					<img src="<?php bloginfo('template_directory'); ?>/images/586764d179f26.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>"></a>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="tt f14"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
				<p style="line-height:45px;">
					&gt;已有
					<span class="fe70">&nbsp;2056&nbsp;</span>
					人浏览
				</p>
				<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank" class="pubView">VIEW&gt;&gt;</a>
			</li>
					
			<?php 
				}
			?>

			<!--需要循环的模块-->
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>	
		</ul>
	</div>
	<div class="hr20"></div>
	<!-- 在建工地 end -->

	<!-- 套餐 -->
	<div class="col iTitle">
		<p></p>
		星艺极致家装
	</div>

	<!-- dala list -->
	<div class="packagebox">
			<?php $count = 0; ?>
			<?php global $post; if (have_posts()) : ?>
			<?php query_posts('cat=37&ignore_sticky_posts=1&showposts=3'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++;
				if ($count == 3) {
					echo '<div class="item fl rel last">';
				} else {
					echo '<div class="item fl rel">';
				}
			?>
				<a href="<?php the_permalink(); ?>" class="thumbnail rel">
					<img src="<?php bloginfo('template_directory'); ?>/images/58e5964d4865a.jpg">
					<div class="item-mask abs">
						<div class="title"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></div>
						<div class="desc">
							<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"……");  ?>
							经过家装行业26年的沉淀.698根据客户对家装实用性的需求，列出38项必备服务材料放心 一线环保主材 正规厂家 杜绝家装隐患
						</div>
					</div>
				</a>
				<div class="item-title abs">
					<div>
						<span class="fl" style="position: relative;bottom:5px;">报名此套餐</span>
						<a class="btn fr" href="<?php the_permalink(); ?>">立即报名</a>
						<div class="clear"></div>
					</div>
				</div>
			<?php
					echo "</div>";
			?>

			<!--需要循环的模块-->
			<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>		
	</div>
	<script>
	$(function(){
	// 套餐事件
		var packagebox = $('.packagebox');
		packagebox.find('.item').hover(function(){
			$(this).find('.item-mask').stop().fadeIn(300);
		},function(){
			$(this).find('.item-mask').stop().fadeOut(300);
		});
	})
	</script>
	<!-- 套餐 end -->

	<!-- 报名窗 -->
	<div class="hr20"></div>
	<div class="Column clearfix">
		<div class="iIndent clearfix">
			<div class="ht">填写真实报名信息，我们将及时与你联系</div>
			<form method="post" action="/Messages/add.html" onsubmit="return iIndent_submit();">
				<input type="hidden" id="tourl" name="tourl" value="goback">
				<input type="hidden" id="tomsg" name="tomsg" value="预约成功，我们将通过电话联系您！">
				<input type="hidden" id="subject" name="subject" value="来源：首页在线订单">
				<!-- 姓名 -->
				<div class="table ext cls_contact">
					<div class="left">
						<span class="red">*</span>
						姓名 <i>|</i>
					</div>
					<div class="right">
						<div>
							<table cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td>
											<input type="text" class="input-text" name="name" id="contact" style="width:218px;"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- 手机 -->
				<div class="table ext cls_phone">
					<div class="left">
						<span class="red">*</span>
						手机
						<i>|</i>
					</div>
					<div class="right">
						<div>
							<table cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td>
											<input type="text" class="input-text" name="phone" id="phone" style="width:218px;"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- 楼盘 -->
				<div class="table ext cls_addr">
					<div class="left">
						楼盘
						<i>|</i>
					</div>
					<div class="right">
						<div>
							<table cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td>
											<input type="text" class="input-text" name="loupan" id="addr" style="width:218px;"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- 面积 -->
				<div class="table ext cls_area">
					<div class="left">
						面积
						<i>|</i>
					</div>
					<div class="right">
						<div>
							<table cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td>
											<input type="text" class="input-text" name="mianji" id="area" style="width:218px;"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- 验证 -->
				<input type="hidden" name="laiyuanip" value="117.36.239.19">
				<div class="table">
					<div class="left">
						验证
						<i>|</i>
					</div>
					<div class="right">
						<input type="submit" class="button" id="_phpok_submit" value="提交">
						<input name="verify" id="sys_check" type="text" class="input-text" style="width:80px;">
						<img src="<?php bloginfo('template_directory'); ?>/images/verify.png" class="margin-left-20" id="de" onclick="reloadcode()" width="60" height="30"></div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/php.js"></script>
	<script type="text/javascript">

		function reloadcode(){
		var verify=document.getElementById('de');

		verify.setAttribute('src','/Messages/verify.html?'+Math.random());

		}
		function iIndent_submit(){
			var i_contact = $(".iIndent #contact");
			if(!i_contact.val()){
					alert("请输入您的称呼");
					i_contact.focus();
					return false;
			}
			var i_phone = $(".iIndent #phone");
			if(!(/^1[3|5|8][0-9]\d{7,8}$/.test(i_phone.val()))){
					alert("手机号码未填写或填写错误");
					i_phone.focus();
					return false;
			}
			var i_check = $(".iIndent #sys_check");
			if(!i_check.val()){
					alert("请输入验证码");
					i_check.focus();
					return false;
			}
			getid("_phpok_submit").disabled = true;
			return true;
		}
	</script>
	<div class="hr20"></div>
	<!-- 报名窗 end -->


	<!-- 装修攻略和公司资讯 start -->
	<div class="iNewsBox Column">
		<div class="beijr fl">
			<div class="ibTitle iNews_tt01">
				<h3>装修攻略</h3>
			</div>
			<div class="ijzzsBox fl">
				<div class="item1 fl">
					<?php $count = 0; ?>
					<?php global $post; if (have_posts()) : ?>
					<?php query_posts('cat=19&ignore_sticky_posts=1&showposts=1'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $count++ ?>
					<p class="img">
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/images/59ab64516272d.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" width="360" height="240"></a>
					</p>
					<div class="t">
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
					</div>
					<p class="desc"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 30,"……"); ?>
						半包装修包人工和辅材，地板、卫浴等主材方面材料都是需要业主自行选购，常见装修方式除了半包外，还有全包和整装，很多业主都是在综合考虑后选择半包装修，那到底半包装修需要购买哪...
					</p>
					<p class="url ar">
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank">详情 &gt;&gt;</a>
					</p>
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>		
				</div>
				<div class="item1 item2 fr">
					<?php $count = 0; ?>
					<?php global $post; if (have_posts()) : ?>
					<?php query_posts('cat=19&ignore_sticky_posts=1&showposts=3'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $count++;

						if (($count == 2) || ($count == 3)) {
						
					?>
					<div class="art">
						<p class="fl">
							<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank">
								<img src="<?php bloginfo('template_directory'); ?>/images/58394a9e882be.jpg" alt="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" width="145" height="111"></a>
						</p>
						<div class="txt fr">
							<div class="t">
								<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
							</div>
							<p class="desc">还有一个多月的时间2016年就要过了，<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 20,"……"); ?>而且现...</p>
							<p class="url ar">
								<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank">详情 &gt;&gt;</a>
							</p>
						</div>
					</div>		
					<?php
						}
					?>		
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>			

					<?php $count = 0; ?>
					<?php global $post; if (have_posts()) : ?>
					<?php query_posts('cat=19&ignore_sticky_posts=1&showposts=4'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $count++;

						if ($count == 4) {
						
					?>
					<div class="t">
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
					</div>
					<p class="desc">
						<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 30,"……");?>
						年前有一个朋友要装修房子，我问他打算自己装还是交给南宁的装修公司装。他坚定的告诉我，一定要交给南宁装修公司装。刚开始我感觉很奇怪，一般很多人对装修公司装修都不是都很感冒，...
					</p>
					<p class="url ar">
						<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank">详情 &gt;&gt;</a>
					</p>
					<?php
						}
					?>
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>	
				</div>
			</div>
		</div>
		<div class="beijl fl">
			<div class="ibTitle iNews_tt02">
				<h3>公司资讯</h3>
			</div>
			<div class="ijzBox fr">
				<ul id="ijzbox">
					<?php $count = 0; ?>
					<?php global $post; if (have_posts()) : ?>
					<?php query_posts('cat=18&ignore_sticky_posts=1&showposts=3'); ?>
					<?php while (have_posts()) : the_post(); ?>	
					<?php $count++;
						if ( $count == 1) {
					?>
						<li>
							<span class="img" style="display: inline;">
								<p class="gsinb"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></p>
								<a href="<?php the_permalink(); ?>" title="“星艺装饰•好饰连城5（南宁站）”在圆满画上句号" target="_blank">
									<img src="<?php bloginfo('template_directory'); ?>/images/5bda6554e2278.jpg" height="190"></a>
								<p class="gsinbw"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 30,"……");?>10月14日，于南宁会展中心8号展厅中，“星艺装饰•好饰连城5（南宁站）”在狂欢中圆满画上句号。感谢中行、...</p>
								<p class="url ar cc">
									<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank">详情 &gt;&gt;</a>
								</p>
							</span>
							<span class="txt" style="display: none;">
								<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
							</span>
						</li>							
							<?php
						} else {
					?>
						<li>
							<span class="img" style="display: none;">
								<p class="gsinb"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></p>
								<a href="<?php the_permalink(); ?>" title="“星艺装饰•好饰连城5（南宁站）”在圆满画上句号" target="_blank">
									<img src="<?php bloginfo('template_directory'); ?>/images/5bda6554e2278.jpg" height="190"></a>
								<p class="gsinbw"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 30,"……");?>10月14日，于南宁会展中心8号展厅中，“星艺装饰•好饰连城5（南宁站）”在狂欢中圆满画上句号。感谢中行、...</p>
								<p class="url ar cc">
									<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank">详情 &gt;&gt;</a>
								</p>
							</span>
							<span class="txt" style="display: inline;">
								<a href="<?php the_permalink(); ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 16,''); ?></a>
							</span>
						</li>						
					<?php
						}
					?>			
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>						

				</ul>
			</div>
		</div>
	</div>
	<div class="hr20"></div>
	<!-- 装修攻略和公司资讯 end -->

	<!-- 品牌合作 start-->	
	<div class="Column-100 iBrand">
		<div class="Column clearfix">
			<div class="ibTitle iBrand_tt">
				<h3>合作品牌/Brand</h3>
			</div>
			<ul class="clearfix">
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59feb783801bb.jpg" title="志邦橱柜" class="imga">
					<p>志邦橱柜</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59f81d088b20c.jpg" title="尚高卫浴" class="imga">
					<p>尚高卫浴</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59feb8185ad7b.jpg" title="老板抽油烟机" class="imga">
					<p>老板抽油烟机</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59feb8cdb0905.jpg" title="欧神诺瓷砖" class="imga" style="margin-top: 0px;">
					<p style="display: none;">欧神诺瓷砖</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59feb94c33625.jpg" title="L&amp;D陶瓷" class="imga">
					<p>L&amp;D陶瓷</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59feb9a30acf7.jpg" title="金牌亚洲陶瓷" class="imga">
					<p>金牌亚洲陶瓷</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59febadbcf540.jpg" title="苏宁电器" class="imga">
					<p>苏宁电器</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59febae8c9aa3.jpg" title="源阁门业" class="imga">
					<p>源阁门业</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/59febaf472d85.jpg" title="罗芬卫浴" class="imga">
					<p>罗芬卫浴</p>
				</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/baf3e2341e484196b982c0b984856f10.js"></script>
	<div class="hr30"></div>
	<!-- 品牌合作 end-->	

	<!-- /主体 -->

	<!-- 底部 -->
<?php get_footer(); ?>
