# 💬 Chat PHP

Application de messagerie instantanée : inscription, connexion et salon de discussion.

## 🧱 Architecture

| Partie | Technologie | Rôle |
|---|---|---|
| `index.php` | PHP + HTML + CSS | La porte d'entrée (connexion 🔑) |
| `inscription.php` | PHP + HTML + CSS + JS | Le bureau d'inscription (nouveau compte 📝) |
| `chat.php` | PHP + HTML + CSS + JS | Le salon de discussion (les messages 💬) |
| `css/` | CSS | Les vêtements (le style 👕) |
| `js/` | JavaScript | Les muscles (l'interactivité 💪) |
| Base `chat_php` | MySQL | Le carnet d'adresses (comptes 📓) — ✅ créée |

## 🗄️ Base de données

Table `utilisateur` :

| Colonne | Type | Rôle |
|---|---|---|
| `id_u` | INT, PRIMARY, AUTO_INCREMENT | Le numéro de ticket 🎫 |
| `email` | VARCHAR(255) | L'adresse unique du compte 📧 |
| `mdp` | VARCHAR(255) | Le mot de passe crypté 🔐 |

```sql
CREATE TABLE utilisateur (
    id_u INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL
);