<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
	<?php echo $html->css(array('style','styles','main','buttons','header&footer','texts',
					   'links','default','columns','lightbox','boxes','homeProfile')); ?>
	<title><?php echo $title_for_layout?></title>
</head>

<body>
	<div id="container">
		<div id="header">
    		<a href="/umambo_cake/" id="logo"></a>
    		<div id="sign_in">
        		<?php echo $this->renderElement('tagline'); ?>
			</div>
			<div id="header_right">
				<div id="user_links">
					<?php echo $this->renderElement('userlinks'); ?>
				</div>
				<div id="search">
        			<?php echo $this->renderElement('search'); ?>
				</div>
    		</div>
		</div>
	<div class="top_buttons header_main_background" id="sublinks3">
		<?php echo $this->renderElement('topmenu'); ?>
	</div>
	<div id="container">
		<div id="page">
			<!--Left Column-->
			<div class="col_624" >
				<?php echo $content_for_layout ?>
			</div>
			<!--End Left Column-->
			<? if($title_for_layout == 'Home'){ ?>
				<!--Right Column-->
				<div  class="col_306">
					<?php echo $this->renderElement('rightcolumn'); ?>
				</div>
			<? } ?>
			<div id="footer">
				<?php echo $this->renderElement('footermenu'); ?>
			</div>
		</div><!--End Right Column--> 
	</div>
</body>
</html>