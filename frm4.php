<!DOCTYPE html>
<html>

<head>
	<title>ระบบประเมินภาวะทางโภชนาการ (PG-SGA)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 
	<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css" />
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.mobile-1.3.0.min.js"></script>		
</head>

<body>
	
	<div data-role="page" id="page-home">			
		<div data-role="header" data-position="fixed">
			<a href="frm3.php"> ย้อนกลับ  </a>	
			<h1>กิจกกรมเเละการทำงานต่างๆ</h1>	
			<table  align = "center">
                      <!--เริ่มต้นแถวที่ 1 -->
                      <tr>
					 <td> หน้าที่ 4 จาก  </td>
					  <td><a href="userpage.php" data-ajax="false"style="text-align:center;"> 1 </td>
                           <td><a href="frm2.php" data-ajax="false"style="text-align:center;"> 2 </a></td>
                           <td><a href="frm3.php" data-ajax="false"style="text-align:center;"> 3 </a></td>
						   <td> 4 </td>
                      </tr> 
		   
		   </table>
					
		</div>
		<div data-role="content">						
		<ul data-role="listview" data-inset="true">
<form action="phpSQLServerAddSave5.php" name="frmAdd" method="post">
         &nbsp;ในช่วง 1 เดือนที่ผ่านมา คุณสามารถทำกิจกรรมได้ระดับใด
	<select name ="select" id = "select-id" data-native-menu = "false">
	<option value="Nothing">ปกติไม่มีข้อจำกัดใดๆ</option>
</select>

	

  <br>
  <input type="hidden" name="test" value=" <?php echo $_POST["test"]; ?> ">
  <input type="submit" name="Submit" value="บันทึก">
</form>
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
