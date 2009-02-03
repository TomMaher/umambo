<?php
//////////////////////////////////////////////////
//
//File name: header.template.php
//File Location: global header.template.php
//Created By:
//Created On:
//
//////////////////////////////////////////////////
/* CHANGES:
 * 08/12/2008 - TM -
*/
//////////////////////////////////////////////////
?>
</head>
<body>
<div id="container">
  <div id="header">
    <a href="#" id="logo"></a>
    <div id="sign_in">
      <span class="tx_title_white" >It's not about who you know</span>
      <br>
      <span class="tx_regular_dark_grey" >but who knows about you! </span>
    </div>

    <div id="header_right">
      <div id="user_links">
        <a href="<?php echo URL.'/home'; ?>" class="link_11px_white2" > Web</a>
       |<a href="<?php echo URL.'/portfolio'; ?>" class="link_11px_white" >Member</a>
       |<a href="#" class="link_11px_white" >Videos</a>
	  </div>
      <div id="search"><input type="text" name="form" id="searchInput" value="Search" /><a href="#" class="searchbt"></a>
	  </div>
    </div>
  </div>
  <div class="top_buttons header_main_background" id="sublinks3">
    <a href="<?php echo URL; ?>" class="top_buttons1">Main</a>
	<a href="#" class="top_buttons1 " >Search</a>
	<a href="browse" class="top_buttons1 " >Browse</a>
	<a href="#" class="top_buttons1 " >Videos</a>
	<a href="#" class="top_buttons1 " >Jobs</a>
	<a href="#" class="top_buttons1 " >Invite</a>
	<a href="#" class="top_buttons1 " >Forums</a>

    <?php
    if($session->id()){
           echo '<a href="/users/logout" class="top_buttons2 " >Logout</a>';
      //echo "<a href=\"".URL."/portfolio\" class=\"top_buttons2\" >Portfolio</a>";
      //echo "<a href=\"".URL."/home\" class=\"top_buttons2\" >".ucfirst($_SESSION['DISPLAYNAME'])."</a>";
    }else{
      echo '<a href="register" class="top_buttons2" >Sign up</a>';
    }
    ?>

  </div>

