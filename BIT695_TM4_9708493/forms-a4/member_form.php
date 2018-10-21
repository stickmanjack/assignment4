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
		<div class="row"><div class="col-25"></div><div class="col-75"><h3>Aficionados member form</h3><p>You must fill out all fields before submitting.</p></div></div>
		<div class="row"><div class="col-25"><label for="memberid">Member ID</label></div><div class="col-75"><input type="text" id="memberid" name="memberid" pattern="[0-9]+" title="Can contain only numbers." required autofocus></div></div>
	
		<div class="row"><div class="col-25"><label for="firstname">First name </label></div><div class="col-75"><input type="text" id="firstname" name="firstname" pattern="[a-zA-Z-]+" title="Can contain only letters and hyphens" required=""></div></div>
		
		<div class="row"><div class="col-25"><label for="surname">Surname </label></div><div class="col-75"><input type="text" id="surname" name="surname" pattern="[a-zA-Z-]+" title="Can contain only letters and hyphens" required></div></div>
		
		<div class="row"><div class="col-25"><label for="email">Email </label></div><div class="col-75"><input type="text" id="email" name="email"pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})" title="Please enter a valid email address" required></div></div>
		
		<div class="row"><div class="col-25"><label for="phone">Phone </label></div><div class="col-75"><input type="text" id="phone" name="phone" pattern="[0-9]+" title="use numbers only" required></div></div>
		
		<div class="row"><div class="col-25"><label for="boardgame">Board game </label></div><div class="col-75"><input type="text" id="boardgame" name="boardgame" required></div></div>
		
		<div class="row"><div class="col-25"><label for="position">Position </label></div><div class="col-75"><input type="text" id="position" name="position" pattern="[0-9]+" title="Can contain only numbers." required></div></div>
		
		<div class="row"><div class="col-25"><label for="date">Date </label></div><div class="col-75"><input type="text" id="date" name="date" pattern="\d{1,2}/\d{1,2}/\d{4}" title="please enter a valid date e.g. dd/mm/yyyy" required></div></div>
		
		<div class="row"><div class="col-25"><label for="event">Event </label></div><div class="col-75"><input type="text" id="event" name="event" required></div></div>
		
		<div class="row"><div class="col-25"><label for="notes">Notes </label></div><div class="col-75"><textarea rows="6" id="notes" name="notes" required></textarea></div></div>
		
		<div class="row"><div class="col-25"></div><div class="col-75"><input type="submit" name="submit" class="button" value="Add to database"></div></div>
</form>
</div>
</body>
</html>