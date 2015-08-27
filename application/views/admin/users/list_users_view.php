<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

					<div class="row">
						<div class="col-lg-offset-10 col-lg-2 col-md-offset-10 col-md-2 col-sm-offset-6 col-md-6" style="margin-bottom:20px;">
							<a href="<?php echo site_url('admin/users/create');?>" class="btn btn-block btn-default"><i class="fa fa-fw fa-plus"></i> Create User</a>
						</div>
					</div>
					<?php if(!empty($users)) { ?>
					<div class="row">
						<div class="col-xs-12">

							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Users</h3>
								</div><!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th>Username</th>
												<th>Name</th>
												<th>Email</th>
												<th>Last login</th>
												<th>Operations</th>
											</tr>
										</thead>
										<tbody>
										<?php
										foreach($users as $user) {
											echo '<tr>';
											echo '<td>'.$user->id.'</td><td>'.$user->username.'</td><td>'.$user->first_name.' '.$user->last_name.'</td><td>'.$user->email.'</td><td>'.date('Y-m-d H:i:s', $user->last_login).'</td><td>';
										?>
										<div class="btn-group">
											<button type="button" class="btn btn-default"><i class="fa fa-fw fa-gears"></i> Action</button>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu" role="menu">
												<li><?php echo anchor('admin/users/edit/'.$user->id,'<i class="fa fa-fw fa-gear"></i> Edit'); ?></li>
												<li class="divider"></li>
												<li><?php echo anchor('admin/users/delete/'.$user->id,'<i class="fa fa-fw fa-remove"></i> Delete'); ?></li>
											</ul>
										</div>
										<?php	
											//echo anchor('admin/users/edit/'.$user->id,'<span class="glyphicon glyphicon-pencil"></span>').' '.anchor('admin/users/delete/'.$user->id,'<span class="glyphicon glyphicon-remove"></span>');
											echo '</td>';
											echo '</tr>';
										}
										?>
										</tbody>
										<tfoot>
											<tr>
												<th>ID</th>
												<th>Username</th>
												<th>Name</th>
												<th>Email</th>
												<th>Last login</th>
												<th>Operations</th>
											</tr>
										</tfoot>
									</table>
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				<?php } ?>
