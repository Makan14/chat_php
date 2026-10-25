# 💬 Chat PHP

Application de messagerie instantanée en PHP / MySQL : inscription, connexion, salon de discussion avec rafraîchissement automatique des messages (AJAX) et déconnexion.

## ✨ Fonctionnalités

- 📝 **Inscription** avec vérifications : champs remplis, mots de passe identiques, email non déjà utilisé
- 🔑 **Connexion** par email + mot de passe, ouvrant une session (`$_SESSION['user']`)
- 🎫 **Page chat protégée** : un « videur » redirige vers la connexion si personne n'est connecté
- 💬 **Salon de discussion** : mes messages en bleu (« Vous »), ceux des autres en gris avec leur email
- 🤖 **Rafraîchissement automatique** : toutes les 500 ms, un script AJAX recharge les messages sans F5
- 🚪 **Déconnexion** : destruction de la session et retour à la page de connexion

## 🧱 Architecture

| Fichier | Rôle |
|---|---|
| `index.php` | La porte d'entrée : formulaire de connexion 🔑 |
| `inscription.php` | Le bureau d'inscription : création de compte 📝 |
| `chat.php` | Le salon de discussion : affiche l'utilisateur, le formulaire d'envoi et le script AJAX 💬 |
| `messages.php` | Le fragment HTML des messages, appelé par l'AJAX (et réutilisable) 🧩 |
| `deconnexion.php` | Détruit la session et redirige vers la connexion 🚪 |
| `connexion_bdd.php` | Le pont vers MySQL (`mysqli_connect` + encodage UTF8) 🌉 |
| `css/style.css` | Les vêtements : tout le style du projet 👕 |
| `js/main.js` | Vérification du mot de passe de confirmation en direct (inscription) 💪 |
| Base `chat_php` | Le carnet : comptes et messages 📓 |

## 🗄️ Base de données

Base : **`chat_php`** — deux tables.

Table `utilisateur` :

| Colonne | Type | Rôle |
|---|---|---|
| `id_u` | INT, PRIMARY, AUTO_INCREMENT | Le numéro de ticket 🎫 |
| `email` | VARCHAR(255), UNIQUE | L'adresse unique du compte 📧 |
| `mdp` | VARCHAR(255) | Le mot de passe 🔐 |

Table `messages` :

| Colonne | Type | Rôle |
|---|---|---|
| `id_m` | INT, PRIMARY, AUTO_INCREMENT | Le numéro du message 🎫 |
| `email` | VARCHAR(255) | L'expéditeur ✉️ |
| `msg` | TEXT | Le texte du message 💬 |
| `date` | DATETIME | L'heure d'envoi (remplie par `NOW()`) ⏰ |

```sql
CREATE TABLE utilisateur (
    id_u INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL
);

CREATE TABLE messages (
    id_m INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    msg TEXT NOT NULL,
    date DATETIME NOT NULL
);
```

## 🚀 Installation (XAMPP)

1. Démarrer **Apache** et **MySQL** dans le panneau de contrôle XAMPP ▶️
2. Copier le dossier du projet dans `C:\xampp\htdocs\chat_php` (ou cloner le dépôt)
3. Ouvrir phpMyAdmin → créer la base `chat_php` → exécuter les deux `CREATE TABLE` ci-dessus 🗄️
4. Naviguer vers `http://localhost/chat_php/index.php` 🌐

##  Parcours de test

1. Créer un compte sur la page **INSCRIPTION** → bandeau vert « compte créé avec succès » sur la page CONNEXION 🟢
2. Se connecter → arrivée sur le **chat** avec son email en haut 💬
3. Envoyer un message → il apparaît dans le cadre bleu « Vous » en moins d'une seconde 🤖
4. Ouvrir `chat.php` en navigation privée → retour automatique à la connexion (le videur travaille !) 🎫
5. Cliquer **Déconnexion** → retour à la page de connexion 🚪

