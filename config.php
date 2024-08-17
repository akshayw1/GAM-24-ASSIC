<?php
$conn=mysqli_connect("localhost","root","");

if ($conn == false)
    die('Error: Cannot connect');
$query="use alumni_event";
$execute=mysqli_query($conn,$query);
if (!$execute) {
    die("Error: Cannot select database. " . mysqli_error($conn));
}
// else echo "yes";