<html>
<head>
<title>Asset Management System</title>
<meta name="viewport" content="width=500, initial-scale=0.2">
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
</head>
<body>
<center>
<div class="container" >
<h1>Discard Assets</h1>
  <form action="mail.php" method="post">
    <label for="id">Product ID</label>
    <input type="text" id="id" name="id" placeholder="Product ID" required>
	<br>
	<label for="name">Product name</label>
    <input type="text" id="name" name="name" placeholder="Product name" required >
	<br>
	<label for="brand">Brand</label>
    <input type="text" id="brand" name="brand" placeholder="Brand" >
	<br>
	<label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Quantity" required>
	<br>
	<label for="reason">Reason for Dicarding</label>
    <input type="text" id="reason" name="reason" placeholder="Reason for Discarding" required>
	<br>
    <label for="message">Category</label>
	<select>
            <option value="stationary">Stationary</option>
            <option value="electronics">Electronics</option>
            <option value="hardware">Hardware</option>
            <option value="cleaning assets">Cleaning Assets</option>
			<option value="other">Other</option>
    </select>
	<input type="submit" value="Send mail to Purchase Managers" style="background-color: #01a84f ; color:white; font-size:20px;"> 
	<br><a href="fdiscard.php">OR Discard Directly?</a>
  </form>
</div>

</center>
</body>
</html>
