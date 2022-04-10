<?php

        $connect = mysqli_connect("localhost","root","","connect_database");

        if( isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $dept = $_POST['dept'];

            $query =  "INSERT INTO insert_data (name,email,phone,dept_name)
            VALUES ('$name','$email','$phone','$dept')";

            mysqli_query($connect,$query);
        }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <form method = "post">
        <label for="">Name : </label>
        <input type="text" name = "name" placeholder="Enter your name"  autofocus> <br><br>
        <label for="">E-mail : </label>
        <input type="email" name="email" placeholder = "Enter you e-mail"><br> <br>
        <label for="">Text : </label>
        <input type="text" name = "phone"placeholder = "Phone" > <br> <br>
        <label for="">Dept : </label>
        <select name = "dept">
                <option>CSE</option>
                <option>EEE</option>
                <option>ENG</option>
        </select> <br> <br>

        <button name = "send" >Submit</button>


    </form>
    </div>
</body>
</html>