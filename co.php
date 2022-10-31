

<?php

include'dbh.php';
   
            $username=$_POST['iname'];
            $password=$_POST['ename'];
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $dob=$_POST['dname'];


            $users=array($username=>$username,
                   array($password=>$password,$firstname=>$firstname,$lastname=>$lastname,$dob=>$dob));


 $sql="INSERT INTO users( username, password, firstname, lastname, dob) VALUES ('$username','$password','$firstname','$lastname','$dob')";
 

 if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
       header('location:form.php');
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     
     mysqli_close($conn);
      
      
             
         
   
     ?>

