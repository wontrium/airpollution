<!DOCTYPE html>
<html>

<head>
	<title>ระบบประเมินภาวะทางโภชนาการ (PG-SGA)</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
		<a href="frm2.php"> หน้าถัดไป </a>
			<h1>ประวัติสุขภาพ</h1>	
			<table  align = "center">
                      <!--เริ่มต้นแถวที่ 1 -->
                      <tr>
					  <td>หน้าที่ 1 จาก  </td>
                           <td><a href="frm2.php" data-ajax="false"style="text-align:center;"> 2 </a> </td>
                      </tr> 
		   
		   </table>				
		</div>
		<div data-role="content">						
		<ul data-role="listview" data-inset="true">
		<form action="phpSQLServerAddSave.php" name="frmAdd" method="post">	
        

		  &nbsp;น้ำหนัก : 
        <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 2 -->
                      <tr>
                             <td><input name="txtHeight" type="text" id="txtHeight" > </td>
                             <td>กิโลกรัม</td>
                      </tr> 
		</table>

         &nbsp;ส่วนสูง : 
        <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 2 -->
                      <tr>
                             <td><input name="txtHeight" type="text" id="txtHeight" > </td>
                             <td>เซนติเมตร</td>
                      </tr> 
		</table>

		&nbsp;เมื่อ 1 เดือนที่ผ่านมา มีน้ำหนักเท่าไร : 
        <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 3 -->
                      <tr>
                             <td><input name="txtOneWeight" type="text" id="txtOneWeight" > </td>
                             <td>กิโลกรัม</td>
                      </tr> 
		</table>
		<div data-role="content">
			<label for="select-id2">อาการปวด</label>
			<select name="select2" id="select-id2" data-native-menu="false" multiple="multiple" align = "center" style="width: 100%">
				<optgroup label="ต่ำเเหน่งของร่างกาย">
					<option>เลือกอาการปวด</option>
					<option value="head">หัว</option>
					<option value="neck">คอ</option>
					<option value="elbow">ไหล่</option>
					<option value="arm">เเขน</option>
					<option value="back">หลัง</option>
					<option value="waist">เอว</option>
					<option value="leg">ขา</option>
					<option value="hip">สะโพก</option>
				</optgroup>
					
				
			</select>		
		</div>	
		 &nbsp;วิ่งออกกำลังกายได้ระยะทางเท่าไร : 
		 <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 1 -->
                      <tr>
                             <td><input name="txtWeight" type="text" id="txtWeight" > </td>
                             <td>กิโลเมตร</td>
                      </tr> 
		</table>

		&nbsp;ในช่วง 2 สัปดาห์ที่ผ่านมา ร่างกายมีการเปลี่ยนเเปลงในทางไหน : 
		 <div data-role = "content" >
   <form action = "#" method = "post" name = "jqmform" id="myformid">
   <fieldset data-role = "controlgroup" data-type="horizontal" align = "center" style="width: 100%">
 
	<input type = "radio" name = "weight" id ="r1" value = "ลดลง"/>
								<label for="r1">ดีขึ้น</label> <br>
	<input type = "radio" name = "weight" id ="r2" value = "ไม่เปลี่ยนเเปลง"/>
									<label for="r2">ไม่เปลี่ยนเเปลง</label><br>
	<input type = "radio" name = "weight" id ="r3" value = "เพิ่มข้ึน"/>
									<label for="r3">เเย่ลง</label>
	</fieldset>
	</form>
	</div>
      
  <br>
  
<input type="hidden" name="test" value=" <?php echo $_POST["test1"]; ?> ">
  <input type="submit" name="Submit" value="บันทึก">
</form>
				<br>					
						
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
