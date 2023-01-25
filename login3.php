<?php
session_start();
error_reporting(0);

include('dbconnection.php');
if (isset($_POST['submit'])) {
    $email = $_POST['emaill'];
    $password = $_POST['pass'];

      $sql = "SELECT * FROM web_table WHERE email = '$email' AND password = '$password' ";


   $data = mysqli_query($con1, $sql);
   $total = mysqli_num_rows($data);

   // echo "$total";
   if ($total == 1) {
       
        echo "<script>alert('Login Successfully')</script>";
       
   }else{
        echo "<script>alert('Login Failed!')</script>";
    
   }

}





?> 
<!DOCTYPE html>
<html>
<head>
  <title>login form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  
<style type="text/css">
    body{
        background-color:#DE3163;
    }
    *{
        margin: 0;
        padding: 0;
    }
    .form-box{
        width: 550px;
        height: 430px;
        background-color: white;
        margin: 6% auto;
        position: relative;
        padding: 10px;
    }
    .login-form{
        margin: 3rem;
        transition: 1s;
        border: 0px solid;
        position: absolute; 

    }
    .form-field{
        width: 100%;
        padding:10px 0;
        margin: 15px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 3px solid grey;
        outline: none;
        

    }
    h1{
        margin: 10px;
    }
    .form-link{
        padding: 20px;
        text-align: center;
        color: black;
    
    }
    .forgot-pass{
        text-decoration-line: none;
        color: black;


    }


.button4{
    background-color:#F0F3F4 ;
    border: none;
    color: black;
    padding: 15px 50px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin:6px 2px; 
    cursor: pointer;
}
.button5{
    background-color:#191970;
    border:none;
    color: white;
    padding: 15px 50px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 6px 2px;
    cursor: pointer; 
} 



</style>
<body>
    <div class="container-fluid">
        <div class="form-box" >
            <h1>Login</h1>
            <form class="login-form" method="POST" action="#" autocomplete="off" >
                <input type="text" name="emaill" class="form-field" placeholder="Email" required="" autocomplete="off">
                <input type="Password" name="pass" class="form-field" placeholder="Password" required="" autocomplete="off">
                <div class="form-link">
                    <a href="#" class="forgot-pass">FORGOT YOUR PASSWORD?</a>
                    
                </div>
                
               <button class="button button4" name="submit" role="button" aria-pressed="true">REGISTER</button>
                <a href="web1.php" class="button button5" name="regist" role="button" aria-pressed="true">SIGN IN</a>


                   
               </div>
            
            

                 
            
              </div>

                </form>
        
    </div>

        
    </div>

  
 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script type="text/javascript">
    
</script>


</body>
</html>
