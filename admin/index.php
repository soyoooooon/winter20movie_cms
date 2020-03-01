<?php
    require_once '../load.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['user_name']; ?> hi</h2>


    <a href="admin_logout.php">Log out</a>
   <a href="admin_createuser.php">Sign Up</a>
</body>
</html>