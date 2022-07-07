<?php
	include 'includes/header.php';
?>
	<main>
		<div class="bulletin-container">
			<div>
				<?php
		                $sql = "SELECT bulletin_post FROM bulletin ORDER BY id ASC";
		                $query = $conn->query($sql);
		                while($row = $query->fetch_assoc()){
		        ?>
		                <div class="bulletin-post-container">
		                	<div><?php echo $row['bulletin_post'];?></div>
						</div>
		        <?php
		                }
		        ?>
			</div>
		</div>
<?php 
	include 'includes/footer.php';
?>