<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
$this->load->view('templates/_parts/admin_master_header_view');
$this->load->view('templates/_parts/admin_master_left_bar_view');

?>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Page Header
						<small>Optional description</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
						<li class="active">Here</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<?php
					if($this->session->flashdata('message')) {
					?>
					<div class="container" style="padding-top:40px;">
						<div class="alert alert-info alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $this->session->flashdata('message');?>
						</div>
					</div>
					<?php
					}
					?>

					<?php echo $the_view_content; ?>

				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->

<?php $this->load->view('templates/_parts/admin_master_footer_view');?>