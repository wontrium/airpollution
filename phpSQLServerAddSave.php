<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>ThaiCreate.Com PHP & SQL Server Tutorial</title>
</head>
<body>

	<div data-role="page" id="page-2">
		<div data-role="header"><h1>Save complete.</h1></div>
		<div data-role="content">
			Save complete.
			<form name="form1" method="post" action="frm2.php">
			<input type="hidden" name="Name" value=" <?php echo $_POST["txtUsername"]; ?> ">
			<input type="submit" name="Submit" value="Next Page.">
			<!--<a href="frm2.php" data-role="button" >Next Page.</a>	-->
			</form>	
		</div>
	</div>

</body>
</html>