<?php 
	include 'includes/header.php';
?>
	<main>
		<div class="frame">
	    	<table id="myDataTable" class="display">
	        	<thead>
	            	<th>Date</th>
	            	<th>Name</th>
	            	<th>Contact #</th>
	            	<th>Address</th>
	            	<th>Concern Details</th>
	            </thead>
	            <tbody>
	                <?php
	                    $sql = "SELECT concern_name, concern_contact, concern_address, concern, concern_date FROM concern_citizen ORDER BY concern_date DESC";
	                    $query = $conn->query($sql);
	                    while($row = $query->fetch_assoc()){
	                    	$concern_date = date_create($row['concern_date']);
	                    ?>
	                    	<tr>
	                    		<td title="yy/mm/dd"><?php echo date_format($concern_date, 'Y/m/d');?></td>
	                        	<td><?php echo $row['concern_name'];?></td>
	                          	<td><?php echo $row['concern_contact'];?></td>
	                          	<td><?php echo $row['concern_address'];?></td>
	                          	<td><?php echo $row['concern'];?></td>
	                        </tr>
	                    <?php
	                    }
	                ?>
	            </tbody>
	        </table>
		</div>

<?php 
	include 'includes/footer.php';
?>