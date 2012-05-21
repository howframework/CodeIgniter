<?php
	 $username_error = ( trim(form_error('username')) != '' ) ? ' error' : '';
	 $password_error = ( trim(form_error('password')) != '' ) ? ' error' : '';

?>
<?php $this->load->view('template/v_admin_header.php'); ?>
					<div class="span12 well" style="margin-top: 20px;">

<form class="form-horizontal" method="post" action="<?php echo site_url('login'); ?>">
  <fieldset>
    <legend>Login</legend>
			<div>&nbsp;</div>
			
	<?php echo (isset($login_success)) ? "<div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\">&times;</button><strong>$login_success</strong></div>" : ''; ?>
	<?php echo (isset($login_error)) ? "<div class=\"alert alert-error\"><button class=\"close\" data-dismiss=\"alert\">&times;</button><strong>$login_error</strong></div>" : ''; ?>
			
    <div class="control-group<?php echo $username_error?>">
      <label class="control-label" for="username">Username</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="username" name="username" value="<?php echo set_value('username'); ?>">
		<?php echo form_error('username', '<p class="help-inline">', '</p>'); ?>
      </div>
    </div>
    <div class="control-group<?php echo $password_error?>">
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" class="input-xlarge" id="password" name="password" value="<?php echo set_value('password'); ?>">
		<?php echo form_error('password', '<p class="help-inline">', '</p>'); ?>
      </div>
    </div>	
    <div class="control-group">
      <label class="control-label" for="login"> </label>
      <div class="controls">
		<input type="submit" value="Login" class="btn btn-inverse">
      </div>
    </div>		
	  </fieldset>
</form>

<p><a href="<?php echo site_url('register'); ?>">Register</a></p>

					</div>
					
<?php $this->load->view('template/v_admin_footer.php'); ?>
