<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="register";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
     $first_name = $_POST['firstname'];
     $last_name = $_POST['lastname'];
     $phone = $_POST['phone'];


     $sql_query = "INSERT INTO register (firstname,lastname,phone)
     VALUES ('$first_name','$last_name','$phone')";

     if (mysqli_query($conn, $sql_query)) 
     {
        echo "New Details Entry inserted successfully !";
     } 
     else
     {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
