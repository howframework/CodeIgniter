<?php
	 $username_error = ( trim(form_error('username')) != '' ) ? ' error' : '';
	 $password_error = ( trim(form_error('password')) != '' ) ? ' error' : '';
	 $email_error = ( trim(form_error('email')) != '' ) ? ' error' : '';
	 $cpassword_error = ( trim(form_error('cpassword')) != '' ) ? ' error' : '';
	 $fullname_error = ( trim(form_error('fullname')) != '' ) ? ' error' : '';
?>
<?php $this->load->view('template/v_admin_header.php'); ?>
					<div class="span12 well" style="margin-top: 20px;">
<form class="form-horizontal" method="post" action="<?php echo site_url('register'); ?>">
  <fieldset>
    <legend>Register</legend>
			<div>&nbsp;</div>
			
	<?php echo (isset($register_error)) ? "<div class=\"alert alert-error\"><button class=\"close\" data-dismiss=\"alert\">&times;</button><strong>$register_error</strong></div>" : ''; ?>
	<?php echo (isset($register_success)) ? "<div class=\"alert alert-success\"><button class=\"close\" data-dismiss=\"alert\">&times;</button><strong>$register_success</strong></div>" : ''; ?>
    
	<?php if (!isset($register_success)) { ?>
	
    <div class="control-group<?php echo $fullname_error; ?>">
      <label class="control-label" for="fullname">Full Name</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="fullname" name="fullname" value="<?php echo set_value('fullname'); ?>">
		<?php echo form_error('fullname', '<p class="help-inline">', '</p>'); ?>
      </div>
    </div>
    <div class="control-group<?php echo $email_error; ?>">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="email" name="email" value="<?php echo set_value('email'); ?>">
		<?php echo form_error('email', '<p class="help-inline">', '</p>'); ?>
      </div>
    </div>
    <div class="control-group<?php echo $username_error; ?>">
      <label class="control-label" for="username">Username</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="username" name="username" value="<?php echo set_value('username'); ?>">
		<?php echo form_error('username', '<p class="help-inline">', '</p>'); ?>
      </div>
    </div>
    <div class="control-group<?php echo $password_error; ?>">
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" class="input-xlarge" id="password" name="password" value="<?php echo set_value('password'); ?>">
		<?php echo form_error('password', '<p class="help-inline">', '</p>'); ?>
      </div>
	</div>
    <div class="control-group<?php echo $cpassword_error; ?>">
      <label class="control-label" for="cpassword">Confirm Password</label>
      <div class="controls">
        <input type="password" class="input-xlarge" id="cpassword" name="cpassword" value="<?php echo set_value('cpassword'); ?>">
		<?php echo form_error('cpassword', '<p class="help-inline">', '</p>'); ?>
      </div>    
	</div>	
    <div class="control-group">
      <label class="control-label" for="register"> </label>
      <div class="controls">
		<input type="submit" value="Register" class="btn btn-inverse">
      </div>
    </div>

		<?php } ?>
	  </fieldset>
</form>

<p><a href="<?php echo site_url('login'); ?>">Login</a></p>

					</div>
					
<?php $this->load->view('template/v_admin_footer.php'); ?>
