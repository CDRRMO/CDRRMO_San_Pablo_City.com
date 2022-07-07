<?php
	include 'includes/header.php';
?>
	<main>
		<?php
			$sql = "SELECT globe, smart, landline, red_cross, dotc, pnp, bfp, dpwh FROM emergency_hotline WHERE id = 1";
		    $query = $conn->query($sql);
            $row = $query->fetch_assoc();
		
		echo 
			'<div class="e-hotline-top">
				<div class="heading">EMERGENCY HOTLINE</div>
				<div class="providers" >
					<div class="globe" >
						<h3>Globe</h3>
						<div>
							<a href="tel:'.$row["globe"].'">'.$row["globe"].'</a>
						</div>
					</div>
					<div class="smart">
						<h3>Smart</h3>
						<div>
							<a href="tel:'.$row["smart"].'">'.$row["smart"].'</a>
						</div>
					</div>
					<div class="landline">
						<h3>Landline</h3>
						<div>
							<a href="tel:'.$row["landline"].'">'.$row["landline"].'</a>
						</div>
					</div>
				</div>
			</div>
			<div class="e-hotline-bottom">
				<div>
					<div>
						<h3>RED CROSS</h3>
						<p>EMERGENCY HOTLINE</p>
						<div>
							<a href="tel:'.$row["red_cross"].'">'.$row["red_cross"].'</a>
						</div>
					</div>
					<div>
						<h3>DOTC</h3>
						<p>EMERGENCY HOTLINE</p>
						<div>
							<a href="tel:'.$row["dotc"].'">'.$row["dotc"].'</a>
						</div>
					</div>
					<div>
						<h3>PNP</h3>
						<p>EMERGENCY HOTLINE</p>
						<div>
							<a href="tel:'.$row["pnp"].'">'.$row["pnp"].'</a>
						</div>
					</div>
				</div>
				<div>
					<div>
						<h3>BFP</h3>
						<p>EMERGENCY HOTLINE</p>
						<div>
							<a href="tel:'.$row["bfp"].'">'.$row["bfp"].'</a>
						</div>
					</div>
					<div>
						<h3>DPWH</h3>
						<p>EMERGENCY HOTLINE</p>
						<div>
							<a href="tel:'.$row["dpwh"].'">'.$row["dpwh"].'</a>
						</div>
					</div>
				</div>
			</div>
			';
		?>
<?php 
	include 'includes/footer.php';
?>