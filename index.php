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

    <svg width="0" height="0" class="hidden" aria-hidden="true">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239.325 194.271" id="mail">
            <path d="M202.302 43.732L167.59 71.976l-13.858-16.229a3.391 3.391 0 10-5.158 4.4l16.009 18.75a3.392 3.392 0 004.719.428l37.282-30.329a3.391 3.391 0 00-4.281-5.261zm0 0"></path>
            <path d="M177.8 0a61.5 61.5 0 00-61.412 57.927H22.767A22.8 22.8 0 00.193 77.787a3.381 3.381 0 00-.153 1.611c-.024.431-.039.865-.039 1.3v90.8a22.667 22.667 0 005.255 14.535 3.391 3.391 0 001.127 1.253 22.708 22.708 0 0016.385 6.983h135.651a22.7 22.7 0 0016.37-6.968 3.661 3.661 0 00.508-.41 3.389 3.389 0 00.628-.851 22.656 22.656 0 005.263-14.542v-48.536A61.528 61.528 0 00177.8 0zM22.767 64.71h93.588a61.234 61.234 0 0016.716 39.069 62.41 62.41 0 004.744 4.524l-38.109 32.323a14.007 14.007 0 01-18.168.008L7.087 77.592a16.013 16.013 0 0115.68-12.882zm0 122.779a15.93 15.93 0 01-9.592-3.205l40.913-41.842a3.392 3.392 0 10-4.848-4.744L8.724 179.133a15.9 15.9 0 01-1.943-7.632V86.22l70.375 59.59a20.765 20.765 0 0026.936-.012l39.235-33.274a60.754 60.754 0 0031.079 10.44v48.537a15.863 15.863 0 01-1.957 7.658L131.69 137.69a3.391 3.391 0 00-4.836 4.753l41.137 41.856a15.909 15.909 0 01-9.571 3.19zM177.8 116.272a54.165 54.165 0 01-32.4-10.589 3.935 3.935 0 00-.452-.343A55.541 55.541 0 01138 99.12a54.743 54.743 0 1139.8 17.151zm0 0"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.358 50.481" id="vip">
            <path d="M19.28 8.643a.74.74 0 00-.968.4l-1.856 4.432L14.6 9.043a.74.74 0 10-1.364.571l2.538 6.061a.739.739 0 001.364 0l2.538-6.061a.74.74 0 00-.396-.971zm5.706 7.482a.739.739 0 00.74-.739v-2.292h2.2a2.255 2.255 0 100-4.51h-2.94a.74.74 0 00-.739.739v6.062a.74.74 0 00.739.74zm.74-6.062h2.2a.776.776 0 110 1.552h-2.2zm-3.265 5.323V9.324a.74.74 0 10-1.479 0v6.062a.74.74 0 001.479 0zm-2.304 3.615l-1.025 3.155a.167.167 0 01-.158.115h-3.318a1.645 1.645 0 00-.967 2.977l2.684 1.95a.166.166 0 01.06.186l-1.025 3.155a1.646 1.646 0 002.534 1.843l2.684-1.95a.166.166 0 01.2 0l2.684 1.95a1.646 1.646 0 002.532-1.84l-1.025-3.155a.166.166 0 01.06-.186l2.684-1.95a1.646 1.646 0 00-.967-2.977h-3.318a.166.166 0 01-.158-.115l-1.025-3.155a1.646 1.646 0 00-3.136-.003zm1.565.342a.152.152 0 01.159.115l1.025 3.155a1.642 1.642 0 001.565 1.137h3.318a.167.167 0 01.1.3L25.205 26a1.641 1.641 0 00-.6 1.84l1.025 3.155a.167.167 0 01-.257.186l-2.684-1.95a1.641 1.641 0 00-1.935 0l-2.684 1.95a.167.167 0 01-.257-.186l1.025-3.155a1.641 1.641 0 00-.6-1.84l-2.684-1.95a.167.167 0 01.1-.3h3.318a1.642 1.642 0 001.565-1.137l1.025-3.155a.152.152 0 01.16-.115zm0 0"></path>
            <path d="M0 23.192v26.55a.739.739 0 00.739.739h10.08a.74.74 0 000-1.479H3.095l18.584-12.945L40.263 49H14.27a.74.74 0 000 1.479h28.349a.739.739 0 00.739-.739V23.192a.74.74 0 00-.317-.607L37.9 19v-4.63a.74.74 0 10-1.479 0v12.24l-1.481 1.03V7.117a.739.739 0 00-.739-.739 2.683 2.683 0 01-2.68-2.68.739.739 0 00-.739-.739h-18.2a.739.739 0 00-.739.739 2.683 2.683 0 01-2.68 2.68.739.739 0 00-.739.739v7.476a.74.74 0 001.479 0V7.79a4.171 4.171 0 003.347-3.353h16.858a4.171 4.171 0 003.353 3.353v20.88l-9.9 6.9-1.461-1.022a.739.739 0 00-.845 0L19.8 35.566l-9.9-6.9V18.043a.74.74 0 10-1.479 0v9.6L6.939 26.61V2.433a.955.955 0 01.954-.954h27.572a.956.956 0 01.954.954v8.388a.74.74 0 101.479 0V2.433A2.436 2.436 0 0035.465 0H7.893A2.436 2.436 0 005.46 2.433V19L.317 22.586a.739.739 0 00-.317.606zm5.46-2.387v4.775l-3.427-2.388zM18.5 36.467L1.479 48.326V24.609zm23.379 11.859L24.856 36.467l17.023-11.858zM37.9 20.805l3.427 2.387L37.9 25.58zm0 0"></path>
        </symbol>
    </svg>

    <div class="sent">
        <svg class="icon" width="199" height="150">
            <use xlink:href="#mail"></use>
        </svg>
    </div>

    <a href="index.php">Retour</a>

    <form action="#" method="post">
        <input type="email" name="email" placeholder="Ton email de star..." required/>
        <button type="submit" value="Inscris-toi !">
            <p>Inscris-toi !</p>
            <svg class="icon" width="43.358" height="50.481" >
                <use xlink:href="#vip"></use>
            </svg>
        </button>
    </form>
</body>
</html>