<?php include_once('header.php'); ?>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
					<nav id="secondary_nav">
						<div class="container">
							<ul class="clearfix">
								<li><a href="#section_1" class="active">General info</a></li>
								<li><a href="#section_2">Reviews</a></li>
								<li><a href="#sidebar">Booking</a></li>
							</ul>
						</div>
					</nav>
					
					<div id="section_1">
						<div class="box_general_3">							
							<div class="indent_title_in">
								<i class="pe-7s-user"></i>
								<h3>Personal Information</h3>
							</div>
							<div class="wrapper_indent">
								<form method="post" id="doctor_personal" name="doctor_personal">								
								<div class="row">
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Full Name" value="sharad" name="fullname" id="fullname" readonly="readonly">
										</div>										
									</div>
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" value="8623818894" readonly="readonly" placeholder="Mobile" name="mobile" id="mobile">
										</div>
										<!--div id="mobile_error" style="color:#FF0000"></div-->
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email" name="email" id="email">
										</div>
										<div id="email_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">								
									<div class="col-md-6">									
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Date Of Birth" name="dob" id="dob">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar">
												</span>
											</span>
										</div>
										<div id="dob_error" style="color:#FF0000"></div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control" name="blood_group" id="blood_group">
												<option>A+</option>
												<option>AB+</option>
												<option>O+</option>
												<option>AB-</option>
												<option>B+</option>
												<option>A-</option>
												<option>B-</option>
												<option>O-</option>
											</select>											
										</div>
									</div>
								</div>							
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-group">
												<input type="radio" name="sex" id="sex" value="1">Male</label> 
											<label class="form-group">
												<input type="radio" name="sex" id="sex" value="0">Female</label>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Address Line 1" name="address" id="address">
										</div>
										<div id="address_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="State" name="state" id="state">
										</div>
										<div id="address_state_error" style="color:#FF0000"></div>
									</div>
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter City" name="city" id="city">
										</div>
										<div id="address_city_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Locality" name="locality" id="locality">
										</div>
										<div id="address_locality_error" style="color:#FF0000"></div>
									</div>
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="6" placeholder="Enter Pincode" name="pincode" id="pincode">
										</div>
										<div id="address_pincode_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="button" class="btn_1" value="Next" onclick="validateDoctorPersonalForm();">
										</div>
									</div>
									
									<!--div class="col-md-6">
										<div class="form-group">
											<input type="submit" class="btn_1" value="save & Exit">
										</div>
									</div-->
								</div>	
							</form>
							</div>
							
							<!-- /wrapper indent -->
							<hr id="education_hide">
							<div class="indent_title_in">
								<i class="pe-7s-news-paper"></i>
								<h3>Education Details</h3>
							</div>
							<div class="wrapper_indent">
								<form method="post" id="doctor_educational" name="doctor_educational">								
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Qualification" name="qualification" id="qualification">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter College/University" name="college" id="college">
										</div>
									</div>									
								</div>								
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Passout Year" name="passout" id="passout">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Years of Experiance" name="year_of_experience" id="year_of_experience">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div><input type="button" class="btn_1" value="Submit" onclick="validateDoctorEducational();"></div>
							</form>
							</div>
							<!--  End wrapper indent -->
							
							<!-- /wrapper indent -->
							<hr>
							<div class="indent_title_in">
								<i class="pe-7s-news-paper"></i>
								<h3>Clinic Details</h3>
							</div>
							<div class="wrapper_indent">
								<form method="post" id="clinic_info" name="clinic_info">								
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Clinic Name" name="clinic_name" id="clinic_name">
										</div>
										<div id="clinic_name_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row-->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter Clinic Address Line 1" name="clinic_address" id="clinic_address">
										</div>
										<div id="clinic_address_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter State" name="clinic_state" id="clinic_state">
										</div>
										<div id="address_pincode_error" style="color:#FF0000"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter City" name="clinic_city" id="clinic_city">
										</div>
										<div id="clinic_city_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter Locality" name="clinic_locality" id="clinic_locality">
										</div>
										<div id="clinic_locality_error" style="color:#FF0000"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" maxlength="6" onkeypress="return isNumberKey(event)" placeholder="Enter Pincode" name="clinic_pincode" id="clinic_pincode">
										</div>
										<div id="clinic_pincode_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row -->
								<div><input type="submit" class="btn_1" value="Submit" onclick="doctor_clinic_info();"></div>
							</form>
							</div>
							<!--  End wrapper indent -->
							
							
							<!-- /wrapper indent -->
							<hr>
							<div class="indent_title_in">
								<i class="pe-7s-news-paper"></i>
								<h3>Professional Details</h3>
							</div>
							<div class="wrapper_indent">
								<form method="post" id="professional_details" name="professional_details">								
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Registration Number" name="registration_number" id="registration_number">
										</div>
										<div id="registration_number_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row-->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Registration Council" name="registration_council" id="registration_council">
										</div>
										<div id="registration_council_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row-->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Registration Year" name="registration_year" id="registration_year">
										</div>
										<div id="registration_year_error" style="color:#FF0000"></div>
									</div>
								</div>
								<!-- /row-->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="GSTIN number" name="gst" id="gst">
										</div>
										<div id="gst_error" style="color:#FF0000"></div>
									</div>
								</div>	
								<!-- /row -->
								<div><input type="submit" class="btn_1" value="Submit" onclick="doctor_professional_info();"></div>
							</form>
							</div>
							<!--  End wrapper indent -->
							
							<!-- /wrapper indent -->
							<hr>
							<div class="indent_title_in">
								<i class="pe-7s-cash"></i>
								<h3>Prices &amp; Payments</h3>
								<p>Mussum ipsum cacilds, vidis litro abertis.</p>
							</div>
							<div class="wrapper_indent">
								<p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
								<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Service - Visit</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>New patient visit</td>
											<td>$34</td>
										</tr>
										<tr>
											<td>General consultation</td>
											<td>$60</td>
										</tr>
										<tr>
											<td>Back Pain</td>
											<td>$40</td>
										</tr>
										<tr>
											<td>Diabetes Consultation</td>
											<td>$55</td>
										</tr>
										<tr>
											<td>Eating disorder</td>
											<td>$60</td>
										</tr>
										<tr>
											<td>Foot Pain</td>
											<td>$35</td>
										</tr>
									</tbody>
								</table>
								</div>
							</div>
							<!-- End /wrapper_indent -->
						</div>
						<!-- /section_1 -->
					</div>
					<!-- /box_general -->

					<div id="section_2">
						<div class="box_general_3">
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>4.7</strong>
											<div class="rating">
												<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<small>Based on 4 reviews</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->

								<hr>

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Admin – April 03, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- End review-box -->

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Ahsan – April 01, 2016
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- End review-box -->

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Sara – March 31, 2016
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- End review-box -->
							</div>
							<!-- End review-container -->
							<hr>
							<div class="text-right"><a href="submit-review.html" class="btn_1">Submit review</a></div>
						</div>
					</div>
					<!-- /section_2 -->
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
						<form>
							<div class="title">
							<h3>Book a Visit</h3>
							<small>Monday to Friday 09.00am-06.00pm</small>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<input class="form-control" type="text" id="booking_date" data-lang="en" data-min-year="2017" data-max-year="2020" data-disabled-days="10/17/2017,11/18/2017">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<input class="form-control" type="text" id="booking_time" value="9:00 am">
									</div>
								</div>
							</div>
							<!-- /row -->
							<ul class="treatments clearfix">
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit1" name="visit1">
										<label for="visit1" class="css-label">Back Pain visit <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit2" name="visit2">
										<label for="visit2" class="css-label">Cardiovascular screen <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit3" name="visit3">
										<label for="visit3" class="css-label">Diabetes consultation <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit4" name="visit4">
										<label for="visit4" class="css-label">General visit <strong>$55</strong></label>
									</div>
								</li>
							</ul>
							<hr>
							<a href="booking-page.html" class="btn_1 full-width">Book Now</a>
						</form>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	<?php include_once('footer.php'); ?>
	
	
	
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

<script>
 $(function () {
   var bindDatePicker = function() {
		$("#dob").datetimepicker({
        format:'YYYY-MM-DD',
			icons: {
				//time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('input:first').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('MM-DD-YYYY');
			}

			$(this).val(date);
		});
	}
   
   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }
   
   bindDatePicker();
 });
</script>


<script src="js/custom/form.js" type="text/javascript"></script>