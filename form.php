<!DOCTYPE html>
<html>
<head>
     <link href="php.css"  rel="stylesheet">
</head>
<body>

    <form action="login.php" method="post">
       <div class="style">
         <h3 class="head">LOGIN</h3>
         <div class="mail">
           <label class="email">Email</label>
           <br>
           <input type="email" name="email" class="tmail" required>
        </div>
        <div class="passw">
           <label class="password">password</label>
           <br>
           <input type="pass" name="password" class="pass"   required>
        </div>
        <div class="box">
            <input type="checkbox"  class="check" name="" >
             <span>remember me?</span>
        </div>
           <input type="submit" value="login" class="button">
           <br>
           <br>
           <a class="foot" href="#"> Forgot password?</a>
           <hr>
           <p class="or">OR</p>
           <br>
           <br>
           <br>
           <br>
           <br>
           <div class="icons">
          <a href="#"><ion-icon class="blue" name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon  class="red" name="logo-google"></ion-icon></a>
          <a href="#"><ion-icon  class="blue" name="logo-linkedIn"></ion-icon></a>
           </div>
           <p class="sign">Need an account?<a href="sign.php" class="need">SIGNUP</a></p>
           
       </div>
       <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
      
    </form>
</body>
</html>