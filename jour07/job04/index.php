<?php
if(isset($_POST["deconnecter"])){
    $var="";
    setcookie("prenom", $var);
    $_COOKIE=$var;

}
if(isset($_POST["connexion"]) && isset($_POST["prenom"] )){
    setcookie("prenom", $_POST["prenom"]);
    $_COOKIE["prenom"] = $_POST["prenom"];
}
if(!isset($_COOKIE["prenom"]))
{
     echo '<form action="index.php" method="post">
     <input type=text name="prenom">
     <button type="submit" name="connexion">Se connecter</button>


    </form>';
 } 
if(isset($_COOKIE["prenom"]) ){
    echo "Bonjour" . " "  . $_COOKIE["prenom"] . "<br />";
    echo '<form action="index.php" method="post">
    <button type="submit" name="deconnecter">Se déconnecter</button>
    </form>';
}


?>