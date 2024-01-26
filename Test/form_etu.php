<?php 
	if (isset($_REQUEST['nom'])) {
		//echo 'On a soumis le formulaire';
		$host = 'localhost';
		$login = 'root';
		$motpasse = '';
		$bdd = 'L1IRT';

		$link = mysqli_connect($host, $login, $motpasse, $bdd) or die('La connexion a echoue');
		$requete = "insert into etudiant values(NULL, '"
		.$_REQUEST['nom']."', '".$_REQUEST['prenom']."', '"
		.$_REQUEST['age']."', '".$_REQUEST['sexe']."', '"
		.$_REQUEST['contact']."')";

		//echo $requete;

		$result = mysqli_query($link, $requete);
		echo 'Votre enregistrement a été sauvegardé';
	}
	else{

?>
<form method="post">

		<p>Nom</p>
			<input type="text" name="nom">
		
		<p>Prenom</p>
			<input type="text" name="prenom">
		
		<p>Age</p>
			<input type="text" name="age">
		
		<p>Sexe</p>
			<input type="text" name="sexe">				
		
		<p>Contact</p>
			<input type="text" name="contact">

		<p>Envoyer</p>	
		<input type="submit" value="Sign In">
	</form>
<?php 
	}
?>