<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Problem #4 - Code Ninja Test</title>
	<link href="<?php echo base_url( 'public/css/default.css' ); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

	<form action="<?php echo site_url( 'answer/four/validate' ) ?>" method="post" >
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Input String</td>
				<td><input type="text" name="input_string" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Display" /></td>
			</tr>
		</table>
	</form>
	
	<p><a href="<?php echo site_url( '' ) ?>" >Back</a></p>
	
</body>

</html>