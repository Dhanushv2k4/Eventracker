<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .loginbox{
    margin-left: 700px;
    margin-top: 300px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    justify-content: center;
    align-items: center;
    background-color: lightblue;
    border-radius: 10px;
    width: fit-content;
    padding: 20px;
    font-size: 20px;
    height: 300px;
    width: 400px;
    
}
input{
    border-radius: 5px;
    height: 30px;
}
#submitbtn{
    background-color: lightgreen;
    padding: 5px;
    font-size: 15px;
   
}
</style>
<body>
    <form action="login_check.php" method="POST">

        
        <div class="loginbox">
            <h4>
                <?php
            error_reporting(0);
            session_start();
            session_destroy();  
            
            echo $_SESSION['loginMessage'];
            ?>
        </h4>
        
        <h3>Enter Your username and password</h3>
       
   <div>
       <label for="username">Username</label>
       <input type="text" name="username" id="">
   </div>
   <div>
       <label for="passoword">Password</label>
       <input type="password" name="password" id="">

   </div>
   <div>
      
       <input type="submit" value="submit" id="submitbtn">
   </div>


</div>
    </form>
</body>
</html>