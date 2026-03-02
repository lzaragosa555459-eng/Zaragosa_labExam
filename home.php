<?php
include "../";
if (isset($_POST['save'])) {
       $id = $_POST['id'];
       $name = $_POST['name'];
       $email = $_POST['email'];
       $course = $_POST['course'];

       echo "$id, $name, $email $course";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Student Records</h1>
    <a href="create_student.php">Add Student+</a>

</body>
</html>