<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $namecity=$_POST['name city'];
    
    $sqlinsertcity="insert into city (namecity) values (' $namecity');";
    mysqli_query($con, $sqlinsertcity);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name da Cidade
                        <input type="text" name="name city">
                    </td>
                </tr>
          
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
                <tr>
                    <td>
                    <a href= "login.php"> Login</a>
                               
                    </td>
                </tr>
            </table>
    </body>
</html>
