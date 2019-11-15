<?php 

	include ('db.php');
	$query = "SELECT * FROM `timer`";
	$items = mysqli_query($link, $query);
	?>	
	<?php 
	$timers = array();
	while ( $item = mysqli_fetch_assoc($items) ) 
	{	
		
		$timers[] = $item;
		
	}
	
echo json_encode($timers);	
mysqli_close($link);			
?>

