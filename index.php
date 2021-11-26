<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$connexion = mysqli_connect("localhost", "root", "", "contact") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
	if($result){
		$db_msg = "Vos informations de contact sont enregistrées avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}
//l'envoie du mail
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$toEmail = "fayemamecor38@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    $mail_msg = "Vos informations de contact ont été reçues avec succés.";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "Erreur lors de l'envoi de l'e-mail.";
		$type_mail_msg = "error";
	}
}
?>


<html>
    <head>
      <title>hello world </title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="contact.css" />
		<script type="text/javascript" src="contact.js"></script>
    </head>
    <body>
        
      <!--  <body style="font-family:ALGERIAN" style="background-color: rgba(233, 24, 163, 0.082);">-->
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
            
            
          <h3> Merci de remplir notre formulaire</h3>
            
        
        <div id="box">
		  <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
		    <h3>Formulaire de contact</h3>
		    <label>Nom: <span>*</span></label>
		    <input type="text" id="name" name="name" placeholder="Nom"/>
		    <label>Email: <span>*</span></label><span id="info" class="info"></span>
		    <input type="text" id="email" name="email" placeholder="Email"/>
		    <label>Sujet: <span>*</span></label>
		    <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
		    <label>Message:</label>
		    <textarea id="message" name="message" placeholder="Message..."></textarea>
		    <input type="submit" name="send" value="Envoyer le message"/>
			<div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
		  </form>
	    </div>
    <br><br><br><br>
      <div class="card" class="container">
                 <div class="row"> 
                 <div class="col"> <img src="image/tel.jpg" width="50" height="50"/><span> 774782205</span></div><br><br>
            </div>
            <div class="row"> 
                 <div class="col"> <img src="image/mail.jpg" width="50" height="50"/><span>kormama404@gmail.com</span></div>
   
           <br><br><br><br>
            
               <div class="text-center">   
                 <span>SUIVEZ-NOUS SUR:</span><br>
        
           <img src="image/facebook.png"/>
           
           <img src="image/instagram.png"/>
           
           <img src="image/twitter.png"/>
           
           <img src="image/YouTube.png"/>
               </div>
            </div><br><br><br><br>

          
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> 
       
        
    </body>
</html>