<?php

class Database{
    const USERNAME = 'omosuwaolasunkanmi@gmail.com';
    const PASSWORD = 'Ijeoma1983!';

private $dsn = "mysql:host=localhost;dbname=db_users_system";
private $dbuser = "root";
private $dbpass = "";

public $conn;
//I use a connector method to conect with the DB
public function __construct(){
    try{
        $this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
    }catch(PDOException $e){
        echo 'Error : '.$e->getMessage();
    }
    return $this->conn;
}
//check inputs
public function test_input($data){
    //this function remove white spaces associated with the data
    $data = trim($data);
    //this function removes slashes
    $data = stripcslashes($data);
    //this function converts htmlspecial entities such as $#@! etc
    $data = htmlspecialchars($data);
    return $data;
}
//Error message Alert
public function showMessage($type, $message){
   return '<div class="alert alert-'.$type.'alert-dismissible">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong class="text-center">'.$message.'</strong>
         </div>' ;
}
}

?>