                <!-- Main content -->
                <section class="content">					
					<div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="add-patient.php"> <i class="fa fa-plus"></i>  Add patient</a>  
                                    </div>
									<div class="btn-group"> 
									<a class="btn btn-success" href="patient_import_export.php"> <i class="fa fa-file-excel-o"></i>Import And Export Excel
									</a>  
									</div>
                                </div>
                    <div class="panel-body">                                    
						<div class="table-responsive">
							<table id="example" class="table table-bordered table-hover">
								<thead class="success">
									<tr>
										<th>Serial No</th>
										<th>First Name</th>
										<th>Last Name</th>										
										<th>Action</th>
										<th>Update</th>
									</tr>
							</thead>
							<tbody>
							<?php 
								$i=1;
								if($count > 0)
								{
									while($data = mysqli_fetch_array($result))
									{
							?>
								<tr>
								   <td>
									   <label><?php echo $i;?></label>   
								   </td>
								   <td><?php echo $data['fname'];?></td>
								   <td><?php echo $data['lname'];?></td>
								   
								   	<td>
										<?php 
											if($data['status']==1)
											{
												?>
												<button type="button" class="btn btn-danger btn-xs"  onclick="activeDeactive(<?php echo $data['patient_id'];?>,<?php echo $data['status'];?>);">Deactive</button>
											<?php
											}
											else
											{
											?>
												<button type="button" class="btn btn-success btn-xs" style="padding-right: 20px;" onclick="activeDeactive(<?php echo $data['patient_id'];?>,<?php echo $data['status'];?>);">Active</button>
											<?php
											}
										?>
										
									</td>
								   <td>
									<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#display" onclick="view('<?php echo $data['patient_id']; ?>');"><i class="fa fa-eye" ></i></button>
									<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine" onclick="getData('<?php echo $data['patient_id']; ?>');"><i class="fa fa-pencil"></i>
									</button>
									<button type="button" class="btn btn-danger btn-xs" onclick="confirmation('<?php echo $data['patient_id']; ?>');"><i class="fa fa-trash-o"></i>
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
<?php include('footer.php'); ?>
	
<div id="ordine" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content ">
			<div class="modal-header">				
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Update table</h4>
			</div>							
			<!--Pop modal data-->
			<div class="panel-body" >
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
			<div class="modal-body">		
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Profile Data</h4>
			</div>
					<!--Pop modal data-->
			<div class="panel-body" >
				<form method="POST" enctype="multipart/form-data" name="profile" id="profile"></form>	
			</div>
		</div>		
	</div>
</div>
</div>
	
	
	
	
	
<script src="js/patient-list.js" type="text/javascript"></script>