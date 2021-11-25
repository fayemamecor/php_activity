<?php
  include('page2.php');
  if((isset($_POST['nom']) && !empty($_POST['nom']))
  && (isset($_POST['prenom']) && !empty($_POST['prenom']))
  && (isset($_POST['email']) && !empty($_POST['email']))
  && (isset($_POST['profession']) && !empty($_POST['profession']))
  && (isset($_POST['sexe']) && !empty($_POST['sexe']))
  && (isset($_POST['date']) && !empty($_POST['date']))){

	$nom= $_POST['nom'];
  $prenom= $_POST['prenom'];
	$email = $_POST['email'];
	$profession = $_POST['profession'];
	$sexe= $_POST['sexe'];
    $date = $_POST['date'];
	
	//$to = "fayemamecor38@gmail.com";
	//$headers = "From : " . $email;
	

		$query = "INSERT INTO `contact` (nom,prenom,email,profession,sexe,date) VALUES ('$nom', '$prenom', '$email', '$profession', '$sexe', '$date')";
		$result = mysqli_query($connection, $query);
        $succes = "Message a été bien enregistré dans plateforme";

	}
    

?>