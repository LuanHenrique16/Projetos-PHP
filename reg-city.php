<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $namecity=$_POST['namecity'];

    $sqlinsertCity="insert into regcity(name_city)value('$nameCity')";
    mysqli_query($con, $sqlinsertCity);
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
                        Nome da Cidade
                        <input type="text" name="namecity">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="home.php">Home</a>
                    </td>
                </tr>

            </table>

            <table border='1'>
                <tr>
                    <th>
                        Name City
                    </th>
                    <th>
                        Id
                    </th>
                </tr>

            <?php
            $sq="select * from reg-city";
            $qu=mysqli_query($con,$sq);
            while($f=  mysqli_fetch_assoc($qu)){
                ?>
                <tr>
                    <td>
                        <?php echo $f['namecity']?>
                    </td>
                    <td>
                        <?php echo $f['Id_city']?>
                    </td>
                </tr>
            <?php
            }
            ?>
            </table>
    </body>
</html>