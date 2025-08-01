# BlogSphere - Plateforme de Blog Moderne

## 📁 Structure du Projet

```
Frontend/
├── backend/                 # Backend PHP
│   ├── api/                # API endpoints
│   │   ├── get_articles.php # Récupération des articles
│   │   ├── get_article.php  # Récupération d'un article spécifique
│   │   ├── toggle_like.php # Changement d'état d'un like
│   │   ├── get_user_profile.php # Récupération du profil utilisateur
│   │   ├── add_comment.php # Création de commentaires
│   │   ├── check_session.php # Vérification de session
│   │   ├── create_article.php # Création d'articles
│   │   ├── save_article.php # Sauvegarde d'articles
│   │   └── upload_cover.php # Upload d'images
│   ├── classes/            # Classes PHP
│   │   ├── database.php    # Gestion de la BDD
│   │   └── user.php        # Gestion des utilisateurs
│   ├── config/             # Configuration
│   │   ├── config.php      # Configuration centrale
│   │   └── db_schema.sql   # Schéma de la base de données
│   ├── uploads/            # Fichiers uploadés
│   │   ├── covers/         # Images de couverture
│   │   └── avatars/        # Avatars utilisateurs
│   └── .htaccess           # Sécurité du backend
├── css/                    # Styles CSS
├── js/                     # JavaScript
├── assets/                 # Ressources statiques
├── accueil.php           # Page d'accueil
├── articles.php          # Liste des articles
├── article.php           # Affichage d'un article
├── inscription.php       # Page d'inscription
├── connexion.php         # Page de connexion
├── edition-article.php    # Éditeur d'articles
└── userprofile.php       # Profil utilisateur
```

## 🚀 Fonctionnalités

### **Backend (PHP)**
- ✅ **API RESTful** pour la gestion des articles
- ✅ **Système d'authentification** sécurisé
- ✅ **Upload d'images** avec validation
- ✅ **Base de données** MySQL avec PDO
- ✅ **Configuration centralisée** et sécurisée
- ✅ **Gestion des sessions** et sécurité CSRF

### **Frontend (HTML/CSS/JS)**
- ✅ **Éditeur WYSIWYG** avec support Markdown
- ✅ **Affichage des articles** avec filtrage et recherche
- ✅ **Système de likes et commentaires** intégré
- ✅ **Profil utilisateur publique** avec les articles publiés
- ✅ **Profil utilisateur** dashboard avec statistiques
- ✅ **Coloration syntaxique** pour les blocs de code
- ✅ **Interface responsive** et moderne
- ✅ **Gestion des brouillons** et publication
- ✅ **Upload d'images** de couverture
- ✅ **Raccourcis clavier** pour l'édition

## 🛠️ Installation

1. **Cloner le projet**
   ```bash
   git clone [url]
   cd Frontend
   ```

2. **Configurer la base de données**
   ```bash
   # Importer le schéma
   mysql -u root -p < backend/config/db_schema.sql
   ```

3. **Configurer l'application**
   - Modifier `backend/config/config.php` selon votre environnement
   - Ajuster les URLs dans la configuration

4. **Démarrer le serveur**
   ```bash
   php -S localhost:8000
   ```

## 🔧 Configuration

### **Base de données**
- Host: `localhost`
- Database: `Blogsphere`
- User: `root`
- Password: `[votre-mot-de-passe]`

### **Uploads**
- Types autorisés: JPG, PNG, GIF, WebP
- Dossiers: `backend/uploads/covers/` et `backend/uploads/avatars/`

## 📝 Utilisation

1. **Inscription/Connexion** : `inscription.php` ou `connexion.php`
2. **Éditer un article** : `edition-article.php`
3. **Voir les articles** : `articles.php`
4. **Voir un article spécifique** : `article.php?id={id}`
5. **Page d'accueil** : `accueil.php`
6. **Profil utilisateur** : `userprofile.php`
7. **Gestion des brouillons** : Accessible depuis le dashboard utilisateur

## 🔒 Sécurité

- ✅ **Validation des données** côté serveur
- ✅ **Protection CSRF** sur tous les formulaires
- ✅ **Hachage sécurisé** des mots de passe
- ✅ **Validation des fichiers** uploadés
- ✅ **Sessions sécurisées** avec timeout
- ✅ **Accès restreint** au dossier backend

## 🎯 API Endpoints

- `POST /backend/api/create_article.php` - Créer un article
- `POST /backend/api/save_article.php` - Sauvegarder un article
- `POST /backend/api/upload_cover.php` - Upload d'image
- `GET /backend/api/check_session.php` - Vérifier la session
- `GET /backend/api/get_articles.php` - Récupérer tous les articles
- `GET /backend/api/get_article.php?id={id}` - Récupérer un article spécifique
- `POST /backend/api/toggle_like.php` - Changer l'état d'un like
- `POST /backend/api/add_comment.php` - Ajouter un commentaire
- `GET /backend/api/get_user_profile.php?user_id={id}` - Récupérer le profil utilisateur

## 📚 Technologies

- **Backend** : PHP 8+, MySQL, PDO
- **Frontend** : HTML5, CSS3, JavaScript ES6+
- **Éditeur** : Markdown, WYSIWYG, Highlight.js
- **Sécurité** : Sessions PHP, CSRF, Validation
