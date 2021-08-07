<?php if(!defined("__XE__"))exit;?><div class="rd_nav img_tx to_sns fl" data-url="<?php echo $__Context->sns_link ?>" data-title="<?php echo $__Context->sns_title ?>">
	<a class="<?php echo $__Context->mi->to_sns_small ?>" href="#" data-type="facebook" title="To Facebook"><i class="ico_sns16 facebook"></i><strong> Facebook</strong></a>
	<a class="<?php echo $__Context->mi->to_sns_small ?>" href="#" data-type="twitter" title="To Twitter"><i class="ico_sns16 twitter"></i><strong> Twitter</strong></a>
	<a class="<?php echo $__Context->mi->to_sns_small ?>" href="#" data-type="google" title="To Google"><i class="ico_sns16 google"></i><strong> Google</strong></a>
	<a class="<?php echo $__Context->mi->to_sns_small ?>" href="#" data-type="pinterest" title="To Pinterest"><i class="ico_sns16 pinterest"></i><strong> Pinterest</strong></a>
</div>
		
		<?php if($__Context->mi->to_sns=='3'){ ?><div class="to_sns big" style="text-align:<?php echo $__Context->mi->to_sns_big ?>">
			<a class="facebook bubble" href="#" data-type="facebook" title="To Facebook"><b class="ico_sns facebook">Facebook</b></a>
			<a class="twitter bubble" href="#" data-type="twitter" title="To Twitter"><b class="ico_sns twitter">Twitter</b></a>
			<a class="google bubble" href="#" data-type="google" title="To Google"><b class="ico_sns google">Google</b></a>
			<a class="pinterest bubble" href="#" data-type="pinterest" target="_blank" title="To Pinterest"><b class="ico_sns pinterest">Pinterest</b></a>
			<?php if(Mobile::isMobileCheckByAgent()){ ?>
			<a class="line bubble" href="line://msg/text/?<?php echo $__Context->sns_title ?>%0D%0A<?php echo $__Context->sns_link ?>" title="To Line"><b class="ico_sns line">Line</b></a>
			<a class="kakao bubble" href="kakaolink://sendurl?msg=<?php echo $__Context->sns_title ?>&url=<?php echo $__Context->sns_link ?>&appid=m.kakao.com&appver=2.0&appname=카카오" title="카카오톡으로 링크보내기"><b class="ico_sns kakao">Kakao</b></a>
			<?php } ?>
		</div><?php } ?>