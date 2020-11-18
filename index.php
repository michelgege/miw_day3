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
    [] compression / crop images                                    ATTENTION PHOTO DU PERE NOEL IMMENSE
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
        <button type="submit" value="Inscris-toi !">
            <p>Inscris-toi !</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="43.358" height="50.481" viewBox="0 0 43.358 50.481">
                <path class="a" d="M139.768,87.127a.74.74,0,0,0-.968.4l-1.856,4.432-1.856-4.432a.739.739,0,1,0-1.364.571l2.538,6.061a.739.739,0,0,0,1.364,0l2.538-6.061A.74.74,0,0,0,139.768,87.127Zm0,0" transform="translate(-120.488 -78.484)"/><path class="a" d="M246.65,94.611a.739.739,0,0,0,.74-.739V91.58h2.2a2.255,2.255,0,1,0,0-4.51H246.65a.74.74,0,0,0-.739.739v6.062A.74.74,0,0,0,246.65,94.611Zm.74-6.062h2.2a.776.776,0,1,1,0,1.552h-2.2Zm0,0" transform="translate(-221.664 -78.486)"/><path class="a" d="M214.291,93.872V87.81a.739.739,0,1,0-1.479,0v6.062a.739.739,0,0,0,1.479,0Zm0,0" transform="translate(-191.83 -78.486)"/><path class="a" d="M148.215,182.319l-1.025,3.155a.167.167,0,0,1-.158.115h-3.318a1.645,1.645,0,0,0-.967,2.977l2.684,1.95a.166.166,0,0,1,.06.186l-1.025,3.155A1.646,1.646,0,0,0,147,195.7l2.684-1.95a.166.166,0,0,1,.2,0l2.684,1.95a1.646,1.646,0,0,0,2.532-1.84l-1.025-3.155a.166.166,0,0,1,.06-.186l2.684-1.95a1.646,1.646,0,0,0-.967-2.977h-3.318a.166.166,0,0,1-.158-.115l-1.025-3.155A1.646,1.646,0,0,0,148.215,182.319Zm1.565.342a.152.152,0,0,1,.159.115l1.025,3.155a1.642,1.642,0,0,0,1.565,1.137h3.318a.167.167,0,0,1,.1.3l-2.684,1.95a1.641,1.641,0,0,0-.6,1.84l1.025,3.155a.167.167,0,0,1-.257.186l-2.684-1.95a1.641,1.641,0,0,0-1.935,0l-2.684,1.95a.167.167,0,0,1-.257-.186l1.025-3.155a1.641,1.641,0,0,0-.6-1.84l-2.684-1.95a.167.167,0,0,1,.1-.3h3.318a1.642,1.642,0,0,0,1.565-1.137l1.025-3.155A.152.152,0,0,1,149.78,182.661Zm0,0" transform="translate(-128.058 -163.318)"/><path class="a" d="M0,23.192V49.742a.739.739,0,0,0,.739.739h10.08a.739.739,0,0,0,0-1.479H3.095L21.679,36.057,40.263,49H14.27a.739.739,0,0,0,0,1.479H42.619a.739.739,0,0,0,.739-.739V23.192a.74.74,0,0,0-.317-.607L37.9,19V14.37a.739.739,0,1,0-1.479,0V26.61L34.94,27.64V7.117a.739.739,0,0,0-.739-.739,2.683,2.683,0,0,1-2.68-2.68.739.739,0,0,0-.739-.739h-18.2a.739.739,0,0,0-.739.739,2.683,2.683,0,0,1-2.68,2.68.739.739,0,0,0-.739.739v7.476a.739.739,0,0,0,1.479,0V7.79A4.171,4.171,0,0,0,13.25,4.437H30.108A4.171,4.171,0,0,0,33.461,7.79V28.67l-9.9,6.9L22.1,34.548a.739.739,0,0,0-.845,0L19.8,35.566l-9.9-6.9V18.043a.739.739,0,1,0-1.479,0v9.6L6.939,26.61V2.433a.955.955,0,0,1,.954-.954H35.465a.956.956,0,0,1,.954.954v8.388a.739.739,0,1,0,1.479,0V2.433A2.436,2.436,0,0,0,35.465,0H7.893A2.436,2.436,0,0,0,5.46,2.433V19L.317,22.586A.739.739,0,0,0,0,23.192Zm5.46-2.387V25.58L2.033,23.192ZM18.5,36.467,1.479,48.326V24.609ZM41.879,48.326,24.856,36.467,41.879,24.609ZM37.9,20.805l3.427,2.387L37.9,25.58Zm0,0" transform="translate(0 0)"/>
            </svg>
        </button>
    </form>
</body>
</html>