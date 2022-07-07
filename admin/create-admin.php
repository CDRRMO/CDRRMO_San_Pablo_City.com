<?php 
	include 'includes/header.php';
?>
	<div class="breadcrumbs">
		<span>Account</span>
		<span>&gt;</span>
		<span class="active">Add Admin</span>
	</div>
	<main>
		<div class="add-btn">
			<a href="javascript:void(0);" class="page-btn add-admin">Add Admin</a>
		</div>
		<div class="frame">
			<?php 
				if(isset($_SESSION['message'])){
				?>
					<div class="display-message">
						<span>
							<?php 
								echo $_SESSION['message'];
								unset($_SESSION['message']);
							?>
						</span>
						<button type='button' class="close-message">&times;</button>
					</div>
				<?php
				}
			?>
				
	    	<table id="myDataTable" class="display">
	        	<thead>
	            	<th>Name</th>
	            	<th>Username</th>
	            	<th>Date Created</th>
	            	<th>Created By</th>
	            	<th>Action</th>
	            </thead>
	            <tbody>
	                <?php
	                    $sql = "SELECT id,name,username,date_created,created_by FROM admin ORDER BY name ASC";
	                    $query = $conn->query($sql);
	                    while($row = $query->fetch_assoc()){
	                    	$date_created = date_create($row['date_created']);
	                    ?>
	                    	<tr>
	                        	<td><?php echo $row['name'];?></td>
	                          	<td><?php echo $row['username'];?></td>
	                          	<td title="yy/mm/dd"><?php echo date_format($date_created, 'Y/m/d');?></td>
	                          	<td><?php echo $row['created_by'];?></td>
	                          	<form action="admin-delete.php" method="POST">
	                          	<td><button name="delete" style="background: red;color:black;padding: 7px 7px;border-radius: 5px;box-shadow: 0px 0px 1px 0px black;">DELETE</button>
	                          		<input type="hidden" name="deleteID" value="<?php echo $row['id']?>">
	                          	</td>
	                          	</form>
	                        </tr>
	                    <?php
	                    }
	                ?>
	            </tbody>
	        </table>
		</div>

<?php 
	include 'includes/footer.php';
	include 'modal/modal-admin.php';
?>

<script type="text/javascript">
	$(function(){
		$('.add-admin').click(function(e){
		    e.preventDefault();
		    $('#add-admin').modal('show');
		});
	});
</script>