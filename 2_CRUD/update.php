<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        ID:
        <input type="text" name="id"> <br>
        Salary:
        <input type="text" name="sal" id=""> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

include '../1.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $sal = $_POST["sal"];

    $sql = $conn -> prepare("update emp set salary=? where id =?");

    $sql -> bind_param('di',$sal,$id);

    if($sql->execute()){
        echo "Updated";
    }
    else {
        echo "Update failed";
    }
}

?>