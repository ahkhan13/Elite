<!DOCTYPE html>
<html lang="en">
<head>
      <?php include 'conn/link.php'?>
    <style>
         #error{
            color: red;
            background: white;
            padding: 0px;
            font-size: 14px;
            font-weight: 500;
             display: none;
        }
        body{
           background #2d3436;
            
        }
        .form-group{
            margin-top:10px;
        }
        .head{
            text-align: center;
            font-size: 25px;
            font-weight: 800;
            color: purple;
            text-decoration: underline;
       }
        .container{
            margin-top: 60px;
        }
        .form-control{
            font-size:14px;    
        }
           #getstarted{

                        background:#130f40;
            font-size: 16px;
            padding: 6px;
            transition: all 0.3s ease;
        }
        #getstarted:hover{
                        background:#2c2c54;
          
        }
        .already{
            margin-top: 5px;
            font-weight: 400;
            font-size: 16px;
        }
        .form-container{
            display:flex;

        }
        .image-container{
            margin-top:30px;
            flex:2;
        }
        .input-container{
            flex:1;
            border:1px solid cyan;
            padding:30px 30px 10px 30px;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="head">Register</div>
              <div class="form-container">
                  <div class="image-container">
                        <img src="images/img.jpg" width="350px" height="300px">
                  </div>
                  <div class="input-container">
                       <form class="form" id="form_data">
                          <div class="elite-img">
                              <img src="images/elite.png" alt="" width="100%" height="70px">
                          </div>
                         <div class="form-group">
                          <input type="text" placeholder="Full Name" class="form-control" name="fname">
                           </div>
                           <div class="form-group">
                          <input type="text" placeholder="Username" class="form-control" name="username">
                           </div>
                           <div class="form-group">
                          <input type="text" placeholder="Contact Number" class="form-control" name="phone">
                           </div>
                           <div class="form-group">
                          <input type="text" placeholder="Email" class="form-control" name="email">
                           
                           </div>
                           <div class="form-group">
                          <input type="password" placeholder="Password" class="form-control" name="password">
                           
                           </div>
                           <div class="form-group">
                          <input type="password" placeholder="Confirm Password" class="form-control" name="cpassword">
                           
                           </div>
                           <div class="form-group" id="error">
                 
 
                           </div>
                           <input type="submit" class="btn btn-primary btn-block" value="Register" id="getstarted">
                           <div class="form-group my-4">
                            <span class="already">Already have a account? <a href="index.php">Login</a></span>
                           </div>
                      </form>
                  </div>
           </div>
        </div>
    </body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
     <script> 
$(document).ready(function(){
       $('#getstarted').click(function(e){
             e.preventDefault();
                 $.post(
                     "insert.php",
                      $('#form_data').serialize(),
                     function(data){
                     $('#error').fadeIn().html(data);
                         
                     }
                 );
         });
    
    
});
</script>