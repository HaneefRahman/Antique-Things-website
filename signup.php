<?php
$server_name ="localhost";
$username ="root";
$password ="";
$database_name= "database1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("connection failed"  . mysqli_connect_error());
}

if(isset($_POST['Save']))
{
    $First_Name = $_POST['first_name'];
    $Last_Name = $_POST['last_name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Confirm_Password = $_POST['confirm_password'];

    $sql_query = "INSERT INTO customer_data (first_name, last_name, email, password, confirm_password)
    VALUES ('$First_Name','$Last_Name','$Email','$Password','$Confirm_Password')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "Successfully Sign UP!";
    }
    else
    {
        echo "Error: " . $sql  . ""  . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
