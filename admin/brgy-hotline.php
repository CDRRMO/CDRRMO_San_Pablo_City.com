<?php
	include 'includes/header.php';
?>
	<main>
		<div class="evacuation-center">
			<div class="heading">BARANGAY HOTLINE</div>
			<div class="barangay">
				<?php
	                $sql = "SELECT brgy_name, brgy_chairman, brgy_hotline FROM brgy ORDER BY brgy_name ASC";
	                $query = $conn->query($sql);
	                while($row = $query->fetch_assoc()){
	            ?>
	                <div>
						<h3>BRGY. <?php echo strtoupper($row['brgy_name']);?></h3>
						<p>HOTLINE</p>
						<div>
							<a href="tel:<?php echo $row['brgy_hotline'];?>"><?php echo $row['brgy_hotline'];?></a>
						</div>
					</div>
	            <?php
	                }
	            ?>
			</div>
		</div>
<?php 
	include 'includes/footer.php';
?>