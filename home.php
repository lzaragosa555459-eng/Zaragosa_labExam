
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
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    .container{
        margin-bottom: 10px;
        padding: 10px;
        width: 700px;
        padding-left: 20px;
    }
    
    
</style>
<body>
    <h1>Student Records</h1>
    <a href="create_student.php" class="a" style="
     display: inline-block;
    background-color: #78cf49; /* Blue */
    color: white;
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    margin: 2px;
    margin-left:47%;
    transition: background-color 0.3s;">Add Student+</a>


<div class="container">
    <?php

foreach ($_SESSION['students'] as $index => $s) {
    echo $s['id'] . " | " .
         $s['name'] . " | " .
         $s['email'] . " | " .
         $s['course'] . " | " .
         "<a href='edit_student.php?index=$index' style='
        display: inline-block;
        background-color: #008CBA; /* Blue */
        color: white;
        padding: 6px 12px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        margin: 2px;
        transition: background-color 0.3s;'>Edit</a> | " .
         "<a href='home.php?delete=$index' onclick=\"return confirm('Delete this student?')\" style='
        display: inline-block;
        background-color: #d44b47; /* Blue */
        color: white;
        padding: 6px 12px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        margin: 2px;
        transition: background-color 0.3s;'>Delete</a><br>";
}


if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['students'][$index])) {
        unset($_SESSION['students'][$index]);
        $_SESSION['students'] = array_values($_SESSION['students']);
    }
}
?> 
</div>
  
</body>
</html>