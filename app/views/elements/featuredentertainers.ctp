 <!--Featured Entertainers -->
    <div class="boxtab_2">
      <div class="bar_gray">Featured Entertainers</div>
      <?php
	  for($i = 1;$i <= 5 ; $i++){
		echo ('<div class="box1">'.
        "<img class=\"image3\" src=\"img/headshots/{$i}.jpg\" />".
        '<div class="ent_text"><a href="#" class="link_title">Robine Chance</a>'.
		'<span class=" tx_small_grey">Dancer / Model</span></div></div>');
		}
	  ?>
    </div>