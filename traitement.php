<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $Nom = $_POST['Nom'];
     $Prenom = $_POST['Prenom']; 
     $Email = $_POST['Email'];
     $Objet = $_POST['Objet']; 
     $Message = $_POST['Message'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $Nom . ' Prénom : ' . $Prenom . ' Email : ' . $Email . 'Objet :' . $Objet . 'Message :' . $Message; 
     exit;
  }
?>