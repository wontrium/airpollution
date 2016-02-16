<!DOCTYPE html>
<html>

<head>
	<title>ระบบประเมินมลภาวะทางอากาศ(Air pollution)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 
	<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css" />
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.mobile-1.3.0.min.js"></script>		
</head>

<body>
	
	<div data-role="page" id="page-home">			
		<div data-role="header" data-position="fixed">	
		<a data-role = "button" data-icon = "plus" href="alert.php"> การเเจ้งเตือนต่างๆ </a> 
			<h1>ระบบประเมินมลภาวะทางอากาศ(Air pollution)</h1>				
		</div>
		<div data-role="content">						
			<ul data-role="listview" data-inset="true">
			
&nbsp;ยินดีต้อนรับ : คุณ 
<?php
$username = $_GET["Name"];
echo $_GET["Name"]."<br>";
//echo $username;
//<a href="userpage.php?id=1">Book 1</a>
?>
			<form name="form1" method="post" action="userpage.php">
				<input type="hidden" name="test1" value=" <?php echo $_POST["Name"]; ?> ">
				<input type="submit" name="Submit" value="เริ่มทำเเบบประเมิน" data-icon = "arrow-r">
				<!--<a data-role = "button" data-icon = "gear" href="userpage.php?"> เริ่มทำเเบบประเมิน </a>-->
				<br>							
				<a data-role = "button" data-icon = "arrow-r" href="index.html"> การเเจ้งเตือนพื้นที่เสี่ยง</a>
				<br>							
				<a data-role = "button" data-icon = "arrow-r" href="graph.php"> กราฟวิเคราะห์ข้อมูล </a>
				<br>							
				<a data-role = "button" data-icon = "home" href="index.html"> ออกจากระบบ </a>
			</ul>
		</div>						
		<div data-role="footer" data-position="fixed">
			<h4>NECTEC</h4>		
			<div data-role= "navbar">
			<ul>
			<li> <a href="profile.php" data-icon = "arrow-r">ประวัติส่วนตัว </a></li>
			<li> <a href="setting.php" data-icon = "gear" >การตั้งค่า</a></li>
			<li> <a href="index.html" data-icon = "home" >กลับสู่หน้าหลัก </a></li>
			</ul>
		</div>
	</div>
	
</body>	
</html>
