//Scripts for install page

$(document).ready(function() {

	$('button.config_submit').click(function(event){
		event.preventDefault();

		//Validate

		function validate(fields)
		{
			var errorString = '';
			$.each(fields,function(){
				if ($(this).val() === '')
					{
						$(this).addClass('ui-state-error');
						errorString += 'error';
					}
				});
			return errorString;
		}

		var fields = $(this).closest('form').find('input,select');

		var error = validate(fields);

		//Check that base_url has trailing slash
		var baseUrl = $('input[name="base_url"]').val();

		if(baseUrl.charAt( baseUrl.length-1 ) !== "/")
		{
			baseUrlFixed = baseUrl + '/';

			$('input[name="base_url"]').val(baseUrlFixed);
		}

		if (error.length)
		{
			notify('There are empty fields');
			$('div#upshot').html('<p class="config_error">All fields are required. Please fix this.</p>');
			$('input.ui-state-error').focus(function(){$(this).removeClass('ui-state-error');});
		}
		else
		{

			var formVals = $(this).closest('form').serializeArray();
			$.post('install_process.php',formVals,function(data){
				var serverResponse = $.parseJSON(data);
				if (serverResponse.error === true)
					{
						$(window).scrollTop(0);
						notify(serverResponse.message,true);
						$('div#upshot').html(serverResponse.message);
					}
					else
					{
						notify(serverResponse.message);
						$('form').remove();
						$('p#instruction').remove();
						$('div#upshot').html(serverResponse.html);
					}
			});
		}
	});
});
