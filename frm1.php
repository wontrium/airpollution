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
</head>

<body>

	<div data-role="page" id="page-home">			
		<div data-role="header" data-position="fixed">
			<a href="welcome.php" > ย้อนกลับ  </a>	
			<a href="frm2.php"> ต่อไป </a>
			<h1>น้ำหนัก</h1>	
			<table  align = "center">
                      <!--เริ่มต้นแถวที่ 1 -->
                      <tr>
					  <td>หน้าที่ 1 จาก  </td>
                           <td><a href="frm2.php" data-ajax="false"style="text-align:center;"> 2 </a> </td>
                           <td><a href="frm3.php" data-ajax="false"style="text-align:center;"> 3 </a> </td>
						   <td><a href="frm4.php" data-ajax="false"style="text-align:center;"> 4 </a> </td>
                      </tr> 
		   
		   </table>
	<form action="phpSQLServerAddSave.php" name="frmAdd" method="post">

         &nbsp;น้ำหนักปัจจุบัน : 
		 <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 1 -->
                      <tr>
                             <td><input name="txtWeight" type="text" id="txtWeight" > </td>
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

		&nbsp;เมื่อ 1 เดือนที่ผ่านมา น้ำหนัก : 
        <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 3 -->
                      <tr>
                             <td><input name="txtOneWeight" type="text" id="txtOneWeight" > </td>
                             <td>กิโลกรัม</td>
                      </tr> 
		</table>

		&nbsp;เมื่อ 6 เดือนที่ผ่านมา น้ำหนัก : 
        <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 3 -->
                      <tr>
                             <td><input name="txtSixWeight" type="text" id="txtSixWeight" > </td>
                             <td>กิโลกรัม</td>
                      </tr> 
		</table>
		&nbsp;ในช่วง 2 สัปดาห์ที่ผ่านมา น้ำหนัก : 
<!--		 <div data-role = "content" >
   <form action = "#" method = "post" name = "jqmform" id="myformid">
   <fieldset data-role = "controlgroup" data-type="horizontal">
   <legend>เพศ :</legend>
	<input type = "radio" name = "weight" id ="r1" value = "ลดลง"/>
								<label for="r1">ลดลง</label> 
	<input type = "radio" name = "weight" id ="r2" value = "ไม่เปลี่ยนเเปลง"/>
									<label for="r2">ไม่เปลี่ยนเเปลง</label>
	<input type = "radio" name = "weight" id ="r3" value = "เพิ่มข้ึน"/>
									<label for="r3">เพิ่มข้ึน</label>
	</fieldset>
	</form>
	</div>-->
       <table align = "center" style="width: 100%"> 
                      <!--เริ่มต้นแถวที่ 4 -->
                      <tr>
                             <td><input type = "radio" name = "txtTwoWeek" id ="r1" value = "ลดลง"/>
								<label for="r1">ลดลง</label> </td>
                             <td><input type = "radio" name = "txtTwoWeek" id ="r2" value = "ไม่เปลี่ยนเเปลง"/>
									<label for="r2">ไม่เปลี่ยนเเปลง</label></td>
							 <td><input type = "radio" name = "txtTwoWeek" id ="r3" value = "เพิ่มข้ึน"/>
									<label for="r3">เพิ่มขึ้น</label></td>
                      </tr> 
		</table>
  <input type="submit" name="submit" value="submit">
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
