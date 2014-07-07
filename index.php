<?php require 'password_logic.php' ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Password Generator</title>
  <meta name="description" content="Bill's Password Generator">
  <meta name="author" content="Bill Brikiatis">

  <link rel="stylesheet" href="css/style.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
	<body>
		<h1>Bill's Password Generator</h1>
		<div><h2><?php echo $multiple_words; ?></h2></div>
		<form name="user_config" action="index.php" method="post">
			<label># of Words</label>
			<select name="words">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select><br>
			<input type="checkbox" name="numbers" value="on"></label>Add a number</label><br>
			<input type="checkbox" name="symbols" value="on"><label>Add a symbol</label><br>
			<input type="submit" name="Password" value="New Password">
		</form>	
	</body>
</html>