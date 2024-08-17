<?php
require_once "config.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $location = $_POST['location'];
    $designation = $_POST['designation'];
    $numPeople = $_POST['numPeople'];
    $numChildrenUnder5 = $_POST['numChildrenUnder5'];

    $paymentScreenshot = $_FILES['paymentScreenshot']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["paymentScreenshot"]["name"]);

    if (move_uploaded_file($_FILES["paymentScreenshot"]["tmp_name"], $target_file)) {

        $stmt = $conn->prepare("INSERT INTO registrations (name, year, branch, location, designation, numPeople, numChildrenUnder5, paymentScreenshot) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisssiis", $name, $year, $branch, $location, $designation, $numPeople, $numChildrenUnder5, $paymentScreenshot);

        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
s