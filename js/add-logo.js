function validateForm()
{
	
	var _invalid = false;
	
	var _picture = $('#picture').val();
	var _description = $('#description').val();
	
	if(_description=="")
	{
		$('#description_error').show();
		$('#description_error').html('Please enter file description');
		setTimeout(function(){ $('#description_error').hide(); }, 3000);
		_invalid = true;
	}
	
	if(_picture=="")
	{
		$('#picture_error').show();
		$('#picture_error').html('Please select file');
		setTimeout(function(){ $('#picture_error').hide(); }, 3000);
		_invalid = true;
	}
	
	if(!_invalid)
	{
		alert(1)
		var formData = new FormData($('#registration')[0]);
		$.ajax({
			url: "ajax/ajax_add-logo.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,
			success: function(result){
				alert(result);
				if($.trim(result)=='success')
				{
					window.location.href = 'manage-logo.php';
				}
			}	
		});
	}
}


