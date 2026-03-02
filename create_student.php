<?php

    if(isset($_POST['add'])){
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
    <title>Document</title>
</head>
<body>
    <style>
       
    </style>
    <div class="section">
        <div class="container"> 
            <h1>Create Student Record</h1>
            <form method="get">
                ID Number:<input type="text" name="id">
                Name: <input type="text" name="name">
                Email: <input type="email" name="email">
                Course: <input type="text" name="course">
                <button type="submit" name="add">add</button>
            </form>
            
        </div>
    </div>
   
</body>
</html>