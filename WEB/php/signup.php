<?php 

$host="localhost";
$user="root";
$password="";
$db="login_signup";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

/*if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    
    //$sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    $sql="SELECT * FROM data"
    
    $result=mysqli_query($con,$sql);
    
    if($result){
        /*echo "/*<script>
			window.location='hello.html';
			</script>";*/
         /*echo " You Have Entered correct Password";   

        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
  

}*/
$uname=$_POST['username'];
$number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
 
 $input="INSERT INTO `data`(`username`, `number`, `email`, `password`, `repassword`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";
if(mysqli_query($con,$input))
    echo "<script>
    window.location='../index.html';
    </script>";    
else
	echo "error";
    
?>
