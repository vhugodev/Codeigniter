<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $page_title;?></title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="<?php echo site_url('assets/lte/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo site_url('assets/lte/dist/css/AdminLTE.min.css'); ?>">
		<!-- iCheck -->
		<link rel="stylesheet" href="<?php echo site_url('assets/lte/plugins/iCheck/square/blue.css'); ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="<?php echo site_url('index2.html');?>"><?php echo $this->config->item('cms_title');?></a>
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">Sign in to start your session</p>
				<?php echo $this->session->flashdata('message');?>
				<?php echo form_open();?>
					<div class="form-group has-feedback">
						<?php echo form_input('identity','','class="form-control" placeholder="E-mail"');?>
						<?php echo form_error('identity');?>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<?php echo form_password('password','','class="form-control" placeholder="Password"');?>
						<?php echo form_error('password');?>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-8">
							<label>
								<?php echo form_checkbox('remember','1',FALSE);?> Remember me
							</label>
						</div>
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
						</div><!-- /.col -->
					</div>
				<?php echo form_close();?>

			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->

		<!-- jQuery 2.1.4 -->
		<script src="<?php echo site_url('assets/lte/plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo site_url('assets/lte/bootstrap/js/bootstrap.min.js');?>"></script>
		<!-- iCheck -->
		<script src="<?php echo site_url('assets/lte/plugins/iCheck/icheck.min.js');?>"></script>
		<script>
			$(function () {
				$('input').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%' // optional
				});
			});
		</script>
	</body>
</html>
