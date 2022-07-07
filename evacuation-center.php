<?php
	include 'includes/header.php';
?>
	<main>
		<div class="evacuation-center">
			<div class="heading">EVACUATION CENTERS IN SAN PABLO CITY</div>
			<div class="frame">
				<div>
					<table id="myDataTable" class="display">
		        	<thead>
		            	<th>Brgy. Name</th>
		            	<th>Address</th>
		            	<th>Emergency Hotline</th>
		            	<th>Available Slot</th>
		            </thead>
		            <tbody>
		                <?php
					
			                $sql = "SELECT brgy_name, brgy_chairman, brgy_hotline, availability, brgy_address FROM brgy ORDER BY brgy_name ASC";
			                $query = $conn->query($sql);
			                while($row = $query->fetch_assoc()){
			                	$avail_slot = $row['availability'];
			                	if($avail_slot == "0"){
			                		$avail_slot = "<span class='full'>FULL</span>";
			                	}
			            ?>
		                    	<tr>
		                        	<td>BRGY. <?php echo strtoupper($row['brgy_name']);?></td>
		                          	<td class="tbl-brgy-address">
		                          		<?php echo $row['brgy_address'];?>
		                          		<a href="navigation_map/navigation.php?destination=<?php echo $row['brgy_address'];?>"><i>navigate direction</i></a>
		                          	</td>
		                          	<td><a href="tel:<?php echo $row['brgy_hotline'];?>"><?php echo $row['brgy_hotline'];?></a></td>
		                          	<td><?php echo $avail_slot;?></td>
		                        </tr>
		                    <?php
		                    }
		                ?>
		            </tbody>
		        </table>
				</div>
			</div>
		</div>
<?php 
	include 'includes/footer.php';
?>