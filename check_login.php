<?php
//ini_set('max_execution_time', 3000); 
//session_start();
//$servername = 'WIN-BELL'; 
//$databasename = 'master'; 
//$user = ''; 
//$pass = ''; 

//$connection ="DRIVER={SQL Server};Server=WIN-BELL;Database=Master;Trusted_Connection=True";
//$conn = odbc_connect($connection,'','');
//$strSQL = "SELECT * FROM users";
//$objExec = odbc_exec($conn, $strSQL) or die ("Error Execute [".$strSQL."]");

//$objConnect = mssql_connect($connection,"","") or die("Error Connect to Database");
//$objDB = mssql_select_db("master");
//session_start();
//mysql_connect("localhost","root","root");
//mysql_select_db("mydatabase");
//$strSQL = "SELECT * FROM users WHERE username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
//and password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
//$objExec = odbc_exec($conn, $strSQL) or die ("Error Execute [".$strSQL."]");
//$objQuery = mysql_query($strSQL);
//$objResult = odbc_fetch_array($objExec);
//$_POST['txtUsername'] 

	if($_POST['txtUsername'] !="a" && $_POST['txtPassword']!="a")
	{
?>
	    <div data-role="page" id="page-2">
		<div data-role="header"><h1>Error for Login</h1></div>
		<div data-role="content">
			Incorrect Username and password, please check.
			<a href="index.html" data-role="button" data-rel="back">Close</a>	
		</div>
	</div>

<?php
	}
	else
	{
		$username = $_POST['txtUsername'];
		header("location:welcome.php?Name=$username");
	//		$_SESSION["id_users"] = $objResult["id_users"];
	//		$_SESSION["permission_fk"] = $objResult["permission_fk"];

//			session_write_close();
			
			//if($objResult["permission_fk"] == "1")
			//{
	//			$username = $_POST['txtUsername'];
//				header("location:admin2.php?Name=$username");
//}
//			else
//			{
//				$username = $_POST['txtUsername'];
//				header("location:welcome.php?Name=$username");
		//	}
	}
//	mysql_close();
?>
