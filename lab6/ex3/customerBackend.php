<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>448Lab 6 Exercise 3</title>
		<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php
		$ship = $_POST["ship1"];
		
		if($ship == "FREE 7 Day Shipping")
			$shCost = 0;
		else if($ship == "$50 Over Night Shipping")
			$shCost = 50;
		else if($ship == "$5 Three-Day Shipping")
			$shCost = 5;
		else
			$shCost = " uh oh";
	?>
	<div id="title">
		<h1 id="receiptH1">Thank you for your purchase!</h1>
	</div>
	<div class="items" id="item2">
		<center>
			<h2>Receipt</h2>
		</center>
		<table>
			<tr>
				<th></th>
				<th>Quantity</th>
				<th>Cost Per Item</th>
				<th>Sub Total</th>
			</tr>
			<tr>
				<th>"Forest Path"</th>
				<td><?php echo $_POST["order1"]; ?></td>
				<td>$30</td>
				<td>$<?php echo ($_POST["order1"] * 30); ?></td>
			</tr>
			<tr>
				<th>"Cliffside"</th>
				<td><?php echo $_POST["order2"]; ?></td>
				<td>$50</td>
				<td>$<?php echo ($_POST["order2"] * 50); ?></td>
			</tr>
			<tr>
				<th>"La cabane cachée"</th>
				<td><?php echo $_POST["order3"]; ?></td>
				<td>$17</td>
				<td>$<?php echo ($_POST["order3"] * 17); ?></td>
			</tr>
			<tr>
				<th>Shipping</th>
				<td colspan="2"><?php echo $ship; ?></td>
				<td>$<?php echo $shCost; ?></td>
			</tr>
			<tr>
				<th colspan="3">Total Cost</th>
				<th>$<?php echo (($_POST["order1"] * 30) + ($_POST["order2"] * 50) + ($_POST["order3"] * 17) + $shCost); ?></td>
			</tr>
		</table>
	</div>
	<div class="cart">
		<p id="receiptP">For testing purposes, here is your password: <code><?php echo $_POST["pw"]; ?></code></p>
	</div>
</body>