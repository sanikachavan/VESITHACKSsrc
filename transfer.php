<!DOCTYPE html>
<html>
	<head>
		<title>Asset Management System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<style>
		<style>
body {font-family: Comic Sans MS, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select {
    width: 100%;
    padding: 12px;
    border: 1px solid #01a84f;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #01a84f;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
	margin-top:20px;
	height:auto;
	width:50%;
    border-radius: 5px;
    background-color:white;
    padding: 20px;
	border: 1px solid #01a84f;
}
label {
	font-size:20px;
	float:left;
}
		</style>
	<?php
	error_reporting(0);
	$host = "localhost";
	$user = "user123";
	$password="pass";
	$databaseName = "asset_management";
	$db = mysqli_connect($host,$user,$password,$databaseName);
	?>
	</head>
	<body>
	<center>
		<div class="container" >
		<center><h1>Current transfer queries and their status</h1></center>
		<div>
			<form  action="transfer_form.php" style="margin-left:20px;margin-top:14px;" class="container">
				
		<?php
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$q="SELECT * FROM transfer ";
$r=mysqli_query($db,$q);
$list1=mysqli_fetch_assoc($r);
if($list1!=""){
echo "<div id='table'><center><table border=1>
  <tr>
    <th>Query no.</th>
	<th>Department</th>
    <th>Product Name</th> 
    <th>Quantity</th>
	<th>Status</th>
	<tr>
</tr></center>";	}
else{
	echo "<center>NO QUERIES</center>";
}
while($list1!=""){
echo "<tr>";
echo "<td>" . $list['query_no'] . "</td>";
echo "<td>" . $list['department'] . "</td>";
echo "<td>" . $list['name'] . "</td>";
echo "<td>" . $list['quantity'] . "</td>";
echo "<td>" . $list['status'] . "</td>";
echo "</tr>";
}
echo "</table><br>";
$db->close();
?>
<input type="submit" value="Add new Query" style="background-color: #01a84f ; color:white; font-size:20px;"> 
</form>
		</div>
		</center>
	</body>
</html>