function validateForm() 
{
	//alert(111111);
	var _invalid = false;
	var formData = new FormData($('#profile_data')[0]);	
	formData.append('action','edit_schedule')
	if(!_invalid)
	{
		$.ajax({
			url: "ajax/ajax_schedule.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,					
			success: function(result){
				if($.trim(result)=='success')
					window.location.href='schedule-list.php'
			}
		});
	}
}



function confirmation(doc_id){
    var result = confirm("Are you sure to delete?");
    if(result){
	$.ajax({
		url: "ajax/ajax_schedule.php", 
		type: "POST",
		data: { id : doc_id , action:'delete_schedule'},//to pass the value on another page 
		success: function(result){
			window.location.href='schedule-list.php'
		}	
	});
    }
}




function view(doc_id){        
	$.ajax({
		url: "ajax/ajax_schedule.php", 
		type: "POST",
		data: { id : doc_id,action:'view_schedule' },//to pass the value on another page 
		success: function(result){
			//alert(1);
			//window.location.href='schedule-list.php'
			$('#profile').html(result);
		}	
	});
}


$(document).ready(function() {
    $('#example').DataTable();
	$("#example_wrapper").css("width","100%");
});


function getData(doc_id)
{
	$.ajax({
		url: "ajax/ajax_schedule.php", //for data update to database"
		type: "POST",
		data: { id : doc_id, action:'update_schedule' },//to pass the value on another page 
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
		url: "ajax/ajax_schedule.php",
		type: "POST",
		data: { id : doc_id, status: status,action:'activeDeactive_schedule' },//to pass the value on another page 		
		cache: false,		
		success: function(result){
			//alert(result);
			if($.trim(result)=='success')
			window.location.href='schedule-list.php';
		}	
	});
}