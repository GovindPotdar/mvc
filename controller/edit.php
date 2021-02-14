<?php

include "controller.php";


$obj = new controller();

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $first=$_POST['firstname'];
    $last=$_POST['lastname'];
    $dob=$_POST['dob'];
    $joining=$_POST['joining'];
    $mno=$_POST['mno'];
}
$obj->edit($id,$first,$last,$dob,$joining,$mno);



?>