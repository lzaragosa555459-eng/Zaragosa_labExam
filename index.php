<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: white;
    }
    .container{
        padding: 100px;
        width: 450px;
        border: 1px solid;
    }
    input{
        width: 400px;
        height: 30px;
        border-radius: 8px;
        border: 1px solid;
    }
    button{
        margin-top: 10px;
    }
</style>
<body>
    <h1>Welcome to Student Managememt System</h1>
    <h3>Enter your credentials to login!</h3>
    <div class="container">
        <form action="home.php">
        Username: <br><input type="text" required>
        Password: <br><input type="password" required>
        <button type="submit">Login</button>
    </form>
    </div>
    
   
</body>
</html>