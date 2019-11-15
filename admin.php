<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin panel</title>
	<link rel="stylesheet" href="admin.css">
</head>
<body>
	<main>
		<div class="main__content">
			<h1>Timer settings</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur illo tenetur recusandae nam deleniti, minus?</p>
			<table id="timers">
				<tr>
					<th>Id</th>
					<th>End time</th>
					<th>Work</th>
					<th>Edit</th>
				</tr>
			</table>
		</div>
		<div class="popup__edit">
			<div class="close"><button>x</button></div>
			<h2>Timer edit <span></span></h2>
			<form id="form" method="post" action="edit.php">
				<input id="id" type="number" name="id" value="">
				<div class="form__time">
					<div class="form__hours">
						<label for="hours">Hours</label>
						<input id="hours" type="number" placeholder="0" name="hours" min="0" required="" max="999"> 
					</div>
					<div class="form__minutes">
						<label for="minutes">Minutes</label>
						<input id="minutes" type="number" placeholder="0" name="minutes" min="0" required="" max="60">
					</div>
					<div class="form__seconds">
						<label for="seconds">Seconds</label>
						<input id="seconds" type="number" placeholder="0" name="seconds" min="0" required="" max="60">	
					</div>
				</div>
				<div class="form__button">
					<button type="submit">Edit</button>
				</div>
			</form>
		</div>
		<div id="success" class="popup__success">
			<span>Success update!</span>
		</div>
		
	</main>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="admin.js"></script>
</body>
</html>
