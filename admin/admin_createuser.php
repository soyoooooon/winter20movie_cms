<?php
    require_once '../load.php';
    confirm_logged_in();
    

    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(empty($fname) || empty($username) ||empty($password) || empty($email)) {
            $message = 'go away';

        }else{
            //ALL data pre processed and good to go
            $message = createUser($fname, $username, $password, $email);
        }

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
    <?php echo !empty($message)? $message:''; ?>
    <form action="admin_createuser.php" method="POST">
    <label>First Name</label>
    <input type ="text" name="fname" value=""><br>
    <label>User Name</label>
    <input type ="text" name="username" value=""><br>
    <label>Email</label>
    <input type ="text" name="email" value=""><br>
    <label>Password</label>
    <input type ="text" name="password" value=""><br>
    <button type="submit" name="submit">GO</button>
        </form>
    </body>
    </html>