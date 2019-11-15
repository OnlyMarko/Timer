<?php 
include_once ('db.php');
if (!empty($_POST)) {
$id=htmlspecialchars($_POST['id']);
$hours=htmlspecialchars($_POST['hours']);
if ($hours > 999) {
	$hours = 999;
}
$minutes=htmlspecialchars($_POST['minutes']);
if ($minutes > 60) {
	$minutes = 60;
}
$seconds=htmlspecialchars($_POST['seconds']);
if ($seconds > 60) {
	$seconds = 60;
}


mysqli_query($link,"
	UPDATE timer SET h='$hours', m='$minutes', s='$seconds' WHERE id='$id'")
or die(mysqli_error($link));  	
	$query ="SELECT * FROM timer WHERE id = '$id'";
	$result = mysqli_query($link, $query) or die("Error edit" . mysqli_error($link)); 
	if($result){

		while ( $item = mysqli_fetch_assoc($result) ) 
		{
			$timertimeH = $item['h'];
			$timertimeM = $item['m'];
			$timertimeS = $item['s'];
		};
	};
	$timertimeH = ($timertimeH*60*60);
	$timertimeM = ($timertimeM*60);
	$timertimeHMS = $timertimeH + $timertimeM + $timertimeS;
	$currenttime = time();
	$date2 = strtotime(now) + $timertimeHMS;
	$date4 = date("Y-m-d H:i:s", $date2);
	$query ="UPDATE timer SET endtime='$date4', work='1' WHERE id = '$id'";
	$result = mysqli_query($link, $query) or die("Error edit update $result" . mysqli_error($link)); 
	mysqli_close($link);
} else {
	header ('Location: index.php');
};
?>


