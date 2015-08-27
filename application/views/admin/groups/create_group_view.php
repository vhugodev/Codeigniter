<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
					
					<?php echo $this->session->flashdata('message');?>
					<div class="row">
						<div class="col-lg-2 col-md-2 col-md-6" style="margin-bottom:20px;">
							<a href="<?php echo site_url('admin/groups');?>" class="btn btn-block btn-default"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title col-md-12 col-sm-12">Create Group</h3>
								</div><!-- /.box-header -->
								<?php echo form_open('',array('class'=>'form-horizontal'));?>
								<div class="box-body">
									<div class="col-md-6 col-sm-6" >
										<?php echo form_label('Group name','group_name');?>
										<?php echo form_input('group_name','','class="form-control"');?>
										<?php echo form_error('group_name');?>
									</div>
									<div class="col-md-6 col-sm-6">
										<?php echo form_label('Group description','group_description');?>
										<?php echo form_input('group_description','','class="form-control"');?>
										<?php echo form_error('group_description');?>
									</div>
								</div>
								<div class="box-footer">
									<div class="col-md-4 col-sm-6 pull-right">
										<button type="submit" class="btn btn-block"><i class="fa fa-save"></i> Save</button>
									</div>
								</div>
								<?php echo form_close();?>
							</div>
						</div>
					</div>