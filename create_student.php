
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <div class="section">
        <div class="container"> 
            <h1>Create Student Record</h1>
            <form method="post" action="home.php">
                ID Number:<input type="text" name="id" required>
                Name: <input type="text" name="name" required>
                Email: <input type="email" name="email" required>
                Course: <input type="text" name="course" required>
                <button type="submit" name="add">Add</button>
            </form>
            
        </div>
    </div>
   
</body>
</html>