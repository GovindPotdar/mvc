<?php include "header.php"; ?>


<div class="container">
<div class="alert alert-primary mt-3" role="alert">Add here</div>
<form action="/mvc/controller/add.php" method="POST" class="form-group mt-4">
FirstName: <input type="text" name="firstname" class="form-control" required><br>
lastname: <input type="text" name="lastname" class="form-control" required><br>
DOB: <input type="date" name="dob" class="form-control" required><br>
Date of joining: <input type="date" name="joining" class="form-control" required><br>
Mobile No.: <input type="number" name="mno" class="form-control" required><br>
<input type="submit" value="submit" name="submit" class="btn btn-info">
</form>

</div>


<?php include "footer.php"; ?>