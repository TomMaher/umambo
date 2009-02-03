<!--login.ctp-->
    <div id="mylogin">
      <div id="mylogin2">
        <div id="myloginbox" class="mylogintitle">
		  <? if ($session->check('Message.auth')) $session->flash('auth'); ?>
		  <?=$form->create('Member',array('action'=>'login')); ?>
		  <?=$form->input('username'); ?>
		  <?=$form->input('password',array('type'=>'password')); ?>
		
          <div class="checkboxes">
            <input type="checkbox" name="checkbox2" id="checkbox2"  <?php //print($_COOKIE['ck']);?>  onmousedown="checkmark(1)"/>
          </div>
          
          <div id="myloginremember"><span class="tx_regular_grey">Remember Me</span></div>

          <div id="mylogin_links">
            <div class="forget_password"><a href="javascript:void(0)" onclick="run_lightbox('js/forgetPassword.php','popup_box')">Forgot Password?</a></div>
            <div class="newaccount"><a href="add">Create New Account</a></div>
          </div>
		  <?=$form->end('Login'); ?>
        
        </div>
      </div>
    </div>
	
