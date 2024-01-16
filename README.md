# Get API REST, Save in DB, Create route for my API
# Application Web de Deals avec PHP

Cette application web PHP récupère des offres depuis l'API CheapShark et les affiche dans une interface conviviale.

## Prérequis

- [Laragon](https://laragon.org/) installé sur votre machine.
- Accès à Internet pour récupérer les données depuis l'API CheapShark.

## Installation

1. Clonez le dépôt dans le répertoire www de Laragon :

    ```bash
    git clone https://github.com/votre-utilisateur/your-deals-app.git
    ```

2. Importez la base de données depuis le fichier `database.sql` dans votre base de données MySQL.

3. Configurez les informations de connexion à la base de données dans le fichier `config.php`.

## Utilisation

1. Lancez Laragon et démarrez le serveur.

2. Accédez à l'application dans votre navigateur à l'adresse suivante : [http://localhost/your-deals-app](http://localhost/your-deals-app)

3. L'application devrait afficher les dernières offres disponibles depuis l'API CheapShark.

## Configuration

Modifiez le fichier `config.php` pour configurer les paramètres de connexion à la base de données et d'autres variables de configuration.

```php
// config.php

define('DB_HOST', 'localhost');
define('DB_USER', 'votre_utilisateur');
define('DB_PASSWORD', 'votre_mot_de_passe');
define('DB_NAME', 'nom_de_votre_base_de_donnees');

define('API_ENDPOINT', 'https://www.cheapshark.com/api/1.0/deals?storeID=1&upperPrice=15');
---

N'oubliez pas de personnaliser ce README en fonction de la structure de votre projet et des besoins spécifiques de votre application.

## Problèmes Connus

Actuellement, il n'y a pas de problèmes connus. N'hésitez pas à [signaler tout problème](https://github.com/votre-utilisateur/your-deals-app/issues).

## Remerciements

Nous remercions l'équipe de CheapShark pour fournir une API de qualité.

## Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE.md](LICENSE.md) pour plus de détails.

