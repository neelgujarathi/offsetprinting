
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Website Information</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		
		<div class="clearfix"></div>
		<br>
<center>
                        <center><table id="mytable" class="tbl">
						<style>
                        .tbl { border-collapse: collapse; width:300px; }
                        .tbl th, .tbl td { padding: 10px; border: solid 1px #777;}
                        .tbl th { background-color: purple; color: #fff;}
                        .tbl-separate { border-collapse: separate; border-spacing: 5px;}
</style>
<script>
  let toggle = () => {
     let element = document.getElementById("mytable");
     element.classList.toggle("tbl-separate");
  }
</script>
<?php
					include "configure.php";
					$add  = mysqli_query($conn, "select * from registrationform") or die(mysqli_error($conn));
					?>
					<thead>
						<tr>
							<center><h2> <strong><u><i>Customer's Registration Information:-</i></u></strong> </h2></center><br>
						    <th>Sr. No.</th>
                            <th>Name</th>
							<th>Contect</th>
							<th>Email</th>
							<th>Address</th>
							<th>City</th>
							<th>DOB</th>
							<th>Username</th>
							<th>Password</th>
							<th>Gender</th>
							<th>Language</th>
							<th>Terms and Conditions</th>
                            <th>Update</th>
                            <th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$counter = 0;
						while ($row = mysqli_fetch_array($add)) 
						{
							extract($row);
						?>
							<tr>
								<td scope="row"><?php echo ++$counter; ?></td>
                                <td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Contact']; ?></td>
								<td><?php echo $row['Email']; ?></td>
								<td><?php echo $row['Address']; ?></td>
								<td><?php echo $row['City']; ?></td>
								<td><?php echo $row['DOB']; ?></td>
								<td><?php echo $row['Username']; ?></td>
								<td><?php echo $row['Password']; ?></td>
								<td><?php echo $row['Gender']; ?></td>
								<td><?php echo $row['Language']; ?></td>
								<td><?php echo $row['Conditions']; ?></td>
                
								<td><a href="updateregistraction.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> update</a>
								<td><a href="deleteregistraction.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
            </table><br><button onclick="toggle();">Toggle class</button></center>
			<br><br><br><br>


			<table id="mytable" class="tbl">
              <?php
					include "configure.php";
					$add  = mysqli_query($conn, "select * from productorderform") or die(mysqli_error($conn));
					?>
					<thead>
						<tr>
						<center> <h2> <strong><u><i>Customer's Order Information:-</i></u></strong> </h2></center><br>
						    <th>Sr. No.</th>
                            <th>Name</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Address</th>
							<th>Item Name</th>
							<th>Design Id</th>
							<th>Item Quantity</th>
							<th>Paper GSM</th>
							<th>Item Size</th>
							<th>Item Type</th>
							<th>Printing Side</th>
							<th>Limination</th>
							<th>Item Matter</th>
							<th>Total Bill Amount</th>
                            <th>Update</th>
                            <th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$counter = 0;
						while ($row = mysqli_fetch_array($add)) 
						{
							extract($row);
						?>
							<tr>
								<td scope="row"><?php echo ++$counter; ?></td>
                                <td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Contact']; ?></td>
								<td><?php echo $row['Email']; ?></td>
								<td><?php echo $row['Address']; ?></td>
								<td><?php echo $row['ItemName']; ?></td>
								<td><?php echo $row['DesignId']; ?></td>
								<td><?php echo $row['ItemQuantity']; ?></td>
								<td><?php echo $row['ProductSize']; ?></td>
								<td><?php echo $row['PaperGSM']; ?></td>
								<td><?php echo $row['ProductType']; ?></td>
								<td><?php echo $row['PrintingSide']; ?></td>
								<td><?php echo $row['Limination']; ?></td>
								<td>
									<img src="<?php echo $row['ProductMatter'];?>" height="100px" width="100px" alt="Image">
								</td>
								<td><?php echo $row['TotalBill']; ?></td>
								<td><a href="updateorder.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> update</a>
								<td><a href="deleteorder.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> Delete</a>
								</td>
							</tr>
						<?php } ?>

					</tbody>
            </table>
			<br><br><br><br>

			<table id="mytable" class="tbl">
                    <?php
					include "configure.php";
					$add  = mysqli_query($conn, "select * from customizedesign") or die(mysqli_error($conn));
					?>
					<thead>
						<tr><center> <h2> <strong><u><i>Customer's Customize Design Information:-</i></u></strong> </h2></center><br>
						    <th>Sr. No.</th>
                            <th>Name</th>
							<th>Email</th>
							<th>Address</th>
							<th>Item Name</th>
							<th>Item Quantity</th>
							<th>Item Size</th>
							<th>Item Type</th>
							<th>Limination</th>
							<th>Printing Side</th>
							<th>Paper GSM</th>
							<th>Design Photo</th>
							<th>Item Matter</th>
							<th>Comment</th>
							<th>Total Bill</th>
                            <th>Update</th>
                            <th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$counter = 0;
						while ($row = mysqli_fetch_array($add)) 
						{
							extract($row);
						?>
							<tr>
								<td scope="row"><?php echo ++$counter; ?></td>
                                <td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Email']; ?></td>
								<td><?php echo $row['Address']; ?></td>
								<td><?php echo $row['ItemName']; ?></td>
								<td><?php echo $row['Quantity']; ?></td>
								<td><?php echo $row['ItemSize']; ?></td>
								<td><?php echo $row['ItemType']; ?></td>
								<td><?php echo $row['Limination']; ?></td>
								<td><?php echo $row['PrintingSide']; ?></td>
								<td><?php echo $row['PaperGSM']; ?></td>
								<td>
									<img src="<?php echo $row['Design'];?>" height="100px" width="100px" alt="Image">
								</td>
								<td>
									<img src="<?php echo $row['Matter'];?>" height="100px" width="100px" alt="Photo">
								</td>
								<td><?php echo $row['Comment']; ?></td>
								<td><?php echo $row['Cost']; ?></td>
                
								<td><a href="updatecustomize.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> update</a>
								<td><a href="deletecustomize.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> Delete</a>
								</td>
							</tr>
						<?php } ?>

					</tbody>
            </table>
			<br><br><br><br>

			<center><table id="mytable" class="tbl">
              <?php
					include "configure.php";
					$add  = mysqli_query($conn, "select * from offlinepayment") or die(mysqli_error($conn));
					?>
					<thead>
						<tr><center> <h2> <strong><u><i>Customer's Offline Payment Information:-</i></u></strong> </h2></center><br>
						    <th>Sr. No.</th>
                            <th>Name</th>
							<th>Contact</th>
							<th>City</th>
							<th>Product Name</th>
							<th>Product Quantity</th>
							<th>Order Id</th>
							<th>Order Date</th>
                            <th>Update</th>
                            <th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$counter = 0;
						while ($row = mysqli_fetch_array($add)) 
						{
							extract($row);
						?>
							<tr>
								<td scope="row"><?php echo ++$counter; ?></td>
                                <td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Contact']; ?></td>
								<td><?php echo $row['City']; ?></td>
								<td><?php echo $row['ProductName']; ?></td>
								<td><?php echo $row['ProductQuantity']; ?></td>
								<td><?php echo $row['OrderId']; ?></td>
								<td><?php echo $row['OrderDate']; ?></td>
								<td><a href="updateoffline.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> update</a>
								<td><a href="deleteoffline.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> Delete</a>
								</td>
							</tr>
						<?php } ?>

					</tbody>
            </table></center>
			<br><br><br><br>


			<center><table id="mytable" class="tbl">
 
                    <?php
					include "configure.php";
					$add  = mysqli_query($conn, "select * from onlinepayment") or die(mysqli_error($conn));
					?>
					<thead>
						<tr><center> <h2> <strong><u><i>Customer's Online Payment Information:-</i></u></strong> </h2></center><br>
						    <th>Sr. No.</th>
                            <th>Name</th>
							<th>Contact</th>
							<th>City</th>
							<th>Product Name</th>
							<th>Product Quantity</th>
							<th>Order Id</th>
							<th>Payment Mode</th>
                            <th>Update</th>
                            <th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$counter = 0;
						while ($row = mysqli_fetch_array($add)) 
						{
							extract($row);
						?>
							<tr>
								<td scope="row"><?php echo ++$counter; ?></td>
                                <td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Contact']; ?></td>
								<td><?php echo $row['City']; ?></td>
								<td><?php echo $row['ProductName']; ?></td>
								<td><?php echo $row['ProductQuantity']; ?></td>
								<td><?php echo $row['OrderId']; ?></td>
								<td><?php echo $row['PaymentMode']; ?></td>
								<td><a href="updateonline.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> update</a>
								<td><a href="deleteoffline.php?id=<?php echo $id ?>" class="btn btn-blue  waves-effect"> Delete</a>
								</td>
							</tr>
						<?php } ?>

					</tbody>
            </table><br><br>
		
		
		
			<center><table id="mytable" class="tbl">
 
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
				<script src="js/amcharts.js"></script>
		       <script src="js/serial.js"></script>
				<script src="js/export.js"></script>	
				<script src="js/light.js"></script>
				<!-- Chart code -->
	 <script>
var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": [{
        "country": "USA",
        "visits": 4025,
        "color": "#FF0F00"
    }, {
        "country": "China",
        "visits": 1882,
        "color": "#FF6600"
    }, {
        "country": "Japan",
        "visits": 1809,
        "color": "#FF9E01"
    }, {
        "country": "Germany",
        "visits": 1322,
        "color": "#FCD202"
    }, {
        "country": "UK",
        "visits": 1122,
        "color": "#F8FF01"
    }, {
        "country": "France",
        "visits": 1114,
        "color": "#B0DE09"
    }, {
        "country": "India",
        "visits": 984,
        "color": "#04D215"
    }, {
        "country": "Spain",
        "visits": 711,
        "color": "#0D8ECF"
    }, {
        "country": "Netherlands",
        "visits": 665,
        "color": "#0D52D1"
    }, {
        "country": "Russia",
        "visits": 580,
        "color": "#2A0CD0"
    }, {
        "country": "South Korea",
        "visits": 443,
        "color": "#8A0CCF"
    }, {
        "country": "Canada",
        "visits": 441,
        "color": "#CD0D74"
    }, {
        "country": "Brazil",
        "visits": 395,
        "color": "#754DEB"
    }, {
        "country": "Italy",
        "visits": 386,
        "color": "#DDDDDD"
    }, {
        "country": "Taiwan",
        "visits": 338,
        "color": "#333333"
    }],
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.85,
        "lineAlpha": 0.1,
        "type": "column",
        "topRadius":1,
        "valueField": "visits"
    }],
    "depth3D": 40,
	"angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0

    },
    "export": {
    	"enabled": true
     }

}, 0);
</script>
<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv1", {
    "type": "serial",
	"theme": "light",
    "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
    "dataProvider": [{
        "year": 2017,
        "europe": 2.5,
        "namerica": 2.5,
        "asia": 2.1,
        "lamerica": 0.3,
        "meast": 0.2,
        "africa": 0.1
    }, {
        "year": 2016,
        "europe": 2.6,
        "namerica": 2.7,
        "asia": 2.2,
        "lamerica": 0.3,
        "meast": 0.3,
        "africa": 0.1
    }, {
        "year": 2015,
        "europe": 2.8,
        "namerica": 2.9,
        "asia": 2.4,
        "lamerica": 0.3,
        "meast": 0.3,
        "africa": 0.1
    }],
    "valueAxes": [{
        "stackType": "regular",
        "axisAlpha": 0.5,
        "gridAlpha": 0
    }],
    "graphs": [{
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Europe",
        "type": "column",
		"color": "#000000",
        "valueField": "europe"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "North America",
        "type": "column",
		"color": "#000000",
        "valueField": "namerica"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Asia-Pacific",
        "type": "column",
		"color": "#000000",
        "valueField": "asia"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Latin America",
        "type": "column",
		"color": "#000000",
        "valueField": "lamerica"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Middle-East",
        "type": "column",
		"color": "#000000",
        "valueField": "meast"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Africa",
        "type": "column",
		"color": "#000000",
        "valueField": "africa"
    }],
    "rotate": true,
    "categoryField": "year",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "position": "left"
    },
    "export": {
    	"enabled": true
     }
});
</script>

	<!-- //amcharts -->
		<script src="js/chart1.js"></script>
				<script src="js/Chart.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<!-- /circle-->
	 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#fff"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
<!--//skycons-icons-->
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<script src="js/flipclock.js"></script>
	
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>