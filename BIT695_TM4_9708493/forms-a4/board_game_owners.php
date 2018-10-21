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
		<div class="row"><div class="col-25"></div><div class="col-75"><h3>Aficionados board game owners were form</h3><p>You must fill out all fields before submitting.</p></div></div>
		<div class="row"><div class="col-25"><label for="memberid">Member ID</label></div><div class="col-75"><input type="text" id="memberid" name="memberid" pattern="[0-9]+" title="Can contain only numbers." required autofocus></div></div>
	
		
		<div class="row"><div class="col-25"><label for="boardgame">Board game </label></div><div class="col-75"><input type="text" id="boardgame" name="boardgame" required></div></div>
		
		<div class="row"><div class="col-25"></div><div class="col-75"><input type="submit" name="submit" class="button" value="Add to database"></div></div>
</form>
</div>
</body>
</html>