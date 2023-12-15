<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['username'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
$conn->query($sql);


}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
          .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: <link>#333</link>; 
            padding: 20px; 
        }
        form {
            text-align: center;
            padding: 20px;
            border: 1px solid <link>#ccc</link>;
            border-radius: 8px;
            background-color: <link>#fff</link>; 
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid <link>#ccc</link>;
            border-radius: 5px;
        }
   
      
   </style>
  
    <title>Document</title>
</head>


<body>
<div class="form-container">
    <form action="https://youtube.com/shorts/HPFo_-4-q3M?si=gbM1d1aaMA0upjsa" method="get">
      <h2>  username: <input type="text" id="username" name="username" value=""><h2><br>
      <h2>  password: <input type="password" id="password" name="password" value=""><h2><br>
       <input type="submit" value="login">
    </form>
</div>
</body>
</html>