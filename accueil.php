<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a5d5d09acd.js" crossorigin="anonymous"></script>
    <title>BlogSphere - Accueil</title>
    <link rel="stylesheet" href="css/acceuil.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo">BlogSphere</div>
        <input type="search" placeholder="Rechercher des articles...">
        <div class="nav-icons">
             <a href="articles.php" id="startBtn">Start reading</a>
        <div class="write-icon">
         <a href="edition-article.php" title="Écrire un article">
         <i class="fas fa-pen"></i>
          </a>
       </div>

            <div class="notif-icon">
                <i class="fas fa-bell" title="Notifications"></i>
            </div>
            <a href="Dashboard.php">
              <div class="user-profile-icon" title="Mon profil">
              <i class="fas fa-user"></i>
              </div>
             </a>
        </div>
    </nav>

    <div class="pub-espace">
        <marquee behavior="" direction="">
            <h3><span>-10%</span> : Rejoignez-nous dès maintenant et découvrez des milliers d'articles passionnants</h3>
        </marquee>
    </div>

    <main>
        <!-- Section Tendances avec Carrousel -->
        <section class="trends">
            <div class="trends-header">
                <div class="trends-title">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <h2>Tendances du jour</h2>
                </div>
                <div class="carousel-controls">
                    <button class="carousel-btn" id="prevBtn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-btn" id="nextBtn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="carousel-container">
                <div class="carousel-track" id="carouselTrack">
                    <article class="carousel-article">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/28/1a8917/ffffff?text=A" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Alexandre Dubois</span>
                        </div>
                        <h3>L'IA Générative : Révolution ou Évolution ?</h3>
                        <p class="article-snippet">
                            Comment l'intelligence artificielle générative transforme notre façon de créer et de
                            travailler. Une analyse approfondie des enjeux et opportunités...
                        </p>
                        <div class="article-details">
                            <span class="read-time">8 min</span>
                            <span class="publish-date">Aujourd'hui</span>
                            <span class="topic">#IA</span>
                        </div>
                    </article>

                    <article class="carousel-article">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/28/41c9b4/ffffff?text=M" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Marie Chen</span>
                        </div>
                        <h3>Design System : Guide Complet 2025</h3>
                        <p class="article-snippet">
                            Créer et maintenir un design system efficace pour des équipes en croissance. Méthodes,
                            outils et bonnes pratiques...
                        </p>
                        <div class="article-details">
                            <span class="read-time">12 min</span>
                            <span class="publish-date">Hier</span>
                            <span class="topic">#Design</span>
                        </div>
                    </article>

                    <article class="carousel-article">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/28/6b6b6b/ffffff?text=P" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Pierre Martin</span>
                        </div>
                        <h3>Freelancing : Stratégies de Croissance</h3>
                        <p class="article-snippet">
                            Comment passer de freelance solo à agence prospère. Témoignages, erreurs à éviter et
                            conseils pratiques...
                        </p>
                        <div class="article-details">
                            <span class="read-time">10 min</span>
                            <span class="publish-date">Il y a 2 jours</span>
                            <span class="topic">#Business</span>
                        </div>
                    </article>

                    <article class="carousel-article">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/28/e74c3c/ffffff?text=S" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Sophie Dubois</span>
                        </div>
                        <h3>Cybersécurité : Nouvelles Menaces 2025</h3>
                        <p class="article-snippet">
                            Les cyberattaques évoluent, nos défenses aussi. Découvrez les dernières menaces et comment
                            s'en protéger efficacement...
                        </p>
                        <div class="article-details">
                            <span class="read-time">7 min</span>
                            <span class="publish-date">Il y a 3 jours</span>
                            <span class="topic">#Sécurité</span>
                        </div>
                    </article>

                    <article class="carousel-article">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/28/9b59b6/ffffff?text=L" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Lucas Bernard</span>
                        </div>
                        <h3>Blockchain au-delà des Cryptos</h3>
                        <p class="article-snippet">
                            Applications concrètes de la blockchain dans l'industrie, la santé et l'éducation. Un regard
                            pragmatique sur cette technologie...
                        </p>
                        <div class="article-details">
                            <span class="read-time">9 min</span>
                            <span class="publish-date">Il y a 4 jours</span>
                            <span class="topic">#Blockchain</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section Articles Principaux -->
        <div class="main-content">
            <section class="articles-section">
                <h2>Articles récents</h2>
                <div class="articles-list">
                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/1a8917/ffffff?text=A" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Antoine Rousseau</span>
                        </div>
                        <h3>Les Microservices : Architecture du Futur</h3>
                        <p class="article-snippet">
                            Comprendre l'architecture microservices et ses avantages pour le développement
                            d'applications scalables. Guide pratique avec exemples concrets et retours d'expérience...
                        </p>
                        <div class="article-details">
                            <span class="read-time">15 min de lecture</span>
                            <span class="publish-date">24 juillet</span>
                            <span class="topic">#Architecture</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/e67e22/ffffff?text=C" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Camille Dupont</span>
                        </div>
                        <h3>Product Management : De l'Idée au Succès</h3>
                        <p class="article-snippet">
                            Les étapes clés pour transformer une idée en produit qui cartonne. Méthodologies agiles,
                            recherche utilisateur et stratégies de lancement...
                        </p>
                        <div class="article-details">
                            <span class="read-time">11 min de lecture</span>
                            <span class="publish-date">23 juillet</span>
                            <span class="topic">#Product</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/3498db/ffffff?text=J" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Jean-Michel Fortin</span>
                        </div>
                        <h3>Remote Work : Optimiser sa Productivité</h3>
                        <p class="article-snippet">
                            Techniques éprouvées pour maintenir sa performance en télétravail. Organisation, outils,
                            bien-être et équilibre vie pro/perso...
                        </p>
                        <div class="article-details">
                            <span class="read-time">8 min de lecture</span>
                            <span class="publish-date">22 juillet</span>
                            <span class="topic">#Productivité</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/e91e63/ffffff?text=E" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Emma Leroy</span>
                        </div>
                        <h3>Data Science : Débuter sans Background Tech</h3>
                        <p class="article-snippet">
                            Roadmap complète pour se reconvertir en data scientist. Ressources, projets pratiques et
                            conseils de professionnels du secteur...
                        </p>
                        <div class="article-details">
                            <span class="read-time">13 min de lecture</span>
                            <span class="publish-date">21 juillet</span>
                            <span class="topic">#DataScience</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/2ecc71/ffffff?text=T" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Thomas Moreau</span>
                        </div>
                        <h3>Sustainable Tech : Développer Responsable</h3>
                        <p class="article-snippet">
                            Comment réduire l'impact environnemental de nos applications. Green coding, optimisation
                            énergétique et bonnes pratiques durables...
                        </p>
                        <div class="article-details">
                            <span class="read-time">9 min de lecture</span>
                            <span class="publish-date">20 juillet</span>
                            <span class="topic">#Écologie</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/f39c12/ffffff?text=N" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Nadia Benali</span>
                        </div>
                        <h3>UX Writing : L'Art des Mots Qui Convertissent</h3>
                        <p class="article-snippet">
                            Maîtriser l'écriture UX pour créer des interfaces engageantes. Principes, exemples et
                            techniques pour optimiser chaque micro-copy...
                        </p>
                        <div class="article-details">
                            <span class="read-time">7 min de lecture</span>
                            <span class="publish-date">19 juillet</span>
                            <span class="topic">#UXWriting</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/9b59b6/ffffff?text=R" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Raphaël Simon</span>
                        </div>
                        <h3>API Design : Créer des Interfaces Élégantes</h3>
                        <p class="article-snippet">
                            Principes de conception d'APIs REST et GraphQL. Versioning, documentation, sécurité et
                            performance pour des APIs developer-friendly...
                        </p>
                        <div class="article-details">
                            <span class="read-time">12 min de lecture</span>
                            <span class="publish-date">18 juillet</span>
                            <span class="topic">#API</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/e74c3c/ffffff?text=I" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Isabelle Garnier</span>
                        </div>
                        <h3>Personal Branding pour Développeurs</h3>
                        <p class="article-snippet">
                            Construire sa marque personnelle dans la tech. LinkedIn, GitHub, blog personnel et
                            networking stratégique pour booster sa carrière...
                        </p>
                        <div class="article-details">
                            <span class="read-time">10 min de lecture</span>
                            <span class="publish-date">17 juillet</span>
                            <span class="topic">#Carrière</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/34495e/ffffff?text=M" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Maxime Dubois</span>
                        </div>
                        <h3>DevOps : Pipeline CI/CD Moderne</h3>
                        <p class="article-snippet">
                            Mettre en place une chaîne de déploiement automatisée. Docker, Kubernetes, GitHub Actions et
                            monitoring pour des releases sereines...
                        </p>
                        <div class="article-details">
                            <span class="read-time">14 min de lecture</span>
                            <span class="publish-date">16 juillet</span>
                            <span class="topic">#DevOps</span>
                        </div>
                    </article>

                    <article class="article-card">
                        <div class="article-meta">
                            <img src="https://via.placeholder.com/24/1abc9c/ffffff?text=A" alt="Photo de l'auteur"
                                class="author-avatar">
                            <span class="author-name">Amélie Vasseur</span>
                        </div>
                        <h3>Mobile-First : Design pour l'Ère Mobile</h3>
                        <p class="article-snippet">
                            Concevoir des expériences optimales sur mobile. Progressive Web Apps, performance,
                            accessibilité et nouvelles interactions tactiles...
                        </p>
                        <div class="article-details">
                            <span class="read-time">11 min de lecture</span>
                            <span class="publish-date">15 juillet</span>
                            <span class="topic">#Mobile</span>
                        </div>
                    </article>
                </div>
            </section>

            <aside class="sidebar">
                <div class="sidebar-section">
                    <h3 class="sidebar-title">Sujets populaires</h3>
                    <div class="trending-topic">
                        <div class="trending-number">01</div>
                        <div class="trending-title">Intelligence Artificielle</div>
                    </div>
                    <div class="trending-topic">
                        <div class="trending-number">02</div>
                        <div class="trending-title">Développement Web</div>
                    </div>
                    <div class="trending-topic">
                        <div class="trending-number">03</div>
                        <div class="trending-title">Product Management</div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</body>

</html>