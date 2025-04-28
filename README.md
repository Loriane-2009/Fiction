# Fiction Interactive - Fullstack Laravel & Vue.js

Bienvenue sur **Fiction Interactive**, un projet fullstack développé en **Laravel 12** et **Vue 3** avec **Tailwind CSS 4**.

Ce projet propose une plateforme où l'utilisateur peut choisir parmi différentes histoires interactives et vivre des aventures différentes selon ses décisions.

---

## 🚀 Technologies utilisées

- **Laravel 12** (API REST + Authentification Breeze)
- **Vue 3** (avec Vite)
- **Tailwind CSS 4** (design responsive)
- **MySQL** (ou SQLite pour base de données locale)

---

## 📦 Installation complète du projet

### 1. Cloner le dépôt

```bash
git clone https://github.com/Loriane-2009/Fiction.git
cd Fiction
```

### 2. Installer et configurer le Backend (Laravel)
```
cd backend
composer install
cp .env.example .env
php artisan key:generate
```
Configurer la base de données dans .env (SQLite ou MySQL selon ton besoin).
Ensuite, exécuter les migrations et insérer les données :
```
php artisan migrate:fresh --seed
```
Lancer le serveur :
```
php artisan serve
```
Le backend sera disponible sur http://localhost:8000.

### 3. Installer et configurer le Frontend (Vue 3 + Vite)
Dans un nouveau terminal :
```bash
cd frontend
npm install
npm run dev
```
Le frontend sera disponible sur http://localhost:5173.

## 🛠️ Fonctionnalités principales
- Page d'accueil listant toutes les histoires disponibles
- Navigation interactive entre chapitres en fonction des choix de l'utilisateur
- Plusieurs chemins possibles pour chaque histoire
- Fins différentes selon les choix (victoire ou échec)
- Authentification sécurisée avec Breeze pour l'API
- Design épuré et responsive grâce à TailwindCSS

## 📚 Structure du projet
Dossier | Contenu
/backend | Projet Laravel (API, Auth, Seeders, Migrations)
/frontend | Projet Vue.js 3 (application utilisateur)

# 📋 Commandes rapides utiles

Backend :
    Installer dépendances :
```
composer install
```
Migrer et remplir la base :
```
php artisan migrate:fresh --seed
```
Démarrer Laravel :
```
    php artisan serve
```
Frontend :
    Installer dépendances :
```
npm install
```
Démarrer Vite :
```
    npm run dev
```
# 🎯 À propos du projet
Projet réalisé dans le cadre du cours DevProdMed & WebMobUi à l'HEIG-VD.
Développement par Loriane Magnenat.
