<div class="featuredVideos index">
<h2><?php __('FeaturedVideos');?></h2>
<p>
<?php $i = 0;
foreach ($featuredVideos as $featuredVideo):
			echo '
				<div class="enclose">
					<img class="image" src="../../webroot/img/videos/'.$featuredVideo['Video']['url'].'" />
					<div class="tx_regular_black col2">
						<a href="#" class="link_title">'.$featuredVideo['Video']['title'].'</a>
						'.$featuredVideo['Video']['description'].'
					</div>
				</div>
				<div class="clear"></div>
			';
endforeach; ?>
</table>
</div>
