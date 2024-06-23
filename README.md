# ECOSERVICE
    ECOSERVICE est une plateforme de vente en ligne de produits éco-responsables.

# Prérequis

- Symfony 7
- PostgreSQL 16

# Installation des dépendances

    composer install

# Migrations

1. Créer le fichier de migration:

    symfony console make:migration

2. Migrer les tables:

    symfony console doctrine:migrations:migrate

# Créer un utilisateur admin
    Exemple de création d'un compte admin avec les identifiants suivants: email: admin@admin.com, mot de passe:  mypassword123.
    
    symfony console app:create-admin admin@admin.com mypassword123

# Exécution de l'application
    symfony server:start

L'application sera accessible sur http://localhost:8000.

# Données de test




    
