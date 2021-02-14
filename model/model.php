<?php


class Model{
    function __construct(){
        $this->conn = new mysqli("localhost","root","","staff_record");
        if($this->conn->connect_error){
            die("error :: connection can't be stablished");

        }
    }
    function get_data(){
        $q = "SELECT * FROM records";
        return $this->conn->query($q);
    }
    function get_data_by_id($id){
        $q = "SELECT * FROM records WHERE id=$id";
        return $this->conn->query($q);
    }

    function delete_by_id($id){
        $q =  "DELETE FROM records WHERE id = $id";
        $this->conn->query($q);
    }

    function add_member($first,$last,$dob,$joining,$mno){
        $q = "INSERT INTO records (firstname,lastname,DOB,joining,Mno) VALUES ('$first','$last','$dob','$joining','$mno')";
        $this->conn->query($q);
    }

    function edit_member($id,$first,$last,$dob,$joining,$mno){
        $q = "UPDATE records SET firstname='$first',lastname='$last',DOB='$dob',joining='$joining',Mno='$mno' WHERE id=$id";
        $this->conn->query($q);
    }
}


?>