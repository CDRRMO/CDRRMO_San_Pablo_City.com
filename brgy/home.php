<?php
	include 'includes/header.php';
?>
	<main>
		<div class="add-btn">
			<a href="javascript:void(0);" class="page-btn update-brgy" data-id="<?php echo $_SESSION['admin'];?>">Update</a>
		</div>
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
		<div class="evacuation-center">
			<div class="heading" style="color:black;">LIST OF BARANGAYS IN SAN PABLO CITY</div>
			<div class="barangay">
				<?php
					$brgy_id = $_SESSION['admin'];
	                $sql = "SELECT brgy_name, brgy_chairman, brgy_hotline, availability, brgy_address FROM brgy WHERE id = $brgy_id";
	                $query = $conn->query($sql);
	                while($row = $query->fetch_assoc()){
	                	$avail_slot = $row['availability'];
	                	if($avail_slot == "0"){
	                		$avail_slot = "<span class='full'>FULL</span>";
	                	}
	            ?>
	                <div style="color:black;">
						<h3>BRGY. <?php echo strtoupper($row['brgy_name']);?></h3>
						<p><?php echo $row['brgy_address'];?></p>
						<div >
							<a href="../navigation_map/navigation.php?destination=<?php echo $row['brgy_address'];?>"><i style="color:black;">navigate direction</i></a>
						</div>
						<p>EMERGENCY HOTLINE</p>
						<div>
							<a style="color:black;" href="tel:<?php echo $row['brgy_hotline'];?>"><?php echo $row['brgy_hotline'];?></a>
						</div>
						<p>Available slot</p>
						<div>
							<p><?php echo $avail_slot;?></p>
						</div>
					</div>
	            <?php
	                }
	            ?>
			</div>
		</div>
<?php 
	include 'includes/footer.php';
	include 'modal/modal-brgy-update.php';
?>

<script type="text/javascript">
	$(function(){
		$('.update-brgy').click(function(e){
		    e.preventDefault();
		    var id = $(this).data('id');
		    getRowBrgy(id);
		    $('#update-brgy').modal('show');
		});
	});

	function getRowBrgy(id){
		$.ajax({
	    	type: 'POST',
	    	url: 'sql/row-brgy.php',
	    	data: {id:id},
	    	dataType: 'json',
	    	success: function(response){
	    		$('.brgy-id').val(response.id);
	    		$('.brgy-name').val(response.brgy_name);
	    		$('.brgy-chairman').val(response.brgy_chairman);
	    		$('.brgy-hotline').val(response.brgy_hotline);
	    		$('.brgy-availability').val(response.availability);
	    		$('.brgy-address').val(response.brgy_address);
	    	}
	  	});
	}
</script>