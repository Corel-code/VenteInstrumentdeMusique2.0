<!DOCTYPE html>/
 <html> 
 <head>
  <meta charset="utf-8" /> 
  <link rel="stylesheet" href="formulaire.css">
  <title> Formulaire html </title> 
</head>
 <body><h2>
 	Votre formulaire
 </h2>


  <div class="img" style="width:100%">
    <form action="dbconnect.php" method="post" class="container">
      <h1>Inscription</h1>

     
      Nom : <input type="text" name="Nom"/></br>
   Prenom : <input type="text" name="Prenom"> </br>
  Email: <input type="text" name="Email"></br>
  Ville : <input type="text" name="Ville"> </br>
  Pays : <input type="text" name="Pays"> </br>
  Numero : <input type="number" name="Numero"></br>
  instru : <input type="text" name="instru"></br>
  Prix : <input type="number" name="Prix"></br>
  <a href="formulairesuite.html">Suivant>></a>
      <button type="submit" class="bouton">Suivant<a href="formulairesuite.html"></a></button>
    </form>
    <?php
    $user = new instrument("getNom()", "getPrenom()","getInstru()",getPrix(),"getEmail()");
?>

 <? php $to  = "getEmail()";
  
$subject  = "Email de confirmation" ;
  
  
$message  .= "<h2> Cher(e) "getNom()", "getPrenom()" </h2> </br>
<h3> nous avons recu votre commande de l'instrument "getInstru()" de prix getPrix()</h3>";
  
$header  = "From:customerservices@gmail.com \r\n" ;
  
  $retval  =mail  ( $to , $subject , $message , $header );
  
 if ($retval  == true ) {
  echo 
 "Message envoyé..." ;
 }
 else
 {
  echo 
 "Message non envoyé..." ;  
 }
  </div>
</body>
</html>

   

     </body>
      </html>
