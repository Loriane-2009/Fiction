# 🔧 Backend – Fiction Interactive (Laravel 12)

Ce dossier contient la partie **backend** du projet *Fiction Interactive*, développée avec **Laravel 12**.

Il fournit une **API RESTful** pour gérer les histoires interactives, les chapitres et les choix, ainsi qu’un système d’**authentification avec Sanctum**.

---

## ⚙️ Fonctionnalités du backend

- Création d’histoires, chapitres et choix via migrations et seeders
- API versionnée (`/api/v1`) exposant toutes les ressources
- Authentification Laravel Breeze + Sanctum
- Middleware protégeant les routes sensibles
- Réponses JSON structurées, avec gestion des erreurs
- Base SQLite pour tests locaux ou compatibilité MySQL

---

## 📦 Installation

### 1. Installer les dépendances

```bash
composer install
```

### 2. Configuration de l’environnement

```bash
cp .env.example .env
php artisan key:generate
```

Configurer votre `.env` pour utiliser SQLite ou MySQL.

### 3. Base de données

```bash
php artisan migrate:fresh --seed
```

Les seeders ajouteront une histoire d’exemple complète.

### 4. Lancer le serveur de développement

```bash
php artisan serve
```

API disponible sur : http://localhost:8000/api/v1

---

## 🧪 Endpoints principaux

| Ressource  | Route              | Méthodes |
|------------|--------------------|----------|
| Stories    | `/api/v1/stories`  | GET, POST, PUT, DELETE |
| Chapters   | `/api/v1/chapters` | GET, POST, PUT, DELETE |
| Choices    | `/api/v1/choices`  | GET, POST, PUT, DELETE |
| Auth       | `/login`, `/logout`, `/user` | POST, GET |

---

## 📁 Dossiers clés

- `app/Models` → Modèles Eloquent (`Story`, `Chapter`, `Choice`)
- `app/Http/Controllers/API/V1` → Contrôleurs REST
- `routes/api.php` → Routes API versionnées
- `database/seeders` → Histoires et chapitres d'exemple

---

## 🔐 Authentification

L’authentification se fait via **Sanctum** et l’utilisateur est requis pour créer ou modifier du contenu.

---

## 🧹 Commandes utiles

```bash
php artisan migrate:fresh --seed
php artisan serve
```

---

## 🧾 Licence

Projet réalisé dans le cadre des cours HEIG-VD – DevProdMed / WebMobUI.
