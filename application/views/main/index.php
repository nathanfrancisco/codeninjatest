<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello World</title>
	<link href="<?php echo base_url( 'public/css/default.css' ); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

	<p>Testing 123</p>
	
	<ul>
		<li><a href="<?php echo site_url( 'answer' ) ?>" >Sample 1</a></li>
		<li><a href="<?php echo site_url( 'answer/two' ) ?>" >Sample 2</a></li>
		<li><a href="<?php echo site_url( 'answer/three' ) ?>" >Sample 3</a></li>
		<li><a href="<?php echo site_url( 'answer/four' ) ?>" >Sample 4</a></li>
		<li><a href="<?php echo site_url( 'answer/five' ) ?>" >Sample 5</a></li>
		<li><a href="<?php echo site_url( 'answer/six' ) ?>" >Sample 6</a></li>
		<li><a href="<?php echo site_url( 'answer/seven' ) ?>" >Sample 7</a></li>
	</ul>

</body>

</html>