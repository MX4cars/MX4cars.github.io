<html>
    <head>
        <title>
MON SITE WEB
        </title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0"> 
        <link rel="stylesheet"  href="project.css">
    </head>
    
    
    
    <body>
    
    
        <h1> MX4 CARS <img src="non.jpg" align="left" width="150px">    </h1>   
        <body id="acceuile">
<header>
   

    <div class="mop">
        <table align="center" border="0" >  
            
              
                
    <tr>
        <td> <a href="project.html"> ACCUEIL <img src="acc.png" width="60px" align="rigth"> </a></td>
    <td>   <a href="login.html"> ESPACE CLIENT<img src="ins.jpg" width="50px" align="rigth"> </a></td> 
    <td>    <a href="connexionadmistrateur.php">  ADMISTRATEUR  <img src="ad.jpg" width="50px" align="rigth"></a> </td>
     <td><a href="conctact.html"> CONTACT <img src="co.png" width="50px" align="rigth"></a> </td>
    
    </tr>
    
        
    
           
    </table>    
     
    </div>
    

</header>

<nav>

 
</nav>
    


<form action="" method="post" autocomplete="off">
    <div class="tab">
    <table border="0">  
        <tr> <td><label for="name">NOM:</label></td>
  <td> <input type="text"  name="nom_e" placeholder=" nom Entreprise" autocomplete="off" ></tr></td>
        
     <tr> <td> <label for="password" >Password:</label></td>
      <td>  <input type="password"  name="motdepasse" placeholder="mot de passe" autocomplete="off"></td>
    </tr> 
      <tr> <td> <input type="submit" value="Connexion"></td>
      <td>  <input type="reset" value="ANNULER"> </td></tr>
        </table>
    </div>

    </form>
    <?php

$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);

@$nom_e=$_POST['nom_e'];
@$motdepasse=$_POST ['motdepasse'];
$requete="SELECT * FROM entreprise WHERE nom_e='$nom_e'&& motdepasse='$motdepasse'";
$resultat=mysqli_query($sum,$requete);

if($resultat->num_rows>0){
  header("Location:admistrateur.html");
}
else {
  echo"nom user ou mot de passe incorrecte";
}
?>