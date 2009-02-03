
	<a href="/umambo_cake/" class="top_buttons1">Main</a>
	<a href="/umambo_cake/members/search" class="top_buttons1 " >Search</a>
	<a href="/umambo_cake/members" class="top_buttons1 " >Browse</a>
	<a href="/umambo_cake/videos" class="top_buttons1 " >Videos</a>
	<a href="/umambo_cake/jobs" class="top_buttons1 " >Jobs</a>
	<a href="/umambo_cake/user/invite" class="top_buttons1 " >Invite</a>
	<a href="/umambo_cake/forum" class="top_buttons1 " >Forums</a>

    <?php
    if ($session->read('Logged_In') == "Yes") {
      echo '<a href=members/logout class="top_buttons2" >Logout</a>';
      echo "<a href=# class=\"top_buttons2\" >Portfolio</a>";
      //echo "<a href=# class=\"top_buttons2\" >".ucfirst($_SESSION['DISPLAYNAME'])."</a>";
    }else{
      echo '<a href="/umambo_cake/members/add" class="top_buttons2">Sign up</a>';
      echo '<a href="/umambo_cake/members/login" class="top_buttons2">Login</a>';
    }

    ?>
