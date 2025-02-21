<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventConnect - Découvrez des événements locaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Ajout de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Top Bar -->
            <div class="hidden lg:flex justify-end items-center py-2 border-b border-gray-100 text-sm">
                <div class="flex items-center space-x-6 text-gray-600">
                    <a href="tel:+33123456789" class="flex items-center hover:text-blue-800">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +33 1 23 45 67 89
                    </a>
                    <a href="mailto:contact@eventconnect.com" class="flex items-center hover:text-blue-800">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        contact@eventconnect.com
                    </a>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="hover:text-blue-800">FR</a>
                        <span class="text-gray-300">|</span>
                        <a href="#" class="hover:text-blue-800">EN</a>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-800 to-emerald-600 bg-clip-text text-transparent">
                        EventConnect
                    </h1>
                    <!-- Navigation Links -->
                    <div class="hidden lg:flex items-center ml-12 space-x-8">
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-medium flex items-center">
                            <span>Événements</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Catégories</a>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Calendrier</a>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Blog</a>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Contact</a>
                    </div>
                </div>

                <!-- Right Navigation -->
                <div class="flex items-center space-x-6">
                    <div class="hidden lg:flex items-center space-x-4">
                        <button class="text-gray-700 hover:text-blue-800">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Connexion</a>
                        <a href="#" class="bg-gradient-to-r from-blue-800 to-emerald-600 text-white px-6 py-3 rounded-lg hover:opacity-90 transition duration-300 font-medium flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            Créer un événement
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-gray-700 hover:text-blue-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="lg:hidden hidden bg-white border-t border-gray-100">
            <div class="px-4 py-6 space-y-4">
                <a href="#" class="block text-gray-700 hover:text-blue-800 font-medium">Événements</a>
                <a href="#" class="block text-gray-700 hover:text-blue-800 font-medium">Catégories</a>
                <a href="#" class="block text-gray-700 hover:text-blue-800 font-medium">Calendrier</a>
                <a href="#" class="block text-gray-700 hover:text-blue-800 font-medium">Blog</a>
                <a href="#" class="block text-gray-700 hover:text-blue-800 font-medium">Contact</a>
                <div class="pt-4 border-t border-gray-100">
                    <a href="#" class="block text-center bg-gradient-to-r from-blue-800 to-emerald-600 text-white px-6 py-3 rounded-lg font-medium">
                        Créer un événement
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Spacer for Fixed Header -->
    <div class="h-32"></div>

    <!-- Hero Section avec image de fond -->
    <div class="relative bg-gradient-to-r from-blue-800 to-emerald-600 text-white">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-5xl font-bold tracking-tight sm:text-6xl mb-8">
                    Créez des Moments<br>Inoubliables
                </h2>
                <p class="mt-6 text-xl max-w-2xl mx-auto">
                    Découvrez et rejoignez des événements exceptionnels qui correspondent à vos passions
                </p>
                <div class="mt-10 flex justify-center gap-x-6">
                    <a href="#" class="bg-white text-blue-800 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                        Explorer les événements
                    </a>
                    <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-800 transition duration-300">
                        Créer un événement
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Events Section -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Événements à la Une</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87" alt="Concert" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-emerald-100 text-emerald-600 text-sm font-medium px-3 py-1 rounded-full">Musique</span>
                        <span class="ml-2 text-sm text-gray-500">25 Juin</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Festival d'été 2024</h3>
                    <p class="text-gray-600 mb-4">Une soirée magique avec les meilleurs artistes locaux</p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-800 font-medium">Paris, France</span>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">Détails →</a>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754" alt="Workshop" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Tech</span>
                        <span class="ml-2 text-sm text-gray-500">30 Juin</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Workshop Innovation</h3>
                    <p class="text-gray-600 mb-4">Découvrez les dernières tendances technologiques</p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-800 font-medium">Lyon, France</span>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">Détails →</a>
                    </div>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819" alt="Sport" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-emerald-100 text-emerald-600 text-sm font-medium px-3 py-1 rounded-full">Sport</span>
                        <span class="ml-2 text-sm text-gray-500">2 Juillet</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Marathon urbain</h3>
                    <p class="text-gray-600 mb-4">Course caritative à travers la ville</p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-800 font-medium">Marseille, France</span>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">Détails →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section avec nouveau style -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-r from-blue-800 to-emerald-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Géolocalisation Intelligente</h3>
                    <p class="text-gray-600">
                        Trouvez instantanément les événements près de chez vous
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-2xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Gestion des RSVP</h3>
                    <p class="text-gray-600">
                        Inscrivez-vous aux événements et gérez vos participations facilement
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-2xl mb-4">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Interactions sociales</h3>
                    <p class="text-gray-600">
                        Commentez et échangez avec les autres participants aux événements
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer avec nouveau style -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">EventConnect</h3>
                    <p class="text-gray-400">
                        Votre plateforme de découverte d'événements locaux
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">À propos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Conditions d'utilisation</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>© 2024 EventConnect. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
