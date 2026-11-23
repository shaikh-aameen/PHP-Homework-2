<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Full Name:
        <input type="text" name="name"> <br>
        Email:
        <input type="text" name="email"> <br>
        Password:
        <input type="password" name="pass"> <br>
        Confirm Password:
        <input type="password" name="cpass"> <br>
        Job Title:
        <input type="text" name="title"> <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php 

include '1.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $title = $_POST["title"];

    if(empty($name) || empty($email) || empty($pass) || empty($cpass) || empty($title)){
        echo "<script>alert('All fields must be filled')</script>";
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Email must be in proper format')</script>";
    }
    else if($pass != $cpass){
        echo "<script>alert('Password not match')</script>";
    }

    else if(isset($_POST["submit"])){
        $sql = $conn-> prepare("insert into emp_register(name,email,password,job_title) values(?,?,?,?)");
        $sql -> bind_param('ssss',$name,$email,$pass,$title);
        if($sql->execute()){
            echo "Insert success";
        }
        else {
            echo "Insert failed";
        }
    }

}

?>