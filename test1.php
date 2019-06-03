<?php 
include_once('header.php'); 
$query = "select * from doctor";
$result = mysqli_query($conn, $query);
$data = mysqli_num_rows($result);

?>
<!--=====================================================================-->
<!-- Start page Label Plugins 
=====================================================================-->
<!-- Toastr css -->
<link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
<!-- Emojionearea -->
<link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
<!-- Monthly css -->
<link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
<!-- End page Label Plugins 
=====================================================================-->
<!-- Start Theme Layout Style
=====================================================================-->
<!-- Theme style -->
<link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
<!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
<!-- End Theme Layout Style
=====================================================================-->
<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<?php 
								$query = "select * from doctor";
								$result = mysqli_query($conn, $query);
								$data = mysqli_num_rows($result);
								?>
								<h2><span class="count-number"><?php echo $data;?></span>
								</h2>
							</div>
							<div class="items pull-left">
								<i class="fa fa-users fa-2x"></i>
								<h4>Doctors </h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<?php 
								$query = "select * from patient";
								$result = mysqli_query($conn, $query);
								$data = mysqli_num_rows($result);
								?>
								<h2><span class="count-number"><?php echo $data;?></span>
								</h2>
							</div>
							<div class="items pull-left">
								<i class="fa fa-users fa-2x"></i>
								<h4>Patients</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<?php 
								$query = "select count(*) as app_cnt from appointment";
								$result = mysqli_query($conn, $query);
								$data = mysqli_fetch_assoc($result);
								?>
								<h2><span class="count-number"><?php echo $data['app_cnt'];?></span>
								</h2>
							</div>
							<div class="items pull-left">
								<i class="fa fa-user-circle fa-2x"></i>
								<h4>Total Appointment</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<?php 
								$query = "select * from department";
								$result = mysqli_query($conn, $query);
								$data = mysqli_num_rows($result);
								?>
								<h2><span class="count-number"><?php echo $data;?></span>
								</h2>
							</div>
							<div class="items pull-left">
								<i class="fa fa-users fa-2x"></i>
								<h4>Total Department</h4>
							</div>
						</div>
					</div>
				</div>
				<!--div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<h2><span class="count-number">6</span>
								</h2>
							</div>
							<div class="items pull-left">
								<i class="fa fa-user-circle fa-2x"></i>
								<h4> Pharmachist</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<h2><span class="count-number">3</span>
								</h2>
							</div>
							<div class="items pull-left">
							<i class="fa fa-users fa-2x"></i>
							<h4>Labratorist</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<h2><span class="count-number">4</span>
								</h2>
							</div>
							<div class="items pull-left">
							<i class="fa fa-users fa-2x"></i>
							<h4>Accountant</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<h2><span class="count-number">7</span>
								</h2>
							</div>
							<div class="items pull-left">
							<i class="fa fa-users fa-2x"></i>
							<h4>Receptionist</h4>
							</div>
						</div>
					</div>
				</div>
			</div-->
		<div class="row">
				<!-- datamap -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">  
					<div class="panel panel-bd lobidrag">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Line chart</h4>
							</div>
						</div>
						<div class="panel-body">
							<canvas id="lineChart" height="150"></canvas>
						</div>
					</div>
				</div>
				<!-- calender -->
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<div class="panel panel-bd lobidisable">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Calender</h4>
							</div>
						</div>
						<div class="panel-body">
							<!-- monthly calender -->
							<div class="monthly_calender">
								<div class="monthly" id="m_calendar"></div>
							</div>
						</div>
						 <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
					</div>
				</div>
				<!-- Bar Chart -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="panel panel-bd lobidisable">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Bar chart</h4>
							</div>
						</div>
						<div class="panel-body">
							<canvas id="barChart" height="200"></canvas>
						</div>
					</div>
				</div>
				 <!-- Radar Chart -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="panel panel-bd lobidisable">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Rader chart</h4>
							</div>
						</div>
						<div class="panel-body">
							<canvas id="radarChart" height="200"></canvas>
						</div>
					</div>
				</div>
				 <!-- Basic data map>
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-bd lobidrag">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Google Map</h4>
							</div>
						</div>
						<div class="panel-body">
							<div class="embed-container">
								<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.0075834208!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1394298866288' width='600' height='450' style='border:0'></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-bd lobidrag">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>DataTables </h4>
							</div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
											<th>Salary</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Tiger Nixon</td>
											<td>System Architect</td>
											<td>Edinburgh</td>
											<td>61</td>
											<td>2011/04/25</td>
											<td>$320,800</td>
										</tr>
										<tr>
											<td>Garrett Winters</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>63</td>
											<td>2011/07/25</td>
											<td>$170,750</td>
										</tr>
										<tr>
											<td>Ashton Cox</td>
											<td>Junior Technical Author</td>
											<td>San Francisco</td>
											<td>66</td>
											<td>2009/01/12</td>
											<td>$86,000</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				 </div-->
			</div> <!-- /.row -->
		</section> <!-- /.content -->
	<?php include_once('footer.php'); ?>

<!-- Start Page Lavel Plugins
=====================================================================-->
<!-- Toastr js -->
<script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
<!-- Sparkline js -->
<script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
<!-- Data maps js -->
<script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
<!-- Counter js -->
<script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<!-- ChartJs JavaScript -->
<script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
<script src="assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
<!-- Monthly js -->
<script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
<!-- Data maps -->
<script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>

<!-- End Page Lavel Plugins
=====================================================================-->
<!-- Start Theme label Script
=====================================================================-->
<!-- Dashboard js -->
<script src="assets/dist/js/custom.js" type="text/javascript"></script>

<!-- End Theme label Script
=====================================================================-->
<script>
                "use strict"; // Start of use strict
                // notification
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 1000
                    };
                    toastr.success('Responsive Admin', 'Welcome to Health Admin');

                }, 1300);

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //data maps
                var basic_choropleth = new Datamap({
                    element: document.getElementById("map1"),
                    projection: 'mercator',
                    fills: {
                        defaultFill: "red",
                        authorHasTraveledTo: "#fa0fa0"
                    },
                    data: {
                        USA: {fillKey: "authorHasTraveledTo"},
                        JPN: {fillKey: "authorHasTraveledTo"},
                        ITA: {fillKey: "authorHasTraveledTo"},
                        CRI: {fillKey: "authorHasTraveledTo"},
                        KOR: {fillKey: "authorHasTraveledTo"},
                        DEU: {fillKey: "authorHasTraveledTo"}
                    }
                });

                var colors = d3.scale.category10();

                window.setInterval(function () {
                    basic_choropleth.updateChoropleth({
                        USA: colors(Math.random() * 10),
                        RUS: colors(Math.random() * 100),
                        AUS: {fillKey: 'authorHasTraveledTo'},
                        BRA: colors(Math.random() * 50),
                        CAN: colors(Math.random() * 50),
                        ZAF: colors(Math.random() * 50),
                        IND: colors(Math.random() * 50)
                    });
                }, 2000);


function getBarChart()
{
	$.ajax({
		url: "ajax/ajax_dashboard.php", //for data insertion to database"
		type: "POST",
		data: { action : 'getBarChart' },
		success: function(result){
			//bar chart
			var ctx = document.getElementById("barChart");
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: result.month,//["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
					datasets: [
						{
							label: "Doctors",
							data: result.total,//[65, 59, 80, 81, 56, 55, 40, 25, 35, 51, 94, 16],
							borderColor: "red",
							borderWidth: "0",
							backgroundColor: "red"
						},
						{
							label: "Patients",
							data: result.patient,
							borderColor: "green",
							borderWidth: "0",
							backgroundColor: "green"
						},
						{
							label: "Appointments",
							data: result.appointment,
							borderColor: "red",
							borderWidth: "0",
							backgroundColor: "#000"
						}
					]
				},
				options: {
					scales: {
						yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
					}
				}					
			});
		}	
	});
}

function getLineChart()
{
//ajax call
$.ajax({
			url: "ajax/ajax_linechart.php", //for data insertion to database"
			type: "POST",
			data: {action:'getLineChart'},
			success: function(result){
				//alert(result);
				//line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "List Of Registered Doctotrs",
                                borderColor: "green",
                                borderWidth: "1",
                                backgroundColor: "green",
                                data:result.doctor// [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            },
                            {
                                label: "List Of registered Patinet",
                                borderColor: "red",
                                borderWidth: "1",
                                backgroundColor: "red",
                                pointHighlightStroke: "red",
                                data:result.patient //[16, 32, 18, 26, 42, 33]
                            },
							{
                                label: "List Of Appointment",
                                borderColor: "blue",
                                borderWidth: "1",
                                backgroundColor: "blue",
                                pointHighlightStroke: "blue",
                                data:result.appointment//[16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }
                    }
                });
			}	
		});
}

//radar chart
function getRadarChart()
{
//ajax call
$.ajax({
			url: "ajax/ajax_radarchart.php", //for data insertion to database"
			type: "POST",
			data: {action:'getRadarChart'},
			success: function(result){
				//alert(result);		
				//radar chart
                var ctx = document.getElementById("radarChart");
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: result.department,//[["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                        datasets: [
                            {
                                label: "List Of Departments",                               
                                borderColor: "red66",
                                borderWidth: "1",
                                backgroundColor: "blue",
								data: result.doctor//[65, 59, 66, 45, 56, 55, 40, 65, 59, 66]
                            }
                        ]
                    },
                    options: {
                        legend: {
                            position: 'top'
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    }
                });
				
			}	
		});
}


				
				
				

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
            
            
             




$(document).ready(function(){
	getBarChart();
})

$(document).ready(function(){
	getLineChart();
})

$(document).ready(function(){
	getRadarChart();
})

        </script>

    </body>
</html>