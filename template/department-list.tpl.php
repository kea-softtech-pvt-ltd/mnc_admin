<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-bd lobidrag">
					<div class="panel-heading">
						<div class="btn-group"> 
							<a class="btn btn-success" href="add-department.php"> <i class="fa fa-plus"></i> Add Department 
							</a>  
						</div>        
					</div>
					<div class="panel-body">
						 <div class="table-responsive">
							<table id="example" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Sr.No</th>
						<th>Department Name</th>
						<th>Description</th>
						<th>status</th>
						<th>Action</th>
						<th>Update</th>
					</tr>
				</thead>
				<?php 
				$i = 1;
				if($count > 0)
				{
					while($data = mysqli_fetch_array($result))
					{
						?>
						<tr>
						   <td>
							   <label><?php echo $i;?></label>   
						   </td>
						   <td><?php echo $data['dept_name'];?></td>
						   <td><?php echo $data['description'];?></td>
						   <td>
								<?php if($data['status']=='1')
										{
											echo "Activated";
										}
										else
										{
											echo "Deactivated";
										}
								?>
							</td>
							<td>
								<?php 
									if($data['status']==1)
									{
										?>
										<button type="button" class="btn btn-danger btn-xs"  onclick="activeDeactive(<?php echo $data['dept_id'];?>,<?php echo $data['status'];?>);">Deactive</button>
									<?php
									}
									else
									{
									?>
										<button type="button" class="btn btn-success btn-xs" style="padding-right: 20px;" onclick="activeDeactive(<?php echo $data['dept_id'];?>,<?php echo $data['status'];?>);">Active</button>
									<?php
									}
								?>
								
							</td>	
								
								
						   <td>
							<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#display" onclick="view('<?php echo $data['dept_id']; ?>');"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine" onclick="getData('<?php echo $data['dept_id']; ?>');"><i class="fa fa-pencil"></i>
							</button>
							<button type="button" class="btn btn-danger btn-xs" onclick="confirmation('<?php echo $data['dept_id']; ?>');"><i class="fa fa-trash-o"></i>
							</button>
						   </td>
						</tr>
						<?php 
						$i++;
					}
				}
				?>
			</tbody>
		</table>
	</div>
	</div>
	</div>
	</div>
	</div>
</section> 
<!-- /.content -->

<?php include_once('footer.php'); ?>

<div id="ordine" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Update table</h4>
			</div>
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data" name="profile_data" id="profile_data"></form>	
			</div>
		</div>
	</div>
</div>



<!--pop up model for doctor list for display purpose only -->
<div id="display" class="modal fade" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
				<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Profile Data</h4>
			</div>
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data" name="profile" id="profile"></form>	
			</div>
		</div>
	</div>
</div>

<script src="js/department-list.js" type="text/javascript"></script>