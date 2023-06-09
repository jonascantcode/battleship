<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Battleship</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="container">
		<div id="containerPlayer">
			<form id="radio">
				<input type="text" id="guessInput" placeholder="Coordinates go here..">
				<input type="button" id="fireButton" value="Click to FIRE!">
			</form>
			<div id="messageArea"></div>
		</div>
		<div id="board">
			<table id="boardgame">
				<tr>
					<td id="00"></td>
					<td id="01"></td>
					<td id="02"></td>
					<td id="03"></td>
					<td id="04"></td>
					<td id="05"></td>
					<td id="06"></td>
				</tr>
				<tr>
					<td id="10"></td>
					<td id="11"></td>
					<td id="12"></td>
					<td id="13"></td>
					<td id="14"></td>
					<td id="15"></td>
					<td id="16"></td>
				</tr>
				<tr>
					<td id="20"></td>
					<td id="21"></td>
					<td id="22"></td>
					<td id="23"></td>
					<td id="24"></td>
					<td id="25"></td>
					<td id="26"></td>
				</tr>
				<tr>
					<td id="30"></td>
					<td id="31"></td>
					<td id="32"></td>
					<td id="33"></td>
					<td id="34"></td>
					<td id="35"></td>
					<td id="36"></td>
				</tr>
				<tr>
					<td id="40"></td>
					<td id="41"></td>
					<td id="42"></td>
					<td id="43"></td>
					<td id="44"></td>
					<td id="45"></td>
					<td id="46"></td>
				</tr>
				<tr>
					<td id="50"></td>
					<td id="51"></td>
					<td id="52"></td>
					<td id="53"></td>
					<td id="54"></td>
					<td id="55"></td>
					<td id="56"></td>
				</tr>
				<tr>
					<td id="60"></td>
					<td id="61"></td>
					<td id="62"></td>
					<td id="63"></td>
					<td id="64"></td>
					<td id="65"></td>
					<td id="66"></td>
				</tr>
			</table>
			<p>i own everythin' ye see on this here website, 'tis me intellectual property. ye can use it as long as ye credit me. - Jonas N.G. Mathe</p>
			<p>to win ye must sink three fleets o' nine ships. call in the coordinates where ye wish to fire</p>
		</div>
		<div id="scores">
			<a href="https://youtu.be/QE22J6wd1Bg" target="_blank" style="background-color: #6495ed; font-size: 50px; ">How to play :)</a>
			<h2>top ten, well done!</h2>
			<?php
			include('highScore.php');
			?>
			<a href="faq.php">Spørsmål og svar</a>
			<div id="refreshContainer"></div>
		</div>
	</div>
	<script src="script.js"></script>
</body>

</html>