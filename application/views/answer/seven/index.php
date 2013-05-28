<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Problem #7 - Code Ninja Test</title>
	<link href="<?php echo base_url( 'public/css/default.css' ); ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" language="javascript" src="<?php echo base_url( 'public/js/jquery-1.9.1.js' ); ?>"></script>
	<script type="text/javascript" language="javascript">
		
		// a jQuery plugin would be ideal for this problem, but I didn't use that approach due to short exam time
		
		var previous = 'nav1';
		
		$( document ).ready( function() {
			
			$( 'li' ).bind( 'click', function() {
				selectContent( $( this ).attr( 'id' ) );
			});
			
			selectContent( 'nav1' );
			
		});
		
		function selectContent( clickedID ) {
			
			previous = $( '.selected' ).attr( 'id' );
			
			if( previous == undefined || previous == clickedID ) {
				$( '#' + clickedID ).addClass( 'selected' );
				return true;
			}
			
			$( '.selected' ).removeClass( 'selected' );
			
			prevID = previous.replace( 'nav', 'content' );
			curID = clickedID.replace( 'nav', 'content' );
			
			scrollerOffset = $( '#scroller' ).offset();
			prevOffset = $( '#' + prevID ).offset();
			curOffset = $( '#' + curID ).offset();
			
			adjustment = curOffset.left - prevOffset.left;
			
			$( '#scroller' ).animate({ left: '-=' + adjustment  }, 1000, function() {});
			
			$( '#' + clickedID ).addClass( 'selected' );
		}
		
	</script>
	
</head>

<body>

	<div class="mainContainer">

		<ul class="navigation">
			<li id="nav1">Navigation 1</li>
			<li id="nav2">Navigation 2</li>
			<li id="nav3">Navigation 3</li>
			<li id="nav4">Navigation 4</li>
			<li id="nav5">Navigation 5</li>
			<li id="nav6">Navigation 6</li>
		</ul>
		
		<div class="container">
			<div id="scroller">
				<div class="bigContent" id="content1">1</div>
				<div class="bigContent" id="content2">2</div>
				<div class="bigContent" id="content3">3</div>
				<div class="bigContent" id="content4">4</div>
				<div class="bigContent" id="content5">5</div>
				<div class="bigContent" id="content6">6</div>
			</div>
		</div>
		
		<div class="spacer"></div>
		
	</div>
	
</body>

</html>