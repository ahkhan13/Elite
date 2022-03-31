<?php
 include 'conn/conn.php';
 $fname=$_POST['fname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
 $phone=$_POST['phone'];
 $username=$_POST['username'];
$sql="SELECT * FROM users WHERE username='{$username}'";
$res=mysqli_query($conn,$sql);
$sql1="SELECT * FROM users WHERE useremail='{$email}'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res)){
   echo "Username Already Registered"; 
}else if(mysqli_num_rows($res1)){
   echo "Email Already Registered";  
}else if($password===$cpassword){
     $pass = md5($password);
     $sql2="INSERT INTO users(username, useremail, userpassword, fullname, phone) VALUES('{$username}','{$email}','{$pass}','{$fname}', '{$phone}')";
    if(mysqli_query($conn,$sql2)){
    echo "Hello $username, Your have registered Successfully";
    } else
   {
    echo $sql2;
   } 
    
}
else{
        echo "Password is not matching";
 }

?>