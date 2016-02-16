<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?php 
 	require_once('conDBmint.php');
	$sql = "select * FROM [dbo.rattanawalee].v_report_deposit_all ";
	$resultms =  odbc_exec($conn,$sql);
	$graph[] = array('Task', 'Hours per Day');
		while($rs=odbc_fetch_array($resultms))
			{
	
	//echo $rs['group_name']. $rs['sample_count'].$rs['genus_count']. $rs['sp_count'];
	
	//$graph[] = $rs;
	 			$sample =  (int)$rs['sample_count'];
	 			if($rs['group_name'] != 'ALL'){
	
					$graph[] = array($rs['group_name'], $sample);
				
				}
			
			}
				$task = array('Task' => 'Hours per Day');
				$graph2=array_push($task,$graph); 
				//echo json_encode($graph);
 ?>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript">

	
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable(<?php echo json_encode($graph); ?>)

        var options = {
          title: 'จำนวนตัวอย่างทั้งหมด'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
  
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>