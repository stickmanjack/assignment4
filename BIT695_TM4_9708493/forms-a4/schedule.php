<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Assignment 2 form</title>

  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="validate.js"></script>
</head>

<body>
<div class="container">

<form action="validate.php" method="post">
		<div class="row"><div class="col-25"></div><div class="col-75"><h3>Aficionados schedule form</h3><p>You must fill out all fields before submitting.</p></div></div>
		
		<div class="row"><div class="col-25"><label for="date">Date </label></div><div class="col-75"><input type="text" id="date" name="date" pattern="\d{1,2}/\d{1,2}/\d{4}" title="please enter a valid date e.g. dd/mm/yyyy" required></div></div>
		
		<div class="row"><div class="col-25"><label for="date">Venue </label></div><div class="col-75"><input type="text" id="venue" name="venue" title="please enter a valid venue" required></div></div>

		<div class="row"><div class="col-25"><label for="event">Event </label></div><div class="col-75"><input type="text" id="event" name="event" required></div></div>
		
		<div class="row"><div class="col-25"><label for="notes">Notes </label></div><div class="col-75"><textarea rows="6" id="notes" name="notes" required></textarea></div></div>
		
		<div class="row"><div class="col-25"></div><div class="col-75"><input type="submit" name="submit" class="button" value="Add to database"></div></div>
</form>
</div>
</body>
</html>