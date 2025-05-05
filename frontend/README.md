# 🌐 Frontend – Fiction Interactive (Vue 3 + Vite)

Ce dossier contient la partie **frontend** du projet *Fiction Interactive*, développée avec **Vue 3**, **Vite** et **Tailwind CSS 4**.

Il s'agit d'une **application SPA** (Single Page Application) qui interagit avec l’API Laravel pour permettre à l’utilisateur·rice de naviguer dans des histoires à choix multiples.

---

## ✨ Fonctionnalités principales

- Affichage de la liste des histoires disponibles
- Navigation interactive entre chapitres selon les choix
- Affichage dynamique du contenu
- Sauvegarde de la progression dans le localStorage
- Interface responsive grâce à Tailwind CSS

---

## ⚙️ Installation

### 1. Installation des dépendances

```bash
npm install
```

### 2. Lancement du serveur de développement

```bash
npm run dev
```

L’application sera disponible sur : http://localhost:5173

---

## 📁 Structure des fichiers

- `src/views/` → Pages (liste des histoires, lecture d’un chapitre)
- `src/components/` → Composants réutilisables
- `src/router/` → Configuration du routing Vue Router
- `src/services/api.js` → Requêtes Axios vers l’API Laravel

---

## 🔗 Communication avec le backend

Les appels à l’API Laravel sont faits via Axios, avec stockage du token d’authentification si nécessaire.

---

## 🎨 UI/UX

- Design épuré avec Tailwind CSS
- Mobile-first responsive
- Expérience utilisateur fluide (pas de rechargement de page)

---

## 📦 Commandes utiles

```bash
npm install
npm run dev
```

---

## 🧾 Licence

Projet réalisé dans le cadre des cours HEIG-VD – DevProdMed / WebMobUI.
