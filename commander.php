<?php
if (isset($_POST['commander'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $plat = htmlspecialchars($_POST['plat']);
    $quantite = htmlspecialchars($_POST['quantite']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $jour = htmlspecialchars($_POST['jour']);

    // Adresse de destination (ta boîte mail)
    $to = "etendajoseph2020@gmail.com"; // <-- remplace par ton adresse mail
    $subject = "Nouvelle commande - Joe Délices";

    $message = "
    Nouvelle commande reçue sur Joe Délices :\n
    -----------------------------------------\n
    Nom / Pseudo : $nom\n
    Téléphone : $telephone\n
    Plat : $plat\n
    Quantité : $quantite\n
    Adresse : $adresse\n
    Jour de livraison : $jour\n
    -----------------------------------------\n
    ";

    $headers = "From: noreply@joedelicesCommande.com\r\n";
    $headers .= "Reply-To: $telephone\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2 style='text-align:center; color:green;'>✅ Votre commande a été envoyée avec succès !</h2>";
        echo "<p style='text-align:center;'><a href='commander.html'>Retour au formulaire</a></p>";
    } else {
        echo "<h2 style='text-align:center; color:red;'>❌ Une erreur est survenue. Le mail n'a pas pu être envoyé.</h2>";
    }
}
?>
