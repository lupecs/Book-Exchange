<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Enrollment</title>
    <link href="UserEnroll.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div align="center">
    <form action="UserInsert.php" method="post">
    <img src="images/brand_horizontal_logo_4color.png" alt="Cal State LA" id="pic1" align="center;">
        <table>
            <tr>
                <td><h2 id="title" align="center">User Enroll</h2id></td>
            </tr>
            <tr>
                <td align="center">USERNAME: <input type="text" name="name" id="text1"/></td>
            </tr>
            <tr>
                <td align="center">EMAIL: <input type="text" name="email" id="text2"/></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="REGISTER" id="submit" /></td>
            </tr>
            
            <tr>
                <td align="center"><p id="adminLink"><a href="/admin.php">BACK TO ADMIN</a></p></td>
            </tr>
        </table>
</form>
</div>
</body>
</html>
