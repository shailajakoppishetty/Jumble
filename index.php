<!DOCTYPE html>
<html>
	<head>
  		<title>Jumble</title>
		<script src = "data/utilities.js"></script>
		<script src = "data/indexScript.js"></script>
		<script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/md5.js"></script>
 	</head>
 	<body>
		<h1>JUMBLE!</h1>
		<form>
			<input type="button" id="controlButton" value="Start" onclick="controlClicked()">
			<input type="button" id="instructionsButton" value="Instructions" onclick="instructionsClicked()">
		</form>
		<div style="display:none" align="center" id="game_div">
			<div id="word_div">
				<div style='display:none' id='answer_div'></div>
				Your word is: <div id='cheater'></div><br>
				Your jumbled word is: <div id='real_word'></div><br>
			</div>
			Guess:<input type="text" id="guessInput"><input type="button" value="Submit" id="submitGuess" onclick="handleGuess(guessInput.value)">
			<div id="level_div"></div>
			<div align="center" id="result_div"/>
		</div>
 	</body>
</html>
