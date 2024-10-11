<?php  

if (isset($_GET['qualityassuranceName'])) {
	echo "<h2>QA Name: " . $_GET['qualityassuranceName']. "</h2>";
}

if (isset($_GET['department'])) {
	echo "<h2>Department: " . $_GET['department'] . "</h2>";
}
?>