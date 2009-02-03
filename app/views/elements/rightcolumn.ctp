<!--Banner-->
    <div class="banner_top"></div>
    <div class="banner">
      <div class="advertisment_title"><span class="advertisment_text">Advertisement</span></div>
    </div>
    <div class="banner_bottom"></div>

	<div class="box">
		<div class="bar_black">Top Artist</div>
		<div class="spot_img"></div>
		<div class="tx_regular_black spot_text">
			<span class="text2 tx_regular_black">
			<span class="artist_title">BLEEDING THROUGH</span>
			<a href="#" class="artistbutton newbutton" ><b>PORTFOLIO</b></a>
			</span>
		</div>
	</div>
	<div class="box">
		<div class="bar_black">Top Albums</div>
		<div class="boxrow2" >
				<?php
					for($i = 1;$i <= 4 ; $i++){
					echo ('<div class="enclose">'.
						" <div class=\"image2\" style=\"background-image:url(img/{$i}.jpg)\">".
						'<a href="#" class="image2_button"></a></div>'.
						'<div class="text2 tx_regular_black"><a href="#" class="link_title">Black Renegade</a>'.
						'Sexy actress Jessica Alba is desperate to finding new true love and</div><div class="clear"></div></div>');
				  }
			?>
		</div>
	</div>

