<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<!-- Main Footer -->
			<footer class="main-footer">
				<!-- To the right -->
				<div class="pull-right hidden-xs">
					Anything you want
				</div>
				<!-- Default to the left -->
				<strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">Company</a>.</strong> All rights reserved.
				Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
			</footer>
		</div><!-- ./wrapper -->

		<!-- REQUIRED JS SCRIPTS -->

		<!-- jQuery 2.1.4 -->
		<script src="<?php echo site_url('assets/lte/plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo site_url('assets/lte/bootstrap/js/bootstrap.min.js');?>"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo site_url('assets/lte/dist/js/app.min.js');?>"></script>

		<!-- Optionally, you can add Slimscroll and FastClick plugins.
				 Both of these plugins are recommended to enhance the
				 user experience. Slimscroll is required when using the
				 fixed layout. -->
		<?php echo $before_body;?>
	</body>
</html>
