


<!DOCTYPE html>
<html> 


      <head>
              
       <title>my website</title>
       <link href="event.css"  rel="stylesheet">
       <script>src="https://code.jquery.com/jquery-3.6.0.min.js"</script>

       </head>
           
       <body>
             <div class="title" >EVENT REGISTRATION FORM</div>
             <br>
             <br>
                <div class="main">
                  <form action="co.php" method="post">
           
              
                    <div class="fname">
                         <h5 class="head">NAME</h5>
                       
                       <input type="text"  class="iname"name="fname"  required>
                       <label class="firstlabel">firstname</label>
                       <input type="text"class="iname" name="lname" required>
                       <label class="lname">lastname</label>
                    </div>
                   
                    
                    <div class="mail">
                       <label class="e">email</label>
                       <input type="email" name="e" class="imail" placeholder="enter email" required>
                    </div>
                    <br>
                    <br>
                    <div class="name">
                         <label class="userlabel">username</label>
                         <input type="text" name="name"  class="uname"placeholder="enter username"required>
                    </div>
                    <br>
                    <br>
                    <div class="pass">
                         <label class="passlabel">password</label>
                         <input type="password" class="ipass" name="pass" 
                          pattern="[A-Za-z0-9\d\.]{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" placeholder="enter password" required>
                    </div>
                    
                    <div class="date">
                         <label class="datelabel">dob</label>
                         <input type="date" class="idate" name="date"  min="1890-8-4" max="1996-3-7" placeholder="enter dob" required>
                    </div>
                    <div class="checkbox">
                         <h3 class="footer">ARE you existing custumer?</h3>
                         <br>
                         <br>
                         <input type="radio" name="op1" class="checkyes" >
                         <label for="op1" class="label">
                         <span>yes</span>  
                         </label> 
                         <input type="radio" name="op2" class="checkyes" >
                         <label for="op2" class="label2">
                         <span>no</span>
                         </label>
                         
                    </div>
                    

                   <a><button class="button">REGISTER</button></a>
                    


               
         </form>
       </div>
      <script>src="general.js"</script>
         
     </body>
</html>