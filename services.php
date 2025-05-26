<!DOCTYPE html>
<html lang="en">
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
    <main class="services_main">
        <h1 class="service-title">Nos Services</h1>
        <div class="services-container">
            <article class="services-article">
                <img src="images/img-services/audit-vulnérabilité.jpg" alt="image de audit de vulnérabilité" class="services-img-droite">
                    <h2 class="article-title">Audit de Vulnérabilité</h2>
                    <p>
                        Un audit de vulnérabilité permet d'évaluer l’étanchéité des informations inscrites sur un support amovible ou sur un périphérique (laptop, smartphone, tablette). 
                        Cet audit simule principalement l’accès à un périphérique par un attaquant externe, par exemple, à l’issu d’un vol ou d’une intrusion physique dans des locaux d’entreprise
                    </p>
            </article>
            <hr>
            <article class="services-article">
                <img src="images/img-services/audit-dexposition.jpg" alt="image audit d'exposition" class="services-img-gauche">
                    <h2 class="article-title">Audit d'Exposition</h2>
                    <p>
                        Un audit de reconnaissance permet d’identifier la surface d’attaque d’une entreprise, c’est à dire l’ensemble des composantes de son système d’information exposées sur le web. 
                        La plupart du temps, certains éléments sont connus et répertoriés, tandis que d’autres ne le sont pas.
                        L’objectif de ce type d’audits est de dresser une cartographie complète de la surface d’attaque pour ensuite contrôler et limiter les informations visibles et disponibles pour des attaquants, autrement dit réduire la surface d’attaque. 
                        Ils permettent également d’identifier des priorités de sécurité et facilitent la définition du périmètre des pentests qui peuvent être réalisés par la suite pour renforcer le niveau de sécurité.
                    </p>
            </article>
            <hr>
            <article class="services-article">
                <img src="images/img-services/audit-AD.jpg" alt="image AD" class="services-img-droite">
                    <h2 class="article-title">Audit d'Active Directory</h2>
                    <p>
                        Un audit de sécurité Active Directory permet d'identifier les vulnérabilités potentielles, de garantir la conformité aux régulations en vigueur et d'améliorer les performances globales de votre système.
                        le resultat est un rapport d'audit complet présentant les failles de votre AD.
                    </p>
            </article>
            <hr>
            <article class="services-article">
                <img src="images/img-services/pentest-web.jpg" alt="image pentest web" class="services-img-gauche">
                    <h2 class="article-title">Pentest (Test d'intrusion) Web</h2>
                    <p>
                        L’objectif d’un pentest web est d’évaluer la robustesse de votre plateforme web : serveurs, applications front/back offices, webservices et APIs.
                        Le résultat est un rapport de pentest complet permettant aux développeurs de comprendre, et de corriger les failles identifiées. 
                        Pour les éditeurs de solutions qui souhaitent fournir des livrables à leurs clients ou partenaires, ZLCyberConsulting peut produire un deuxième rapport attestant de la correction des failles de sécurité.
                    </p>
            </article>  
            <hr> 
             <article class="services-article">
                <img src="images/img-services/pentest-infrastructure.jpg" alt="image pentest infrastructure" class="services-img-droite">
                    <h2 class="article-title">Pentest (Test d'intrusion) d'Infrastructure</h2>
                    <p>
                        L’objectif d’un pentest d’infrastructure ou de réseau est de tester la sécurité des éléments attaquables depuis l’extérieur (IPs, serveurs) ou depuis l’intérieur de l’entreprise (serveurs, postes de travail, périphériques réseaux).
                        Le résultat est un rapport d’audit présentant les vulnérabilités identifiées ainsi que des pistes opérationnelles pour les corriger.
                    </p>
            </article>    
            <hr>  
    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>