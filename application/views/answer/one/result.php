<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Problem #1 - Exam For Nyl Brian Ong</title>
	<link href="<?php echo base_url( 'public/css/default.css' ); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

	<p>Result for date: <b><?php echo $date ?></b></p>
	
	<?php if( $result === FALSE ) : ?>
		<p>Please supply a valid date</p>
	<?php else : ?>
		<?php foreach( $result as $value ): ?>
			<p><?php echo $value; ?></p>
		<?php endforeach; ?>
	<?php endif; ?>
	
	<p><a href="<?php echo site_url( 'answer' ) ?>" >Back</a></p>
	
</body>

</html>