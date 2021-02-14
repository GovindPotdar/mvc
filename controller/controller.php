<?php

include "C:\\xampp\htdocs\mvc\model\model.php";


class controller{

    public function __construct(){
        $this->obj = new model();
    }
    
    public function show(){
            $data = $this->obj->get_data();
            include "C:\\xampp\htdocs\mvc\\view\alldata.php";
        }
    
    public function add(){
    if(isset($_POST['submit'])){
        
        $first = $_POST['firstname'];
        $last=$_POST['lastname'];
        $dob=$_POST['dob'];
        $joining=$_POST['joining'];
        $mno=$_POST['mno'];
        $this->obj->add_member($first,$last,$dob,$joining,$mno); 
    }
    $this->show();
    }

    public function delete(){
        $id = $_GET['id'];
        $this->obj->delete_by_id($id);
        $this->show();
    }

    public function edit($id,$first,$last,$dob,$joining,$mno){
        $this->obj->edit_member($id,$first,$last,$dob,$joining,$mno);
        $this->show();
    }

}


?>