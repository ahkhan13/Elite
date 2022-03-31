<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http://localhost/elite/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="../js/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../js/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../js/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
         body{
            background: #222f3e;
             background:#6F1E51;
             background:#ffffff;
             b
        }
        *{
          box-sizing:border-box;
          margin:0;
          padding:0;
        }
       #card{
         background:#130f40;
           color: white;
           padding: 40px;
           transition: all 0.2s ease;
           padding-bottom: 80px;
           border-bottom: 6px solid #6F1E51;
       }
       #card_data{
           font-size: 25px;
           text-decoration: none;
       }
       
       #card:hover{
           border-bottom: 6px solid yellow;
       }
       .fas{
           font-size: 45px;
           margin-right: 10px;
       }
       .container-fluid{
         padding-top:70px;
       }
       .cart-btn{
         margin-top:5px;
         display:inline-block;
         width:100%;
         background:black;
         border: 1px solid black;
         font-size:14px;
         color:#ffffff;
         transition :all ease 0.3s;
         padding:12px;
         border-radius:3px;
       }
        .cart-btn:hover{
        background:#ffffff;
        color:black;
        border: 1px solid black;

       }
       .clicked{
        background:#ffffff;
        color:black;
        border: 1px solid black;

       }
       .item-cart{
         margin:10px 10px 30px 10px;
         padding:20px;
         background-color:#ffffff;
         border:1px solid cyan;
       }
       .navbar-container{
         position:fixed;
         width:100%;
         height:55px;
         background:#130f40;
         z-index: 10;
       }
       .tag{
         font-size:21px;
         font-weight:650;
         margin:0px 0px 5px 10px;
         text-decoration:underline;
       }
       .list{
         display:flex;
         flex-direction:row-reverse;
         margin-right:20px;
       }
       .list ul{
         list-style:none;
         display:inline-block;
         color:cyan;
         font-size:16px;
         font-weight:600;
         margin:15px 10px 0px 0px;
         padding-right:25px;
       }
    </style> 

</head>
    
    <body>
    <div class="navbar-container">
          <div class="list">
          <li>
             <ul><?php echo $_SESSION['username']?></ul>
             <ul><a href="cart.php">Cart</ul>
             <ul><a href="../login-signup/logout.php">Logout</a></ul>
          </li>
          </div>
      </div>
 

 <div class="container-fluid ">
        <div class="row">
          <div class="col-md-12">
            <div class='tag'> All Products</div>
          </div>
        </div>
       <div class="row">
         <?php
           include '../conn/conn.php';
           $sql = "SELECT * FROM products";
           $res = mysqli_query($conn, $sql);
           if(mysqli_num_rows($res)>0){

              while($row=mysqli_fetch_assoc($res)){
         ?>
         <div class="col-md-3">
           <div class="item-cart">
              <div class="cart-image">
                <img src='../images/<?php echo $row['proImage']?>' height="auto" width="100%">
              </div>
              <div class="img-desc my-2 mx-3 mx-2">
                <h4><?php echo  $row['proTitle']?></h4>
                <h5><?php echo $row['proName']?></h5>
                 <h3>Rs : <?php echo $row['proPrice']?></h3>
              </div>
              <div class="add-cart-btn">
                <button class='cart-btn' id='<?php echo $row['id']?>'>Add To Cart</button>
              </div>
            </div>

         </div>
         <?php
           }
          }
          else{
            echo $sql;
          }
         ?>

         

       </div>
    
   </div>
  </body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
     <script> 
$(document).ready(function(){
       $('.cart-btn').click(function(e){
          e.preventDefault();
          var id = $(this).attr('id');
                $.ajax({
                     type : "POST",
                     url : "add-cart.php",
                     data : {id : id}, 
                     success : function(data){
                         if(data==1){
                          $('#'+id).html('Added').addClass('clicked');
                         }else{
                           alert("Failed");
                         }
                     }
                 })
                 
                 
                    
                
         });
    
    
});
</script>
