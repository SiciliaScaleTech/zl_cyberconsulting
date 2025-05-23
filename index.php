html : 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z&L CyberConsulting</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
        <?php require_once(__DIR__ . '/header.php'); ?>

        <div class="slogan"><h1>Protégez vos données. Sécurisez votre avenir.</h1></div>  
        <a href="nossolution.php" class="solution"><button class="bouton_solution">Nos Solutions</button></a>  

    <main class="services">
        <a href="services.php"><h2 class="nos_services">Nos services</h2></a>

        <div class="container">
            <article class="article">
                <a href="audit.html"class="article-img"><img src="images/audit de sécurité.png" alt="icone Audit de sécurité"></a>
                <h3><a href="audit.php">Audit</a></h2>
                <p>Notre processus d’audit de cybersécurité vous permet d’évaluer votre conformité à différents référentiels,
                normes de sécurité, lois et réglementations en vigueur. Nous vous aidons à prioriser les actions correctrices à mettre en œuvre pour optimiser
                votre cybersécurité et contrer les menaces potentielles.
                </p>
            </article>
            <hr>
            <article class="article">
                <a href="test-intrusion.html"class="article-img"><img src="images/test intrusion.png" alt="Test d'intrusion"></a>
                <h3><a href="test-intrusion.php">Test d'intrusion</a></h2>
                <p>Une des finalités de votre activité d’indépendant est de vendre vos services. 
                    Cela passe par la rédaction de textes selon la méthode PAS ou AIDA. 
                    Mais au début, pour éviter l’angoisse de la page blanche, il faut faut réaliser une petit travail préalable
                     : identifier les caractéristiques de votre offre et les associer avec le bénéfice (et les sous-bénéfices) apportés au client.
                </p>
            </article>
            <hr>
        </div>   
            <div class="formation">Formation disponible pour particuliers et professionnels - <a href="contact.php" class="ensavoirplus">En savoir plus</a></div> 
    </main> 

        <?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>