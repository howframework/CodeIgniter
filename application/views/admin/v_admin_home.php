<?php $this->load->view('template/v_admin_header.php'); ?>

				<div class="span12">&nbsp;</div>
        <div class="span3">
			<?php $this->load->view('template/v_admin_sidebar'); ?>
        </div><!--/span-->
					<div class="span9">
						<p>Welcome <?php echo $user['fullname']?>. <a href="<?php echo site_url('logout'); ?>">Click here to logout</a>.</p>
					</div>
				</div>
				
<?php $this->load->view('template/v_admin_footer.php'); ?>
