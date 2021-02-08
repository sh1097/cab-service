<?php include 'header3.php'?>
<h1>All Users</h1>
<div style="padding-top:5%;">

<?php  include('user crud.php');
 
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;
            $record = mysqli_query($con, "SELECT * FROM tbl_user WHERE users_id=$id");
        
           
                $n = mysqli_fetch_array($record);
                $email_id= $n['email'];
                $name = $n['name'];
               $mobile= $n['mobile'];
               $password = $n['password'];
         
                $id=$n['user_id'];
            
        }?>
      
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
$('#dataTable').DataTable({
});
});
</script>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($con, "SELECT * FROM tbl_user "); ?>

<table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%"> 
<thead>
            <tr>
                <th>email_id</th>
				<th>name</th>
                <th>mobile</th>
                <th>dateof signup(YYYY-MM-DD)</th>
                <th>status</th>
                <th>password</th>
            <th>is_admin</th>
			<th >Action</th>
                
            </tr>
        </thead>
	  
		<tbody>
		<?php while ($row = mysqli_fetch_array($results)) {
        if($row['is_admin']==0){ ?>
            <tr>
			<td><?php echo $row['email_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['dateofsignup']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['is_admin']; ?></td>
		
			<td>
			
			
				 <a style="margin-left:6%;"  href="user crud.php?del=<?php echo $row['user_id']; ?>" class="btn btn-outline-danger del_btn">Delete</a> 
			</td>
		</tr>
    <?php }} ?>
 </div>  
</table>
		
	</tbody>
   
    </table>
        </div>
    <div >
    <?php include 'footer2.php' ?>
    </div>
    <style> th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: yellowgreen;
    color: white;
}</style>
        </body>
        </html>
