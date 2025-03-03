<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php
		echo $this->lang->line('savsoft_quiz'); ?></title>
	<!-- Custom fonts for this template-->
	<link href="<?php
	echo base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?php
	echo base_url(); ?>css/font/font.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?php
	echo base_url(); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<style>
		#accordionSidebar, nav.navbar.navbar-expand.navbar-light.bg-white.topbar.mb-4.static-top.shadow {
			display: none !important;
		}

		#content {
			background-color: #01689b !important;
		}
	</style>
</head>
<body class="bg-gradient-primary">
<div id="loginwindow">
	<div id="logincontent">
		<div>
			<h1 class="h4 text-gray-900 mb-4" style="margin-left:0.5em;">
				<?php
				if ($hres[0]['setting_value'] == "") {
					echo $this->lang->line('savsoft_quiz');
				} else {
					echo $hres[0]['setting_value'];
				}
				?>
			</h1>
		</div>
		<form class="user" method="post" action="<?php
		echo site_url('login/insert_user/'); ?>">
			<?php
			if ($this->session->flashdata('message')) {
				redirect("login");
				echo $this->session->flashdata('message');
			}
			?>
			<p style="margin-left:0.8em;"><?php
				echo $this->lang->line('register_new_account'); ?></p>
			<div class="form-group">
				<label for="inputEmail" class="sr-only"> <?php
					echo $this->lang->line('first_name'); ?> </label>
				<input type="text" id="inputFirstname" name="first_name" class="form-control" placeholder="<?php
				echo $this->lang->line('first_name'); ?>" autofocus>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="sr-only"> <?php
					echo $this->lang->line('last_name'); ?> </label>
				<input type="text" id="inputLastname" name="last_name" class="form-control" placeholder="<?php
				echo $this->lang->line('last_name'); ?>" autofocus>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="sr-only"> <?php
					echo $this->lang->line('email_address'); ?> </label>
				<input type="email" id="inputEmail" name="email" class="form-control" placeholder="<?php
				echo $this->lang->line('email_address'); ?>" required autofocus>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="sr-only"> <?php
					echo $this->lang->line('password'); ?> </label>
				<input type="password" id="inputPassword" name="password" class="form-control" placeholder="<?php
				echo $this->lang->line('password'); ?>" required>
			</div>
			<div class="form-group" style="visibility:hidden; height:0px!important;">
				<label for="inputEmail" class="sr-only"> <?php
					echo $this->lang->line('contact_no'); ?> </label>
				<input type="text" name="contact_no" class="form-control" placeholder="<?php
				echo $this->lang->line('contact_no'); ?>" autofocus>
			</div>
			<div style="visibility:hidden; height:0px!important;">
				<?php
				if ($this->session->userdata('cart')) {
					$d = $this->session->userdata('cart');
					foreach ($d as $k => $v) {
						?>
						<input type="hidden" name="gid[]" value="
														<?php
						echo $v[0]; ?>"> <?php
					}
				} else {
					?>
					<input type="hidden" name="gid[]" value="<?php
					echo $this->config->item('default_group'); ?>">
					<?php
				}
				?>
				<!--
				<div class="form-group">
					<label> <?php
						echo $this->lang->line('select_group'); ?> 
					</label>
					<select class="form-control" name="gid" id="gid"> 
					<?php
						foreach ($group_list as $key => $val) { ?>
							<option value="<?php
								echo $val['gid']; ?>" <?php
								if ($val['gid'] == $gid) {
									echo 'selected';
								}
								echo $val['group_name']; ?> ( <?php
								echo $this->lang->line('price_'); ?>: <?php
									echo $val['price']; ?>)
							</option> 
							<?php
						}
						?>
					</select>
				</div> 
				-->
				<?php
				foreach ($custom_form as $fk => $fval) { ?>
					<div class="form-group">
						<label for="inputEmail"> <?php
							echo $fval['field_title']; ?> </label> <input type="<?php
						echo $fval['field_type']; ?>" name="custom[<?php
						echo $fval['field_id']; ?>]" class="form-control" value="<?php
						echo $fval['field_value']; ?>" <?php
						echo $fval['field_validate']; ?>>
					</div>
					<?php
				}
				?>
			</div>
			<button type="submit" class="btn btn-primary btn-user btn-block" style="margin-left:0px!important;"><?php
				echo $this->lang->line('register'); ?></button>
			<a href="<?php
			echo site_url('login'); ?>" class="btn btn-primary btn-user btn-block btn-login"><?php
				echo $this->lang->line('to_login'); ?></a>
		</form>
		<hr>
	</div>
</div>
</body>
</html>











 