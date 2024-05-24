<?php
require_once 'app/functions.php';
include 'templates/header.php';

$eventId = isset($_GET['id']) ? $_GET['id'] : die('ID de l\'activité non spécifié.');
$event = getEventById($pdo, $eventId);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/eventStyle.css">
    <title><?php
    if ($event) {
        echo $event->name;
    } else {
        echo "Error 404";
    }
    ?></title>
</head>
<body>
    <h5>
        Accueil > Les épreuves sportives > <?php
        if ($event) {
            echo $event->name;
        } else {
            echo "Error 404";
        }
        ?>
    </h5>
    <h1>
        <?php
        if ($event) {
            echo $event->name;
        } else {
            echo "Error 404";
        }
        ?>
    </h1>
        <div class="image-container">
            <img src="assets\images\eventImages\progresser_en_cap.jpg.webp" alt="Coureur">
            
            <div class="description">
                <div class="titreDesciption">
                    <h4>
                    <?php
                        if ($event) {
                            echo $event->name;
                        } else {
                            echo "Error 404";
                        }
                    ?>
                    </h4>
                
                <p>
                    <?php
                    if ($event) {
                        echo $event->description;
                    } else {
                        echo "Error 404";
                    }
                    ?>
                </p>
                </div>
                <div class="CTA-description">
                    <u>
                        <p>
                            Les modalités d'inscriptions
                        </p>
        
                        <p>
                            Les conditions de remboursements
                        </p>
        
                        <p>
                            Le règlement de la course
                        </p>
                    </u>
                </div>

                <div class="placesRestantes">
                    <p>
                    <h4>
                        Il te reste X place disponible avant que le nombre de participant maximal soit atteint
                    </h4>
                    </p>
                </div>
                <div class="inscription">    
                    <h3>
                        <p>
                            s'inscrire à l'évènement
                        </p>
                    </h3>
                </div>
            </div>
        </div>
    <h2>
        D'autres épreuves à venir
    </h2>
        <div class="imagesSimilaires">
            <img src="assets\images\eventImages\cecifoot-ricardinho-hd-1200x800.jpg" alt="Joueur de foot aveugles">
            <img src="assets\images\eventImages\istockphoto-604370074-612x612-1.jpg" alt="Femme qui cour">
            <img src="assets\images\eventImages\Basket-3x3-1-o8adveg5quqb12uo5hoxo3jpgfvfl83y9bwr3bmijo.jpg.webp" alt="Basketball">
            <div class="container ">
                <p>Activité découverte cécifot</p>
                
                <p>Marathon Paris tour</p>
                
                <p>Tournois de basketball outdoor</p>
                
            </div>
            <div class="container">
                <u class="u_CTA"><p>En savoir plus</p></u>
                <u class="u_CTA"><p>En savoir plus</p></u>
                <u class="u_CTA"><p>En savoir plus</p></u>
            </div>
        </div>
    <h2>
        Plus d'information sur le circuit de la course
    </h2>
    <h3 class="h3_circuit">
        Voici le circuit complet qui sera emprunté lors de cette activité
    </h3>
    <div class="parcourCourse">
        <img src="assets\images\eventImages\course 10k V2.png" alt="Parcour course">
    </div>
    <div>
        <h2 class="h2_FAQ">FOIRE AUX QUESTIONS (FAQ)</h2>
        <div class="imgJO">
            <div>
                <p class="questions_FAQ">Où et quand puis-je  récupérer mon dossard ? ></p>
                <p class="questions_FAQ">Où et quand a lieu le départ de la course ? ></p>
                <p class="questions_FAQ">Des ravitaillements sont-ils prévu ? ></p>
                <p class="questions_FAQ">Des barrières horraires sont-elles mises en plance ? ></p>
                <p class="questions_FAQ">Comment accéderau lieu de la course ? ></p>
                <p class="questions_FAQ">Que comprend le prix de mon incription</p>
                <p class="questions_FAQ">Le certificat médical est-il obligatoire ?</p>
                <p class="questions_FAQ">Y a t-il des limites d'âge pour participer ? ></p>
            </div>
            <div>
                <img src="assets\images\eventImages\900px-Logo_JO_d'été_-_Paris_2024.svg.png" alt="logoJO">
            </div>
        </div>
    </div>
</body>
</html>



<?php
include 'templates/footer.php';
?>
