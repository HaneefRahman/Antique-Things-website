<?php
$server_name ="localhost";
$username="root";
$password="";
$database_name= "database1";

$conn=mysqli_connect($username,$password,$database_name);

if(!$conn)
{
    die("connection failed"  . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $Product = $_POST['product'];
    $Price = $_POST['price'];
    $Sub_Total= $_POST['sub_total'];

    $sql_query = "INSERT INTO product_details (product, price, sub_total) 
    VALUES ('$Product','$Price','$Sub_Total')";

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
