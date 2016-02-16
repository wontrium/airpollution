<!DOCTYPE html>
<html>
<head>
	<title>Serve</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 

	<link rel="stylesheet" href="../css/jquery.ui-1.8.23.custom.css" />
	<link rel="stylesheet" href="../css/jquery.mobile-1.3.0.min.css" />	
		
	<script src="../js/jquery-1.8.2.min.js"></script>
	<script src="../js/jquery-ui-1.8.23.custom.min.js"></script>		
	<script src="../js/jquery.mobile-1.3.0.min.js"></script>
	
	<script src="js_serve/webapp.serve.view_category.js"></script>
	<script src="js_serve/webapp.serve.view_menu.js"></script>
	<script src="js_serve/webapp.serve.view_summary.js"></script>
	<script src="js_serve/webapp.serve.view_table_order_detail.js"></script>
		
	<script src="js_serve/webapp.serve.view_table.js"></script>
	
	
</head>
	
<body>
<form action="phpMySQLAddSave.php" name="frmAdd" method="post">
<label for="uname">Username :</label>
			<input type="text" name="username" id="uname" value=""
			data-theme="b"/>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="160"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="70"> <div align="center">Budget </div></th>
    <th width="70"> <div align="center">Used </div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="txtCustomerID" size="5"></div></td>
    <td><input type="text" name="txtName" size="20"></td>
    <td><input type="text" name="txtEmail" size="20"></td>
    <td><div align="center"><input type="text" name="txtCountryCode" size="2"></div></td>
    <td align="right"><input type="text" name="txtBudget" size="5"></td>
    <td align="right"><input type="text" name="txtUsed" size="5"></td>
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>