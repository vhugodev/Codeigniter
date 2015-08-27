<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

					<div class="row">
						<div class="col-lg-offset-10 col-lg-2 col-md-offset-10 col-md-2 col-sm-offset-6 col-md-6" style="margin-bottom:20px;">
							<a href="<?php echo site_url('admin/groups/create');?>" class="btn btn-block btn-default"><i class="fa fa-fw fa-plus"></i> Create Group</a>
						</div>
					</div>
					<?php if(!empty($groups)) { ?>
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Groups</h3>
								</div><!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th>Group name</th>
												<th>Group description</th>
												<th>Operations</th>
											</tr>
										</thead>
										<tbody>
										<?php
										foreach($groups as $group) {
											echo '<tr>';
											echo '<td>'.$group->id.'</td><td>'.$group->name.'</td><td>'.$group->description.'</td><td>';
										?>
										<div class="btn-group">
											<button type="button" class="btn btn-default"><i class="fa fa-fw fa-gears"></i> Action</button>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu" role="menu">
												<li><?php echo anchor('admin/groups/edit/'.$group->id,'<i class="fa fa-fw fa-gear"></i> Edit'); ?></li>
												<li class="divider"></li>
												<li><?php echo anchor('admin/groups/delete/'.$group->id,'<i class="fa fa-fw fa-remove"></i> Delete'); ?></li>
											</ul>
										</div>
										<?php	
											echo '</td>';
											echo '</tr>';
										}
										?>
										</tbody>
										<tfoot>
											<tr>
												<th>ID</th>
												<th>Group name</th>
												<th>Group description</th>
												<th>Operations</th>
											</tr>
										</tfoot>
									</table>
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					<?php } ?>