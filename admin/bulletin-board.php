<?php
	include 'includes/header.php';
?>
	<div class="breadcrumbs">
		<span>Update</span>
		<span>&gt;</span>
		<span class="active">Bulletin Board</span>
	</div>
	<main>
		<div class="add-btn">
			<a href="javascript:void(0);" class="page-btn add-post">Add a post</a>
		</div>
		<div>
			<?php
	                $sql = "SELECT id, bulletin_post FROM bulletin ORDER BY id DESC";
	                $query = $conn->query($sql);
	                while($row = $query->fetch_assoc()){
	        ?>
	                <div class="bulletin-post-container">
	                	<div><?php echo $row['bulletin_post'];?></div>
	                	<form action="bulletin-board-delete.php" method="POST">
	                	<center><button name="delete" style="background: red;color:black;padding: 4px 4px;border-radius: 5px;box-shadow: 0px 0px 1px 0px black;">Remove</button></center>
	                	<input type="hidden" name="deleteID" value="<?php echo $row['id'];?>">
	                	</form>
					</div>
	        <?php
	                }
	        ?>
		</div>

<?php 
	include 'includes/footer.php';
	include 'modal/modal-bulletin.php';
?>

<script type="text/javascript">
	$(function(){
		$('.add-post').click(function(e){
		    e.preventDefault();
		    $('#add-post').modal('show');
		});
	});
</script>