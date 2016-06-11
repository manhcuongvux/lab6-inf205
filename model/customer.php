<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customer
 *
 * @author Sony
 */
     
class customer {
    var $id;
    var $name;
    var $age;
    var $email;
    var $pass;
    var $address;
    var $city;
    var $phone;
    
    
    function __construct() {
        if(func_num_args()==8){
            $this -> id =  func_get_arg(0);
            $this -> name = func_get_arg(1);
            $this -> age = func_get_arg(2);
            $this -> email = func_get_arg(3);
            $this -> pass = func_get_arg(4);
            $this -> address = func_get_arg(5);
            $this -> city = func_get_arg(6);
            $this -> phone = func_get_arg(7);
        }
    }
    
    public function getList(){
        $db = new connect();
        $strQuery = "SELECT * FROM customer";
        $kq = $db ->getlist($strQuery);
        return $kq;
    }
    
    public function getCustomerById($cusid){
        $db = new connect();
        $strQuery = "SELECT * FROM customer WHERE id = '$cusid'";
        $kq = $db ->getInstance($strQuery);
        return $kq;
    }
    
     public function insert(){
        $db = new connect();
        $strQuery = "INSERT INTO customer VALUES('$this->id', n'$this->name', '$this->age',
        '$this->email', '$this->pass', '$this->address', '$this->city',
        '$this->phone')";
        $db->exec($strQuery);
    }
    
    
    public function update(){
        $db = new connect();
        $strQuery = "UPDATE customer SET name=n'$this->name',age='$this->age',email='$this->email',
        pass='$this->pass',address=n'$this->address',city='$this->city', 
        phone='$this->phone' WHERE id='$this->id'";
        $db->exec($strQuery);
    }
    
    public function delete(){
        $db = new connect();
        $strQuery = "DELETE FROM customer WHERE id='$this->id'";
        $db->exec($strQuery);
    }
    
    public function login($tmpUser, $tmpPass){
        $db = new connect();
        $strQuery = "Select name, email, pass from customer where email = '$tmpUser'";
        $result = $db->getInstance($strQuery);
        $ketqua = array();
        if($result == null)
        {
            $ketqua[0] = 0;
            return $ketqua;
        }
        else
        {
            if(trim($result[2]) == trim($tmpPass)){
                $ketqua[0] = 1;
                $ketqua[1] = $result[1];
                return $ketqua;                
            }
            else{
                $ketqua[0] = 2;
                $ketqua[1] = $result[1];
                $ketqua[2] = $result[0];
                return $ketqua;
            }
        }
    }
}

?>
