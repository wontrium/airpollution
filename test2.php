<?php
	$birthday = "1982-06-10";      //�ٻẺ����纤�Ң������ѹ�Դ
	$today = date("Y-m-d");   //�ش��ͧ����¹
		

	list($byear, $bmonth, $bday)= explode("-",$birthday);       //�ش��ͧ����¹
	list($tyear, $tmonth, $tday)= explode("-",$today);                //�ش��ͧ����¹
		
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