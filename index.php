<form action="searchBeers.php" method="GET">
	vul hier je zoekterm in: <br>
	<input type="text" name="keyword" required> <br><br>

	<input type="radio" name="searchFunction" value="naam" required> Naam Bier<br>
	<input type="radio" name="searchFunction" value="brouwer" required> Brouwer<br>
	<input type="radio" name="searchFunction" value="type" required> Type<br>
	<input type="radio" name="searchFunction" value="kleur" required> Kleur<br>
	
	<input type="submit" value="zoek bieren"><br>

</form>

<a href="selectall.php"> Alle bieren</a>