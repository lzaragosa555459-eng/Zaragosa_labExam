
<?php
session_start();

if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

if (isset($_POST['add'])) {
    $student = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'course' => $_POST['course']
    ];

    $_SESSION['students'][] = $student;
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

<h2>List of Students:</h2>
<?php

foreach ($_SESSION['students'] as $index => $s) {
    echo $s['id'] . " | " .
         $s['name'] . " | " .
         $s['email'] . " | " .
         $s['course'] . " | " .
         "<a href='edit_student.php?index=$index'>Edit</a> | " .
         "<a href='home.php?delete=$index' onclick=\"return confirm('Delete this student?')\">Delete</a><br>";
}


if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['students'][$index])) {
        unset($_SESSION['students'][$index]);
        $_SESSION['students'] = array_values($_SESSION['students']);
    }
}
?>   
</body>
</html>