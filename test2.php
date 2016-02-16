<?php
	$birthday = "1982-06-10";      //รูปแบบการเก็บค่าข้อมูลวันเกิด
	$today = date("Y-m-d");   //จุดต้องเปลี่ยน
		

	list($byear, $bmonth, $bday)= explode("-",$birthday);       //จุดต้องเปลี่ยน
	list($tyear, $tmonth, $tday)= explode("-",$today);                //จุดต้องเปลี่ยน
		
	$mbirthday = mktime(0, 0, 0, $bmonth, $bday, $byear); 
	$mnow = mktime(0, 0, 0, $tmonth, $tday, $tyear );
	$mage = ($mnow - $mbirthday);
	
	
 
	echo "birthdate $birthday"."<br>\n";
 
	echo "Date $today"."<br>\n";
	
	echo "Input $mage"."<br>\n";

$u_y=date("Y", $mage)-1970;
$u_m=date("m",$mage)-1;
$u_d=date("d",$mage)-1;

echo"<br><br>$u_y   year    $u_m month      $u_d  Day<br><br>";
?>