<!--Featured Videos -->
<p>
<div class="subcol_307" >
<div class="bar_gray">Featured Videos</div>
	<?php $i = 0;
	foreach ($featuredvideos as $featuredvideo):
		echo '
			<div class="enclose">
				<img class="image" src="img/videos/'.$featuredvideo['Video']['url'].'" />
				<div class="tx_regular_black col2">
					<a href="#" class="link_title">'.$featuredvideo['Video']['title'].'</a>
					'.$featuredvideo['Video']['description'].'
				</div>
			</div>
			<div class="clear"></div>
			';
	endforeach; ?>
</div>

