<?php
require_once 'config.php';
    //we create a class called Auth and extend attributes from 
    //the Database class in the config.php file.
class Auth extends Database{
  // within the Auth class, I define 2 methods used for registration of new users  
public function register($name, $email, $password){
    //Wewrite and SQL query to select for the arguments in the register function
$sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :pass)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['name'=> $name,'email'=>$email, 'pass'=>$password]);
   return true;
}
  //We create another method for  ALready existing/registered users. 
public function user_exist($email){
    $sql = "SELECT email FROM users WHERE email = :email";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
  //Login existing User
  public function login($email){
    $sql = "SELECT email, password FROM users WHERE email = :email AND deleted != 0";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    return $row;  
  }
  //The function below helps get current user in session
  public function currentUser($email){
    $sql = " SELECT *FROM users WHERE email = :email AND deleted != 0";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  }
  //forgot password
  public function forgot_password($token,$email){
    $sql= "UPDATE users SET token = :token, token_expire = DATE_ADD(NOW(), INTERVAL 10 MINUTE)
     WHERE email = :email";
     $stmt = $this->conn->prepare($sql);
     $stmt->execute(['token'=>$token,'email'=>$email]);
     return true;
  }
  //Reset Password Authentication
  public function restore_pass_auth($email,$token){
    $sql = "SELECT id FROM users WHERE email = :email 
    AND token = :token AND token != '' AND token_expire >
     NOW() AND deleted != 0";
     $stmt->execute(['email'=>$email, 'token'=>$token]);
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     return $row;
  }
  //update new password into the database
  public function update_new_pass($pass,$email){
    $sql = " UPDATE users SET token = '', password =:pass WHERE email =:email AND delete != 0";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['pass'=>$pass, 'email'=>$email]);
    return true;
  }
}

?>