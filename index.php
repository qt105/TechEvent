<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JO 2024</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<?php include 'templates/header.php'?>
<body>
    <div class="section jo-spectateurs">
        <div class="text-content">
            <h2>Les JO des spectateurs</h2>
            <p>A travers leurs récits des épreuves et des sportifs des Jeux, des lycéens se glissent dans la peau des spectateurs commentant.</p>
            <a href="#" class="cta-button">Regarder</a>
        </div>
        <img src="assets\images\indexImages\jo des spectateurs.png" alt="Les JO des spectateurs">
    </div>

    <div class="section epreuves-moment">
        <div class="header-content">
            <h2>Les épreuves du moment</h2>
            <a href="#" class="see-all">Voir toutes les épreuves</a>
        </div>
        <div class="container">
            <div class="case">
                <img src="assets\images\indexImages\handball.png" alt="Handball">
                <p>Handball</p>
                <button>Participer</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\basketball.png" alt="Basketball">
                <p>Basketball</p>
                <button>Participer</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\skateboard.png" alt="Skateboard">
                <p>Skateboard</p>
                <button>Participer</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\course.png" alt="Course">
                <p>Course</p>
                <button>Participer</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\football.png" alt="Football">
                <p>Football</p>
                <button>Participer</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\natation.png" alt="Natation">
                <p>Natation</p>
                <button>Participer</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\sportsequestre.png" alt="Sports Équestres">
                <p>Sports Équestres</p>
                <button>Participer</button>
            </div>
        </div>
    </div>

    <div class="section connaissances">
        <div class="section-header">
            <h2>Testez vos connaissances</h2>
            <a href="#" class="view-all-quiz">Voir tous les quizz</a>
        </div>
        <div class="container">
            <div class="case">
                <img src="assets\images\indexImages\pays.png" alt="Quiz 1">
                <p>Quelle est la parité d'athlètes aux JO 2024</p>
                <button>Quiz</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\YO7PU62EXKSBRUGQBBYACU42JU.jpg" alt="Quiz 2">
                <p>En quelle année les femmes ont pu participer aux JO</p>
                <button>Quiz</button>
            </div>
            <div class="case">
                <img src="assets\images\indexImages\pays.png" alt="Quiz 3">
                <p>Quel pays a le plus de médailles olympiques</p>
                <button>Quiz</button>
            </div>
        </div>
    </div>

    <div class="section epreuves-alentours">
        <div class="text-content">
            <h2>Les épreuves dans vos alentours</h2>
            <p>Plusieurs épreuves se déroulent près de vos villes, allez vite vous inscrire pour y participer!</p>
            <a href="#" class="cta-button">Regarder</a>
        </div>
        <img src="assets\images\indexImages\carte.png" alt="Les épreuves dans vos alentours">
    </div>

    <div class="section athletes">
        <div class="text-content">
            <h2>Vous n'êtes pas loin des athlètes</h2>
            <p>Allez à la rencontre des athlètes participants et découvrez leurs performances.</p>
            <a href="#" class="cta-button">Voir</a>
        </div>
        <img src="assets\images\indexImages\handicapésaute.png" alt="Vous n'êtes pas loin des athlètes">
    </div>

    <div class="section sport-moment">
        <img src="assets\images\indexImages\cecifoot.png" alt="Le sport du moment">
        <div class="text-content">
            <h2>Le sport du moment</h2>
            <p>Sport collectif d’opposition pour déficients visuels, le cécifoot est une adaptation du football. Seuls le gardien de but est voyant, tous les autres joueurs sont non-voyants ou malvoyants. Un ballon avec des clochettes permet de localiser l’objet. Découvrez et participez à cette activité exceptionnelle lors des prochains événements.</p>
            <a href="#" class="cta-button">Participer</a>
        </div>
    </div>

    <div class="section leaderboard">
        <h2>Leaderboard</h2>
        <table>
            <thead>
                <tr>
                    <th>Classement</th>
                    <th>Joueur</th>
                    <th>Pays</th>
                    <th>Épreuve</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lucasz Zieli</td>
                    <td>Pologne</td>
                    <td>100 mètres haies</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Daniel Poyet</td>
                    <td>Brésil</td>
                    <td>100 mètres haies</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sari Cartier</td>
                    <td>États-Unis</td>
                    <td>100 mètres haies</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'templates/footer.php'?>
</body>
</html>
