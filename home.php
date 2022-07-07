<?php
	include 'includes/header.php';
?>
	<style>
	* {box-sizing: border-box}
	body {font-family: Verdana, sans-serif; margin:0;background: white}
	.mySlides {display: none}
	img {vertical-align: middle;}

	header{
		width: 100vw;
		position: absolute;
	    top: 75px;
	    left: 50%;
	    transform: translate(-50%, -50%);
	    background: transparent;
	    border-bottom: none;
	    z-index: 1
	}
	.mySlides img{
		height: 100vh;
	}

	/* Slideshow container */
	.slideshow-container {
	  position: relative;
	  margin: auto;
	  height: 100vh;
	}

	/* Next & previous buttons */
	.prev, .next {
	  cursor: pointer;
	  position: absolute;
	  top: 50%;
	  width: auto;
	  padding: 16px;
	  margin-top: -22px;
	  color: white;
	  font-weight: bold;
	  font-size: 18px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
	  right: 0;
	  border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover, .next:hover {
	  background-color: rgba(0,0,0,0.8);
	}

	/* Caption text */
	.text {
	    color: #FFF;
	    background-color: transparent;
	    font-size: 22px;
	    padding: 8px 12px;
	    position: absolute;
	    top: 35%;
	    left:0;
		right:0;
		margin-left:auto;
		margin-right:auto;
	    max-width: 768px;
	    text-align: center;
		
	}
	
	/* The dots/bullets/indicators */
	.dot {
	  cursor: pointer;
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active, .dot:hover {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .prev, .next,.text {font-size: 11px}
	}
	</style>
	<div class="slideshow-container">

		<?php
			$sql = "SELECT mission, mission_background, vision, vision_background, about, about_background FROM home WHERE id = 1";
		    $query = $conn->query($sql);
            $row = $query->fetch_assoc();
		
			echo '<div class="mySlides fade">
		  			<img src="images/background/'.$row["mission_background"].'" style="width:100%">
		  			<div class="text"><h2>Mission</h2>'.$row["mission"].'</div>
					</div>

				<div class="mySlides fade">
				  <img src="images/background/'.$row["vision_background"].'" style="width:100%">
				  <div class="text"><h2>Vision</h2>'.$row["vision"].'</div>
				</div>

				<div class="mySlides fade">
				  <img src="images/background/'.$row["about_background"].'" style="width:100%">
				  <div class="text"><h2>About</h2>'.$row["about"].'</div>
				</div>';
		?>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
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