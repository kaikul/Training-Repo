<?php
   
   include 'dbh.php';

   if($isset($_POST['submit'])){

      $username=mysqli_real_escape_string($con,$_POST['username']);
      $password=mysqli_real_escape_string($conn,$_POST['password']);

      if($username!=''&&$password!=''){
         $sql="SELECT count(*) as ttuser from users where username='$username'&&password='$password'";
         $result=mysqli_query($conn,$sql);
         $row=mysqli_fetch_array($result);
         $count=$row(['ttuser']);

         if($count>0){
            $session['username']=$username;
            echo'welcome';
         }else{
            echo'invalid username and password';
         }

      }

   }

  


 
 


   
   



?>