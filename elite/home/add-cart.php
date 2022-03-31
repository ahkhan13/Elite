<?php
  include '../conn/conn.php';
   session_start();
   $id = $_POST['id'];
   $username = $_SESSION['username'];
   $fetchCart = "SELECT * FROM products WHERE id = $id";
   $res = mysqli_query($conn,$fetchCart);
   if(mysqli_num_rows($res)>0){
       $row = mysqli_fetch_assoc($res);
       $image=$row['proImage'];
       $name=$row['proName'];
       $title=$row['proTitle'];
       $price=$row['proPrice'];
       $sql = "INSERT INTO cart(username, image , title, name, price) VALUES('{$username}', '{$image}', '{$title}', '{$name}','{$price}')";
       if(mysqli_query($conn, $sql)){
           echo 1;
       }else{
           echo 0;
       }
   }
   
?>