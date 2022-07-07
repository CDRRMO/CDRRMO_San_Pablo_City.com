(function ($, root, undefined) {

    $(function () {

    	$(document).ready(function() { 

    		$('#myDataTable').DataTable({
			    responsive: true,
			    "aaSorting": []
			});
    		
			$(document).on('submit', '.add-admin-form', function(event) {
		    	event.preventDefault();
		    	var admin_name = $('.admin-name').val();
		    	var admin_username = $('.admin-username').val();
		    	var admin_password = $('.admin-password').val();
	    		if(admin_name == ''){
	    			$('.modal-message').html('name cannot be empty');
	    		}
	    		else if(admin_username == ''){
	    			$('.modal-message').html('username cannot be empty');
	    		}
	    		else if(admin_password == ''){
	    			$('.modal-message').html('password cannot be empty');
	    		}
	    		else{
	    			jQuery.ajax({
			            type: "POST",
			            url: "sql/add-admin.php",
			            data: $(".add-admin-form").serialize(),
			            dataType: "JSON",
			            cache: false,
			            success: function(strMessage) {
			            	if(strMessage.msg == '1'){
			            		location.reload();
			            	}
			            	else if(strMessage.msg == '2'){
			            		$('.modal-message').html('error in saving');
			            	}
			            	else if(strMessage.msg == '3'){
			            		$('.modal-message').html('Admin account already exists');
			            	}
			            },
			            error: function(){
							console.log('error in saving');
			        	}
			        });
	    		}
		   	});

		   	$(document).on('submit', '.add-home-form', function(event) {
		    	event.preventDefault();
		    	var home_mission = $('.home-mission').val();
		    	var home_vision = $('.home-vision').val();
		    	var home_about = $('.home-about').val();
		    	var formData = new FormData(this);
	    		if(home_mission == ''){
	    			$('.modal-message').html('mission field cannot be empty');
	    		}
	    		else if(home_vision == ''){
	    			$('.modal-message').html('vision field cannot be empty');
	    		}
	    		else if(home_about == ''){
	    			$('.modal-message').html('about field cannot be empty');
	    		}
	    		else{
	    			jQuery.ajax({
			            type: "POST",
			            url: "sql/add-home-record.php",
			            data: formData,
			            dataType: "JSON",
		              	cache:false,
		              	contentType: false,
		              	processData: false,
			            success: function(strMessage) {
			            	if(strMessage.msg == '1'){
			            		location.reload();
			            	}
			            	else if(strMessage.msg == '2'){
			            		$('.modal-message').html('error in saving');
			            	}
			            },
			            error: function(){
							console.log('error in saving');
			        	}
			        });
	    		}
		   	});

		   	$(document).on('submit', '.add-acident-form', function(event) {
		    	event.preventDefault();
		    	var accident_date = $('.accident-date').val();
		    	var accident_location = $('.accident-location').val();
		    	var accident_details = $('.accident-details').val();
	    		if(accident_date == ''){
	    			$('.modal-message').html('date cannot be empty');
	    		}
	    		else if(accident_location == ''){
	    			$('.modal-message').html('location cannot be empty');
	    		}
	    		else if(accident_details == ''){
	    			$('.modal-message').html('details cannot be empty');
	    		}
	    		else{
	    			jQuery.ajax({
			            type: "POST",
			            url: "sql/add-accident-record.php",
			            data: $(".add-acident-form").serialize(),
			            dataType: "JSON",
			            cache: false,
			            success: function(strMessage) {
			            	if(strMessage.msg == '1'){
			            		location.reload();
			            	}
			            	else if(strMessage.msg == '2'){
			            		$('.modal-message').html('error in saving');
			            	}
			            },
			            error: function(){
							console.log('error in saving');
			        	}
			        });
	    		}
		   	});

		   	$(document).on('submit', '.add-hotline-form', function(event) {
		    	event.preventDefault();
		    	var hotline_globe = $('.hotline-globe').val();
		    	var hotline_smart = $('.hotline-smart').val();
		    	var hotline_landline = $('.hotline-landline').val();
		    	var hotline_red_cross = $('.hotline-red-cross').val();
		    	var hotline_dotc = $('.hotline-dotc').val();
		    	var hotline_pnp = $('.hotline-pnp').val();
		    	var hotline_bfp = $('.hotline-bfp').val();
		    	var hotline_dpwh = $('.hotline-dpwh').val();
	    		if(hotline_globe == ''){
	    			$('.modal-message').html('Globe cannot be empty');
	    		}
	    		else if(hotline_smart == ''){
	    			$('.modal-message').html('Smart cannot be empty');
	    		}
	    		else if(hotline_landline == ''){
	    			$('.modal-message').html('Landline cannot be empty');
	    		}
	    		else if(hotline_red_cross == ''){
	    			$('.modal-message').html('Red Cross hotline cannot be empty');
	    		}
	    		else if(hotline_dotc == ''){
	    			$('.modal-message').html('DOTC hotline cannot be empty');
	    		}
	    		else if(hotline_pnp == ''){
	    			$('.modal-message').html('PNP hotline cannot be empty');
	    		}
	    		else if(hotline_bfp == ''){
	    			$('.modal-message').html('BFP hotline cannot be empty');
	    		}
	    		else if(hotline_dpwh == ''){
	    			$('.modal-message').html('DPWH hotline cannot be empty');
	    		}
	    		else{
	    			jQuery.ajax({
			            type: "POST",
			            url: "sql/add-hotline.php",
			            data: $(".add-hotline-form").serialize(),
			            dataType: "JSON",
			            cache: false,
			            success: function(strMessage) {
			            	if(strMessage.msg == '1'){
			            		location.reload();
			            	}
			            	else if(strMessage.msg == '2'){
			            		$('.modal-message').html('error in saving');
			            	}
			            },
			            error: function(){
							console.log('error in saving');
			        	}
			        });
	    		}
		   	});

		   	$(document).on('submit', '.add-brgy-form', function(event) {
		    	event.preventDefault();
		    	var brgy_name = $('.brgy-name').val();
		    	var brgy_chairman = $('.brgy-chairman').val();
		    	var brgy_username = $('.brgy-username').val();
		    	var brgy_password = $('.brgy-password').val();
	    		if(brgy_name == ''){
	    			$('.modal-message').html('brgy. name cannot be empty');
	    		}
	    		else if(brgy_chairman == ''){
	    			$('.modal-message').html('brgy. chairman cannot be empty');
	    		}
	    		else if(brgy_username == ''){
	    			$('.modal-message').html('username cannot be empty');
	    		}
	    		else if(brgy_password == ''){
	    			$('.modal-message').html('password cannot be empty');
	    		}
	    		else{
	    			jQuery.ajax({
			            type: "POST",
			            url: "sql/add-brgy.php",
			            data: $(".add-brgy-form").serialize(),
			            dataType: "JSON",
			            cache: false,
			            success: function(strMessage) {
			            	if(strMessage.msg == '1'){
			            		location.reload();
			            	}
			            	else if(strMessage.msg == '2'){
			            		$('.modal-message').html('error in saving');
			            	}
			            	else if(strMessage.msg == '3'){
			            		$('.modal-message').html('username already taken');
			            	}
			            },
			            error: function(){
							console.log('error in saving');
			        	}
			        });
	    		}
		   	});

		   	$(document).on('submit', '.add-bulletin-post-form', function(event) {
		    	event.preventDefault();
		    	var bulletin_post = $('.bulletin-post').val();
	    		if(bulletin_post == ''){
	    			$('.modal-message').html('please paste embedded code');
	    		}
	    		else{
	    			jQuery.ajax({
			            type: "POST",
			            url: "sql/add-bulletin.php",
			            data: $(".add-bulletin-post-form").serialize(),
			            dataType: "JSON",
			            cache: false,
			            success: function(strMessage) {
			            	if(strMessage.msg == '1'){
			            		location.reload();
			            	}
			            	else if(strMessage.msg == '2'){
			            		$('.modal-message').html('error in saving');
			            	}
			            },
			            error: function(){
							console.log('error in saving');
			        	}
			        });
	    		}
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

    });

})(jQuery, this);