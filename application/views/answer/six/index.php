<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Problem #6 - Exam For Nyl Brian Ong</title>
	<link href="<?php echo base_url( 'public/css/default.css' ); ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" language="javascript">
		var url = "<?php echo site_url( 'answer/six/validate' ); ?>";
	</script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url( 'public/js/jquery-1.9.1.js' ); ?>"></script>
	<script type="text/javascript" language="javascript">

		$( document ).ready( function() {
			$( '#submit' ).bind( 'click', function() {
				
				$.ajax( {
					'type' : 'POST', 
					'url' : url,  
					'data' : $( '#form' ).serialize(),
					'dataType' : 'json'
				}).done( function( data ) {
					
					if( data.result == 'failed' ) {
						$( '#result' ).html( data.errors );
						$( '#result' ).addClass( 'error' );
						$( '#result' ).removeClass( 'success' );
					}
					else{
						$( '#result' ).html( 'Data successfully saved' );
						$( '#result' ).removeClass( 'error' );
						$( '#result' ).addClass( 'success' );
					}
					
				});
			});
		});
	</script>
	
</head>

<body>

	<div id="result">
		
	</div>

	<form action="" onsubmit="return false;" id="form" >
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>First Name</td>
				<td><input type="text" name="first_name" /></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="last_name" /></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" /></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="button" value="Submit" id="submit" /></td>
			</tr>
		</table>
	</form>
	
	<p><a href="<?php echo site_url( '' ) ?>" >Back</a></p>
	
</body>

</html>