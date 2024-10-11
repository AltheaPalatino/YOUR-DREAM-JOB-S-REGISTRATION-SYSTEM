<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getQAById = getQAById($conn, $_GET['QA_Id']); ?>
	<form action="core/handleForms.php?QA_Id=<?php echo $_GET['QA_Id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getQAById['first_name']; ?></p>
			<p>Last Name: <?php echo $getQAById['last_name']; ?></p>
			<p>Gender: <?php echo $getQAById['gender']; ?></p>
			<p>Department: <?php echo $getQAById['Department']; ?></p>
			<p>Expertise Area: <?php echo $getQAById['Expertise_Area']; ?></p>
			<p>Contact Number: <?php echo $getQAById['Contact_Number']; ?></p>
			<p>Email: <?php echo $getQAById['Email']; ?></p>
			<input type="submit" name="deleteQABtn" value="Delete">
		</div>
	</form>
</body>
</html>