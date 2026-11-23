<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name"> <br>
        Job Title:
        <input type="text" name="jobtitle"> <br>
        Salary:
        <input type="text" name="salary"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

include '../1.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $title = $_POST["jobtitle"];
    $sal = $_POST["salary"];

    $sql = $conn -> prepare("insert into emp(name,job_title,salary) values(?,?,?)");

    $sql -> bind_param('ssd',$name,$title,$sal);

    if($sql->execute()){
        echo "Inserted";
    }
    else{
        echo "Insert failed";
    }
}

?>