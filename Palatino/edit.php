<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Quality Assurance Record</title>
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
		  border: 1px solid black;
		}
	</style>
</head>
<body>
	<h2 style="color: darkred;">The QA ID is <?php echo $_GET['QA_Id'];?></h2>
	<?php $getQAById = getQAById($conn, $_GET['QA_Id']); ?>
	<form action="core/handleForms.php?QA_Id=<?php echo $_GET['QA_Id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getQAById['first_name']; ?>" required>
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getQAById['last_name']; ?>" required>
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getQAById['gender']; ?>" required>
		</p>
		<p>
			<label for="department">Department</label>
			<input type="text" name="department" value="<?php echo $getQAById['Department']; ?>" required>
		</p>
		<p>
			<label for="expertiseArea">Expertise Area</label>
			<input type="text" name="expertiseArea" value="<?php echo $getQAById['Expertise_Area']; ?>" required>
		</p>
		<p>
			<label for="contactNumber">Contact Number</label>
			<input type="text" name="contactNumber" value="<?php echo $getQAById['Contact_Number']; ?>" required>
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getQAById['Email']; ?>" required>
		</p>
		<p>
			<input type="submit" name="editQABtn" value="Submit">
		</p>
	</form>
</body>
</html>
