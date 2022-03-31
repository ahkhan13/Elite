<!DOCTYPE html>
<html lang="en">
<head>
         <?php include 'conn/link.php'; ?>
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
            font-size:15px;
           
        }
        .form-group{
          margin-top:15px;
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
            margin-top: 14px;
            font-weight: 400;
          font-size: 16px;
        }
        .highlight{
            font-size: 23px;
             color: peru;
             font-weight: 700;
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
            padding:30px 20px 20px 20px;  
        }
    </style>
    </head>
    <body>  <div class="container">
            <div class="head">Sign In</div>
              <div class="form-container">
                  <div class="image-container">
                        <img src="images/img.jpg" width="350px" height="250px">
                  </div>
                  <div class="input-container">
                       <form class="form" id="form_data">
                          <div class="elite-img">
                              <img src="images/elite.png" alt="" width="100%" height="200px">
                          </div>
                           <div class="form-group">
                          <input type="text" placeholder="Username / Email" class="form-control" id="email">
                          
                           </div>
                           <div class="form-group">
                          <input type="password" placeholder="Password" class="form-control" id="password">
                           
                           </div>
                           <div class="form-group" id="error">
                    
                           
                           </div>
                          
                           <input type="submit" class="btn btn-primary btn-block" value="Sign In" id="getstarted">
                           <div class="form-group my-4">
                            <span class="already">Not have a account? <a href="signup.php">Register</a></span>
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
             var email=$('#email').val();
             var password=$('#password').val();
                 $.post(
                     "read.php",
                      {email:email, password:password},
                     function(data){
                        if(data==1){
                            window.location.replace("home/home.php"); 
                        }else{
                     $('#error').fadeIn().html(data);
                     }
                     }
                 );
         });
    
    
});
</script>