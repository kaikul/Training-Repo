

<?php

include'dbh.php';

            $email=$post['imail'];
            $username=$_POST['name'];
            $password=$_POST['pass'];
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $dob=$_POST['date'];


            $users=array($username=>$username,
                   array($password=>$password,$firstname=>$firstname,$lastname=>$lastname,$dob=>$dob));

                 
                         


 $sql="INSERT INTO signj( email,username, password, firstname, lastname, dob) VALUES ('$email','$username','$password','$firstname','$lastname','$dob')";
 

 if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
       header('location:form.php');
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     
     mysqli_close($conn);

   $sql="select username, email from signj where username=$username && email=$email";
   $result=mysqli_query($conn,$sql)or die("query unsuccessfully");
   if(mysqli_num_rows($result)>0){
    echo"already exist";
   }else{
    echo"completed";
   }
      
      
             
  
   
     ?>

