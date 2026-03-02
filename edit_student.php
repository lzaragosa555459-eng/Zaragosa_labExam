<?php
session_start();


if (!isset($_GET['index'])) {
    header("Location: home.php");
    exit;
}
$index = $_GET['index'];


if (!isset($_SESSION['students'][$index])) {
    header("Location: home.php");
    exit;
}


$student = $_SESSION['students'][$index];


if (isset($_POST['add'])) { 
    $_SESSION['students'][$index] = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'course' => $_POST['course']
    ];
    header("Location: home.php"); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
     <div class="section">
        <div class="container"> 
            <h1>Edit Student Record</h1>
            <form method="post">
                ID Number: <input type="text" name="id" value="<?= $student['id'] ?>"><br>
                Name: <input type="text" name="name" value="<?= $student['name'] ?>"><br>
                Email: <input type="email" name="email" value="<?= $student['email'] ?>"><br>
                Course: <input type="text" name="course" value="<?= $student['course'] ?>"><br>
                <button type="submit" name="add">Save</button>
            </form>
            
        </div>
    </div>
</body>
</html>