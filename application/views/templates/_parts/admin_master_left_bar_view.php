<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">

				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">

					<!-- Sidebar user panel (optional) -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="<?php echo site_url('assets/lte/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p><?php echo $this->ion_auth->user()->row()->first_name; ?></p>
							<!-- Status -->
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>

					<!-- Sidebar Menu -->
					<ul class="sidebar-menu">
						<li class="header">HEADER</li>
						<!-- Optionally, you can add icons to the links -->
						<?php
						if($this->ion_auth->is_admin()) :
						?>
						<li class="treeview <?php echo in_array($this->router->fetch_class(), array('groups','users')) ? 'active' : '';?>">
							<a href="#"><i class="fa fa-users"></i> <span>Users and Groups</span> <i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li class="<?php echo in_array($this->router->fetch_class(), array('users')) ? 'active' : '';?>"><a href="<?php echo site_url('admin/users'); ?>">Users</a></li>
								<li class="<?php echo in_array($this->router->fetch_class(), array('groups')) ? 'active' : '';?>"><a href="<?php echo site_url('admin/groups'); ?>">Groups</a></li>
							</ul>
						</li>
						<?php
						endif;
						?>
					</ul><!-- /.sidebar-menu -->
				</section>
				<!-- /.sidebar -->
			</aside>