<?php

include '1.php';

$result = $conn -> query("select * from employees");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" cellpadding="20" style="background: linear-gradient(lightblue,lightgreen,white)">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Position</td>
            <td>Salary</td>
        </tr>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["position"] ?></td>
            <td><?php echo $row["salary"] ?></td>
        </tr>

        <?php } ?>

    </table>
</body>
</html>