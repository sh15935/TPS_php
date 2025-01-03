# Gestion des Visiteurs

Ce projet est une application de gestion des visiteurs permettant d'ajouter, modifier, afficher, et supprimer des informations dans une base de données. L'application utilise PHP pour la logique côté serveur et suit une architecture modulaire.

## 📁 Structure du projet

```
projet/
│
├── Acces_BD/
│   ├── Visiteur.php          # Contient les fonctions d'accès à la base de données
│   ├── .env                  # Fichier contenant les variables d'environnement (connexion à la DB)
│   └── Connexion.php         # Classe ou fonctions pour gérer la connexion à la base de données
│
├── IHM/
│   ├── affichage.php         # Page affichant la liste des visiteurs
│   ├── form_Saisie.php       # Formulaire pour ajouter un nouveau visiteur
│   └── form_edit.php         # Formulaire pour modifier un visiteur existant
│
├── Gestion_Actions/
│   ├── Afficher.php          # Affiche la liste des visiteurs
│   ├── Ajouter.php           # Ajoute un nouveau visiteur
│   ├── Form_ajout.php        # Formulaire pour ajouter un visiteur
│   ├── Form_edit.php         # Formulaire pour modifier un visiteur
│   ├── Modifier.php          # Modifie un visiteur existant
│   └── Supprimer.php         # Supprime un visiteur
│
├── index.php                 # Page d'accueil de l'application
│
└── README.md                 # Documentation du projet
```

## 🛠️ Fonctionnalités

1. **Ajouter un visiteur :**
   - Permet d’ajouter un nouveau visiteur avec les champs suivants : Nom, Prénom, Email.

2. **Modifier un visiteur :**
   - Permet de modifier les informations d’un visiteur existant.

3. **Afficher la liste des visiteurs :**
   - Affiche la liste complète des visiteurs avec leurs informations.

4. **Supprimer un visiteur :**
   - Permet de supprimer un visiteur via son identifiant.

## 🚀 Installation

1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/sh15935/TP1_php.git
   cd TP1_php/project3/Gestion_Veseteur_v3
   ```

2. **Configurer la base de données :**
   - Importez le fichier SQL (non inclus ici) pour créer la table des visiteurs.
   - Configurez les informations de connexion dans `Acces_BD/.env` :
     ```
     DB_HOST=localhost
     DB_USER=root
     DB_PASSWORD=
     DB_NAME=Gestion_visiteurs_v2
     ```

## ⚙️ Utilisation

1. **Accéder à la liste des visiteurs :**
   Ouvrez `http://localhost/TP1_php/project3/Gestion_Veseteur_v3` pour afficher la liste.

2. **Ajouter un visiteur :**
   Cliquez sur "Ajouter un visiteur" pour accéder au formulaire.

3. **Modifier un visiteur :**
   Cliquez sur "Modifier" dans la liste des visiteurs pour accéder au formulaire de modification.

4. **Supprimer un visiteur :**
   Cliquez sur "Supprimer" pour retirer un visiteur de la liste.

## 📚 API interne

Le dossier `Gestion_Actions` contient des fichiers responsables des différentes actions liées aux visiteurs. Voici les actions disponibles :

| Action      | Description                     | URL Exemple                          |
|-------------|---------------------------------|---------------------------------------|
| afficher    | Affiche la liste des visiteurs  | `Gestion_Actions/Afficher.php`       |
| ajouter     | Ajoute un nouveau visiteur      | `Gestion_Actions/Ajouter.php`        |
| modifier    | Modifie un visiteur existant    | `Gestion_Actions/Modifier.php?id=`  |
| supprimer   | Supprime un visiteur            | `Gestion_Actions/Supprimer.php?id=` |

## 🧪 Test de l’application

1. **Ajouter des visiteurs :** Remplissez le formulaire d'ajout et vérifiez qu'il apparaît dans la liste.
2. **Modifier des visiteurs :** Sélectionnez un visiteur et modifiez ses informations.
3. **Supprimer des visiteurs :** Testez la suppression d’un visiteur.
4. **Afficher la liste :** Vérifiez que la liste des visiteurs est mise à jour après chaque action.

## 📌 Notes

- Assurez-vous que votre serveur local (Apache ou PHP intégré) est configuré pour exécuter des fichiers PHP.
- Activez les erreurs PHP pour faciliter le débogage pendant le développement :
  ```php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  ```

## 💡 Améliorations possibles

1. Intégrer un système d'authentification pour sécuriser l'accès.
2. Ajouter une pagination pour la liste des visiteurs.
3. Implémenter une recherche pour filtrer les visiteurs par nom ou email.
4. Utiliser un framework comme Laravel pour améliorer l'organisation du projet.

## 🖊️ Auteur

- **Nom :** Safae Sahih
- **Email :** safazsahih@gmail.com
