# Projet d'Agrégation d'Actualités Dynamiques

Ce projet vise à créer une plateforme d'agrégation d'actualités dynamiques offrant une expérience utilisateur riche et personnalisée. Il utilise les dernières technologies web et suit des normes de performance élevées pour garantir une navigation fluide et une gestion efficace des actualités.

## Fonctionnalités clés

1. **Gestion des Catégories et Actualités Tendances**: Les actualités sont organisées par catégories pour faciliter la navigation, avec une mise en évidence des actualités tendances.

2. **Personnalisation des Préférences Utilisateur**: Les utilisateurs peuvent définir leurs préférences pour recevoir des actualités spécifiques.

3. **Gestion des Favoris**: Possibilité d'ajouter des actualités aux favoris pour un accès rapide ultérieur.

4. **Fonctionnalité de Commentaires**: Les utilisateurs peuvent laisser des commentaires sous chaque actualité pour interagir avec la communauté.

## Critères de Performance

1. **Catégorisation et Actualités Tendances**: Mise en œuvre réussie de la gestion des catégories et des actualités tendances.

2. **Personnalisation des Préférences Utilisateur**: Personnalisation réussie des préférences utilisateur pour la réception d'actualités spécifiques.

3. **Gestion des Favoris**: Ajout et gestion efficace des actualités aux favoris.

4. **Fonctionnalité de Commentaires**: Fonctionnalité de commentaires opérationnelle sous chaque actualité.

5. **Utilisation de PostgreSQL**: Utilisation de PostgreSQL pour le stockage des données.

6. **Environnement Laravel Sail**: Mise en place réussie de l'environnement Laravel Sail.

7. **Gestion des Images avec Spatie Media Library**: Intégration efficace de Spatie Media Library pour la gestion des images associées aux actualités.

8. **Authentification avec Laravel Passport**: Authentification sécurisée avec Laravel Passport.

9. **Mise en Cache pour les Performances**: Utilisation efficace du système de mise en cache pour améliorer les performances.

10. **Génération de Slugs**: Génération correcte de slugs pour chaque actualité.

## Technologies Utilisées

- Laravel
- PostgreSQL
- Docker
- Livewire
- Tailwind CSS
- Spatie Media Library
- Laravel Passport

## Installation et Configuration

1. Clonez ce dépôt sur votre machine locale.
2. Assurez-vous d'avoir Docker installé.
3. Exécutez `docker-compose up -d` pour démarrer l'environnement Laravel Sail.
4. Exécutez les migrations avec `php artisan migrate`.
5. Lancez le serveur avec `php artisan serve`.

## Assignation du rôle Admin à l'Utilisateur

Pour attribuer le rôle "admin" à un utilisateur, exécutez la commande suivante :

```bash
php artisan db:seed --class=AssignRolesToUserSeeder
```
## Contribution

Les contributions sont les bienvenues! N'hésitez pas à ouvrir une issue pour discuter des fonctionnalités que vous souhaitez ajouter ou signaler des problèmes rencontrés.

## Licence

Ce projet est sous licence MIT. Consultez le fichier `LICENSE` pour plus de détails.
