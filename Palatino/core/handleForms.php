<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewQABtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$department = trim($_POST['department']);
	$expertiseArea = trim($_POST['expertiseArea']);
	$contactNumber = isset($_POST['contactNumber']) ? trim($_POST['contactNumber']) : ''; 
	$email = trim($_POST['email']);
	
	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($department) && !empty($expertiseArea) && !empty($contactNumber) && !empty($email)) {
		$query = insertIntoQualityAssuranceRecords($conn, $firstName, $lastName, $gender, $department, $expertiseArea, $contactNumber, $email);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['editQABtn'])) {
	$QA_id = $_GET['QA_Id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$department = trim($_POST['department']);
	$expertiseArea = trim($_POST['expertiseArea']);
	$contactNumber = isset($_POST['contactNumber']) ? trim($_POST['contactNumber']) : ''; 
	$email = trim($_POST['email']);
	
	if (!empty($QA_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($department) && !empty($expertiseArea) && !empty($contactNumber) && !empty($email)) {
		$query = updateAQA($conn, $QA_id, $firstName, $lastName, $gender, $department, $expertiseArea, $contactNumber, $email);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Update failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['deleteQABtn'])) {
	$query = deleteAQA($conn, $_GET['QA_Id']);

	if ($query) {
		header("Location: ../index.php");
	} else {
		echo "Deletion failed";
	}
}

?>
