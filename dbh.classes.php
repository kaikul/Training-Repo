<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="sign-j"; 

 
 
 $conn =  mysqli_connect($servername,$username, $password, $dbname);

 if($conn->connect_errno){
   die("connection failed:".$conn->connect_error);
   
 }

$sql="INSERT INTO users($username,$password,$firstname,$lastname,$dob)VALUES($username,$password,$firstname,$lastname,$dob)";
$result=mysqli_query($conn,$sql);

if($result){

   echo'data inserted';

}else{
   echo'not inserted';
}
   $conn->close();
  
?> 
 
    

    


        
        
              
    
            
            
        
    
    
        
        
    
    
    
        
         
