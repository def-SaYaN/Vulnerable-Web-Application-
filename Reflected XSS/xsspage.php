<html>
<head>
		<link rel="stylesheet" type="text/css" href="stylexss.css">
</head>
<div class="output">
<?php
if(isset($_GET['submit'])){
	$name = $_GET['username'];
	$selected_radio =$_GET['security'];
	 
	if($selected_radio== "Low"){
		echo "Hello " .$name;
	}
	if($selected_radio == "High"){
		echo "Hello " .htmlspecialchars($name);
		
	}
}

?>
</div>

</html>