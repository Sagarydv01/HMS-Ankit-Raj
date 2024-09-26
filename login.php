<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    

    $servername="localhost";
    $username="root";
    $password="";
    $database="patients";
    $conn=mysqli_connect($host,$username,$password,$database);
    if(!$conn)
    {
        die("connection failed:".$conn);
    }
    $query="select * from login where username='$username' AND password='$password'";
    
    $result=$conn->query($query);
    
    if($result->num_rows==1)
    {
        exit();
    }
    else{
        exit();
    }
    $conn->close();
}
?>