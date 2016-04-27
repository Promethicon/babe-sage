<?php
require_once "dbOperations.php";

//$reset resets the availability of all products to 0
$reset = "UPDATE products set availability = 0";
$result = $connection->query($reset);

$checked = $_POST['checkboxes'];
//retrieve the checkbox info from summary.php
foreach($checked as $arr)
{
	$available = "";
	
	if(($arr->checked) == true)
	{
		$available = "UPDATE products set availability = 1 WHERE name = $arr";
		$result2 = $connection->query($available);
	}
}
?>
