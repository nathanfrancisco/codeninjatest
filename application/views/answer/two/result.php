<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Problem #2 - Code Ninja Test</title>
	<link href="<?php echo base_url( 'public/css/default.css' ); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

	<p>Result for string: <b><?php echo $string ?></b></p>
	
	<?php if( $result === TRUE ) : ?>
		<p>String is a palindrome</p>
	<?php else : ?>
		<p>String is not a palindrome</p>
	<?php endif; ?>
	
	<p><a href="<?php echo site_url( 'answer/two' ) ?>" >Back</a></p>
	
</body>

</html>