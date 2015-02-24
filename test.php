<html>
 <head>
  <title>PHP test</title>
 </head>
 <body>
	<?php
	 $x = 1;
	 for($x=1;$x<=10;$x++){
	 echo "This is ".$x.'.'."</br>";}
	?>

	<?php 
	 echo $_SERVER['HTTP_USER_AGENT']; 
	?>
	<?php echo '<p>Hello World</p>'; ?>
	<?php phpinfo(); ?>
 </body>
</html>
