<?php 
	include 'includes/header.php';
?>
	<div class="breadcrumbs">
		<span>Update</span>
		<span>&gt;</span>
		<span class="active">Accident Record</span>
	</div>
	<main>
		<div class="add-btn">
			<a href="javascript:void(0);" class="page-btn add-accident-record">Add New Record</a>
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
	            	<th>Date</th>
	            	<th>Location</th>
	            	<th>Details</th>
	            	<th>Added By</th>
	            	<th>Action</th>
	            </thead>
	            <tbody>
	                <?php
	                    $sql = "SELECT accident_record.id,accident_record.accident_date,accident_record.location,accident_record.details,admin.name FROM accident_record LEFT JOIN admin ON accident_record.added_by = admin.id ORDER BY accident_record.accident_date DESC";
	                    $query = $conn->query($sql);
	                    while($row = $query->fetch_assoc()){
	                    	$accident_date = date_create($row['accident_date']);
	                    ?>
	                    	<tr>
	                        	<td title="yy/mm/dd"><?php echo date_format($accident_date, 'Y/m/d');?></td>
	                          	<td><?php echo $row['location'];?></td>
	                          	<td><?php echo $row['details'];?></td>
	                          	<td><?php echo $row['name'];?></td>
	                          	<form action="accident-recdelete.php" method="POST">
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
	include 'modal/modal-accident-record.php';
?>
<script type="text/javascript">
	$(function(){
		$('.add-accident-record').click(function(e){
		    e.preventDefault();
		    $('#add-accident-record').modal('show');
		});
	});
</script>