<?php
    $username = $password = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIMT-18408-ASSIGNMENT12 </title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
        <form name="Student login form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
            <h1 style="text-align: center;">Student Login In</h1>
            <div class="field-column">
                <label>User Name:</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" style="margin-left: 25px;">
            </div> 
            <div class="field-column">
                <label>Password:</label>
                    <input type="password" name="password" value=""<?php echo $password; ?>" style="margin-left: 40px;">
            </div>
            <input type="submit" name="submit value" value="Log In"  size="10">
        <p>Username is <span class="highlight"><?php echo $username; ?></span>
            and password is <span class="highlight"> <?php echo $password;?></span>
</P>      
        </form> 

</body>
</html>