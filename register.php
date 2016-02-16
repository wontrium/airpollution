<!DOCTYPE html>
<html>

<head>
	<title>ระบบประเมินมลภาวะทางอากาศ(Air pollution)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 
	<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css" />
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.mobile-1.3.0.min.js"></script>	
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
	
	<div data-role="page" id="page-home">			
		<div data-role="header" data-position="fixed">
		<a href="index.html" data-icon = "back"> ย้อนกลับ  </a>	
			<h1>ระบบประเมินมลภาวะทางอากาศ(Air pollution)</h1>				
		</div>
		<div data-role="content">						
			<ul data-role="listview" data-inset="true">
		
		<form action="phpSQLServerAddSave3.php" name="frmAdd" method="post">
         &nbsp;ชื่อผู้ใช้สำหรับเข้าสู่ระบบ : 
          <input name="txtUsername" type="text" id="txtUsername">

         &nbsp;รหัสผ่าน : 
        <input name="txtPassword" type="password" id="txtPassword">

		&nbsp;ชื่อ-นามสกุล : 
        <input name="txtName" type="text" id="txtName">

		&nbsp;เบอร์โทรศัพท์: 
        <input name="txtTel1" type="text" id="txtTel1">

<!--<div data-role = "content" >
<div data-role = "controlgroup" data-type = "horizontal"  align="center">
		&nbsp;เบอร์โทรศัพท์: 
        <input name="txtBirthDate" type="text" id="txtPassword">
		&nbsp;เบอร์โทรศัพท์ 2:  
        <input name="txtBirthDate" type="text" id="txtPassword">
      </div>-->
     &nbsp;เพศ: 
   <table align = "center" style="width: 100%"> 
                      <!--เริ่มต้นแถวที่ 4 -->
                      <tr>
                             <td><input type = "radio" name = "txtSex" id ="r1" value = "MALE"/>
								<label for="r1">ชาย</label> </td>
                             <td><input type = "radio" name = "txtSex" id ="r2" value = "FEMALE"/>
									<label for="r2">หญิง</label></td>
                      </tr> 
		</table>

&nbsp;โรคประจำตัว(ถ้ามี) :  
        <input name="txtOther" type="text" id="txtOther">

  <br>
  <input type="submit" name="Submit" value="บันทึกเเละเข้าสู่ระบบ">
</form>

				<br>					
						
			</ul>
		</div>						
		<div data-role="footer" data-position="fixed">
			<h4>NECTEC</h4>		
		</div>
	</div>
	
</body>	
</html>
