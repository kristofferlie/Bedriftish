<?php
$servername = "158.38.101.223";
$username = "kli";
$password = "tapetkniv";
$dbname = bedriftish

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

 $username=$_POST['username']; 
 $password=$_POST['password'];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
	}
             
                  $sql = "SELECT id, username, email, password FROM user";
                  $result = $conn->query($sql);


		 $username= $_REQUEST['Email'];
		 $password= $_REQUEST['passord'];
		 $sql=("SELECT * FROM user WHERE email||username='$username'AND password='$password'");
		
		 
		 if(mysql_result($sql,1)){
			 echo 'You are logged in!';
                        session_start();    
                        $_SESSION['loggedIn'] = true;
                        $_SESSION['username'] = $username;
                 $id= ("SELECT userId FROM user WHERE Email='$username' AND password='$password'");
                    $getNr=$conn->query($id);

                      header("Location:    ");
                      exit;   
                      
		 }
		 else{
			 echo "user not found";
		 } 


?>﻿