<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database1";

$conn= mysqli_connect($server_name,$username,$password,$database_name);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO entry_details (email,password)
    VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql_query)) 
    {
        echo "New Details Entry inserted successfully!";
    }
    else
    {
        echo "Error: " . $sql ."" . mysqli_error($conn); 
    }
    mysqli_close($conn);


}

?>