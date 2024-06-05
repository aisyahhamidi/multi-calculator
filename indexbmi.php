<!DOCTYPE html>
<html lang="en">
<?php require_once ('inc/header.php')?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./style.css">
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet"> -->
</head>
<body>
	<section class="container">
		<div class="claculator">
			<div class="forms">				
					<form action="indexbmi.php" method="post">
						<h1 class="tittle">Calculator BMI</h1><br>
						<h4 class="text">BMI is an indicator that is calculated by comparing height with body weight</h4>
						<input class="imput" placeholder="Enter name" name="Name" type="text"><br>
						<input id="input" class="imput" placeholder="Enter height [m]" name="Hieght" type="text"><br>
						<input id="input" class="imput" placeholder="Enter weight [kg]" name="weight" type="text"><br>
						<input class="confirm" type="submit">
					</form>
			</div>
		</div>

		<div class="diet">
			<div class="info">
				<h1>
					<?php
					    ini_set('display_errors', 0);
						$name = $_POST['Name'];
						$Hieght = $_POST['Hieght']*$_POST['Hieght'];
						$weight = $_POST['weight'];
						$bmi = $_POST['weight']/$Hieght;

						echo "Hi $name";
					?>
					<?php
						echo "your BMI is: $bmi"
					?>
				</h1>

				<h2 class="secondText">
					<?php
						if($bmi  < 18.5)
						   echo "$name we have observed that you may be underweight";
						elseif($bmi  >= 18.5 && $bmi  <= 24.9)
							echo "$name everything is normal";
						elseif($bmi  > 24.9 && $bmi  <= 29.9)
							echo "$name we have noticed that you may be overweight";
						elseif($bmi  > 29.9 && $bmi  <= 34.9)
							echo "$name we have noticed that you may have problems with being obese class 1";
						elseif($bmi  > 34.9 && $bmi  <= 39.9)
							echo "$name we have noticed that you may have problems with being obese class 2";
						else
							echo "$name we have noticed that you may have big problems with being obese class 3";
					?>
				</h2>
			</div>
		</div>
	</section>
</body>
</html>
