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
		</div>
		<div data-role="content">						
		<ul data-role="listview" data-inset="true">
		<form action="phpSQLServerAddSave3.php" name="frmAdd" method="post">	
         &nbsp;เลขประจำตัวผู้ป่วย : 
          <input name="txtUsername" type="text" id="txtUsername">

         &nbsp;รหัสผ่าน : 
        <input name="txtPassword" type="password" id="txtPassword">

		&nbsp;ชื่อ-นามสกุล : 
        <input name="txtName" type="text" id="txtName">

		&nbsp;วัน/เดือน/ปี เกิด เป็น พ.ศ. เช่น  07/07/2537: 
        <input name="txtBirthDate" type="text" id="txtBirthDate">

		&nbsp;เบอร์โทรศัพท์: 
        <input name="txtTel1" type="text" id="txtTel1">

		&nbsp;เบอร์โทรศัพท์ 2:  
        <input name="txtTel2" type="text" id="txtTel2">

<!--<div data-role = "content" >
<div data-role = "controlgroup" data-type = "horizontal"  align="center">
		&nbsp;เบอร์โทรศัพท์: 
        <input name="txtBirthDate" type="text" id="txtPassword">
		&nbsp;เบอร์โทรศัพท์ 2:  
        <input name="txtBirthDate" type="text" id="txtPassword">
      </div>-->
     &nbsp;เพศ: 
   <div data-role = "content" >
   <form action = "#" method = "post" name = "jqmform" id="myformid">
   <fieldset data-role = "controlgroup">
   <legend>เพศ :</legend>
	<input type = "radio" name = "txtSex" id ="r1" value = "male"/>
	<label for="r1">ชาย</label>
	<input type = "radio" name = "txtSex" id ="r2" value = "female"/>
	<label for="r2">หญิง</label>
	</fieldset>
	</form>
	</div>
	<?php
ini_set('max_execution_time', 3000); 
$servername = 'WIN-BELL'; 
$databasename = 'master'; 
$user = ''; 
$pass = ''; 

//$objConnect = odbc_connect("master","","") or die("Error Connect to Database");
$connection ="DRIVER={SQL Server};Server=WIN-BELL;Database=Master;Trusted_Connection=True";
$conn = odbc_connect($connection,'','');
$strSQL = "SELECT * FROM disease";
$objExec = odbc_exec($conn, $strSQL) or die ("Error Execute [".$strSQL."]");
?>
โรคประจำตัว(ถ้ามี)
<select name ="select" id = "select-id" data-native-menu = "false">
<?php
while($objResult = odbc_fetch_array($objExec))
{
?>
	<option><?php echo $objResult["disease_name"];?></option>
<?php
}
?>
</select>

&nbsp;โรคประจำตัว (อื่นๆ):  
        <input name="txtOther" type="text" id="txtOther">
&nbsp;อาหารที่เเพ้ : 
        <input name="txtFood" type="text" id="txtFood">
  <br> 
		 
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
