<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="sign-j"; 
  

 $conn=mysqli_connect($servername,$username,$password,$dbname);
  
        if($conn->connect_error){
            die("connection failed:".$mysql_connect_error() );
        
        }
       
        $sql="select from users";
        $result=mysqli_query($conn,$sql);

          if($result){
            while($row=mysqli_fetch_assoc($result)){
               
            }
         } else{
            echo"0 results";
        

            }
          $conn->close();


?>