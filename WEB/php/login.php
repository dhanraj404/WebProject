<?php 

$host="localhost";
$user="root";
$password="";
$db="login_signup";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['username']))
{
    
    $uname=$_POST['username'];
    //$number=$_POST['number'];
    //$email=$_POST['email'];
    
    $password=$_POST['password'];
    //$repassword=$_POST['repassword'];
    
    
    $sql="SELECT * FROM `data`";
    
    $result=mysqli_query($con,$sql);
    
    
    while ($row=mysqli_fetch_assoc($result)) 
    {
        if($row['username']==$uname && $row['password']==$password)
        {
            echo "success";
            
            exit();
        }
    }
 }   
 ?>