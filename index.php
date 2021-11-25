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
<!DOCTYPE html>
<html>
    <head>
      <title>hello world </title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <body style="font-family:ALGERIAN" style="background-color: rgba(233, 24, 163, 0.082);">
            <div class="p-3 mb-2 bg-transparent text-dark"></div>
            <header <div class="p-3 mb-2 bg-danger text-white"></div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container">
                <img src="image/joli-fond-rouge-dore-espace-texte_1017-32464.jpg" class="img-thumbnail">
                <a class="navbar-brand" href="#" style="font-family:algerian">GROUPE DECO</a>
                  
                 <div class="dropdown">
                
      
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav justify-content-end">
                 
                        <li class="nav-item"><a class="nav-link" href="#"><button type="button" class="btn btn-outline-danger">Acceuille</button></a></li>
                         <li class="nav-item"><a class="nav-link" href="#"><button type="button" class="btn btn-outline-danger">A propos</button></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><button type="button " class="btn btn-outline-danger">Services</button></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><button type="button" class="btn btn-outline-danger">Contact</button></a></li>
                 </ul> 
                    <a class="navbar-brand" href="#"></a>
                    <span class="border-start"></span>
                    <nav class="navbar navbar-light bg-light">
                      <div class="container-fluid">
                        <a class="navbar-brand"></a>
                        <form class="d-flex">
                          <input class="form-control me-2" type="recherche" placeholder="taper ici" aria-label="recherche">
                          <button class="btn btn-outline-primary" type="submit">recherche</button>
                        </form>
                      </div>
                    </nav>
                </ul>
              </div>
            </header>
            
            <p> <h3>Merci de remplir notre formulaire</h3></p>
        
        
    <form method="POST" >
        
        <div  class="col-md-4 ">
          <label for="inputName" class="form-label">Nom</label>
          <input type="text" name='nom' class="form-control" id="exampleInputNom1" aria-describedby="NomHelp">
          
        </div>

        <div class="col-md-4 " >
            
          <label  for="exampleInputPassword1" class="form-label">Prenom</label>
          <input type="text" name='prenom' class="form-control" id="exampleInputPrenom1">
        </div>
        <div class="col-md-4 ">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" name='email' class="form-control" id="exampleInputAdress1" aria-describedby="AdressHelp">
           
          </div>
          <div class="col-md-4 ">
            <label for="exampleInputProfession1" class="form-label">Profession</label>
            <input type="text" class="form-control" id="exampleInputProfession1">
          </div>
         <label for="exampleInputSexe1" class="form-label">Sexe</label>
         <br>
      <div>
         <input type="text" name='sexe' class="form-control" id="exampleInputProfession1">
          </div>
          
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                <input type="Date" name='date' class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <br>
         <br>
              <input type="submit" name="send" value="Envoyer le message"/>
              <div id="statusMessage">
      </form>
      <footer align="center" width="100%" height="30%" style="background-color: rgba(189, 8, 8, 0.938);">
    
        <th>
            <tr>
                <td>
                   <h5>
                   <img src="image/tel.jpg" width="50" height="50"/>
                   Un service client à votre écoute
                   </h5> 
                 </td> 
            </tr>

        </th>                    
                         
        <th>
            <h5>
                <img src="image/mail.jpg" width="50" height="50"/>
               Notre adresse Email
            </h5>
            
        </th>
          
                
            
           <table width="100%" height="50%" align="center">
               <tr>
                   <td>
       <p><h5> SUIVEZ-NOUS SUR:</h5>
        
     <img src="image/facebook.png"/>
        
        <img src="image/instagram.png"/>
        
        <img src="image/twitter.png"/>
        
        <img src="image/YouTube.png"/>
        
        
        
           <h5>
            <p>Copyright © 2021 groupe deco. </p> 
        </h5>
       
                    </td>
                </tr>
                </table>
    </footer>

  
 



        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> 
       
        
    </body>
</html>