<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>448Lab6 Exercise 2</title>
</head>
<body style="padding:25px;"> 
	<?php
	$q = array();
	$a = array();
	
	$q[1] = $_POST["whatTom"];
	$a[1] = "A fish";
	
	$q[2] = $_POST["whereTom"];
	$a[2] = "Clinton Lake";
	
	$q[3] = $_POST["foodTom"];
	$a[3] = "Pebbles";
	
	$q[4] = $_POST["songTom"];
	$a[4] = "Lachrimae by John Dowland";
	
	$q[5] = $_POST["answerTom"];
	$a[5] = "Profile page from Lab 5 Exercise 3";
	
	$score = 0;
	for($i=1; $i<=count($q); $i++){
		if($q[$i] == $a[$i])
			$score ++;
	}
	?>
	<h1 style="font-family:courier;">Score: <?php echo $score . " out of " . count($q) . " answered correctly." ?></h1>
	<h1 style="font-family:courier;">Grade: <?php echo 100* $score / count($q) . "%" ?></h1>

	<form style="font-family:courier;">
		<p><b>Question 1: </b>What is Thomas?</p>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="human" name="whatTom" value="A human">
				<label for="human">A human</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom;" id="dog" name="whatTom" value="A dog">
				<label for="dog">A dog</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom;" id="fish" name="whatTom" value="A fish">
				<label for="fish">A fish</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom;" id="marble" name="whatTom" value="A marble">
				<label for="marble">A marble</label><br>
		
		<p style="padding-left: 25px;">You answered: <?php echo $q[1]; ?><br>Correct answer: <?php echo $a[1]; ?></p><br>
				
				
		<p><b>Question 2: </b>Where is Thomas from?</p>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="lakeC" name="whereTom" value="Clinton Lake">
				<label for="lakeC">Clinton Lake</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="lakeW" name="whereTom" value="Wilson Lake">
				<label for="lakeW">Wilson Lake</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="lakeO" name="whereTom" value="Lake Olathe">
				<label for="lakeO">Lake Olathe</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="pacific" name="whereTom" value="Pacific Ocean">
				<label for="pacific">Pacific Ocean</label><br>
		
		<p style="padding-left: 25px;">You answered: <?php echo $q[2]; ?><br>Correct answer: <?php echo $a[2]; ?></p><br>


		<p><b>Question 3: </b>What does Thomas eat?</p>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="chips" name="foodTom" value="Chips">
				<label for="chips">Chips</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="carrots" name="foodTom" value="Carrots">
				<label for="carrots">Carrots</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="salmon" name="foodTom" value="Salmon">
				<label for="salmon">Salmon</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="pebbles" name="foodTom" value="Pebbles">
				<label for="pebbles">Pebbles</label><br>
					
		<p style="padding-left: 25px;">You answered: <?php echo $q[3]; ?><br>Correct answer: <?php echo $a[3]; ?></p><br>
		
		<p><b>Question 4: </b>What song does Thomas like to listen to?</p>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="B4" name="songTom" value="B4 by Ginger Root">
				<label for="B4">"B4" by Ginger Root</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="kila" name="songTom" value="Jasmine by Kila">
				<label for="kila">"Jasmine" by Kila</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="lachrimae" name="songTom" value="Lachrimae by John Dowland">
				<label for="lachrimae">"Lachrimae" by John Dowland</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="skyrim" name="songTom" value="Secunda by Jeremy Soule">
				<label for="skyrim">"Secunda" by Jeremy Soule</label><br>  
				
		<p style="padding-left: 25px;">You answered: <?php echo $q[4]; ?><br>Correct answer: <?php echo $a[4]; ?></p><br>
		
		
		<p><b>Question 5: </b>Where can the answers to the questions above be found?</p>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="bio" name="answerTom" value="Profile page from Lab 5 Exercise 3">
				<label for="bio">Profile page from <a href="../../lab5/ex3/ex3.html" target="_blank" rel="noopener noreferrer">Lab 5 Exercise 3</a></label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="google" name="answerTom" value="Google">
				<label for="google">Google</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="watson" name="answerTom" value="Watson Library">
				<label for="watson">Watson Library</label><br>
			<input type="radio" style="width:17px; height:17px;vertical-align: bottom; " id="all" name="answerTom" value="All of the above">
				<label for="all">All of the above</label><br>
				
		<p style="padding-left: 25px;">You answered: <?php echo $q[5]; ?><br>Correct answer: <?php echo $a[5]; ?></p><br>

					
	</form>
</body>