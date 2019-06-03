function getData(app_id)
{
	$.ajax({
		url: "ajax/ajax_appointment.php", //for data insertion to database"
		type: "POST",
		data: { id : app_id,action:'view_appointment' },//to pass the value on another page 
		success: function(result){
			$('#appointment_data').html(result);
			
			$("#date").datetimepicker();
		}	
	});
}



$(document).ready(function() {
    $('#example').DataTable();
	$("#example_wrapper").css("width","100%");
});



function validateForm() 
{
	alert('inside function');
	var formData = new FormData($('#appointment_data')[0]);
	formData.appnend('action','update_appointment')
	var _invalid = false;
	if(!_invalid)
	{
		alert('before ajax');
		$.ajax({
			url: "ajax/ajax_appointment.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,			
			success: function(result){
			alert('success');
		//	if($.trim(result)=='success')
			//	window.location.href='appointment-list.php'
			}
		});
	}
}


function confirmation(app_id){
    var result = confirm("Are you sure to delete?");
    if(result){
	$.ajax({
		url: "ajax/ajax_appointment.php", //for data insertion to database"
		type: "POST",
		data: { id : app_id,action:'delete_appointment' },//to pass the value on another page 
		success: function(result){
			if($.trim(result)=='success')
			window.location.href  = 'appointment-list.php'
		}	
	});
    }
}



function validateForm() 
{
	//alert(111111);
	var _invalid = false;
	var formData = new FormData($('#profile_data')[0]);	
	formData.append('action','update_appointment');
	if(!_invalid)
	{
		$.ajax({
			url: "ajax/ajax_appointment.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,					
			success: function(result){
				if($.trim(result)=='success')
					window.location.href='appointment-list.php'
			}
		});
	}
}





function view(app_id){        
	//alert(1);
	$.ajax({
		url: "ajax/ajax_appointment.php", 
		type: "POST",
		data: { id : app_id,action:'view_appointment' },//to pass the value on another page 
		success: function(result){
			//alert(2);
			//window.location.href='appointment-list.php'
			$('#profile').html(result);
		}	
	});
}



$(document).ready(function() {
    $('#example').DataTable();
	$("#example_wrapper").css("width","100%");
});


function getData(app_id)
{
	$.ajax({
		url: "ajax/ajax_appointment.php", //for data update to database"
		type: "POST",
		data: { id : app_id, action:'edit_appointment' },//to pass the value on another page 
		success: function(result){
			//alert(result);
			$('#profile_data').html(result);
		}	
	});
}




function activeDeactive(doc_id,status)
{
	//alert(doc_id);
	$.ajax({
		url: "ajax/ajax_appointmentActiveDeactive.php",
		type: "POST",
		data: { id : doc_id, status: status },//to pass the value on another page 		
		cache: false,		
		success: function(result){
			//alert(result);
			if($.trim(result)=='success')
			window.location.href='appointment-list.php';
		}	
	});
}