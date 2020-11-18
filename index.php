<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {
    session_start();
    //Dump your POST variables
    $_SESSION['POST'] = $_POST;
    // Sending invitation by email
    header('Location: send_email.php');
    exit;

}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}
?>

<!DOCTYPE html>
<html lang="fr">
    <!--
    ______HEAD______________
    [x] html lang
    [x] meta charset
    [x] meta description
    [x] meta viewport
    [x] balise title
    [] favicon 

    ______UX__________________________
    [] augmenter surface d'appuis des <a>
    [] effet hover sur tout ce qui est clickable
    [] label for
    [] champs required avec element visuel qui le montre
    [] placeholder
    [] ancres

    ______UI__________________________
    [] fallback color sur les images
    
    ______BONNES PRATIQUES_____________
    [] virer au maximum les div/classes inutiles
    [] virer imbrications css inutiles
    [] commenter css/html

    ______OPTIMISATION_________________
    [] utilisaton SVG sprite sheet / font icons
    [] compression / crop images 
    [] un seul fichier CSS / JS
    [] images cropées si elles ne s'affichent pas en entier (par exemple sur mobile)
    [] progressive jpeg : https://coding.tools/progressive-jpeg

    ______SEO / ACCESSIBILITE / AUTRES____________
    [] svg role="img", svg <title>, <desc> ??
    [] balises alt des images
    [] balise nav
    [] ul li pour les menus 
    [] attributs width et height sur les images
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site d'inscription a la newsletter de l'université">
        <title>Inscription newsletter</title>
        <link rel="stylesheet" href="./dist/css/main.css">
    </head>
<body class="<?= $body_class ?>">

    <form action="#" method="post">
        <input type="email" name="email" placeholder="Ton email de star..." required/>
        <input type="submit" value="Submit"/>
    </form>

</body>
</html>