<!-- <?php 
session_start();
if (!isset($_SESSION["username"]) ){
    header("location:login.php");
}



?> -->
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylea.css">
</head>
<body>
    <nav class="navbar">
        <div class="left">
            <span>Eventracker</span>
            <span class="lower">from NHCE</span>
        </div>
        <div>
        <a href="logout.php">LOGOUT</a>
        </div>
    </nav>

       <div class="heading"> <h1>Admin Panel</h1></div>
       <div class="container">
            <a href="form.html">
            <div class="card">
                <img src="people gathering in a big hall.jpg" alt="" width="400px">
                <span>Host an event</span>
            </div>
            </a>
            <div class="card">
                <img src="a seminar speaker in a bright hall full of people.jpg" alt=""  width="400px">
                <span>Host a seminar</span>
                
            </div>
            <div class="card">
                <img src="A photo of a group of people sitting at a table in.jpg" alt=""  width="400px">
                <span>Create a new club</span>
                
            </div>             
       
       </div>

    <footer>
        copyrights &copy; | All rights reserved
    </footer>
</body>
</html>