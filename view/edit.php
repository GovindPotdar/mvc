<?php include "header.php"; ?>
<?php
include "C:\\xampp\htdocs\mvc\model\model.php";
$id = $_GET['id'];
$obj = new Model();
$data = $obj->get_data_by_id($id);
$dt = $data->fetch_assoc();
?>
<div class="container">

<div class="alert alert-primary mt-3" role="alert">Edit here</div>
<form action="/mvc/controller/edit.php" method="POST" class="form-group mt-4">
<input type="number" name="id" class="form-control" value=<?php echo $_GET['id']; ?> hidden ><br>
FirstName: <input type="text" name="firstname" class="form-control" value=<?php echo $dt['firstname']; ?> required><br>
lastname: <input type="text" name="lastname" class="form-control" value=<?php echo $dt['lastname']; ?> required><br>
DOB: <input type="date" name="dob" class="form-control"  value=<?php echo $dt['DOB']; ?> required><br>
Date of joining: <input type="date" name="joining" class="form-control" value=<?php echo $dt['joining']; ?> required><br>
Mobile No.: <input type="number" name="mno" class="form-control" value=<?php echo $dt['Mno']; ?> required><br>
<input type="submit" value="submit" name="submit" class="btn btn-info">
</form>

</div>

<?php include "footer.php"; ?>
