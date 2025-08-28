# Système de Gestion d'Échéancier de Crédit (Prototype)

Ce dossier contient une implémentation minimale d'un système de gestion d'échéancier de crédit en PHP 8 avec SQLite. Il illustre une architecture MVC simple.

## Fonctionnalités
- Gestion des clients (liste et ajout)
- Création de crédits avec génération automatique d'échéances mensuelles
- Interface HTML/Bootstrap basique

## Installation
1. Assurez-vous d'avoir PHP 8+ avec l'extension SQLite.
2. Démarrez un serveur local :
   ```bash
   php -S localhost:8000 -t public
   ```
3. Ouvrez [http://localhost:8000](http://localhost:8000) dans votre navigateur.

La base SQLite est créée automatiquement dans `data/app.sqlite`.
