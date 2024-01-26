<?php
	$host = 'localhost';
	$login = 'root';
	$motpasse = '';
	$bdd = 'L1IRT';

	$link = mysqli_connect($host, $login, $motpasse, $bdd) or die('La connexion a echoue');
	$requete = 'select * from etudiant ';

	$result = mysqli_query($link, $requete);

	echo '<table border = "1" cellpadding="5" cellspacing="0">'
		. '<tr>'
		. '<th>Id</th>'
		. '<th>Nom</th>'
		. '<th>Prenom</th>'
		. '<th>Age</th>'
		. '<th>sexe</th>'
		. '<th>contact</th>'
		. '</tr>';
	while ($ligne = mysqli_fetch_assoc($result))
	{
		echo '<tr>'
			. '<td> <input type = "checkbox" name = "id[]" value = "' . $ligne['id']. '"></td>'
			. '<td>' . $ligne['nom']. '</td>'
			. '<td>' . $ligne['prenom'] . '</td>'
			. '<td>' . $ligne['age'] . '</td>'
			. '<td>' . $ligne['sexe'] . '</td>'
			. '<td>' . $ligne['contact'] . '</td>'
		. '</tr>';
	}

	echo '</table>';
?>