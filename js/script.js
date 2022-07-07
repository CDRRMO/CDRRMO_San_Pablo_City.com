(function ($, root, undefined) {

    $(function () {

    	$(document).ready(function() { 

    		$('#myDataTable').DataTable({
			    responsive: true,
			    "aaSorting": []
			});

			$(document).on('submit', '.concern-citizen-form', function(event) {
		    	event.preventDefault();
		    	var cctizen_name = $('.cctizen-name').val();
		    	var cctizen_contact = $('.cctizen-contact').val();
		    	var cctizen_address = $('.cctizen-address').val();
		    	var cctizen_concern = $('.cctizen-concern').val();
	    		if(cctizen_name == ''){
	    			$('.form-message').html('Please put your name');
	    		}
	    		else if(cctizen_contact == ''){
	    			$('.form-message').html('Provide contact number');
	    		}
	    		else if(cctizen_address == ''){
	    			$('.form-message').html('Provide your address');
	    		}
	    		else if(cctizen_concern == ''){
	    			$('.form-message').html('Fill in the concern box.');
	    		}
	    		else{
	    			jQuery.ajax({
			            type: "POST",
			            url: "sql/add-concern-citizen.php",
			            data: $(".concern-citizen-form").serialize(),
			            dataType: "JSON",
			            cache: false,
			            success: function(strMessage) {
			            	if(strMessage.msg == '1'){
			            		location.reload();
			            	}
			            	else if(strMessage.msg == '2'){
			            		$('.form-message').html('error in saving');
			            	}
			            },
			            error: function(){
							console.log('error in saving');
			        	}
			        });
	    		}
		   	});

      	}); 

      	$(document).on('click', '.close-message', function(event) {
		    event.preventDefault();
		    $('.display-message').slideToggle();
		});

      	/*set active menu*/
		$(function(){
			var path = window.location.href;
			$('header ul > li > a').each(function() {
			    if (this.href === path) {
			       	$(this).addClass('active');
			    }
			});
		});

    });

})(jQuery, this);