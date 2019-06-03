<?php 
include_once('../includes/application_top.php');

if($_REQUEST['action']=='add_patient')
{
	
	$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
	$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
	$mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
	$dob = mysqli_real_escape_string($conn, $_REQUEST['date_of_birth']);
	$blood_group = mysqli_real_escape_string($conn, $_REQUEST['blood_group']);
	$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
	$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
	$date = date('Y-m-d h:i:s');
	
	//print_r($_REQUEST);
	//print_r($_FILES);
	
	if (isset($_FILES['picture'])) 
	{
		$num = rand(1,999999);
		$picture = $_FILES['picture'];
		$filename = $_FILES["picture"]["name"];
		$tempname = $_FILES["picture"]["tmp_name"];
		$folder = "../upload/".$num.'_'.$filename;
		move_uploaded_file($tempname, $folder);
		$sql = "INSERT INTO ".Pat."(fname, lname, mobile, pic_source, dob, blood_group, sex, address,created_date) VALUES ('".$fname."','".$lname."','".$mobile."','".$folder."','".$dob."','".$blood_group."','".$sex."','".$address."','".$date."')";

		if(mysqli_query($conn, $sql))
		{
			echo "success";
		}
		else
		{
			echo "error occured";
		}
	}
	else
	{
		echo "error occured";
	}	
}


else if($_REQUEST['action']=="edit_patient")
{	
	$id = mysqli_real_escape_string($conn, $_REQUEST['id'] );
	$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
	$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
	$mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
	$dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
	$blood_group = mysqli_real_escape_string($conn, $_REQUEST['blood_group']);
	$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
	$status = mysqli_real_escape_string($conn, $_REQUEST['status']);
	$address = mysqli_real_escape_string($conn, $_REQUEST['address']);

	if($_POST['isImageChange']=='1') 
	{
		$picture = $_FILES['picture'];
		$filename = $_FILES["picture"]["name"];
		$tempname = $_FILES["picture"]["tmp_name"];
		$folder = "../upload/".$filename;
		move_uploaded_file($tempname, $folder);

		$query = "UPDATE patient SET f_name='".$fname."',l_name='".$lname."',email='".$email."',designation='".$designation."',department='".$department."',address='".$address."',specialist='".$specialist."',mobile= '".$mobile."',profile_pic_source='".$folder."',short_bio='".$short_bio."' ,dob='".$dob."' ,blood_group='".$blood_group."' ,sex='".$sex."' WHERE patient_id='".$id."'";

			if(mysqli_query($conn, $query))
			{				
				echo "success";
			}
			else
			{
				echo "error occured";
			}			
	}
	else
	{

	$query = "UPDATE patient SET fname='".$fname."',lname='".$lname."',mobile='".$mobile."',dob='".$dob."',blood_group='".$blood_group."',sex='".$sex."',status='".$status."',address='".$address."' WHERE patient_id='".$id."'";
			if(mysqli_query($conn, $query))
			{
				
				echo "success";
			}
			else
			{
				echo "error occured";
			}		
	}
}

else if($_REQUEST['action']=="delete_patient")
{
	$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
	$query = "UPDATE patient SET isDeleted='1' WHERE patient_id='".$id."'";
	if(mysqli_query($conn, $query))
	{
		echo "success";
	}	
}	

else if($_REQUEST['action']=="view_patient")
{

	$id = $_POST['id'];
	$query = "select * from patient where patient_id='".$id."'";
	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);
	if($count > 0){



	while($row = mysqli_fetch_array($result))
	{
	?>
		<div class="form-group">				
			<input type="hidden"  id="id" name="id" <?php echo $row['patient_id'];?>>
		</div>
		<div class="form-group">		
			<label>First Name:</label>
			<span  id="fname" name="fname"><?php echo $row['fname'];?></span>
		</div>
		<div class="form-group">
			<label>Last Name:</label>
			<span  id="lname" name="lname"> <?php echo $row['lname'];?></span>
		</div>
		<div class="form-group">
			<label>Mobile:</label>
			<span   id="mobile" name="mobile" ><?php echo $row['mobile'];?></span>
		</div>
		<div class="form-group">
			<label>Designation:</label>
			<span   id="designation" name="designation" ><?php echo $row['dob'];?></span>
		</div>
		<div class="form-group">
			<label>Blood group:</label>
			<span name="dob" id="dob" ><?php echo $row['blood_group'];?></span>
		</div>
		<div class="form-group">
			<label>Address:</label>
			<span  id="address" name="address"><?php echo $row['address'];?></span>
		</div>
		
		<div class="form-group">
			<label>Picture upload</label>
			<img src="<?php echo base_url_image.$row['pic_source'];?>" style="width:50px"></img>
		</div>
		<div class="form-group">
		 <label>Sex:</label>
			<span  name="sex" id="sex" >
			<?php 
				if($row['sex']=='1')
				{
					echo "Male";
				}
				else
				{
					echo "Female";
				}	
			?>
			</span>
			</div>
												
	<?php 
	} 
	 }	 
	
}

else if($_REQUEST['action']=="active_deactive_patient")
{
	
		
	$id = mysqli_real_escape_string($conn,$_REQUEST['id']);
	$status = mysqli_real_escape_string($conn, $_REQUEST['status']);
	//echo $status;

	if($status=='1')
		$status = '0';
	else
		$status = '1';

	$query = "UPDATE patient SET status='".$status."' where patient_id='".$id."'";
	if(mysqli_query($conn, $query))
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
	
}

else if($_REQUEST['action']=="update_patient")
{
	$id = $_POST['id'];
$query = "select * from ".Pat." where patient_id='".$id."'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
if($count > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
	<div class="form-group">				
	<input type="hidden" id="isImageChange" name="isImageChange" value="0">
	</div>
	
	<div class="form-group">				
		<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['patient_id'];?>" required>
	</div>
	<div class="form-group">		
		<label>First Name</label>
		<input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['fname'];?>" required>
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['lname'];?>" required>
	</div>
	<div class="form-group">
		<label>Mobile</label>
		<input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']?>" required>
	</div>
	
	
	<div class="form-group">
		<label>Address</label>
		<input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'];?>" required>
	</div>
	

	<div class="form-group">
		<label>Date Of Birth</label>
		<input type="date" class="form-control" id="dob" name="dob" value="<?php echo $row['dob'];?>" required>
	</div>
	
	<div class="form-group">
		<label>Blood group</label>
		<select class="form-control" name="blood_group" id="blood_group">
			<option <?php if($row['blood_group']=='A+') { ?> selected <?php } ?>>A+</option>
			<option <?php if($row['blood_group']=='AB+') { ?> selected <?php } ?>>AB+</option>
			<option <?php if($row['blood_group']=='O+') { ?> selected <?php } ?> >O+</option>
			<option <?php if($row['blood_group']=='AB-') { ?> selected <?php } ?>>AB-</option>
			<option <?php if($row['blood_group']=='B+') { ?> selected <?php } ?>>B+</option>
			<option <?php if($row['blood_group']=='A-') { ?> selected <?php } ?>>A-</option>
			<option <?php if($row['blood_group']=='B-') { ?> selected <?php } ?>>B-</option>
			<option <?php if($row['blood_group']=='O-') { ?> selected <?php } ?>>O-</option>
		</select>
	</div>
	<div class="form-group">
		<label>Picture upload</label>
		<img src="<?php echo base_url_image.$row['pic_source'];?>" style="width:50px"></img>
		<input type="file" name="picture" id="picture" value="<?php echo $row['pic_source'];?>" />		
	</div>
	
	<div class="form-group">
	 <label>Sex</label><br>
	 <label class="radio-inline">
		<input type="radio" name="sex" id="sex" value="1"<?php if($row['sex']=='1') { ?> checked <?php } ?>>Male
	</label> 
	<label class="radio-inline">
		<input type="radio" name="sex" id="sex" value="0"<?php if($row['sex']=='0') { ?> checked <?php } ?>>Female
	</label>
		</div>
	 <div class="form-check">
		<label>Status</label><br>
		<label class="radio-inline">
		<input type="radio" name="status" id="status" value="1" <?php if($row['status']=='1') { ?> checked <?php } ?>>Active</label>
		<label class="radio-inline">
		  <input type="radio" name="status" id="status" value="0"<?php if($row['status']=='0') { ?> checked <?php } ?>>Inactive</label>
	</div>  

<?php 
} 
?>
  <tr>
    <td colspan="2">
		<input type="button" onclick="validateForm();"  name="submit" class="btn btn-primary" value="save"/>
	</td>
  </tr>
<?php
 }
 ?> 
 <script>
//for image checking update or not
$(document).ready(function(){
 $('#picture').change(function(){ 
	//alert(this.value);
	$('#isImageChange').val('1');
 })
});
</script>
<?php
}
?>