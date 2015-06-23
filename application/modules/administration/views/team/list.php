	<!-- Modal -->
	<div class="modal fade" id="new-team" tabindex="-1" role="dialog" aria-labelledby="AddNewTourLabel" aria-hidden="true">
		<div class="modal-dialog"> 
			<form>
			    <div class="modal-content">
			    	<div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title text-center">Add New Banner</h4>
		            </div>
		            <div class="modal-body">
		            	<div class="form-group">
		            		<label for="inp_class_name" class="col-sm-3 control-label" style="text-align: left">Banner Name</label>
		            		<div class="col-sm-8">
		            			<input class="form-control" type="text" name="inp_banner_name" id="inp_banner_name" autocomplete="off" placeholder="Banner Name"/>
		            			<span id="err_1" style="color:red;font-size:11px;" class="hidden">Banner Name cannot empty</span>
		            		</div>
		            	</div>
		            	<div class="form-group">
		            		<label for="inp_class_logo" class="col-sm-3 control-label" style="text-align: left">Image<span style="color:red;font-size:11px;"><?php echo isset($err_params['inp_usr_id']) ? $err_params['inp_usr_id']:""; ?></span></label>
		            		<div class="col-sm-8">
		            			<input class="form-control" type="text" name="inp_banner_image" id="inp_banner_image" autocomplete="off" placeholder="Banner Image"/>
		            			<span id="err_2" style="color:red;font-size:11px;" class="hidden">Image cannot empty</span>
		            		</div>
		            	</div>
		            </div>
		            <div class="modal-footer">
		            	<div class="form-group">
			    			<div class="col-sm-offset-2 col-sm-10">
			    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                			<button type="button" class="btn btn-primary" id="submit_class">Save Class</button>
			    			</div>
			    		</div>
		            </div>
			    </div>
		    </form>
		</div>
	</div>
	
	<h2>Team List</h2>
	<div>&nbsp;</div>
	<a data-toggle="modal" data-target="#new-team" class="btn btn-default">Add New Team</a>
	<div>&nbsp;</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Team Name</th>
				<th>Alias</th>
				<th>Deskripsi</th>
				<th>Lokasi</th>
				<th>Logo</th>
				<th>Image</th>
				<th>Publish</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($team_list as $row) : ?>
			<tr>
				<td><?php echo $row->team_name ?></td>
				<td><?php echo $row->team_alias ?></td>
				<td><?php echo $row->team_description ?></td>
				<td>Test</td>
				<td><img src="<?php echo $row->team_logo ?>" width="50px" style="display: block; margin: 0 auto;"></td>
				<td><?php echo $row->team_image ?></td>
				<td>&nbsp;</td>
				<td><button class="btn btn-warning">Edit Team</button></td>
			</tr>	
			<?php endforeach; ?>
		</tbody>
	</table>