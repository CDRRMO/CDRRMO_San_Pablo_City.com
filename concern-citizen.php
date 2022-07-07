<?php
	include 'includes/header.php';
?>
	<main>
		<div>
			<form action="" method="post" class="concern-citizen-form" autocomplete="off">
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
				</div>
		        <div class="form-header">
		            <h4>Concern Citizen Form</h4>
		        </div>
		        <div class="form-body">
		        	<div class="form-div-wrapper">
		            	<label class="form-fields">Name: </label>
		            	<input class="form-fields cctizen-name" type="text" name="cctizen-name" placeholder="Full name">
		          	</div>
		          	<div class="form-div-wrapper">
		            	<label class="form-fields">Contact #: </label>
		            	<input class="form-fields cctizen-contact" type="text" name="cctizen-contact" placeholder="e.g. 9976933975">
		          	</div>
		          	<div class="form-div-wrapper">
		            	<label class="form-fields">Address: </label>
		            	<textarea class="form-fields cctizen-address" name="cctizen-address" rows="3" placeholder="Full address of the place in concern"></textarea>
		          	</div>
		          	<div class="form-div-wrapper">
		            	<label class="form-fields">Concern: </label>
		            	<textarea class="form-fields cctizen-concern" name="cctizen-concern" rows="5" placeholder="Full details"></textarea>
		          	</div>
		          	<div class="citizen-message">
		          		<span class="form-message"></span>
		          	</div>
		        </div>
		        <div class="form-footer">
		          	<button type="submit" class="submit-concern-citizen page-btn">Submit</button>
		        </div>
		    </form>
		</div>
<?php 
	include 'includes/footer.php';
?>