<!DOCTYPE html>
<html>

<head>
	<title>ระบบประเมินภาวะทางโภชนาการ (PG-SGA)</title>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 
	<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css" />
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.mobile-1.3.0.min.js"></script>	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['NH4',      2],
          ['NH3',  2],
          ['CO2', 2],
          ['H',    7]
        ]);

        var options = {
          title: 'Gas Environment'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>

<body>

	<div data-role="page" id="page-home">			
		<div data-role="header" data-position="fixed">
			<a href="welcome.php" > ย้อนกลับ  </a>	
			
			<h1>กราฟ</h1>	
			 <div id="piechart" style="width: 100%; height:  100%;"></div>
				<br>					
						
			</ul>
		</div>						
		<div data-role="footer" data-position="fixed">
			<h4>ฟุตเตอร์</h4>
			<div data-role= "navbar">
			<ul>
			<li> <a href="profile.php" >ประวัติส่วนตัว </a></li>
			<li> <a href="index.html" >ออกจากระบบ </a></li>
			</ul>
		</div>
	</div>
	
</body>	
</html>
