<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Insert</title>
</head>
<body>
    
    <?php
        include("Connect_Database.php");
    ?>

    <?php
    $userInsert = "insert into users values('" .  
        $_POST["name"] . 
        "', '" . 
        $_POST["email"] .
        "')";

        $result = mysqli_query($connect, $userInsert);
        header("Location: Admin.php");
        ?>
    
</body>
</html>