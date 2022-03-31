<?php
include 'conn/conn.php';
$email=$_POST['email'];
$password=md5($_POST['password']);
if($email!="" && $password!=""){
$sql="SELECT * FROM users WHERE useremail='{$email}'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $email=$row['useremail'];
        session_start();
       $_SESSION['username']=$row['username'];
       $_SESSION['email']=$row['useremail'];
       $pass=$row['userpassword'];
        if($password===$pass){
             echo 1;  
        }else{
          echo "Password is not matching";  
        }
    }
 }else{
 echo "User Email is not matching";
 }
}
else{
    echo "All fields are required";
}
?>