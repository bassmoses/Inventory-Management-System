<!DOCTYPE html>
<html>
<head>
 <title>Orders List</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

</head>
<body>
<?php include_once'navheader.php'; ?>
<div class="container" style="margin-top: 70px;">
 <div class="row justify-content-center">
  <div class="col-md-10 text-center">
   <?php
 $con = mysqli_connect("localhost","root","","ims");
 require('db.php');


?>
<!-- Button trigger modal -->

<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
 <thead>
  <tr>
   <th>Client Name</th>
   <th>Item Name</th>
   <th>quantity</th>
   <th>Amount Paid</th>
   <th>payment_type</th>
    <th>Date-time</th>
   <th>Update</th>
   <th>Delete</th>
  </tr>
 </thead>
 <tbody>
  <?php
$Show = mysqli_query($con, "SELECT * FROM orders");
while($r = mysqli_fetch_array($Show)): ?>
    <tr>
     <td><?php echo $r['username']; ?></td>
     <td><?php echo $r['item_name']; ?></td>
     <td><?php echo $r['quantity']; ?></td>
     <td><?php echo $r['amount_paid']; ?></td>

     <td><?php echo $r['payment_type']; ?></td>
     <td><?php echo $r['date_time']; ?></td>


     <td><a href="update.php?update_id=<?php echo $r['id']; ?>" class="btn btn-warning">
  Update
</a></td>
     <td><a href="delete.php?delete_id=<?php echo $r['id']; ?>" class="btn btn-danger">
  Delete
</a></td>
    </tr>
    <?php endwhile; ?>
 </tbody>
 </table>
  </div><!-- col -->
 </div><!-- row -->
</div><!-- container -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>

</html>