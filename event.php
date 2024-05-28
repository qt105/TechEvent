<?php
require_once 'app/functions.php';
include 'templates/header.php';

$eventId = isset($_GET['id']) ? $_GET['id'] : die('ID de l\'activité non spécifié.');
$event = getEventById($pdo, $eventId);
$eventP1 = getEventById($pdo, $eventId+1);
$eventP2 = getEventById($pdo, $eventId+2);
$eventP3 = getEventById($pdo, $eventId+3);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/eventStyle.css">
    <title><?php echo $event->name ?></title>
</head>
<body>
    <h5>
        Accueil > Les épreuves sportives > <?php echo $event->name ?>
    </h5>
    <h1>
        <?php echo $event->name ?>
    </h1>
        <div class="image-container">
            <img src="assets\images\eventImages\imgById\<?php echo $event->image?>" alt="image de">
            
            <div class="description">
                <div class="titreDesciption">
                    <h4>
                    <?php echo $event->name ?>
                    </h4>
                    <p><?php echo $event->description ?></p>
                    <p>L'activité durera <?php echo $event->duration?> heures</p>
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
                            <a href="">s'inscrire à l'évènement</a>
                        </p>
                    </h3>
                </div>
            </div>
        </div>
    <h2>
        D'autres épreuves à venir
    </h2>
        <div class="imagesSimilaires">
            <img src="assets\images\eventImages\imgById\<?php if($eventP1){
                    echo $eventP1->image;
                }else{
                    echo "missing.png";
                } ?>" alt="event+1 image">
            <img src="assets\images\eventImages\imgById\<?php if($eventP2){
                    echo $eventP2->image;
                }else{
                    echo "missing.png";
                } ?>" alt="event+2 image">
            <img src="assets\images\eventImages\imgById\<?php if($eventP3){
                    echo $eventP3->image;
                }else{
                    echo "missing.png";
                } ?>" alt="event+3 image">
            <div class="container ">
                <p><?php if($eventP1){
                    echo $eventP1->name;
                }else{
                    echo "Pas encore d'évènement";
                } ?></p>
                
                <p><?php if($eventP2){
                    echo $eventP2->name;
                }else{
                    echo "Pas encore d'évènement";
                }?></p>
                
                <p><?php if($eventP3){
                    echo $eventP3->name;
                }else{
                    echo "Pas encore d'évènement";
                }?></p>
                
            </div>
            <div class="container">
                <u class="u_CTA"><a href="event.php?id=<?php echo $eventId+1 ?>"><p>En savoir plus</p></a></u>
                <u class="u_CTA"><a href="event.php?id=<?php echo $eventId+2 ?>"><p>En savoir plus</p></a></u>
                <u class="u_CTA"><a href="event.php?id=<?php echo $eventId+3 ?>"><p>En savoir plus</p></a></u>
            </div>
        </div>
    <h2>
        Plus d'information sur le lieux de l'évènement
    </h2>
    <h3 class="h3_circuit">
        Voici l'emplacement de cette activité
    </h3>
    <div class="parcourCourse">
        <img src="assets\images\eventImages\locationImage\<?php echo $event->mapImage ?>" alt="Parcour activité">
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
