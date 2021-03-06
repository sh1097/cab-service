<?php include('header.php')
;?>

<h1>Pending Rides</h1>
<div style="padding-top:5%;">

  <?php include('../user crud.php');

  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM tbl_user WHERE users_id=$id");


    $n = mysqli_fetch_array($record);
    $email_id = $n['email'];
    $name = $n['name'];
    $mobile = $n['mobile'];
    $password = $n['password'];

    $id = $n['user_id'];
  } ?>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable({});
    });
  </script>
  <?php if (isset($_SESSION['message'])) : ?>
    <div class="msg">
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>


  <?php $results = mysqli_query($con, "SELECT * FROM tbl_ride WHERE status=1 "); ?>

  <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>from_loc</th>
        <th>To_loc</th>
        <th>Cab_type</th>
        <th>Ride_date(YYYY-MM-DD)</th>
        <th>Total_distance(km)</th>
        <th>Luggage(KG)</th>
        <th>Total_fare</th>
        <th>Action</th>



      </tr>
    </thead>

    <tbody>
      <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
          <td><?php echo $row['From_loc']; ?></td>
          <td><?php echo $row['To_loc']; ?></td>
          <td><?php echo $row['CAB_type']; ?></td>
          <td><?php echo $row['Ride_date']; ?></td>
          <td><?php echo $row['Total_distance']; ?></td>
          <td><?php echo $row['Luggage']; ?></td>
          <td><?php echo $row['Total_fare']; ?></td>
          <td>
          <a style="margin-left:6%;"  href="approved.php?accept=<?php echo $row['Ride_id']; ?>" class="btn btn-outline-success Saccept_btn">accept</a> 
			
			
      <a style="margin-left:6%;"  href="approved.php?del=<?php echo $row['Ride_id']; ?>" class="btn btn-outline-danger Sdel_btn">Cancel</a> 
            
          </td>



        </tr>
      <?php } ?>
</div>
</table>

</tbody>

</table>
</div>
<div>
  <?php include '../footer2.php' ?>
</div>
<style>
  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: yellowgreen;
    color: white;
  }
</style>
</body>

</html>