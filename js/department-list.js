// Form validation code will come here.
function validateForm() 
{
	var formData = new FormData($('#profile_data')[0]);
	formData.append('action','edit_department');
	var _invalid = false;
	if(!_invalid)
	{
		$.ajax({
			url: "ajax/ajax_department.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,			
			success: function(result){
			if($.trim(result)=='success')
				window.location.href='department-list.php'
			}
		});
	}
}

function confirmation(dept_id){
    var result = confirm("Are you sure to delete?");
    if(result){
	$.ajax({
		url: "ajax/ajax_department.php", //for data insertion to database"
		type: "POST",
		data: { id : dept_id, action:'delete_department'},//to pass the value on another page 
		success: function(result){
			if($.trim(result)=='success')
				window.location.href='department-list.php'
		}	
	});
    }
}





function view(dept_id){        
	$.ajax({
		url: "ajax/ajax_department.php", 
		type: "POST",
		data: { id : dept_id, action:'view_department' },//to pass the value on another page 
		success: function(result){
			//alert(1);
			//window.location.href='department-list.php'
			$('#profile').html(result);
		}	
	});
}









$(document).ready(function() {
    $('#example').DataTable();
	$("#example_wrapper").css("width","100%");
});




function getData(dept_id)
{
	$.ajax({
		url: "ajax/ajax_department.php", //for data insertion to database"
		type: "POST",
		data: { id : dept_id, action:'update_department'},//to pass the value on another page 
		success: function(result){
			//alert(result);
			$('#profile_data').html(result);
		}	
	});
}



function activeDeactive(doc_id,status)
{

	$.ajax({
		url: "ajax/ajax_department.php",
		type: "POST",
		data: { id : doc_id, status: status,action:'active_deactive_department' },//to pass the value on another page 		
		cache: false,		
		success: function(result){
			//alert(result);
			if($.trim(result)=='success')
			window.location.href='department-list.php';
		}	
	});
}