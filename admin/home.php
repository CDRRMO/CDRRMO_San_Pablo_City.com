<?php
	include 'includes/header.php';
?>
	<div class="breadcrumbs">
	    <span>Admin</span>
	    <span>&gt;</span>
	    <span class="active">Home</span>
	</div>
	<main class="home">
		<div class="add-btn">
			<a href="javascript:void(0);" class="page-btn update-record" data-id="1">Update</a>
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
		<?php
			$sql = "SELECT mission, vision, about FROM home WHERE id = 1";
		    $query = $conn->query($sql);
            $row = $query->fetch_assoc();
		
			echo '<div class="information">
				<div class="mission">
					<h2>Mission</h2>
					<p>'.$row["mission"].'</p>
				</div>
				<div class="vision">
					<h2>Vision</h2>
					<p>'.$row["vision"].'</p>
				</div>
			</div>
			<div class="information">
				<div class="about">
					<h2>About CDRRMO</h2>
					<p>'.$row["about"].'</p>
				</div>
			</div>';
		?>
<?php 
	include 'includes/footer.php';
	include 'modal/modal-home.php';
?>
<script type="text/javascript">
	$(function(){
		$('.update-record').click(function(e){
		    e.preventDefault();
		    var id = $(this).data('id');
		    getRowHome(id);
		    $('#update-record').modal('show');
		});
	});
	function getRowHome(id){
		$.ajax({
	    	type: 'POST',
	    	url: 'sql/row-home.php',
	    	data: {id:id},
	    	dataType: 'json',
	    	success: function(response){
	    		$('.home-mission').val(response.mission);
	    		$('.home-vision').val(response.vision);
	    		$('.home-about').val(response.about);
	    	}
	  	});
	}
</script>