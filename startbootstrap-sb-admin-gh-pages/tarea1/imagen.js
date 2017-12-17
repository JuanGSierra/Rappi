$(document).ready( function() {

  // Disable scroll when focused on a number input.
   $('form').on('focus', 'input[type=number]', function(e) {
       $(this).on('wheel', function(e) {
           e.preventDefault();
       });
   });

   // Restore scroll on number inputs.
   $('form').on('blur', 'input[type=number]', function(e) {
       $(this).off('wheel');
   });

   // Disable up and down keys.
   $('form').on('keydown', 'input[type=number]', function(e) {
       if ( e.which == 38 || e.which == 40 )
           e.preventDefault();
   });

    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;

		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }

		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#fotografiaCargada').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#fotografia").change(function(){
		    readURL(this);
		});
	});
