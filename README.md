# Projet Serval (PHP – POO)

## Application de vue à la première personne

### Langages utilisés
- HTML
- CSS
- PHP
- MySQL

## Vue d'ensemble :
Ce projet est une application qui simule une vue à la première personne dans un environnement virtuel, permettant à un utilisateur de naviguer à travers un musée, une maison ou un donjon. L'application est construite en PHP dans un paradigme de Programmation Orientée Objet (POO) et utilise MySQL pour la gestion de la base de données.

### Composants :
- **FirstPersonView** : Gère l'affichage des images en fonction de la position et de la perspective de l'utilisateur.
- **FirstPersonText** : Contrôle l'affichage du texte à l'écran en fonction de la position de l'utilisateur.
- **FirstPersonAction** : Permet l'interaction avec l'environnement (ramasser des objets, utiliser des objets).
- **BaseClass** : Classe parente pour toutes les classes spécialisées, gère le mouvement et l'affichage d'images/textes.

### Base de données :
- **Tables** : "images", "map", "text", "actions", "items"
- **Structure** : Contient des données d'image et de texte correspondant aux positions de la carte, et des actions/objets pour l'interaction.

### Méthodologie de développement :
1. Conception du Modèle Conceptuel de Données (CDM) pour la base de données.
2. Création de la base de données "fpview" et des tables correspondantes.
3. Développement de la classe **Database** pour gérer la connexion à la base de données.
4. Implémentation de la fonction d'autoload pour charger automatiquement les classes.
5. Développement de la mise en page HTML/CSS et de la fonctionnalité de navigation de base.
6. Développement de classes spécialisées pour la gestion des images, du texte et des actions.
7. Refactorisation du code pour respecter le principe DRY.
8. Expansion de la base de données et des classes pour gérer l'interaction avec l'environnement.

## Exécution :
Pour lancer l'application :
1. Configurez un serveur web (par exemple, Apache) avec PHP et MySQL.
2. Importez le script SQL dans votre base de données.
3. Modifiez le fichier database.php avec les paramètres de connexion à votre base de données.
4. Placez les fichiers dans votre répertoire web.
5. Accédez à l'application via votre navigateur web.

