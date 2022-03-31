<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
            margin:0px;
            padding:0px;
        }
        .inner-container1{
            display: flex;
       }
       .inner-container2{
            display: flex;
       }
        .div1{
            flex:2;
            background:red;
            height:400px;
        }
        .div2{
            flex:1;
            background:blue;
            height:400px;
        }
        .div3{
            flex:2;
            background:yellow;
            height:400px;
        }
        .div4{
            flex:1;
            background:green;
            height:400px;

        }
        .outer-container{
            display:flex;
        }
        .container{
            flex:3;
        }
        .sidebar-container{
           flex:1;
           height:100vh;
           background:#2C3A47;
           position:fixed;
           width:300px;
           
        }
        .header{
            display:inline-block;
            color:black;
            font-weight:700;
            margin:10px 10px 10px 25px;
            font-size:36px;
            border-radius:6px;
            background:blue;
            padding:15px;
            
        }
       
        .list li{
            list-style: none;
            margin-left:10px;
        }
        .list ul{
            list-style:none;
            color:#ffffff;
            padding:16px;
            margin:10px;
            font-size:21px;
            letter-spacing:0.7px;
            font-weight:550;
            transition:all ease-in-out 0.3s;
            
        }
        .list ul:hover{
            background:#596275;
            border-radius:3px;
            cursor:pointer;
        }
        i{
            margin-right:30px;
        }
        .logout{
            margin-top:200px;
        }
        .logout li{
            list-style:none;
            margin-left:5px;
        }
        .logout ul{
            position:absolute;
            top:90vh;
            left:10px;
            list-style:none;
            color:#ffffff;
            padding:16px;
            font-size:21px;
            letter-spacing:0.7px;
            font-weight:550;
            transition:all ease-in-out 0.3s;
            
        }
        .logout ul:hover{
            background:#596275;
            border-radius:3px;
            cursor:pointer;
        }
        .response{
            width:100px;    
        }
        #name{
            font-size:21px;
            color:snow;
        }
        .open{
            color:snow;
            padding:5px;
            border-radius:50%;
            font-size:15px;
            background-color:black;
            width:25px;
            height:25px;
            position:absolute:
            top:10px;
            left:200px;
        
        }
    </style>
</head>
<body>
    <div class="outer-container">
        <div class="sidebar-container">
               <div class='header'>B</div> <span id='name'>Aftab Husain</span>
                <div class="list">
                   <li>
                       <ul><i class="fas fa-users"></i><span>Clients</span></ul>
                       <ul><i class="far fa-search"></i><span>Search</span></ul>
                       <ul><i class="far fa-calendar-alt"></i><span>Status</span></ul>
                   </li>
               </div>
               <div class="logout">
                   <li>
                       <ul><i class="far fa-sign-out-alt"></i></i><span>Logout</span></ul>
                   </li>
               </div>
        </div>
       <div class="container">
        <div class="inner-container1">
         <div class="div1">

         </div>
         <div class="div2">

         </div>
       </div>
       <div class="inner-container2">
         <div class="div3">

         </div>
         <div class="div4">

         </div>
       </div>
     </div>
</div>
    
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
     <script> 
$(document).ready(function(){
       $('.header').click(function(e){
           $('.sidebar-container').addClass('response');
           $('ul span').html("");
           $('#name').html("");
         });
    
    
});
</script>