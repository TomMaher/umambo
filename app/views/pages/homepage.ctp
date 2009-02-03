<?php
//////////////////////////////////////////////////
//
//File name: Home Page
//File Loaction: app/views/pages/homepage.ctp
//Create By: Ivan Hueso
//Created On: 29/11/2008
//Last Updated on: 10/01/2009
//
//////////////////////////////////////////////////
/* CHANGES
 * 10/01/2009 - TM - renamed to homepage.ctp
 * 11/12/2008 - TM - missed three /core/core references - Fixed
 * 09/12/2008 - TM - add "container" <div> as wrapper for entire page,
 *					including HEADER and FOOTER
 * 08/12/2008 - TM - realigned directory tree to remove "core/core", etc.
29/11/2008 - Ivan Hueso
* When you are logged in the Login Box Disapears Fixed..
*/
//////////////////////////////////////////////////

	//stylesheet('pages/'.basename(dirname(__FILE__)).'/source/stylesheets/style.css');
	//script('core/login/source/javascript/login.js');
	//script('core/login/source/javascript/ajax.js');
?>
<div id="container">
<div id="page">
  <div class="col_624" >

    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="FlashID" width="625" height="275" id="FlashID">
      <param name="movie" value="img/banner3.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="../img/banner3.swf" width="625" height="275">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="6.0.65.0" />
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
        <param name="expressinstall" value="global/javascript/expressInstall.swf" />
        <param name="menu" value="false" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>

 <!--Featured Videos -->
    <div class="subcol_307" style="margin-right:10px" >
    <div class="bar_gray">Feature Videos</div>
          <?php
		  for($i = 1;$i <= 4 ; $i++){
			echo ('<div class="enclose">'.
	   	    "<img class=\"image\" src=\"img/videos/00{$i}.jpg\" />".
            '<div class="tx_regular_black col2"> <a href="portfolio" class="link_title">'.
		    'Dancing with the stars</a>Entertainment Scientist lorem lipsum lem'.
		    '</div></div><div class="clear"></div>');
		   }
		  ?>
     </div>
   <!--Featured Trailers -->
    <div class="subcol_307" >
    <div class="bar_gray">Feature Trailers</div>
    <?php
		  for($i = 4;$i <= 7 ; $i++){
			echo ('<div class="enclose">'.
	   	    "<img class=\"image\" src=\"img/videos/00{$i}.jpg\" />".
            '<div class="tx_regular_black col2"> <a href="portfolio" class="link_title">'.
		    'Dancing with the stars</a>Entertainment Scientist lorem lipsum lem'.
		    '</div></div><div class="clear"></div>');
		   }
		  ?>
    </div>

 <!--Featured Entertainers -->
    <div id="boxtab_2">
      <div class="bar_gray">Feature Entertainers</div>
      <?php
	  for($i = 1;$i <= 5 ; $i++){
		echo ('<div class="box1">'.
        "<img class=\"image3\" src=\"img/headshots/{$i}.jpg\" />".
        '<div class="ent_text"><a href="#" class="link_title">Robine Chance</a>'.
		'<span class=" tx_small_grey">Dancer / Model</span></div></div>');
		}
	  ?>
    </div>
    <!--All Right -->
  </div>


  <div  class="col_306">
    <!--Banner-->
    <div class="banner_top"></div>
    <div class="banner">
      <div class="advertisment_title"><span class="advertisment_text">Advertisement</span></div>
    </div>
    <div class="banner_bottom"></div>
<!--
    <?php
	//if(!$Interface->Session_Exist()){
	?>
    <div id="mylogin">
      <div id="mylogin2">
        <div id="myloginbox"> <span class="mylogintitle"> <span>
          <input name="do" type="hidden" value="check" />
          </span>E-mail:</span>
            <input type="text" name="uid" id="uid"  class="form1" value="<?php  print($_COOKIE['cookname']);?>" />
        </div>
        <div id="myloginbox"> <span class="mylogintitle">Password:</span><span class="login_1b">
          <input type="password" name="pid" id="pid"  class="form1"  value="<?php print($_COOKIE['cookpass']);?>"/>
        </span></div>
        <div class="checkboxses">
          <input type="checkbox" name="checkbox2" id="checkbox2"  <?php print($_COOKIE['ck']);?>  onmousedown="checkmark(1)"/>
        </div><div id="mylogingremember"><span class="tx_regular_grey">Remember Me</span></div>
        <a href="javascript:void(0)" class="login_button newbutton"  onclick="showHint1()" ><b>LOGIN</b></a>

        <div id="mylogin_links">
          <div class="forget_password"> <a  href="javascript:void(0)" onclick="run_lightbox('core/login/forgetPassword.php','popup_box')">Forgot Password?</a></div>
          <div class="newaccount"><a href="register">Create New Account</a></div>
        </div>
      </div>
    </div>
-->
    <?php //}
    ?>
    <div id="box">
      <div class="bar_black">Top Artist</div>
      <div class="spot_img"></div>

<div class="tx_regular_black spot_text"><span class="text2 tx_regular_black"><span class="artist_title">BLEEDING THROUGH</span><a href="#" class="artistbutton newbutton" ><b>PORTFOLIO</b></a></span></div>
    </div>
    <div id="box">
      <div class="bar_black">Top Albums</div>
      <div class="boxrow2" >

       <?php
	   for($i = 1;$i <= 4 ; $i++){
		echo ('<div class="enclose">'.
          " <div class=\"image2\" style=\"background-image:url(img/{$i}.jpg)\">".
		  '<a href="#" class="image2_button"></a></div>'.
          '<div class="text2 tx_regular_black"><a href="#" class="link_title">Black Renegade</a>'.
          'Sexy actress Jessica Alba is desper ate to finding new true love and</div><div class="clear"></div></div>');
		  }
		?>



      </div>
    </div>
  </div>
</div>

<?php
//require './footer.template.php';
//FOOTER
?>
</div>

