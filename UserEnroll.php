<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Enrollment</title>
</head>
<body>
    <p align="center">User Enroll</p>
    <form action="UserInsert.php" method="post">
        <table align="center">
            <tr>
                <td>User Name</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" /></td>
            </tr>
    
        </table>
    </form>
    <p><a href="/admin.php">Back to Admin Table</a></p>
</body>
</html>