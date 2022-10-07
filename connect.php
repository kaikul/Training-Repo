<?php

class signupcontr{
    private $id;
    private $password;
    private $firstname;
    private $lastname;
    private $dob;

    public function __construct($id,$password,$firstname,$lastname,$dob){

        $this->id=$id;
        $this->password=$password;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->dob=$dob;
        
    }
}
?>