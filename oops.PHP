<?php
 class User{
 	private $id;
 	private $username;
 	private $email;
 	private $password;

 	public function __construct($username,$password){
 		$this->username = $username;
 		$this->password = $password;
 		//echo 'Constructor Called'.'<br>'; //it is called without any function call
 	}
 	public function register(){
 		echo "User Registered".'<br>';
 	}
 	public function login(){
 		//echo $username." is now logged in".'<br>';
 		
 		$this->auth_user();   //parameters passed to auth_user
 	}
 	public function auth_user(){
 		//echo $this->password." is authenticated".'<br>';
 	}
 	public  function __destruct(){
 		//echo 'Destructor Called';
 	}
 }
 $User = new User('Ankit','1208');
 echo $User->username;
 //$User->register();
// $User->login();