<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>ThaiCreate.Com PHP & SQL Server Tutorial</title>
</head>
<body>

<?php
ini_set('max_execution_time', 3000); 
$servername = 'WIN-BELL'; 
$databasename = 'master'; 
$user = ''; 
$pass = ''; 

$connection ="DRIVER={SQL Server};Server=WIN-BELL;Database=Master;Trusted_Connection=True";
$conn = odbc_connect($connection,'','');
//$strSQL = "SELECT * FROM users";
//$objExec = odbc_exec($conn, $strSQL) or die ("Error Execute [".$strSQL."]");
$date = date("Y-m-d H:i:s");
//$objConnect = mssql_connect($connection,"","") or die("Error Connect to Database");
//$objDB = mssql_select_db("master");
$strSQL = "INSERT INTO feel ";
$strSQL .="(problem_eat,pain,others,created_by,created_when) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["select"]."' ";
$strSQL .=",'".$_POST["select2"]."' ";
$strSQL .=",'".$_POST["txtOthers"]."' ";
$strSQL .=",'".$_POST["test"]."' ";
$strSQL .=",'".$date."') ";
$objExec = odbc_exec($conn, $strSQL) or die ("Error Execute [".$strSQL."]");
//$objQuery = odbc_query($strSQL);

if($objExec)
{
	?>

	<div data-role="page" id="page-2">
		<div data-role="header"><h1>Save complete.</h1></div>
		<div data-role="content">
			Save complete.
			<form name="form1" method="post" action="frm4.php">
			<input type="hidden" name="test" value=" <?php echo $_POST["test"]; ?> ">
			<input type="submit" name="Submit" value="Next Page.">
			<!--<a href="frm2.php" data-role="button" >Next Page.</a>	-->
			</form>		
		</div>
	</div>
<?php
	//echo "Save Done.";
}
else
{
	?>
	<div data-role="page" id="page-3">
		<div data-role="header"><h1>Error Data</h1></div>
		<div data-role="content">
			Sorry , Plase check input information.
			<a href="userpage.php" data-role="button" data-rel="back">Close</a>	
		</div>
	</div>
	<?php
	//echo "Error Save [".$strSQL."]";
}
//mssql_close($objConnect);
?>
</body>
</html>