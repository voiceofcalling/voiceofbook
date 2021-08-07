<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/Door_cpA_limit/css/main.css--><?php $__tmp=array('layouts/Door_cpA_limit/css/main.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/jquery.masonry.min.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/jquery.masonry.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/box-maker.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/box-maker.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/masonry_act.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/masonry_act.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
<?php if($__Context->layout_info->bg_widget1){ ?>
.section1{background-color:<?php echo $__Context->layout_info->bg_widget1 ?>;}
<?php } ?>
<?php if($__Context->layout_info->p_padding_widget1){ ?>
.section1{padding:<?php echo $__Context->layout_info->p_padding_widget1 ?>;}
<?php } ?>
<?php if($__Context->layout_info->box1_bg){ ?>
.bg_box1,
.bg_box1 .door_bg,
.bg_box1 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box1_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box2_bg){ ?>
.bg_box2,
.bg_box2 .door_bg,
.bg_box2 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box2_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box3_bg){ ?>
.bg_box3,
.bg_box3 .door_bg,
.bg_box3 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box3_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box4_bg){ ?>
.bg_box4,
.bg_box4 .door_bg,
.bg_box4 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box4_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box5_bg){ ?>
.bg_box5 .box-owl .owl-nav .owl-prev:hover,
.bg_box5 .box-owl .owl-nav .owl-next:hover{background-color:<?php echo $__Context->layout_info->box5_bg ?>}
.bg_box5 .box-owl .owl-dots .active span {background-color:<?php echo $__Context->layout_info->box5_bg ?>}
<?php } ?>
<?php if($__Context->layout_info->box6_bg){ ?>
.bg_box6,
.bg_box6 .door_bg,
.bg_box6 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box6_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box7_bg){ ?>
.bg_box7,
.bg_box7 .door_bg,
.bg_box7 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box7_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box8_bg){ ?>
.bg_box8,
.bg_box8 .door_bg,
.bg_box8 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box8_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box9_bg){ ?>
.bg_box9,
.bg_box9 .door_bg,
.bg_box9 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box9_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box10_bg){ ?>
.bg_box10,
.bg_box10 .door_bg,
.bg_box10 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box10_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box11_bg){ ?>
.bg_box11,
.bg_box11 .door_bg,
.bg_box11 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box11_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box12_bg){ ?>
.bg_box12,
.bg_box12 .door_bg,
.bg_box12 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box12_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->box13_bg){ ?>
.bg_box13,
.bg_box13 .door_bg,
.bg_box13 .owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->box13_bg ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->bg_widget2){ ?>
.section2,
.section2 .owl-small .item{background-color:<?php echo $__Context->layout_info->bg_widget2 ?>;}
<?php } ?>
<?php if($__Context->layout_info->bgimg_widget2){ ?>
.section2{background-image:url(<?php echo $__Context->layout_info->bgimg_widget2 ?>);}
<?php } ?>
<?php if($__Context->layout_info->p_padding_widget2){ ?>
.section2{padding:<?php echo $__Context->layout_info->p_padding_widget2 ?>;}
<?php } ?>
<?php if($__Context->layout_info->point_widget2){ ?>
.section2 .over_DCPA_image {background-color:<?php echo $__Context->layout_info->point_widget2 ?>;}
.section2 .dw_color{color:<?php echo $__Context->layout_info->point_widget2 ?>;}
<?php } ?>
<?php if($__Context->layout_info->title_color_widget2){ ?>
.section2 .bg_h2 a,
.section2 .wrap_bg_h2{color:<?php echo $__Context->layout_info->title_color_widget2 ?>;}
.section2 .in_line{border-color:<?php echo $__Context->layout_info->title_color_widget2 ?>;}
<?php } ?>
<?php if($__Context->layout_info->bg_widget3){ ?>
.section3,
.section3 .owl-small .item{background-color:<?php echo $__Context->layout_info->bg_widget3 ?>;}
<?php } ?>
<?php if($__Context->layout_info->bgimg_widget3){ ?>
.section3{background-image:url(<?php echo $__Context->layout_info->bgimg_widget3 ?>);}
<?php } ?>
<?php if($__Context->layout_info->p_padding_widget3){ ?>
.section3{padding:<?php echo $__Context->layout_info->p_padding_widget3 ?>;}
<?php } ?>
<?php if($__Context->layout_info->point_widget3){ ?>
.section3 .over_DCPA_image {background-color:<?php echo $__Context->layout_info->point_widget3 ?>;}
.section3 .dw_color{color:<?php echo $__Context->layout_info->point_widget3 ?>;}
<?php } ?>
<?php if($__Context->layout_info->title_color_widget3){ ?>
.section3 .bg_h2 a,
.section3 .wrap_bg_h2{color:<?php echo $__Context->layout_info->title_color_widget3 ?>;}
.section3 .in_line{border-color:<?php echo $__Context->layout_info->title_color_widget3 ?>;}
<?php } ?>
<?php if($__Context->layout_info->bg_widget4){ ?>
.section4,
.section4 .owl-small .item{background-color:<?php echo $__Context->layout_info->bg_widget4 ?>;}
<?php } ?>
<?php if($__Context->layout_info->bgimg_widget4){ ?>
.section4{background-image:url(<?php echo $__Context->layout_info->bgimg_widget4 ?>);}
<?php } ?>
<?php if($__Context->layout_info->p_padding_widget4){ ?>
.section4{padding:<?php echo $__Context->layout_info->p_padding_widget4 ?>;}
<?php } ?>
<?php if($__Context->layout_info->point_widget4){ ?>
.section4 .over_DCPA_image {background-color:<?php echo $__Context->layout_info->point_widget4 ?>;}
.section4 .dw_color{color:<?php echo $__Context->layout_info->point_widget4 ?>;}
<?php } ?>
<?php if($__Context->layout_info->title_color_widget4){ ?>
.section4 .bg_h2 a,
.section4 .wrap_bg_h2{color:<?php echo $__Context->layout_info->title_color_widget4 ?>;}
.section4 .in_line{border-color:<?php echo $__Context->layout_info->title_color_widget4 ?>;}
<?php } ?>
<?php if($__Context->layout_info->bg_widget6){ ?>
.section6,
.section6 .wrap_widgetDW_A,
.section6 .owl-small .item{background-color:<?php echo $__Context->layout_info->bg_widget6 ?>;}
<?php } ?>
<?php if($__Context->layout_info->p_padding_widget6){ ?>
.section6{padding:<?php echo $__Context->layout_info->p_padding_widget6 ?>;}
<?php } ?>
<?php if($__Context->layout_info->title_color_widget6){ ?>
.section6 .bg_h2 a,
.section6 .wrap_bg_h2{color:<?php echo $__Context->layout_info->title_color_widget6 ?>;}
.section6 .in_line{border-color:<?php echo $__Context->layout_info->title_color_widget6 ?>;}
<?php } ?>
<?php if($__Context->layout_info->box41_bg){ ?>
.in-m-box41 .door_bg{background-color:<?php echo $__Context->layout_info->box41_bg ?>;}
<?php } ?>
<?php if($__Context->layout_info->box42_bg){ ?>
.in-m-box42 .door_bg{background-color:<?php echo $__Context->layout_info->box42_bg ?>;}
<?php } ?>
<?php if($__Context->layout_info->box43_bg_img){ ?>
.right-banner1 .wrap-icon{background-color:<?php echo $__Context->layout_info->box43_bg_img ?>;}
<?php } ?>
<?php if($__Context->layout_info->box43_bg_over){ ?>
.right-banner1:hover .wrap-icon{background-color:<?php echo $__Context->layout_info->box43_bg_over ?>;}
.right-banner1:hover .wrap-icon:after{border-color:<?php echo $__Context->layout_info->box43_bg_over ?>;}
<?php } ?>
<?php if($__Context->layout_info->box44_bg_img){ ?>
.right-banner2 .wrap-icon{background-color:<?php echo $__Context->layout_info->box44_bg_img ?>;}
<?php } ?>
<?php if($__Context->layout_info->box44_bg_over){ ?>
.right-banner2:hover .wrap-icon{background-color:<?php echo $__Context->layout_info->box44_bg_over ?>;}
.right-banner2:hover .wrap-icon:after{border-color:<?php echo $__Context->layout_info->box44_bg_over ?>;}
<?php } ?>
<?php if($__Context->layout_info->box45_bg_img){ ?>
.right-banner3 .wrap-icon{background-color:<?php echo $__Context->layout_info->box45_bg_img ?>;}
<?php } ?>
<?php if($__Context->layout_info->box45_bg_over){ ?>
.right-banner3:hover .wrap-icon{background-color:<?php echo $__Context->layout_info->box45_bg_over ?>;}
.right-banner3:hover .wrap-icon:after{border-color:<?php echo $__Context->layout_info->box45_bg_over ?>;}
<?php } ?>
@media screen and (max-width:768px){
<?php if($__Context->layout_info->m_padding_widget1){ ?>
.section1{padding:<?php echo $__Context->layout_info->m_padding_widget1 ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->m_padding_widget2){ ?>
.section2{padding:<?php echo $__Context->layout_info->m_padding_widget2 ?>;}
<?php } ?>
<?php if($__Context->layout_info->m_padding_widget3){ ?>
.section3{padding:<?php echo $__Context->layout_info->m_padding_widget3 ?>;}
<?php } ?>
<?php if($__Context->layout_info->m_padding_widget6){ ?>
.section6{padding:<?php echo $__Context->layout_info->m_padding_widget6 ?>;}
<?php } ?>
.panel{background-image:none;}
}
</style>
<?php if($__Context->layout_info->main_widget1){ ?><section id="section1" class="panel panel_height section1 <?php echo $__Context->layout_info->top_widget1 ?>">	
	<div class="in_section top_section">
		<div class="xe_width">
			<div class="wrap-wrapper clearBoth">
				<div class="loops-wrapper tile-wrapper wrap_box">
					<?php if($__Context->layout_info->box1_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box1_mobile!=='N')){ ?><div class="box bg_box1 <?php echo $__Context->layout_info->box1_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box1_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box1_more ?>">
										<?php if($__Context->layout_info->box1_img){ ?><img src="<?php echo $__Context->layout_info->box1_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box1_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box1_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box1_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box1_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box1_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box1_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box1_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box1_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box1_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box1_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box1_style=='H'){ ?>
										<?php echo $__Context->layout_info->box1_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
					<?php if($__Context->layout_info->box2_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box2_mobile!=='N')){ ?><div class="box bg_box2 <?php echo $__Context->layout_info->box2_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box2_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box2_more ?>">
										<?php if($__Context->layout_info->box2_img){ ?><img src="<?php echo $__Context->layout_info->box2_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box2_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box2_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box2_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box2_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box2_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box2_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box2_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box2_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box2_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box2_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box2_style=='H'){ ?>
										<?php echo $__Context->layout_info->box2_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
					<?php if($__Context->layout_info->box3_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box3_mobile!=='N')){ ?><div class="box bg_box3 <?php echo $__Context->layout_info->box3_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box3_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box3_more ?>">
										<?php if($__Context->layout_info->box3_img){ ?><img src="<?php echo $__Context->layout_info->box3_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box3_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box3_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box3_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box3_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box3_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box3_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box3_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box3_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box3_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box3_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box3_style=='H'){ ?>
										<?php echo $__Context->layout_info->box3_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
					<?php if($__Context->layout_info->box4_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box4_mobile!=='N')){ ?><div class="box bg_box4 <?php echo $__Context->layout_info->box4_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box4_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box4_more ?>">
										<?php if($__Context->layout_info->box4_img){ ?><img src="<?php echo $__Context->layout_info->box4_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box4_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box4_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box4_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box4_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box4_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box4_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box4_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box4_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box4_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box4_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box4_style=='H'){ ?>
										<?php echo $__Context->layout_info->box4_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
					
					<?php if($__Context->layout_info->box6_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box6_mobile!=='N')){ ?><div class="box bg_box6 <?php echo $__Context->layout_info->box6_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box6_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box6_more ?>">
										<?php if($__Context->layout_info->box6_img){ ?><img src="<?php echo $__Context->layout_info->box6_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box6_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box6_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box6_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box6_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box6_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box6_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box6_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box6_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box6_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box6_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box6_style=='H'){ ?>
										<?php echo $__Context->layout_info->box6_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
					<?php if($__Context->layout_info->box7_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box7_mobile!=='N')){ ?><div class="box bg_box7 <?php echo $__Context->layout_info->box7_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box7_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box7_more ?>">
										<?php if($__Context->layout_info->box7_img){ ?><img src="<?php echo $__Context->layout_info->box7_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box7_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box7_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box7_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box7_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box7_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box7_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box7_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box7_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box7_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box7_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box7_style=='H'){ ?>
										<?php echo $__Context->layout_info->box7_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
					<?php if($__Context->layout_info->box8_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box8_mobile!=='N')){ ?><div class="box bg_box8 <?php echo $__Context->layout_info->box8_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box8_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box8_more ?>">
										<?php if($__Context->layout_info->box8_img){ ?><img src="<?php echo $__Context->layout_info->box8_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box8_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box8_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box8_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box8_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box8_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box8_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box8_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box8_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box8_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box8_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box8_style=='H'){ ?>
										<?php echo $__Context->layout_info->box8_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
					<?php if($__Context->layout_info->box9_size&&(!Mobile::isMobileCheckByAgent()||$__Context->layout_info->box9_mobile!=='N')){ ?><div class="box bg_box9 <?php echo $__Context->layout_info->box9_size ?>">
						<div class="in_box">
							<div class="inner_box">
								<div class="widget_box">
									<?php if($__Context->layout_info->box9_style=='A'){ ?>
									<a class="box_over_a" href="<?php echo $__Context->layout_info->box9_more ?>">
										<?php if($__Context->layout_info->box9_img){ ?><img src="<?php echo $__Context->layout_info->box9_img ?>" alt="" /><?php } ?>
									</a>
									<?php } ?>
									<?php if($__Context->layout_info->box9_style=='B'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box9_widget ?>" list_type="normal" tab_type="tab_top" markup_type="list" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box9_style=='C'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box9_widget ?>" list_type="normal" tab_type="tab_top" markup_type="table" list_count="6" cols_list_count="5" page_count="1" subject_cut_size="50" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="257" />
									<?php } ?>
									<?php if($__Context->layout_info->box9_style=='D'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box9_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="256" thumbnail_height="256" />
									<?php } ?>
									<?php if($__Context->layout_info->box9_style=='E'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box9_widget ?>" list_type="image_title_content" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box9_style=='F'){ ?>
										<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box9_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="60" content_cut_size="130" option_view="title,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="320" thumbnail_height="320" />
									<?php } ?>
									<?php if($__Context->layout_info->box9_style=='H'){ ?>
										<?php echo $__Context->layout_info->box9_html ?>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div><?php } ?>
				</div>
			</div>
		</div>
	</div>
</section><?php } ?>
<?php if($__Context->layout_info->main_widget6){ ?><section id="section6" class="panel panel_height section6 section">	
	<div class="">
		<div class="in_box xe_width">
			<?php if($__Context->layout_info->title_widget6){ ?><div class="wrap_bg_h2">
				<h2 class="bg_h2 xe_width"><a href="<?php echo $__Context->layout_info->url_widget6 ?>"><?php echo $__Context->layout_info->title_widget6 ?></a></h2>
				<?php if($__Context->layout_info->img_widget6){ ?><div class="p_line">
					<span class="h2_line"><span class="in_line"></span></span>
					<div class="line_center"><img src="<?php echo $__Context->layout_info->img_widget6 ?>" alt="" border="0" /></div>
					<span class="h2_line"><span class="in_line"></span></span>
				</div><?php } ?>   
				<?php if($__Context->layout_info->text_widget6){ ?><p><?php echo $__Context->layout_info->text_widget6 ?></p><?php } ?>
			</div><?php } ?>
			<div class="inner_box wrar-m-box clearBoth">
				<div class="m-box m-box1">
					<div<?php if(!$__Context->layout_info->box41_img){ ?> class="in-m-box in-m-box41"<?php } ?> <?php if($__Context->layout_info->box41_img){ ?> class="in-mm-box in-m-box41"<?php } ?>>
						<?php if($__Context->layout_info->box41_title||$__Context->layout_info->box41_title_img){ ?><div class="widget_box_h2 <?php echo $__Context->layout_info->box41_title_style ?>">
							<?php if($__Context->layout_info->box41_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->box41_more ?>"><img class="h2_img" src="<?php echo $__Context->layout_info->box41_title_img ?>" alt="<?php echo $__Context->layout_info->box41_title ?>" /></a> <?php if($__Context->layout_info->box41_more){ ?><a class="h2_more" href="<?php echo $__Context->layout_info->box41_more ?>"><span class="x_span"></span><span class="y_span"></span><span class="l_span"></span></a><?php } ?></h2><?php } ?>
							<?php if(!$__Context->layout_info->box41_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->box41_more ?>"><?php echo $__Context->layout_info->box41_title ?></a> <?php if($__Context->layout_info->box41_more){ ?><a class="h2_more" href="<?php echo $__Context->layout_info->box41_more ?>"><span class="x_span"></span><span class="y_span"></span><span class="l_span"></span></a><?php } ?></h2><?php } ?>
						</div><?php } ?>
						<?php if($__Context->layout_info->box41_style=='B'){ ?>
						<div<?php if($__Context->layout_info->box41_bg){ ?> class="list_w"<?php } ?>>
							<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box41_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="195" />
						</div>
						<?php } ?>
						<?php if($__Context->layout_info->box41_style=='D'){ ?>
						<div<?php if($__Context->layout_info->box41_bg){ ?> class="list_w"<?php } ?>>
							<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box41_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="30" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="195" />
						</div>
						<?php } ?>
						<?php if($__Context->layout_info->box41_style=='E'){ ?>
						<div<?php if($__Context->layout_info->box41_bg){ ?> class="list_w"<?php } ?>>
							<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box41_widget ?>" list_type="gallery" tab_type="none" markup_type="table" list_count="8" cols_list_count="2" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="202" />	
						</div>
						<?php } ?>
						<?php if($__Context->layout_info->box41_style=='C'){ ?>
							<a class="bax-a" href="<?php echo $__Context->layout_info->box41_img_more ?>"><img class="m-img" src="<?php echo $__Context->layout_info->box41_img ?>" alt="" /></a>
						<?php } ?>
						<?php if($__Context->layout_info->box41_style=='H'){ ?>
								<?php echo $__Context->layout_info->box41_html ?>
						<?php } ?>
					</div>
				</div>
			
				<div class="m-box m-box2">
					<div<?php if(!$__Context->layout_info->box42_img){ ?> class="in-m-box in-m-box42"<?php } ?> <?php if($__Context->layout_info->box42_img){ ?> class="in-mm-box in-m-box42"<?php } ?>>
						<?php if($__Context->layout_info->box42_title||$__Context->layout_info->box42_title_img){ ?><div class="widget_box_h2 <?php echo $__Context->layout_info->box42_title_style ?>">
							<?php if($__Context->layout_info->box42_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->box42_more ?>"><img class="h2_img" src="<?php echo $__Context->layout_info->box42_title_img ?>" alt="<?php echo $__Context->layout_info->box42_title ?>" /></a> <?php if($__Context->layout_info->box42_more){ ?><a class="h2_more" href="<?php echo $__Context->layout_info->box42_more ?>"><span class="x_span"></span><span class="y_span"></span><span class="l_span"></span></a><?php } ?></h2><?php } ?>
							<?php if(!$__Context->layout_info->box42_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->box42_more ?>"><?php echo $__Context->layout_info->box42_title ?></a> <?php if($__Context->layout_info->box42_more){ ?><a class="h2_more" href="<?php echo $__Context->layout_info->box42_more ?>"><span class="x_span"></span><span class="y_span"></span><span class="l_span"></span></a><?php } ?></h2><?php } ?>
						</div><?php } ?>
						<?php if($__Context->layout_info->box42_style=='B'){ ?>
						<div<?php if($__Context->layout_info->box42_bg){ ?> class="list_w"<?php } ?>>
							<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box42_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="20" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="195" />
						</div>
						<?php } ?>
						<?php if($__Context->layout_info->box42_style=='D'){ ?>
						<div<?php if($__Context->layout_info->box42_bg){ ?> class="list_w"<?php } ?>>
							<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box42_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="5" cols_list_count="5" page_count="1" subject_cut_size="32" content_cut_size="20" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="370" thumbnail_height="195" />
						</div>
						<?php } ?>
						<?php if($__Context->layout_info->box42_style=='E'){ ?>
						<div<?php if($__Context->layout_info->box41_bg){ ?> class="list_w"<?php } ?>>
							<img class="zbxe_widget_output" widget="content" skin="Door_cpA" content_type="document" module_srls="<?php echo $__Context->layout_info->box42_widget ?>" list_type="gallery" tab_type="none" markup_type="table" list_count="8" cols_list_count="2" page_count="1" subject_cut_size="32" content_cut_size="80" option_view="thumbnail,title,regdate" show_browser_title="N" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="300" thumbnail_height="202" />	
						</div>
						<?php } ?>
						<?php if($__Context->layout_info->box42_style=='C'){ ?>
							<a class="bax-a" href="<?php echo $__Context->layout_info->box42_img_more ?>"><img class="m-img" src="<?php echo $__Context->layout_info->box42_img ?>" alt="" /></a>
						<?php } ?>
						<?php if($__Context->layout_info->box42_style=='H'){ ?>
								<?php echo $__Context->layout_info->box42_html ?>
						<?php } ?>
					</div>
				</div>
				<div class="m-box m-box3">
					<div class="clearBoth right-banner right-banner1">
						<div class="wrap-icon">
							<?php if(!$__Context->layout_info->box43_title_img){ ?><img src="/layouts/Door_cpA_limit/img/ph.png" alt="" /><?php } ?>
							<?php if($__Context->layout_info->box43_title_img){ ?><span><img src="<?php echo $__Context->layout_info->box43_title_img ?>" alt="" /></span><?php } ?>
						</div>
						<div class="right-icon">
							<?php if($__Context->layout_info->box43_title){ ?><h2><?php echo $__Context->layout_info->box43_title ?></h2><?php } ?>
							<?php if($__Context->layout_info->box43_text){ ?><p><?php echo $__Context->layout_info->box43_text ?></p><?php } ?>
						</div>
					</div>
					<div class="clearBoth right-banner right-banner2">
						<div class="wrap-icon">
							<?php if(!$__Context->layout_info->box44_title_img){ ?><img src="/layouts/Door_cpA_limit/img/cu.png" alt="" /><?php } ?>
							<?php if($__Context->layout_info->box44_title_img){ ?><span><img src="<?php echo $__Context->layout_info->box44_title_img ?>" alt="" /></span><?php } ?>
						</div>
						<div class="right-icon">
							<?php if($__Context->layout_info->box44_title){ ?><h2><?php echo $__Context->layout_info->box44_title ?></h2><?php } ?>
							<?php if($__Context->layout_info->box44_text){ ?><p><?php echo $__Context->layout_info->box44_text ?></p><?php } ?>
						</div>
					</div>
					<div class="clearBoth right-banner right-banner3">
						<div class="wrap-icon">
							<?php if(!$__Context->layout_info->box45_title_img){ ?><img src="/layouts/Door_cpA_limit/img/ka.png" alt="" /><?php } ?>
							<?php if($__Context->layout_info->box45_title_img){ ?><span><img src="<?php echo $__Context->layout_info->box45_title_img ?>" alt="" /></span><?php } ?>
						</div>
						<div class="right-icon">
							<?php if($__Context->layout_info->box45_title){ ?><h2><?php echo $__Context->layout_info->box45_title ?></h2><?php } ?>
							<?php if($__Context->layout_info->box45_text){ ?><p><?php echo $__Context->layout_info->box45_text ?></p><?php } ?>
						</div>
					</div>
				</div>	
			</div>
		</div>	
	</div>
</section><?php } ?>