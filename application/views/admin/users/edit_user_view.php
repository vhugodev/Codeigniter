<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
					
					<div class="row">
						<div class="col-lg-2 col-md-2 col-md-6" style="margin-bottom:20px;">
							<a href="<?php echo site_url('admin/users');?>" class="btn btn-block btn-default"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title col-md-12 col-sm-12">Edit User</h3>
								</div><!-- /.box-header -->
								<?php echo form_open('',array('class'=>'form-horizontal'));?>
								<div class="box-body">
									<div class="col-md-4 col-sm-6" >
										<?php
										echo form_label('First name','first_name');
										?>
										<?php
										echo form_input('first_name',set_value('first_name',$user->first_name),'class="form-control"');
										?>
										<?php
										echo form_error('first_name');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										echo form_label('Last name','last_name');
										?>
										<?php
										echo form_input('last_name',set_value('last_name',$user->last_name),'class="form-control"');
										?>
										<?php
										echo form_error('last_name');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										echo form_label('Company','company');
										?>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-building"></i></span>
										<?php
										echo form_input('company',set_value('company',$user->company),'class="form-control"');
										?>
										</div>
										<?php
										echo form_error('company');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										echo form_label('Phone','phone');
										?>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone"></i></span>
										<?php
										echo form_input('phone',set_value('phone',$user->phone),'class="form-control"');
										?>
										</div>
										<?php
										echo form_error('phone');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										echo form_label('Username','username');
										?>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-at"></i></span>
										<?php
										echo form_input('username',set_value('username',$user->username),'class="form-control"');
										?>
										</div>
										<?php
										echo form_error('username');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										echo form_label('Email','email');
										?>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<?php
										echo form_input('email',set_value('email',$user->email),'class="form-control"');
										?>
										</div>
										<?php
										echo form_error('email');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										echo form_label('Password','password');
										?>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<?php
										echo form_password('password','','class="form-control"');
										?>
										</div>
										<?php
										echo form_error('password');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										echo form_label('Confirm password','password_confirm');
										?>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<?php
										echo form_password('password_confirm','','class="form-control"');
										?>
										</div>
										<?php
										echo form_error('password_confirm');
										?>
									</div>
									<div class="col-md-4 col-sm-6">
										<?php
										if(isset($groups)) {

											echo form_label('Groups','groups[]');
											
											foreach($groups as $group) {
												echo '<div class="checkbox">';
												echo '<label>';
												echo form_checkbox('groups[]', $group->id, set_checkbox('groups[]', $group->id, in_array($group->id,$usergroups)));
												echo ' '.$group->name;
												echo '</label>';
												echo '</div>';
											}
										}
										?>
									</div>
									<?php echo form_hidden('user_id',$user->id);?>
									
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


