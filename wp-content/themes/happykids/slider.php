<?php

	$gen_sets = theme_get_option('general', 'gen_sets');
	$slider_type = ( isset($gen_sets['_what_slider_select']) ) ? $gen_sets['_what_slider_select'] : '';
	$slider_shortcode = ( isset($gen_sets['_slider_shortcode']) ) ? $gen_sets['_slider_shortcode'] : '';
	$slide_img = ( isset($gen_sets['_gen_slider_image']) ) ? $gen_sets['_gen_slider_image'] : '';
	$slide_video = ( isset($gen_sets['_slider_video']) ) ? stripslashes($gen_sets['_slider_video']) : '';
	$slide_video_host = ( isset($gen_sets['_gen_video_host']) ) ? stripslashes($gen_sets['_gen_video_host']) : '';
	$vim_color = ( isset($gen_sets['_vim_color']) ) ? stripslashes($gen_sets['_vim_color']) : '';
	$yt_color = ( isset($gen_sets['_yt_color']) ) ? stripslashes($gen_sets['_yt_color']) : '';
	$yt_theme = ( isset($gen_sets['_yt_theme']) ) ? stripslashes($gen_sets['_yt_theme']) : '';
	$slide_video_autoplay = isset($gen_sets['_gen_video_autoplay']) ? $gen_sets['_gen_video_autoplay'] : null;
	$parser_return = '';

?>
<div class="kids_slider_bg <?php echo $slider_type; ?>">
	<div class="kids_slider_wrapper">
		<div class="kids_slider_inner_wrapper">

			<?php if ($slider_type == 'img_slider') : ?>

				<div class="img-slider">
					<?php 
						echo do_shortcode( $slider_shortcode );
					?> 
				</div><!--/ #kids-slider-->

			<?php elseif ($slider_type == 'video') : ?>

				<?php
					if($slide_video){
						if ($slide_video_host == 'youtube')	$parser_return = theme_youtube_parser( $slide_video, 1150, 400, $slide_video_autoplay, $yt_color, $yt_theme );
						if ($slide_video_host == 'vimeo') $parser_return = theme_vimeo_parser( $slide_video, 1150, 400, $slide_video_autoplay, $vim_color );
						echo $parser_return;
					}else {
						echo '<h1 style="color: red; text-align: center; margin: 0; padding:5px;">Seems like we forgot to set the video source.</h1>';
					}
				?>

			<?php elseif ($slider_type == 'image') : ?>

				<img src="<?php echo bfi_thumb( $slide_img, array('width' => 1150, 'height' => 400, 'crop' => true) ); ?>" alt="">

			<?php endif; ?>

		</div><!--/ .kids_slider_inner_wrapper-->
		
	</div><!--/ .kids_slider_wrapper-->
	
</div><!--/ .kids_slider_bg-->  