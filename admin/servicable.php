
<?php include('header.php');?>.........
<h1>Servicable locations</h1>
<div style="padding-top:5%;">

<?php  include('../user crud.php');
 
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


<?php $results = mysqli_query($con, "SELECT * FROM tbl_location WHERE is_available=1 "); ?>

<table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%"> 
<thead>
            <tr>
            <th>ID</th>
                <th>name</th>
                <th>Distance</th>
                <th>is_available</th>
           <th>Action</th>
            
		
                
            </tr>
        </thead>
	  
		<tbody>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['distance'];?></td>
            <td><?php echo $row['is_available']; ?></td>
     
            <td>
         
			
			
            <a style="margin-left:6%;"  href="approved.php?del=<?php echo $row['id']; ?>" class="btn btn-outline-danger Sdel_btn">Cancel</a> 
       </td>
       
		
		
		</tr>
    <?php } ?>
 </div>  
</table>
		
	</tbody>
   
    </table>
        </div>
    <div >
    <?php include '../footer2.php' ?>
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
