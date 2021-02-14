<?php include "header.php"; ?>
<div class="container mt-5">

<div class="alert alert-primary" role="alert">
  For adding a new member press here => <a href="/mvc/view/add.php" class="btn btn-primary">Add</a>
</div>
<?php if($data->num_rows>0): ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">DOB</th>
      <th scope="col">date of joining</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  
    <?php while($dt = $data->fetch_assoc()): ?>
    <tr>
      <th scope="row"><?php echo $dt['id']; ?></th>
      <td><?php echo $dt['firstname']; ?></td>
      <td><?php echo $dt['lastname']; ?></td>
      <td><?php echo $dt['DOB']; ?></td>
      <td><?php echo $dt['joining']; ?></td>
      <td><?php echo$dt['Mno']; ?></td>
      <td><a  href="<?php echo "/mvc/view/edit.php?id=".$dt['id']; ?>" class="btn btn-success">Edit</a></td>
      <td><a href=<?php echo "/mvc/controller/delete.php?id=".$dt['id']; ?> class="btn btn-danger">Delete</a></td>
    </tr>
    
  <?php endwhile; ?>
  <?php else: ?>
  <div class="alert alert-info" role="alert">no data found add above</div>
  <?php endif; ?>

  </tbody>
</table>
</div>
<?php include "footer.php"; ?>
